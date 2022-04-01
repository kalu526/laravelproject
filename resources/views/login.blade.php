<!DOCTYPE html>
<html lang="en">
<head>
<link href="{{ asset('css/blog.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/
font-awesome/5.15.2/css/all.min.css"/> 
<link rel="stylesheet" href="assets/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
<div class="topbar">
        <div class="topleft">
    <i class=' topicon fas fa-bell'></i>
    <i class='topicon fas fa-map-marker'></i>
    <i class="topicon  fa fa-save"></i>  
    <i class='topicon  fas fa-user-circle'></i>
        </div>
        <div class="topmiddle">
            <ul class="toplist">
           
            <a href="/Home"><li class=" toplistitem">Home</li></a>
                <a href="/about"><li class="toplistitem">About</li></a>
                <a href="contact"><li class="toplistitem">Contact</li></a>
                <a href="write"><li class="toplistitem">Write</li></a>
            </ul>
        </div>
        <div class="topright">
      

        </div>
</div>

<div class="login">
    <div class="loginwrapper">
    <span class="logintitle">Login Here</span>
    <form method="POST" action="{{ route('handle.login') }}" class="loginform">
        @csrf
        
        <label>Email</label>
        <input type="email" class="logininput" placeholder="Email" name="email">
        <label>Password</label>
        <input type="password" class="logininput" placeholder="Password" name="password">
        <button class="loginbutton" type="submit">Login</button>
</form>
<div class="option">
  <span class="text">Create Account</span>
  <a href="/"><button class="loginregisterbutton">Register</button></a>
  </div>
  </div>
</div>
</body>
</html>