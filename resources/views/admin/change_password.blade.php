@extends('admin.header')
@include('sweetalert::alert')
@section('main-content')


<div class="row p-4 shadow rounded">
    <h2 class="text-danger p-3 text-center">Admin User Password Change</h2>
      <div class="col-md-6 mx-auto d-block p-5 border rounded shadow">

      <label for="">New Password</label>
      <input type="password" class="form-control" placeholder="Enter Your New Password">

      <label for="" class="mt-2">Confirm Password</label>
      <input type="password" class="form-control" placeholder="Enter Your Confirm Password">

      <input type="submit" class="btn text-light btn-danger mx-auto d-block mt-4" value="Update">

      </div>
</div>
@endsection