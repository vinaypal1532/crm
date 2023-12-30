@include('layouts.app')
@include('layouts.sidebar')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Destinations</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Destinations</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<!-- Add this within your Blade view -->
<div id="success-popup" style="display: none;">
    <p>Data successfully inserted!</p>
</div>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Destinations</h3>

         
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          #
                      </th>
                      <th style="width: 20%">
                      Destination Name
                      </th>
                      <th style="width: 10%">
                         State
                      </th>
                      
                       <th>
                         Type
                      </th> 
                      <th style="width: 8%" class="text-center">
                          Status
                      </th>
                      
                      <th style="width: 25%">
                      Action
                      </th>
                  </tr>
              </thead>
              <tbody>
              @foreach ($destination as $destinations)
                  <tr>

                 
                      <td>
                          #
                      </td>
                     
                          <td>{{ $destinations->name }}</td>
                        
                     
                      <td>{{ $destinations->state }}</td>
                     
                      <td>
                      @if($destinations->type == 1)
                          Domestic
                      @elseif($destinations->type == 2)
                          International
                      @endif
                  </td>

                    
                      <td class="project-state">
                        @if ($destinations->status == 1)
                            <span class="badge badge-success">Success</span>
                        @elseif ($destinations->status == 0)
                            <span class="badge badge-warning">Pending</span>
                        @endif

                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="{{ route('destination_edit', $destinations->id) }}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                        
                          <a href="{{ route('deleteDestination', $destinations->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Destination?')">
                          <i class="fas fa-trash"></i>
                </a>

                      </td>
                  </tr>
                  @endforeach           
                                                 
              </tbody>
          </table>
        </div>      
      </div>  

    </section>
  
  </div>
  <script>
    $(document).ready(function () {
        // Check if there's a success message in the session
        var successMessage = '{{ Session::get('success') }}';
        
        if (successMessage) {
            // Display the success message in a popup
            $('#success-popup').show();
            // You can add further customization or styling here if needed
        }
    });
</script>

  @include('layouts.footer')