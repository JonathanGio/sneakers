<!doctype html>
<html lang="{{ app()->getLocale() }}">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="Introducing Lollipop, a sweet new take on Android.">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>@yield('title', 'Sneaker Ecommerce')</title>
      <!-- Page styles -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">                
   </head>
   <body>
    <div id="app">
      <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
         {{-- Nav Up menu --}}
         @include('navs.up')
         {{-- Nav Left menu --}}
         @include('navs.left')

         <div class="android-content mdl-layout__content">
            <a name="top"></a>
            
            @yield('content')

            <footer class="android-footer mdl-mega-footer">
               <div class="mdl-mega-footer--top-section">
                  <div class="mdl-mega-footer--left-section">
                     <button class="mdl-mega-footer--social-btn"></button>
                     &nbsp;
                     <button class="mdl-mega-footer--social-btn"></button>
                     &nbsp;
                     <button class="mdl-mega-footer--social-btn"></button>
                  </div>
                  <div class="mdl-mega-footer--right-section">
                     <a class="mdl-typography--font-light" href="#top">
                     Back to Top
                     <i class="material-icons">expand_less</i>
                     </a>
                  </div>
               </div>
               <div class="mdl-mega-footer--middle-section">
                  <p class="mdl-typography--font-light">Satellite imagery: © 2014 Astrium, DigitalGlobe</p>
                  <p class="mdl-typography--font-light">Some features and devices may not be available in all areas</p>
               </div>
               <div class="mdl-mega-footer--bottom-section">
                  <a class="android-link android-link-menu mdl-typography--font-light" id="version-dropdown">
                  Versions
                  <i class="material-icons">arrow_drop_up</i>
                  </a>
                  <ul class="mdl-menu mdl-js-menu mdl-menu--top-left mdl-js-ripple-effect" for="version-dropdown">
                     <li class="mdl-menu__item">5.0 Lollipop</li>
                     <li class="mdl-menu__item">4.4 KitKat</li>
                     <li class="mdl-menu__item">4.3 Jelly Bean</li>
                     <li class="mdl-menu__item">Android History</li>
                  </ul>
                  <a class="android-link android-link-menu mdl-typography--font-light" id="developers-dropdown">
                  For Developers
                  <i class="material-icons">arrow_drop_up</i>
                  </a>
                  <ul class="mdl-menu mdl-js-menu mdl-menu--top-left mdl-js-ripple-effect" for="developers-dropdown">
                     <li class="mdl-menu__item">App developer resources</li>
                     <li class="mdl-menu__item">Android Open Source Project</li>
                     <li class="mdl-menu__item">Android SDK</li>
                     <li class="mdl-menu__item">Android for Work</li>
                  </ul>
                  <a class="android-link mdl-typography--font-light" href="">Blog</a>
                  <a class="android-link mdl-typography--font-light" href="">Privacy Policy</a>
               </div>
            </footer>
         </div>
      </div>
      
    </div>
      <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
      <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
      {{-- LIBRARYSES --}}
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   </body>
</html>