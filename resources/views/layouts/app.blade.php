<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Quick Blogs</title>
        <x-link/>
    </head> 
    <body>
        @if(session('notification'))
            <div class="absolute animate-bounce inset-x-0 flex top-10 cursor-pointer" onclick="this.remove()">
                <div class="m-auto">
                    <div class="p-3 bg-white border border-gray-300 rounded-lg shadow-lg">
                        <div class="flex flex-row">
                            <div class="ml-2 mr-3">
                                <span>{{ session('notification') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <header class="w-10/12 py-6 mx-auto border-b">
            <div class="flex justify-between">
                <h1>Quick</h1>
                <nav class="flex justify-between gap-x-10">
                    <ul class="flex gap-x-5">
                        <li><a class="" href="{{ route('search') . '?category=kampus' }}">Kampus</a></li>
                        <li><a class="" href="{{ route('search') . '?category=jurusan' }}">Jurusan</a></li>
                        <li><a class="" href="{{ route('search') . '?category=karir' }}">Karir</a></li>
                        <li><a class="" href="">Mitra</a></li>
                    </ul>
                    @guest
                        <ul class="flex gap-x-2">
                            <li><a class="px-4 py-3 border" href="/register">Daftar</a></li>
                            <li><a class="px-4 py-3 bg-indigo-500" href="/login">Masuk</a></li>
                        </ul>
                    @endguest
                    @auth
                        <ul class="flex gap-x-2">
                            <li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <a class="px-4 py-3 border" href="" x-data @click="$event.preventDefault(); document.getElementById('logout-form').submit()">
                                        Keluar
                                    </a>
                                </form>
                            </li>
                        </ul>
                    @endauth
                </nav>
            </div>
        </header>
        <main>

            @yield('body')
            <div class="w-10/12 mx-auto py-4 bg-gray-300">
                <ul class="px-20 flex justify-between">
                    <li><a class="flex flex-col place-items-center" href="">
                        <i class="fas fa-school fa-2x p-5 bg-blue-500 rounded-md"></i>
                        Kampus
                    </a></li>
                    <li><a class="flex flex-col place-items-center" href="">
                        <i class="fas fa-graduation-cap fa-2x p-5 bg-blue-500 rounded-md"></i>
                        Link
                    </a></li>
                    <li><a class="flex flex-col place-items-center" href="">
                        <i class="fas fa-briefcase fa-2x p-5 bg-blue-500 rounded-md"></i>
                        Karir
                    </a></li>
                    <li><a class="flex flex-col place-items-center" href="">
                        <i class="fas fa-award fa-2x p-5 bg-blue-500 rounded-md"></i>
                        Beasiswa
                    </a></li>
                    <li><a class="flex flex-col place-items-center" href="">
                        <i class="fas fa-diagnoses fa-2x p-5 bg-blue-500 rounded-md"></i>
                        Uji Potensi
                    </a></li>
                    <li><a class="flex flex-col place-items-center" href="">
                        <i class="far fa-handshake fa-2x p-5 bg-blue-500 rounded-md"></i>
                        Mitra
                    </a></li>
                    <li><a class="flex flex-col place-items-center" href="">
                        <i class="fas fa-book-reader fa-2x p-5 bg-blue-500 rounded-md"></i>
                        Belajar
                    </a></li>
                </ul>
            </div>

        </main>
        <footer>
            <div class="bg-linear-pink-invert py-12 px-4">
                <div tabindex="0" aria-label="footer"
                    class="focus:outline-none mx-auto container flex flex-col items-center justify-center">
                    <div tabindex="0" aria-label="prodify logo" role="img">
                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_center_aligned_with_logo-svg1.svg"
                            alt="logo">
                    </div>
                    <div class="text-black flex flex-col md:items-center f-f-l pt-3">
                        <h1 tabindex="0" class="focus:outline-none text-2xl font-black">Daftar. Pilih. Selamat.</h1>
                        <div class="md:flex items-center mt-5 md:mt-10 text-base text-color f-f-l">
                            <h2 class=" md:mr-6 pb-4 md:py-0 cursor-pointer"><a
                                    class="focus:outline-none focus:underline hover:text-gray-700"
                                    href="javascript:void(0)">Download Now</a> </h2>
                            <h2 class="cursor-pointer"><a class="focus:outline-none focus:underline hover:text-gray-700"
                                    href="javascript:void(0)">License</a> </h2>
                        </div>
                        <div class="my-6 text-base text-color f-f-l">
                            <ul class="md:flex items-center">
                                <li class="md:mr-6 cursor-pointer pt-4 lg:py-0"><a href="javascript:void(0)"
                                        class="focus:outline-none focus:underline hover:text-gray-500">About </a></li>
                                <li class="md:mr-6 cursor-pointer pt-4 lg:py-0"><a href="javascript:void(0)"
                                        class="focus:outline-none focus:underline hover:text-gray-500">Features </a>
                                </li>
                                <li class="md:mr-6 cursor-pointer pt-4 lg:py-0"><a href="javascript:void(0)"
                                        class="focus:outline-none focus:underline hover:text-gray-500">Pricing </a></li>
                                <li class="md:mr-6 cursor-pointer pt-4 lg:py-0"><a href="javascript:void(0)"
                                        class="focus:outline-none focus:underline hover:text-gray-500">Careers </a></li>
                                <li class="md:mr-6 cursor-pointer pt-4 lg:py-0"><a href="javascript:void(0)"
                                        class="focus:outline-none focus:underline hover:text-gray-500">Help </a></li>
                                <li class="cursor-pointer pt-4 lg:py-0"><a href="javascript:void(0)"
                                        class="focus:outline-none focus:underline hover:text-gray-500">Privacy Policy
                                    </a></li>
                            </ul>
                        </div>
                        <div class="text-sm text-color mb-10 f-f-l">
                            <p tabindex="0" class="focus:outline-none">© 2022 Quick. All rights reserved</p>
                        </div>
                    </div>
                    <div class="w-9/12 h-0.5 bg-gray-100 rounded-full"></div>
                    <div class="flex justify-between items-center pt-12">
                        <a href="javascript:void(0)"
                            class="hover:shadow-lg mr-4 focus:outline-none rounded-md focus:ring-2 focus:ring-offset-2 focus:ring-gray-600"
                            aria-label="download on the app store">
                            <div class="">
                                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_center_aligned_with_logo-svg2.svg"
                                    alt="download on the app store">
                            </div>
                        </a>
                        <button
                            class="hover:shadow-lg focus:outline-none rounded-md focus:ring-2 focus:ring-offset-2 focus:ring-gray-600"
                            aria-label="get it on google play"></a>
                            <div>
                                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_center_aligned_with_logo-svg3.svg"
                                    alt="get it on google play">
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </footer>

        <x-script/>
    </body>
</html>
