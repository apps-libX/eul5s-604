<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\ContactFormRequest;

class ContactController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ContactFormRequest $request
     *
     * @return Response
     */
    public function store(ContactFormRequest $request)
    {
        $data = [
            'name'         => $request->get('name'),
            'email'        => $request->get('email'),
            'user_message' => $request->get('message'),
        ];
        \Mail::send('emails.contact', $data, function ($message) {
            $message->from(env('MAIL_USERNAME'));
            $message->to(env('MAIL_TO'), 'WebDev');
            $message->subject('Contact Us');
        });

        return \Redirect::route('contact')->with('message', 'Thanks for contacting us!');
    }
}
