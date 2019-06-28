<?php

namespace App\Http\Controllers;

use App\Arendator;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\MailFromArendator;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Mail;

class ArendatorsController extends Controller
{
    public function index(Request $request, Arendator $arendator) {
        $this->validate($request, [
            "shop_name" => 'required',
            "brand" => 'required',
            "activity_profile" => 'required',
            "company_structure" => 'required',
            "target_audience" => 'required',
            "file" => 'required',
            "market_experience" => 'required',
            "target_segment" => 'required',
            "amount_of_opened_shops" => 'required',
            "needed_help" => 'required',
            "floor" => 'required',
            "phones" => 'required',
            "email" => 'required|email',
            "site" => 'required',
            "name" => 'required',
            "additional_information" => 'required',
        ]);
        
        $folder = \Carbon\Carbon::parse(\Carbon\Carbon::now())->format('FY');
        $filename = Str::random(40).'.'.$request->file('file')->getClientOriginalExtension();
        $fileUploaded = $request->file('file')->storeAs('arendators/'.$folder, $filename, 'public');
        
        $file = [];

        array_push($file, [
            'download_link' => $fileUploaded,
            'original_name' => $request->file('file')->getClientOriginalName(),
        ]);

        $arendsatorsFile = json_encode($file);
        
        Arendator::create([
            "shop_name" => $request->shop_name,
            "brand" => $request->brand,
            "activity_profile" => $request->activity_profile,
            "company_structure" => $request->company_structure,
            "target_audience" => $request->target_audience,
            "file" => $arendsatorsFile,
            "market_experience" => $request->market_experience,
            "target_segment" => $request->target_segment,
            "amount_of_opened_shops" => $request->amount_of_opened_shops,
            "needed_help" => $request->needed_help,
            "floor" => $request->floor,
            "phones" => $request->phones,
            "email" => $request->email,
            "site" => $request->site,
            "name" => $request->name,
            "additional_information" => $request->additional_information,   
        ]);

        Mail::to(setting('site.email'))->send(new MailFromArendator($request->except('_token'), $fileUploaded));
        return back()->with(['request-succeeded' => 'Ваша заявка принята']);
    }
}
