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
            <div class="absolute inset-x-0 flex top-10 cursor-pointer" onclick="this.remove()">
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
                        <li><a class="" href="">Kampus</a></li>
                        <li><a class="" href="">Jurusan</a></li>
                        <li><a class="" href="">Karir</a></li>
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

        </main>
        <footer>
            <nav>
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </nav>
        </footer>

        <x-script/>
    </body>
</html>
