
      <!-- start NavBar -->

      <!-- start Nav-mobile -->
      <div class="nav-mobile">
        <button
          class="btn-mobile"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasRight"
          aria-controls="offcanvasRight"
        >
          <i class="fa-solid fa-bars"></i>
        </button>

        <div
          class="offcanvas offcanvas-start"
          tabindex="-1"
          id="offcanvasRight"
          aria-labelledby="offcanvasRightLabel"
        >
          <div class="offcanvas-header">
            <!-- <h5 id="offcanvasRightLabel">Offcanvas right</h5> -->
            <button
              type="button"
              class="btn-close text-reset"
              data-bs-dismiss="offcanvas"
              aria-label="Close"
            ></button>
          </div>
          <div class="offcanvas-body">
            <nav class="navbar justify-content-center">
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="{{route('home')}}">{{ trans('nav.home') }}</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('company')}}">{{ trans('nav.company') }}</a>
                </li>
                <li class="nav-item">
                  <div class="dropdown">
                    <a
                      href="#"
                      class="nav-link dropdown-toggle"
                      type="button"
                      id="dropdownMenuButton1"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      {{ trans('nav.services') }}
                    </a>
                    <ul
                      class="dropdown-menu"
                      aria-labelledby="dropdownMenuButton1"
                    >
                      <li><a class="dropdown-item" href="{{route('erp')}}">{{ trans('nav.ERP') }}</a></li>
                      <li><a class="dropdown-item" href="{{route('crm')}}">{{ trans('nav.CRM') }}</a></li>
                      <li><a class="dropdown-item" href="{{route('hrm')}}">{{ trans('nav.HRM') }}</a></li>
                      <li>
                        <a class="dropdown-item" href="{{route('mobile')}}"
                          >{{ trans('nav.mobile-app') }}</a
                        >
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('blog')}}">{{ trans('nav.blog') }}</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('contact.us')}}">{{ trans('nav.contact-us') }}</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <!-- end Nav-mobile -->

      <!-- start NavBar website -->
      <div class="nav-website">
        <nav class="navbar justify-content-center">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="{{route('home')}}">{{ trans('nav.home') }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('company')}}">{{ trans('nav.company') }}</a>
            </li>
            <li class="nav-item">
              <div class="dropdown">
                <a
                  href="#"
                  class="nav-link dropdown-toggle"
                  type="button"
                  id="dropdownMenuButton1"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  {{ trans('nav.services') }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="{{route('erp')}}">{{ trans('nav.ERP') }}</a></li>
                  <li><a class="dropdown-item" href="{{route('crm')}}">{{ trans('nav.CRM') }}</a></li>
                  <li><a class="dropdown-item" href="{{route('hrm')}}">{{ trans('nav.HRM') }}</a></li>
                  <li>
                    <a class="dropdown-item" href="{{route('mobile')}}"
                      >{{ trans('nav.mobile-app') }}</a
                    >
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('blog')}}">{{ trans('nav.blog') }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('contact.us')}}">{{ trans('nav.contact-us') }}</a>
            </li>
          </ul>
          <div class="lang-nav">
            <a href="{{ LaravelLocalization::getLocalizedURL('en') }}"> ENGLISH </a>
            <span>|</span>
            <a href="{{ LaravelLocalization::getLocalizedURL('ar') }}"> العربية </a>
          </div>
          {{-- @foreach ( LaravelLocalization::getLocalesOrder()   as $lang => $value)
          <h1>{{ $value }}</h1>
          @endforeach --}}

        </nav>
      </div>
      <!-- end NavBar website -->
      <!-- end NavBar -->
