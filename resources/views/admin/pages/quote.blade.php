<!DOCTYPE html>
<html>
<head>
    <title>{{$quote->service}}</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>Laasana Gedara {{$quote->service}} Quotation</h2>

    <h3>Client Details</h3>
    <p>Name: {{ $quote->title }} {{ $quote->name }}</p>
    <p>Contact: {{ $quote->country_code }} {{ $quote->contact }}</p>
    <p>Email: {{ $quote->email }}</p>
    <p>Address: {{ $quote->address }}</p>
    <p>Service: {{ $quote->service }}</p>
    <p>Date: {{ $quote->created_at }}</p>

    <h3>Project Details</h3>
    <p>Loan Preference: {{ $quote->loan }}</p>

    {{-- Domestic House --}}
    @isset($quote->additional_details['Number_of_Floors'])
        <p>Number of Floors: {{ $quote->additional_details['Number_of_Floors'] }}</p>
    @endisset

    @isset($quote->additional_details['Number_of_Rooms'])
        <p>Number of Rooms: {{ $quote->additional_details['Number_of_Rooms'] }}</p>
    @endisset

    @isset($quote->additional_details['Number_of_Bathrooms'])
        <p>Number of Bathrooms: {{ $quote->additional_details['Number_of_Bathrooms'] }}</p>
    @endisset

    @isset($quote->additional_details['Wall_Type'])
        <p>Wall Type: {{ $quote->additional_details['Wall_Type'] }}</p>
    @endisset

    @isset($quote->additional_details['Floor_Type'])
        <p>Floor Type: {{ $quote->additional_details['Floor_Type'] }}</p>
    @endisset

    @isset($quote->additional_details['Roof_Type'])
        <p>Roof Type: {{ $quote->additional_details['Roof_Type'] }}</p>
    @endisset

    @isset($quote->additional_details['Roof_Structure'])
        <p>Roof Structure: {{ $quote->additional_details['Roof_Structure'] }}</p>
    @endisset

    @isset($quote->additional_details['Ceiling_Type'])
        <p>Ceiling Type: {{ $quote->additional_details['Ceiling_Type'] }}</p>
    @endisset

    @isset($quote->additional_details['Door_and_Window_Type'])
        <p>Door and Window Type: {{ $quote->additional_details['Door_and_Window_Type'] }}</p>
    @endisset

    @isset($quote->additional_details['Living_Room'])
        <p>Living Room: {{ $quote->additional_details['Living_Room'] }}</p>
    @endisset

    @isset($quote->additional_details['Dining_Room'])
        <p>Dining Room: {{ $quote->additional_details['Dining_Room'] }}</p>
    @endisset

    @isset($quote->additional_details['Laundry_Room'])
        <p>Laundry Room: {{ $quote->additional_details['Laundry_Room'] }}</p>
    @endisset

    @isset($quote->additional_details['Kitchen'])
        <p>Kitchen: {{ $quote->additional_details['Kitchen'] }}</p>
    @endisset

    @isset($quote->additional_details['Garage'])
        <p>Garage: {{ $quote->additional_details['Garage'] }}</p>
    @endisset

    @isset($quote->additional_details['Porch_Deck'])
        <p>Porch/Deck: {{ $quote->additional_details['Porch_Deck'] }}</p>
    @endisset

    @isset($quote->additional_details['Basement'])
        <p>Basement: {{ $quote->additional_details['Basement'] }}</p>
    @endisset

    @isset($quote->additional_details['Electrical_System'])
        <p>Electrical System: {{ $quote->additional_details['Electrical_System'] }}</p>
    @endisset

    @isset($quote->additional_details['Plumbing_System'])
        <p>Plumbing System: {{ $quote->additional_details['Plumbing_System'] }}</p>
    @endisset

    @isset($quote->additional_details['Heating_and_Cooling'])
        <p>Heating and Cooling: {{ $quote->additional_details['Heating_and_Cooling'] }}</p>
    @endisset

    @isset($quote->additional_details['Interior_Finish'])
        <p>Interior Finish: {{ $quote->additional_details['Interior_Finish'] }}</p>
    @endisset

    @isset($quote->additional_details['Flooring_in_Other_Areas'])
        <p>Flooring in Other Areas: {{ $quote->additional_details['Flooring_in_Other_Areas'] }}</p>
    @endisset

    @isset($quote->additional_details['Sustainability_Features'])
        <p>Sustainability Features: {{ $quote->additional_details['Sustainability_Features'] }}</p>
    @endisset

    @isset($quote->additional_details['Accessibility_Features'])
        <p>Accessibility Features: {{ $quote->additional_details['Accessibility_Features'] }}</p>
    @endisset

    @isset($quote->additional_details['Desired_Start_Date'])
        <p>Desired Start Date: {{ $quote->additional_details['Desired_Start_Date'] }}</p>
    @endisset

    @isset($quote->additional_details['Desired_Completion_Date'])
        <p>Desired Completion Date: {{ $quote->additional_details['Desired_Completion_Date'] }}</p>
    @endisset

    @isset($quote->additional_details['Budget_Range'])
        <p>Budget Range: {{ $quote->additional_details['Budget_Range'] }}</p>
    @endisset

    @isset($quote->additional_details['Additional_Comments'])
        <p>Additional Comments: {{ $quote->additional_details['Additional_Comments'] }}</p>
    @endisset

    {{-- Commercial Building --}}

    @isset($quote->additional_details['Floor_Area'])
        <p>Additional Comments: {{ $quote->additional_details['Floor_Area'] }}</p>
    @endisset

    @isset($quote->additional_details['Number_of_Bathrooms_Per_Floor'])
        <p>Additional Comments: {{ $quote->additional_details['Number_of_Bathrooms_Per_Floor'] }}</p>
    @endisset

    @isset($quote->additional_details['Roof'])
        <p>Additional Comments: {{ $quote->additional_details['Roof'] }}</p>
    @endisset

    @isset($quote->additional_details['Door_Window'])
        <p>Additional Comments: {{ $quote->additional_details['Door_Window'] }}</p>
    @endisset

    @isset($quote->additional_details['Elevator_Required'])
        <p>Additional Comments: {{ $quote->additional_details['Elevator_Required'] }}</p>
    @endisset




    
</body>
</html>
