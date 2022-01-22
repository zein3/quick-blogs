@extends('layouts.app')

@section('body')
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

    @yield('content')
@endsection
