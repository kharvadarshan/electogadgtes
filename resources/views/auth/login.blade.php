<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <section class=" mt-4 align-content-center text-dark">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 w-75 col-xl-4 offset-xl-1">
            <x-guest-layout>
        <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                  <p class="lead fw-normal mb-0 me-3">Sign in with</p>
                  <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary rounded-pill btn-floating mx-1 m-2">
                          <a href="#" class="fa fa-facebook text-decoration-none"></a>
                  </button>
      
                  <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary rounded-pill btn-floating mx-1">
                    <a href="#" class="fa fa-twitter text-decoration-none"></a>
                  </button>
      
                  <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary rounded-pill btn-floating mx-1">
                    <a href="#" class="fa fa-linkedin text-decoration-none"></a>
                  </button>
                  <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary rounded-pill btn-floating mx-1">
                    <a href="#" class="fa fa-google text-decoration-none"></a>
                  </button>
                </div>
      
                <div class="divider d-flex align-items-center my-4">
                  <p class="text-center fw-bold mx-3 mb-0">Or</p>
                </div>

         
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>


        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>


        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-primary rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3 btn-primary bg-primary text-dark border-0 text-capitalize font-weight-bold " style="font-size:18px;" >
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> 

            </div>
          </div>
        </div>
        <div class="d-flex mt-lg-4 flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
          <!-- Copyright -->
          <div class="text-white mb-3 mb-md-0">
            Copyright © 2020. All rights reserved.
          </div>
          <!-- Copyright -->
      
          <!-- Right -->
          <div>
            <a href="#!" class="text-white me-4 m-2">
                <a href="#" class="fa fa-facebook text-decoration-none"></a>
            </a>
            <a href="#!" class="text-white me-4 m-2">
                <a href="#" class="fa fa-twitter text-decoration-none"></a>
            </a>
            <a href="#!" class="text-white me-4 m-2">
                <a href="#" class="fa fa-linkedin text-decoration-none"></a>
            </a>
            <a href="#!" class="text-white m-2">
                <a href="#" class="fa fa-google text-decoration-none"></a>
            </a>
          </div>
          <!-- Right -->
        </div>
      </section>
</body>
</html>