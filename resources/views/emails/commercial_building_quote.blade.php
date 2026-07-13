{{-- <!DOCTYPE html>
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
        <p>Please find below the details of a new quotation request for a domestic house. Kindly review the information carefully.</p>

        <!-- Client Information -->
        <h3>Client Information</h3>
    <table>
      <tr>
        <th>Quote Reference No</th>
        <td>{{ $quote->id ?? '' }}</td>
      </tr>
      <tr>
        <th>Name</th>
        <td>{{ ($quote->title ?? '') . ' ' . ($quote->name ?? '') }}</td>
      </tr>
      <tr>
        <th>Contact</th>
        <td>{{ ($quote->country_code ?? '') . ' ' . ($quote->contact ?? '') }}</td>
      </tr>
      <tr>
        <th>Email</th>
        <td>{{ $quote->email ?? '' }}</td>
      </tr>
      <tr>
        <th>Address</th>
        <td>{{ ($quote->address ?? '') . ', ' . ($quote->city ?? '') . ', ' . ($quote->postal_code ?? '') }}</td>
      </tr>
      <tr>
        <th>Requested Service</th>
        <td>{{ $quote->service ?? '' }}</td>
      </tr>
      <tr>
        <th>Preferred Communication Method</th>
        <td>{{ $additionalDetails['Preferred_Communication_Method'] ?? '' }}</td>
      </tr>
    </table>

    <h3>General Project Information</h3>
    <table>
      <tr>
        <th>Project Location</th>
        <td>{{ $additionalDetails['Project_Location'] ?? '' }}</td>
      </tr>
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
    <p><b>Special Requests or Features:</b> {{ $additionalDetails['Special_Requests_or_Features'] ?? '' }}</p>
    <p><b>Client Expectations:</b> {{ $additionalDetails['Client_Expectations'] ?? '' }}</p>

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

    <h3>Additional Requests or Special Notes</h3>
    <p>{{ $additionalDetails['Additional_Comments'] ?? '' }}</p>

        
    </div>
</body>
</html> --}}


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
    <p>Please find below the details of a new quotation request for a Commercial Building. Kindly review the information carefully.</p>

    <!-- Client Information -->
    <h3>Client Information</h3>
    <table>
      <tr>
        <th>Quote Reference No</th>
        <td>{{ $quote->id ?? '' }}</td>
      </tr>
      <tr>
        <th>Quotation Date</th>
        <td>{{ $quote->created_at->format('Y-m-d') ?? '' }}</td>
      </tr>
      <tr>
        <th>Name</th>
        <td>{{ ($quote->title ?? '') . ' ' . ($quote->name ?? '') }}</td>
      </tr>
      <tr>
        <th>NIC/Passport Number</th>
        <td>{{ $quote->additional_details['NIC_Passport'] ?? '' }}</td>
      </tr>
      @if(!empty($quote->additional_details['Business_Company_Name']))
      <tr>
        <th>Business/Company Name</th>
        <td>{{ $quote->additional_details['Business_Company_Name'] ?? '' }}</td>
      </tr>
      <tr>
        <th>Designation</th>
        <td>{{ $quote->additional_details['Designation'] ?? '' }}</td>
      </tr>
      @endif
      <tr>
        <th>Contact</th>
        <td>{{ ($quote->country_code ?? '') . ' ' . ($quote->contact ?? '') }}</td>
      </tr>
      @if(!empty($quote->additional_details['Alternative_Contact']))
      <tr>
        <th>Alternate Contact</th>
        <td>{{ ($quote->additional_details['Alternative_Country_Code'] ?? '') . ' ' . ($quote->additional_details['Alternative_Contact'] ?? '') }}</td>
      </tr>
      @endif
      <tr>
        <th>Email</th>
        <td>{{ $quote->email ?? '' }}</td>
      </tr>
      <tr>
        <th>Mailing/Billing Address</th>
        <td>{{ ($quote->address ?? '') . ', ' . ($quote->city ?? '') . ', ' . ($quote->postal_code ?? '') }}</td>
      </tr>
      <tr>
        <th>Project Address</th>
        <td>{{ ($quote->additional_details['Project_Address'] ?? '') . ', ' . ($quote->additional_details['Project_City'] ?? '') . ', ' . ($quote->additional_details['Project_Postal_Code'] ?? '') }}</td>
      </tr>
      <tr>
        <th>Preferred Time for Communication</th>
        <td>{{ $quote->additional_details['Preferred_Time_for_Communication'] ?? '' }}</td>
      </tr>
      <tr>
        <th>Preferred Method of Contact</th>
        <td>{{ $quote->additional_details['Preferred_Method_of_Contact'] ?? 'N/A' }}</td>
      </tr>
      <tr>
        <th>Requested Service</th>
        <td>{{ $quote->service ?? '' }}</td>
      </tr>
    </table>

    <!-- General Project Information -->
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
        <td>Rs. {{ number_format($quote->additional_details['Budget_Range'] ?? 0, 2) }}</td>
      </tr>
    </table>

    <!-- Project Details -->
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

    <!-- Building Specifications -->
    <h3>Building Specifications</h3>
    @php
      $sections = [
        'Structure_Type'           => 'Structure Type',
        'Wall_Type_Preferences'    => 'Wall Type Preferences',
        'Floor_Type_Preferences'   => 'Floor Type Preferences',
        'Roof_Type'                => 'Roof Type',
        'Roof_Structure'           => 'Roof Structure',
        'Ceiling_Type'             => 'Ceiling Type',
        'Roof_Design'              => 'Roof Design'
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

    <!-- Door & Window Materials -->
    <h3>Door & Window Materials</h3>
    @php
      $dwSections = [
        'Door_&_Window_Materials' => 'Door & Window Materials'
      ];
    @endphp
    @foreach ($dwSections as $key => $label)
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

    <!-- Elevator Requirement -->
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

    <!-- Additional Requests or Special Notes -->
    <div style="{{ empty($additionalDetails['Additional_Comments']) ? 'display: none;' : '' }}">
      <h3>Additional Requests or Special Notes</h3>
      <p>{{ $additionalDetails['Additional_Comments'] ?? '' }}</p>
    </div>
    
  </div>
</body>
</html>
