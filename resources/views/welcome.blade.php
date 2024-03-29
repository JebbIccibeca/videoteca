<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>

    <!-- component -->
<style>
    #nav-mobile-btn.close span:first-child{
        transform: rotate(45deg);
        top: 4px;
        position: relative;
        background:#a0aec0;
    }
    #nav-mobile-btn.close span:nth-child(2){
        transform: rotate(-45deg);
        margin-top: 0px;
        background:#a0aec0;
    }
    html {
            scroll-behavior: smooth;
            background: url('https://www.bernersennen.net/wp-content/uploads/2019/07/free-movie-streaming-sites.jpg')
        }
</style>
<body class="overflow-x-hidden antialiased w-full">

    <!-- HERO SECTION -->
    <div>
        <div class="z-30 relative items-center justify-center w-full w-screen h-screen">
            <div>
                <div class="inset-0  h-screen">
                </div>

                <div class="absolute inset-0 z-40  flex justify-between h-full px-8 " >
                    <div class="relative z-20 w-full h-24  pt-2 ">
                        <div class="flex items-center justify-between h-full w-full">
                            <img src="{{asset('logo/logo.svg')}}" class="w-auto h-12"/>

                            <div id="nav" class=" text-white absolute top-0 left-0 hidden block w-full mt-20 border-b border-gray-200 sm:border-none sm:px-5 sm:block sm:relative sm:mt-0 sm:px-0 sm:w-auto">
                                <nav class="flex flex-col items-center py-3  bg-red-500 sm:flex-row sm:bg-transparent sm:border-none sm:py-0">
                                    @if (Route::has('login'))
                                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                            @auth
                                                <a href="{{ url('/dashboard') }}" class="px-1 mb-1 mb-5 mr-0 text-base sm:mb-0 sm:mr-4 lg:mr-8 text-red-600 font-extrabold">Dashboard</a>
                                            @else
                                                <a href="{{ route('login') }}" class="px-1 mb-1 mb-5 mr-0 text-base sm:mb-0 sm:mr-4 lg:mr-8 text-red-600 font-extrabold">Log in</a>

                                                @if (Route::has('register'))
                                                    <a href="{{ route('register') }}" class="px-1 mb-1 mb-5 mr-0 text-base sm:mb-0 sm:mr-4 lg:mr-8 text-red-600 font-extrabold">Register</a>
                                                @endif
                                            @endauth
                                        </div>
                                    @endif
                                </nav>
                            </div>

                            <div id="nav-mobile-btn" class="absolute top-0 right-0 z-50 block w-6 mt-8 mr-10 cursor-pointer select-none sm:hidden sm:mt-10">
                                <span class="block w-full h-1 mt-2 duration-200 transform bg-white rounded-full sm:mt-1"></span>
                                <span class="block w-full h-1 mt-1 duration-200 transform bg-white rounded-full"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="absolute inset-0 z-20 flex items-center justify-center h-screen w-full bg-gray-900 bg-opacity-50"></div>
                <div data-aos="flip-down" class="absolute inset-0  z-30 container flex flex-col items-center justify-center h-full max-w-6xl pl-0 mx-auto  sm:pl-8 xl:pl-0 md:flex-row md:justify-between">
                    <div class="flex flex-col items-center justify-center mx-auto">
                        <div class="relative text-center ">
                            <h1 class="text-white relative mb-4 text-6xl font-bold font-sans italic leading-none text-center lg:text-9xl xl:text-9xl"> Videomania <br><span class="text-red-500">H24</span></h1>
                            <p class="text-gray-400 text-sm lg:text-4xl lg:text-center font-sans italic">Marco Guastella
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- HERO SECTION END -->


<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset:100,
            duration :1000
        });
    </script>
    <script>
        if( document.getElementById('nav-mobile-btn') ){
            document.getElementById('nav-mobile-btn').addEventListener('click', function(){
                if( this.classList.contains('close') ){
                    document.getElementById('nav').classList.add('hidden');
                    this.classList.remove('close');
                } else {
                    document.getElementById('nav').classList.remove('hidden');
                    this.classList.add('close');
                }
            });
        }
    </script>
</body>


</html>
