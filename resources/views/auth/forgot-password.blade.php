@extends('layouts.app')

@section('body')
<div class="flex items-center justify-center min-h-full px-4 py-12 sm:px-6 lg:px-8">
    <div class="w-full max-w-md space-y-8">
        <div>
            <h2 class="mt-6 text-3xl font-extrabold text-center text-gray-900">
                Please enter your email address
            </h2>
        </div>

        @if(session('error'))
            <x-alert :message="session('error')" />
        @endif
        @foreach($errors->all() as $message)
            <x-alert :message="$message" />
        @endforeach

        <form class="mt-8 space-y-6" action="{{ route('password.request') }}" method="POST">
            @csrf

            <input type="hidden" name="remember" value="true">
            <div class="rounded-md shadow-sm -space-y-px">
                <div>
                    <label for="email-address" class="sr-only">Email Address</label>
                    <input id="email-address" name="email" type="text" value="{{ old('email') }}" autocomplete="email"
                        required
                        class="relative block w-full py-3 px-4 text-gray-900 placeholder-gray-500 border border-gray-300 rounded-none appearance-none rounded-t-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-base"
                        placeholder="Email Address">
                </div>
            </div>

            <div>
                <button type="submit"
                    class="relative flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent group rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Reset Password
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
