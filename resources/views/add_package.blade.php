@include('layouts.app')
@include('layouts.sidebar')

   <div class="content-wrapper">  
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Package </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Package </li>
            </ol>
          </div>
        </div>
      </div>
    </section>

   
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        
          <div class="col-md-9">
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

            <form action="{{ route('add_packageData') }}" method="post" enctype="multipart/form-data">
                 @csrf
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter Package Name">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Category</label>
                    <select id="category" name="category" class="form-control">
                      <option value="">Select a category</option>
                      @foreach ($category as $categorys)
                          <option value="{{ $categorys->id }}">{{ $categorys->c_name }}</option>
                      @endforeach
                  </select>
                  </div>

                  <div class="form-group">
                  <label for="destination">Destination</label>
                  <select id="destination" name="destination" class="form-control">
                      <option value="">Select a destination</option>
                      @foreach ($destination as $destinations)
                          <option value="{{ $destinations->id }}">{{ $destinations->name }}</option>
                      @endforeach
                  </select>
                   </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Amount</label>
                    <input type="text" class="form-control" name="amount" id="exampleInputPassword1" placeholder="Amount">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Details</label>
                  
                    <textarea class="form-control" placeholder="Details" name="details" id="details" style="height: 100px"></textarea>
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
