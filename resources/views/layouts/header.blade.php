<!doctype html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8">
    @yield('metas')
    <title>{{setting('site.title')}} | {{setting('site.description')}}</title>
    <link rel="icon" type="image/png" href="{{ Voyager::image( Voyager::setting('site.favicon')) }}">

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
{{--     <meta name="description" content="">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content=""> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">
    <meta name="theme-color" content="#fafafa">
    @yield('styles')
    
  </head>
  <body>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v12.0" nonce="6usukPbF"></script>

    <!-- header -->
    <div class="container pt-2 pb-lg-3 px-lg-5">
      <div class="row">
        <div class="col-lg-4 col-md-12 col-sm-12 d-flex justify-content-lg-start justify-content-xl-start justify-content-center">
          <a href="{{route ('home')}}"><img class="img-fluid" height="75" width="300" src="{{ Voyager::image( Voyager::setting('site.logo')) }}" alt=""></a>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 pt-4   d-flex justify-content-center">
          <span>
            <i class="fas fa-map-marker-alt"></i> <span>ঢাকা</span>
          </span>
          @php
          $currentDate = date("l, j F, Y");
          $engDATE = array('1','2','3','4','5','6','7','8','9','0','January','February','March','April',
          'May','June','July','August','September','October','November','December','Saturday','Sunday',
          'Monday','Tuesday','Wednesday','Thursday','Friday');
          $bangDATE = array('১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে',
          'জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার','
          বুধবার','বৃহস্পতিবার','শুক্রবার'
          );
          $convertedDATE = str_replace($engDATE, $bangDATE, $currentDate);
          @endphp
          <span class="ms-2">
            <i class="far fa-calendar"></i><span> {{$convertedDATE}}</span>
          </span>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 d-flex justify-content-lg-end justify-content-xl-end justify-content-center justify-content-center">
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
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-nav px-lg-4 sticky-top shadow-sm">
      <div class="container bg-nav">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
             {{(menu('main_menu','my_menu'))}}
            <li class="nav-item d-lg-block d-xl-block d-none">
              <button class="navbar-toggler collapsed nav-link d-flex align-items-center" aria-expanded="false" type="button" data-toggle="collapse" data-target="#nav-items-2">
              <div class="button-bars">
                <i style="font-size: 20px !important;" class="fas fa-bars"></i>
              </div>
              <span class="button-label">অন্যান্য</span>
              </button>
              <div class="dropdown-menu w-100 top-auto shadow border-0 rounded-0 nav-collapse collapse m-0" id="nav-items-2">
                <div class="container">
                  <div class="row w-100 csDrpdwn">
                    {{menu('sidebar_menu', 'my_sidebar_menu');}}
                  </div>
                </div>
              </div>
            </li>
            
            {{menu('main_menu', 'my_mobile_menu');}}
            {{menu('sidebar_menu', 'my_mobile_menu');}}
          </ul>
        </div>
        <div id="myOverlay" class="overlay">
          <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
          <div class="overlay-content">
            <form action="{{ route('search') }}" method="GET">
              <input type="text" placeholder="Search.." name="search" required>
              <button type="submit"><i class="fa fa-search"></i></button>
            </form>
          </div>
        </div>
        
        <i class="fas fa-search top-search openBtn mb-lg-0 mb-xl-0 mb-2" onclick="openSearch()"></i>
      </div>
    </nav>
    <!-- mainArea -->
    <main role="main">
      @yield('content')
      
    </main>
    @include('layouts.footer')
    <script src="{{ asset('assets/js/vendor/modernizr-3.11.2.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins.js')}}"></script>
    <script src="{{ asset('assets/js/main.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    @yield('scripts')


    <script src="{{ asset('js/share.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker.js') }}"></script>
    <script>
    function openSearch() {
    document.getElementById("myOverlay").style.display = "block";
    }
    function closeSearch() {
    document.getElementById("myOverlay").style.display = "none";
    }
    </script>
    <script>
    
    $(function () {
    $(".box-news").slice(0, 16).show();
    $("#loadMore").on('click', function (e) {
    e.preventDefault();
    $(".box-news:hidden").slice(0, 16).slideDown();
    if ($(".box-news:hidden").length == 0) {
    $("#load").fadeOut('slow');
    }
    // $('html,body').animate({
    //     scrollTop: $(this).offset().top
    // }, 1000);
    });
    });
    </script>
     <script type="text/javascript">
$(document).ready(function () {
    $('#division').on('change', function () {
    let id = $(this).val();
    $('#upazila').empty();
    $('#upazila').append(`<option value="0" disabled selected>Processing...</option>`);
    $.ajax({
    type: 'GET',
    url: 'subcat/' + id,
    success: function (response) {
    var response = JSON.parse(response);
    console.log(response);   
    $('#upazila').empty();
    $('#upazila').append(`<option value="0" disabled selected>উপজেলা</option>`);
    response.forEach(element => {
        $('#upazila').append(`<option value="${element['id']}">${element['name']}</option>`);
        });
      }
    });
  });
});
</script>

  </body>
</html>