@include('layouts.app')
@include('layouts.sidebar')

   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Package </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Package </li>
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
              
              @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('updatePackage', $package->id) }}">
            @csrf
    @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Package Name</label>
                 
                    <input type="text" name="name" class="form-control" value="{{ $package->name }}" required>
                  </div>

                  <div class="form-group">
                        <label for="exampleInputPassword1">Category</label>
                        <select name="category" class="form-control" required>
                            @foreach ($category as $cat)
                                <option value="{{ $cat->id }}" @if ($package->category == $cat->id) selected @endif>{{ $cat->c_name }}</option>
                            @endforeach
                        </select>
                    </div>


                  <div class="form-group">
                  <label for="destination">Destination</label>
                  <select id="destination" name="destination" class="form-control">
                      <option value="">Select a destination</option>
                      @foreach ($destination as $dest)
                          <option value="{{ $dest->id }}" @if($package->destination == $dest->id) selected @endif>{{ $dest->name }}</option>
                      @endforeach
                  </select>
                  </div>


                  <div class="form-group">
                    <label for="exampleInputPassword1">Amount</label>
                    <input type="text" name="amount" value="{{ $package->amount }}" class="form-control" required>
                  </div>
                  
                 <div class="form-group">
                    <label for="exampleInputPassword1">Details</label>
                    <textarea class="form-control" placeholder="Details" name="details" value="" id="details" style="height: 100px">{{ $package->details }}</textarea>
                </div>

                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Image</label>
                    <input type="file" name="image" value="{{ $package->image }}" class="form-control">
                  </div>
                 <div class="form-group">
                    <label for="exampleInputPassword1">Status</label>
                    <select name="status" class="form-control" required>
                        <option value="1" @if ($package->status == 1) selected @endif>Active</option>
                        <option value="0" @if ($package->status == 0) selected @endif>Pending</option>
                        <option value="2" @if ($package->status == 2) selected @endif>Rejected</option>
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
