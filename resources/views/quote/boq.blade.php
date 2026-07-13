@extends('layout.front')

@section('title', 'Request a BOQ Quote | Lassana Gedara – Sri Lanka')

@section('meta_description', 'Get a personalized construction quote and BOQ from Lassana Gedara. Provide your project details to receive an accurate cost estimate for your dream property in Sri Lanka.')

@section('meta_keywords', 'construction quote, building estimate, BOQ, interior design quote, Lassana Gedara, Sri Lanka, project cost, renovation, new build')

@section('content')

<style>
    .section {
        display: none;
    }
    .section.active {
        display: block;
    }
    label {
        color: black;
    }
</style>

<body style="
    background-image: url('{{ asset('assets/images/background/background.jpg') }}'); 
    background-size: inherit; 
    background-position: center; 
    background-repeat: no-repeat; 
    width: 100%; 
    height: 100vh;
">
    <section class="about-area" style="margin-top: 120px;">
        <div class="container">
            <div class="sec-title text-center">
                <p>Welcome {{ $data['Title'] }} {{ $data['Name'] }}</p>
                <div class="title">Quotation for<br><span>BOQ</span></div>
            </div>
        </div>
    </section>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="container containerquote">
        <div class="contact__wrapper shadow-lg mt-n9" style="border-radius: 30px;">
            <div class="row no-gutters">
                <div class="col-lg-5 contact-info__wrapper p-5 order-lg-2" style="background: #992023; border-radius: 30px;">
                    <!-- Contact Info -->
                    <ul class="contact-info__list list-style--none position-relative z-index-101">
                        <div class="contact info">
                            <h3>Contact Info</h3>
                            <div class="infoBox">
                                <div>
                                    <span><ion-icon name="location"></ion-icon></span>
                                    <p>
                                        <a class="text-white" href="https://maps.app.goo.gl/uZXmo7nEcNCokSYc7">
                                            No.199, 6th floor,<br>Ward City Shopping Complex,<br>Merybiso Mw, Gampaha, Sri Lanka
                                        </a>
                                    </p>
                                </div>
                                <div>
                                    <span><ion-icon name="mail"></ion-icon></span>
                                    <p>
                                        <a class="text-white" href="mailto: info@lassanagedara.com">info@lassanagedara.com</a>
                                    </p>
                                </div>
                                <div>
                                    <span><ion-icon name="call"></ion-icon></span>
                                    <p>
                                        <a class="text-white" href="tel:+94706920600">+94 706 920 600</a>
                                    </p>
                                </div>
                                <ul class="sci">
                                    <li>
                                        <a href="https://www.facebook.com/lassanagedara?mibextid=LQQJ4d">
                                            <ion-icon name="logo-facebook"></ion-icon>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <ion-icon name="logo-instagram"></ion-icon>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tel:+94706920600">
                                            <ion-icon name="logo-whatsapp"></ion-icon>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <ion-icon name="logo-linkedin"></ion-icon>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <br>
                        <div class="contact info" style="background: black; padding: 20px; border: 2px solid #333; box-shadow: 5px 5px 10px rgba(0,0,0,0.5);">
                            <h3 class="pb-3 text-center">Why choose us?</h3>
                            <div class="infoBox">
                                <ul class="bullet-list">
                                    <li class="pb-2">Skilled Professionals</li>
                                    <li class="pb-2">Innovative Design</li>
                                    <li class="pb-2">Unwavering Dedication</li>
                                    <li class="pb-2">Clear Communication</li>
                                    <li class="pb-2">Tailored Solutions</li>
                                    <li class="pb-2">Streamlined Services</li>
                                </ul>
                            </div>
                        </div>
                    </ul>
                </div>

                <div class="col-lg-7 contact-form__wrapper p-5 order-lg-1" style="background: url('assets/images/brand/back2-overlay.png'); background-size: cover; background-position: center; background-repeat: no-repeat; background-color: rgb(245 245 245 / 91%); border-radius: 30px;">
                    <form id="multiStepForm" action="{{ route('getQuote') }}" method="POST" class="contact-form form-validate">
                        @csrf
                        <input type="hidden" value="{{ $data['Title'] }}" name="Title" required>
                        <input type="hidden" value="{{ $data['Name'] }}" name="Name" required>
                        <input type="hidden" value="{{ $data['NIC_Passport'] }}" name="NIC_Passport" required>
                        <input type="hidden" value="{{ $data['Business_Company_Name'] }}" name="Business_Company_Name" required>
                        <input type="hidden" value="{{ $data['Designation'] }}" name="Designation" required>
                        <input type="hidden" value="{{ $data['Country_Code'] }}" name="Country_Code" required>
                        <input type="hidden" value="{{ $data['Contact'] }}" name="Contact" required>
                        <input type="hidden" value="{{ $data['Alternative_Country_Code'] }}" name="Alternative_Country_Code" required>
                        <input type="hidden" value="{{ $data['Alternative_Contact'] }}" name="Alternative_Contact" required>
                        <input type="hidden" value="{{ $data['Email'] }}" name="Email" required>
                        <input type="hidden" value="{{ $data['Project_Address'] }}" name="Project_Address" required>
                        <input type="hidden" value="{{ $data['Project_City'] }}" name="Project_City" required>
                        <input type="hidden" value="{{ $data['Project_Postal_Code'] }}" name="Project_Postal_Code" required>
                        <input type="hidden" value="{{ $data['Address'] }}" name="Address" required>
                        <input type="hidden" value="{{ $data['City'] }}" name="City" required>
                        <input type="hidden" value="{{ $data['Postal_Code'] }}" name="Postal_Code" required>
                        <input type="hidden" value="{{ $data['Preferred_Time_for_Communication'] }}" name="Preferred_Time_for_Communication" required>
                        <input type="hidden" value="{{ $data['Preferred_Method_of_Contact'] }}" name="Preferred_Method_of_Contact" required>
                        <input type="hidden" value="{{ $data['Service'] }}" name="Service" required>

                        <!-- Section 1: Basic Details -->
                        <div class="section active" id="section1">
                            <div class="row">
                                <h4 style="color: black;">CAD Drawing Requirements:</h4>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label for="selectOption11" class="quto">Is a CAD Drawing Available?</label>
                                        <select class="form-control" id="selectOption11" name="CAD_Drawing" required>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                            <option value="Pending">Pending</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row"><h4 style="color: black;">Project Details:</h4></div>
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label class="quto">Job Type (Check all that apply)</label><br>
                                        <!-- All standard checkboxes share name="Wall_Type[]" -->
                                        <input type="checkbox" name="Job_Type[]" value="Domestic House">Domestic House<br>
                                        <input type="checkbox" name="Job_Type[]" value="Commercial House">Commercial House <br>
                                        <input type="checkbox" name="Job_Type[]" value="Industrial Building">Industrial Building <br>                                        
                                    </div>
                                </div>                                   
                            </div>

                            <div class="row"><h4 style="color: black;">Building Specifications:</h4></div>
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label for="selectOption2" class="quto">Number of Rooms</label>
                                        <input type="number" class="form-control" id="selectOption2" name="Number_of_Rooms" required>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label for="selectOption1" class="quto">Number of Floors</label>
                                        <input type="number" class="form-control" id="selectOption1" name="Number_of_Floors" required>
                                    </div>
                                </div>                                
                            </div>
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label for="selectOption3" class="quto">Number of Bathrooms</label>
                                        <input type="number" class="form-control" id="selectOption3" name="Number_of_Bathrooms" required>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label for="selectOption10" class="quto">Living Room</label>
                                        <select class="form-control" id="selectOption10" name="Living_Room" required>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label for="selectOption12" class="quto">Dining Room</label>
                                        <select class="form-control" id="selectOption12" name="Dining_Room" required>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label for="selectOption16" class="quto">Laundry Room</label>
                                        <select class="form-control" id="selectOption16" name="Laundry_Room" required>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label for="selectOption10" class="quto">Kitchen</label>
                                        <select class="form-control" id="selectOption10" name="Kitchen" required>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label for="selectOption13" class="quto">Garage (Number of Vheicles)</label>
                                        <input type="number" class="form-control" id="selectOption13" name="Garage" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label class="quto">Porch/Deck</label>
                                        <select class="form-control" name="Porch/Deck" required>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label class="quto">Basement</label>
                                        <select class="form-control" name="Basement" required>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <button type="button" class="btn btn-primary" onclick="nextSection(2)" style="background-color: #992023; border-color: #992023;">Next</button>
                        </div>

                        <!-- Section 2: Materials and Structure -->
                        <div class="section" id="section2">
                            <div class="row">
                                <h4 style="color: black;">Materials and Structure:</h4>
                            </div>
                            <div class="row">
                                <!-- Wall Type Group -->
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label class="quto">Wall Type (Check all that apply)</label><br>
                                        <!-- All standard checkboxes share name="Wall_Type[]" -->
                                        <input type="checkbox" name="Wall_Type[]" value="Engineering Brick">Engineering Bricks <br>
                                        <input type="checkbox" name="Wall_Type[]" value="Concrete Block">Concrete Block <br>
                                        <input type="checkbox" name="Wall_Type[]" value="AAC Brick">AAC Brick <br>
                                        <!-- "Other" uses a different name so it won't go in the main array -->
                                        <input type="checkbox" name="Wall_Type_Other" id="wall_type_other" value="Other">Other
                                        <input type="text" id="wall_type_other_text" name="Wall_Type[]" style="background: #ffffff91; border: 1px solid rgba(0,0,0,0.27); border-radius: 4px; display: none;">
                                    </div>
                                </div>
                                <!-- Floor Type Group -->
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label class="quto">Floor Type (Check all that apply)</label><br>
                                        <input type="checkbox" name="Floor_Type[]" value="Tiles">Tiles <br>
                                        <input type="checkbox" name="Floor_Type[]" value="Hardwood">Hardwood <br>
                                        <input type="checkbox" name="Floor_Type[]" value="Carpet">Carpet <br>
                                        <input type="checkbox" name="Floor_Type_Other" id="floor_type_other" value="Other">Other
                                        <input type="text" id="floor_type_other_text" name="Floor_Type[]" style="background: #ffffff91; border: 1px solid rgba(0,0,0,0.27); border-radius: 4px; display: none;">
                                    </div>
                                </div>   
                            </div>
                            <div class="row">
                                <!-- Roof Type Group -->
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label class="quto">Roof Type (Check all that apply)</label><br>
                                        <input type="checkbox" name="Roof_Type[]" value="Concrete Slab">Concrete Slab <br>
                                        <input type="checkbox" name="Roof_Type[]" value="Metal Roof">Metal Roof <br>
                                        <input type="checkbox" name="Roof_Type[]" value="Asphalt Shingles">Asphalt Shingles <br>
                                        <input type="checkbox" name="Roof_Type_Other" id="roof_type_other" value="Other">Other
                                        <input type="text" id="roof_type_other_text" name="Roof_Type[]" style="background: #ffffff91; border: 1px solid rgba(0,0,0,0.27); border-radius: 4px; display: none;">
                                    </div>
                                </div>
                                <!-- Roof Structure Group -->
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label class="quto">Roof Structure (Check all that apply)</label><br>
                                        <input type="checkbox" name="Roof_Structure[]" value="Wooden">Wooden <br>
                                        <input type="checkbox" name="Roof_Structure[]" value="Steel">Steel <br>
                                        <input type="checkbox" name="Roof_Structure[]" value="Concrete">Concrete <br>
                                        <input type="checkbox" name="Roof_Structure_Other" id="roof_structure_other" value="Other">Other
                                        <input type="text" id="roof_structure_other_text" name="Roof_Structure[]" style="background: #ffffff91; border: 1px solid rgba(0,0,0,0.27); border-radius: 4px; display: none;">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- Ceiling Type Group -->
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label class="quto">Ceiling Type (Check all that apply)</label><br>
                                        <input type="checkbox" name="Ceiling_Type[]" value="Wooden">Wooden <br>
                                        <input type="checkbox" name="Ceiling_Type[]" value="Plasterboard">Plasterboard <br>
                                        <input type="checkbox" name="Ceiling_Type_Other" id="ceiling_type_other" value="Other">Other
                                        <input type="text" id="ceiling_type_other_text" name="Ceiling_Type[]" style="background: #ffffff91; border: 1px solid rgba(0,0,0,0.27); border-radius: 4px; display: none;">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <h4 style="color: black;">Doors & Windows:</h4>
                            </div>
                            <div class="row">
                                <!-- Door & Window Type Group -->
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label class="quto">Door & Window Type (Check all that apply)</label><br>
                                        <input type="checkbox" name="Door_&_Window_Type[]" value="Wooden">Wooden <br>
                                        <input type="checkbox" name="Door_&_Window_Type[]" value="PVC">PVC <br>
                                        <input type="checkbox" name="Door_&_Window_Type[]" value="Aluminum">Aluminum <br>
                                        <input type="checkbox" name="Door_&_Window_Type_Other" id="door_&_window_type_other" value="Other">Other
                                        <input type="text" id="door_&_window_type_other_text" name="Door_&_Window_Type[]" style="background: #ffffff91; border: 1px solid rgba(0,0,0,0.27); border-radius: 4px; display: none;">
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-secondary" onclick="previousSection(1)">Previous</button>
                            <button type="button" class="btn btn-primary" onclick="nextSection(3)" style="background-color: #992023; border-color: #992023;">Next</button>
                        </div>

                        <!-- Section 3: Systems and Features -->
                        <div class="section" id="section3">
                            <div class="row">
                                <h4 style="color: black;">Systems & Services:</h4>
                            </div>
                            <div class="row">
                                <!-- Electrical System Group -->
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label class="quto">Electrical System</label><br>
                                        <input type="checkbox" name="Electrical_System[]" value="Standard">Standard <br>
                                        <input type="checkbox" name="Electrical_System[]" value="Solar Panels">Solar Panels <br>
                                        <input type="checkbox" name="Electrical_System_Other" id="electrical_system_other" value="Other">Other
                                        <input type="text" id="electrical_system_other_text" name="Electrical_System[]" style="background: #ffffff91; border: 1px solid rgba(0,0,0,0.27); border-radius: 4px; display: none;">
                                    </div>
                                </div>
                                <!-- Plumbing System Group -->
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label class="quto">Plumbing System</label><br>
                                        <input type="checkbox" name="Plumbing_System[]" value="Standard">Standard <br>
                                        <input type="checkbox" name="Plumbing_System[]" value="Rainwater">Rainwater <br>
                                        <input type="checkbox" name="Plumbing_System[]" value="Harvesting System">Harvesting System <br>
                                        <input type="checkbox" name="Plumbing_System_Other" id="plumbing_system_other" value="Other">Other
                                        <input type="text" id="plumbing_system_other_text" name="Plumbing_System[]" style="background: #ffffff91; border: 1px solid rgba(0,0,0,0.27); border-radius: 4px; display: none;">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- Heating & Cooling Group -->
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label class="quto">Heating & Cooling</label><br>
                                        <input type="checkbox" name="Heating_&_Cooling[]" value="Central HVAC">Central HVAC <br>
                                        <input type="checkbox" name="Heating_&_Cooling[]" value="Radiant Heating">Radiant Heating <br>
                                        <input type="checkbox" name="Heating_&_Cooling_Other" id="heating_&_cooling_other" value="Other">Other
                                        <input type="text" id="heating_&_cooling_other_text" name="Heating_&_Cooling[]" style="background: #ffffff91; border: 1px solid rgba(0,0,0,0.27); border-radius: 4px; display: none;">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <h4 style="color: black;">Interior Finishes:</h4>
                            </div>
                            <div class="row">
                                <!-- Interior Finish Group -->
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label class="quto">Interior Finish (Check all that apply)</label><br>
                                        <input type="checkbox" name="Interior_Finish[]" value="Paint">Paint <br>
                                        <input type="checkbox" name="Interior_Finish[]" value="Wallpaper">Wallpaper <br>
                                        <input type="checkbox" name="Interior_Finish_Other" id="interior_finish_other" value="Other">Other
                                        <input type="text" id="interior_finish_other_text" name="Interior_Finish[]" style="background: #ffffff91; border: 1px solid rgba(0,0,0,0.27); border-radius: 4px; display: none;">
                                    </div>
                                </div>
                                <!-- Flooring in Other Areas Group -->
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label class="quto">Flooring in Other Areas (Kitchen/Bathroom):</label><br>
                                        <input type="checkbox" name="Flooring_in_Other_Areas[]" value="Tiles">Tiles <br>
                                        <input type="checkbox" name="Flooring_in_Other_Areas[]" value="Vinyl">Vinyl <br>
                                        <input type="checkbox" name="Flooring_in_Other_Areas_Other" id="flooring_in_other_areas_other" value="Other">Other
                                        <input type="text" id="flooring_in_other_areas_other_text" name="Flooring_in_Other_Areas[]" style="background: #ffffff91; border: 1px solid rgba(0,0,0,0.27); border-radius: 4px; display: none;">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <h4 style="color: black;">Sustainability Features:</h4>
                            </div>
                            <div class="row">
                                <!-- Sustainability Features Group -->
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label class="quto">Sustainability Features:</label><br>
                                        <input type="checkbox" name="Sustainability_Features[]" value="Energy Efficient Windows">Energy Efficient Windows <br>
                                        <input type="checkbox" name="Sustainability_Features[]" value="Green Roof">Green Roof <br>
                                        <input type="checkbox" name="Sustainability_Features[]" value="Insulation">Insulation <br>
                                        <input type="checkbox" name="Sustainability_Features_Other" id="sustainability_features_other" value="Other">Other
                                        <input type="text" id="sustainability_features_other_text" name="Sustainability_Features[]" style="background: #ffffff91; border: 1px solid rgba(0,0,0,0.27); border-radius: 4px; display: none;">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="col-sm-12 mb-3">
                                <button type="button" class="btn btn-secondary" onclick="previousSection(2)">Previous</button>
                                <button type="button" class="btn btn-primary" onclick="nextSection(4)" style="background-color: #992023; border-color: #992023;">Next</button>
                            </div>
                        </div>

                        <!-- Section 4: Accessibility and Timeline -->
                        <div class="section" id="section4">
                            <div class="row">
                                <h4 style="color: black;">Accessibility Features:</h4>
                            </div>
                            <div class="row">
                                <!-- Accessibility Features Group -->
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label class="quto">Accessibility Features (Check all that apply)</label><br>
                                        <input type="checkbox" name="Accessibility_Features[]" value="Wheelchair">Wheelchair <br>
                                        <input type="checkbox" name="Accessibility_Features[]" value="Grab Bars in Bathroom">Grab Bars in Bathroom <br>
                                        <input type="checkbox" name="Accessibility_Features_Other" id="accessibility_features_other" value="Other">Other
                                        <input type="text" id="accessibility_features_other_text" name="Accessibility_Features[]" style="background: #ffffff91; border: 1px solid rgba(0,0,0,0.27); border-radius: 4px; display: none;">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <h4 style="color: black;">Project Timeline and Budget:</h4>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label for="desiredStartDate" class="quto">Desired Start Date</label>
                                        <input type="date" class="form-control" id="desiredStartDate" name="Desired_Start_Date" required>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label for="desiredCompletionDate" class="quto">Desired Completion Date</label>
                                        <input type="date" class="form-control" id="desiredCompletionDate" name="Desired_Completion_Date" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label for="budgetRange" class="quto">Budget (Rs.)</label>
                                        <input type="number" class="form-control" id="budgetRange" name="Budget_Range" placeholder=" Enter your budget range" required="required">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <h4 style="color: black;">Site Visit & Inspection:</h4>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label for="siteVisitDate" class="quto">Visit & Inspection Date</label>
                                        <input type="date" class="form-control" id="siteVisitDate" name="Site_Visit_Date" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <h4 style="color: black;">Additional Requests or Special Notes:</h4>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 mb-3">
                                    <div class="form-group">
                                        <label for="additionalComments" class="quto">Additional Comments or Special Requests</label>
                                        <textarea class="form-control" id="additionalComments" name="Additional_Comments" rows="8" placeholder=" Enter any additional comments or special requests"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 mb-3">
                                    <button type="button" class="btn btn-secondary" onclick="previousSection(3)">Previous</button>
                                    <button type="submit" class="btn text-light" style="background: #992023;">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- End Contact Form Wrapper -->
            </div>
        </div>
    </div>
    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
        $(document).ready(function () {
            $('.alert').delay(5000).slideUp(500);
        });
    </script>
    <script>
        // Navigation with validation
        function nextSection(section) {
            var currentSection = document.querySelector(".section.active");
            if (!validateSection(currentSection.id)) {
                return;
            }
            currentSection.classList.remove("active");
            document.getElementById('section' + section).classList.add("active");
        }
        function previousSection(section) {
            document.querySelectorAll('.section').forEach((el) => el.classList.remove('active'));
            document.getElementById('section' + section).classList.add('active');
        }

        // Validate required non-checkbox inputs, then each checkbox group
        function validateSection(sectionId) {
            var valid = true;
            var section = document.getElementById(sectionId);
            
            // Validate text, number, date, select, textarea
            var inputs = section.querySelectorAll("input:not([type='checkbox']):not([type='hidden']), select, textarea");
            inputs.forEach(function(input) {
                if (input.hasAttribute("required") && input.value.trim() === "") {
                    valid = false;
                    input.style.border = "1px solid red";
                } else {
                    input.style.border = "";
                }
            });
            
            // Validate checkbox groups for each section
            if (sectionId === "section1") {
                // Validate Job_Type group in section 1 (no "Other" option for Job Type)
                if (!validateCheckboxGroup("Job_Type[]", null, null, null)) valid = false;
            } else if (sectionId === "section2") {
                // ( mainGroupName, otherCheckboxName, otherCheckboxId, otherTextId )
                if (!validateCheckboxGroup("Wall_Type[]", "Wall_Type_Other", "wall_type_other", "wall_type_other_text")) valid = false;
                if (!validateCheckboxGroup("Floor_Type[]", "Floor_Type_Other", "floor_type_other", "floor_type_other_text")) valid = false;
                if (!validateCheckboxGroup("Roof_Type[]", "Roof_Type_Other", "roof_type_other", "roof_type_other_text")) valid = false;
                if (!validateCheckboxGroup("Roof_Structure[]", "Roof_Structure_Other", "roof_structure_other", "roof_structure_other_text")) valid = false;
                if (!validateCheckboxGroup("Ceiling_Type[]", "Ceiling_Type_Other", "ceiling_type_other", "ceiling_type_other_text")) valid = false;
                if (!validateCheckboxGroup("Door_&_Window_Type[]", "Door_&_Window_Type_Other", "door_&_window_type_other", "door_&_window_type_other_text")) valid = false;
            } else if (sectionId === "section3") {
                if (!validateCheckboxGroup("Electrical_System[]", "Electrical_System_Other", "electrical_system_other", "electrical_system_other_text")) valid = false;
                if (!validateCheckboxGroup("Plumbing_System[]", "Plumbing_System_Other", "plumbing_system_other", "plumbing_system_other_text")) valid = false;
                if (!validateCheckboxGroup("Heating_&_Cooling[]", "Heating_&_Cooling_Other", "heating_&_cooling_other", "heating_&_cooling_other_text")) valid = false;
                if (!validateCheckboxGroup("Interior_Finish[]", "Interior_Finish_Other", "interior_finish_other", "interior_finish_other_text")) valid = false;
                if (!validateCheckboxGroup("Flooring_in_Other_Areas[]", "Flooring_in_Other_Areas_Other", "flooring_in_other_areas_other", "flooring_in_other_areas_other_text")) valid = false;
                if (!validateCheckboxGroup("Sustainability_Features[]", "Sustainability_Features_Other", "sustainability_features_other", "sustainability_features_other_text")) valid = false;
            } else if (sectionId === "section4") {
                if (!validateCheckboxGroup("Accessibility_Features[]", "Accessibility_Features_Other", "accessibility_features_other", "accessibility_features_other_text")) valid = false;
            }
            
            return valid;
        }

        /**
         * Validate that at least one checkbox is checked from the main group or the "Other" checkbox.
         * If "Other" is checked, the corresponding text field must not be empty.
         *
         * @param {string} mainGroupName       e.g. "Wall_Type[]"
         * @param {string} otherCheckboxName   e.g. "Wall_Type_Other"
         * @param {string} otherCheckboxId     e.g. "wall_type_other"
         * @param {string} otherTextId         e.g. "wall_type_other_text"
         */
        function validateCheckboxGroup(mainGroupName, otherCheckboxName, otherCheckboxId, otherTextId) {
            // Query the main group
            var mainCheckboxes = document.querySelectorAll(`input[name='${mainGroupName}']`);
            // Query the "Other" checkbox
            var otherCheckbox = document.querySelector(`input[name='${otherCheckboxName}']`);

            var isAnyChecked = false;

            // Clear outlines
            mainCheckboxes.forEach(function(checkbox) {
                checkbox.style.outline = "";
                if (checkbox.checked) {
                    isAnyChecked = true;
                }
            });

            if (otherCheckbox) {
                otherCheckbox.style.outline = "";
                if (otherCheckbox.checked) {
                    isAnyChecked = true;
                }
            }

            // If no main checkboxes and no "Other" are checked, fail
            if (!isAnyChecked) {
                if (mainCheckboxes.length) {
                    // highlight the first main checkbox
                    mainCheckboxes[0].style.outline = "1px solid red";
                } else if (otherCheckbox) {
                    // or highlight the other if no main checkboxes exist
                    otherCheckbox.style.outline = "1px solid red";
                }
                return false;
            }

            // If "Other" is checked, validate the text field
            if (otherCheckbox && otherCheckbox.checked) {
                var otherText = document.getElementById(otherTextId);
                if (otherText.value.trim() === "") {
                    otherText.style.border = "1px solid red";
                    return false;
                } else {
                    otherText.style.border = "";
                }
            }
            return true;
        }
    </script>

    <!-- Show/Hide the "Other" text fields dynamically -->
    <script>
        // WALL TYPE
        document.getElementById("wall_type_other").addEventListener("change", function() {
            var otherText = document.getElementById("wall_type_other_text");
            if (this.checked) {
                otherText.style.display = "block";
                otherText.setAttribute("required", "required");
            } else {
                otherText.style.display = "none";
                otherText.removeAttribute("required");
                otherText.style.border = "";
            }
        });

        // FLOOR TYPE
        document.getElementById("floor_type_other").addEventListener("change", function() {
            var otherText = document.getElementById("floor_type_other_text");
            if (this.checked) {
                otherText.style.display = "block";
                otherText.setAttribute("required", "required");
            } else {
                otherText.style.display = "none";
                otherText.removeAttribute("required");
                otherText.style.border = "";
            }
        });

        // ROOF TYPE
        document.getElementById("roof_type_other").addEventListener("change", function() {
            var otherText = document.getElementById("roof_type_other_text");
            if (this.checked) {
                otherText.style.display = "block";
                otherText.setAttribute("required", "required");
            } else {
                otherText.style.display = "none";
                otherText.removeAttribute("required");
                otherText.style.border = "";
            }
        });

        // ROOF STRUCTURE
        document.getElementById("roof_structure_other").addEventListener("change", function() {
            var otherText = document.getElementById("roof_structure_other_text");
            if (this.checked) {
                otherText.style.display = "block";
                otherText.setAttribute("required", "required");
            } else {
                otherText.style.display = "none";
                otherText.removeAttribute("required");
                otherText.style.border = "";
            }
        });

        // CEILING TYPE
        document.getElementById("ceiling_type_other").addEventListener("change", function() {
            var otherText = document.getElementById("ceiling_type_other_text");
            if (this.checked) {
                otherText.style.display = "block";
                otherText.setAttribute("required", "required");
            } else {
                otherText.style.display = "none";
                otherText.removeAttribute("required");
                otherText.style.border = "";
            }
        });

        // DOOR & WINDOW
        document.getElementById("door_&_window_type_other").addEventListener("change", function() {
            var otherText = document.getElementById("door_&_window_type_other_text");
            if (this.checked) {
                otherText.style.display = "block";
                otherText.setAttribute("required", "required");
            } else {
                otherText.style.display = "none";
                otherText.removeAttribute("required");
                otherText.style.border = "";
            }
        });

        // ELECTRICAL
        document.getElementById("electrical_system_other").addEventListener("change", function() {
            var otherText = document.getElementById("electrical_system_other_text");
            if (this.checked) {
                otherText.style.display = "block";
                otherText.setAttribute("required", "required");
            } else {
                otherText.style.display = "none";
                otherText.removeAttribute("required");
                otherText.style.border = "";
            }
        });

        // PLUMBING
        document.getElementById("plumbing_system_other").addEventListener("change", function() {
            var otherText = document.getElementById("plumbing_system_other_text");
            if (this.checked) {
                otherText.style.display = "block";
                otherText.setAttribute("required", "required");
            } else {
                otherText.style.display = "none";
                otherText.removeAttribute("required");
                otherText.style.border = "";
            }
        });

        // HEATING & COOLING
        document.getElementById("heating_&_cooling_other").addEventListener("change", function() {
            var otherText = document.getElementById("heating_&_cooling_other_text");
            if (this.checked) {
                otherText.style.display = "block";
                otherText.setAttribute("required", "required");
            } else {
                otherText.style.display = "none";
                otherText.removeAttribute("required");
                otherText.style.border = "";
            }
        });

        // INTERIOR FINISH
        document.getElementById("interior_finish_other").addEventListener("change", function() {
            var otherText = document.getElementById("interior_finish_other_text");
            if (this.checked) {
                otherText.style.display = "block";
                otherText.setAttribute("required", "required");
            } else {
                otherText.style.display = "none";
                otherText.removeAttribute("required");
                otherText.style.border = "";
            }
        });

        // FLOORING IN OTHER AREAS
        document.getElementById("flooring_in_other_areas_other").addEventListener("change", function() {
            var otherText = document.getElementById("flooring_in_other_areas_other_text");
            if (this.checked) {
                otherText.style.display = "block";
                otherText.setAttribute("required", "required");
            } else {
                otherText.style.display = "none";
                otherText.removeAttribute("required");
                otherText.style.border = "";
            }
        });

        // SUSTAINABILITY FEATURES
        document.getElementById("sustainability_features_other").addEventListener("change", function() {
            var otherText = document.getElementById("sustainability_features_other_text");
            if (this.checked) {
                otherText.style.display = "block";
                otherText.setAttribute("required", "required");
            } else {
                otherText.style.display = "none";
                otherText.removeAttribute("required");
                otherText.style.border = "";
            }
        });

        // ACCESSIBILITY FEATURES
        document.getElementById("accessibility_features_other").addEventListener("change", function() {
            var otherText = document.getElementById("accessibility_features_other_text");
            if (this.checked) {
                otherText.style.display = "block";
                otherText.setAttribute("required", "required");
            } else {
                otherText.style.display = "none";
                otherText.removeAttribute("required");
                otherText.style.border = "";
            }
        });
    </script>

    <!-- Added validation for section4 on submit -->
    <script>
        document.getElementById("multiStepForm").addEventListener("submit", function(e) {
            // Validate the last section (section4) on submit
            if (!validateSection("section4")) {
                // Prevent form submission if validation fails
                e.preventDefault();
            }
        });
    </script>
</body>
@endsection
