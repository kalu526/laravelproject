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
                <a href="about"><li class="toplistitem">About</li></a>
                <a href="contact"><li class="toplistitem">Contact</li></a>
                <a href="write"><li class="toplistitem">Write</li></a>
                @if(Auth::user())<a href="{{route('handle.signout')}}"><li class="toplistitem">logout</li></a>@endif
            </ul>
        </div>
        <div class="topright">
        <a href="setting"><img class="topimage" src="https://th.bing.com/th/id/OIP.jryuUgIHWL-1FVD2ww8oWgHaHa?pid=ImgDet&rs=1"></a>

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



<div class="write">
<img src="https://mdbcdn.b-cdn.net/img/new/slides/041.webp" class="writeimg">
<div class="writeform">
    
    <form method="POST" action="{{route('update.post',$final->id)}}" class="writeform">
        @csrf
     <div class="writeformgroup">
         <select name="catagory" class="writecatagory">
            <option value="Life">{{$final->catagory}}</option>
             @if($final->catagory!=="life")<option value="Life">Life</option>@endif
             @if($final->catagory!=="Sport" && $final->catagory!=="sport")<option value="Sport">Sport</option>@endif
             @if($final->catagory!=="Music" && $final->catagory!=="music")<option value="Music">Music</option>@endif
             @if($final->catagory!=="Style" && $final->catagory!=="style")<option value="Style">Style</option>@endif
             @if($final->catagory!=="Cinema" && $final->catagory!=="cinema")<option value="Cinema">Cinema</option>@endif
             @if($final->catagory!=="Movie" && $final->catagory!=="movie")<option value="Movie">Movie</option>@endif
         </select>
     </div>
    <div class="writeformgroup">
    
        <label for="fileinput">
        <i class='writeicon  fas fa-plus'></i>
        </label>
        <input type="file" id="fileinput" name="path" style="display:none;">
        <input type="text" name="title" placeholder="Title" class="writeinput" autofocus="true" value={{$final->title}}>

    </div>
    <div class="writeformgroup">
        <textarea type="text" placeholder="{{$final->description}}" class="writeinput writetext" name="description" >{{$final->description}}</textarea>
    </div>
  <button class="writebutton" type="submit">Update</button>
</div>
</form>
</div>


</body>
</html>