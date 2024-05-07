<?php

namespace App\Http\Controllers;

use App\Mail\HelloMail;
use App\Models\enovateCustomer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class mailSender extends Controller
{


    public function store(Request $request)
    {

        $enoData = [
            'c_name' => $request->c_name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ];

        enovateCustomer::create($enoData);
        Mail::to('seneshpawan84@gmail.com')->send(new HelloMail($enoData));
        Mail::to('navodaoshini@gmail.com')->send(new HelloMail($enoData));
        Mail::to('nirmaldhanushka677@gmail.com')->send(new HelloMail($enoData));
        Mail::to('isiradinethdunukara01@gmail.com')->send(new HelloMail($enoData));
        Mail::to('isiradinethdunukara01@gmail.com')->send(new HelloMail($enoData));
        Mail::to('sheranavushka@gmail.com')->send(new HelloMail($enoData));
        Mail::to('thamodiniwijekoon@gmail.com')->send(new HelloMail($enoData));
        Mail::to('sanjuindeewara98@gmail.com')->send(new HelloMail($enoData));

        return response()->json([
            'status' => 200,
        ]);

    }

}
