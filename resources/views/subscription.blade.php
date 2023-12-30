@include('layouts.app')
@include('layouts.sidebar')

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Category Data</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Category Data</li>
            </ol>
          </div>
        </div>
      </div>
    </section>  
    <section class="content">
      <div class="container-fluid">
        <div class="row">       
        <div class="col-12">
            <div class="card">
              
           
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                   <th>Sr. No</th>
                 
                    <th>Name</th>
                   
                    <th>Image</th>
                    <th>Status</th>
                    
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>              
             
               
                   @php $i = 1;@endphp
                   @foreach ($subscriptions as $subscription)
                   <tr>
                        <td>{{ $i++ }}</td>
                      
                       
                        <td>{{ $subscription->c_name }}</td>
                        <td>{{ $subscription->image }}</td>
                        <td class="project-state">
                          @if ($subscription->status == 1)
                              <span class="badge badge-success">Success</span>
                          @elseif ($subscription->status == 0)
                              <span class="badge badge-warning">Pending</span>
                          @elseif ($subscription->status == 2)
                              <span class="badge badge-danger">Rejected</span>
                          @endif
                      </td>

                      
                          <td class="project-actions text-center">
                        <div class="btn-group btn-group-sm">
                        <a class="btn btn-info btn-sm" href="{{ route('category_edit', $subscription->id) }}" <i class="fas fa-pencil-alt"> </i>
                              Edit
                          </a>
                       <a href="{{ route('sub_delete', $subscription->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this subscription?')">
                          <i class="fas fa-trash"></i>
                      </a>
                      </div>
                    </td>
                    </tr>    
                    @endforeach                       
                                                
                  </tbody>
                  <tfoot>
                
                  </tfoot>
                </table>
              </div>
            
            </div>
          
          </div>    
        </div>   
      </div>      
    </section>
    <!-- /.content -->
  </div>
  <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@include('layouts.footer')
