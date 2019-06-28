<?php

namespace App\Http\Controllers;

use App\Advertiser;
use Illuminate\Http\Request;
use App\Mail\MailFromAdvertiser;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Mail;

class AdvertisingsController extends Controller
{
    public function index(Request $request, Advertiser $advertiser) {
        $this->validate($request, [
            "brand" => 'required',
            "type" => 'required',
            "area_needed" => 'required',
            "date" => 'required',
            "conception" => 'required',
            "email" => 'required|email',
            "name" => 'required',
            "additional_information" => 'required',
        ]);

        $advertiser
            ->create([
                "brand" => $request->brand,
                "type" => $request->type,
                "area_needed" => $request->area_needed,
                "date" => $request->date,
                "conception" => $request->conception,
                "email" => $request->email,
                "name" => $request->name,
                "additional_information" => $request->additional_information
            ]);
        Mail::to(setting('site.email'))->send(new MailFromAdvertiser($request->except('_token')));
        return back()->with(['request-succeeded' => 'Ваша заявка принята']);
    }
}
