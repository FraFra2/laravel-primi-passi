<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        {{-- tailwind --}}
        <script src="https://cdn.tailwindcss.com"></script>
        {{-- fontAwesome --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        {{-- font --}}
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


    </head>
    <body>
        <div class = "h-screen flex">
            {{-- aside --}}
            <aside class = "w-1/5 border-r-2 border-dashed border-red-600">
                <div class = "flex gap-4 p-2 items-center justify-center bg-red-600 text-white">
                    <i class="fa-brands fa-laravel text-4xl"></i>
                    <h1 class = "text-xl">
                        Laravel Primi Passi 
                    </h1>
                </div>
               <div class = "h-[90%] flex items-center justify-center">
                    <ul class = "flex flex-col gap-y-12 text-center text-xl">
                        <li class ="uppercase bg-red-400 p-2 rounded-md drop-shadow-2xl text-red-200 transition-all hover:bg-red-500 hover:scale-125 hover:text-white"><a href="/">Home</a></li> 
                        <li class ="uppercase bg-red-400 p-2 rounded-md drop-shadow-2xl text-red-200 transition-all hover:bg-red-500 hover:scale-125 hover:text-white"><a href="projects">Projects</a></li>
                        <li class ="uppercase bg-red-400 p-2 rounded-md drop-shadow-2xl text-red-200 transition-all hover:bg-red-500 hover:scale-125 hover:text-white"><a href="aboutme">About me</a></li>
                    </ul>
               </div>
            </aside>
            {{-- main --}}
            <main class = "w-4/5">
                <div class ="h-screen flex items-center justify-center">
                    <div class = "flex gap-x-8 items-center border-2 border-red-600 p-8 rounded-full group transition-all delay-100 hover:bg-red-600">
                        <i class="fa-brands fa-laravel text-8xl animate-pulse text-red-600 transition-all delay-200 group-hover:text-white"></i>
                        <h2 class = "text-8xl animate-pulse text-red-600 transition-all delay-200 group-hover:text-white">
                            About Me
                        </h2>
                    </div>
                </div>
            </main>
        </div>
        

    </body>
</html>
