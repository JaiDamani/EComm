@extends('master')
@section("content")
<div class="container custom-login">
<div class="col-sm-4 col-sm-offset-4">
<form action="register" method="POST" name="registrationForm" onsubmit="return validate()">  
@csrf 
  <h1>Register</h1>
 {{-- username --}}
<div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter your username">
  </div>

  {{-- email --}}
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter a valid email">
  </div>

  {{-- password --}}
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="Enter a secure password" onkeyup="return passwordChanged()">
    <span id="strength">Type Password</span>
  </div>

  {{-- confirm password --}}
  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="Enter a secure password" onkeyup="check(this)">
    <error id="alert"></error>
  </div>

  {{-- captcha --}}
  <div class="captcha">
    <div id="captchaValue">abcd</div>
    <input id="inputCaptcha" type="text" name="" placeholder="Captcha">
  </div>
  {{-- <button onclick="reload(this)">Reload</button>
  <br></br> --}}
  
  <br></br>
  {{-- register button --}}
  <button type="submit" id="submitBtn" class="btn btn-default">Register Now</button>
  <br></br>

  {{-- for checking if pwd and con_pwd are same or not and displaying inline --}}
  <script type = "text/javascript">
  var password = document.getElementById('password');
  function check(elem){
    if(elem.value.length>0){
      if(elem.value != password.value)
      {
        document.getElementById('alert').innerText = "Passwords dont match";
      }
      else
      {
        document.getElementById('alert').innerText = "";
      }
    }
    else
      {
        document.getElementById('alert').innerText = "Please enter a password";
      }
  }
  </script>

{{-- captcha implementation --}}
  <script>
  var allValue = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','1','2','3','4','5','6','7','8','9','0'];

  var flag = 1;
  

  // var cVal2 = allValue[Math.floor(Math.random()*allValue.length)];
  // var cVal3 = allValue[Math.floor(Math.random()*allValue.length)];
  // var cVal4 = allValue[Math.floor(Math.random()*allValue.length)];
  // var cVal5 = allValue[Math.floor(Math.random()*allValue.length)];
  // var cVal6 = allValue[Math.floor(Math.random()*allValue.length)];
  // var cValue = cVal1 + cVal2 + cVal3 + cVal4 + cVal5 + cVal6;

   var cValue = 0;
  for (let i = 0; i < 6; i++) {
       cValue += allValue[Math.floor(Math.random()*allValue.length)];
  }
 captchaValue.innerHTML = cValue;

 thisValue = ""
 inputCaptcha.addEventListener('change',function(){
  thisValue = inputCaptcha.value;

 })   
 submitBtn.addEventListener('click', function(){
    if(cValue == thisValue)
    {
      alert('Success');
      document.registrationForm.submit();
      flag = 1;
    }
    else if(inputCaptcha.value == "")
    {
      alert('Please enter the Captcha');
      flag = 0;
    }
     else
     {
        alert('Invalid Captcha');
        flag = 0;
     }
 })

  // if captcha is incorrect then we cannot register
 function validate(){
      if(flag == 1){
        return true;
      }else{
        return false;
      }
    }
  </script>

{{-- checking password strength --}}
<script language="javascript">
  function passwordChanged() {
      var strength = document.getElementById('strength');
      var strongRegex = new RegExp("^(?=.{14,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
      var mediumRegex = new RegExp("^(?=.{10,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
      var enoughRegex = new RegExp("(?=.{8,}).*", "g");
      var pwd = document.getElementById("password");
      if (pwd.value.length == 0) {
          strength.innerHTML = 'Type Password';
      } else if (false == enoughRegex.test(pwd.value)) {
          strength.innerHTML = 'More Characters';
      } else if (strongRegex.test(pwd.value)) {
          strength.innerHTML = '<span style="color:green">Your password is strong!</span>';
      } else if (mediumRegex.test(pwd.value)) {
          strength.innerHTML = '<span style="color:orange">Medium!</span>';
      } else {
          strength.innerHTML = '<span style="color:red">Your password is too weak!</span>';
      }
  }
</script>

{{-- Reloading Captcha --}}
{{-- <script>
  function reload(){
    captchaValue.innerHTML = random();
  }
</script> --}}
</form>
</div>
</div>
@endsection

