<!DOCTYPE html>
<html lang="en">
<head>
  <title>Signup Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- icon on the title of d page -->
  <link rel="icon" type="image/ico" href="{{asset('css/asset/images/log1.png')}}">
  <!-- customized styling -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/asset/style.css')}}">
  {{-- //online links --}}
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container col-md-6">
  <a href="#"><img src= "{{asset('css/asset/images/log1.png')}}" width="200px"></a> 
</div>
<div class="col-md-9 fill">
  <h2>Isiro Signup Form</h2>
  <form method="POST" action="/create" class="was-validated">
    @csrf;
    
    <div class="col-md-6">
      <label for="username">Username:</label>
      <input type="text" name="username" class="form-control" id="username" placeholder="Enter your username" required>
      <!-- <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div> -->
    </div>

    <div class="col-md-6">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
      </div>
    
    <div class="col-md-6">
      <label for="company_name ">Company Name:</label>
      <textarea placeholder="Short description of company" name="company_name" class="form-control input-sm" id="company_name" required></textarea>
    </div>

    <div class="col-md-6">
      <label for="role">Role:</label>
      <input type="text" name="role" id="role" class="form-control" required placeholder="type your role"> 
    </div>

    {{-- <div class="col-md-6">
      <label for="uid">UID:</label>
      <input type="text" name="uid" id="uid" class="form-control" required placeholder="your uid">
    </div>
    --}}

    <div class="col-md-6">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
    </div>

    <div class="col-md-6">
      <label for="re_enter_pwd">Re-Enter Password:</label>
      <input type="password" class="form-control" name="re_enter_pwd" id="re_enter_pwd" placeholder="Re Enter your password" required>
    </div>
  
    {{-- <div class="col-md-6 form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> I agree on the Terms and CoOnditions of Isiro App.
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Check this checkbox to continue.</div>
      </label>
    </div> --}}
    <hr>
    <div class="col-md-6">
      <button type="submit" name="submit" class="btn btn-signUp">Submit</button>
    </div>

</body>
</html>
