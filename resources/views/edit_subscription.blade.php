@include('layouts.app')
@include('layouts.sidebar')

   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Category </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Category </li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
      
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('updateData', $subscription->id) }}">
            @csrf
    @method('PUT')
                <div class="card-body">
                 
                  <div class="form-group">
                    <label for="exampleInputPassword1">Name</label>
                    <input type="text" name="c_name" value="{{ $subscription->c_name }}" class="form-control" required>
                  </div>
                  
                 
                  <div class="form-group">
                    <label for="exampleInputPassword1">Image</label>
                    <input type="text" name="image" value="{{ $subscription->image }}" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Status</label>
                    <select name="status" class="form-control" required>
                        <option value="1" @if ($subscription->status == 1) selected @endif>Active</option>
                        <option value="0" @if ($subscription->status == 0) selected @endif>Pending</option>
                        <option value="2" @if ($subscription->status == 2) selected @endif>Rejected</option>
                    </select>
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div> 

@include('layouts.footer')
