<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Housing Plan Drawing Quotation Details</title>
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

    <h2>Laasana Gedara Construction - Housing Plan Drawing Quotation Inquiry</h2>
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
      @if(!is_null( $quote->additional_details['Business_Company_Name']))
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

    <!-- Building Specifications -->
    <h3>Project Details</h3>
    <table>
      <tr>
        <th>Feature</th>
        <th>Details</th>
      </tr>
      @foreach ([
          'Project_Title' => 'Project Title', 
          'Estimated_Budget' => 'Estimated Budget', 
          'Expected_Start_Date' => 'Expected Start Date',
          'Target_Completion_Date' => 'Target Completion Date'
        ] as $key => $label)
        <tr style="{{ empty($quote->additional_details[$key]) ? 'display: none;' : '' }}">
          <td>{{ $label }}</td>
          <td>{{ $quote->additional_details[$key] ?? 'N/A' }}</td>
        </tr>
      @endforeach
    </table>

    @php
      $materials = [
        'Project_Type'     => 'Project Type',
        'Project_Scope'    => 'Project Scope'
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

    <!-- Materials and Structure -->
    <h3>Land Details</h3>
    <table>
        <tr>
          <th>Feature</th>
          <th>Details</th>
        </tr>
        @foreach ([
            'Land_Size' => 'Land Size', 
            'Land_Cleared' => 'Land Cleared'
          ] as $key => $label)
          <tr>
            <td>{{ $label }}</td>
            <td>{{ $quote->additional_details[$key] ?? 'N/A' }}</td>
          </tr>
        @endforeach
      </table>
  
      @php
        $materials = [
          'Land_Shape'     => 'Land Shape',
          'Land_Topography'    => 'Land Topography'
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
    <h3>House Type & Layout</h3>
    <table>
        <tr>
          <th>Feature</th>
          <th>Details</th>
        </tr>
        @foreach ([
            'Number_of_Floors' => 'Number of Floors', 
            'Total_House_Area' => 'Total House Area'
          ] as $key => $label)
          <tr>
            <td>{{ $label }}</td>
            <td>{{ $quote->additional_details[$key] ?? 'N/A' }}</td>
          </tr>
        @endforeach
      </table>
  
      @php
        $materials = [
          'House_Type'     => 'House Type'
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

      <h3>Room Details</h3>
    <table>
        <tr>
          <th>Feature</th>
          <th>Details</th>
        </tr>
        @foreach ([
            'Number_of_Bedrooms' => 'Number of Bedrooms', 
            'Number_of_Bathrooms' => 'Number of Bathrooms',
            'Number_of_Kitchens' => 'Number of Kitchens',
            'Additional_Room1' => 'Additional Room 1',
            'Additional_Room2' => 'Additional Room 2',
            'Additional_Room3' => 'Additional Room 3',
            'Bedroom1_Size' => 'Bedroom 1 Size',
            'Bedroom2_Size' => 'Bedroom 2 Size',
            'Living_Room_Size' => 'Living Room Size',
            'Kitchen_Size' => 'Kitchen Size',
            'Other_Room_Sizes' => 'Other Room Sizes'
          ] as $key => $label)
          <tr style="{{ empty($quote->additional_details[$key]) ? 'display: none;' : '' }}">
            <td>{{ $label }}</td>
            <td>{{ $quote->additional_details[$key] ?? 'N/A' }}</td>
          </tr>
        @endforeach
      </table>

      <h3>House Type & Layout</h3>
    <table>
        <tr>
          <th>Feature</th>
          <th>Details</th>
        </tr>
        @foreach ([
            'Number_of_Floors' => 'Number of Floors', 
            'Total_House_Area' => 'Total House Area'
          ] as $key => $label)
          <tr>
            <td>{{ $label }}</td>
            <td>{{ $quote->additional_details[$key] ?? 'N/A' }}</td>
          </tr>
        @endforeach
      </table>
  
      @php
        $materials = [
          'House_Type'     => 'House Type'
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
    <h3>Design & Style Preferences</h3>
    @php
      $materials = [
        'Architectural_Style' => 'Architectural Style'
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

    <div style="{{ empty($quote->additional_details['Preferred_Materials']) ? 'display: none;' : '' }}">
      <p><b>Preferred Materials:</b></p>
      <p>{{ $quote->additional_details['Preferred_Materials'] ?? 'N/A' }}</p>
    </div>

    <div style="{{ empty($quote->additional_details['Specific_Requirements']) ? 'display: none;' : '' }}">
      <p><b>Specific Requirements:</b></p>
      <p>{{ $quote->additional_details['Specific_Requirements'] ?? 'N/A' }}</p>
    </div>  

    <!-- Systems and Services -->
    <h3>Site Visit & Inspection</h3>
    <p>{{ $quote->additional_details['Site_Visit_Date'] ?? 'N/A' }}</p>
    

    
  </div>
</body>
</html>
