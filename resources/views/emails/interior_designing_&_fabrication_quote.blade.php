<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quotation Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            padding: 20px;
            background-color: #f9f9f9;
        }
        .container {
            max-width: 800px;
            background: white;
            padding: 20px;
            border-radius: 8px;
            border: 1px solid #ddd;
        }
        h3 {
            border-bottom: 1px solid #ccc;
            padding-bottom: 5px;
            font-size: 18px;
            margin-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            font-size: 14px;
        }
        th, td {
            padding: 8px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            font-weight: bold;
        }
        ul {
            margin: 5px 0;
            padding-left: 20px;
        }
        p {
            margin: 8px 0;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Introductory Message -->
        <p>Dear Team,</p>
        <p>Please find below the details of a new quotation request for a Interior Designing & Fabrication. Kindly review the information carefully.</p>

        <!-- Client Information -->
        <h3>Client Information</h3>
        <table>
            <tr><th>Quote Reference No</th><td>{{ $quote->id ?? 'N/A' }}</td></tr>
            <tr><th>Quotation Date</th><td>{{ $quote->created_at->format('Y-m-d') }}</td></tr>
            <tr><th>Name</th><td>{{ ($quote->title ?? '') . ' ' . ($quote->name ?? 'N/A') }}</td></tr>
            <tr><th>NIC/ Passport Number</th><td>{{ $quote->additional_details['NIC_Passport'] ?? 'N/A' }}</td></tr>
            @if(!is_null($quote->additional_details['Business_Company_Name']))
            <tr><th>Business/ Company Name</th><td>{{ $quote->additional_details['Business_Company_Name'] ?? 'N/A' }}</td></tr>
            <tr><th>Designation</th><td>{{ $quote->additional_details['Designation'] ?? 'N/A' }}</td></tr>
            @endif
            <tr><th>Contact</th><td>{{ ($quote->country_code ?? '') . ' ' . ($quote->contact ?? 'N/A') }}</td></tr>
            @if (!empty($quote->additional_details['Alternative_Contact']))
            <tr><th>Alternate Contact</th><td>{{ ($quote->additional_details['Alternative_Country_Code'] ?? '') . ' ' . ($quote->additional_details['Alternative_Contact'] ?? 'N/A') }}</td></tr>
            @endif            
            <tr><th>Email</th><td>{{ $quote->email ?? 'N/A' }}</td></tr>
            <tr><th>Mailing/ Billing Address</th><td>{{ ($quote->address ?? 'N/A') . ', ' . ($quote->city ?? 'N/A') . ', ' . ($quote->postal_code ?? 'N/A') }}</td></tr>
            <tr><th>Project Address</th><td>{{ ($quote->additional_details['Project_Address'] ?? 'N/A') . ', ' . ($quote->additional_details['Project_City'] ?? 'N/A') . ', ' . ($quote->additional_details['Project_Postal_Code'] ?? 'N/A') }}</td></tr>
            <tr><th>Preferred Time for Communication</th><td>{{ $quote->additional_details['Preferred_Time_for_Communication'] ?? 'N/A' }}</td></tr>
            <tr><th>Preferred Method of Contact</th><td>{{ $quote->additional_details['Preferred_Method_of_Contact'] ?? 'N/A' }}</td></tr>
            <tr><th>Requested Service</th><td>{{ $quote->service ?? 'N/A' }}</td></tr>
        </table>

        <!-- Project Overview -->
        <h3>Project Overview</h3>
        @php
            $sections = [
                'Type_of_Project' => 'Type of Project',
                'Project_Scope' => 'Project Scope'
            ];
        @endphp
        @foreach ($sections as $key => $label)
            @if (!empty($additionalDetails[$key]) && is_array($additionalDetails[$key]))
                <p><b>{{ $label }}:</b></p>
                <ul>
                    @foreach ($additionalDetails[$key] as $value)
                        @if(!empty($value))
                            <li>{{ $value }}</li>
                        @endif
                    @endforeach
                </ul>
            @endif
        @endforeach

        <p><b>Nature of Work:</b></p>
        <ul>
            <li>{{ $additionalDetails['Nature_of_Work'] }}</li>
        </ul>

        <!-- Additional Requests or Special Notes -->
        <div style="{{ empty($additionalDetails['Additional_Comments']) ? 'display: none;' : '' }}">
            <h3>Additional Requests or Special Notes</h3>
            <p>{{ $additionalDetails['Additional_Comments'] ?? '' }}</p>
        </div>        
    </div>
</body>
</html>
