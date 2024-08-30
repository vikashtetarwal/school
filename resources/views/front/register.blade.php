@extends('front.header')


@section('content')

<div class="container-1">
    <div class="row mx-auto d-block w-35 shadow p-2">
        <div class="col mt-5">
        <form action="{{route('user-store')}}" method="POST">
            @csrf
  <div class="form-group">
    <h5 class="text-center">Register Now</h5>
    <label class="mt-3" for="exampleInputEmail1">Name</label>
    <input type="text" name="name" class="form-control" placeholder="Enter Your email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" name="email" class="form-control" placeholder="Enter Your Password">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" placeholder="Enter Your Password">
  </div>


  
  <!-- <button type="submit" class=" btn btn-primary mx-auto d-block">Submit</button> -->
   <input type="submit" class="btn btn-danger mx-auto d-block ">
</form>
        </div>
    </div>
</div>




@endsection

