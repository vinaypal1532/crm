<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification; 

use Illuminate\Support\Facades\URL;

class MainController extends Controller
{
    public function index()
    {
       
        return view('frontend/home');
    }


    public function about()
    {
        return view('frontend/about');
    }
    public function contact()
    {
        return view('frontend/contact');
    }
   
   

    
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required',
        'details' => 'required',
        'destination' => 'required',
        'date' => 'required',
    ]);

    // Retrieve or create a Contact
    $userSchema = Contact::firstOrCreate(['email' => $validatedData['email']], $validatedData);

    // Create a new Contact
    $contact = Contact::create($validatedData);

    // Notify the user using the UserNotification class
    Notification::send($userSchema, new UserNotification($contact));
    $userSchema->notify(new ContactSMS());

    return response()->json(['success' => 'Data inserted successfully']);
}



    public function sendOfferNotification() {
       
        $userSchema = Contact::first();
  
        $contact = [
            'name' => 'BOGO',
            'body' => 'You received an offer.',
            'thanks' => 'Thank you',
            'offerText' => 'Check out the offer',
            'offerUrl' => url('/'),
            'offer_id' => 007
        ];
        $userSchema->notify(new UserNotification($contact));
        //Notification::send($userSchema, new UserNotification($contact));
   
        dd('Task completed!');
    }

}
