 <div class="content-page-container full-reset custom-scroll-containers">
    <nav class="navbar-user-top full-reset">
        <ul class="list-unstyled full-reset">
          @guest

          @else
              <li class="nav-item dropdown">
                  <li style="color:#fff; cursor:default;">
                    <span class="all-tittles">{{ Auth::user()->name }}</span>
                  </li>

                  <li  class="tooltips-general exit-system-button" data-href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();" data-placement="bottom" title="Salir del sistema">
                    <i class="zmdi zmdi-power">
                    </i>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
                  </li>


                  <li class="mobile-menu-button visible-xs" style="float: left !important;">
                      <i class="zmdi zmdi-menu"></i>
                  </li>
              </li>
          @endguest
          <li class="desktop-menu-button hidden-xs" style="float: left !important;">
              <i class="zmdi zmdi-swap"></i>
          </li>
        </ul>
    </nav>

</div
