@extends('admin.layout.admin_front')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  @if(session('success'))
    <div id="success-message" class="alert alert-success" style="text-align: center; font-size: 18px;">
      {{ session('success') }}
    </div>    
  @endif

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>{{ $service ?? '' }} Quotation Inquiry Details &nbsp;|&nbsp; LG/INQ/{{ $quote->created_at->format('Y') }}/{{ sprintf('%04d', $quote->id) }}</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Domestic House Quotation Inquiry</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-12">
          <!-- general form elements -->
          <div class="card card-primary" style="padding-bottom: 20px;">
            <div class="card-header">
              <h3 class="card-title">
                {{ $quote->title ?? '' }}{{ $quote->name ?? '' }}'s {{ $service ?? '' }} Quotation Inquiry Details - {{ $quote->created_at->format('Y-m-d') }}
              </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('update_quote', $quote->id) }}" method="POST">
              @csrf
              @method('PUT')
              <div class="card-body">
                <!-- General Information -->
                <div class="row">
                  <h3>General Information</h3>
                </div>
                
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Title</label>
                      <input type="text" class="form-control" name="Title" value="{{ $quote->title ?? '' }}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Name</label>
                      <input type="text" class="form-control" name="Name" value="{{ $quote->name ?? '' }}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">NIC/ Passport Number</label>
                      <input type="text" class="form-control" name="NIC_Passport" value="{{ $additionalDetails['NIC_Passport'] ?? '' }}">
                    </div>
                  </div>
                </div>
                <div style="{{ empty($additionalDetails['Business_Company_Name']) ? 'display: none;' : '' }}">
                  <div class="row">
                    <h5>Business/ Company Details</h5>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Business/ Company Name</label>
                        <input type="text" class="form-control" name="Business_Company_Name" value="{{ $additionalDetails['Business_Company_Name'] ?? '' }}">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Designation</label>
                        <input type="text" class="form-control" name="Designation" value="{{ $additionalDetails['Designation'] ?? '' }}">
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="row">
                  <h5>Client Contact</h5>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Country code</label>
                      <input type="text" class="form-control" name="Country_Code" value="{{ $quote->country_code ?? '' }}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Contact</label>
                      <input type="text" class="form-control" name="Contact" value="{{ $quote->contact ?? '' }}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Email</label>
                      <input type="text" class="form-control" name="Email" value="{{ $quote->email ?? '' }}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Preferred Time for Communication</label>
                      <input type="text" class="form-control" name="Preferred_Time_for_Communication" value="{{ $additionalDetails['Preferred_Time_for_Communication'] ?? '' }}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Preferred Method of Contact</label>
                      <input type="text" class="form-control" name="Preferred_Method_of_Contact" value="{{ $additionalDetails['Preferred_Method_of_Contact'] ?? '' }}">
                    </div>
                  </div>
                </div>
                <div style="{{ empty($additionalDetails['Alternative_Contact']) ? 'display: none;' : '' }}">
                  <div class="row">
                    <h5>Client Alternative Contact</h5>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Country code</label>
                        <input type="text" class="form-control" name="Alternative_Country_Code" value="{{ $additionalDetails['Alternative_Country_Code'] ?? '' }}">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Contact</label>
                        <input type="text" class="form-control" name="Alternative_Contact" value="{{ $additionalDetails['Alternative_Contact'] ?? '' }}">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <h5>Mailling/ Billing Address</h5>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Address</label>
                      <input type="text" class="form-control" name="Address" value="{{ $quote->address ?? '' }}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">City</label>
                      <input type="text" class="form-control" name="City" value="{{ $quote->city ?? '' }}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Postal code</label>
                      <input type="text" class="form-control" name="Postal_Code" value="{{ $quote->postal_code ?? '' }}">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <h5>Project Address</h5>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Address</label>
                      <input type="text" class="form-control" name="Project_Address" value="{{ $additionalDetails['Project_Address'] ?? '' }}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">City</label>
                      <input type="text" class="form-control" name="Project_City" value="{{ $additionalDetails['Project_City'] ?? '' }}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Postal code</label>
                      <input type="text" class="form-control" name="Project_Postal_Code" value="{{ $additionalDetails['Project_Postal_Code'] ?? '' }}">
                    </div>
                  </div>
                </div>




                <div class="row">
                  
                  
    
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Requested Service</label>
                      <input type="text" class="form-control" name="Service" value="{{ $quote->service ?? '' }}" readonly>
                    </div>
                  </div>
                </div>

                <!-- Building Specifications -->
                <div class="row">
                  <h3>Project Details</h3>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Project Type</label>
                            @foreach ($additionalDetails['Project_Type'] ?? [] as $value)
                            @if(!is_null($value) && $value !== '')
                                <input type="text" class="form-control" name="Project_Type[]" value="{{ $value }}" style="margin-bottom: 5px;">
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Project Scope</label>
                            @foreach ($additionalDetails['Project_Scope'] ?? [] as $value)
                            @if(!is_null($value) && $value !== '')
                                <input type="text" class="form-control" name="Project_Scope[]" value="{{ $value }}" style="margin-bottom: 5px;">
                            @endif
                            @endforeach
                        </div>
                    </div>
                  <div class="col-md-6" style="{{ empty($additionalDetails['Project_Title']) ? 'display: none;' : '' }}">
                    <div class="form-group">
                      <label for="">Project Title</label>
                      <input type="text" class="form-control" name="Project_Title" value="{{ $additionalDetails['Project_Title'] ?? '' }}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Estimated Budget</label>
                      <input type="number" class="form-control" name="Estimated_Budget" value="{{ $additionalDetails['Estimated_Budget'] ?? '' }}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Expected Start Date</label>
                      <input type="text" class="form-control" name="Expected_Start_Date" value="{{ $additionalDetails['Expected_Start_Date'] ?? '' }}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Target Completion Date</label>
                      <input type="text" class="form-control" name="Target_Completion_Date" value="{{ $additionalDetails['Target_Completion_Date'] ?? '' }}">
                    </div>
                  </div>                  
                </div>

                <!-- Materials and Structure -->
                <div class="row">
                  <h3>Land Details</h3>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Land Shape</label>
                      @foreach ($additionalDetails['Land_Shape'] ?? [] as $value)
                        @if(!is_null($value) && $value !== '')
                          <input type="text" class="form-control" name="Land_Shape[]" value="{{ $value }}" style="margin-bottom: 5px;">
                        @endif
                      @endforeach
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Land Topography</label>
                      @foreach ($additionalDetails['Land_Topography'] ?? [] as $value)
                        @if(!is_null($value) && $value !== '')
                          <input type="text" class="form-control" name="Land_Topography[]" value="{{ $value }}" style="margin-bottom: 5px;">
                        @endif
                      @endforeach
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Land Cleared ?</label>
                      <input type="text" class="form-control" name="Land_Cleared" value="{{ $additionalDetails['Land_Cleared'] ?? '' }}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Land Size</label>
                      <input type="text" class="form-control" name="Land_Size" value="{{ $additionalDetails['Land_Size'] ?? '' }}">
                    </div>
                  </div>
                </div>

                <!-- Doors & Windows -->
                <div class="row">
                  <h3>House Type and Layout</h3>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">House Type</label>
                      @foreach ($additionalDetails['House_Type'] ?? [] as $value)
                        @if(!is_null($value) && $value !== '')
                          <input type="text" class="form-control" name="House_Type[]" value="{{ $value }}" style="margin-bottom: 5px;">
                        @endif
                      @endforeach
                    </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Number of Floors</label>
                          <input type="text" class="form-control" name="Number_of_Floors" value="{{ $additionalDetails['Number_of_Floors'] ?? '' }}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Total House Area</label>
                          <input type="text" class="form-control" name="Total_House_Area" value="{{ $additionalDetails['Total_House_Area'] ?? '' }}">
                        </div>
                      </div>
                </div>

                <!-- Systems and Services -->
                <div class="row">
                  <h3>Room Details</h3>
                </div>
                <div class="row">
                    <div class="col-md-4" style="{{ empty($additionalDetails['Number_of_Bedrooms']) ? 'display: none;' : '' }}">
                        <div class="form-group">
                          <label for="">Number of Bedrooms</label>
                          <input type="text" class="form-control" name="Number_of_Bedrooms" value="{{ $additionalDetails['Number_of_Bedrooms'] ?? '' }}">
                        </div>
                    </div>
                    <div class="col-md-4" style="{{ empty($additionalDetails['Number_of_Kitchens']) ? 'display: none;' : '' }}">
                        <div class="form-group">
                          <label for="">Number of Kitchens</label>
                          <input type="text" class="form-control" name="Number_of_Kitchens" value="{{ $additionalDetails['Number_of_Kitchens'] ?? '' }}">
                        </div>
                    </div>
                    <div class="col-md-4" style="{{ empty($additionalDetails['Number_of_Bathrooms']) ? 'display: none;' : '' }}">
                        <div class="form-group">
                          <label for="">Number of Bathrooms</label>
                          <input type="text" class="form-control" name="Number_of_Bathrooms" value="{{ $additionalDetails['Number_of_Bathrooms'] ?? '' }}">
                        </div>
                    </div>               
                </div>
                <div class="row">
                    <div class="col-md-4" style="{{ empty($additionalDetails['Additional_Room1']) ? 'display: none;' : '' }}">
                        <div class="form-group">
                          <label for="">Additional Rooms</label>
                          <input type="text" class="form-control" name="Additional_Room1" value="{{ $additionalDetails['Additional_Room1'] ?? '' }}">
                        </div>
                    </div>
                    <div class="col-md-4" style="{{ empty($additionalDetails['Additional_Room2']) ? 'display: none;' : '' }}">
                        <div class="form-group">
                          <label for="">&nbsp;</label>
                          <input type="text" class="form-control" name="Additional_Room2" value="{{ $additionalDetails['Additional_Room2'] ?? '' }}">
                        </div>
                    </div>
                    <div class="col-md-4" style="{{ empty($additionalDetails['Additional_Room3']) ? 'display: none;' : '' }}">
                        <div class="form-group">
                          <label for="">&nbsp;</label>
                          <input type="text" class="form-control" name="Additional_Room3" value="{{ $additionalDetails['Additional_Room3'] ?? '' }}">
                        </div>
                    </div>               
                </div>
                <div class="row">
                    <div class="col-md-4" style="{{ empty($additionalDetails['Bedroom1_Size']) ? 'display: none;' : '' }}">
                        <div class="form-group">
                          <label for="">Bedroom 1 Size</label>
                          <input type="text" class="form-control" name="Bedroom1_Size" value="{{ $additionalDetails['Bedroom1_Size'] ?? '' }}">
                        </div>
                    </div>
                    <div class="col-md-4" style="{{ empty($additionalDetails['Bedroom2_Size']) ? 'display: none;' : '' }}">
                        <div class="form-group">
                          <label for="">Bedroom 2 Size</label>
                          <input type="text" class="form-control" name="Bedroom2_Size" value="{{ $additionalDetails['Bedroom2_Size'] ?? '' }}">
                        </div>
                    </div>
                    <div class="col-md-4" style="{{ empty($additionalDetails['Living_Room_Size']) ? 'display: none;' : '' }}">
                        <div class="form-group">
                          <label for="">Living Room Size</label>
                          <input type="text" class="form-control" name="Living_Room_Size" value="{{ $additionalDetails['Living_Room_Size'] ?? '' }}">
                        </div>
                    </div> 
                    <div class="col-md-4" style="{{ empty($additionalDetails['Kitchen_Size']) ? 'display: none;' : '' }}">
                        <div class="form-group">
                          <label for="">Kitchen Size</label>
                          <input type="text" class="form-control" name="Kitchen_Size" value="{{ $additionalDetails['Kitchen_Size'] ?? '' }}">
                        </div>
                    </div>  
                    <div class="col-md-4" style="{{ empty($additionalDetails['Other_Room_Sizes']) ? 'display: none;' : '' }}">
                        <div class="form-group">
                          <label for="">Other Room Sizes</label>
                          <input type="text" class="form-control" name="Other_Room_Sizes" value="{{ $additionalDetails['Other_Room_Sizes'] ?? '' }}">
                        </div>
                    </div>            
                </div>

                <!-- Interior Finishes -->
                <div class="row">
                  <h3>Design & Style Preferences</h3>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Architectural Style</label>
                      @foreach ($additionalDetails['Architectural_Style'] ?? [] as $value)
                        @if(!is_null($value) && $value !== '')
                          <input type="text" class="form-control" name="Architectural_Style[]" value="{{ $value }}" style="margin-bottom: 5px;">
                        @endif
                      @endforeach
                    </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-4" style="{{ empty($additionalDetails['Preferred_Materials']) ? 'display: none;' : '' }}">
                        <div class="form-group">
                          <label for="">Preferred Materials</label>
                          <input type="text" class="form-control" name="Preferred_Materials" value="{{ $additionalDetails['Preferred_Materials'] ?? '' }}">
                        </div>
                    </div>
                    <div class="col-md-4" style="{{ empty($additionalDetails['Specific_Requirements']) ? 'display: none;' : '' }}">
                        <div class="form-group">
                          <label for="">Specific Requirements</label>
                          <input type="text" class="form-control" name="Specific_Requirements" value="{{ $additionalDetails['Specific_Requirements'] ?? '' }}">
                        </div>
                    </div>
                </div>

                <!-- Sustainability Features -->
                <div class="row">
                  <h3>Site Visit & Inspection</h3>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                          <label for="">Site Visit & inspection Date</label>
                          <input type="text" class="form-control" name="Site_Visit_Date" value="{{ $additionalDetails['Site_Visit_Date'] ?? '' }}">
                        </div>
                    </div>
                </div>

                
              </div>
              @can('adminAccess', auth()->user())
                <button type="submit" class="btn btn-success" style="width: 125px; margin-left: 20px; margin-bottom: 20px;">Update</button>
              @endcan
            </form>

            <div class="row" style="margin-left: 0px;">
              <a href="{{ route('generate_pdf', ['quote' => $quote->id]) }}" class="btn btn-primary" style="width: 125px; margin-left: 20px;" target="_blank">
                Download PDF
              </a>
              <a href="{{ route('export_quote', ['id' => $quote->id]) }}" class="btn btn-primary" style="width: 125px; margin-left: 20px;">
                Export as Excel
              </a>
            </div>
          </div>
          <!-- /.card -->
        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

<script>
  setTimeout(function() {
    document.getElementById('success-message').style.display = 'none';
  }, 5000); // Hides after 5 seconds
</script>

@endsection
