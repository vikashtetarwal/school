@extends('admin.header')
@include('sweetalert::alert')
@section('main-content')
<div class="row p-4 shadow rounded">
           <h1 class="text-danger text-center mb-4">Admin User Profile</h1>

      <div class="col-md-4 p-5 border rounded shadow">
        <form action="{{route('change_admin_photo')}}" method="post" enctype="multipart/form-data">
          @csrf

          <img class="rounded-circle mx-auto d-block mb-4" src="{{asset('backend/images/testimonials-1.jpg')}}" width="150px">
          <input type="file" name="profile_photo" class="form-control">
          <input type="submit" class="btn btn-danger mt-4 mx-auto rounded d-block text-light" value="Update Profile">
        </form>

      </div>

    
      <div class="col-md-7 ms-2 p-5 border rounded shadow">
        <form action="{{route('admin-profile-update')}}" method="post" enctype="multipart/form-data">
          @csrf

          <label for="" class="mt-2">Name</label>
          <input type="text" value="{{$admin->name}}" name="name" class="form-control" placeholder="Enter Your Name">
          <label for="" class="mt-2">Email</label>
          <input type="email" value="{{$admin->email}}" name="email" class="form-control" placeholder="Enter Your Email">
          <!-- <label for="" class="mt-2">Password</label> -->
          <!-- <input type="text" value="{{$admin->password}}" name="password" class="form-control" placeholder="Enter Your Password"> -->
          <input type="submit" class="btn btn-danger rounded text-light mt-4 mx-auto d-block" value="Update">
        </form>

      </div>
    </div>

    <!-- <div class="row p-4 shadow rounded">
    <h1 class="text-danger text-center">Admin User Password Change</h1>
      <div class="col-md-6 mx-auto d-block p-5 border rounded shadow">

      <label for="">New Password</label>
      <input type="password" class="form-control" placeholder="Enter Your New Password">

      <label for="" class="mt-2">Confirm Password</label>
      <input type="password" class="form-control" placeholder="Enter Your Confirm Password">

      <input type="submit" class="btn btn-danger mx-auto d-block mt-4" value="Update">

      </div> -->
    </div>
@endsection
