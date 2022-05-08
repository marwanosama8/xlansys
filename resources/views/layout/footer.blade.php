    <!-- start footer -->
    <footer>
        <div class="container">
          <div class="footer-all">
            <div class="img-footer">
              <a href="./index.html">
                <img src="{{asset('assets/images/img-nav-Xlansys.png')}}" alt="" />
              </a>
            </div>
            <div class="contact-footer">
                <h3>{{ trans('footer.contact-us') }}</h3>
                <a
                  target="_blank"
                  href="https://www.google.com/maps/place/Sahara+Mall/@24.7400274,46.6800143,17z/data=!3m1!4b1!4m5!3m4!1s0x3e2f02badd078e53:0x488386f29c05d366!8m2!3d24.7400274!4d46.682203"
                >
                  <i class="fa-solid fa-location-dot"></i> {{ trans('footer.sahra') }}</a
                >
                <a href="tel:+0580125943">
                  <i class="fa-solid fa-phone"></i> {{ trans('footer.phone') }}
                </a>
                <a href=" https://wa.me/0581805441" target="_blank">
                  <i class="fa-brands fa-whatsapp"></i> {{ trans('footer.whats') }}
                </a>
                <a href="mailto:info@janagate.com">
                  <i class="fa-regular fa-envelope"></i> {{ trans('footer.email') }}
                </a>
              </div>
            <div class="about-footer">
              <h3>{{ trans('footer.about') }}</h3>
              <a href="#">{{ trans('footer.terms') }}</a>
              <a href="#">{{ trans('footer.policy') }}</a>
              <a href="#">{{ trans('footer.testimonials') }}</a>
              <a href="{{route('blog')}}">{{ trans('footer.blogs') }}</a>
            </div>
            <div class="FOLLOW-footer">
              <h3>{{ trans('footer.follow') }}</h3>
              <div class="logo-foot">
                <a href="https://www.instagram.com"
                  ><i class="fa-brands fa-instagram"></i
                ></a>
                <a href="https://www.facebook.com"
                  ><i class="fa-brands fa-facebook-f"></i
                ></a>
                <a href="https://www.youtube.com"
                  ><i class="fa-brands fa-youtube"></i
                ></a>
                <a href="https://www.linkedin.com"
                  ><i class="fa-brands fa-linkedin-in"></i
                ></a>
              </div>
            </div>
            <div class="lang-footer navbar">
              <div class="dropdown">
                <a
                  href="#"
                  class="nav-link dropdown-toggle"
                  type="button"
                  id="dropdownMenuButton1"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
          {{ LaravelLocalization::getCurrentLocaleNative() }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    @if (LaravelLocalization::getCurrentLocale() == 'ar')
                    <li><a class="dropdown-item" href="{{ LaravelLocalization::getLocalizedURL('en') }}">English</a></li>

                    @elseif (LaravelLocalization::getCurrentLocale() == 'en')

                    <li><a class="dropdown-item" href="{{ LaravelLocalization::getLocalizedURL('ar') }}">العربية</a></li>
                    @endif
                </ul>
              </div>
            </div>
          </div>
        </div>
        <hr />
        <div class="under-footer">
          <p>{{ trans('footer.copy') }} <i class="fa-regular fa-copyright"></i> 2022</p>
        </div>
      </footer>
      <!-- end footer -->
