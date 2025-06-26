<?php

namespace App\Http\Controllers;

use App\Mail\EmailModule as MailEmailModule;
use App\Models\EmailModule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['header_title'] = 'Email Module';
        $data['emails'] = EmailModule::get();
        return view('pages.email.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data['header_title'] = 'Create Email';
        return view('pages.email.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'recipient_email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);
        $email = EmailModule::create([
            'to' => $request->recipient_email,
            'subject' => $request->subject,
            'message' => $request->message,
            'cc' => json_encode($request->cc)
        ]);
        $data = [
            'to' => $email->to,
            'subject' => $email->subject,
            'message' => $email->message,
            'cc' => $email->cc ? json_decode($email->cc) : ''
        ];
        Mail::to($request->email)->cc(['bkonline570@gmail.com', 'admin@bkonline.uk', $data['cc']])->send(new MailEmailModule($data));
        return redirect()->back()->with('success', 'Email sent successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(EmailModule $emailModule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EmailModule $emailModule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EmailModule $emailModule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EmailModule $emailModule)
    {
        //
    }
}
