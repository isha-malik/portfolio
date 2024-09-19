@extends('backend.layout.app')
@section('content')

{{-- <h1>Home page</h1> --}}

<div class="col-md-6  mx-auto my-5">



<div class="card z-index-0 fadeIn3 fadeInBottom">
    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
      <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
        <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Home</h4>
        <div class="row mt-3">
          <div class="col-2 text-center ms-auto">
            <a class="btn btn-link px-3" href="javascript:;">
              <i class="fa fa-facebook text-white text-lg"></i>
            </a>
          </div>
          <div class="col-2 text-center px-1">
            <a class="btn btn-link px-3" href="javascript:;">
              <i class="fa fa-github text-white text-lg"></i>
            </a>
          </div>
          <div class="col-2 text-center me-auto">
            <a class="btn btn-link px-3" href="javascript:;">
              <i class="fa fa-google text-white text-lg"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="card-body">
      <form role="form" class="text-start" action="" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="input-group input-group-outline my-3">
          <label class="form-label">logo</label>
          <input type="file" name="logo" class="form-control">
        </div>
        <div class="input-group input-group-outline my-3">
          <label class="form-label">CV</label>
          <input type="file" name="cv" class="form-control">
        </div>
        <div class="input-group input-group-outline my-3">
          <label class="form-label">Name</label>
          <input type="text" name="name" class="form-control">
        </div>
        <div class="input-group input-group-outline my-3">
          <label class="form-label">image</label>
          <input type="file" name="image" class="form-control">
        </div>
        <div class="input-group input-group-outline mb-3">
          <label class="form-group">Paragraph</label>
          <input type="text" name="para" class="form-control">
        </div>
       
        <div class="text-center">
          <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Save</button>
        </div>
        
      </form>
    </div>
  </div>
</div>
@endsection