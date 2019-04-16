<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Free Equine Therapy</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">
</head>
    <!-- main css -->
        <!-- Styles -->
        <style>

            ul {
        
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
}

li {
  float: left;
;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 16px 14px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

    .active {
  background-color: #636b6f;
}
            html, body {
                background-color:#eee ;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }


            .links >a {
                color: blue;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                text-align :center;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            #avatar{
                border-radius:50%;
                position:relative;
                margin:0 auto;
            
                text-align:center;
                
            }
            .class{
               border-radius:50%;  
            }
            

           
        </style>
    </head>
    <body>
       

        
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

          <div class="content">
                <div class="title m-b-md">
                    Free Equine Therapy
                </div>




        
                   
   

 <div class="links">
 <a href="volunteers">The Farm</a>
 <a href="{{route('create_blog_path')}}">Create New Blog Post</a>
 
 
 <a href="record">Patients</a>
   <a href="directions">Directions</a>
 <a href="photos">Photos</a>
  <a href="blogs">Post</a>
  </div>
  <div id="avatar">
    <img src="img43.jpg">
    <img src="img44.jpg">
    <img src="img45.jpg">
    <p class="hhh">We welcome emotionally mature volunteers at least 18 years old who are committed to living a life free of tobacco, illegal drugs or alcohol abuse. A clear vision starts with a clear mind. We have a one-month minimum commitment for live-in volunteers with preference given to longer stays. There is no charge come come and live and learn at our farm. If you wish to join our family, apply here. </p>
    

</div>


    </body>
</html>
