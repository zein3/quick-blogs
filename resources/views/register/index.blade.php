@extends('layouts.app')

@section('body')
<form class="space-y-6" action="{{ route('register') }}" method="POST">
    @csrf

    <div class="min-h-full flex items-center justify-center px-4 sm:px-6 lg:px-8">
        <div class="max-w-2xl w-full space-y-8 border rounded-md">
            <div class="pt-5">
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                    Register and be useful to others
                </h2>
                @foreach($errors->all() as $message)
                    <x-alert :message="$message" />
                @endforeach
            </div>
            <div class="px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                            for="username">
                            Username
                        </label>
                        <input
                            class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
                            id="username" name="username" type="text" placeholder="Username"
                            value="{{ old('username') }}">
                        <x-input-error field="username" />
                    </div>
                    <div class="md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                            for="full_name">
                            Full Name
                        </label>
                        <input
                            class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                            id="full_name" name="full_name" type="text" placeholder="Full Name"
                            value="{{ old('full_name') }}">
                        <x-input-error field="full_name" />
                    </div>
                </div>
                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-full px-3">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                            for="email">
                            Email Address
                        </label>
                        <input
                            class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3"
                            id="email" type="email" name="email" placeholder="example@example.com" value="{{ old('email') }}">
                        <x-input-error field="email" />
                    </div>
                </div>
                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-full px-3">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                            for="phone_number">
                            Phone Number
                        </label>
                        <input
                            class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3"
                            id="phone_number" name="phone_number" type="tel" placeholder="62 812 3456 7890" value="{{ old('phone_number') }}">
                    </div>
                </div>
                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                            for="password">
                            Password
                        </label>
                        <input
                            class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
                            id="password" name="password" type="password" placeholder="**********">
                        <p class="text-red text-xs italic">Make it as long and as crazy as you'd like</p>
                        <x-input-error field="password" />
                    </div>
                    <div class="md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                            for="password_confirmation">
                            Password Confirmation
                        </label>
                        <input
                            class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                            id="password_confirmation" name="password_confirmation" type="password"
                            placeholder="**********">
                        <x-input-error field="password_confirmation" />
                    </div>
                </div>
                <div class="flex items-center justify-between my-5">
                    <div class="flex items-center">
                        <input id="remember-me" name="remember-me" type="checkbox"
                            class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="remember-me" class="ml-2 block text-sm text-gray-900">
                            Saya setuju dengan segala kebijakan Quick.
                        </label>
                    </div>
                </div>
                <div>
                    <button type="submit"
                        class="group relative w-full flex justify-center p-3 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <!-- Heroicon name: solid/lock-closed -->
                            <svg class="h-5 w-5 text-blue-500 group-hover:text-blue-400"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                        Register
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
