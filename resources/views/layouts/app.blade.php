<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bus Entertainment</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="/css/main.css" rel="stylesheet">
        <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">

        <!-- Styles -->
        <link href="https://vjs.zencdn.net/7.8.4/video-js.css" rel="stylesheet" />

  <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
        <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
       
        
        <style>
        .spinner {
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            position: relative;
            margin-top: 4px;
            margin-right: 4px;
            }

            .double-bounce1, .double-bounce2 {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background-color: #cfcdd1;
            opacity: 0.6;
            position: absolute;
            top: 0;
            left: 0;
            
            -webkit-animation: sk-bounce 2.0s infinite ease-in-out;
            animation: sk-bounce 2.0s infinite ease-in-out;
            }

            .double-bounce2 {
            -webkit-animation-delay: -1.0s;
            animation-delay: -1.0s;
            }

            @-webkit-keyframes sk-bounce {
            0%, 100% { -webkit-transform: scale(0.0) }
            50% { -webkit-transform: scale(1.0) }
            }

            @keyframes sk-bounce {
            0%, 100% { 
                transform: scale(0.0);
                -webkit-transform: scale(0.0);
            } 50% { 
                transform: scale(1.0);
                -webkit-transform: scale(1.0);
            }
            }
        </style>
        @livewireStyles
    </head>
    <body class="antialiased font-sans bg-primary text-info">
        <div class="container mx-auto py-4 flex flex-col sm:flex-row justify-between ">
                <div class="">
                    <ul class="flex flex-col text-center space-y-2 sm:space-y-0 sm:text-left sm:flex-row sm:space-x-8 space-x-0 text-sm font-semibold" >
                        <li><a href="{{ route('movie.index') }}" class="text-semibold text-info hover:text-secondary ">LOGO</a></li>
                        <li><a href="#" class="text-semibold text-info hover:text-secondary ">TV SERIES</a></li>
                        <li><a href="#" class="text-semibold text-info hover:text-secondary ">SHOW</a></li>
                        <li><a href="#" class="text-semibold text-info hover:text-secondary ">FILMS</a></li>
                    </ul>
                </div>
                        <livewire:search/>
                
        </div>
        @yield('content')
        <footer class="mt-8 bg-secondary"> 
           <div class="container mx-auto flex flex-col sm:flex-row pt-8 justify-center">
                <ul class="lg:space-x-12 md:space-x-8 sm:space-x-6 space-y-4 md:space-y-0 lg:space-y-0 sm:space-y-0 flex flex-col  sm:flex-row text-center  text-xs">
                    <li><a href="#" class="text-white opacity-25 font-medium ">LOGO</a></li>
                    <li><a href="#" class="text-white opacity-25 font-medium">Contact</a></li>
                    <li><a href="#" class="text-white opacity-25 font-medium">Contact</a></li>
                    <li><a href="#" class="text-white opacity-25 font-medium">Contact</a></li>
                    <li><a href="#" class="text-white opacity-25 font-medium">Contact</a></li>
                    <li><a href="#" class="text-white opacity-25 font-medium">Contact</a></li>
                </ul>
           </div>
           <div class="mt-0 text-xs text-white opacity-25 font-medium
            text-center container mx-auto pb-8 pt-2">
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi quas, exercitationem aliquam amet illo unde iusto ex nam totam, eligendi quisquam quibusdam rem pariatur nobis quo atque optio sint? Ducimus, qui maxime quam eligendi libero vitae sit minima animi iure dicta asperiores ex? A optio ipsam eaque quisquam fugiat dolor.</p>
           </div>
        </footer>
        @livewireScripts
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <script src="https://vjs.zencdn.net/7.8.4/video.js"></script>
    </body>
</html>