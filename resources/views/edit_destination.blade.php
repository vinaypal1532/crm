@include('layouts.app')
@include('layouts.sidebar')

   <div class="content-wrapper">  
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Destination </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Destination </li>
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
          <form method="POST" action="{{ route('updateDestination', $destination->id) }}" enctype="multipart/form-data">
           
                 @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $destination->name }}"  id="exampleInputEmail1" placeholder="Enter Destination Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">State</label>
                    <input type="text" class="form-control" name="state" id="exampleInputPassword1" value="{{ $destination->state }}" placeholder="state">
                  </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Type</label>
                      <select id="fruitSelect" name="type" class="form-control">     
                        <option value="1" @if ($destination->type == 1) selected @endif>Domestic</option>               
                        <option value="2" @if ($destination->status == 2) selected @endif>Internation</option>
                                          
                    </select>                    
                    </div>
                 
                  <div class="form-group">
                    <label for="exampleInputPassword1">Image</label>
                    <input type="file" class="form-control" name="image" id="exampleInputPassword1">
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputPassword1">Status</label>
                    <select name="status" class="form-control" required>
                        <option value="1" @if ($destination->status == 1) selected @endif>Active</option>
                        <option value="0" @if ($destination->status == 0) selected @endif>Pending</option>
                        <option value="2" @if ($destination->status == 2) selected @endif>Rejected</option>
                    </select>
                </div>
    
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>         

        </div>
         
        </div>
     
      </div>
    </section>
   
  </div> 

@include('layouts.footer')
