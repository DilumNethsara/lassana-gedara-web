<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use App\Models\UserLog;
use Illuminate\Http\Request;
use App\Exports\QuotesExport;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class ExportQuoteController extends Controller
{
    public function exportQuote($id){

        $quote = Quote::findOrFail($id);

        $id = $quote->id;
        $title = $quote->title;
        $name = $quote->name."'s ";
        $service = $quote->service." Quotation";

        // return $quote;
        UserLog::create([
            'user_id'  => Auth::user()->id,
            'quote_id' => $quote->id,
            'event' => 'Excel Download',
        ]);

        $id = 'LG-INQ-'.$quote->created_at->format('Y').'-'.sprintf('%04d', $quote->id);
        
        return Excel::download(new QuotesExport($quote), $title.''.$name.''.$service.' '.$id.'.xlsx');
    }
}
