@extends('layout.front')

@section('title', 'Request an Interior Design & Fabrication Quote | Lassana Gedara – Sri Lanka')

@section('meta_description', 'Get a personalized quote for interior design and fabrication from Lassana Gedara. Our skilled professionals handle residential, commercial, and industrial projects with tailored solutions to transform your space in Sri Lanka.')

@section('meta_keywords', 'interior design quote, fabrication services, Lassana Gedara, Sri Lanka, residential renovation, commercial interior, tailored solutions')

@section('content')

<style>  
    
    label{
        color: black;
    }
</style>

<body style="
    background-image: url('{{ asset('assets/images/background/background.jpg') }}'); 
    background-size: inherit; 
    background-position: right; 
    background-repeat: no-repeat; 
    width: 100%; 
    height: 0vh;
">


<!-- Header Section -->
<section class="about-area"  style="margin-top: 120px;">
    <div class="container">
        <div class="sec-title text-center">
            <p>Welcome {{ $data['Title']}} {{ $data['Name']}}</p>
            <div class="title">Quotation for <br> <span>Interior Designing & Fabrication</span></div><br><br>
            </div>
        </div>
    </div>
</section>


<!-- Box Section -->
<div id="option1Details" class="hidden"  style="margin-top: 20px;">
    <div class="container containerquote">
        <div class="contact__wrapper shadow-lg mt-n9" style="border-radius: 30px;">
            <div class="row no-gutters ">
                <div class="col-lg-5 contact-info__wrapper p-5 order-lg-2" style="background: #992023;border-radius: 30px;">
                    <!-- <h3 class="color--white mb-5 text-light">Get in Touch</h3> -->
                    <ul class="contact-info__list list-style--none position-relative z-index-101">
                        <div class="contact info">
                            <h3>Contact Info</h3>
                            <div class="infoBox">
                                <div >
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

                <div class="col-lg-7 contact-form__wrapper p-5 order-lg-1 " style="background: url('assets/images/brand/back1-overlay.png'); background-size: cover; background-position: center; background-repeat: no-repeat; background-color: rgb(245 245 245 / 91%); ">

                    <form action="{{ route('getQuote') }}" method="POST" class="contact-form form-validate">
                        @csrf
                        <div class="row">
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
                    
                            <div class="section active" id="section1" style="width: 100%;">
                                <div class="row">
                                    <h4 style="color: black;">Project Overview:</h4>
                                </div>
                                <div class="row">
                                    <!-- Type of Project -->
                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="typeOfProject" class="quto">Type of Project</label>
                                            <select class="form-control" id="typeOfProject" name="Type_of_Project[]" required>
                                                <option value="Residential">Residential</option>
                                                <option value="Commercial">Commercial</option>
                                                <option value="Retail">Retail</option>
                                                <option value="Hospitality">Hospitality</option>
                                                <option value="Industrial">Industrial</option>
                                                <option id="optionOtherType">Other</option>
                                            </select>
                                        </div>
                                        <div class="form-group" id="otherTypeProjectContainer" style="display:none;">
                                            <label for="otherTypeProject" class="quto">Please specify Type of Project</label>
                                            <input type="text" class="form-control" id="otherTypeProject" name="Type_of_Project[]">
                                        </div>
                                    </div>
                                    <!-- Nature of Work -->
                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="natureOfWork" class="quto">Nature of Work</label>
                                            <select class="form-control" id="natureOfWork" name="Nature_of_Work" required>
                                                <option value="New Construction">New Construction</option>
                                                <option value="Renovation">Renovation</option>
                                                <option value="Expansion">Expansion</option>
                                                <option value="Refurbishment">Refurbishment</option>
                                                <option value="Interior Only">Interior Only</option>
                                                <option value="Fabrication Only">Fabrication Only</option>
                                                <option value="Combined">Combined</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- Project Scope -->
                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="projectScope" class="quto">Project Scope</label>
                                            <select class="form-control" id="projectScope" name="Project_Scope[]" required>
                                                <option value="Full Interior Design">Full Interior Design</option>
                                                <option value="Renovation / Remodeling">Renovation / Remodeling</option>
                                                <option value="Custom Fabrication">Custom Fabrication</option>
                                                <option value="Furniture Design and Installation">Furniture Design and Installation</option>
                                                <option value="Space Planning & Partitioning">Space Planning & Partitioning</option>
                                                <option value="Kitchen or Pantry Design">Kitchen or Pantry Design</option>
                                                <option value="Bathroom Upgrade">Bathroom Upgrade</option>
                                                <option value="Lighting Design">Lighting Design</option>
                                                <option value="Display or Retail Fitting">Display or Retail Fitting</option>
                                                <option value="MEP Setup">MEP Setup</option>
                                                <option id="optionOtherScope">Other</option>
                                            </select>
                                        </div>
                                        <div class="form-group" id="otherProjectScopeContainer" style="display:none;">
                                            <label for="otherProjectScope" class="quto">Please specify Project Scope</label>
                                            <input type="text" class="form-control" id="otherProjectScope" name="Project_Scope[]">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- Additional Comments -->
                                    <div class="col-sm-12 mb-3">
                                        <div class="form-group">
                                            <label for="additionalComments" class="quto">Project Description/ Vision</label>
                                            <textarea class="form-control" id="additionalComments" name="Additional_Comments" rows="8" placeholder="Enter any additional comments or special requests"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary" style="background-color: #992023; border-color: #992023;">Submit</button>
                            </div>
                        </div>
                    </form>
                    
                    <script>
                        // Handle "Other" option for Type of Project using option id
                        document.getElementById('typeOfProject').addEventListener('change', function() {
                            var otherContainer = document.getElementById('otherTypeProjectContainer');
                            var otherInput = document.getElementById('otherTypeProject');
                            var otherOption = document.getElementById('optionOtherType');
                            if (otherOption.selected) {
                                otherContainer.style.display = 'block';
                                otherInput.setAttribute('required', 'required');
                            } else {
                                otherContainer.style.display = 'none';
                                otherInput.removeAttribute('required');
                            }
                        });
                    
                        // Handle "Other" option for Project Scope using option id
                        document.getElementById('projectScope').addEventListener('change', function() {
                            var otherContainer = document.getElementById('otherProjectScopeContainer');
                            var otherInput = document.getElementById('otherProjectScope');
                            var otherOption = document.getElementById('optionOtherScope');
                            if (otherOption.selected) {
                                otherContainer.style.display = 'block';
                                otherInput.setAttribute('required', 'required');
                            } else {
                                otherContainer.style.display = 'none';
                                otherInput.removeAttribute('required');
                            }
                        });
                    </script>
                    
                    
                </div>
                    <!-- End Contact Form Wrapper -->

            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const dropdown = document.getElementById("optionsDropdown");
        const domesticSection = document.getElementById("option1Details");
        const commercialSection = document.getElementById("option2Details");
    
        function updateVisibility() {
            const selectedValue = dropdown.value;
            domesticSection.style.display = selectedValue === "option1" ? "block" : "none";
            commercialSection.style.display = selectedValue === "option2" ? "block" : "none";
        }
    
        dropdown.addEventListener("change", updateVisibility);
        updateVisibility(); // Run on page load to ensure correct initial state
    });
</script>
    
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
@endsection