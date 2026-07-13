<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Commercial Building Quotation Details</title>
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

    <h2>Laasana Gedara Construction - Commercial Building Quotation Inquiry</h2>

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
      @if (!is_null($quote->additional_details['Business_Company_Name']))
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
      @if (!is_null($quote->additional_details['Alternative_Contact']))
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

    <h3>General Project Information</h3>
    <table>
      <tr>
        <th>Desired Start Date</th>
        <td>{{ $additionalDetails['Desired_Start_Date'] ?? '' }}</td>
      </tr>
      <tr>
        <th>Desired Completion Date</th>
        <td>{{ $additionalDetails['Desired_Completion_Date'] ?? '' }}</td>
      </tr>
      <tr>
        <th>Budget Range</th>
        <td>{{ $additionalDetails['Budget_Range'] ?? '' }}</td>
      </tr>
    </table>

    <h3>Project Details</h3>
    <p><b>Number of Floors:</b> {{ $additionalDetails['Number_of_Floors'] ?? '' }}</p>
    <p><b>Number of Bathrooms per Floor:</b></p>
    <ul>
      @foreach ($additionalDetails['Bathrooms_Per_Floor'] ?? [] as $value)
        @if(!is_null($value) && $value !== '')
          <li>Floor {{ $loop->iteration }}: {{ $value }}</li>
        @endif
      @endforeach
    </ul>
    <p style="{{ empty($additionalDetails['Special_Requests_or_Features']) ? 'display: none;' : '' }}"><b>Special Requests or Features:</b> {{ $additionalDetails['Special_Requests_or_Features'] ?? '' }}</p>
    <p style="{{ empty($additionalDetails['Client_Expectations']) ? 'display: none;' : '' }}"><b>Client Expectations:</b> {{ $additionalDetails['Client_Expectations'] ?? '' }}</p>

    <h3>Building Specifications</h3>
    @php
      $sections = [
        'Structure_Type' => 'Structure Type',
        'Wall_Type_Preferences' => 'Wall Type Preferences',
        'Floor_Type_Preferences' => 'Floor Type Preferences',
        'Roof_Type' => 'Roof Type',
        'Roof_Structure' => 'Roof Structure',
        'Ceiling_Type' => 'Ceiling Type',
        'Roof_Design' => 'Roof Design',
        'Door_&_Window_Materials' => 'Door & Window Materials'
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

    <h3>Door & Window Materials</h3>
    @php
      $sections = [
        'Door_&_Window_Materials' => 'Door & Window Materials'
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

    <h3>Elevator Requirement</h3>
    <table>
      <tr>
        <th>Elevator Requirement</th>
        <td>{{ $additionalDetails['Elevator_Requirement'] ?? '' }}</td>
      </tr>
      @if ($additionalDetails['Elevator_Requirement'] == 'Yes')
      <tr>
        <th>Elevator Type</th>
        <td>{{ $additionalDetails['Elevator_Type'] ?? '' }}</td>
      </tr>
      @endif      
    </table>

    <div style="{{ empty($additionalDetails['Additional_Comments']) ? 'display: none;' : '' }}">
      <h3>Additional Requests or Special Notes</h3>
      <p>{{ $additionalDetails['Additional_Comments'] ?? '' }}</p>
    </div>
  </div>
</body>
</html>
