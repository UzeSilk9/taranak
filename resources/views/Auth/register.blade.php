@extends('Auth.template')

@section('title')
    Register Admin Taranak-laravel
@endsection

@section('content')
<div class="container mx-auto h-full flex flex-1 justify-center items-center">
    <div class="w-full max-w-lg">
        <div class="leading-loose">
            <form action="{{ route('prosesregis') }}" method="post" class="max-w-xl m-4 p-10 bg-white rounded shadow-xl">
                @csrf
                <p class="text-gray-800 font-medium">Register</p>
                <div class="">
                    <label class= "text-sm text-gray-00" for="username">Username</label>
                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="username" name="username" type="text" required="" placeholder="Your Username" aria-label="Name">
                </div>
                <div class="mt-2">
                    <label class= "text-sm text-gray-600" for="email">Email</label>
                    <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="email" name="email" type="email" required="" placeholder="Your Email" aria-label="Email">
                </div>
                <div class="mt-2">
                    <label class= "text-sm text-gray-600" for="password">Password</label>
                    <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="password" name="password" type="password" required="" placeholder="********" aria-label="Email">
                </div>
                <div class="mt-4">
                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Register</button>
                </div>
                <a class="inline right-0 align-baseline font-bold text-sm text-500 hover:text-blue-800" href="{{ route('/') }}">
                    Already have an account ?
                </a>
            </form>
        </div>
    </div>
</div>
@endsection