<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use App\Models\UserLog;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class PDFController extends Controller
{
    public function generatePDF(Quote $quote){
        // return $quote;
        $id = $quote->id;
        $title = $quote->title;
        $name = $quote->name."'s ";
        $service = $quote->service." Quotation";

        $additionalDetails = $quote->additional_details;

        // return $additionalDetails;

        if ($quote->service == 'Domestic House') {
            $pdf = Pdf::loadView('admin.pdf.domestic_house_quote', compact('quote', 'additionalDetails'));
        }elseif ($quote->service == 'Commercial Building'){
            $pdf = Pdf::loadView('admin.pdf.commercial_building_quote', compact('quote', 'additionalDetails'));
        }elseif ($quote->service == 'Interior Designing & Fabrication'){
            // return $additionalDetails;
            $pdf = Pdf::loadView('admin.pdf.interior_designing_&_fabrication_quote', compact('quote', 'additionalDetails'));
        }elseif ($quote->service == 'Housing Plan Drawing'){
            // return $additionalDetails;
            $pdf = Pdf::loadView('admin.pdf.housing_plan_drawing_quote', compact('quote', 'additionalDetails'));
        }elseif ($quote->service == 'BOQ'){
            // return $additionalDetails;
            $pdf = Pdf::loadView('admin.pdf.boq_quote', compact('quote', 'additionalDetails'));
        }

        UserLog::create([
            'user_id'  => Auth::user()->id,
            'quote_id' => $quote->id,
            'event' => 'PDF Download',
        ]);

        $id = 'LG-INQ-'.$quote->created_at->format('Y').'-'.sprintf('%04d', $quote->id);
        

        
        return $pdf->stream($title.''.$name.''.$service.' '.$id.'.pdf');
    }
}
