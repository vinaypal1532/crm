@include('layouts.app')
@include('layouts.sidebar')

   <div class="content-wrapper">  
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Destination </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Destination </li>
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

            <form action="{{ route('add_destinationData') }}" method="post" enctype="multipart/form-data">
                 @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter Package Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">State</label>
                    <input type="text" class="form-control" name="state" id="exampleInputPassword1" placeholder="state">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Type</label>
                    <select id="fruitSelect" name="type" class="form-control">                    
                      <option value="1">Domestic</option>
                      <option value="2">Internation</option>                      
                  </select>                    
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputPassword1">Image</label>
                    <input type="file" class="form-control" name="image" id="exampleInputPassword1">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">status</label>
                    <select id="fruitSelect" name="status" class="form-control">
                      <option value="1">Active</option>
                      <option value="0">Pending</option>
                      <option value="2">Rejected</option>
                      
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
