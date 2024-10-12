<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Contact;
use App\Models\EventAttendee;
use App\Models\ProgramEvent;
use Illuminate\Http\Request;

class ContactController extends Controller
{


    public function get_all_message(){
        $all_messages = EventAttendee::all();
        $events = ProgramEvent::all();
        return view('admin.contact', compact('all_messages', 'events'));
    }

    public function message_delete($id){
        EventAttendee::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Attendee Successfully Deleted',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

}
