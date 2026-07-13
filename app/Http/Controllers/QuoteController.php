<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Quote;
use App\Mail\QuoteMail;
use App\Models\UserLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class QuoteController extends Controller
{
        public function updateQuote (Request $request, $id){
        // return $request;

        $mainDetails = $request->only(['Title', 'Name', 'Country_Code', 'Contact', 'Email', 'Address', 'City', 'Postal_Code','Service']);

        $additionalDetails = $request->except(['_token', '_method','Title', 'Name', 'Country_Code', 'Contact', 'Email', 'Address', 'City', 'Postal_Code','Service']);

        $quote = Quote::findOrFail($id);

        $oldValues = $quote->getOriginal();

        // return $oldValues;
        
        $quote->update([
            'title' => $mainDetails['Title'],
            'name' => $mainDetails['Name'],
            'country_code' => $mainDetails['Country_Code'],
            'contact' => $mainDetails['Contact'],
            'email' => $mainDetails['Email'],
            'address' => $mainDetails['Address'],
            'city' => $mainDetails['City'],
            'postal_code' => $mainDetails['Postal_Code'],
            'service' => $mainDetails['Service'],            
            // 'loan' => $mainDetails['Loan'],
            'additional_details' => $additionalDetails,
        ]);

        $quote->refresh();
        $newValues = $quote->toArray();

        // Prepare an array to hold only the changes
        $changes = [];

        foreach ($newValues as $key => $newValue) {
            // Skip timestamps (or any keys you don't want to track)
            if (in_array($key, ['created_at', 'updated_at'])) {
                continue;
            }

            if (array_key_exists($key, $oldValues)) {
                $oldValue = $oldValues[$key];

                if ($key === 'additional_details') {
                    // Ensure both values are arrays (they should be if properly cast)
                    $oldArray = is_array($oldValue) ? $oldValue : json_decode($oldValue, true);
                    $newArray = is_array($newValue) ? $newValue : json_decode($newValue, true);
                    $subChanges = [];
                    foreach ($newArray as $subKey => $subNew) {
                        if (!array_key_exists($subKey, $oldArray) || $oldArray[$subKey] != $subNew) {
                            $subChanges[$subKey] = [
                                'old' => $oldArray[$subKey] ?? null,
                                'new' => $subNew,
                            ];
                        }
                    }
                    if (!empty($subChanges)) {
                        $changes[$key] = $subChanges;
                    }
                } else {
                    if ($oldValue != $newValue) {
                        $changes[$key] = [
                            'old' => $oldValue,
                            'new' => $newValue,
                        ];
                    }
                }
            }
        }

        if (!empty($changes)) {
            UserLog::create([
                'user_id'  => Auth::user()->id,
                'quote_id' => $quote->id,
                'event' => 'Update',
                'changes'  => $changes,
            ]);
        }

        // return $changes;

        return redirect()->back()->with('success', 'Quote updated successfully!');
    }
    public function quote (Request $request){

        // return $request;

        $request->validate([
            'Title' => 'required',
            'Name' => 'required',   
            'Country_Code' => 'required',
            'Contact' => 'required|numeric',
            'Email' => 'required|email',
            'Address' => 'required',
            'City' => 'required',
            'Postal_Code' => 'required',
            // 'Loan' => 'required',0.
            'Service' => 'required'
        ]);

        $data = $request;
        $service = $request->Service;

        if($service == "Domestic House"){
            return view('quote.domestic_house', compact('data'));
        }elseif($service == "Commercial Building"){
            return view('quote.commercial_building', compact('data'));
        }elseif($service == "Interior Designing & Fabrication"){
            return view('quote.interior_designing_and_fabrication', compact('data'));
        }elseif($service == "Architectural Drawing"){
            return view('quote.architectural_drawing', compact('data'));          
        }elseif($service == "Housing Plan Drawing"){
            return view('quote.housing_plan_drawing', compact('data'));          
        }elseif($service == "BOQ"){
            return view('quote.boq', compact('data'));          
        }



        // return $service;

    }

    public function getQuote (Request $request){

        // return $request;
        
        $data = $request->all();
        unset($data['_token']);

        $mainDetails = $request->only(['Title', 'Name', 'Country_Code', 'Contact', 'Email', 'Address', 'City', 'Postal_Code','Service']);

        $additionalDetails = $request->except(['_token','Title', 'Name', 'Country_Code', 'Contact', 'Email', 'Address', 'City', 'Postal_Code','Service']);

        // return $mainDetails['Loan'];

        $quote = Quote::create([
            'title' => $mainDetails['Title'],
            'name' => $mainDetails['Name'],
            'country_code' => $mainDetails['Country_Code'],
            'contact' => $mainDetails['Contact'],
            'email' => $mainDetails['Email'],
            'address' => $mainDetails['Address'],
            'city' => $mainDetails['City'],
            'postal_code' => $mainDetails['Postal_Code'],
            'service' => $mainDetails['Service'],            
            // 'loan' => $mainDetails['Loan'],
            'additional_details' => $additionalDetails,
        ]);

        // return $request;
        

        // return $quote;

        Mail::to('info@lassanagedara.com')->send(new QuoteMail($data, $mainDetails, $additionalDetails, $quote));

        if(Auth::check()){
            UserLog::create([
                'user_id'  => Auth::user()->id,
                'quote_id' => $quote->id,
                'event' => $mainDetails['Service'].' Quotation Add',
            ]);
            return redirect('dashboard')->with('success', 'Quote details has been successfully added.');
        }

        return redirect('quote')->with('success', 'Quote details has been sent successfully. Our team will contact you soon.');
    }
}
