<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BOQ Quotation Details</title>
  <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
  <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
  <style>
    body {
      font-family: Arial, sans-serif;
      /* margin: 0px; */
      padding: 5px;
      background-color: #ffffff;
    }
    .container {
      max-width: 800px;
      background: rgb(255, 255, 255);
      padding: 20px;
      border-radius: 8px;
      border: 1px solid #000000;
    }
    .letterhead {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
      border-bottom: 2px solid #000000;
      padding-bottom: 10px;
    }
    .letterhead .logo img {
      /* max-height: 80px; */
      width: 100%;
    }
    .letterhead .company-details {
      text-align: right;
      font-size: 14px;
    }
    h2 {
      text-align: center;
      font-size: 22px;
      margin-bottom: 20px;
    }
    h3 {
      border-bottom: 1px solid #00000085;
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
      border: 1px solid #8b8080;
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
    <!-- Letterhead Section -->
    <div class="letterhead">
      <div class="logo">
        <img src="{{ public_path('Capture.png') }}" alt="Lassana Gedara Company Logo">
      </div>
    </div>

    <h2>Laasana Gedara Construction - BOQ Quotation Inquiry</h2>
    <!-- Client Information -->
    <h3>Client Information</h3>
    <table>
      <tr>
        <th>Quote Reference No</th>
        <td>LG/INQ/{{ $quote->created_at->format('Y') }}/{{ sprintf('%04d', $quote->id) }}</td>
      </tr>
      <tr>
        <th>Quotation Date</th>
        <td>{{ $quote->created_at->format('Y-m-d') }}</td>
      </tr>
      <tr>
        <th>Name</th>
        <td>{{ ($quote->title ?? '') . ' ' . ($quote->name ?? 'N/A') }}</td>
      </tr>
      <tr>
        <th>NIC/ Passport Number</th>
        <td>{{ $quote->additional_details['NIC_Passport'] ?? 'N/A' }}</td>
      </tr>
      @if(isset( $quote->additional_details['Business_Company_Name']))
      <tr>
        <th>Business/ Company Name</th>
        <td>{{ $quote->additional_details['Business_Company_Name'] ?? 'N/A' }}</td>
      </tr>
      <tr>
        <th>Designation</th>
        <td>{{ $quote->additional_details['Designation'] ?? 'N/A' }}</td>
      </tr>
      @endif
      <tr>
        <th>Contact</th>
        <td>{{ ($quote->country_code ?? '') . ' ' . ($quote->contact ?? 'N/A') }}</td>
      </tr>
      @if(!is_null( $quote->additional_details['Alternative_Contact']))
      <tr>
        <th>Alternate Contact</th>
        <td>{{ ($quote->additional_details['Alternative_Country_Code'] ?? '') . ' ' . ($quote->additional_details['Alternative_Contact'] ?? 'N/A') }}</td>
      </tr>
      @endif
      <tr>
        <th>Email</th>
        <td>{{ $quote->email ?? 'N/A' }}</td>
      </tr>
      <tr>
        <th>Mailing/ Billing Address</th>
        <td>{{ ($quote->address ?? 'N/A') . ', ' . ($quote->city ?? 'N/A') . ', ' . ($quote->postal_code ?? 'N/A') }}</td>
      </tr>
      <tr>
        <th>Project Address</th>
        <td>{{ ($quote->additional_details['Project_Address'] ?? 'N/A') . ', ' . ($quote->additional_details['Project_City'] ?? 'N/A') . ', ' . ($quote->additional_details['Project_Postal_Code'] ?? 'N/A') }}</td>
      </tr>
      <tr>
        <th>Preferred Time for Communication</th>
        <td>{{ $quote->additional_details['Preferred_Time_for_Communication'] ?? 'N/A' }}</td>
      </tr>
      <tr>
        <th>Preferred Method of Contact</th>
        <td>{{ $quote->additional_details['Preferred_Method_of_Contact'] ?? 'N/A' }}</td>
      </tr>
      <tr>
        <th>Requested Service</th>
        <td>{{ $quote->service ?? 'N/A' }}</td>
      </tr>
    </table>

    <h3>Project Details</h3>
    @php
      $materials = [
        'Job_Type' => 'Job Type'
      ];
    @endphp
    @foreach ($materials as $key => $label)
      @if(!empty($quote->additional_details[$key]) && is_array($quote->additional_details[$key]))
        <p><b>{{ $label }}:</b></p>
        <ul>
          @foreach ($quote->additional_details[$key] as $item)
            @if(!empty($item))
              <li>{{ $item }}</li>
            @endif
          @endforeach
        </ul>
      @endif
    @endforeach

    <h3>CAD Drawing Requirements</h3>
    <table>
      <tr>
        <th>Feature</th>
        <th>Details</th>
      </tr>
      @foreach ([
          'CAD_Drawing' => 'Availability of CAD Drawing'
        ] as $key => $label)
        <tr>
          <td>{{ $label }}</td>
          <td>{{ $quote->additional_details[$key] ?? 'N/A' }}</td>
        </tr>
      @endforeach
    </table>

    <!-- Building Specifications -->
    <h3>Building Specifications</h3>
    <table>
      <tr>
        <th>Feature</th>
        <th>Details</th>
      </tr>
      @foreach ([
          'Number_of_Floors' => 'Floors', 
          'Number_of_Rooms' => 'Rooms', 
          'Number_of_Bathrooms' => 'Bathrooms',
          'Living_Room' => 'Living Room', 
          'Dining_Room' => 'Dining Room', 
          'Laundry_Room' => 'Laundry Room',
          'Kitchen' => 'Kitchen',
          'Garage' => 'Garage',
          'Porch/Deck' => 'Porch/Deck',
          'Basement' => 'Basement'
        ] as $key => $label)
        <tr>
          <td>{{ $label }}</td>
          <td>{{ $quote->additional_details[$key] ?? 'N/A' }}</td>
        </tr>
      @endforeach
    </table>

    <!-- Materials and Structure -->
    <h3>Materials and Structure</h3>
    @php
      $materials = [
        'Wall_Type'    => 'Wall Type', 
        'Floor_Type'   => 'Floor Type', 
        'Roof_Type'    => 'Roof Type', 
        'Roof_Structure' => 'Roof Structure',
        'Ceiling_Type' => 'Ceiling Type'
      ];
    @endphp
    @foreach ($materials as $key => $label)
      @if(!empty($quote->additional_details[$key]) && is_array($quote->additional_details[$key]))
        <p><b>{{ $label }}:</b></p>
        <ul>
          @foreach ($quote->additional_details[$key] as $item)
            @if(!empty($item))
              <li>{{ $item }}</li>
            @endif
          @endforeach
        </ul>
      @endif
    @endforeach

    <!-- Door & Window Type -->
    <h3>Door & Window Type</h3>
    @php
      $materials = [
        'Door_&_Window_Type' => 'Door & Window Type'
      ];
    @endphp
    @foreach ($materials as $key => $label)
      @if(!empty($quote->additional_details[$key]) && is_array($quote->additional_details[$key]))
        <p><b>{{ $label }}:</b></p>
        <ul>
          @foreach ($quote->additional_details[$key] as $item)
            @if(!empty($item))
              <li>{{ $item }}</li>
            @endif
          @endforeach
        </ul>
      @endif
    @endforeach

    <!-- Interior Finishes -->
    <h3>Interior Finishes</h3>
    @php
      $materials = [
        'Interior_Finish' => 'Interior Finish',
        'Flooring_in_Other_Areas' => 'Flooring in Other Areas'
      ];
    @endphp
    @foreach ($materials as $key => $label)
      @if(!empty($quote->additional_details[$key]) && is_array($quote->additional_details[$key]))
        <p><b>{{ $label }}:</b></p>
        <ul>
          @foreach ($quote->additional_details[$key] as $item)
            @if(!empty($item))
              <li>{{ $item }}</li>
            @endif
          @endforeach
        </ul>
      @endif
    @endforeach

    <!-- Systems and Services -->
    <h3>Systems and Services</h3>
    @php
      $systems = [
        'Electrical_System' => 'Electrical System', 
        'Plumbing_System'   => 'Plumbing System', 
        'Heating_&_Cooling' => 'Heating & Cooling'
      ];
    @endphp
    @foreach ($systems as $key => $label)
      @if(!empty($quote->additional_details[$key]) && is_array($quote->additional_details[$key]))
        <p><b>{{ $label }}:</b></p>
        <ul>
          @foreach ($quote->additional_details[$key] as $item)
            @if(!empty($item))
              <li>{{ $item }}</li>
            @endif
          @endforeach
        </ul>
      @endif
    @endforeach

    <!-- Sustainability and Accessibility -->
    <h3>Sustainability & Accessibility</h3>
    @php
      $features = [
        'Sustainability_Features' => 'Sustainability Features', 
        'Accessibility_Features'  => 'Accessibility Features'
      ];
    @endphp
    @foreach ($features as $key => $label)
      @if(!empty($quote->additional_details[$key]) && is_array($quote->additional_details[$key]))
        <p><b>{{ $label }}:</b></p>
        <ul>
          @foreach ($quote->additional_details[$key] as $item)
            @if(!empty($item))
              <li>{{ $item }}</li>
            @endif
          @endforeach
        </ul>
      @endif
    @endforeach

    <!-- Project Timeline and Budget -->
    <h3>Project Timeline & Budget</h3>
    <table>
      <tr>
        <th>Start Date</th>
        <td>{{ $quote->additional_details['Desired_Start_Date'] ?? 'N/A' }}</td>
      </tr>
      <tr>
        <th>Completion Date</th>
        <td>{{ $quote->additional_details['Desired_Completion_Date'] ?? 'N/A' }}</td>
      </tr>
      <tr>
        <th>Budget</th>
        <td>Rs. {{ number_format($quote->additional_details['Budget_Range'] ?? 0, 2) }}</td>
      </tr>
    </table>

    <h3>Site Visit & Inspection</h3>
    <table>
      <tr>
        <th>Site Visit Date</th>
        <td>{{ $quote->additional_details['Site_Visit_Date'] ?? 'N/A' }}</td>
      </tr>
    </table>


    <!-- Additional Notes -->
    @if (!empty($quote->additional_details['Additional_Comments']))
    <h3>Additional Requests or Notes</h3>
    <p>{{ $quote->additional_details['Additional_Comments'] ?? 'N/A' }}</p>
    @endif
    
  </div>
</body>
</html>
