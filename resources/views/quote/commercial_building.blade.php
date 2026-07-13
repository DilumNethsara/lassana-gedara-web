@extends('layout.front')

@section('title', 'Request a Commercial Building Quote | Lassana Gedara – Sri Lanka')

@section('meta_description', 'Get a tailored quote for your commercial building project from Lassana Gedara. Share your project details to receive an accurate cost estimate and start building success today in Sri Lanka.')

@section('meta_keywords', 'commercial construction quote, building estimate, commercial project cost, Lassana Gedara, Sri Lanka, commercial building services, quote request')

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

<!-- About Area -->
<section class="about-area" style="margin-top: 120px;">
    <div class="container">
        <div class="sec-title text-center">
            <p>Welcome {{ $data['Title'] }} {{ $data['Name'] }}</p>
            <div class="title">Quotation for Commercial <br><span>Building</span></div>
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
            <!-- Left Info Column -->
            <div class="col-lg-5 contact-info__wrapper p-5 order-lg-2" style="background: #992023; border-radius: 30px;">
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
                                <li><a href="https://www.facebook.com/lassanagedara?mibextid=LQQJ4d"><ion-icon name="logo-facebook"></ion-icon></a></li>
                                <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
                                <li><a href="tel:+94706920600"><ion-icon name="logo-whatsapp"></ion-icon></a></li>
                                <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
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

            <!-- Right Form Column -->
            <div class="col-lg-7 contact-form__wrapper p-5 order-lg-1" style="background: url('assets/images/brand/back1-overlay.png'); background-size: cover; background-position: center; background-repeat: no-repeat; background-color: rgb(245 245 245 / 91%); border-radius: 30px;">
                <form id="multiStepForm" action="{{ route('getQuote') }}" method="POST" class="contact-form form-validate">
                    @csrf
                    <!-- Hidden Fields -->
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
                    {{-- <input type="hidden" value="{{ $data['Loan'] }}" name="Loan" required> --}}
                    <input type="hidden" value="{{ $data['Service'] }}" name="Service" required>

                    <!-- Section 0: General Project Details -->
                    <div class="section active" id="section0" style="width: -webkit-fill-available;">
                        <div class="row"><h4 style="color: black;">General Project Details</h4></div>
                        <div class="row">
                            <div class="col-sm-6 mb-3">
                                <div class="form-group">
                                    <label class="quto">Desired Start Date</label>
                                    <input type="date" class="form-control" name="Desired_Start_Date" required>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <div class="form-group">
                                    <label class="quto">Desired Completion Date</label>
                                    <input type="date" class="form-control" name="Desired_Completion_Date" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 mb-3">
                                <div class="form-group">
                                    <label class="quto">Budget (Rs.)</label>
                                    <input type="number" class="form-control" name="Budget_Range" placeholder="Enter your budget range" required>
                                </div>
                            </div>
                        </div>
                        <div class="row"><h4 style="color: black;">Project Details</h4></div>
                        <div class="row">
                            <div class="col-sm-6 mb-3">
                                <div class="form-group">
                                    <label class="quto">Number of Floors</label>
                                    <input type="number" class="form-control" name="Number_of_Floors" min="1" required>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-3" id="bathrooms_per_floor_container"></div>
                            <script>
                                document.querySelector('input[name="Number_of_Floors"]').addEventListener("input", function() {
                                    var numFloors = parseInt(this.value);
                                    var container = document.getElementById("bathrooms_per_floor_container");
                                    container.innerHTML = "";
                                    if (!isNaN(numFloors) && numFloors > 0) {
                                        for (var i = 1; i <= Math.min(numFloors, 3); i++) {
                                            var div = document.createElement("div");
                                            div.className = "form-group";
                                            div.innerHTML = `
                                                <label class="quto">Number of Bathrooms for Floor ${i}</label>
                                                <input type="number" class="form-control" name="Bathrooms_Per_Floor[Floor_${i}]" min="0" required>
                                            `;
                                            container.appendChild(div);
                                        }
                                    }
                                });
                            </script>
                        </div>
                        <div class="row">
                            <label class="quto">Special Requests or Features</label>
                            <textarea class="form-control" name="Special_Requests_or_Features" rows="3" placeholder="Enter any Special Requests or Features"></textarea>
                        </div>
                        <div class="row">
                            <label class="quto">Client Expectations</label>
                            <textarea class="form-control" name="Client_Expectations" rows="3" placeholder="Enter Your Expectations"></textarea>
                        </div>
                        <div class="col-sm-12 mb-3" style="margin-top: 10px;">
                            <button type="button" class="btn btn-primary" onclick="nextSection(1)" style="background-color: #992023; border-color: #992023;">Next</button>                              
                        </div>
                    </div>

                    <!-- Section 1: Building Specifications: Structure & Design -->
                    <div class="section" id="section1" style="width: 100%">
                        <div class="row"><h4 style="color: black;">Building Specifications: Structure & Design</h4></div>
                        <div class="row">
                            <!-- Structure Type Group -->
                            <div class="col-sm-6 mb-3">
                                <div class="form-group">
                                    <label class="quto">Structure Type</label><br>
                                    <input type="checkbox" name="Structure_Type[]" value="Engineering Bricks">Engineering Bricks <br>
                                    <input type="checkbox" name="Structure_Type[]" value="Concrete Block">Concrete Block <br>
                                    <input type="checkbox" name="Structure_Type[]" value="AAC Brick">AAC Brick <br>
                                    <input type="checkbox" name="Structure_Type_Other" id="structure_type_other" value="Other">Other
                                    <input type="text" id="structure_type_other_text" name="Structure_Type[]" style="background: #ffffff91; border: 1px solid rgba(0,0,0,0.27); border-radius: 4px; display: none;">
                                </div>
                            </div>
                            <!-- Floor Area -->
                            <div class="col-sm-6 mb-3">
                                <div class="form-group">
                                    <label class="quto">Floor Area (sq. ft./sq. m.)</label>
                                    <input type="number" class="form-control" name="Floor_Area" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Wall Type Preferences Group -->
                            <div class="col-sm-6 mb-3">
                                <div class="form-group">
                                    <label class="quto">Wall Type Preferences</label><br>
                                    <input type="checkbox" name="Wall_Type_Preferences[]" value="Engineering Brick - 4.5 inches">Engineering Brick - 4.5 inches <br>
                                    <input type="checkbox" name="Wall_Type_Preferences[]" value="Engineering Brick - 9 inches">Engineering Brick - 9 inches <br>
                                    <input type="checkbox" name="Wall_Type_Preferences[]" value="Cement Block (Regular)">Cement Block (Regular) <br>
                                    <input type="checkbox" name="Wall_Type_Preferences[]" value="AAC Bricks">AAC Bricks <br>
                                    <input type="checkbox" name="Wall_Type_Preferences[]" value="Zinc & Aluminum Cladding Sheets">Zinc & Aluminum Cladding Sheets <br>
                                    <input type="checkbox" name="Wall_Type_Preferences[]" value="Insulated Sandwich Panels">Insulated Sandwich Panels <br>
                                    <input type="checkbox" name="Wall_Type_Preferences_Other" id="wall_type_preferences_other" value="Other">Other
                                    <input type="text" id="wall_type_preferences_other_text" name="Wall_Type_Preferences[]" style="background: #ffffff91; border: 1px solid rgba(0,0,0,0.27); border-radius: 4px; display: none;">   
                                </div>
                            </div>
                            <!-- Floor Type Preferences Group -->
                            <div class="col-sm-6 mb-3">
                                <div class="form-group">
                                    <label class="quto">Floor Type Preferences</label><br>
                                    <input type="checkbox" name="Floor_Type_Preferences[]" value="Tiles">Tiles <br>
                                    <input type="checkbox" name="Floor_Type_Preferences[]" value="Cut & Polish">Cut & Polish <br>
                                    <input type="checkbox" name="Floor_Type_Preferences[]" value="Ordinary Cement Rendering">Ordinary Cement Rendering <br>
                                    <input type="checkbox" name="Floor_Type_Preferences[]" value="Wooden">Wooden <br>
                                    <input type="checkbox" name="Floor_Type_Preferences[]" value="Titanium">Titanium <br>
                                    <input type="checkbox" name="Floor_Type_Preferences[]" value="Terrazzo">Terrazzo <br>
                                    <input type="checkbox" name="Floor_Type_Preferences[]" value="Laminating">Laminating <br>
                                    <input type="checkbox" name="Floor_Type_Preferences_Other" id="floor_type_preferences_other" value="Other">Other
                                    <input type="text" id="floor_type_preferences_other_text" name="Floor_Type_Preferences[]" style="background: #ffffff91; border: 1px solid rgba(0,0,0,0.27); border-radius: 4px; display: none;">   
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Roof Type Group -->
                            <div class="col-sm-6 mb-3">
                                <div class="form-group">
                                    <label class="quto">Roof Type</label><br>
                                    <input type="checkbox" name="Roof_Type[]" value="Concrete Slab">Concrete Slab <br>
                                    <input type="checkbox" name="Roof_Type[]" value="Zinc & Aluminum">Zinc & Aluminum <br>
                                    <input type="checkbox" name="Roof_Type[]" value="Cement Roofing Sheet">Cement Roofing Sheet <br>
                                    <input type="checkbox" name="Roof_Type[]" value="Sandwich Panel">Sandwich Panel <br>
                                    <input type="checkbox" name="Roof_Type[]" value="Roof Tile">Roof Tile <br>
                                    <input type="checkbox" name="Roof_Type_Other" id="roof_type_other" value="Other">Other
                                    <input type="text" id="roof_type_other_text" name="Roof_Type[]" style="background: #ffffff91; border: 1px solid rgba(0,0,0,0.27); border-radius: 4px; display: none;">
                                </div>
                            </div>
                            <!-- Roof Structure Group -->
                            <div class="col-sm-6 mb-3">
                                <div class="form-group">
                                    <label class="quto">Roof Structure</label><br>
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
                                    <label class="quto">Ceiling Type</label><br>
                                    <input type="checkbox" name="Ceiling_Type[]" value="Wooden">Wooden <br>
                                    <input type="checkbox" name="Ceiling_Type[]" value="Suspended Ceiling (Hanging Ceiling)">Suspended Ceiling (Hanging Ceiling) <br>
                                    <input type="checkbox" name="Ceiling_Type[]" value="U-PVC">U-PVC <br>
                                    <input type="checkbox" name="Ceiling_Type[]" value="Timber">Timber <br>
                                    <input type="checkbox" name="Ceiling_Type[]" value="Drywall">Drywall <br>
                                    <input type="checkbox" name="Ceiling_Type_Other" id="ceiling_type_other" value="Other">Other
                                    <input type="text" id="ceiling_type_other_text" name="Ceiling_Type[]" style="background: #ffffff91; border: 1px solid rgba(0,0,0,0.27); border-radius: 4px; display: none;">
                                </div>
                            </div>
                            <!-- Roof Design Group -->
                            <div class="col-sm-6 mb-3">
                                <div class="form-group">
                                    <label class="quto">Roof Design</label><br>
                                    <input type="checkbox" name="Roof_Design[]" value="Flat">Flat <br>
                                    <input type="checkbox" name="Roof_Design[]" value="Sloped">Sloped <br>
                                    <input type="checkbox" name="Roof_Design[]" value="Gabled">Gabled <br>
                                    <input type="checkbox" name="Roof_Design_Other" id="roof_design_other" value="Other">Other
                                    <input type="text" id="roof_design_other_text" name="Roof_Design[]" style="background: #ffffff91; border: 1px solid rgba(0,0,0,0.27); border-radius: 4px; display: none;">
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-secondary" onclick="previousSection(0)">Previous</button>
                        <button type="button" class="btn btn-primary" onclick="nextSection(2)" style="background-color: #992023; border-color: #992023;">Next</button>
                    </div>

                    <!-- Section 2: Door & Window Preferences, Elevator, Additional Requests -->
                    <div class="section" id="section2" style="width: 100%;">
                        <div class="row"><h4 style="color: black;">Door & Window Preferences</h4></div>
                        <div class="row">
                            <!-- Door & Window Materials Group -->
                            <div class="col-sm-6 mb-3">
                                <div class="form-group">
                                    <label class="quto">Door & Window Materials</label><br>
                                    <input type="checkbox" name="Door_&_Window_Materials[]" value="Wooden">Wooden <br>
                                    <input type="checkbox" name="Door_&_Window_Materials[]" value="U-PVC">U-PVC <br>
                                    <input type="checkbox" name="Door_&_Window_Materials[]" value="Aluminium">Aluminium <br>
                                    <input type="checkbox" name="Door_&_Window_Materials[]" value="Plywood">Plywood <br>
                                    <input type="checkbox" name="Door_&_Window_Materials[]" value="Fiber">Fiber <br>
                                    <input type="checkbox" name="Door_&_Window_Materials[]" value="Plastic">Plastic <br>
                                    <input type="checkbox" name="Door_&_Window_Materials_Other" id="door_&_window_materials_other" value="Other">Other
                                    <input type="text" id="door_&_window_materials_other_text" name="Door_&_Window_Materials[]" style="background: #ffffff91; border: 1px solid rgba(0,0,0,0.27); border-radius: 4px; display: none;">
                                </div>
                            </div>
                            <script>
                                document.getElementById("door_&_window_materials_other").addEventListener("change", function() {
                                    var otherText = document.getElementById("door_&_window_materials_other_text");
                                    if(this.checked){
                                        otherText.style.display = "block";
                                        otherText.setAttribute("required","required");
                                    } else {
                                        otherText.style.display = "none";
                                        otherText.removeAttribute("required");
                                        otherText.style.border = "";
                                    }
                                });
                            </script>
                        </div>
                        <div class="row"><h4 style="color: black;">Elevator Requirement</h4></div>
                        <div class="row">
                            <div class="col-sm-12 mb-3">
                                <div class="form-group">
                                    <label class="quto">Elevator Requirement</label>
                                    <select class="form-control" id="elevator_requirement" name="Elevator_Requirement" required>
                                        <option value="No">No</option>
                                        <option value="Yes">Yes</option>
                                    </select>
                                    <input type="text" class="form-control mt-2" id="elevator_type" name="Elevator_Type" placeholder="Type of Elevator" style="background: #ffffff91; border: 1px solid rgba(0,0,0,0.27); border-radius: 4px; display: none;">
                                </div>
                            </div>
                            <script>
                                document.getElementById("elevator_requirement").addEventListener("change", function(){
                                    var elevatorTypeInput = document.getElementById("elevator_type");
                                    elevatorTypeInput.style.display = (this.value === "Yes") ? "block" : "none";
                                });
                            </script>
                        </div>
                        <div class="row"><h4 style="color: black;">Additional Requests or Special Notes</h4></div>
                        <div class="row">
                            <div class="col-sm-12 mb-3">
                                <div class="form-group">
                                    <label class="quto">Additional Comments or Special Requests</label>
                                    <textarea class="form-control" id="additionalComments" name="Additional_Comments" rows="8" placeholder="Enter any additional comments or special requests"></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-secondary" onclick="previousSection(1)">Previous</button>
                        <button type="submit" class="btn text-light" style="background: #992023;">Submit</button>
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

<!-- Navigation and Validation Scripts -->
<script>
    function nextSection(section) {
        var currentSection = document.querySelector(".section.active");
        if (!validateSection(currentSection.id)) {
            return;
        }
        document.querySelectorAll('.section').forEach((el) => el.classList.remove('active'));
        document.getElementById('section' + section).classList.add('active');
    }
    
    function previousSection(section) {
        document.querySelectorAll('.section').forEach((el) => el.classList.remove('active'));
        document.getElementById('section' + section).classList.add('active');
    }
    
    function validateSection(sectionId) {
        var valid = true;
        var section = document.getElementById(sectionId);
        
        // Validate non-checkbox required inputs
        var inputs = section.querySelectorAll("input:not([type='checkbox']):not([type='hidden']), select, textarea");
        inputs.forEach(function(input) {
            if(input.hasAttribute("required") && input.value.trim() === "") {
                valid = false;
                input.style.border = "1px solid red";
            } else {
                input.style.border = "";
            }
        });
        
        // Validate checkbox groups for each section
        if(sectionId === "section1") {
            if(!validateCheckboxGroup("Structure_Type[]", "Structure_Type_Other", "structure_type_other", "structure_type_other_text")) valid = false;
            if(!validateCheckboxGroup("Wall_Type_Preferences[]", "Wall_Type_Preferences_Other", "wall_type_preferences_other", "wall_type_preferences_other_text")) valid = false;
            if(!validateCheckboxGroup("Floor_Type_Preferences[]", "Floor_Type_Preferences_Other", "floor_type_preferences_other", "floor_type_preferences_other_text")) valid = false;
            if(!validateCheckboxGroup("Roof_Type[]", "Roof_Type_Other", "roof_type_other", "roof_type_other_text")) valid = false;
            if(!validateCheckboxGroup("Roof_Structure[]", "Roof_Structure_Other", "roof_structure_other", "roof_structure_other_text")) valid = false;
            if(!validateCheckboxGroup("Ceiling_Type[]", "Ceiling_Type_Other", "ceiling_type_other", "ceiling_type_other_text")) valid = false;
            if(!validateCheckboxGroup("Roof_Design[]", "Roof_Design_Other", "roof_design_other", "roof_design_other_text")) valid = false;
        }
        else if(sectionId === "section2") {
            if(!validateCheckboxGroup("Door_&_Window_Materials[]", "Door_&_Window_Materials_Other", "door_&_window_materials_other", "door_&_window_materials_other_text")) valid = false;
            // Validate Elevator Requirement: if "Yes", then Elevator_Type must not be empty.
            var elevatorSelect = section.querySelector('select[name="Elevator_Requirement"]');
            if(elevatorSelect && elevatorSelect.value === "Yes") {
                var elevatorTypeInput = document.getElementById("elevator_type");
                if(elevatorTypeInput.value.trim() === ""){
                    valid = false;
                    elevatorTypeInput.style.border = "1px solid red";
                } else {
                    elevatorTypeInput.style.border = "";
                }
            }
        }
        return valid;
    }
    
    /**
     * Validate a checkbox group.
     * @param {string} mainGroupName - e.g. "Door_&_Window_Materials[]"
     * @param {string} otherCheckboxName - e.g. "Door_&_Window_Materials_Other"
     * @param {string} otherCheckboxId - e.g. "door_&_window_materials_other"
     * @param {string} otherTextId - e.g. "door_&_window_materials_other_text"
     */
    function validateCheckboxGroup(mainGroupName, otherCheckboxName, otherCheckboxId, otherTextId) {
        var mainCheckboxes = document.querySelectorAll("input[name='" + mainGroupName + "']");
        var otherCheckbox = document.querySelector("input[name='" + otherCheckboxName + "']");
        
        var isAnyChecked = false;
        mainCheckboxes.forEach(function(checkbox) {
            checkbox.style.outline = "";
            if(checkbox.checked) {
                isAnyChecked = true;
            }
        });
        if(otherCheckbox) {
            otherCheckbox.style.outline = "";
            if(otherCheckbox.checked) {
                isAnyChecked = true;
            }
        }
        if(!isAnyChecked) {
            if(mainCheckboxes.length) {
                mainCheckboxes[0].style.outline = "1px solid red";
            } else if(otherCheckbox) {
                otherCheckbox.style.outline = "1px solid red";
            }
            return false;
        }
        if(otherCheckbox && otherCheckbox.checked) {
            var otherText = document.getElementById(otherTextId);
            if(otherText.value.trim() === "") {
                otherText.style.border = "1px solid red";
                return false;
            } else {
                otherText.style.border = "";
            }
        }
        return true;
    }
</script>

<!-- Validate on Form Submit (Final Section) -->
<script>
    document.getElementById("multiStepForm").addEventListener("submit", function(e) {
        var currentSection = document.querySelector(".section.active");
        if (!validateSection(currentSection.id)) {
            e.preventDefault();
        }
    });
</script>

<!-- Dynamic Toggle for "Other" Text Fields -->
<script>
    // Structure Type "Other"
    document.getElementById("structure_type_other").addEventListener("change", function() {
        var otherText = document.getElementById("structure_type_other_text");
        if(this.checked) {
            otherText.style.display = "block";
            otherText.setAttribute("required", "required");
        } else {
            otherText.style.display = "none";
            otherText.removeAttribute("required");
            otherText.style.border = "";
        }
    });
    // Wall Type Preferences "Other"
    document.getElementById("wall_type_preferences_other").addEventListener("change", function() {
        var otherText = document.getElementById("wall_type_preferences_other_text");
        if(this.checked) {
            otherText.style.display = "block";
            otherText.setAttribute("required", "required");
        } else {
            otherText.style.display = "none";
            otherText.removeAttribute("required");
            otherText.style.border = "";
        }
    });
    // Floor Type Preferences "Other"
    document.getElementById("floor_type_preferences_other").addEventListener("change", function() {
        var otherText = document.getElementById("floor_type_preferences_other_text");
        if(this.checked) {
            otherText.style.display = "block";
            otherText.setAttribute("required", "required");
        } else {
            otherText.style.display = "none";
            otherText.removeAttribute("required");
            otherText.style.border = "";
        }
    });
    // Roof Type "Other"
    document.getElementById("roof_type_other").addEventListener("change", function() {
        var otherText = document.getElementById("roof_type_other_text");
        if(this.checked) {
            otherText.style.display = "block";
            otherText.setAttribute("required", "required");
        } else {
            otherText.style.display = "none";
            otherText.removeAttribute("required");
            otherText.style.border = "";
        }
    });
    // Roof Structure "Other"
    document.getElementById("roof_structure_other").addEventListener("change", function() {
        var otherText = document.getElementById("roof_structure_other_text");
        if(this.checked) {
            otherText.style.display = "block";
            otherText.setAttribute("required", "required");
        } else {
            otherText.style.display = "none";
            otherText.removeAttribute("required");
            otherText.style.border = "";
        }
    });
    // Ceiling Type "Other"
    document.getElementById("ceiling_type_other").addEventListener("change", function() {
        var otherText = document.getElementById("ceiling_type_other_text");
        if(this.checked) {
            otherText.style.display = "block";
            otherText.setAttribute("required", "required");
        } else {
            otherText.style.display = "none";
            otherText.removeAttribute("required");
            otherText.style.border = "";
        }
    });
    // Roof Design "Other"
    document.getElementById("roof_design_other").addEventListener("change", function() {
        var otherText = document.getElementById("roof_design_other_text");
        if(this.checked) {
            otherText.style.display = "block";
            otherText.setAttribute("required", "required");
        } else {
            otherText.style.display = "none";
            otherText.removeAttribute("required");
            otherText.style.border = "";
        }
    });
    // Door & Window Materials "Other"
    document.getElementById("door_&_window_materials_other").addEventListener("change", function() {
        var otherText = document.getElementById("door_&_window_materials_other_text");
        if(this.checked) {
            otherText.style.display = "block";
            otherText.setAttribute("required","required");
        } else {
            otherText.style.display = "none";
            otherText.removeAttribute("required");
            otherText.style.border = "";
        }
    });
    // Electrical System "Other"
    document.getElementById("electrical_system_other").addEventListener("change", function() {
        var otherText = document.getElementById("electrical_system_other_text");
        if(this.checked) {
            otherText.style.display = "block";
            otherText.setAttribute("required", "required");
        } else {
            otherText.style.display = "none";
            otherText.removeAttribute("required");
            otherText.style.border = "";
        }
    });
    // Plumbing System "Other"
    document.getElementById("plumbing_system_other").addEventListener("change", function() {
        var otherText = document.getElementById("plumbing_system_other_text");
        if(this.checked) {
            otherText.style.display = "block";
            otherText.setAttribute("required", "required");
        } else {
            otherText.style.display = "none";
            otherText.removeAttribute("required");
            otherText.style.border = "";
        }
    });
    // Heating & Cooling "Other"
    document.getElementById("heating_&_cooling_other").addEventListener("change", function() {
        var otherText = document.getElementById("heating_&_cooling_other_text");
        if(this.checked) {
            otherText.style.display = "block";
            otherText.setAttribute("required", "required");
        } else {
            otherText.style.display = "none";
            otherText.removeAttribute("required");
            otherText.style.border = "";
        }
    });
    // Interior Finish "Other"
    document.getElementById("interior_finish_other").addEventListener("change", function() {
        var otherText = document.getElementById("interior_finish_other_text");
        if(this.checked) {
            otherText.style.display = "block";
            otherText.setAttribute("required", "required");
        } else {
            otherText.style.display = "none";
            otherText.removeAttribute("required");
            otherText.style.border = "";
        }
    });
    // Flooring in Other Areas "Other"
    document.getElementById("flooring_in_other_areas_other").addEventListener("change", function() {
        var otherText = document.getElementById("flooring_in_other_areas_other_text");
        if(this.checked) {
            otherText.style.display = "block";
            otherText.setAttribute("required", "required");
        } else {
            otherText.style.display = "none";
            otherText.removeAttribute("required");
            otherText.style.border = "";
        }
    });
    // Sustainability Features "Other"
    document.getElementById("sustainability_features_other").addEventListener("change", function() {
        var otherText = document.getElementById("sustainability_features_other_text");
        if(this.checked) {
            otherText.style.display = "block";
            otherText.setAttribute("required", "required");
        } else {
            otherText.style.display = "none";
            otherText.removeAttribute("required");
            otherText.style.border = "";
        }
    });
    // Accessibility Features "Other"
    document.getElementById("accessibility_features_other").addEventListener("change", function() {
        var otherText = document.getElementById("accessibility_features_other_text");
        if(this.checked) {
            otherText.style.display = "block";
            otherText.setAttribute("required", "required");
        } else {
            otherText.style.display = "none";
            otherText.removeAttribute("required");
            otherText.style.border = "";
        }
    });
</script>

</body>
@endsection
