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
    <span class="logintitle">Register Here</span>
    <form method="POST" action="{{route('handle.user')}}" class="loginform">
        @csrf
    <label>UserName</label>
        <input type="text" class="logininput" placeholder="UserName" name="username">
        <div style="color:red">{{$errors->first('username')}}</div>
        <label>Email</label>
        <input type="email" class="logininput" placeholder="Email" name="email">
        <div style="color:red">{{$errors->first('email')}}</div>
        <label>Password</label>
        <input type="password" class="logininput" placeholder="Password" name="password">
        <div style="color:red">{{$errors->first('password')}}</div>
        <div class="settingpp">
                <img src="https://th.bing.com/th/id/OIP.jryuUgIHWL-1FVD2ww8oWgHaHa?pid=ImgDet&rs=1" alt="" class="settingimg">
                <label for="fileinput">
                <i class='settingicon fas fa-user-circle'></i>
                <input type="file" id="fileinput" name="path" style="display:none;">
                </label>
            </div>
        <button class="loginbutton" style="background-color:teal">Register</button>
</form>
<div class="option">
  <span class="text">Already Have Account?</span>
  <a href="login"><button class="loginregisterbutton"style="background-color:lightcoral">Login</button></a>
  </div>
  </div>
</div>
</body>
</html>