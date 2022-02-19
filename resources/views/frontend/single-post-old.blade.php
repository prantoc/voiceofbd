@extends('layouts.header')
@section('styles')
<style>
  .visuallyhidden{position:absolute;clip:rect(1px,1px,1px,1px)}
.copybutton{border:0;outline:0;cursor:pointer;opacity:1;position:absolute;height:40px;z-index:9;border-radius:24px;}
.button-tooltip-container {
display: flex;
    align-items: center;
    justify-content: center;

}
#custom-tooltip {
    display: none;
    margin-left: 120px;
    padding: 0px 9px;
    background-color: #000000df;
    border-radius: 4px;
    color: #fff;
}
</style>
@endsection
@section('metas')
<meta property="og:url"           content="{{$domain}}" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="{{$singlePost->title}}" />
<meta property="og:description"   content="{!! $singlePost->body !!}" />
<meta property="og:image"         content="{{ Voyager::image( $singlePost->image ) }}" />
<title>{{$singlePost->title}}</title>
@endsection
@section('content')
      <!-- section-1 -->
      <div class="pt-2 pb-2 details">
        <div class="container">
          <div class="news-items">
            <div class="news-item-0 news-page mt-2">
              <div class="row">
                <div class="col-lg-12  d-print">
                  <article class="details-body" lg-uid="lg0">
                    <div class="row mb-3">
                      <div class="col-lg-8">
                        <ol class="d-flex" style="padding: 0; margin-bottom: 8px;">
                          <li class="breadcrumb-item">
                            <a href="{{route('home')}}">প্রচ্ছদ</a>
                          </li>
                          <li class="breadcrumb-item" aria-current="page"><a href="

                          @foreach($menus as $menu_item) 
                            {{ $menu_item->link()}}
                          @endforeach
                            ">{{$cat->name}}</a>
                        </li>
                        @if(!empty($singlePost->location_id))
                          <li class="breadcrumb-item" aria-current="page"><a href="{{route ('location', $singlePost->location_id)}}">{{$singlePost->location->name}}</a>
                        </li>
                        @endif
                      </ol>
                      <h1 class="news-title">{{$singlePost->title}}</h1>
                      <div class="d-flex align-items-center my-2 py-2">
                        <div style="width: 38px;height: 38px;border-radius: 19px;">
                          <img class="author-image" style="width: 100%; margin: -7px -23px 47px -8px;" src=" {{ Voyager::image($singlePost->authorId->avatar) }}" alt="Dhaka Post Desk">
                        </div>
                        <div class="d-flex justify-content-start flex-column ml-2">
                          <div class="d-flex align-items-center author-reporting-area">
                            <div class="d-flex align-items-center">
                              <p class="author" style="margin-bottom: 5px;">

                              {{$singlePost->authorId->name}}
                              @if(!empty($singlePost->location_id))
                              ,<i class="fas fa-map-marker-alt"></i> {{$singlePost->location->name}}
                              @endif
                            </p>
                            </div>
                          </div>
                          <p class="news-time" style="color: rgba(0,0,0,.7);">


                    @php
                        $englishDate =date('j F Y, h:i a',strtotime($singlePost->created_at));

                        $search_array= array('1','2','3','4','5','6','7','8','9','0','January','February','March','April','May','June','July','August','September','October','November','December','Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','am', 'pm');

                        $replace_array= array('১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে','জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার','বুধবার','বৃহস্পতিবার','শুক্রবার', 'এএম', 'পিএম' );

                        // convert all bangle char to English char 
                        $en_number = str_replace($search_array, $replace_array, $englishDate);   

                        // remove unwanted char       
                        $end_date =  preg_replace('/[^A-Za-z0-9:\-]/', ' ', $en_number);
                    @endphp
                          {{$en_number}}
                        </p>
                        </div>
                      </div>
                      <div class="mb-0 share-top mt-2 d-flex align-items-center d-print-none justify-content-between" style="overflow: auto">
                        <div class="mb-0 d-flex align-items-center">
                      
                          <div class="mb-0 py-3 d-flex align-items-center justify-content-center social_list social_list_0 social-media-icons social-links" style="pointer-events: auto;">
                            <iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fvoiceofbd24.net%2F&layout=button_count&size=large&width=88&height=28&appId" width="88" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>

                            @foreach($socialshare as $key=> $value)
                            <a href="{{$value}}" class="pl-2 social-button" target="_blank">
                              <div class="mb-0 social-icon share-social-icon twitter">
                                @if($key == 'facebook')
                                <i class="fab fa-facebook-f"></i>
                                @elseif($key == 'twitter')
                                <i class="fab fa-twitter"></i>
                                @else
                                <i class="fab fa-whatsapp"></i>
                                @endif
                              </div>
                            </a>
                            @endforeach
                            <a class="pl-2" onclick="printDiv('printMe')">
                              <div class="mb-0 social-icon print share-social-icon"><i class="fa fa-print"></i></div>
                            </a>
                              <!-- Trigger -->
                              <div class="button-tooltip-container  share-social-icon pl-2">
                                  <button title="copy share link" type="submit" value="copy" onclick="copy();" class=copybutton><i class="fa fa-clone text-center" aria-hidden="true"></i></button>
                                  <span id="custom-tooltip">copied!</span>
                              </div>
                              <textarea class=visuallyhidden id="box"></textarea>
                          </div>
                        </div>
                        <div class="mb-0 d-flex align-items-center fs-mapper fs-mapper-0" style="pointer-events: auto;">
                          {{-- <button type="button" class="btn  social-icon share-social-icon fsi fsi-0">
                          ফ+
                          </button>
                          <button type="button" class="btn  social-icon share-social-icon fsd fsd-0">
                          ফ-
                          </button> --}}
                        </div>
                      </div>
                      <hr class="fix-padding-0">
                    </div>
                    <div class="col-lg-4 d-lg-flex justify-content-end fix-order-1 d-none">
                      <div id="div-gpt-ad-1620297441942-0" style="max-width: 100%; width: 300px; height: 250px;">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                      <div class="news-image">
                        {{-- @if($singlePost->image) --}}
                        <img src="{{ Voyager::image( $singlePost->image ) }}" alt="{{$singlePost->title}}" class="lg-image">
                        {{-- @else
                        <img src="{{ Voyager::image( Voyager::setting('site.logo')) }}" class="lg-image"></img>
                        @endif --}}
                      </div>
                      <div class="news-details">
                        <p>
                          {!! $singlePost->body !!}
                        </p>
                      </div>
                      <div class="tags d-flex align-items-center flex-wrap d-print-none">
                        <div class="view-more-round" style="margin: 5px;"><a style="color: #000;" href="{{route ('tag', $singlePost->category->slug)}}">{{$singlePost->category->name}}</a>
                      </div>
                </div>
                
              </div>
            </div>
          </article>
        </div>
        <div class="row d-print-none m-mx-2">
          <div class="col-lg-12">
            <div class="row">
              <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                <div class="py-3 m-py-2">
                  <div class="category-header d-flex justify-content-between align-items-center mt-2">
                    <div class="heading recent-heading py-3">
                      <p class="title">আরও পড়ুন</p>
                    </div>
                  </div>
                  <div class="more-items pt-2">
                    <div class="row d-flex justify-content-center">
                      @foreach($morePosts as $fbp)
                      <div class="col-sm-4 box-news">
                        <a href="{{route('single-post', $fbp->slug)}}" class="news-item news-item-box">
                          @if($fbp->image )
                          <img src="{{ Voyager::image( $fbp->image ) }}" data-src="#" alt="{{$fbp->title}}" class="img-loader" height="175">
                          @else
                          <img src="{{ Voyager::image( Voyager::setting('site.logo')) }}" class="img-loader" height="175"></img>
                          @endif
                          <h2 class="title">{{$fbp->title}}</h2>
                        </a>
                      </div>
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>


{{-- print-post-element --}}

<div class="container" id="printme">
  <div class="news-items">
    <div class="news-item-0 news-page mt-2">
      <div class="row">
        <div class="col-lg-12  d-print">
          <article class="details-body" lg-uid="lg0">
            <div class="row mb-3">
              <div class="col-lg-8">
                  <div class="container pt-2 pb-lg-3 px-lg-5">
                    <div class="row">
                      <div class="col-lg-4 col-md-12 col-sm-12 d-flex justify-content-lg-start justify-content-xl-start justify-content-center">
                       <img class="img-fluid" height="75" width="300" src="{{ Voyager::image( Voyager::setting('site.logo')) }}" alt="">
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
                    </div>
                  </div>
                  <ol class="d-flex" id="no-printme" style="padding: 0; margin-bottom: 8px;">
                  <li class="breadcrumb-item">
                    প্রচ্ছদ
                  </li>
                  <li class="breadcrumb-item" aria-current="page">{{$cat->name}}
                </li>
                @if(!empty($singlePost->location_id))
                  <li class="breadcrumb-item" aria-current="page"><a href="{{route ('location', $singlePost->location_id)}}">{{$singlePost->location->name}}</a>
                </li>
                @endif
              </ol>
              <h1 class="news-title">{{$singlePost->title}}</h1>
              <div class="d-flex align-items-center my-2 py-2">
                <div style="width: 38px;height: 38px;border-radius: 19px;">
                  <img class="author-image" style="width: 100%; margin: -7px -23px 47px -8px;" src=" {{ Voyager::image($singlePost->authorId->avatar) }}" alt="Dhaka Post Desk">
                </div>
                <div class="d-flex justify-content-start flex-column ml-2">
                  <div class="d-flex align-items-center author-reporting-area">
                    <div class="d-flex align-items-center">
                      <p class="author" style="margin-bottom: 5px;">

                      {{$singlePost->authorId->name}}
                      @if(!empty($singlePost->location_id))
                      ,<i class="fas fa-map-marker-alt"></i> {{$singlePost->location->name}}
                      @endif
                    </p>
                    </div>
                  </div>
                  <p class="news-time" style="color: rgba(0,0,0,.7);">


            @php
                $englishDate =date('j F Y, h:i a',strtotime($singlePost->created_at));

                $search_array= array('1','2','3','4','5','6','7','8','9','0','January','February','March','April','May','June','July','August','September','October','November','December','Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','am', 'pm');

                $replace_array= array('১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে','জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার','বুধবার','বৃহস্পতিবার','শুক্রবার', 'এএম', 'পিএম' );

                // convert all bangle char to English char 
                $en_number = str_replace($search_array, $replace_array, $englishDate);   

                // remove unwanted char       
                $end_date =  preg_replace('/[^A-Za-z0-9:\-]/', ' ', $en_number);
            @endphp
                  {{$en_number}}
                </p>
                </div>
              </div>
              <div class="mb-0 share-top mt-2 d-flex align-items-center d-print-none justify-content-between" style="overflow: auto">
                <div class="mb-0 d-flex align-items-center">
              
                  <div class="mb-0 py-3 d-flex align-items-center justify-content-center social_list social_list_0 social-media-icons social-links" style="pointer-events: auto;">

                    @foreach($socialshare as $key=> $value)
                    <a href="{{$value}}" class="pl-2 social-button" target="_blank">
                      <div class="mb-0 social-icon share-social-icon twitter">
                        @if($key == 'facebook')
                        <i class="fab fa-facebook-f"></i>
                        @elseif($key == 'twitter')
                        <i class="fab fa-twitter"></i>
                        @else
                        <i class="fab fa-whatsapp"></i>
                        @endif
                      </div>
                    </a>
                    @endforeach
                   {{--  <a class="pl-2" onclick="window.print()">
                      <div class="mb-0 social-icon print share-social-icon"><i class="fa fa-print"></i></div>
                    </a> --}}
                    <button onclick="printDiv('printMe')">Print only the above div</button>
                      <!-- Trigger -->
                      <div class="button-tooltip-container  share-social-icon pl-2">
                          <button title="copy share link" type="submit" value="copy" onclick="copy();" class=copybutton><i class="fa fa-clone text-center" aria-hidden="true"></i></button>
                          <span id="custom-tooltip">copied!</sapn>
                      </div>
                      <textarea class=visuallyhidden id="box"></textarea>
                  </div>
                </div>
                <div class="mb-0 d-flex align-items-center fs-mapper fs-mapper-0" style="pointer-events: auto;">
                  {{-- <button type="button" class="btn  social-icon share-social-icon fsi fsi-0">
                  ফ+
                  </button>
                  <button type="button" class="btn  social-icon share-social-icon fsd fsd-0">
                  ফ-
                  </button> --}}
                </div>
              </div>
              <hr class="fix-padding-0">
            </div>
            <div class="col-lg-4 d-lg-flex justify-content-end fix-order-1 d-none">
              <div id="div-gpt-ad-1620297441942-0" style="max-width: 100%; width: 300px; height: 250px;">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
              <div class="news-image">
                {{-- @if($singlePost->image) --}}
                <img src="{{ Voyager::image( $singlePost->image ) }}" alt="{{$singlePost->title}}" class="lg-image">
                {{-- @else
                <img src="{{ Voyager::image( Voyager::setting('site.logo')) }}" class="lg-image"></img>
                @endif --}}
              </div>
              <div class="news-details">
                <p>
                  {!! $singlePost->body !!}
                </p>
              </div>
              <div class="tags d-flex align-items-center flex-wrap d-print-none">
                <div class="view-more-round" style="margin: 5px;"><a style="color: #000;" href="{{route ('tag', $singlePost->category->slug)}}">{{$singlePost->category->name}}</a>
              </div>
        </div>
        
      </div>
    </div>
  </article>
</div>

@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.8/dist/clipboard.min.js"></script>
<script>
  // var clipboard = new ClipboardJS('.btn');
function copy(){
    var Url = document.getElementById("box");
    Url.value = window.location.href;
    Url.focus();
    Url.select();
    document.getElementById("custom-tooltip").style.display = "inline";
    document.execCommand("copy");
    setTimeout( function() {
        document.getElementById("custom-tooltip").style.display = "none";
    }, 1000);

};

</script>
  <script>
    function printDiv(divName){
      var printContents = document.getElementById("printme").innerHTML;
      var originalContents = document.body.innerHTML;

      document.body.innerHTML = printContents;

      window.print();

      document.body.innerHTML = originalContents;

    }
  </script>
@endsection
