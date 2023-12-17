@extends('frontend.master')

@section('addmoney')

<div class="container">
    <div class="first">
    <h1>Login</h1>
    <form action="#" class="login-form">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Enter username" required>
      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter password" required>
      </div>

      <button type="submit" class="btn">Login</button>
    </form>
  </div>
</div>

@endsection