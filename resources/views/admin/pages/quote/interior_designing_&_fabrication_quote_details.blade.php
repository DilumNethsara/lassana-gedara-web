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
            <li class="breadcrumb-item active">Interior Designing & Fabrication Quotation Inquiry</li>
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

                <!-- Project Overview -->
                <div class="row">
                  <h3>Project Overview</h3>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Type of Project</label>
                      @foreach ($additionalDetails['Type_of_Project'] ?? [] as $wallType)
                        @if(!is_null($wallType) && $wallType !== '' && $wallType !== 'Other')
                          <input type="text" class="form-control" name="Type_of_Project[]" value="{{ $wallType }}" style="margin-bottom: 5px;">
                        @endif
                      @endforeach
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Nature of Work</label>
                      <input type="text" class="form-control" name="Nature_of_Work" value="{{ $additionalDetails['Nature_of_Work'] ?? '' }}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Project Scope</label>
                      @foreach ($additionalDetails['Project_Scope'] ?? [] as $wallType)
                        @if(!is_null($wallType) && $wallType !== '' && $wallType !== 'Other')
                          <input type="text" class="form-control" name="Project_Scope[]" value="{{ $wallType }}" style="margin-bottom: 5px;">
                        @endif
                      @endforeach
                    </div>
                  </div>

                </div>
                  

                <!-- Additional Requests or Special Notes -->
                <div style="{{ empty($additionalDetails['Additional_Comments']) ? 'display: none;' : '' }}">
                  <div class="row">
                    <h3>Project Description/ Vision</h3>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="textarea" class="form-control" name="Additional_Comments" value="{{ $additionalDetails['Additional_Comments'] ?? 'N/A' }}" style="margin-bottom: 5px;">
                      </div>
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
