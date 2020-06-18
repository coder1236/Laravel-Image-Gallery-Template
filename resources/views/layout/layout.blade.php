<!DOCTYPE html>
<html lang="utf-8">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        
        <link rel="stylesheet" href="{{asset('storage/css/swiper.min.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
        <link rel="stylesheet" href="{{asset('storage/css/imageslider.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('storage/css/app.css')}}">
        
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.4/jquery.mobile-1.4.4.min.css"> -->
    </head>
    <body>
        <div class="container-fluid">
            <!-- Navigation bar -->
            <nav class="navbar navbar-expand-lg navbar-light mb-3">
                <!-- logo -->
                <h3 class="navbar-brand logo"><a href="#"><img src="" alt="" />Logo</a></h3>
                <div class="navbar-nav ml-auto">
                    <div>

                        @if(isset($page) && ($page === 'user') || ($page === 'admin'))
                        <a href="#" class="action-button ml-2 mt-1 popup btn-home">
                            <span><i class="fas fa-home"></i></i>&nbsp&nbspHome</span>
                            <div class="popuptext sharethis-inline-share-buttons"></div>
                        </a>
                        @endif
                        
                        @if( isset($page) && $page==='admin')
                        <a href="#" class="action-button ml-2 mt-1 popup btn-flaged">
                            <span><i class="fas fa-exclamation-triangle"></i>&nbsp&nbspInappropriate</span>
                            <div class="popuptext sharethis-inline-share-buttons"></div>
                        </a>
                        @endif

                        @auth
                        @if(isset($page) && $page === 'home')
                        <a href="#" class="action-button ml-2 mt-1 popup btn-user">
                            <span><i class="fas fa-user-circle"></i>&nbsp&nbspMy Account</span>
                            <div class="popuptext sharethis-inline-share-buttons"></div>
                        </a>
                        @endif
                        @endauth
                        
                        <a href="#" class="action-button ml-2 mt-1 popup btn-share">
                            <span><i class="far fa-share-alt"></i>&nbsp&nbspShare</span>
                            <div class="popuptext sharethis-inline-share-buttons share_links1"></div>
                        </a>
                        @guest
                            <a href="#" class="action-button btn-login ml-2 mt-1 btn-login"><span><i class="fab fa-facebook"></i>&nbsp&nbspLogin</span></a>
                        @endguest   
                        @auth
                            <a href="#" class="action-button btn-login ml-2 mt-1 btn-logout"><span><i class="fab fa-facebook"></i>&nbsp&nbspLogout</span></a>
                        @endauth
                    </div>
                </div>
            </nav>
            @yield('content')
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="http://malsup.github.com/jquery.form.js"></script>
        <!-- <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5e4c045114da310012d336af&product=inline-share-buttons" async="async"></script> -->
        <!-- Swiper JS -->
        <script src="{{asset('storage/js/swiper.min.js')}}"></script>
        <!-- main js -->
        <script type="text/javascript" src="{{asset('storage/js/imagegallery.js')}}"></script>
        <!-- alert js -->
        
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="{{ asset('storage/js/jquery.mobile-1.4.5.min.js') }}"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
       
        <script src="{{ asset('storage/js/app.js') }}"></script>

        <script>
            $(".btn-home").click(function() {
                location.href = "{{ url('/') }}";
            });
            
            $(".btn-user").click(function(){
                location.href = "{{ route('user') }}";
            });
            
            $(".btn-login").click(function() {
                location.href = "{{ url('/auth/redirect/facebook') }}";
            });

            $(".btn-logout").click(function() {
                location.href = "{{ url('/logout') }}";
            });
        </script>
    </body>

    
</html>