@extends('layout.front')

@section('title', 'Quote')

@section('content')
<style>
    label{
        color: black;
    }
</style>

<body style="
    background-image: url('{{ asset('assets/images/background/background.jpg') }}'); 
    background-size: inherit; 
    background-position: left; 
    background-repeat: no-repeat; 
    width: 100%; 
    height: 100vh;
">

<section class="about-area" style="margin-top: 120px">
    <div class="container">
        <div class="sec-title text-center">
            <p>Welcome {{ $data['Name']}} </p>
            <div class="title">Quotation for Architectural <br><span> Drawing </span></div><br><br>
            <label for="selectOption" class="lead" style="color: black; font-weight: bold; font-size: 26px;">Select your Job Type</label><br>
            <select id="optionsDropdown" style="font-size: 18px;">
                <option value="option1">Domestic House</option>
                <option value="option2">Commercial Building</option>
            </select>
        </div>
    </div>
</section>

<div id="option1Details" style="display: none;">
    <div class="container containerquote">
        <div class="contact__wrapper shadow-lg" style="border-radius: 30px;">
            <div class="row no-gutters">
                <div class="col-lg-5 contact-info__wrapper p-5 order-lg-2" style="background: #992023; border-radius: 30px;">
                    <ul class="contact-info__list list-style--none position-relative z-index-101">
                        <div class="contact info">
                            <h3>Contact Info</h3>
                            <div class="infoBox">
                                <div>
                                    <span><ion-icon name="location"></ion-icon></span>
                                    <p><a class="text-white" href = "https://maps.app.goo.gl/uZXmo7nEcNCokSYc7">No.199, 6th floor,<br>Ward City Shopping Complex,<br>Merybiso Mw, Gampaha, Sri Lanka</a></p>
                                </div>

                                <div>
                                    <span><ion-icon name="mail"></ion-icon></span>
                                    <p><a class="text-white" href = "mailto: info@lassanagedara.com">info@lassanagedara.com</a></p>
                                </div>

                                <div>
                                    <span><ion-icon name="call"></ion-icon></span>
                                    <p><a class="text-white" href="tel:+94706920600">+94 706 920 600</a></p>
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

                        <div class="contact info" style="background: black; padding: 20px; border: 2px solid #333; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);"> <h3 class="pb-3 text-center">Why choose us?</h3>
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

                <div class="col-lg-7 contact-form__wrapper p-5 order-lg-1 " style="background: url('assets/images/brand/back1-overlay-archi.png'); background-size: cover; background-position: center; background-repeat: no-repeat; background-color: rgb(245 245 245 / 91%); }">                    
                    <div class="row">
                        <form action="{{route('getQuote')}}" method="POST" class="contact-form form-validate" id="drawingForm1" onsubmit="return validateForm('drawingForm1', 'errorMessage1')">
                            @csrf
                            <input type="hidden" value=" {{ $data['Title'] }}" name="Title" required>
                            <input type="hidden" value=" {{ $data['Name'] }}" name="Name" required>
                            <input type="hidden" value=" {{ $data['Country_Code'] }}" name="Country_Code" required>
                            <input type="hidden" value=" {{ $data['Contact'] }}" name="Contact" required>
                            <input type="hidden" value=" {{ $data['Email'] }}" name="Email" required>
                            <input type="hidden" value=" {{ $data['Address'] }}" name="Address" required>
                            <input type="hidden" value=" {{ $data['Service'] }}" name="Service" required>
                            <input type="hidden" value=" {{ $data['Loan'] }}" name="Loan" required>
                            <input type="hidden" value="Domestic House" name="Service_Type" required>
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label for="selectOption1" class="quto">Number of Floors</label>
                                        <select class="form-control" id="selectOption1" name="Number_of_Floors" required>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10+">10+</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label for="selectOption2" class="quto">Number of Rooms</label>
                                        <select class="form-control" id="selectOption2" name="Number_of_Rooms" required>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10+">10+</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label for="selectOption3" class="quto">Number of Bathrooms</label>
                                        <select class="form-control" id="selectOption3" name="Number_of_Bathrooms" required>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10+">10+</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label for="selectOption4" class="quto">Wall Type</label>
                                        <select class="form-control" id="selectOption4" name="Wall_Type" required>
                                            <option value="Engineering Bricks">Engineering Bricks</option>
                                            <option value="Cement Block Regular">Cement Block Regular</option>
                                            <option value="AAC Brick">AAC Brick</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label for="selectOption5" class="quto">Floor Type</label>
                                        <select class="form-control" id="selectOption5" name="Floor_Type" required>
                                            <option value="Tiles">Tiles</option>
                                            <option value="Titanium Cut">Titanium Cut</option>
                                            <option value="Ordinary Cement Rendering">Ordinary Cement Rendering</option>
                                            <option value="Wooden">Wooden</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label for="selectOption6" class="quto">Roof</label>
                                        <select class="form-control" id="selectOption6" name="Roof" required>
                                            <option value="Concrete Slab">Concrete Slab</option>
                                            <option value="Zink Aluminum">Zink Aluminum</option>
                                            <option value="Cement Roofing Sheets">Cement Roofing Sheets</option>
                                            <option value="Clay Tiles">Clay Tiles</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label for="selectOption7" class="quto">Roof Structure</label>
                                        <select class="form-control" id="selectOption7" name="Roof_Structure" required>
                                            <option value="Wooden">Wooden</option>
                                            <option value="Steel">Steel</option>
                                            <option value="Concrete">Concrete</option>
                                            <option value="Sandwich panels">Sandwich panels</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label for="selectOption8" class="quto">Ceiling Type</label>
                                        <select class="form-control" id="selectOption8" name="Ceiling_Type" required>
                                            <option value="Wooden">Wooden</option>
                                            <option value="Cement Sheets">Cement Sheets</option>
                                            <optgroup label="Suspended Ceiling (Hanging Ceiling)">
                                                <option value="Suspended Ceiling-Cement Sheets">Cement Sheets</option>
                                                <option value="Suspended Ceiling-Timber">Timber</option>
                                                <option value="Suspended Ceiling-U-PVC">U-PVC</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label for="selectOption9" class="quto">Door Window</label>
                                        <select class="form-control" id="selectOption9" name="Door_Window" required>
                                            <option value="Wooden">Wooden</option>
                                            <option value="U-PVC">U-PVC</option>
                                            <option value="Aluminum">Aluminum</option>
                                            <option value="Concrete">Concrete</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-12 mb-3">
                                    <label for="selectOption10" class="quto" >Drawing Requirements</label><br><br>
                                        <input type="checkbox" id="archi1" name="Drawing_Requirements[]" value="Interior Design with 3D design">
                                        <label for="archi1" class="quto">Interior Design with 3D Design</label><br>
                                        <input type="checkbox" id="archi2" name="Drawing_Requirements[]" value="Conceptual Design with 2D plans">
                                        <label for="archi2" class="quto">Conceptual Design with 2D Plans</label><br>
                                        <input type="checkbox" id="archi3" name="Drawing_Requirements[]" value="Conceptual Design with 2D plans with approval Drawings">
                                        <label for="archi3" class="quto">Conceptual Design with 2D plans with approval Drawings</label><br>
                                        <input type="checkbox" id="archi4" name="Drawing_Requirements[]" value="Conceptual Design with 3D plans with approval Drawings">
                                        <label for="archi4" class="quto">Conceptual Design with 3D plans with approval Drawings</label><br>
                                        <input type="checkbox" id="archi5" name="Drawing_Requirements[]" value="Schematic Design with 2D & 3D plans with approval Drawings">
                                        <label for="archi5" class="quto">Schematic Design with 2D & 3D plans with approval Drawings </label><br>
                                        <input type="checkbox" id="archi6" name="Drawing_Requirements[]" value="Schematic Design with 2D, 3D plans, with approval Drawings & BOQ">
                                        <label for="archi6" class="quto">Schematic Design with 2D, 3D plans, with approval Drawings & BOQ</label><br>
                                        <input type="checkbox" id="archi7" name="Drawing_Requirements[]" value="Schematic Design with 2D, 3D plans, approved Drawings, BOQ, Structural & MEP Designs.">
                                        <label for="archi7" class="quto">Schematic Design with 2D, 3D plans, approved Drawings, BOQ, Structural & MEP Designs.</label>
                                </div>

                                <div id="errorMessage1" style="color: red; display: none; margin-top: -15px; padding-bottom: 15px;">Please select at least one Drawing Requirement.</div>

                                <div class="col-sm-12 mb-3">
                                    <button type="submit" class="btn text-light"style="background: #992023;">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                <!-- End Contact Form Wrapper -->
                </div>
            </div>
        </div>
    </div>
</div>

<div id="option2Details" style="display: none;">
    <div class="container containerquote">
        <div class="contact__wrapper shadow-lg" style="border-radius: 30px;">
            <div class="row no-gutters">
                <div class="col-lg-5 contact-info__wrapper p-5 order-lg-2" style="background: #992023; border-radius: 30px;">
                    <!-- <h3 class="color--white mb-5 text-light">Get in Touch</h3> -->
                    <ul class="contact-info__list list-style--none position-relative z-index-101">
                        <div class="contact info">
                            <h3>Contact Info</h3>
                            <div class="infoBox">
                                <div>
                                    <span><ion-icon name="location"></ion-icon></span>
                                    <p><a class="text-white" href = "https://maps.app.goo.gl/uZXmo7nEcNCokSYc7">No.199, 6th floor,<br>Ward City Shopping Complex,<br>Merybiso Mw, Gampaha, Sri Lanka</a></p>
                                </div>

                                <div>
                                    <span><ion-icon name="mail"></ion-icon></span>
                                    <p><a class="text-white" href = "mailto: info@lassanagedara.com">info@lassanagedara.com</a></p>
                                </div>

                                <div>
                                    <span><ion-icon name="call"></ion-icon></span>
                                    <p><a class="text-white" href="tel:+94706920600">+94 706 920 600</a></p>
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

                        <div class="contact info" style="background: black; padding: 20px; border: 2px solid #333; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);"> <h3 class="pb-3 text-center">Why choose us?</h3>
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

                <div class="col-lg-7 contact-form__wrapper p-5 order-lg-1" style="background: url('assets/images/brand/back1-overlay.png'); background-size: cover; background-position: center; background-repeat: no-repeat; background-color: rgb(245 245 245 / 91%); border-radius: 30px;">
                    <form action="{{route('getQuote')}}" method="POST" class="contact-form form-validate" id="drawingForm2" onsubmit="return validateForm('drawingForm2', 'errorMessage2')">
                        @csrf
                        <div class="row">
                            <input type="hidden" value=" {{ $data['Title'] }}" name="Title" required>
                            <input type="hidden" value=" {{ $data['Name'] }}" name="Name" required>
                            <input type="hidden" value=" {{ $data['Country_Code'] }}" name="Country_Code" required>
                            <input type="hidden" value=" {{ $data['Contact'] }}" name="Contact" required>
                            <input type="hidden" value=" {{ $data['Email'] }}" name="Email" required>
                            <input type="hidden" value=" {{ $data['Address'] }}" name="Address" required>
                            <input type="hidden" value=" {{ $data['Loan'] }}" name="Loan" required>
                            <input type="hidden" value=" {{ $data['Service'] }}" name="Service" required>
                            <input type="hidden" value="Commercial Building" name="Service_Type" required>


                            <div class="col-sm-6 mb-3">
                                <div class="form-group">
                                    <label for="selectOption1" class="quto">Number of Floors</label>
                                    <select class="form-control" id="selectOption1" name="Number_of_Floors" required>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10+">10+</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-6 mb-3">
                                <div class="form-group">
                                    <label for="selectOption2" class="quto">Number of Rooms</label>
                                    <select class="form-control" id="selectOption2" name="Number_of_Rooms" required>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10+">10+</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-6 mb-3">
                                <div class="form-group">
                                    <label for="selectOption3" class="quto">Number of Bathrooms</label>
                                    <select class="form-control" id="selectOption3" name="Number_of_Bathrooms" required>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10+">10+</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-6 mb-3">
                                <div class="form-group">
                                    <label for="selectOption4" class="quto">Wall Type</label>
                                    <select class="form-control" id="selectOption4" name="Wall_Type" required>
                                        <option value="Engineering Bricks">Engineering Bricks</option>
                                        <option value="Cement Block Regular">Cement Block Regular</option>
                                        <option value="AAC Brick">AAC Brick</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-6 mb-3">
                                <div class="form-group">
                                    <label for="selectOption5" class="quto">Floor Type</label>
                                    <select class="form-control" id="selectOption5" name="Floor_Type" required>
                                        <option value="Tiles">Tiles</option>
                                        <option value="Titanium Cut">Titanium Cut</option>
                                        <option value="Ordinary Cement Rendering">Ordinary Cement Rendering</option>
                                        <option value="Wooden">Wooden</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-6 mb-3">
                                <div class="form-group">
                                    <label for="selectOption6" class="quto">Roof</label>
                                    <select class="form-control" id="selectOption6" name="Roof" required>
                                        <option value="Concrete Slab">Concrete Slab</option>
                                        <option value="Zink Aluminum">Zink Aluminum</option>
                                        <option value="Cement Roofing Sheets">Cement Roofing Sheets</option>
                                        <option value="Clay Tiles">Clay Tiles</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-12 mb-3 ">
                                <label for="selectOption10" class="quto">Drawing Requirements</label><br><br>
                                <input type="checkbox" id="archi1" name="Drawing_Requirements[]" value="Interior Design with 3D design">
                                <label for="archi1" class="quto">Interior Design with 3D Design</label><br>
                                <input type="checkbox" id="archi2" name="Drawing_Requirements[]" value="Conceptual Design with 2D plans">
                                <label for="archi2" class="quto">Conceptual Design with 2D Plans</label><br>
                                <input type="checkbox" id="archi3" name="Drawing_Requirements[]" value="Conceptual Design with 2D plans with approval Drawings" >
                                <label for="archi3" class="quto">Conceptual Design with 2D plans with approval Drawings</label><br>
                                <input type="checkbox" id="archi4" name="Drawing_Requirements[]" value="Conceptual Design with 3D plans with approval Drawings">
                                <label for="archi4" class="quto">Conceptual Design with 3D plans with approval Drawings</label><br>
                                <input type="checkbox" id="archi5" name="Drawing_Requirements[]" value="Schematic Design with 2D & 3D plans with approval Drawings">
                                <label for="archi5" class="quto">Schematic Design with 2D & 3D plans with approval Drawings </label><br>
                                <input type="checkbox" id="archi6" name="Drawing_Requirements[]" value="Schematic Design with 2D, 3D plans, with approval Drawings & BOQ" >
                                <label for="archi6" class="quto">Schematic Design with 2D, 3D plans, with approval Drawings & BOQ</label><br>
                                <input type="checkbox" id="archi7" name="Drawing_Requirements[]" value="Schematic Design with 2D, 3D plans, approved Drawings, BOQ, Structural & MEP Designs." >
                                <label for="archi7" class="quto">Schematic Design with 2D, 3D plans, approved Drawings, BOQ, Structural & MEP Designs.</label>
                            </div>

                            <div id="errorMessage2" style="color: red; display: none; margin-top: -15px; padding-bottom: 15px;">Please select at least one Drawing Requirement.</div>


                            <div class="col-sm-12 mb-3">
                                <button type="submit" class="btn text-light" style="background: #992023;">Submit</button>
                            </div>

                        </div>
                    </form>
                </div>
                <!-- End Contact Form Wrapper -->

            </div>
        </div>
    </div>
</div>



{{-- <script>
    function validateForm() {
        // Get all checkboxes
        var checkboxes = document.querySelectorAll('#archi1, #archi2, #archi3, #archi4, #archi5, #archi6, #archi7');
        var isChecked = Array.from(checkboxes).some(checkbox => checkbox.checked);
    
        // Get the error message container
        var errorMessage = document.getElementById('errorMessage');
    
        // If no checkbox is selected, show the error message and return false to prevent form submission
        if (!isChecked) {
            errorMessage.style.display = 'block';
            return false;
        }
    
        // If at least one checkbox is selected, hide the error message
        errorMessage.style.display = 'none';
        return true; // Allow form submission
    }
</script> --}}

{{-- <script>
    function validateForm() {
        // Get all checkboxes with the name 'Drawing_Requirements[]'
        var checkboxes = document.getElementsByName('Drawing_Requirements[]');
        var isChecked = Array.from(checkboxes).some(checkbox => checkbox.checked);

        // Get the error message container
        var errorMessage = document.getElementById('errorMessage');

        // If no checkbox is selected, show the error message and return false to prevent form submission
        if (!isChecked) {
            errorMessage.style.display = 'block';
            return false;
        }

        // If at least one checkbox is selected, hide the error message
        errorMessage.style.display = 'none';
        return true; // Allow form submission
    }
</script> --}}

{{-- <script>
    function validateForm(formId, errorId) {
        // Get all checkboxes in the given form
        var checkboxes = document.querySelectorAll(`#${formId} input[type="checkbox"]`);
        var isChecked = Array.from(checkboxes).some(checkbox => checkbox.checked);

        // Get the error message container
        var errorMessage = document.getElementById(errorId);

        // If no checkbox is selected, show the error message and return false to prevent form submission
        if (!isChecked) {
            errorMessage.style.display = 'block';
            return false;
        }

        // If at least one checkbox is selected, hide the error message
        errorMessage.style.display = 'none';
        return true; // Allow form submission
    }
</script> --}}

{{-- <script>
    function getSelectedValues(formId) {
        // Get all checked checkboxes in the given form
        var checkboxes = document.querySelectorAll(`#${formId} input[type="checkbox"]:checked`);
        
        // Extract values from checked checkboxes
        var selectedValues = Array.from(checkboxes).map(checkbox => checkbox.value);

        return selectedValues;
    }

    function validateForm(formId, errorId) {
        var selectedValues = getSelectedValues(formId);
        var errorMessage = document.getElementById(errorId);

        // If no checkbox is selected, show error message
        if (selectedValues.length === 0) {
            errorMessage.style.display = 'block';
            return false;
        }

        // Hide error message if at least one is selected
        errorMessage.style.display = 'none';

        console.log("Selected values:", selectedValues); // Log all selected values (or send them to backend)

        return true; // Allow form submission
    }
</script> --}}

<script>
    function validateForm(formId, errorId) {
        var checkboxes = document.querySelectorAll(`#${formId} input[type="checkbox"]:checked`);
        var errorMessage = document.getElementById(errorId);

        // If no checkbox is selected, show error message
        if (checkboxes.length === 0) {
            errorMessage.style.display = 'block';
            return false;
        }

        // Hide error message if at least one is selected
        errorMessage.style.display = 'none';

        // Capture all selected values
        var selectedValues = Array.from(checkboxes).map(checkbox => checkbox.value);
        
        console.log("Selected values:", selectedValues); // Logging selected values
       
        return true; // Allow form submission
    }
</script>

    
<script>
    const optionsDropdown = document.getElementById("optionsDropdown");
    const option1Details = document.getElementById("option1Details");
    const option2Details = document.getElementById("option2Details");
  
    // Function to show/hide details
    function toggleDetails() {
      const selectedOption = optionsDropdown.value;
  
      // Hide all details
      option1Details.style.display = "none";
      option2Details.style.display = "none";
  
      // Show details for the selected option
      if (selectedOption === "option1") {
        option1Details.style.display = "block";
      } else if (selectedOption === "option2") {
        option2Details.style.display = "block";
      }
    }
  
    // Trigger the function on page load
    window.addEventListener("load", function() {
      toggleDetails(); // Call it once on load to ensure proper state
    });
  
    // Add event listener to the dropdown
    optionsDropdown.addEventListener("change", toggleDetails);
</script>
  
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
@endsection