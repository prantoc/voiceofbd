@extends('layouts.header')
@section('content')
      <!-- section-1 -->
      <section class="tag-page-area pt-3">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <ol class="d-flex" style="padding: 0; margin-bottom: 8px;">
                <li class="breadcrumb-item">
                  <a href="/">প্রচ্ছদ</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page"><a href="#">{{$tagName}}</a>
              </li>
            </ol>
          </div>
          <div class="col-lg-8">
            <div class="topic-title w-100">
              <i class="fa fa-tag"></i>
              <h1>{{$tagName}}</h1>
            </div>
            <div class="topic-text topic-links w-100">
              <div class="topic-text-con" id="topic-text-con">
                <p>{{$tagDesc}}</p>
              </div>
            </div>
            <div class="my-2 mb-0 share-top d-flex align-items-center d-print-none justify-content-between" style="overflow: auto">
              <div class="mb-0 d-flex align-items-center">
                <div class="mb-0 d-flex flex-column text-align-center border-right pr-2 share-counter share-counter-pg0">
                </div>
                <div class="mb-0 py-3 d-flex align-items-center justify-content-center social_list social_list_0 social-media-icons" style="pointer-events: auto;">
                    @foreach($socialshare as $key=> $value)
                      <a href="{{$value}}" class="pl-2" target="_blank">
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
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <nav>
              <div class="nav nav-tabs topic-tab" id="nav-tab" role="tablist">
                <button class="nav-link active topic-tab-btn" id="nav-latest-tab" data-bs-toggle="tab" data-bs-target="#nav-latest" type="button" role="tab" aria-controls="nav-latest" aria-selected="true">সর্বশেষ
                খবর</button>
                <button class="nav-link topic-tab-btn" id="nav-selected-tab" data-bs-toggle="tab" data-bs-target="#nav-selected" type="button" role="tab" aria-controls="nav-selected" aria-selected="false">নির্বাচিত
                খবর</button>
              </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-latest" role="tabpanel" aria-labelledby="nav-latest-tab">
                <div class="article-box pt-3 more-contents">
                  @foreach($tagPost as $tpost)
                  <div class="topic-content topic-border-bottom pb-3 mb-3 box-news">
                    <div class="row">
                    <div class="col-8">
                    <div class="topic-content-text">
                      <a href="{{route('single-post', $tpost->slug)}}">
                        {{$tpost->title}}
                      </a>
                      <time datetime="2021-07-13 19:34:34">
                          @php
                        $englishDate =date('j F Y, h:i a',strtotime($tpost->created_at));

                        $search_array= array('1','2','3','4','5','6','7','8','9','0','January','February','March','April','May','June','July','August','September','October','November','December','Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','am', 'pm');

                        $replace_array= array('১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে','জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার','বুধবার','বৃহস্পতিবার','শুক্রবার', 'এএম', 'পিএম' );

                        // convert all bangle char to English char 
                        $en_number = str_replace($search_array, $replace_array, $englishDate);   

                        // remove unwanted char       
                        $end_date =  preg_replace('/[^A-Za-z0-9:\-]/', ' ', $en_number);
                    @endphp
                          {{$en_number}}
                      </time>
                      <p class="d-none d-sm-block">
                        {!! \Illuminate\Support\Str::limit($tpost->body,300,$end='....') !!}
                      </p>
                    </div>
                    </div>
                    <div class="col-4">
                    <div class="topic-content-img">
                      <a href="#">
                        @if($tpost->image)
                          <img src="{{ Voyager::image( $tpost->image ) }}" alt="{{$tpost->title}}" class="lazyload img-loader">
                        @else
                          <img src="{{ Voyager::image( Voyager::setting('site.logo')) }}"  height="175" class="lazyload img-loader"></img>
                        @endif
                      </a>
                    </div>
                    </div>
                    </div>
                  </div>
                @endforeach
                <div class="w-100 text-center py-2">
                  <button type="button" class="btn  px-4 load-more text-white" id="loadMore">আরও দেখুন
                  </button>
                </div>
                </div>
              </div>
              <div class="tab-pane fade" id="nav-selected" role="tabpanel" aria-labelledby="nav-selected-tab">
                <div class="article-box pt-3">
                  <div class="text-center w-100">
                    <h4>কোন খবর পাওয়া যায়নি</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection