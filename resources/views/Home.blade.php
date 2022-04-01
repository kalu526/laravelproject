<!DOCTYPE html>
<htm>
    <head>
        <title>The First Blog Website</title>
        <link href="{{ asset('css/home.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/
font-awesome/5.15.2/css/all.min.css"/> 
<link rel="stylesheet" href="assets/font-awesome/5.15.2/css/all.min.css"/> 
          
</head>
<body>
  <div class="container"> 
<div class="navbar">
   <div class="left">
    <ul class="left-nav">
  
    <i class=' icon fas fa-bell'></i>
    <i class='icon fas fa-map-marker'></i>
    <i class="icon  fa fa-save"></i>  
    <i class='icon  fas fa-user-circle'></i>

</ul>
   </div>
   <div class="middle">
<ul>
    <li class="link">Home</li>
    <li class="link">About</li>
    <li class="link">Contact</li>
    <li class="link">Write</li>
</ul>
   </div>
   <div class="right">
<ul>
    <li class="link">Register</li>
    <li><img class="img link" src="https://th.bing.com/th/id/OIP.jryuUgIHWL-1FVD2ww8oWgHaHa?pid=ImgDet&rs=1"></li>
</ul>
   </div>
</div>
        <!-- ////////////////////////////////Header Image//////////////////////////////// -->
       <div style="
      background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/041.webp');
      height: 500px;">
      <div class="text">
         <h1 >The Best Bloging Site you Can find </h1>
         <h2>Come And Join Our Community Here</h2>
         <button class="btn">Get Started Here</button>
</div>
</div>

<!-- /////////////////////////////////////body/////////////////////////////////////// -->
<div class="body">
<div class="card">
    @for($i=0;$i<10;$i++)
         <div class="content">
        <img src="https://mdbcdn.b-cdn.net/img/new/slides/041.webp"/>
        <p class="cat">Life</p>
        <h2 class="postTitle">This Post is about How Life is Difficult </h2>
        <p class="postdecs">Lorem ipsum dolor sit amet, 
                            consectetur adipisicing elit.
                            Magnam quod magni asperiores 
                            iusto laudantium porro amet quas, 
                            atque, ea minima quaerat facere 
                            nam error. Consequatur ipsa vel .
                        </p>
                        <p class="date">1 hour ago</p>
</div>
    @endfor
    </div>
    <div class="sidebar">
      <div class="sidebarItem">
      <hr/>
          <h2 class="sidebarTitle">About Me<h2>
              <hr/>
              <img src="https://mdbcdn.b-cdn.net/img/new/slides/041.webp" width="300px" height="300px">
              <p class="sidebartext">
              TalkTalkTalkTalkTalkTalkTalkTal
              TalkTalkTalkTalkTalkTalkTalkTal
              TalkTalkTalkTalkTalkTalkTalkTal
              TalkTalkTalkTalkTalkTalkTalkTal
              TalkTalkTalkTalkTalkTalkTalkTal
              TalkTalkTalkTalkTalkTalkTalkTal
              TalkTalkTalkTalkTalkTalkTalkTal
              TalkTalkTalkTalkTalkTalkTalkTal
            </p>
      </div>

      <div class="sidebarItem">
          <h2 class="sidebarTitle">Catagory</h2>
          <hr >
          <ul class="sidebarlist">
              <div class="leftlist">
              <li class="sidebarlistitem">Life</li>
              <li class="sidebarlistitem">Sport</li>
              <li class="sidebarlistitem">Music</li>
              </div>
              <div class="rightlist">
              <li class="sidebarlistitem">Tech</li>
              <li class="sidebarlistitem">Cinema</li>
              <li class="sidebarlistitem">style</li>
             </div>
          </ul>
      </div>
      <div class="sidebarItem">
      
          <h2 class="sidebarTitle">Follow Us</h2>
          <hr/>
          <div class="sidebar-social">
    <i class=' icon fas fa-bell'></i>
    <i class='icon fas fa-map-marker'></i>
    <i class="icon  fa fa-save"></i>  
    <i class='icon  fas fa-user-circle'></i>
    
</div>
      </div>
    </div>
</div>
</div>
</body>
    </html>