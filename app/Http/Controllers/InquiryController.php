<?php

namespace App\Http\Controllers;

use App\Mail\InquiryEmail;
use App\Models\Inquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function sendInquiry(Request $request)
    {
        if (empty($request->catalogue_register_now)) {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255',
                // 'phone' => 'required|string|max:255',
                // 'call_time' => 'required|string|max:255',
                // 'message' => 'required|string|max:1000',
            ]);
        }

        try {

            $data = [
                'name' => $request->name ?? '',
                'email' => $request->email ?? '',
                'phone' => $request->phone ?? '',
                'call_time' => $request->call_time ?? '',
                'message' => $request->message ?? '',
            ];
            if (!empty($request->first_order_discount)) {
                $data = [
                    'name' => $request->name ?? '',
                    'email' => $request->email ?? '',
                    'phone' => $request->phone ?? '',
                    'call_time' => $request->call_time ?? '',
                    'message' => $request->message ?? '',
                ];
                Mail::to('admin@bkonline.uk')->cc(['bkonline570@gmail.com', $request->email ?? ''])->send(new InquiryEmail($data));
            } else {
                Mail::to('admin@bkonline.uk')->cc(['bkonline570@gmail.com', $request->email ?? ''])->send(new InquiryEmail($data));
            }
    
            Inquiry::create($request->all());
    
            return view('frontend.thankyou');
            // return redirect()->back()->with('success', 'Your inquiry has been sent successfully!');
        } catch (\Exception $e) {
            return view('frontend.thankyou');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Inquiry $inquiry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inquiry $inquiry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inquiry $inquiry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inquiry $inquiry)
    {
        //
    }
}
