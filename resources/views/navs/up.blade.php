         <div class="android-header mdl-layout__header mdl-layout__header--waterfall">
            <div class="mdl-layout__header-row">
               <span class="android-title mdl-layout-title">
               <img class="android-logo-image" src="https://raw.githubusercontent.com/google/material-design-lite/mdl-1.x/templates/android-dot-com/images/android-logo.png">
               </span>
               <!-- Add spacer, to align navigation to the right in desktop -->
               {{-- Carrito de Compras --}}
               <div class="material-icons mdl-badge mdl-badge--overlap" data-badge="{{ $productsCount }}">shopping_cart</div>               
               {{-- Fin con carrito de compras --}}
               <div class="android-header-spacer mdl-layout-spacer"></div>
               <div class="android-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">
                  <label class="mdl-button mdl-js-button mdl-button--icon" for="search-field">
                  <i class="material-icons">search</i>
                  </label>
                  <div class="mdl-textfield__expandable-holder">
                     <input class="mdl-textfield__input" type="text" id="search-field">
                  </div>
               </div>
               <!-- Navigation -->
               <div class="android-navigation-container">
                  <nav class="android-navigation mdl-navigation">
                     <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Phones</a>
                     <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Tablets</a>
                     <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Wear</a>
                     <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">TV</a>
                     <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Auto</a>
                     <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">One</a>
                     <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Play</a>
                  </nav>
               </div>
               <span class="android-mobile-title mdl-layout-title">
               <img class="android-logo-image" src="https://raw.githubusercontent.com/google/material-design-lite/mdl-1.x/templates/android-dot-com/images/android-logo.png">
               </span>
               <button class="android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" id="more-button">
               <i class="material-icons">more_vert</i>
               </button>
               @if (Route::has('login'))
               <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect" for="more-button">               
                  @auth                  
                  <li class="mdl-menu__item"><a href="{{ url('/home') }}">Home</a></li>
                  @else
                  <li class="mdl-menu__item"><a href="{{ route('login') }}">Login</a></li>
                  <li class="mdl-menu__item"><a href="{{ route('register') }}">Register</a></li>                                 
                  @endauth               
               </ul>
               @endif                  
            </div>
         </div>