<?php

namespace App\Listeners;

use App\Events\NewRegistration;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegistrationNotifyEmail;

class RegistrationEmailSent implements ShouldQueue
{
    /**
     * Create the event listener.
     */


     use InteractsWithQueue;

    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(NewRegistration $event)
    {
        $student = $event->student; 


        $firstname =  $student->user_fname;
        $middlename =  $student->user_mname;
        $lastname =  $student->user_lname;
        $dob =  $student->user_birthday;
        $email =  $student->email;
        $phone = $student->user_phone;
        $licenseState = $student->license_state;
        $license_number =  $student->license_number;
        $username =  $student->username;
        $address =  $student->user_address;
        $city =  $student->user_city;
        $state =  $student->user_state;
        $zipcode =  $student->user_zipcode;
        $find =  $student->source;
        
        



        $formData = [
            'firstname' =>  $firstname ,
            'middlename' =>  $middlename ,
            'lastname' => $lastname,
            'dob' => $dob,
            'email' => $email,
            'phone' => $phone,
            'licenseState' =>  $licenseState,
            'license_number' =>  $license_number,
            'username' =>  $username,
            'address' => $address,
            'city' => $city,
            'state' => $state,
            'zipcode' =>$zipcode ,
            'find' => $find
        ];

      //  dd($formData);


        Mail::to($email)->send(new RegistrationNotifyEmail($formData));

        Mail::to('companyuiux@gmail.com')->send(new RegistrationNotifyEmail($formData));


    }
}
