<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="../css/App.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        {{-- @vite(['resources/css/app.css','resources/js/app.js']) --}}
        <!-- Styles -->

       <style>
        .body {
            margin-top: 0;
            height: 100vh;
           
            background-color: #ffffff;
    background-image: 
        radial-gradient(at 47% 33%, hsl(164.18, 43%, 59%) 0, transparent 59%), 
        radial-gradient(at 82% 65%, hsl(166.53, 72%, 60%) 0, transparent 55%);

        background-position:center;
            background-size: cover;
            background-repeat: no-repeat;
}
       </style>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="body">

            @if (Route::has('login'))
            <nav class=" flex  items-center justify-center p-7 ">
                <div class="flex items-center justify-between container w-full">
                    <div>
                        <h1 class="text-3xl font-bold text-blue-300  "> T+ <sup class="font-regular font-mono font-thin text-sm">ke</sup></h1>
                    </div>
                                {{-- ///////////links --}}

                                <div>
                                    <ul class="flex items-center m font-medium text-lg">
                                        <li class="ml-7">Home</li>
                                        <li class="ml-7">Abouts</li>
                                        <li class="ml-7">Events</li>
                                        <li class="ml-7">Blog</li>
                                        <li class="ml-7">Contact</li>
                                    </ul>
                                </div>
                                <div>
                                @auth
                                    <a
                                    href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class=""
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                        href="{{ route('register') }}"
                                            class="border border-blue-600 w-fit px-7 py-4 ml-5"
                                        >
                                            Register
                                        </a>
                                    @endif
                                    @endauth
                                
                                </div>
                        @endif
                                </div>
                                    </nav>


<div class="flex ml-20 items-center h-3/4 p-2 justify-center ">
    {{--            //messange--}}
    <div class="flex flex-col ">
        <h1 class="text-6xl font-extrabold 	 ">Book your tickets for <br>
            <span class="leading-loose">
                    event!
                </span>
        </h1>
        <p class=" font-roboto text-lg font-itallic font-md m-4">
            <ul>
                <li class="flex items-center leading-loose "><i class=" mr-4 fa-solid fa-star text-sm "></i>Easy,secure,convinient way to purchase your tickets</li>
                <li class="flex items-center leading-loose "><i class=" mr-4 fa-solid fa-star text-sm"></i>Easy,secure,convinient way to purchase your tickets</li>
            </ul>
            {{-- <a href="#" class=" ml-3 text-purple-900">
                Read more <i class="fa-solid fa-arrow-right"></i>
            </a> --}}
        </p>
        <div class="mt-11"><a
            href="{{ route('login') }}"
            class=" shadow-2xl w-56 px-20 bg-gray-300 py-4 ml-5"
            >
            Log in
        </a>
        
        @if (Route::has('register'))
        <a
        href="{{ route('register') }}"
        class="border border-blue-600 w-56 px-20 shadow-2xl  ml-5 py-4 "
        >
                Register
            </a>
        @endif
        </div>
        {{--                     Rating--}}
        <div class="flex items-center pt-16">
            <div class=" flex items-center mr-4">
                <p> <i class="fa-brands fa-google-play purple-600 mr-2"></i> Google play </p>
                <span class="mr-2 text-yellow-700 ">
                    <i class="fa-solid fa-star text-sm "></i>
                    <i class="fa-solid fa-star "></i>
                    <i class="fa-solid fa-star "></i>
                    <i class="fa-solid fa-star "></i>
                    <i class="fa-solid fa-star-half-stroke "></i>
                </span>
                <span> 4.5</span>
            </div>
            <div class=" flex items-center">
                <p> <i class="fa-brands fa-facebook text-blue-600 mr-2"></i> Facebook </p>
                <span class="text-sm text-yellow-700 mr-2">
                    <i class="fa-solid fa-star "></i>
                    <i class="fa-solid fa-star "></i>
                    <i class="fa-solid fa-star "></i>
                    <i class="fa-solid fa-star "></i>
                    <i class="fa-solid fa-star-half-stroke "></i>
                    </span>
                <span>4.8</span>
            </div>
        </div>
    </div>
    
                    {{--            //illustation ofn the project--}}
                  <div class="flex ml-36 items-center space-x-6 lg:space-x-8">
                    <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                     
                        <div class="h-72 w-44 overflow-hidden rounded-lg">
                        <img src="https://plus.unsplash.com/premium_photo-1682855223543-2427fec5ec3d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fGNvbmNlcnR8ZW58MHx8MHx8fDA%3D" alt="" class="h-full w-full object-cover object-center">
                      </div>
                    </div>
                    <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                      
                      <div class="h-64 w-44 overflow-hidden rounded-lg">
                        <img src="https://placekeanu.com/250/350/y" alt="" class="h-full w-full object-cover object-center">
                    </div>
                      <div class="h-64 w-44 overflow-hidden rounded-lg">
                          <img src="https://images.unsplash.com/photo-1565035010268-a3816f98589a?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fGNvbmNlcnR8ZW58MHx8MHx8fDA%3D" alt="" class="h-full w-full object-cover object-center">
                        </div>
                    </div>
                    <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                            <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y29uZmVyZW5jZXxlbnwwfHwwfHx8MA%3D%3D" alt="" class="h-full w-full object-cover object-center">
                        </div>
                        
                    </div>
                  </div>
    </div>
    

    
 
                    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                        {{-- Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }}) --}}
                    </footer>
                </div>
            </div>
        </div>
    </div>
    <div class="flex items-center justify-center ">
        <div class="border border-gray-400 flex items-center justify-center shadow-lg flex-col  w-3/4 h-fit">

            <h1>featured events</h1>
            <p>Be sure you do not miss any event today</p>
            <div>
                <div class="flex items-center justify-center">
                    <<!-- component -->
<!-- This is an example component -->
                     <div>


<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <a href="#">
        <img class="rounded-t-lg" src="https://images.unsplash.com/photo-1429962714451-bb934ecdc4ec?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8Y29uY2VydHxlbnwwfHwwfHx8MA%3D%3D" alt="" />
    </a>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Read more
             <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>
</div>

                     </div>
                
            </div>
        </div>
</div>
    </body>
    </html>
    