@extends('layout.front')

@section('title', 'Request a Housing Plan Drawing Quote | Lassana Gedara – Sri Lanka')

@section('meta_description', 'Get an expert housing plan drawing from Lassana Gedara. Provide project details, land specifics, and style preferences to receive an accurate plan quote for your dream property in Sri Lanka.')

@section('meta_keywords', 'housing plan drawing, construction plans, building design, Lassana Gedara, Sri Lanka, residential drawings, plan quote')

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
                <div class="title">Quotation for<br><span>Housing Plan Drawing </span></div>
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
                        {{-- <input type="hidden" value="{{ $data['Loan'] }}" name="Loan" required> --}}
                        <input type="hidden" value="{{ $data['Service'] }}" name="Service" required>
                    
                        <!-- Section 1: Project Details -->
                        <div class="section active" id="section1">
                            <h4 style="color: black;">Project Details:</h4>
                            
                            <!-- Project Type -->
                            <div class="mb-3">
                                <label for="projectType" class="form-label">Project Type <span class="text-danger">*</span></label><br>
                                <input type="checkbox" name="Project_Type[]" value="Residential"> Residential    
                                <input type="checkbox" name="Project_Type[]" value="Commercial" style="margin-left: 10px;"> Commercial
                                <input type="checkbox" name="Project_Type[]" value="Industrial" style="margin-left: 10px;"> Industrial
                                <input type="checkbox" name="Project_Type_other" value="Other" id="projectTypeOtherCheckbox" style="margin-left: 10px;"> Other:
                                <input type="text" name="Project_Type[]" id="projectTypeOtherText" style="background: #ffffff91; border: 1px solid rgba(0,0,0,0.27); border-radius: 4px; display: none;">
                            </div>
                    
                            <!-- Project Title/Name -->
                            <div class="mb-3">
                                <label for="projectTitle" class="form-label">Project Title/Name (if any)</label>
                                <input type="text" class="form-control" id="projectTitle" name="Project_Title">
                            </div>
                
                            <!-- Project Scope -->
                            <div class="mb-3">
                                <label for="projectScope" class="form-label">Project Scope <span class="text-danger">*</span></label><br>
                                <input type="checkbox" name="Project_Scope[]" value="New Build"> New Build
                                <input type="checkbox" name="Project_Scope[]" value="Renovation" style="margin-left: 10px;"> Renovation
                                <input type="checkbox" name="Project_Scope[]" value="Extension" style="margin-left: 10px;"> Extension
                                <input type="checkbox" name="Project_Scope_Other" value="Other" id="projectScopeOtherCheckbox" style="margin-left: 10px;"> Other:
                                <input type="text" name="Project_Scope[]" id="projectScopeOtherText" style="background: #ffffff91; border: 1px solid rgba(0,0,0,0.27); border-radius: 4px; display: none;">
                            </div>
                    
                            <!-- Estimated Budget (Optional) -->
                            <div class="mb-3">
                                <label for="estimatedBudget" class="form-label">Estimated Budget <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="estimatedBudget" name="Estimated_Budget" required>
                            </div>
                    
                            <!-- Expected Start Date (Optional) -->
                            <div class="mb-3">
                                <label for="expectedStartDate" class="form-label">Expected Start Date <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="expectedStartDate" name="Expected_Start_Date" required>
                            </div>
                    
                            <!-- Target Completion Date (Optional) -->
                            <div class="mb-3">
                                <label for="targetCompletionDate" class="form-label">Target Completion Date <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="targetCompletionDate" name="Target_Completion_Date" required>
                            </div>
                    
                            <button type="button" class="btn btn-primary" onclick="nextSection(2)" style="background-color: #992023; border-color: #992023;">Next</button>
                        </div>
                    
                        <!-- Section 2: Land Details -->
                        <div class="section" id="section2" style="display: none;">
                            <h4 style="color: black;">Land Details:</h4>
                            
                            <!-- Land Size -->
                            <div class="mb-3">
                                <label for="landSize" class="form-label">Land Size (in square meters or feet) <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="landSize" name="Land_Size" required>
                            </div>
                    
                            <!-- Land Shape -->
                            <div class="mb-3">
                                <label class="form-label">Land Shape <span class="text-danger">*</span></label><br>
                                <input type="checkbox" name="Land_Shape[]" value="Rectangular"> Rectangular
                                <input type="checkbox" name="Land_Shape[]" value="Square" style="margin-left: 10px;"> Square
                                <input type="checkbox" name="Land_Shape[]" value="Irregular" style="margin-left: 10px;"> Irregular
                                <input type="checkbox" name="Land_Shape_Other" value="Other" id="landShapeOtherCheckbox" style="margin-left: 10px;"> Other:
                                <input type="text" name="Land_Shape[]" id="landShapeOtherText" style="background: #ffffff91; border: 1px solid rgba(0,0,0,0.27); border-radius: 4px; display: none;">
                            </div>
                    
                            <!-- Land Topography -->
                            <div class="mb-3">
                                <label class="form-label">Land Topography <span class="text-danger">*</span></label><br>
                                <input type="checkbox" name="Land_Topography[]" value="Flat"> Flat
                                <input type="checkbox" name="Land_Topography[]" value="Sloping" style="margin-left: 10px;"> Sloping
                                <input type="checkbox" name="Land_Topography_Other" value="Other" id="landTopographyOtherCheckbox" style="margin-left: 10px;"> Other:
                                <input type="text" name="Land_Topography[]" id="landTopographyOtherText" style="background: #ffffff91; border: 1px solid rgba(0,0,0,0.27); border-radius: 4px; display: none;">
                            </div>
                    
                            <!-- Is the land cleared? -->
                            <div class="mb-3">
                                <label class="form-label">Is the land cleared? <span class="text-danger">*</span></label><br>
                                <input type="radio" name="Land_Cleared" value="Yes" required> Yes
                                <input type="radio" name="Land_Cleared" value="No" required style="margin-left: 10px;"> No
                            </div>
                    
                            <button type="button" class="btn btn-secondary" onclick="previousSection(1)">Previous</button>
                            <button type="button" class="btn btn-primary" onclick="nextSection(3)" style="background-color: #992023; border-color: #992023;">Next</button>
                        </div>
                    
                        <!-- Section 3: House Type and Layout -->
                        <div class="section" id="section3" style="display: none;">
                            <h4 style="color: black;">House Type and Layout:</h4>
                            
                            <!-- House Type -->
                            <div class="mb-3">
                                <label class="form-label">House Type <span class="text-danger">*</span></label><br>
                                <input type="checkbox" name="House_Type[]" value="Single-story"> Single-story
                                <input type="checkbox" name="House_Type[]" value="Two-story" style="margin-left: 10px;"> Two-story
                                <input type="checkbox" name="House_Type[]" value="Multi-story" style="margin-left: 10px;"> Multi-story
                                <input type="checkbox" name="House_Type_Other" value="Other" id="houseTypeOtherCheckbox" style="margin-left: 10px;"> Other:
                                <input type="text" name="House_Type[]" id="houseTypeOtherText" style="background: #ffffff91; border: 1px solid rgba(0,0,0,0.27); border-radius: 4px; display: none;">
                            </div>
                    
                            <!-- Number of Floors -->
                            <div class="mb-3">
                                <label for="numberOfFloors" class="form-label">Number of Floors <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="numberOfFloors" name="Number_of_Floors" required>
                            </div>
                    
                            <!-- Total House Area -->
                            <div class="mb-3">
                                <label for="totalHouseArea" class="form-label">Total House Area (Approx.) (in square meters or feet) <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="totalHouseArea" name="Total_House_Area" required>
                            </div>
                    
                            <button type="button" class="btn btn-secondary" onclick="previousSection(2)">Previous</button>
                            <button type="button" class="btn btn-primary" onclick="nextSection(4)" style="background-color: #992023; border-color: #992023;">Next</button>
                        </div>
                    
                        <!-- Section 4: Room Details -->
                        <div class="section" id="section4" style="display: none;">
                            <h4 style="color: black;">Room Details:</h4>
                            
                            <!-- Number of Bedrooms -->
                            <div class="mb-3">
                                <label for="numberOfBedrooms" class="form-label">Number of Bedrooms <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="numberOfBedrooms" name="Number_of_Bedrooms" required>
                            </div>
                            
                            <!-- Number of Bathrooms -->
                            <div class="mb-3">
                                <label for="numberOfBathrooms" class="form-label">Number of Bathrooms <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="numberOfBathrooms" name="Number_of_Bathrooms" required>
                            </div>
                            
                            <!-- Number of Kitchens -->
                            <div class="mb-3">
                                <label for="numberOfKitchens" class="form-label">Number of Kitchens <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="numberOfKitchens" name="Number_of_Kitchens" required>
                            </div>
                            
                            <!-- Additional Rooms -->
                            <div class="mb-3">
                                <label class="form-label">Additional Rooms (Living Room, Dining Room, Office)</label>
                                <input type="text" class="form-control" name="Additional_Room1" placeholder="Room 1">
                                <input type="text" class="form-control" name="Additional_Room2" placeholder="Room 2" style="margin-top: 5px;">
                                <input type="text" class="form-control" name="Additional_Room3" placeholder="Room 3" style="margin-top: 5px;">
                            </div>
                            
                            <!-- Room Sizes -->
                            <div class="mb-3">
                                <label class="form-label">Room Sizes (in square meters or feet)</label>
                                <input type="number" class="form-control" name="Bedroom1_Size" placeholder="Bedroom 1 Size" required>
                                <input type="number" class="form-control" name="Bedroom2_Size" placeholder="Bedroom 2 Size" style="margin-top: 5px;">
                                <input type="number" class="form-control" name="Living_Room_Size" placeholder="Living Room Size" style="margin-top: 5px;">
                                <input type="number" class="form-control" name="Kitchen_Size" placeholder="Kitchen Size" style="margin-top: 5px;" required>
                                <input type="number" class="form-control" name="Other_Room_Sizes" placeholder="Other Room Sizes (if applicable)" style="margin-top: 5px;">
                            </div>
                    
                            <button type="button" class="btn btn-secondary" onclick="previousSection(3)">Previous</button>
                            <button type="button" class="btn btn-primary" onclick="nextSection(5)" style="background-color: #992023; border-color: #992023;">Next</button>
                        </div>
                    
                        <!-- Section 5: Design & Style Preferences -->
                        <div class="section" id="section5" style="display: none;">
                            <h4 style="color: black;">Design & Style Preferences:</h4>
                            
                            <!-- Architectural Style Preferences -->
                            <div class="mb-3">
                                <label class="form-label">Architectural Style Preferences <span class="text-danger">*</span></label><br>
                                <input type="checkbox" name="Architectural_Style[]" value="Modern"> Modern
                                <input type="checkbox" name="Architectural_Style[]" value="Traditional" style="margin-left: 10px;"> Traditional
                                <input type="checkbox" name="Architectural_Style[]" value="Contemporary" style="margin-left: 10px;"> Contemporary
                                <input type="checkbox" name="Architectural_Style_Other" value="Other" id="architecturalStyleOtherCheckbox" style="margin-left: 10px;"> Other:
                                <input type="text" name="Architectural_Style[]" id="architecturalStyleOtherText" style="background: #ffffff91; border: 1px solid rgba(0,0,0,0.27); border-radius: 4px; display: none;">
                            </div>
                            
                            <!-- Preferred Materials -->
                            <div class="mb-3">
                                <label for="preferredMaterials" class="form-label">Preferred Materials (if any)</label>
                                <input type="text" class="form-control" id="preferredMaterials" name="Preferred_Materials">
                            </div>
                            
                            <!-- Specific Requirements or Features -->
                            <div class="mb-3">
                                <label for="specificRequirements" class="form-label">Any Specific Requirements or Features</label>
                                <textarea class="form-control" id="specificRequirements" name="Specific_Requirements" rows="4"></textarea>
                            </div>
                    
                            <button type="button" class="btn btn-secondary" onclick="previousSection(4)">Previous</button>
                            <button type="button" class="btn btn-primary" onclick="nextSection(6)" style="background-color: #992023; border-color: #992023;">Next</button>
                        </div>
                    
                        <!-- Section 6: Site Visit & Inspection -->
                        <div class="section" id="section6" style="display: none;">
                            <h4 style="color: black;">Site Visit & Inspection:</h4>
                            
                            <!-- Site Visit & Inspection Date -->
                            <div class="mb-3">
                                <label for="siteVisitDate" class="form-label">Site Visit & Inspection Date <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="siteVisitDate" name="Site_Visit_Date" required>
                            </div>
                    
                            <button type="button" class="btn btn-secondary" onclick="previousSection(5)">Previous</button>
                            <button type="submit" class="btn btn-primary" style="background-color: #992023; border-color: #992023;">Submit</button>
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
        // Define required checkbox groups per section by section ID.
        var requiredGroups = {
            'section1': [
                {
                    // Project Type: Standard checkboxes have name "Project_Type[]"
                    // The "Other" checkbox has a different name ("Project_Type_other") and its text field is "Project_Type[]"
                    groupName: "Project_Type[]",
                    otherCheckboxId: "projectTypeOtherCheckbox",
                    otherTextId: "projectTypeOtherText"
                },
                {
                    // Project Scope: Standard checkboxes have name "Project_Scope[]"
                    // "Other" checkbox: name="Project_Scope_Other", text field: name="Project_Scope[]"
                    groupName: "Project_Scope[]",
                    otherCheckboxId: "projectScopeOtherCheckbox",
                    otherTextId: "projectScopeOtherText"
                }
            ],
            'section2': [
                {
                    // Land Shape: Standard checkboxes have name "Land_Shape[]"
                    // "Other" checkbox: name="Land_Shape_Other", text field: name="Land_Shape[]"
                    groupName: "Land_Shape[]",
                    otherCheckboxId: "landShapeOtherCheckbox",
                    otherTextId: "landShapeOtherText"
                },
                {
                    // Land Topography: Standard checkboxes have name "Land_Topography[]"
                    // "Other" checkbox: name="Land_Topography_Other", text field: name="Land_Topography[]"
                    groupName: "Land_Topography[]",
                    otherCheckboxId: "landTopographyOtherCheckbox",
                    otherTextId: "landTopographyOtherText"
                }
            ],
            'section3': [
                {
                    // House Type: Standard checkboxes have name "House_Type[]"
                    // "Other" checkbox: name="House_Type_Other", text field: name="House_Type[]"
                    groupName: "House_Type[]",
                    otherCheckboxId: "houseTypeOtherCheckbox",
                    otherTextId: "houseTypeOtherText"
                }
            ],
            'section5': [
                {
                    // Architectural Style: Standard checkboxes have name "Architectural_Style[]"
                    // "Other" checkbox: name="Architectural_Style_Other", text field: name="Architectural_Style[]"
                    groupName: "Architectural_Style[]",
                    otherCheckboxId: "architecturalStyleOtherCheckbox",
                    otherTextId: "architecturalStyleOtherText"
                }
            ]
        };
    
        function validateCheckboxGroups(sectionId) {
            var groups = requiredGroups[sectionId];
            if (!groups) return true; // No required groups for this section
            for (var i = 0; i < groups.length; i++) {
                var group = groups[i];
                // Select checkboxes within the current section with the standard group name
                var groupElements = document.querySelectorAll('#' + sectionId + ' input[name="' + group.groupName + '"]');
                var checkedCount = 0;
                // Convert NodeList to Array and count checked boxes
                Array.from(groupElements).forEach(function(elem) {
                    if (elem.checked) {
                        checkedCount++;
                    }
                });
                // Check the separate "Other" checkbox (if it exists)
                var otherCheckbox = document.getElementById(group.otherCheckboxId);
                var otherText = document.getElementById(group.otherTextId);
                if (otherCheckbox && otherCheckbox.checked) {
                    checkedCount++;
                    // Validate that the corresponding text field is filled
                    if (otherText.value.trim() === "") {
                        otherText.setCustomValidity("This field is required when Other is selected.");
                        otherText.reportValidity();
                        return false;
                    } else {
                        otherText.setCustomValidity("");
                    }
                }
                // If no option was selected in this group, mark an error on the first checkbox
                if (checkedCount === 0) {
                    if (groupElements.length > 0) {
                        groupElements[0].setCustomValidity("Please select at least one option.");
                        groupElements[0].reportValidity();
                    }
                    return false;
                } else {
                    // Reset custom validity for all checkboxes in the group
                    Array.from(groupElements).forEach(function(elem) {
                        elem.setCustomValidity("");
                    });
                }
            }
            return true;
        }
    
        function nextSection(sectionNumber) {
            // Validate current section inputs using default HTML5 validation
            var currentSection = document.querySelector('.section.active') || document.getElementById('section1');
            var inputs = currentSection.querySelectorAll('input, select, textarea');
            var valid = true;
            inputs.forEach(function(input) {
                input.setCustomValidity(""); // Reset any custom validity
                if (!input.checkValidity()) {
                    input.reportValidity();
                    valid = false;
                }
            });
    
            // Validate required checkbox groups in the current section
            if (!validateCheckboxGroups(currentSection.id)) {
                valid = false;
            }
    
            if (valid) {
                // Hide current section
                currentSection.classList.remove('active');
                currentSection.style.display = 'none';
                // Show target section
                var targetSection = document.getElementById('section' + sectionNumber);
                targetSection.classList.add('active');
                targetSection.style.display = 'block';
            }
        }
    
        function previousSection(sectionNumber) {
            var currentSection = document.querySelector('.section.active');
            currentSection.classList.remove('active');
            currentSection.style.display = 'none';
            var targetSection = document.getElementById('section' + sectionNumber);
            targetSection.classList.add('active');
            targetSection.style.display = 'block';
        }
    
        // Toggle "Other" text inputs when corresponding "Other" checkboxes are clicked
        document.getElementById('projectTypeOtherCheckbox').addEventListener('change', function() {
            document.getElementById('projectTypeOtherText').style.display = this.checked ? 'block' : 'none';
        });
        document.getElementById('projectScopeOtherCheckbox').addEventListener('change', function() {
            document.getElementById('projectScopeOtherText').style.display = this.checked ? 'block' : 'none';
        });
        document.getElementById('landShapeOtherCheckbox').addEventListener('change', function() {
            document.getElementById('landShapeOtherText').style.display = this.checked ? 'block' : 'none';
        });
        document.getElementById('landTopographyOtherCheckbox').addEventListener('change', function() {
            document.getElementById('landTopographyOtherText').style.display = this.checked ? 'block' : 'none';
        });
        document.getElementById('houseTypeOtherCheckbox').addEventListener('change', function() {
            document.getElementById('houseTypeOtherText').style.display = this.checked ? 'block' : 'none';
        });
        document.getElementById('architecturalStyleOtherCheckbox').addEventListener('change', function() {
            document.getElementById('architecturalStyleOtherText').style.display = this.checked ? 'block' : 'none';
        });
    </script>
    
    
</body>
@endsection
