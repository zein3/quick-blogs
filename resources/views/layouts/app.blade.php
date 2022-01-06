<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Quick Blogs</title>
        <x-link/>
    </head> 
    <body>
        <header class="w-10/12 mx-auto py-6 border-b">
            <div class="flex justify-between">
                <h1>Quick</h1>
                <nav class="flex justify-between gap-x-10">
                    <ul class="flex gap-x-5">
                        <li><a class="" href="">Kampus</a></li>
                        <li><a class="" href="">Jurusan</a></li>
                        <li><a class="" href="">Karir</a></li>
                        <li><a class="" href="">Mitra</a></li>
                    </ul>
                    <ul class="flex gap-x-2">
                        <li><a class="px-4 py-3 border" href="/register">Daftar</a></li>
                        <li><a class="px-4 py-3 bg-indigo-500" href="/login">Masuk</a></li>
                    </ul>
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
