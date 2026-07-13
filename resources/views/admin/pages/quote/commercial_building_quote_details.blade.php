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
            <li class="breadcrumb-item active">Commercial Building Quotation Inquiry</li>
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
                {{ $quote->title }}{{ $quote->name }}'s {{ $service }} Quotation Inquiry Details - {{ $quote->created_at->format('Y-m-d') }}
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





                <!-- General Information -->
                <div class="row">
                  <h3>Project General Information</h3>
                </div>
                <div class="row">                 
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Desired Start Date</label>
                      <input type="text" class="form-control" name="Desired_Start_Date" 
                             value="{{ $additionalDetails['Desired_Start_Date'] }}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Desired Completion Date</label>
                      <input type="text" class="form-control" name="Desired_Completion_Date" 
                             value="{{ $additionalDetails['Desired_Completion_Date'] }}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Budget Range</label>
                      <input type="number" class="form-control" name="Budget_Range" 
                             value="{{ $additionalDetails['Budget_Range'] }}">
                    </div>
                  </div>
                </div>

                <!-- Project Details -->
                <div class="row">
                  <h3>Project Details</h3>
                </div>
                <div class="row">
                  <!-- Number of Floors Input -->
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">Number of Floors</label>
                      <input type="number" class="form-control" name="Number_of_Floors" 
                             value="{{ $additionalDetails['Number_of_Floors'] }}">
                    </div>
                  </div>
                  <!-- Dynamic Bathrooms Per Floor -->
                  @foreach ($additionalDetails['Bathrooms_Per_Floor'] as $index => $bathroom)
                    @if(!is_null($bathroom) && $bathroom !== '')
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="">Bathrooms for Floor No: {{ $loop->iteration }}</label>
                          <input type="text" class="form-control" name="Bathrooms_Per_Floor[Floor_{{ $loop->iteration }}]" 
                                 value="{{ $bathroom }}" style="margin-bottom: 5px;">
                        </div>
                      </div>
                    @endif
                  @endforeach
                </div>

                <!-- Special Requests or Features -->
                <div style="{{ empty($additionalDetails['Special_Requests_or_Features'] && $additionalDetails['Client_Expectations']) ? 'display: none;' : '' }}">
                  <div class="row">
                    <h3>Special Requests or Features</h3>
                  </div>
                  <div class="row">
                    <div class="col-md-12" style="{{ empty($additionalDetails['Special_Requests_or_Features']) ? 'display: none;' : '' }}">
                      <div class="form-group">
                        <label for="">Special Requests or Features</label>
                        <input type="text" class="form-control" name="Special_Requests_or_Features" 
                               value="{{ $additionalDetails['Special_Requests_or_Features'] }}">
                      </div>
                    </div>
                    <div class="col-md-12" style="{{ empty($additionalDetails['Client_Expectations']) ? 'display: none;' : '' }}">
                      <div class="form-group">
                        <label for="">Client Expectations</label>
                        <input type="text" class="form-control" name="Client_Expectations" 
                               value="{{ $additionalDetails['Client_Expectations'] }}">
                      </div>
                    </div>
                  </div>
                </div>
                
                

                <!-- Building Specifications - Structure & Design -->
                <div class="row">
                  <h3>Building Specifications - Structure & Design</h3>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Structure Type</label>
                      @foreach ($additionalDetails['Structure_Type'] ?? [] as $structureType)
                        @if(!is_null($structureType) && $structureType !== '')
                          <input type="text" class="form-control" name="Structure_Type[]" 
                                 value="{{ $structureType }}" style="margin-bottom: 5px;">
                        @endif
                      @endforeach                          
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Wall Type Preferences</label>
                      @foreach ($additionalDetails['Wall_Type_Preferences'] ?? [] as $wallTypePreferences)
                        @if(!is_null($wallTypePreferences) && $wallTypePreferences !== '')
                          <input type="text" class="form-control" name="Wall_Type_Preferences[]" 
                                 value="{{ $wallTypePreferences }}" style="margin-bottom: 5px;">
                        @endif
                      @endforeach
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Floor Type Preferences</label>
                      @foreach ($additionalDetails['Floor_Type_Preferences'] ?? [] as $value)
                        @if(!is_null($value) && $value !== '')
                          <input type="text" class="form-control" name="Floor_Type_Preferences[]" 
                                 value="{{ $value }}" style="margin-bottom: 5px;">
                        @endif
                      @endforeach
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Roof Type</label>
                      @foreach ($additionalDetails['Roof_Type'] ?? [] as $value)
                        @if(!is_null($value) && $value !== '')
                          <input type="text" class="form-control" name="Roof_Type[]" 
                                 value="{{ $value }}" style="margin-bottom: 5px;">
                        @endif
                      @endforeach
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Roof Structure</label>
                      @foreach ($additionalDetails['Roof_Structure'] ?? [] as $value)
                        @if(!is_null($value) && $value !== '')
                          <input type="text" class="form-control" name="Roof_Structure[]" 
                                 value="{{ $value }}" style="margin-bottom: 5px;">
                        @endif
                      @endforeach
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Ceiling Type</label>
                      @foreach ($additionalDetails['Ceiling_Type'] ?? [] as $value)
                        @if(!is_null($value) && $value !== '')
                          <input type="text" class="form-control" name="Ceiling_Type[]" 
                                 value="{{ $value }}" style="margin-bottom: 5px;">
                        @endif
                      @endforeach
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Roof Design</label>
                      @foreach ($additionalDetails['Roof_Design'] ?? [] as $value)
                        @if(!is_null($value) && $value !== '')
                          <input type="text" class="form-control" name="Roof_Design[]" 
                                 value="{{ $value }}" style="margin-bottom: 5px;">
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
                      <label for="">Door & Window Materials</label>
                      @foreach ($additionalDetails['Door_&_Window_Materials'] ?? [] as $value)
                        @if(!is_null($value) && $value !== '')
                          <input type="text" class="form-control" name="Door_&_Window_Materials[]" 
                                 value="{{ $value }}" style="margin-bottom: 5px;">
                        @endif
                      @endforeach
                    </div>
                  </div>
                </div>

                <!-- Elevator Requirement -->
                <div class="row">
                  <h3>Elevator Requirement</h3>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Elevator Requirement</label>
                      <input type="text" class="form-control" name="Elevator_Requirement" 
                             value="{{ $additionalDetails['Elevator_Requirement'] }}">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      @if (!empty($additionalDetails['Elevator_Type']))
                        <label for="">Elevator Type</label>
                        <input type="text" class="form-control" name="Elevator_Type" 
                               value="{{ $additionalDetails['Elevator_Type'] }}">
                      @endif
                    </div>
                  </div>
                </div>

                <!-- Special Requests or Special Notes -->
                <div style="{{ empty($additionalDetails['Additional_Comments']) ? 'display: none;' : '' }}">
                  <div class="row">
                    <h3>Special Requests or Special Notes</h3>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="textarea" class="form-control" name="Additional_Comments" 
                               value="{{ $additionalDetails['Additional_Comments'] }}" style="margin-bottom: 5px;">
                      </div>
                    </div>
                  </div>
                </div>                
              </div>
              @can('adminAccess', auth()->user())
                <button type="submit" class="btn btn-success" style="width: 125px; margin-left: 20px; margin-bottom: 20px;">
                  Update
                </button>
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
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

<script>
  setTimeout(function() {
    document.getElementById('success-message').style.display = 'none';
  }, 5000); // Hides after 5 seconds
</script>

@endsection
