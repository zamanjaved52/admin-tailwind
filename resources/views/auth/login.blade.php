{{--
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
--}}
<link href="{{asset('assets1/vendors/css/font-awesome.min.css')}}" rel="stylesheet">
<link href="{{asset('assets1/vendors/css/simple-line-icons.min.css')}}" rel="stylesheet">


<!-- Main styles for this application -->
<link href="{{asset('assets1/css/style.css')}}" rel="stylesheet">

<!-- Styles required by this views -->
<link href="{{asset('assets1/vendors/css/font-awesome.min.css')}}" rel="stylesheet">
<link href="{{asset('assets1/vendors/css/simple-line-icons.min.css')}}" rel="stylesheet">

<!-- Main styles for this application -->
<!-- <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css"> -->
<link href="{{asset('assets1/css/style.css')}}" rel="stylesheet">


<!-- Styles required by this views -->
<!-- <script language="text/javascript" src="https://stage.gnstudios.dev/projects/baf/creditlifeops/assets/vendors/js/jquery.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="{{asset('assets1/js/app.js')}}" language="text/javascript"></script>
<script src="{{asset('assets1/js/digiTILL.js')}}" language="text/javascript"></script>
<script src="{{asset('assets1/vendors/js/popper.min.js')}}" language="text/javascript"></script>


<link href="https://fonts.googleapis.com/css?family=Poppins:400,600,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Recursive:wght@300;400;600;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300;500;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<body class="app flex-row align-items-center" style="font-family: Montserrat; background-image: url(https://stage.gnstudios.dev/projects/baf/creditlifeops/assets/img/blended.png); background-position: center 100%; background-size: cover;">
<div class="container">
    <div class="row justify-content-center mt-3">

        <div class="col-lg-6">

            <div class="card p-2 mt-2 bg-white" style="">

                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="card-body">

                        <div class="text-center">
                            <img src="{{asset('assets1/img/baf-large.png')}}" class="img-fluid w-75">
                        </div>


                        <div class="alert bg-primary border-primary text-white font-weight-normal mt-3">
                            Welcome to The <strong>Credit Life</strong> Application. Please enter your <span class="font-weight-bold">Email Address</span> and <span class="font-weight-bold">Password</span> in the spaces provided below.
                        </div>


                        <div class="mb-3 input-group">
                            <input id="email" type="email"  autocomplete="off"  class="form-control form-control-lg" placeholder="Email Address"  name="email" value="" required autofocus/>
                        </div>

                        <div class="mb-2 input-group">
                            <input  type="password" id="password"  class="form-control form-control-lg" placeholder="Password" name="password" required autocomplete="current-password"  />
                        </div>

                        <div class="form-actions mt-3 mb-3">
                            <button type="submit" class="font-lg btn-primary btn-block btn-lg" name="btnLogin"><i class="fa fa-lock"></i> Login</button>
                        </div>

                        <div class=" small mt-3 mb-1 text-dark text-center">
                            Powered by Genesys Now. A Technology Company.
                            <br /> Release: 1.0 </div>

                    </div>

                </form>

            </div>

        </div>
    </div>

    <!-- Bootstrap and necessary plugins -->
    <!-- <script src="https://stage.gnstudios.dev/projects/baf/creditlifeops/assets/vendors/js/jquery.min.js" language="text/javascript" ></script>
<script src="https://stage.gnstudios.dev/projects/baf/creditlifeops/assets/vendors/js/popper.min.js" language="text/javascript" ></script>
<script src="https://stage.gnstudios.dev/projects/baf/creditlifeops/assets/vendors/js/bootstrap.min.js" language="text/javascript" ></script> -->



</div>

</body>

