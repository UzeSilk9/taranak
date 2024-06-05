@extends('Auth.template')

@section('title')
Login Admin Taranak-laravel
@endsection

@section('content')

  <div class="container mx-auto h-full flex flex-1 justify-center items-center">
    <div class="w-full max-w-lg">
      <div class="leading-loose">
        <form action="{{ route('login') }}" method="post" class="max-w-xl m-4 p-10 bg-white rounded shadow-xl">
          @csrf
          <p class="text-gray-800 text-center text-lg font-bold">Login</p>
          <div class="">
            <label class="block text-sm text-gray-00" for="username">Username</label>
            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="username" name="username" type="username" required="" placeholder="username" aria-label="username">
          </div>
          <div class="mt-2">
            <label class="block text-sm text-gray-600" for="password">Password</label>
            <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="password" name="password" type="password" required="" placeholder="*******" aria-label="password">
          </div>
          <div class="mt-4 items-center justify-between">
            <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Login</button>
            <a class="inline-block right-0 align-baseline  font-bold text-sm text-500 hover:text-blue-800" href="#">
              Forgot Password?
            </a>
          </div>
          <a class="inline-block right-0 align-baseline font-bold text-sm text-500 hover:text-blue-800" href="{{ route('register') }}">
            Not registered ?
          </a>
        </form>
  
      </div>
    </div>
  </div>

@endsection


