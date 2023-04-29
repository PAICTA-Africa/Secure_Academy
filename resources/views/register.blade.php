@extends('layout')
@section('title', 'Registration')
@section('content')
<div class ="container">
  <div class= "mt-5">
    @if($errors->any())
    <div class="col-12">
      @foreach($errors->all() as $error)
      <div class="alert alert-danger">{{$error}}</div>
      @endforeach
    </div>
    @endif

    @if(session()->has('error'))
    <div class="alert alert-danger">{{session('error')}}</div>
    @endif

    @if(session()->has('success'))
    <div class="alert alert-success">{{session('success')}}</div>
    @endif
  </div>
<form action="{{route('register.post')}}" method="POST" class="ms-auto me-auto" style ="width:500px">
@csrf
  <div class="mb-3">
    <label class="form-label">Full Name:</label>
    <input type="text" class="form-control" name ="name">
  </div>
  <div class="mb-3">
  <label class="form-label">Gender:</label>
  <select class="form-select" name="gender" required>
    <option value="">--Please select--</option>
    <option value="male">Male</option>
    <option value="female">Female</option>
    <option value="other">Other</option>
  </select>
</div>
<div class="mb-3">
  <label class="form-label">Contact Details:</label>
  <input type="tel" class="form-control" name="number" pattern="^((\+27)|(0))[1-9][0-9]{8}$" required>
</div>
<div class="mb-3">
  <label class="form-label">ID Number:</label>
  <input type="text" class="form-control" name="id_number" pattern="^\d{13}$" title="Please enter a valid 13-digit South African ID number" required>
</div>
  <div class="mb-3">
  <label class="form-label">Date of Birth:</label>
  <input type="date" class="form-control" name="dateofbirth" required>
</div>
<div class="mb-3">
  <label class="form-label">Highest Education:</label>
  <select class="form-select" name="education" required>
    <option value="">--Please select--</option>
    <option value="high_school">High School</option>
    <option value="bachelors_degree">Bachelor's Degree</option>
    <option value="masters_degree">Master's Degree</option>
    <option value="doctoral_degree">Doctoral Degree</option>
  </select>
</div>
  <div class="mb-3">
    <label class="form-label">Email Address:</label>
    <input type="email" class="form-control" name ="email">
  </div>
  <div class="mb-3">
    <label  class="form-label">Password</label>
    <input type="password" class="form-control" name="password" pattern="(?=.*\d)(?=.[a-z])(?=.*[A-Z])(?=.*[A-Z].{8,}">
  </div>
  <div class="mb-3">
    <label  class="form-label">Confirm Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection