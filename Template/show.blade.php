<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

    <!-- Site Metas -->
    <title>MENU</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{asset('site/images/apple-touch-icon.png')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('site/css/bootstrap.min.css')}}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('site/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('site/css/responsive.css')}}">
    <!-- color -->
    <link id="changeable-colors" rel="stylesheet" href="{{asset('site/css/colors/orange.css')}}" />

    <!-- Modernizer -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
        <style>
           body{
            overflow: hidden!important;
           }
           .banner{
	            background:url("{{asset($menu->image)}}") no-repeat center top;
                background-attachment:fixed;
                background-size:cover;
                height:100vh;
                min-height:100%;
            }
            .slick-track{
                width:auto!important;
            }
            .tab-menu{
                background-color:#f5f5fc00!important ;
                margin: 25px 0px 0px 0px!important;
            }
            .offer-item{
                margin-left: 41px!important;
            }
            .offer-item div p,.offer-item .offer-price{
                color:#fff!important;
            }
            .offer-item .offer-price{
                width: 38px!important;
                height: 38px!important;
                right: 123px!important;
                top: 42%!important;
                line-height: 35px!important;
                font-size:initial!important;
            }
            .tab-menu .slider.slider-single{
                border-top:0px!important;
            }
            .banner-text h1{
                padding-top: 0px!important;
            }
            .color-white{
                color:white!important;
                font-size:28px!important ;
            }
            .offer-item img{
                width: 7%;
                padding: 2px;
            }
            .offer-item{
                margin-bottom:10px!important;
            }

            

            @media (max-width: 768px),(max-width: 480px){
                
                .banner-text h1{
                    font-size: 22px;
                }
                .color-white{
                    text-align: center;
                }

                .offer-item img{
                width: 24%;
            }
            .offer-item .offer-price{
                display: block;
                right:180px!important;
                top:27%!important;
            }
            body{
                overflow:scroll!important;
                }
            }
        </style>
</head>

<body class="banner">
    {{-- <div id="loader">
        <div id="status"></div>
    </div> --}}
    <div id="banner" class="full-screen-mode parallax banner-static">
        <div class="container ">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="height: auto;">
                <div class="col-12">
                    <div class="banner-text">
                        <div class="banner-cell">
                            <h1 id="full_screen">Dinner with us  <span class="typer" id="some-id" data-delay="200" data-delim=":" data-words="Friends:Family:Officemates" data-colors="red"></span><span class="cursor" data-cursorDisplay="_" data-owner="some-id"></span></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                
                <div class="tab-menu mt-2">
                    <div class="">
                        <div>
                            @foreach ($menu->Lists as $list)
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 " style="margin-top: 16px;">
                                    <h3 class="block-title color-white">{{$list->name}}</h3>
                                    
                                       @foreach($list->products as $product)
                                            <div class="offer-item">
                                                <div>
                                                    <h3>{{$product->product->name}}</h3>
                                                    <span>{{$product->product->description}}</span>
                                                </div>
                                                <span class="offer-price">{{$list->status_price?$list->price:0}}</span>
                                            </div>
                                        @endforeach
                                </div>
                            @endforeach
                            <!-- end col -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        
    <!-- ALL JS FILES -->
    <script src="{{asset('site/js/all.js')}}"></script>
    <script src="{{asset('site/js/bootstrap.min.js')}}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{asset('site/js/custom.js')}}"></script>
    <script>
        function enterFullScreen(element) {
  if(element.requestFullscreen) {
    element.requestFullscreen();
    element.css("background-image",{{asset($menu->image)}})
  }else if (element.mozRequestFullScreen) {
    element.mozRequestFullScreen();     // Firefox
  }else if (element.webkitRequestFullscreen) {
    element.webkitRequestFullscreen();  // Safari
  }else if(element.msRequestFullscreen) {
    element.msRequestFullscreen();      // IE/Edge
  }
};

let btn = document.getElementById("full_screen");
btn.addEventListener("click", function(){
  let videoEle = document.querySelector('body');
  enterFullScreen(videoEle);
  videoEle.css("background-image",{{asset($menu->image)}})
});

document.addEventListener('fullscreenchange', (event) => {
  if (document.fullscreenElement) {
    console.log('Entered fullscreen:', document.fullscreenElement);
  } else {
    console.log('Exited fullscreen.');
  }
});    
        
    </Script>
</body>

</html>