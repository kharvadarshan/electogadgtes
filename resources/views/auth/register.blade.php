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
    <section class="vh-100 mt-4 align-content-center text-dark">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 w-75 col-xl-4 offset-xl-1">
            <x-guest-layout>
            
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <h1 class="text-dark p-2" style="font-size:30px;">Register Here </h1>
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Phone -->
        <div>
            <x-input-label for="phone" :value="__('phone')" />
            <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <!-- Address -->
        <div>
            <x-input-label for="address" :value="__('address')" />
            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus autocomplete="address" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
            <div class="d-flex w-100 mt-4 align-items-center justify-content-center">
               <x-primary-button class="ms-4 btn-primary bg-primary text-dark border-0 " style="font-size:15px;">
                {{ __('Register') }}
                </x-primary-button>
            </div>
        <div class="flex items-center justify-end mt-4"> Already have account?
            <a class="underline  hover:text-primary text-dark font-weight-bold text-uppercase " href="{{ route('login') }}">
           {{ __('login') }}
            </a>

            
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
            <a href="#!" class="text-white me-4">
                <a href="#" class="fa fa-facebook text-decoration-none"></a>
            </a>
            <a href="#!" class="text-white me-4">
                <a href="#" class="fa fa-twitter text-decoration-none"></a>
            </a>
            <a href="#!" class="text-white me-4">
                <a href="#" class="fa fa-linkedin text-decoration-none"></a>
            </a>
            <a href="#!" class="text-white">
                <a href="#" class="fa fa-google text-decoration-none"></a>
            </a>
          </div>
          <!-- Right -->
        </div>
      </section>
</body>
</html>
