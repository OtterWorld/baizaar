<?php

namespace App\Http\Controllers;

use App\JobRequest;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index(Request $request, JobRequest $jobRequest) {
        // dd($request);
        $this->validate($request, [
            "job_id" => 'required|integer',
            "city" => 'required|string',
            "name" => 'required|string',
            "phone" => 'required|string',
            "email" => 'required|email',
            "resume" => 'required|file',
            "comment" => 'required'
        ]);
        
        $folder = \Carbon\Carbon::parse(\Carbon\Carbon::now())->format('FY');
        $filename = Str::random(40).'.'.$request->file('resume')->getClientOriginalExtension();
        $resume = $request->file('resume')->storeAs('job-requests/'.$folder, $filename, 'public');
        
        $file = [];

        array_push($file, [
            'download_link' => $resume,
            'original_name' => $request->file('resume')->getClientOriginalName(),
        ]);

        $resumeFile = json_encode($file);
        
        $jobRequest->create([
            "job_id" => $request->job_id,
            "city" => $request->city,
            "name" => $request->name,
            "phone" => $request->phone,
            "email" => $request->email,
            "resume" => $resumeFile,
            "comment" => $request->comment
        ]);

        // Mail
        return back();
    }
}
