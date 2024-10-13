<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Booking;
use App\Models\Contact;
use App\Models\EventAttendee;
use App\Models\PostCategory;
use App\Models\ProgramEvent;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home(){
        $events = ProgramEvent::paginate(3);
        return view('frontend.home', compact('events'));
    }

    public function event(){
        $events = ProgramEvent::all();
        return view('frontend.event', compact('events'));
    }
    public function event_detail($slug){
        $event = ProgramEvent::where('slug', $slug)->first();
        return view('frontend.event_detail', compact('event'));
    }


    public function attendance_save(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
        ]);

        // Create a new contact record
        $contact = new EventAttendee();
        $contact->full_name = $validatedData['name'];
        $contact->event_id = $request->event_id;
        $contact->email = $validatedData['email'];
        $contact->save();

        $notification = [
            'message' => 'You have successfully registered, Thank you.',
            'alert-type' => 'success'
        ];

        return redirect()->back()->with($notification);
    }

}
