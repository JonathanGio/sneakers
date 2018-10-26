         <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
            <div class="mdl-layout__header-row">
               <span class="mdl-layout-title">Home</span>
               <div class="mdl-layout-spacer"></div>
               <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                  <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
                  <i class="material-icons">search</i>
                  </label>
                  <div class="mdl-textfield__expandable-holder">
                     <input class="mdl-textfield__input" type="text" id="search">
                     <label class="mdl-textfield__label" for="search">Enter your query...</label>
                  </div>
               </div>
               <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
               <i class="material-icons">more_vert</i>
               </button>
               <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
                @guest
                    <li class="mdl-menu__item"><a href="{{ route('login') }}">Login</a></li>                                                      
                    <li class="mdl-menu__item"><a href="{{ route('register') }}">Register</a></li>                    
                @else
                    <li class="mdl-menu__item"><a href="#">{{ Auth::user()->name }}</a></li>                    
                    <li class="mdl-menu__item"><a 
                        href="{{ route('logout') }}"  
                        onclick="event.preventDefault(); 
                        document.getElementById('logout-form').submit();">
                        Logout
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                    </li>
                @endguest
               </ul>
            </div>
         </header>