<?php

namespace App\Http\Controllers;

use App\Contact;
use App\ShopSchedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index(Contact $contact, ShopSchedule $schedule) {
        
        $contacts = $contact->first();
        $schedules = $schedule->get();
        
        if($schedules->count() > 2) {
            $schedules = $schedules->split(3);
        }
        return view('schedules.index', compact('contacts', 'schedules'));
    }
}
