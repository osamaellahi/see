<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <link rel="icon" href="
  https://www.pngarts.com/files/2/Letter-S-PNG-High-Quality-Image.png
  " type="image/gif" sizes="16x16">
 
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <style>
      #upload-progress{
    height: 20px;
    border: 1px solid #ddd;
    width: 100%;
}
#upload-progress .progress-bar{
	background: #bde1ff;
    width: 0;
    height: 20px;
}
      .suggestclass{
        margin-bottom:4px;padding:2px;background:lightblue;margin-left:5px;1px solid lightblue;border-radius:2px;float:left;width:auto;display:inline-block;
      }
      .suggestlink{
        padding:0%;color:blueviolet;
      }
      .tooop:hover{
        color:black;
        border-bottom:.5px solid black;
      }
      .tooop:focus{
        color:blue;
        border-bottom:.5px solid black;
      }
.zoom {
  transition: transform .3s; /* Animation */
  margin: 0 auto;
}

.zoom:hover {
  transform: scale(3.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
        .sidenav {
            margin-top:74px; 
            padding-bottom: 10px;
          width: 0;
          position: fixed;;
          z-index: 1;
          top: 0;
          left: 0;
          background-color:ghostwhite;
          overflow-x: hidden;
          transition: 0.5s;
          padding-top: 60px;
          border:1px solid gray;
          border-radius:2px;
        }
        
        .sidenav a {
          padding: 8px 8px 8px 32px;
          text-decoration: none;
          font-size: 17px;
          color:darkslategray;
          display: block;
        }
    
        
        .sidenav a:hover {
          background-color:dimgrey;
          border-bottom:1px solid limegreen;
          color:bisque;
        }
        
        .sidenav .closebtn {
          position: absolute;
          top: 0;
          right: 25px;
          font-size: 36px;
          margin-left: 50px;
        }
        .sidenav .closebtn:hover{
            color: gray;
            background:ghostwhite; 
            border: 0px;
        }
        
        @media screen and (max-height: 450px) {
          .sidenav {padding-top: 15px;}
          .sidenav a {font-size: 18px;}
        }
        @media screen and (max-width: 992px) {
        .right-side-posts-index{
          display: none;
        }
        }
        body{
          background:#f0f0f0;
        }
        .card{
            box-shadow:.7px .7px 4px mediumaquamarine;
            background:#fff;
        }
        .lay{
          cursor:pointer;
        }
        .lay:hover{
          border: 1px solid blueviolet;
        }
        </style>
</head>

<body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#call1").click(function(){
    $("body").css("background", "#f0f0f0");
    $(".card").css("border", "1px solid mediumaquamarine");
    $(".card").css("box-shadow", "0");
  });

  $("#call2").click(function(){
    $("body").css("background", "whitesmoke");
    $(".card").css("border", "1px solid mediumaquamarine");
    $("a").css("color", "black");
  });

  $("#call3").click(function(){
    $("body").css("background", "white");
    $(".card").css("border", "1px solid black");
  });

});
</script>
  <script>
    function lay1()
    {
      
      document.body.style.backgroundColor = "black";
      
      var d=document.getElementsByClassName("card");
      d.style.backgroundColor="#fff";
      var a=document.getElementById("laynormal");
      var b=document.getElementById("lay2");
      var c=document.getElementById("laybw");
    }
    function lay2()
    {
      
      document.body.style.backgroundColor = "#f0f0f0";
      
      var d=document.getElementsByClassName("card");
      d.style.backgroundColor="#fff";
      d.style.border=".7px .7px 4px mediumaquamarine";
      var a=document.getElementById("laynormal");
      var b=document.getElementById("lay2");
      var c=document.getElementById("laybw");
    }
    function lay3()
    {
        var a=document.getElementById("laynormal");
      var b=document.getElementById("lay2");
      var c=document.getElementById("laybw");
    }
  </script>
    <div id="app">
     @include('in.navbar')

        <main class="py-4">
            @yield('content')
        </main>
    </div>
  
<script>
    function openNav() {
      var e =document.getElementById("mySidenav").style;
      if(e.width == "250px")
      {
        e.width = "0px";
      }
      else{
        e.width = "250px";
      }
    }
    
    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }

    $(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
    </script>
</body>
</html>
