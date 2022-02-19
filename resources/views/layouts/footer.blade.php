  <!-- Footer -->

    <footer data-nosnippet="" class="d-print-none mt-3" style="background: #072b3c;">

      <div class="footer-top py-3 bg-section-two" style="border-top: 3px solid">

        <div class="container">

          <div class="footer-top-items footer-mv d-flex justify-content-center justify-content-center justify-content-lg-between justify-content-xl-between">

            <div class="footer-logo d-none d-lg-flex">

              <a href="{{route ('home')}}"><img style="max-width: 200px;" src="{{ Voyager::image( Voyager::setting('site.logo')) }}" alt="Dhaka Post"></a>

            </div>

            <div class="editor">

              <p>সম্পাদক: {{setting('site.owner_name')}}</p>

            </div>

          </div>

        </div>

      </div>

      <div class="footer-bottom p3-5 py-2 pb-3" style="background: #072b3c">

        <div class="container text-white">

          <div class="row d-flex align-items-center">

            <div class="col-lg-4 d-flex justify-content-center justify-content-center justify-content-lg-start justify-content-xl-start">

              <div class="footer-link">
                {{menu('footer_menu', 'footer_menu');}}
              </div>
            </div>

            <div class="social col-lg-4 text-center d-flex  justify-content-center justify-content-center justify-content-lg-center justify-content-xl-center  mt-3">

              <div class="d-flex align-items-center social-media-icons">

                <a href="{{ Voyager::setting('social.facebook') }}" aria-label="Facebook" target="_blank" class="p-1" rel="nofollow noopener">

                  <div class="social-icon facebook"><i class="fab fa-facebook-f"></i></div>

                </a>

                <a href="{{ Voyager::setting('social.youtube') }}" aria-label="Youtube" target="_blank" class="p-1" rel="nofollow noopener">

                  <div class="social-icon youtube"><i class="fab fa-youtube"></i></div>

                </a>

                <a href="{{ Voyager::setting('social.twitter') }}" aria-label="Twitter" target="_blank" class="p-1" rel="nofollow noopener">

                  <div class="social-icon twitter"><i class="fab fa-twitter"></i></div>

                </a>

                <a href="{{ Voyager::setting('social.instagram') }}" aria-label="Instagram" target="_blank" class="p-1" rel="nofollow noopener">

                  <div class="social-icon instagram"><i class="fab fa-instagram"></i></div>

                </a>

                <a href="{{ Voyager::setting('social.linkedin') }}" aria-label="Linkedin" target="_blank" class="p-1" rel="nofollow noopener">

                  <div class="social-icon linkedin"><i class="fab fa-linkedin-in"></i></div>

                </a>

                <a href="{{ Voyager::setting('social.podcast') }}" aria-label="Google Podcast" target="_blank" class="p-1" rel="nofollow noopener">

                  <div class="social-icon" style="background: #695296;"><i class="fas fa-podcast"></i></div>

                </a>

              </div>

            </div>

            <div class="contact col-lg-4 text-align-right  d-none d-lg-block d-flex justify-content-end">

              <p> {!! Voyager::setting('site.address') !!}</p>

           {{--    <p class="text-right m-1">

                <a href="tel:{{ Voyager::setting('site.podcast') }}" aria-label="Telephone" class="text-white" target="_blank" rel="nofollow noopener">

                <abbr title="Phone"><i class="fas fa-phone"></i> </abbr>:&nbsp;{{ Voyager::setting('site.podcast') }}<br>

              </a>

            </p> --}}

            <p class="text-right m-1">

              <a href="tel:{{ Voyager::setting('site.phone') }}" aria-label="Mobile" class="text-white" target="_blank" rel="nofollow noopener">

              <abbr title="Mobile"><i class="fas fa-mobile-alt"></i> </abbr>:&nbsp;{{ Voyager::setting('site.phone') }}<br>

            </a>

          </p>

        {{--   <p class="text-right m-1">

            <a href="https://wa.me/880177777777" aria-label="Whatsapp" class="text-white" target="_blank" rel="nofollow noopener">

            <abbr title="WhatsApp"><i class="fab fa-whatsapp"></i> </abbr>:&nbsp;+880177777777<br>

          </a>

        </p> --}}

        <p class="text-right m-1">

          <a href="mailto:{{ Voyager::setting('site.email') }}" aria-label="Email" class="text-white" target="_blank" rel="nofollow noopener">

          <abbr title="Mail"><i class="fas fa-envelope"></i> </abbr>:&nbsp;{{ Voyager::setting('site.email') }}<br>

        </a>

      </p>

    </div>

  </div>

</div>

<div style="border-top: 1px solid #484848;"></div>

<div class="container">

  <div class="row">

    <div class="col-xl-6 mt-3 text-white d-flex justify-content-center justify-content-lg-start justify-content-xl-start" style="font-size: 13px;">

      <span> {{ Voyager::setting('site.copyright') }}</span>

    </div>

    <div class="col-xl-6 mt-3 text-white d-flex justify-content-center justify-content-center justify-content-lg-end justify-content-xl-end" style="font-size: 13px;">

      Developed By <a href="https://mybdhost.com" target="_blank" style="margin-left: 3px;"> MybdHost</a>

    </div>

  </div>

</div>

</div>

</footer>