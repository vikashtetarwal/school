@extends('front.header')


@section('content')

<div class="container-1">
    <div class="row mx-auto d-block w-35 shadow p-2">
        <div class="col mt-5">
        <form>
  <div class="form-group">
    <h5 class="text-center">Login Here</h5>
    <label class="mt-3" for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <!-- <button type="submit" class=" btn btn-primary mx-auto d-block">Submit</button> -->
   <input type="submit" class="btn btn-danger mx-auto d-block ">

   <div class="row mt-2">
    <div class="col-5">
        <p><a href="{{url('/register')}}">Register Now</a></p>
    </div>
    <div class="col-2">

    </div>
    <div class="col-5">
        <p><a class="text-danger" href="">Forgot Password</a></p>
    </div>
   </div>
</form>
        </div>

    </div>
</div>




@endsection

