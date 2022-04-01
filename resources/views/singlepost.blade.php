<!DOCTYPE html>
<html>
    <head>
    <title>The First Blog Website</title>
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
                @if(Auth::user())<a href="{{route('handle.signout')}}"><li class="toplistitem">logout</li></a>@endif
            </ul>
        </div>
        <div class="topright">
        <img class="topimage" src="https://th.bing.com/th/id/OIP.jryuUgIHWL-1FVD2ww8oWgHaHa?pid=ImgDet&rs=1">

        </div>
</div>


<div class="header">
    <div class="headertitle">
        <h2 class="headertitlebg">The Best Bloging Site you Can find</h2>
        <h4 class="headertitlesm">Come And Join Our Community Here</h4>
        <button class="btn">Get Started Here</button>
    </div>
    <img  class="headerimage" src="https://mdbcdn.b-cdn.net/img/new/slides/041.webp"/>
 
</div>



<div class="home">
  <div class="singlepost">
      <div class="singlepostwrapper">
          <img src="https://mdbcdn.b-cdn.net/img/new/slides/041.webp" alt="" class="singlepostimg">
          <h1 class="singleposttitle">{{$post->title}}</h1>
          @if(Auth::user()->username===$post->author)<div style="" class="singlepostedit">
          <a href="{{route('editpost.post',$post->id)}}"><i class='singleposticon fas fa-edit'></i></a>
          <a href="{{route('delete.post',$post->id)}}"><i class='singleposticon fas fa-trash-alt'></i></a>
          </div>@endif

          <div class="singlepostinfo">
              <span class="singlepostauthor">Author: <b>{{$post->author}}</b></span>
              <span class="singlepostdate">{{$post->created_at}}</span>
              </div>
              <p class="singlepostdesc">
                  {{$post->description}} 
              </p>
         
      </div>
  </div>


<div class="sidebar">
    <div class="sidebarItem">
        <span class="sidebarTitle">About Me</span>
        <img src="https://th.bing.com/th/id/OIP.jryuUgIHWL-1FVD2ww8oWgHaHa?pid=ImgDet&rs=1"/>
        <p> Lorem ipsum dolor sit amet consectetur adipisi 
            elit. Doloremque suscipit repellendus amet tem
            bus unde est dolores tempora pariatur mollitia,
            Lorem ipsum dolor sit amet consectetur adipisi 
            elit. Doloremque suscipit repellendus amet tem
            bus unde est dolores tempora pariatur mollitia,
        </p>
    </div>

    <div class="sidebarItem">
    <span class="sidebarTitle">Catagories</span>
    <ul class="sidebarlist">
        <div class="sidebarlistalignleft">
        <li class="sidebarlistitem">Life</li>
        <li class="sidebarlistitem">Sport</li>
        <li class="sidebarlistitem">Music</li>
        </div>
        <div class="sidebarlistalignright">
        <li class="sidebarlistitem">Style</li>
        <li class="sidebarlistitem">Cinema</li>
        <li class="sidebarlistitem">Movie</li>
        </div>
        
    </ul>
    </div>

    <div class="sidebarItem">
    <span class="sidebarTitle">Follow Us</span>
     <div class="sidebarsocial">
     <i class='sidebaricon fas fa-bell'></i>
     <i class='sidebaricon fas fa-map-marker'></i>
     <i class="sidebaricon  fa fa-save"></i>  
     <i class='sidebaricon  fas fa-user-circle'></i>
     </div>
    </div>
</div>    
</div>

    </body>
</html>