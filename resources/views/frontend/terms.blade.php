@extends('layouts.header')
@section('styles')
<style>
   .breadcrumb {
       display: -ms-flexbox;
       display: flex;
       -ms-flex-wrap: wrap;
       flex-wrap: wrap;
       padding: 0.75rem 1rem;
       margin-bottom: 1rem;
       list-style: none;
       background-color: #e9ecef;
       border-radius: 0.25rem;
   }
</style>
@endsection
@section('content')
@if($archive)
<main role="main">
   <main role="main" class="pt-2 pb-2 category">
      <div class="container">
         <div aria-label="breadcrumb">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="/">প্রচ্ছদ</a></li>
               <li class="breadcrumb-item active" aria-current="page">আর্কাইভ</li>
            </ol>
         </div>
         <div class="archive-header">
            <div class="d-flex align-items-center justify-content-between">
               <h1 class="font-weight-bold my-3">আর্কাইভ</h1>
            </div>
         </div>
              <!--  ==================================VALIDATION ERRORS==================================  -->
      @if($errors->any())
      @foreach ($errors->all() as $error)
      <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {!!  $error !!}
      </div>
      @endforeach
      @endif
      <!--  ==================================SESSION MESSAGES==================================  -->
         <form action="{{route('archive')}}" method="GET">
            <div class="box-white">
               <div class="row">
                  <div class="col-sm-10">
                     <div class="row">
                      <div class="col-sm-3 col-6">
                           <div class="form-group">
                                <input name="from" type="text"  class="form-control form-search-select start-date" autocomplete="off" placeholder="তারিখ থেকে" value="{{ $from ? $from : '' }}">
                           </div>
                        </div>
                        <div class="col-sm-3 col-6">
                           <div class="form-group">
                                <input name="to" type="text" class="form-control form-search-select end-date" autocomplete="off"  placeholder="তারিখ পর্যন্ত" value="{{ $to ? $to : '' }}">
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <select class="form-select form-search-select" name="category" id="category">
                                 <option value="">ক্যাটাগরি</option>
                                 @foreach($categories as $cat)
                                 <option value="{{$cat->id}}" {{ $category ? 'selected' : '' }}>{{$cat->name}}</option>
                                 @endforeach
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-3 col-4">
                           <div class="form-group">
                                <select class="form-select form-search-select" name="division" id="division">
                                  <option value="">জেলা</option>
                                  @foreach($locations as $location)
                                  <option  value="{{ $location['id'] }}" {{ $location->id == $division ? 'selected' : '' }}>{{ $location['name'] }}</option>
                                  @endforeach
                                </select>
                           </div>
                        </div>
                        <div class="col-lg-3 col-4">
                           <div class="form-group">
                                <select class="form-select form-search-select" name="upazila" id="upazila">
                                  <option value="">উপজেলা</option>
                                </select>
                           </div>
                        </div>
                        <div class="col-lg-6 col-12">
                           <div class="form-group">
                                <input name="keyword" type="text" class="form-control form-search-select" autocomplete="off" placeholder="অনুসন্ধান করুন" value="{{ $keyword ? $keyword : '' }}">

                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-2">
                     <div class="action-buttons">
                        <div class="form-group" style="width: 100%">
                           <a type="button" href="{{route('archive')}}" class="btn btn-light btn-block">সব খবর</a>
                        </div>
                        <div class="form-group mt-4" style="width: 100%">
                           <button type="submit" class="btn btn-dark btn-block">খুঁজুন</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </form>
         <div class="archive-body">
            <div class="row archive-list mb-3">
                @if($posts->count())
                @foreach($posts as $pfso)
                   <div class="col-sm-3 box-news">
                      <a href="{{route('single-post', $pfso->slug)}}" class="news-item news-item-box mb-2 m-mb-0 m-py-2">
                         <img src="{{ Voyager::image( $pfso->image ) }}" width="330" height="175" alt="{{$pfso->title}}" class="lazyload img-loader">
                         <div class="archive-information">
                            <h2 class="title">{{$pfso->title}}</h2>
                              @php

                                    $englishDate =date('j F Y, h:i a',strtotime($pfso->created_at));



                                    $search_array= array('1','2','3','4','5','6','7','8','9','0','January','February','March','April','May','June','July','August','September','October','November','December','Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','am', 'pm');



                                    $replace_array= array('১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে','জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার','বুধবার','বৃহস্পতিবার','শুক্রবার', 'এএম', 'পিএম' );



                                    // convert all bangle char to English char 

                                    $en_number = str_replace($search_array, $replace_array, $englishDate);   



                                    // remove unwanted char       

                                    $end_date =  preg_replace('/[^A-Za-z0-9:\-]/', ' ', $en_number);

                                @endphp
                            <p class="news-time">{{$en_number}}</p>
                         </div>
                      </a>
                   </div>
                @endforeach
                @else
                    <span class="btn btn-dark w-md p-2 mt-2 mb-2  d-flex justify-content-center text-white text-blod"><small>কোন খবর পাওয়া যায়নি</small></span>
                @endif
            </div>
            <div class="w-100 text-center py-2">
                <button type="button" class="btn  px-4 load-more text-white" id="loadMore">আরও দেখুন
                </button>
            </div>
         </div>
      </div>
   </main>
</main>
@else
<main role="main">
   <main role="main" class="pt-2 pb-2 details">
      <div class="container">
         <div aria-label="breadcrumb">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="/">প্রচ্ছদ</a></li>
               <li class="breadcrumb-item active" aria-current="page">
                  @if($terms)
                  Terms of Use
                  @else
                  {{$page->title}}
                  @endif
               </li>
            </ol>
         </div>
        <div class="py-5">
            <p class="pt-5">
               @if($terms)
               {!! Voyager::setting('site.terms') !!}
               @elseif($other)
               {!! $page->body !!}
               @endif
            </p>
        </div>
      </div>
   </main>
</main>
@endif
@endsection
@section('scripts')
  <script>
    $(function() {
      var $startDate = $('.start-date');
      var $endDate = $('.end-date');

      $startDate.datepicker({
        autoHide: true,
        endDate: new Date(),
      });
      $endDate.datepicker({
        autoHide: true,
        startDate: $startDate.datepicker('getDate'),
      });

      $startDate.on('change', function () {
        $endDate.datepicker('setStartDate', $startDate.datepicker('getDate'));
      });
    });
  </script>
@endsection

