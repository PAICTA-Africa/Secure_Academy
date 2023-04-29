@extends('layout')

@section('content')
<div class="login-form-container">
    <form class="login-form" action="{{ route('login') }}" method="post">
    
        @csrf
        <h1 class="login-form-title">LOGIN</h1>
        @if ($errors->any())
        <div class="login-form-error" role="alert">
            {{ $errors->first() }}
        </div>
        @endif
        <div class="loginn-form-group">
            <label for="email" class="login-form-label">Email Address:</label>
            <input type="email" class="login-form-input" name="email" id="email" value="{{ old('email') }}">
        </div>
        <div class="login-form-group">
            <label for="password" class="login-form-label">Password</label>
            <input type="password" name="password" class="login-form-input" id="password">
        </div>
        <div class="login-form-group">
            <label class="login-form-label">Select User Type:</label>
            <select class="login-form-select" name="role" aria-label="Default select example">
                <option selected value="user">student</option>
                <option value="indexxx">Admin</option>
                <option value="superadmin">superadmin</option>
            </select>
        </div>
        <button type="submit" class="login-form-button">LOGIN</button>
    </form>
</div>

<style>
.login-form-container {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
}

.login-form {
  border: 1px solid #ccc;
  border-radius: 5px;
  box-shadow: 0px 2px 5px #ccc;
  padding: 20px;
  width: 450px;
}

.login-form-title {
  text-align: center;
  margin-bottom: 20px;
}

.login-form-group {
  margin-bottom: 20px;
}

.login-form-label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}

.login-form-input {
  display: block;
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-shadow: inset 0px 2px 5px #ccc;
}

.login-form-select {
  display: block;
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-shadow: inset 0px 2px 5px #ccc;
}

.login-form-button {
  display: block;
  width: 100%;
  padding: 10px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: all 0.3s ease-in-out;
}

.login-form-button:hover {
  background-color: #0062cc;
}
</style>
@endsection