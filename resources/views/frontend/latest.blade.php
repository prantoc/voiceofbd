@extends('layouts.header')

@section('content')



@if($latest)

<section class="tag-page-area pt-3">

    <div class="container">

        <div class="row">

            <div class="col-lg-8">

                <div class="todays-news-title">

                    <h1 class="font-weight-bold py-2 todays-news-title">আজকের খবর</h1>

                </div>

                <nav>

                    <div class="nav nav-tabs topic-tab" id="nav-tab">

                        <a class="nav-item nav-link topic-tab-btn active" data-bs-toggle="tab" data-bs-target="#nav-latest" type="button" role="tab" aria-controls="nav-latest" aria-selected="true"><h3>এই মুহূর্তের সর্বশেষ</h3></a>

                        <a class="nav-item nav-link topic-tab-btn" data-bs-toggle="tab" data-bs-target="#nav-selected" type="button" role="tab" aria-controls="nav-selected" aria-selected="true"><h3>সর্বাধিক পঠিত</h3></a>

                    </div>

                </nav>

                <div class="tab-content" id="nav-tabContent">

                    <div class="tab-pane fade active show" id="nav-latest">

                        <div class="article-box pt-3 more-contents">

                        @foreach($allPosts as $pfso)

                            <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="{{$pfso->title}}" data-href="{{route('single-post', $pfso->slug)}}">

                                <div class="topic-content-text">

                                    <a href="{{route('single-post', $pfso->slug)}}">

                                        {{$pfso->title}}

                                    </a>

                                @php

                                    $englishDate =date('j F Y, h:i a',strtotime($pfso->created_at));



                                    $search_array= array('1','2','3','4','5','6','7','8','9','0','January','February','March','April','May','June','July','August','September','October','November','December','Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','am', 'pm');



                                    $replace_array= array('১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে','জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার','বুধবার','বৃহস্পতিবার','শুক্রবার', 'এএম', 'পিএম' );



                                    // convert all bangle char to English char 

                                    $en_number = str_replace($search_array, $replace_array, $englishDate);   



                                    // remove unwanted char       

                                    $end_date =  preg_replace('/[^A-Za-z0-9:\-]/', ' ', $en_number);

                                @endphp

                                    <time datetime="{{$englishDate}}">{{$en_number}}</time>



                                    <p class=" ">{!! \Illuminate\Support\Str::limit($pfso->body,100,$end='...') !!}</p>

                                </div>

                                <div class="topic-content-img">

                                    <a href="{{route('single-post', $pfso->slug)}}">

                                        <img src="{{ Voyager::image( $pfso->image ) }}" width=330 height=175 alt="{{$pfso->title}}" class="lazyload img-loader">

                                    </a>

                                </div>

                            </div>

                        @endforeach

                        </div>

                    </div>



                    <div class="tab-pane fade" id="nav-selected">

                        <div class="article-box pt-3">

                            @foreach($topPosts as $pfso)

                            <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="{{$pfso->title}}" data-href="{{route('single-post', $pfso->slug)}}">

                                <div class="topic-content-text">

                                    <a href="{{route('single-post', $pfso->slug)}}">

                                        {{$pfso->title}}

                                    </a>

                                @php

                                    $englishDate =date('j F Y, h:i a',strtotime($pfso->created_at));



                                    $search_array= array('1','2','3','4','5','6','7','8','9','0','January','February','March','April','May','June','July','August','September','October','November','December','Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','am', 'pm');



                                    $replace_array= array('১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে','জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার','বুধবার','বৃহস্পতিবার','শুক্রবার', 'এএম', 'পিএম' );



                                    // convert all bangle char to English char 

                                    $en_number = str_replace($search_array, $replace_array, $englishDate);   



                                    // remove unwanted char       

                                    $end_date =  preg_replace('/[^A-Za-z0-9:\-]/', ' ', $en_number);

                                @endphp

                                    <time datetime="{{$englishDate}}">{{$en_number}}</time>



                                    <p class="d-none d-sm-block">{!! \Illuminate\Support\Str::limit($pfso->body,150,$end='...') !!}</p>

                                </div>

                                <div class="topic-content-img">

                                    <a href="{{route('single-post', $pfso->slug)}}">

                                        <img src="{{ Voyager::image( $pfso->image ) }}" width=330 height=175 alt="{{$pfso->title}}" class="lazyload img-loader">

                                    </a>

                                </div>

                            </div>

                        @endforeach

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@else

<section class="tag-page-area pt-3">

    <div class="container">

        <div class="row">

            <div class="col-lg-8">

                <div class="todays-news-title">

                    <h1 class="font-weight-bold py-2 todays-news-title">অনুসন্ধানের ফলাফল</h1>

                </div>

             {{--    <nav>

                    <div class="nav nav-tabs topic-tab" id="nav-tab">

                        <a class="nav-item nav-link topic-tab-btn active" data-bs-toggle="tab" data-bs-target="#nav-latest" type="button" role="tab" aria-controls="nav-latest" aria-selected="true"><h2>এই মুহূর্তের সর্বশেষ</h2></a>

                        <a class="nav-item nav-link topic-tab-btn" data-bs-toggle="tab" data-bs-target="#nav-selected" type="button" role="tab" aria-controls="nav-selected" aria-selected="true"><h2>সর্বাধিক পঠিত</h2></a>

                    </div>

                </nav> --}}

                <div class="tab-content" id="nav-tabContent">

                    <div class="tab-pane fade active show" id="nav-latest">

                        <div class="article-box pt-3 more-contents">
                        @if($allPosts->count())
                        @foreach($allPosts as $pfso)

                            <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="{{$pfso->title}}" data-href="{{route('single-post', $pfso->slug)}}">

                                <div class="topic-content-text">

                                    <a href="{{route('single-post', $pfso->slug)}}">

                                        {{$pfso->title}}

                                    </a>

                                @php

                                    $englishDate =date('j F Y, h:i a',strtotime($pfso->created_at));



                                    $search_array= array('1','2','3','4','5','6','7','8','9','0','January','February','March','April','May','June','July','August','September','October','November','December','Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','am', 'pm');



                                    $replace_array= array('১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে','জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার','বুধবার','বৃহস্পতিবার','শুক্রবার', 'এএম', 'পিএম' );



                                    // convert all bangle char to English char 

                                    $en_number = str_replace($search_array, $replace_array, $englishDate);   



                                    // remove unwanted char       

                                    $end_date =  preg_replace('/[^A-Za-z0-9:\-]/', ' ', $en_number);

                                @endphp

                                    <time datetime="{{$englishDate}}">{{$en_number}}</time>



                                    <p class=" ">{!! \Illuminate\Support\Str::limit($pfso->body,150,$end='...') !!}</p>

                                </div>

                                <div class="topic-content-img">

                                    <a href="{{route('single-post', $pfso->slug)}}">

                                        <img src="{{ Voyager::image( $pfso->image ) }}" width=330 height=175 alt="{{$pfso->title}}" class="lazyload img-loader">

                                    </a>

                                </div>

                            </div>

                        @endforeach
                        @else
                        <span class="btn btn-dark w-md px-5 mt-2 mb-2  d-flex justify-content-center text-white text-blod"><small>কোন খবর পাওয়া যায়নি</small></span>
                        @endif
                        </div>

                    </div>



                  {{--   <div class="tab-pane fade" id="nav-selected">

                        <div class="article-box pt-3">

                            @foreach($topPosts as $pfso)

                            <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="{{$pfso->title}}" data-href="{{route('single-post', $pfso->slug)}}">

                                <div class="topic-content-text">

                                    <a href="{{route('single-post', $pfso->slug)}}">

                                        {{$pfso->title}}

                                    </a>

                                @php

                                    $englishDate =date('j F Y, h:i a',strtotime($pfso->created_at));



                                    $search_array= array('1','2','3','4','5','6','7','8','9','0','January','February','March','April','May','June','July','August','September','October','November','December','Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','am', 'pm');



                                    $replace_array= array('১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে','জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার','বুধবার','বৃহস্পতিবার','শুক্রবার', 'এএম', 'পিএম' );



                                    // convert all bangle char to English char 

                                    $en_number = str_replace($search_array, $replace_array, $englishDate);   



                                    // remove unwanted char       

                                    $end_date =  preg_replace('/[^A-Za-z0-9:\-]/', ' ', $en_number);

                                @endphp

                                    <time datetime="{{$englishDate}}">{{$en_number}}</time>



                                    <p class="d-none d-sm-block">{!! \Illuminate\Support\Str::limit($pfso->body,150,$end='...') !!}</p>

                                </div>

                                <div class="topic-content-img">

                                    <a href="{{route('single-post', $pfso->slug)}}">

                                        <img src="{{ Voyager::image( $pfso->image ) }}" width=330 height=175 alt="{{$pfso->title}}" class="lazyload img-loader">

                                    </a>

                                </div>

                            </div>

                        @endforeach

                        </div>

                    </div> --}}

                </div>

            </div>

        </div>

    </div>

</section>

@endif

@endsection