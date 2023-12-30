@include('layouts.app')
@include('layouts.sidebar')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Package</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Package</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
 
  <section class="content">
    
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Package</h3>

      </div>
      <div class="card-body p-0">
        <table class="table table-striped projects">
          <thead>
            <tr>
              <th style="width: 1%">
                #
              </th>
              <th style="width: 20%">
                Package Name
              </th>
              <th style="width: 10%">
                Category
              </th>
              <th style="width: 10%">
                Destination
              </th>
              <th>
                Amount
              </th>
              <!-- <th>
                         Image
                      </th> -->
              <th style="width: 8%" class="text-center">
                Status
              </th>

              <th style="width: 25%">
                Action
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($package as $packages)
            <tr>


              <td>
                #
              </td>

              <td>{{ $packages->name }}</td>


              <td>{{ $packages->category }}</td>
              <td>{{ $packages->d_name }}</td>

              <td>{{ $packages->amount }}</td>
              <!-- <td>{{ $packages->image }}</td> -->
              <td class="project-state">
                @if ($packages->status == 1)
                <span class="badge badge-success">Success</span>
                @elseif ($packages->status == 0)
                <span class="badge badge-warning">Pending</span>
                @endif

              </td>
              <td class="project-actions text-right">
                <a class="btn btn-primary btn-sm" href="#">
                  <i class="fas fa-folder">
                  </i>
                  View
                </a>
                <a class="btn btn-info btn-sm" href="{{ route('edit', $packages->id) }}">
                  <i class="fas fa-pencil-alt">
                  </i>
                  Edit
                </a>
                <a href="{{ route('deletePackage', $packages->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this packages?')">
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

new DataTable('#example');
</script>

@include('layouts.footer')