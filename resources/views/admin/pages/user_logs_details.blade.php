@extends('admin.layout.admin_front')

@section('content')

<style>
    li{
        padding-bottom: 5px;
    }
</style>

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
            <h1>User Log Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">User Log Details</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
          <!-- User Log Details Card -->
          <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">User Log Information</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>User Log ID</label>
                    <input type="text" class="form-control" value="{{ $userLog->id }}" readonly>
                  </div>
                  <!-- /.form-group -->
                  <div class="form-group">
                    <label>Role</label>
                    <input type="text" class="form-control" value="{{ $userLog->user->user_type }}" readonly>
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" value="{{ $userLog->user->name }}" readonly>
                  </div>
                  <!-- /.form-group -->
                  <div class="form-group">
                    <label>Quote ID</label>
                    <input type="text" class="form-control" value="LG-REF-{{ sprintf('%04d', $userLog->quote_id) }}" readonly onclick="window.location.href='{{ route('view_quote_request', ['service' => $userLog->quote->service, 'quote' => $userLog->quote_id]) }}'" 
                    style="cursor: pointer;">
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
  
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Event</label>
                    <input type="text" class="form-control" value="{{ $userLog->event }}" readonly>
                  </div>
                  <!-- /.form-group -->
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Log Date & Time</label>
                    <input type="text" class="form-control" value="{{ $userLog->created_at->format('Y-m-d         H:i:s') }}" readonly>
                  </div>
                  <!-- /.form-group -->
                </div>
              </div>
              <!-- /.row -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <!-- You can add footer info here if needed -->
            </div>
          </div>
          <!-- /.card -->

          <!-- Changes Details Card -->
          <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">Changes Done</h3>
            </div>
            <div class="card-body">
              @if(isset($formattedChanges) && count($formattedChanges))
                <ul>
                  @foreach($formattedChanges as $field => $value)
                    @if(is_array($value))
                      <li>
                        <strong>{{ ucwords(str_replace('_', ' ', $field)) }}:</strong>
                        <ul>
                          @foreach($value as $subField => $subValue)
                            @if(is_array($subValue))
                              <li>
                                <strong>{{ ucwords(str_replace('_', ' ', $subField)) }}:</strong>
                                <ul>
                                  @foreach($subValue as $line)
                                    <li>{{ $line }}</li>
                                  @endforeach
                                </ul>
                              </li>
                            @else
                              <li>
                                <strong>{{ ucwords(str_replace('_', ' ', $subField)) }}:</strong> {{ $subValue }}
                              </li>
                            @endif
                          @endforeach
                        </ul>
                      </li>
                    @else
                      <li><strong>{{ ucwords(str_replace('_', ' ', $field)) }}:</strong> {{ $value }}</li>
                    @endif
                  @endforeach
                </ul>
              @else
                <p>No changes logged.</p>
              @endif
            </div>
            <div class="card-footer">
              <!-- Optional footer for changes -->
            </div>
          </div>
          <!-- /.card -->
        </div>
    </section>
  </div>
  <!-- /.content-wrapper -->

  <script>
    setTimeout(function() {
        document.getElementById('success-message').style.display = 'none';
    }, 5000); // Hides after 5 seconds
  </script>

@endsection
