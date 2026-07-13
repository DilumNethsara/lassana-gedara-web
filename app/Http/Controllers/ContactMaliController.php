<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactMaliController extends Controller
{
    public function sendMail (Request $request){

        // $request->validate([
        //     'username' => 'required|string',
        //     'phone' => 'required|numeric',
        //     'company' => 'nullable',
        //     'email' => 'required|email',
        //     'message' => 'nullable',
        // ]);

        $validator = Validator::make($request->all(), [
            'username' => 'required|string',
            'phone' => 'required|numeric',
            'company' => 'nullable',
            'email' => 'required|email',
            'message' => 'nullable',
        ]);
    
        // if ($validator->fails()) {
        //     return redirect()->route('contact', ['errors' => 'true', 'scroll' => 'contact'])
        //         ->withErrors($validator)
        //         ->withInput();
        // }

        if ($validator->fails()) {
            return back()  // Redirect back to the previous page
                ->withErrors($validator)  // Pass only the errors to the session
                ->withInput()
                ->with('scroll', 'contact');  // Retain the old input
        }
        
        // ✅ reCAPTCHA validation block (paste after validation)
           $recaptchaResponse = \Illuminate\Support\Facades\Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
          'secret' => config('services.recaptcha.secret_key'),
          'response' => $request->input('g-recaptcha-response'),
          'remoteip' => $request->ip(),
]);

            $recaptchaData = $recaptchaResponse->json();

            if (!isset($recaptchaData['success']) || $recaptchaData['success'] !== true) {
            return back()
           ->withErrors(['captcha' => 'reCAPTCHA verification failed. Please try again.'])
             ->withInput()
            ->with('scroll', 'contact');
}

        Contact::create(request()->all());

        Mail::to('info@lassanagedara.com')->send(new ContactMail($request));
        
        return back()->with('success','Email sent successfully. We will get back to you soon.')->withFragment('contact');
    }
}
