<!DOCTYPE html>
<html lang="en" dir="ltr" class="light">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <title>Dashcode - HTML Template</title>
  <link rel="icon" type="image/png" href="assets/images/logo/favicon.svg">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/rt-plugins.css">
  <link href="https://unpkg.com/aos@2.3.0/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="">
  <link rel="stylesheet" href="admin/assets/css/app.css">
  <!-- START : Theme Config js-->
  <script src="admin/assets/js/settings.js" sync></script>
  <!-- END : Theme Config js-->
</head>

<body class=" font-inter skin-default">
  <!-- [if IE]> <p class="browserupgrade">
            You are using an <strong>outdated</strong> browser. Please
            <a href="https://browsehappy.com/">upgrade your browser</a> to improve
            your experience and security.
        </p> <![endif] -->

  <div class="loginwrapper">
    <div class="lg-inner-column">
      <div class="left-column relative z-[1]">
        <div class="max-w-[520px] pt-20 ltr:pl-20 rtl:pr-20">
          <a href="index.html">
            <img src="admin/assets/images/logo/logo.svg" alt="" class="mb-10 dark_logo">
            <img src="admin/assets/images/logo/logo-white.svg" alt="" class="mb-10 white_logo">
          </a>
          <h4>
            Unlock your Project
            <span class="text-slate-800 dark:text-slate-400 font-bold">
                            performance
                        </span>
          </h4>
        </div>
        <div class="absolute left-0 2xl:bottom-[-160px] bottom-[-130px] h-full w-full z-[-1]">
          <img src="admin/assets/images/auth/ils1.svg" alt="" class=" h-full w-full object-contain">
        </div>
      </div>
      <div class="right-column  relative">
        <div class="inner-content h-full flex flex-col bg-white dark:bg-slate-800">
          <div class="auth-box h-full flex flex-col justify-center">
            <div class="mobile-logo text-center mb-6 lg:hidden block">
              <a href="index.html">
                <img src="admin/assets/images/logo/logo.svg" alt="" class="mb-10 dark_logo">
                <img src="admin/assets/images/logo/logo-white.svg" alt="" class="mb-10 white_logo">
              </a>
            </div>
            <div class="text-center 2xl:mb-10 mb-4">
              <h4 class="font-medium">Sign in</h4>
              <div class="text-slate-500 text-base">
                Sign in to your account to start using Dashcode
              </div>
            </div>


           <!-- BEGIN: Login Form -->
<form class="form-horizontal" method="POST" action="{{ route('login') }}" novalidate>
    @csrf
    <div class="fromGroup">
        <label class="block capitalize form-label">Email</label>
        <div class="relative ">
            <input type="email" name="email" class="form-control py-2" placeholder="Enter your email" value="{{ old('email') }}">
        </div>
        @error('email')
            <span class="text-red-600 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <div class="fromGroup">
        <label class="block capitalize form-label">Password</label>
        <div class="relative ">
            <input type="password" name="password" class="form-control py-2" placeholder="Enter your password">
        </div>
        @error('password')
            <span class="text-red-600 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <div class="flex justify-between">
        <label class="flex items-center cursor-pointer">
            <input type="checkbox" class="hiddens" name="remember" {{ old('remember') ? 'checked' : '' }}>
            <span class="text-slate-500 dark:text-slate-400 text-sm leading-6 capitalize"> &nbsp Keep me signed in</span>
        </label>
        <a class="text-sm text-slate-800 dark:text-slate-400 leading-6 font-medium" href="{{ route('password.request') }}">Forgot Password?</a>
    </div>
    <button type="submit" class="btn btn-dark block w-full text-center">Sign in</button>
</form>
<!-- END: Login Form -->





            <div class="relative border-b-[#9AA2AF] border-opacity-[16%] border-b pt-6">
              <div class="absolute inline-block bg-white dark:bg-slate-800 dark:text-slate-400 left-1/2 top-1/2 transform -translate-x-1/2
                                    px-4 min-w-max text-sm text-slate-500 font-normal">
                Or continue with
              </div>
            </div>
            <div class="max-w-[242px] mx-auto mt-8 w-full">

              <!-- BEGIN: Social Log in Area -->
              <ul class="flex">
                <li class="flex-1">
                  <a href="#" class="inline-flex h-10 w-10 bg-[#1C9CEB] text-white text-2xl flex-col items-center justify-center rounded-full">
                    <img src="admin/assets/images/icon/tw.svg" alt="">
                  </a>
                </li>
                <li class="flex-1">
                  <a href="#" class="inline-flex h-10 w-10 bg-[#395599] text-white text-2xl flex-col items-center justify-center rounded-full">
                    <img src="admin/assets/images/icon/fb.svg" alt="">
                  </a>
                </li>
                <li class="flex-1">
                  <a href="#" class="inline-flex h-10 w-10 bg-[#0A63BC] text-white text-2xl flex-col items-center justify-center rounded-full">
                    <img src="admin/assets/images/icon/in.svg" alt="">
                  </a>
                </li>
                <li class="flex-1">
                  <a href="#" class="inline-flex h-10 w-10 bg-[#EA4335] text-white text-2xl flex-col items-center justify-center rounded-full">
                    <img src="admin/assets/images/icon/gp.svg" alt="">
                  </a>
                </li>
              </ul>
              <!-- END: Social Log In Area -->
            </div>

          </div>
          <div class="auth-footer text-center">
            Copyright 2021, Dashcode All Rights Reserved.
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- scripts -->
  <script src="admin/assets/js/jquery-3.6.0.min.js"></script>
  <script src="admin/assets/js/rt-plugins.js"></script>
  <script src="admin/assets/js/app.js"></script>
</body>
</html>