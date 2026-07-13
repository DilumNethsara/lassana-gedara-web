@extends('layout.front')

@section('title', 'Quote')

@section('content')

<style>
    label{
        color: black;
        font-size: 18px;
    }
    select{
        font-size: 17px;
    }
</style>

<body style="
    background-image: url('{{ asset('assets/images/background/background.jpg') }}'); 
    background-size: inherit; 
    background-position: center; 
    background-repeat: no-repeat; 
    width: 100%; 
    height: 0vh;
">

<section class="about-area" style="margin-top: -70px;">
    <div class="container">
        <div class="sec-title text-center">
            <p></p>
            <div class="title"><br><span></span></div>
        </div>
    </div>
</section>

@if (session('success'))
    <div style="text-align: center;" class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div style="text-align: center;" class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<div class="container d-flex justify-content-center align-items-center min-vh-100" style="padding-bottom: 35px;">
    <div class="row border rounded-5 p-4 bg-white shadow-lg w-100" style="max-width: 1000px;">
        <!-- Left Box -->
        <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column p-4 text-white" style="background: #992023;">
            <div class="text-center mb-4">
                <h3>Build Your Own Paradise With <br>Lassana Gedara Constructions</h3>
            </div>
            <div class="contact-info" style="text-align: center;">
                <h4>Contact Info</h4>
                <div class="mb-3">
                    <span class="me-2"><i class="bi bi-geo-alt"></i></span>
                    <p class="mb-0"><a class="text-white text-decoration-none" href="https://maps.app.goo.gl/uZXmo7nEcNCokSYc7">No.199, 6th floor, Ward City Shopping Complex, Gampaha, Sri Lanka</a></p>
                </div>
                <div class="mb-3">
                    <span class="me-2"><i class="bi bi-envelope"></i></span>
                    <p class="mb-0"><a class="text-white text-decoration-none" href="mailto:info@lassanagedara.com">info@lassanagedara.com</a></p>
                </div>
                <div class="mb-3">
                    <span class="me-2"><i class="bi bi-telephone"></i></span>
                    <p class="mb-0"><a class="text-white text-decoration-none" href="tel:+94706920600">+94 706 920 600</a></p>
                </div>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="https://www.facebook.com/lassanagedara" class="text-white"><i class="bi bi-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="text-white"><i class="bi bi-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="tel:+94706920600" class="text-white"><i class="bi bi-whatsapp"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="text-white"><i class="bi bi-linkedin"></i></a></li>
                </ul>
            </div>
        </div>

        <!-- Right Box -->
        <div class="col-md-6 p-4">
            <form action="{{route('quote')}}" method="POST">
                @csrf
                <!-- Section 1: Personal & Contact Details -->
                <div id="section1">
                    <!-- Title -->
                    <div class="mb-3">
                        <label for="selectTitle" class="form-label">Title <span class="text-danger">*</span></label>
                        <select class="form-select" id="selectTitle" name="Title" required>
                            <option value="Miss.">Miss.</option>
                            <option value="Mrs.">Mrs.</option>
                            <option value="Mr.">Mr.</option>
                            <option value="Rev.">Rev.</option>
                        </select>
                        @error('Title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Full Name -->
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Full Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="fullName" name="Name" required>
                        @error('Name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- NIC/Passport -->
                    <div class="mb-3">
                        <label for="nicPassport" class="form-label">NIC/Passport <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="nicPassport" name="NIC_Passport" required>
                        @error('NIC_Passport')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Business/Company Name -->
                    <div class="mb-3">
                        <label for="businessCompany" class="form-label">Business/Company Name <span class="text-danger"></span></label>
                        <input type="text" class="form-control" id="businessCompany" name="Business_Company_Name">
                        @error('Business_Company_Name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Designation -->
                    <div class="mb-3">
                        <label for="designation" class="form-label">Designation <span class="text-danger"></span></label>
                        <input type="text" class="form-control" id="designation" name="Designation">
                        @error('Designation')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Phone Number -->
                    <div class="mb-3">
                        <label for="phoneNumber" class="form-label">Phone Number <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <select class="form-select" id="countryCode" name="Country_Code" style="max-width: 120px; padding-right: 15px;">
                                <option value="+94" selected>+94</option>
                                <option value="+44">+44</option>
                                <option value="+1">+1</option>
                                <!-- Add more options as needed -->
                            </select>
                            @error('Country_Code')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <input type="number" class="form-control" id="phoneNumber" name="Contact" style="margin-left: 20px;" required>
                            @error('Contact')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Alternative Phone Number -->
                    <div class="mb-3">
                        <label for="alternativePhoneNumber" class="form-label">Alternative Phone Number <span class="text-danger"></span></label>
                        <div class="input-group">
                            <select class="form-select" id="" name="Alternative_Country_Code" style="max-width: 120px; padding-right: 15px;">
                                <option value="+94" selected>+94</option>
                                <option value="+44">+44</option>
                                <option value="+1">+1</option>
                                <!-- Add more options as needed -->
                            </select>
                            @error('Alternative_Country_Code')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <input type="number" class="form-control" id="" name="Alternative_Contact" style="margin-left: 20px;">
                            @error('Alternative_Contact')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" id="email" name="Email" required>
                        @error('Email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Next Button -->
                    <button type="button" class="btn w-100 text-white" style="background: #992023;" onclick="showSection2()">Next</button>
                </div>

                <!-- Section 2: Project & Job Details -->
                <div id="section2" style="display: none;">
                    <!-- Address of Project Site -->
                    <div class="mb-3">
                        <label for="projectAddress" class="form-label">Address of Project Site <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="projectAddress" name="Project_Address" placeholder="Street" required>
                        @error('Project_Address')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <input type="text" class="form-control" id="" name="Project_City" style="margin-top: 5px;" placeholder="City" required>
                        @error('Project_City')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <input type="text" class="form-control" id="" name="Project_Postal_Code" style="margin-top: 5px;" placeholder="Postal Code" required>
                        @error('Project_Postal_Code')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Mailing/Billing Address -->
                    <div class="mb-3">
                        <label for="homeAddress" class="form-label">Mailing/Billing Address <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="homeAddress" name="Address" placeholder="Street" required>
                        @error('Address')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <input type="text" class="form-control" id="" name="City" style="margin-top: 5px;" placeholder="City" required>
                        @error('City')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <input type="text" class="form-control" id="" name="Postal_Code" style="margin-top: 5px;" placeholder="Postal Code" required>
                        @error('Postal_Code')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Preferred Time for Communication -->
                    <div class="mb-3">
                        <label for="preferredTime" class="form-label">Preferred Time for Communication <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="preferredTime" name="Preferred_Time_for_Communication" placeholder="e.g., 10:00 AM - 12:00 PM" required>
                        @error('Preferred_Time_for_Communication')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Preferred Method of Contact -->
                    <div class="mb-3">
                        <label class="form-label">Preferred Method of Contact <span class="text-danger">*</span></label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="Preferred_Method_of_Contact" id="contactEmail" value="Email" required>
                                <label class="form-check-label" for="contactEmail">Email</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="Preferred_Method_of_Contact" id="contactPhone" value="Phone">
                                <label class="form-check-label" for="contactPhone">Phone</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="Preferred_Method_of_Contact" id="contactText" value="Text">
                                <label class="form-check-label" for="contactText">Text</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="Preferred_Method_of_Contact" id="contactWhatsApp" value="WhatsApp">
                                <label class="form-check-label" for="contactWhatsApp">WhatsApp</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="Preferred_Method_of_Contact" id="contactViber" value="Viber">
                                <label class="form-check-label" for="contactViber">Viber</label>
                            </div>
                        </div>
                        @error('Preferred_Method_of_Contact')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Please Select Job Type -->
                    <div class="mb-4">
                        <label for="selectOption" class="form-label">Please Select Job Type <span class="text-danger">*</span></label>
                        <select class="form-select" id="selectOption" name="Service">
                            <option value="Domestic House">Domestic House</option>
                            <option value="Commercial Building">Commercial Building</option>
                            <option value="Interior Designing & Fabrication">Interior Designing & Fabrication</option>                        
                            <option value="Housing Plan Drawing">Housing Plan Drawing</option>  
                            <option value="BOQ">BOQ</option>                      
                        </select>
                        @error('Service')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Google reCAPTCHA -->
                    <div class="mb-3">
                    <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}"></div>
                         @if ($errors->has('captcha'))
                   <span class="text-danger">{{ $errors->first('captcha') }}</span>
                         @endif
                   </div>

                    <!-- Navigation Buttons: Previous & Submit -->
                    <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-secondary" onclick="showSection1()">Previous</button>
                        <button type="submit" class="btn text-white" style="background: #992023;">Submit</button>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
</div>

</body>

{{-- <script>
    function showSection2() {
        // Validate section1 inputs
        var section1 = document.getElementById('section1');
        var inputs = section1.querySelectorAll('input, select');
        var valid = true;
        inputs.forEach(function(input) {
            if (!input.checkValidity()) {
                input.reportValidity();
                valid = false;
            }
        });
        if (valid) {
            document.getElementById('section1').style.display = 'none';
            document.getElementById('section2').style.display = 'block';
        }
    }

    function showSection1() {
        document.getElementById('section2').style.display = 'none';
        document.getElementById('section1').style.display = 'block';
    }
</script> --}}

{{-- <script>
    function showSection2() {
        // Validate section1 inputs
        var section1 = document.getElementById('section1');
        var inputs = section1.querySelectorAll('input, select');
        var valid = true;
        inputs.forEach(function(input) {
            if (!input.checkValidity()) {
                input.reportValidity();
                valid = false;
            }
        });

        // Custom validation for Business/Company Name & Designation
        var businessField = document.getElementById('businessCompany');
        var designationField = document.getElementById('designation');
        if (businessField && designationField) {
            if (businessField.value.trim() !== '' && designationField.value.trim() === '') {
                alert('Please fill in the Designation field if Business/Company Name is provided.');
                designationField.focus();
                valid = false;
            }
        }

        if (valid) {
            document.getElementById('section1').style.display = 'none';
            document.getElementById('section2').style.display = 'block';
        }
    }

    function showSection1() {
        document.getElementById('section2').style.display = 'none';
        document.getElementById('section1').style.display = 'block';
    }
</script> --}}

<script>
    function showSection2() {
        // Validate section1 inputs using default HTML5 validation
        var section1 = document.getElementById('section1');
        var inputs = section1.querySelectorAll('input, select');
        var valid = true;
        inputs.forEach(function(input) {
            // Reset any previously set custom validity messages
            input.setCustomValidity("");
            if (!input.checkValidity()) {
                input.reportValidity();
                valid = false;
            }
        });

        // Custom validation for Designation based on Business/Company Name
        var businessField = document.getElementById('businessCompany');
        var designationField = document.getElementById('designation');
        if (businessField && designationField) {
            // Reset the custom validity on the designation field
            designationField.setCustomValidity("");
            if (businessField.value.trim() !== "" && designationField.value.trim() === "") {
                // Set custom validity so that the browser shows its default message
                designationField.setCustomValidity("Please fill in the Designation field if Business/Company Name is provided.");
                designationField.reportValidity();
                valid = false;
            }
        }

        if (valid) {
            document.getElementById('section1').style.display = 'none';
            document.getElementById('section2').style.display = 'block';
        }
    }

    function showSection1() {
        document.getElementById('section2').style.display = 'none';
        document.getElementById('section1').style.display = 'block';
    }
</script>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endsection