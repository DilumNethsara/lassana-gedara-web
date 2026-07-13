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
                  <h3>Building Specifications</h3>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Number of Floors</label>
                      <input type="number" class="form-control" name="Number_of_Floors" value="{{ $additionalDetails['Number_of_Floors'] ?? '' }}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Number of Rooms</label>
                      <input type="number" class="form-control" name="Number_of_Rooms" value="{{ $additionalDetails['Number_of_Rooms'] ?? '' }}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Number of Bathrooms</label>
                      <input type="number" class="form-control" name="Number_of_Bathrooms" value="{{ $additionalDetails['Number_of_Bathrooms'] ?? '' }}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Living Room</label>
                      <input type="text" class="form-control" name="Living_Room" value="{{ $additionalDetails['Living_Room'] ?? '' }}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Dining Room</label>
                      <input type="text" class="form-control" name="Dining_Room" value="{{ $additionalDetails['Dining_Room'] ?? '' }}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Laundry Room</label>
                      <input type="text" class="form-control" name="Laundry_Room" value="{{ $additionalDetails['Laundry_Room'] ?? '' }}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Kitchen</label>
                      <input type="text" class="form-control" name="Kitchen" value="{{ $additionalDetails['Kitchen'] ?? '' }}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Garage</label>
                      <input type="number" class="form-control" name="Garage" value="{{ $additionalDetails['Garage'] ?? '' }}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Porch/Deck</label>
                      <input type="text" class="form-control" name="Porch/Deck" value="{{ $additionalDetails['Porch/Deck'] ?? '' }}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Basement</label>
                      <input type="text" class="form-control" name="Basement" value="{{ $additionalDetails['Basement'] ?? '' }}">
                    </div>
                  </div>
                </div>

                <!-- Materials and Structure -->
                <div class="row">
                  <h3>Materials and Structure</h3>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Wall Type</label>
                      @foreach ($additionalDetails['Wall_Type'] ?? [] as $wallType)
                        @if(!is_null($wallType) && $wallType !== '')
                          <input type="text" class="form-control" name="Wall_Type[]" value="{{ $wallType }}" style="margin-bottom: 5px;">
                        @endif
                      @endforeach
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Floor Type</label>
                      @foreach ($additionalDetails['Floor_Type'] ?? [] as $value)
                        @if(!is_null($value) && $value !== '')
                          <input type="text" class="form-control" name="Floor_Type[]" value="{{ $value }}" style="margin-bottom: 5px;">
                        @endif
                      @endforeach
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Roof Type</label>
                      @foreach ($additionalDetails['Roof_Type'] ?? [] as $value)
                        @if(!is_null($value) && $value !== '')
                          <input type="text" class="form-control" name="Roof_Type[]" value="{{ $value }}" style="margin-bottom: 5px;">
                        @endif
                      @endforeach
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Roof Structure</label>
                      @foreach ($additionalDetails['Roof_Structure'] ?? [] as $value)
                        @if(!is_null($value) && $value !== '')
                          <input type="text" class="form-control" name="Roof_Structure[]" value="{{ $value }}" style="margin-bottom: 5px;">
                        @endif
                      @endforeach
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Ceiling Type</label>
                      @foreach ($additionalDetails['Ceiling_Type'] ?? [] as $value)
                        @if(!is_null($value) && $value !== '')
                          <input type="text" class="form-control" name="Ceiling_Type[]" value="{{ $value }}" style="margin-bottom: 5px;">
                        @endif
                      @endforeach
                    </div>
                  </div>
                </div>

                <!-- Doors & Windows -->
                <div class="row">
                  <h3>Doors & Windows</h3>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Door & Window Type</label>
                      @foreach ($additionalDetails['Door_&_Window_Type'] ?? [] as $value)
                        @if(!is_null($value) && $value !== '')
                          <input type="text" class="form-control" name="Door_&_Window_Type[]" value="{{ $value }}" style="margin-bottom: 5px;">
                        @endif
                      @endforeach
                    </div>
                  </div>
                </div>

                <!-- Systems and Services -->
                <div class="row">
                  <h3>Systems and Services</h3>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Electrical System</label>
                      @foreach ($additionalDetails['Electrical_System'] ?? [] as $value)
                        @if(!is_null($value) && $value !== '')
                          <input type="text" class="form-control" name="Electrical_System[]" value="{{ $value }}" style="margin-bottom: 5px;">
                        @endif
                      @endforeach
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Plumbing System</label>
                      @foreach ($additionalDetails['Plumbing_System'] ?? [] as $value)
                        @if(!is_null($value) && $value !== '')
                          <input type="text" class="form-control" name="Plumbing_System[]" value="{{ $value }}" style="margin-bottom: 5px;">
                        @endif
                      @endforeach
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Heating & Cooling</label>
                      @foreach ($additionalDetails['Heating_&_Cooling'] ?? [] as $value)
                        @if(!is_null($value) && $value !== '')
                          <input type="text" class="form-control" name="Heating_&_Cooling[]" value="{{ $value }}" style="margin-bottom: 5px;">
                        @endif
                      @endforeach
                    </div>
                  </div>
                </div>

                <!-- Interior Finishes -->
                <div class="row">
                  <h3>Interior Finishes</h3>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Interior Finish</label>
                      @foreach ($additionalDetails['Interior_Finish'] ?? [] as $value)
                        @if(!is_null($value) && $value !== '')
                          <input type="text" class="form-control" name="Interior_Finish[]" value="{{ $value }}" style="margin-bottom: 5px;">
                        @endif
                      @endforeach
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Flooring in Other Areas</label>
                      @foreach ($additionalDetails['Flooring_in_Other_Areas'] ?? [] as $value)
                        @if(!is_null($value) && $value !== '')
                          <input type="text" class="form-control" name="Flooring_in_Other_Areas[]" value="{{ $value }}" style="margin-bottom: 5px;">
                        @endif
                      @endforeach
                    </div>
                  </div>
                </div>

                <!-- Sustainability Features -->
                <div class="row">
                  <h3>Sustainability Features</h3>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Sustainability Features</label>
                      @foreach ($additionalDetails['Sustainability_Features'] ?? [] as $value)
                        @if(!is_null($value) && $value !== '')
                          <input type="text" class="form-control" name="Sustainability_Features[]" value="{{ $value }}" style="margin-bottom: 5px;">
                        @endif
                      @endforeach
                    </div>
                  </div>
                </div>

                <!-- Accessibility Features -->
                <div class="row">
                  <h3>Accessibility Features</h3>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Accessibility Features</label>
                      @foreach ($additionalDetails['Accessibility_Features'] ?? [] as $value)
                        @if(!is_null($value) && $value !== '')
                          <input type="text" class="form-control" name="Accessibility_Features[]" value="{{ $value }}" style="margin-bottom: 5px;">
                        @endif
                      @endforeach
                    </div>
                  </div>
                </div>

                <!-- Project Timeline and Budget -->
                <div class="row">
                  <h3>Project Timeline and Budget</h3>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Desired Start Date</label>
                      <input type="text" class="form-control" name="Desired_Start_Date" value="{{ $additionalDetails['Desired_Start_Date'] ?? '' }}" style="margin-bottom: 5px;">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Desired Completion Date</label>
                      <input type="text" class="form-control" name="Desired_Completion_Date" value="{{ $additionalDetails['Desired_Completion_Date'] ?? '' }}" style="margin-bottom: 5px;">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Budget Range (Rs.)</label>
                      <input type="number" class="form-control" name="Budget_Range" value="{{ $additionalDetails['Budget_Range'] ?? '' }}" style="margin-bottom: 5px;">
                    </div>
                  </div>
                </div>

                <!-- Additional Requests or Special Notes -->
                <div style="{{ empty($additionalDetails['Additional_Comments']) ? 'display: none;' : '' }}">
                  <div class="row">
                    <h3>Additional Requests or Special Notes</h3>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="textarea" class="form-control" name="Additional_Comments" value="{{ $additionalDetails['Additional_Comments'] ?? '' }}" style="margin-bottom: 5px;">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @can('adminAccess', auth()->user())
                <button type="submit" class="btn btn-success" style="width: 125px; margin-left: 20px; margin-bottom: 20px;">Update</button>

                {{-- <a href="{{ route('export_quote', ['id' => $quote->id]) }}" class="btn btn-danger" style="width: 125px; margin-left: 17px; margin-bottom: 20px;">
                  Delete
                </a> --}}
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
