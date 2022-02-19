@extends('layouts.header')
@section('content')
    <!-- section-1 -->
      <div data-nosnippet="">
        <div class="container-fluid section-top mt-3 px-5">
          <div class="row">
            <div class="col-lg-6 col-md-12 top-left-section lead-top order-md-0 order-lg-1">
              <div class="row">
                <div class="col-12 lead-news">
                  @foreach($postOne as $post)
                  <a href="{{route('single-post', $post->slug)}}" class="news-item news-item-lead">
                    <div class="image-container">
                      <img src="{{ Voyager::image( $post->image ) }}" alt="{{$post->title}}" class="lazyload img-loader">
                    </div>
                    <h2 class="title" style="margin: 10px 0">{{$post->title}}</h2>
                    <span  class="d-none d-sm-block">{!! \Illuminate\Support\Str::limit($post->body,150,$end='...') !!}</span>
                  </a>
                  @endforeach
                </div>
              </div>
              <div class="row">
                @foreach($postTwo as $post)
                <div class="col-sm-6 scaled lead-below-item">
                  <a href="{{route('single-post', $post->slug)}}" class="news-item news-item-list">
                    <div class="image-container">
                      <img src="{{ Voyager::image( $post->image ) }}" alt="{{$post->title}}" class="lazyload img-loader">
                    </div>
                    <div class="">
                      <h2 class="title">{{$post->title}}</h2>
                    </div>
                  </a>
                </div>
                @endforeach
              </div>
            </div>
            <div class="col-lg-3 col-md-6 top-list-1 order-md-1 order-lg-0">
              @if(!empty($adOne))
               <div class="advertisement mt-2">
                  <a href="{{$adOne->ad_link}}" target="_blank" class="d-flex justify-content-center">
                    <img src="{{ Voyager::image( $adOne->ad_img ) }}" alt="" style="width: 100%; height:100px;">
                  </a>
              </div>
              @endif
              <div class="second-center scaled" style="background: #Eff5F4">
                @foreach($postThree as $post)
                <a href="{{route('single-post', $post->slug)}}" class="news-item news-item-list py-2 ">
                  <div class="image-container">
                    <img src="{{ Voyager::image( $post->image ) }}" alt="{{$post->title}}" class="lazyload img-loader">
                  </div>
                  <div class="">
                    <h2 class="title">{{$post->title}}</h2>
                  </div>
                </a>
               @endforeach
              </div>
              @if(!empty($adTwo))
               <div class="advertisement mt-2">
                 <a href="{{$adTwo->ad_link}}" target="_blank" class="d-flex justify-content-center">
                    <img src="{{ Voyager::image( $adTwo->ad_img ) }}" alt="" style="width: 100%; height:100px;">
                  </a>
              </div>
              @endif
            </div>
            <div class="col-lg-3 col-md-6 order-lg-2">
            @if(!empty($adThree))
              <div class="advertisement mt-2">
                  <a href="{{$adThree->ad_link}}" target="_blank" class="d-flex justify-content-center">
                    <img src="{{ Voyager::image( $adThree->ad_img ) }}" alt="" style="width: 100%; height:100px;">
                  </a>
              </div>
            @endif
              <div class="top-right m-pt-3 mt-2">
                <div class="opinion-contents px-2">
                  <div class="category-header opinion-header d-flex justify-content-between align-items-center">
                    <div class="heading opinion-heading d-flex align-items-center">
                      <p class="title"><a href="{{route('post',$cat->slug)}}">{{$cat->name}}</a></p>
                    </div>
                    <a href="{{route('post',$cat->slug)}}">
                      <div class="read-more d-flex justify-content-end align-items-center">
                        <p>আরও পড়ুন</p>
                        <p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
                      </div>
                    </a>
                  </div>
                  <div class="regular-list scaled ai-custom">
                    @foreach($postFour as $pf)
                    
                    <a href="{{route('single-post', $pf->slug)}}" class="news-item news-item-regular py-2 d-flex">
                      <img src="{{ Voyager::image( $pf->image ) }}" alt="{{$pf->title}}" class="lazyload img-loader" style="border-radius: 50%;width: 90px;height: 90px;margin-right: 8px">
                      <div class="d-flex flex-column" style="">
                        <h2 class="title">{{$pf->title}}</h2>
                        <p style="color: #696464;">{{$pf->authorId->name}}</p>
                      </div>
                    </a>
                    @endforeach
                  </div>
                </div>
                @if(!empty($adFour))
                <div class="advertisement mt-2">
                  <a href="{{$adFour->ad_link}}" target="_blank" class="d-flex justify-content-center">
                    <img src="{{ Voyager::image( $adFour->ad_img ) }}" alt="" style="width: 100%; height:100px;">
                  </a>
                </div>
                @endif
                <div class="dpc mt-2">
                  <div class="d-flex justify-content-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- section-2 -->
      <div class="section-two bg-section-two py-lg-3  px-lg-4">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-9 col-md-12 col-sm-12 special-top">
              <div class="row">
                @foreach($posts as $post)
                <div class="col-sm-4 box-news ">
                  <a href="{{route('single-post', $post->slug)}}" class="news-item news-item-box m-py-2">
                    <div class="image-container">
                      <img src="{{ Voyager::image( $post->image ) }}" alt="" class="lg-img lazyload img-loader">
                    </div>
                    <div class="">
                      <h2 class="title">{{$post->title}}</h2>
                    </div>
                  </a>
                </div>
                @endforeach
              </div>
            </div>
            <div class="col-xl-3 col-md-12 col-sm-12 m-pt-3">
              <div class="recent-popular">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                  <li class="nav-item side-news-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">সর্বশেষ</button>
                  </li>
                  <li class="nav-item side-news-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">সর্বাধিক পঠিত</button>
                  </li>
                </ul>
                <div class="tab-content  side-scroll-tab" id="pills-tabContent">
                  <div class="tab-pane fade show active px-sm-4" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    @foreach($latestPosts as $post)
                    <a class="rp-item py-2 " href="{{route('single-post', $post->slug)}}">
                      <div class="image-container">
                        <img class="img-loader" src="{{ Voyager::image( $post->image ) }}"  width=130 height=90 alt="">
                      </div>
                      <h2 class="news-item-lite">
                      {{$post->title}}
                      </h2>
                    </a>
                  @endforeach
                  </div>


                  <div class="tab-pane fade px-sm-4" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    
                  @foreach($topPosts as $post)
                    <a class="rp-item py-2 " href="{{route('single-post', $post->slug)}}">
                      <div class="image-container">
                        <img class="img-loader" src="{{ Voyager::image( $post->image ) }}"  width=130 height=90 alt="">
                      </div>
                      <h2 class="news-item-lite">
                      {{$post->title}}
                      </h2>
                    </a>
                  @endforeach
                  </div>
                </div>
                <div class="bg-tab-bottom text-center py-2">
                  <a style="font-size: 19px; color: #FFF" href="#">আজকের সব খবর</a>
                </div>
              </div>
              @if(!empty($adFive))
               <div class="advertisement mt-2">
                  <a href="{{$adFive->ad_link}}" target="_blank" class="d-flex justify-content-center">
                    <img src="{{ Voyager::image( $adFive->ad_img ) }}" alt="" style="width: 100%; height:100px;">
                  </a>
              </div>
              @endif
            </div>
          </div>
        </div>
      </div>
     
      <!-- section-4 -->
      <div class="container-fluid px-5">
        <div class="row">
          <div class="col-lg-9 col-md-8 national-items">
            <div class="category-header national-ch d-flex justify-content-between align-items-center national__home mt-2">
              <div class="heading national-heading">
                <p class="title"><a href="{{route('post',$catTwo->slug)}}" style="color: #000 !important;">{{$catTwo->name}}</a></p>
              </div>
              <a href="{{route('post',$catTwo->slug)}}" class="d-none d-sm-flex">
                <div class="read-more d-flex justify-content-end align-items-center">
                  <p>আরও খবর</p>
                  <p> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
                </div>
              </a>
            </div>
            <div class="row border-right">
              <div class="col-lg-8 col-12">
                <div class="grid-fourth pt-2 m-pt-0">
                @php $i = 0;@endphp
                @foreach($postFiveSecOne as $pfso)
                 @php $i++; @endphp 
                  <a href="{{route('single-post', $pfso->slug)}}" class="grid-fourth-item grid-fourth-item__{{$i}} m-py-2">
                    <div class="image-container">
                      <img src="{{ Voyager::image( $pfso->image ) }}" alt="{{$pfso->title}}" class="lg-img lazyload img-loader">
                    </div>
                    <h2>{{$pfso->title}}</h2>
                  </a>
                @endforeach
                </div>
              </div>
              <div class="col-lg-4 col-12 third-right d-none d-sm-flex">
                <div class="regular-list scaled">
                  @foreach($postFiveSecTwo as $pfst)
                  <a href="{{route('single-post', $pfst->slug)}}" class="news-item news-item-regular py-2">
                    <div class="image-container d-flex d-lg-none">
                      <img src="{{ Voyager::image( $pfst->image ) }}" width=130 height=90 alt="{{$pfst->title}}" class="lazyload img-loader">
                    </div>
                    <h2 class="title">{{$pfst->title}}</h2>
                  </a>
                @endforeach
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 politics">
            <div class="category-header politics-ch d-flex justify-content-between align-items-center politics__home mt-2">
              <div class="heading politics-heading">
                <p class="title"><a href="{{route('post',$catThree->slug)}}" style="color: #000 !important;">{{$catThree->name}}</a></p>
              </div>
              <a href="{{route('post',$catThree->slug)}}" class="d-none d-sm-flex">
                <div class="read-more d-flex justify-content-end align-items-center">
                  <p>আরও খবর</p>
                  <p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
                </div>
              </a>
            </div>
            <div class="regular-list scaled ai-custom">
             @foreach($postSix as $pfst)
              <a href="{{route('single-post', $pfst->slug)}}" class="news-item news-item-regular py-2">
                <div class="image-container">
                  <img src="{{ Voyager::image( $pfst->image ) }}" width=130 height=90 alt="{{$pfst->title}}" class="lazyload img-loader">
                </div>
                <h2 class="title">{{$pfst->title}}</h2>
              </a>
            @endforeach
             
            </div>
          </div>
        </div>
      </div>
      <!-- section-5 -->
      <div class="container-fluid px-5">
        <div class="row">
          <div class="col-lg-9 col-md-9">
            <div class="category-header country-ch d-flex justify-content-between align-items-center opinion__home mt-2">
              <div class="heading opinion-heading">
                <p class="title"><a href="{{route('post',$catFour->slug)}}" style="color: #000 !important;">{{$catFour->name}}</a></p>
              </div>
              <a href="{{route('post',$catFour->slug)}}" class="d-none d-sm-flex">
                <div class="read-more d-flex justify-content-end align-items-center">
                  <p>আরও খবর</p>
                  <p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
                </div>
              </a>
            </div>
            <div class="row  country-articles">
              <div class="col-12 col-md-12 col-xl-4 mt-2">
                <div class="row type-sect-three-left">
                @foreach($postSevenSecOne as $pfst)
                  <div class="col-6 col-md-6 col-lg-6 col-xl-12 box-news d-flex justify-content-sm-center">
                    <a href="{{route('single-post', $pfst->slug)}}" class="news-item news-item-box pt-3 m-pb-2">
                      <img src="{{ Voyager::image( $pfst->image ) }}" alt="{{$pfst->title}}" class="lg-img lazyload img-loader">
                      <h2 class="title">{{$pfst->title}}</h2>
                    </a>
                  </div>
                @endforeach
             
                </div>
              </div>
              <div class="col-12 col-md-6 col-xl-4">
                <div class="clk-list clk-center">
                  @foreach($postSevenSecTwo as $pfst)
                  <a href="{{route('single-post', $pfst->slug)}}" class="clk-item clk-item-regular py-2 ">
                    <img src="{{ Voyager::image( $pfst->image ) }}" width=130 height=90 alt="{{$pfst->title}}" class="lazyload img-loader">
                    <h2 class="title">{{$pfst->title}}</h2>
                  </a>
                  @endforeach
                </div>
              </div>
              <div class="col-12 col-md-6 col-xl-4 d-none d-sm-flex">
                <div class="clk-list clk-right">
                   @foreach($postSevenSecThree as $pfst)
                  <a href="{{route('single-post', $pfst->slug)}}" class="clk-item clk-item-regular py-2 ">
                    <img src="{{ Voyager::image( $pfst->image ) }}" width=130 height=90 alt="{{$pfst->title}}" class="lazyload img-loader">
                    <h2 class="title">{{$pfst->title}}</h2>
                  </a>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 custom-item">
            <div class="category-header bangladesh-ch d-flex justify-content-between align-items-center politics__home mt-2">
              <div class="heading custom-heading p-3">
                <p class="title bangladesh-lc">আপনার এলাকার খবর</p>
              </div>
            </div>
            <div class="row mt-2" style="margin: 0">
              <form action="{{route('location-search')}}" method="GET">
                <div class="col-12" style="padding: 5px 0">
                  <div class="form-group" style="margin: 0">
                    <select class="form-select form-search-select" name="division" id="division" required>
                      <option value="">জেলা</option>
                      @foreach($locations as $location)
                      <option  value="{{ $location['id'] }}">{{ $location['name'] }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-12" style="padding: 5px 0">
                  <div class="form-group" style="margin: 0">
                    <select class="form-select form-search-select" name="upazila" id="upazila">
                      <option value="">উপজেলা</option>
                    </select>
                  </div>
                </div>
                <div class="col-12 dis-search" style="padding: 5px 0">
                  <button type="submit" class="btn dis-sea btn-block text-white" aria-label="Search" >
                  খুঁজুন
                  <i class="fas fa-search" style="color: #FFF !important; height: 100%"></i>
                  </button>
                </div>
              </form>
            </div>
            @if(!empty($adSix))
            <div class="advertisement mt-2">
              <a href="{{$adSix->ad_link}}" target="_blank" class="d-flex justify-content-center">
                  <img src="{{ Voyager::image( $adSix->ad_img ) }}" alt="" style="width: 100%; height:100px;">
                </a>
            </div>
            @endif
          </div>      
        </div>
      </div>
      <!-- section-6 -->
      <div class="bg-section-two sports-section-contents">
        <div class="container-fluid px-5 pt-3 m-pt-2 pb-3 m-pb-2">
          <div class="row">
            <div class="col-lg-9 col-md-8">
              <div class="category-header sports-ch d-flex justify-content-between align-items-center">
                <div class="heading sports-heading">
                  <p class="title"><a href="{{route('post',$catFive->slug)}}" style="color: #000 !important;">{{$catFive->name}}</a></p>
                </div>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link " id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">ক্রিকেট</button>
                  </li>
                  <li class="nav-item " role="presentation">
                    <button class="nav-link " id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">ফুটবল</button>
                  </li>
                  <li class="nav-item " role="presentation">
                    <button class="nav-link active" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">সকল</button>
                  </li>
                </ul>
                <!-- </div> -->
                <a href="{{route('post',$catFive->slug)}}" class="d-none d-sm-flex ">
                  <div class="read-more d-flex justify-content-end align-items-center">
                    <p>আরও খবর</p>
                    <p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
                  </div>
                </a>
              </div>
              <div>
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row sports-all sports-item">
                      <div class="col-lg-8 col-12">
                        <div class="grid-fourth pt-2 m-pt-0">
                          @php $i = 0;@endphp
                          @foreach($postCrickSecOne as $pfso)
                           @php $i++; @endphp 
                            <a href="{{route('single-post', $pfso->slug)}}" class="grid-fourth-item grid-fourth-item__{{$i}} m-py-2">
                              <div class="image-container">
                                <img src="{{ Voyager::image( $pfso->image ) }}" alt="{{$pfso->title}}"  width=130 height=90 alt="" class="lazyload img-loader" >
                              </div>
                              <h2>{{$pfso->title}}</h2>
                            </a>
                          @endforeach
                        </div>
                      </div>
                      <div class="col-lg-4 col-12 third-right d-none d-sm-flex">
                        <div class="regular-list scaled">
                          @foreach($postCrickSecTwo as $pfso)
                          <a href="{{route('single-post', $pfso->slug)}}" class="news-item news-item-regular py-2">
                            <div class="image-container d-flex d-lg-none">
                              <img src="{{ Voyager::image( $pfso->image ) }}" width=130 height=90 alt="" class="lazyload img-loader">
                            </div>
                            <h2 class="title">{{$pfso->title}}</h2>
                          </a>
                          @endforeach
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row sports-all sports-item">
                      <div class="col-lg-8 col-12">
                        <div class="grid-fourth pt-2 m-pt-0">
                          @php $i = 0;@endphp
                          @foreach($postFootSecOne as $pfso)
                           @php $i++; @endphp 
                            <a href="{{route('single-post', $pfso->slug)}}" class="grid-fourth-item grid-fourth-item__{{$i}} m-py-2">
                              <div class="image-container">
                                <img src="{{ Voyager::image( $pfso->image ) }}" alt="{{$pfso->title}}"  width=130 height=90 alt="" class="lazyload img-loader" >
                              </div>
                              <h2>{{$pfso->title}}</h2>
                            </a>
                          @endforeach
                        </div>
                      </div>
                      <div class="col-lg-4 col-12 third-right d-none d-sm-flex">
                        <div class="regular-list scaled">
                          @foreach($postFootSecTwo as $pfso)
                          <a href="{{route('single-post', $pfso->slug)}}" class="news-item news-item-regular py-2">
                            <div class="image-container d-flex d-lg-none">
                              <img src="{{ Voyager::image( $pfso->image ) }}" width=130 height=90 alt="" class="lazyload img-loader">
                            </div>
                            <h2 class="title">{{$pfso->title}}</h2>
                          </a>
                          @endforeach
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade show active" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="row sports-all sports-item">
                      <div class="col-lg-8 col-12">
                        <div class="grid-fourth pt-2 m-pt-0">
                          @php $i = 0;@endphp
                          @foreach($postAllSecOne as $pfso)
                           @php $i++; @endphp 
                            <a href="{{route('single-post', $pfso->slug)}}" class="grid-fourth-item grid-fourth-item__{{$i}} m-py-2">
                              <div class="image-container">
                                <img src="{{ Voyager::image( $pfso->image ) }}" alt="{{$pfso->title}}"  width=130 height=90 alt="" class="lazyload img-loader" >
                              </div>
                              <h2>{{$pfso->title}}</h2>
                            </a>
                          @endforeach
                        </div>
                      </div>
                      <div class="col-lg-4 col-12 third-right d-none d-sm-flex">
                        <div class="regular-list scaled">
                          @foreach($postAllSecTwo as $pfso)
                          <a href="{{route('single-post', $pfso->slug)}}" class="news-item news-item-regular py-2">
                            <div class="image-container d-flex d-lg-none">
                              <img src="{{ Voyager::image( $pfso->image ) }}" width=130 height=90 alt="" class="lazyload img-loader">
                            </div>
                            <h2 class="title">{{$pfso->title}}</h2>
                          </a>
                          @endforeach
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row cricket sports-item" style="display: none">
                </div>
                <div class="row football sports-item" style="display: none">
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 m-mt-2">
              <div class="category-header education-ch d-flex justify-content-between align-items-center">
                <div class="heading custom-heading">
                  <p class="title"><a href="{{route('post',$catSix->slug)}}" style="color: #000 !important;">{{$catSix->name}}</a></p>
                </div>
                <a href="{{route('post',$catSix->slug)}}" class="d-none d-sm-flex">
                  <div class="read-more d-flex justify-content-end align-items-center">
                    <p>আরও খবর</p>
                    <p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
                  </div>
                </a>
              </div>
              <div class="blk-list scaled pt-2">
                @foreach($postNineSecOne as $pfso)
                <a href="{{route('single-post', $pfso->slug)}}" class="news-item-blk py-2 news-blk-image">
                  <div class="image-container">
                    <img src="{{ Voyager::image( $pfso->image ) }}" alt="{{$pfso->title}}" class="lazyload img-loader">
                  </div>
                  <h2 class="title">{{$pfso->title}}</h2>
                </a>
                @endforeach
                @foreach($postNineSecTwo as $pfso)
                <a href="{{route('single-post', $pfso->slug)}}" class="news-item news-item-regular py-2">
                  <div class="image-container">
                    <img src="{{ Voyager::image( $pfso->image ) }}" width=130 height=90 alt="{{$pfso->title}}" class="lazyload img-loader">
                  </div>
                  <h2 class="title">{{$pfso->title}}</h2>
                </a>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- section-7 -->
      
      <div class="container-fluid px-5 pt-3 m-pt-2 pb-3 m-pb-2">
        <div class="row">
          <div class="col-12">
            <div class="category-header sports-ch d-flex justify-content-between align-items-center">
              <div class="heading sports-heading">
                <p class="title"><a href="{{route('post',$catSeven->slug)}}" style="color: #000 !important;">{{$catSeven->name}}</a></p>
              </div>
              <ul class="nav nav-tabs entertainment" id="myTab" role="tablist">
                <li class="nav-item " role="presentation">
                  <button class="nav-link entertainment-link" id="bolwd-tab" data-bs-toggle="tab" data-bs-target="#bolwd" type="button" role="tab" aria-controls="bolwd" aria-selected="true">বলিউড</button>
                </li>
                <li class="nav-item " role="presentation">
                  <button class="nav-link entertainment-link" id="holwd-tab" data-bs-toggle="tab" data-bs-target="#holwd" type="button" role="tab" aria-controls="holwd" aria-selected="false">হলিউড</button>
                </li>
                <li class="nav-item " role="presentation">
                  <button class="nav-link entertainment-link" id="dalwod-tab" data-bs-toggle="tab" data-bs-target="#dalwod" type="button" role="tab" aria-controls="dalwod" aria-selected="false"> ঢালিউড</button>
                </li>
                <li class="nav-item " role="presentation">
                  <button class="nav-link entertainment-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="false">সকল</button>
                </li>
              </ul>
              <!-- </div> -->
              <a href="{{route('post',$catSeven->slug)}}" class="d-none d-sm-flex ">
                <div class="read-more d-flex justify-content-end align-items-center">
                  <p>আরও খবর</p>
                  <p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
                </div>
              </a>
            </div>
            <div>
              <div class="tab-content" id="myTabContent">

                <div class="tab-pane fade" id="bolwd" role="tabpanel" aria-labelledby="bolwd-tab">
                  <div class="row sports-all sports-item">
                    
                    <div class="col-lg-3 col-md-4 m-mt-2">
                      
                      <div class="blk-list scaled pt-2">
                        @foreach($bolwodSecOne as $pfso)
                        <a href="{{route('single-post', $pfso->slug)}}" class="news-item-blk py-2 news-blk-image">
                          <div class="image-container">
                            <img src="{{ Voyager::image( $pfso->image ) }}" alt="{{$pfso->title}}" class="lazyload img-loader">
                          </div>
                          <h2 class="title">{{$pfso->title}}</h2>
                        </a>
                        @endforeach

                        @foreach($bolwodSecTwo as $pfso)
                        <a href="{{route('single-post', $pfso->slug)}}" class="news-item news-item-regular py-2">
                          <div class="image-container">
                            <img src="{{ Voyager::image( $pfso->image ) }}" width=130 height=90 alt="{{$pfso->title}}" class="lazyload img-loader">
                          </div>
                          <h2 class="title">{{$pfso->title}}</h2>
                        </a>
                        @endforeach
                      </div>
                    </div>
                    <div class="col-lg-6 col-12 entertainment-left">
                      <div class="grid-entertainment pt-2">
                         @php $i = 0;@endphp
                          @foreach($bolwodSecThree as $pfso)
                           @php $i++; @endphp 
                            <a href="{{route('single-post', $pfso->slug)}}" class="grid-entertainment-item grid-entertainment-item__{{$i}}">
                              <div class="image-container">
                                <img src="{{ Voyager::image( $pfso->image ) }}" alt="{{$pfso->title}}"  width=130 height=90 alt="" class="lazyload img-loader" >
                              </div>
                              <h2>{{$pfso->title}}</h2>
                            </a>
                          @endforeach
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 m-mt-2">
                      
                      <div class="blk-list scaled pt-2">
                         @foreach($bolwodSecFoure as $pfso)
                        <a href="{{route('single-post', $pfso->slug)}}" class="news-item-blk py-2 news-blk-image">
                          <div class="image-container">
                            <img src="{{ Voyager::image( $pfso->image ) }}" alt="{{$pfso->title}}" class="lazyload img-loader">
                          </div>
                          <h2 class="title">{{$pfso->title}}</h2>
                        </a>
                        @endforeach

                        @foreach($bolwodSecFive as $pfso)
                        <a href="{{route('single-post', $pfso->slug)}}" class="news-item news-item-regular py-2">
                          <div class="image-container">
                            <img src="{{ Voyager::image( $pfso->image ) }}" width=130 height=90 alt="{{$pfso->title}}" class="lazyload img-loader">
                          </div>
                          <h2 class="title">{{$pfso->title}}</h2>
                        </a>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>

                <div class="tab-pane fade" id="holwd" role="tabpanel" aria-labelledby="holwd-tab">
                  <div class="row sports-all sports-item">
                    
                    <div class="col-lg-3 col-md-4 m-mt-2">
                      
                      <div class="blk-list scaled pt-2">
                        @foreach($holwodSecOne as $pfso)
                        <a href="{{route('single-post', $pfso->slug)}}" class="news-item-blk py-2 news-blk-image">
                          <div class="image-container">
                            <img src="{{ Voyager::image( $pfso->image ) }}" alt="{{$pfso->title}}" class="lazyload img-loader">
                          </div>
                          <h2 class="title">{{$pfso->title}}</h2>
                        </a>
                        @endforeach

                        @foreach($holwodSecTwo as $pfso)
                        <a href="{{route('single-post', $pfso->slug)}}" class="news-item news-item-regular py-2">
                          <div class="image-container">
                            <img src="{{ Voyager::image( $pfso->image ) }}" width=130 height=90 alt="{{$pfso->title}}" class="lazyload img-loader">
                          </div>
                          <h2 class="title">{{$pfso->title}}</h2>
                        </a>
                        @endforeach
                      </div>
                    </div>
                    <div class="col-lg-6 col-12 entertainment-left">
                      <div class="grid-entertainment pt-2">
                         @php $i = 0;@endphp
                          @foreach($holwodSecThree as $pfso)
                           @php $i++; @endphp 
                            <a href="{{route('single-post', $pfso->slug)}}" class="grid-entertainment-item grid-entertainment-item__{{$i}}">
                              <div class="image-container">
                                <img src="{{ Voyager::image( $pfso->image ) }}" alt="{{$pfso->title}}"  width=130 height=90 alt="" class="lazyload img-loader" >
                              </div>
                              <h2>{{$pfso->title}}</h2>
                            </a>
                          @endforeach
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 m-mt-2">
                      
                      <div class="blk-list scaled pt-2">
                         @foreach($holwodSecFoure as $pfso)
                        <a href="{{route('single-post', $pfso->slug)}}" class="news-item-blk py-2 news-blk-image">
                          <div class="image-container">
                            <img src="{{ Voyager::image( $pfso->image ) }}" alt="{{$pfso->title}}" class="lazyload img-loader">
                          </div>
                          <h2 class="title">{{$pfso->title}}</h2>
                        </a>
                        @endforeach

                        @foreach($holwodSecFive as $pfso)
                        <a href="{{route('single-post', $pfso->slug)}}" class="news-item news-item-regular py-2">
                          <div class="image-container">
                            <img src="{{ Voyager::image( $pfso->image ) }}" width=130 height=90 alt="{{$pfso->title}}" class="lazyload img-loader">
                          </div>
                          <h2 class="title">{{$pfso->title}}</h2>
                        </a>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>

                <div class="tab-pane fade" id="dalwod" role="tabpanel" aria-labelledby="dalwod-tab">
                  <div class="row sports-all sports-item">
                    
                    <div class="col-lg-3 col-md-4 m-mt-2">
                      
                      <div class="blk-list scaled pt-2">
                        @foreach($dhlwodSecOne as $pfso)
                        <a href="{{route('single-post', $pfso->slug)}}" class="news-item-blk py-2 news-blk-image">
                          <div class="image-container">
                            <img src="{{ Voyager::image( $pfso->image ) }}" alt="{{$pfso->title}}" class="lazyload img-loader">
                          </div>
                          <h2 class="title">{{$pfso->title}}</h2>
                        </a>
                        @endforeach

                        @foreach($dhlwodSecTwo as $pfso)
                        <a href="{{route('single-post', $pfso->slug)}}" class="news-item news-item-regular py-2">
                          <div class="image-container">
                            <img src="{{ Voyager::image( $pfso->image ) }}" width=130 height=90 alt="{{$pfso->title}}" class="lazyload img-loader">
                          </div>
                          <h2 class="title">{{$pfso->title}}</h2>
                        </a>
                        @endforeach
                      </div>
                    </div>
                    <div class="col-lg-6 col-12 entertainment-left">
                      <div class="grid-entertainment pt-2">
                         @php $i = 0;@endphp
                          @foreach($dhlwodSecThree as $pfso)
                           @php $i++; @endphp 
                            <a href="{{route('single-post', $pfso->slug)}}" class="grid-entertainment-item grid-entertainment-item__{{$i}}">
                              <div class="image-container">
                                <img src="{{ Voyager::image( $pfso->image ) }}" alt="{{$pfso->title}}"  width=130 height=90 alt="" class="lazyload img-loader" >
                              </div>
                              <h2>{{$pfso->title}}</h2>
                            </a>
                          @endforeach
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 m-mt-2">
                      
                      <div class="blk-list scaled pt-2">
                         @foreach($dhlwodSecFoure as $pfso)
                        <a href="{{route('single-post', $pfso->slug)}}" class="news-item-blk py-2 news-blk-image">
                          <div class="image-container">
                            <img src="{{ Voyager::image( $pfso->image ) }}" alt="{{$pfso->title}}" class="lazyload img-loader">
                          </div>
                          <h2 class="title">{{$pfso->title}}</h2>
                        </a>
                        @endforeach

                        @foreach($dhlwodSecFive as $pfso)
                        <a href="{{route('single-post', $pfso->slug)}}" class="news-item news-item-regular py-2">
                          <div class="image-container">
                            <img src="{{ Voyager::image( $pfso->image ) }}" width=130 height=90 alt="{{$pfso->title}}" class="lazyload img-loader">
                          </div>
                          <h2 class="title">{{$pfso->title}}</h2>
                        </a>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>

                <div class="tab-pane fade  show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                  <div class="row sports-all sports-item">
                    
                    <div class="col-lg-3 col-md-4 m-mt-2">
                      
                      <div class="blk-list scaled pt-2">
                        @foreach($entertainAllSecOne as $pfso)
                        <a href="{{route('single-post', $pfso->slug)}}" class="news-item-blk py-2 news-blk-image">
                          <div class="image-container">
                            <img src="{{ Voyager::image( $pfso->image ) }}" alt="{{$pfso->title}}" class="lazyload img-loader">
                          </div>
                          <h2 class="title">{{$pfso->title}}</h2>
                        </a>
                        @endforeach

                        @foreach($entertainAllSecTwo as $pfso)
                        <a href="{{route('single-post', $pfso->slug)}}" class="news-item news-item-regular py-2">
                          <div class="image-container">
                            <img src="{{ Voyager::image( $pfso->image ) }}" width=130 height=90 alt="{{$pfso->title}}" class="lazyload img-loader">
                          </div>
                          <h2 class="title">{{$pfso->title}}</h2>
                        </a>
                        @endforeach
                      </div>
                    </div>
                    <div class="col-lg-6 col-12 entertainment-left">
                      <div class="grid-entertainment pt-2">
                         @php $i = 0;@endphp
                          @foreach($entertainAllSecThree as $pfso)
                           @php $i++; @endphp 
                            <a href="{{route('single-post', $pfso->slug)}}" class="grid-entertainment-item grid-entertainment-item__{{$i}}">
                              <div class="image-container">
                                <img src="{{ Voyager::image( $pfso->image ) }}" alt="{{$pfso->title}}"  width=130 height=90 alt="" class="lazyload img-loader" >
                              </div>
                              <h2>{{$pfso->title}}</h2>
                            </a>
                          @endforeach
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 m-mt-2">
                      
                      <div class="blk-list scaled pt-2">
                         @foreach($entertainAllSecFoure as $pfso)
                        <a href="{{route('single-post', $pfso->slug)}}" class="news-item-blk py-2 news-blk-image">
                          <div class="image-container">
                            <img src="{{ Voyager::image( $pfso->image ) }}" alt="{{$pfso->title}}" class="lazyload img-loader">
                          </div>
                          <h2 class="title">{{$pfso->title}}</h2>
                        </a>
                        @endforeach

                        @foreach($entertainAllSecFive as $pfso)
                        <a href="{{route('single-post', $pfso->slug)}}" class="news-item news-item-regular py-2">
                          <div class="image-container">
                            <img src="{{ Voyager::image( $pfso->image ) }}" width=130 height=90 alt="{{$pfso->title}}" class="lazyload img-loader">
                          </div>
                          <h2 class="title">{{$pfso->title}}</h2>
                        </a>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>


              </div>
              <div class="row cricket sports-item" style="display: none">
              </div>
              <div class="row football sports-item" style="display: none">
              </div>
            </div>
          </div>
          
        </div>
      </div>
      <!-- section-8 -->
      <div class="container-fluid px-5 pt-3 m-pt-2 pb-3 m-pb-2">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="category-header lifestyle-ch d-flex justify-content-between align-items-center mt-2">
              <div class="heading lifestyle-heading">
                <p class="title"><a href="{{route('post',$catEight->slug)}}" style="color: #000 !important;">{{$catEight->name}}</a></p>
              </div>
              <a href="{{route('post',$catEight->slug)}}" class="d-none d-sm-flex">
                <div class="read-more d-flex justify-content-end align-items-center">
                  <p>আরও খবর</p>
                  <p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
                </div>
              </a>
            </div>
            <div class="blk-list scaled mt-2">
              @foreach($lifeSecOne as $pfso)
                <a href="{{route('single-post', $pfso->slug)}}" class="news-item-blk py-2 news-blk-image">
                  <div class="image-container">
                    <img src="{{ Voyager::image( $pfso->image ) }}" alt="{{$pfso->title}}" class="lazyload img-loader">
                  </div>
                  <h2 class="title">{{$pfso->title}}</h2>
                </a>
                @endforeach

                @foreach($lifeSecTwo as $pfso)
                <a href="{{route('single-post', $pfso->slug)}}" class="news-item news-item-regular py-2">
                  <div class="image-container">
                    <img src="{{ Voyager::image( $pfso->image ) }}" width=130 height=90 alt="{{$pfso->title}}" class="lazyload img-loader">
                  </div>
                  <h2 class="title">{{$pfso->title}}</h2>
                </a>
              @endforeach
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="category-header lifestyle-ch d-flex justify-content-between align-items-center mt-2">
              <div class="heading lifestyle-heading">
                <p class="title"><a href="{{route('post',$catNine->slug)}}" style="color: #000 !important;">{{$catNine->name}}</a></p>
              </div>
              <a href="{{route('post',$catNine->slug)}}" class="d-none d-sm-flex">
                <div class="read-more d-flex justify-content-end align-items-center">
                  <p>আরও খবর</p>
                  <p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
                </div>
              </a>
            </div>
            <div class="blk-list scaled mt-2">
              @foreach($techSecOne as $pfso)
                <a href="{{route('single-post', $pfso->slug)}}" class="news-item-blk py-2 news-blk-image">
                  <div class="image-container">
                    <img src="{{ Voyager::image( $pfso->image ) }}" alt="{{$pfso->title}}" class="lazyload img-loader">
                  </div>
                  <h2 class="title">{{$pfso->title}}</h2>
                </a>
                @endforeach

                @foreach($techSecTwo as $pfso)
                <a href="{{route('single-post', $pfso->slug)}}" class="news-item news-item-regular py-2">
                  <div class="image-container">
                    <img src="{{ Voyager::image( $pfso->image ) }}" width=130 height=90 alt="{{$pfso->title}}" class="lazyload img-loader">
                  </div>
                  <h2 class="title">{{$pfso->title}}</h2>
                </a>
              @endforeach
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="category-header lifestyle-ch d-flex justify-content-between align-items-center mt-2">
              <div class="heading lifestyle-heading">
                <p class="title"><a href="{{route('post',$catTen->slug)}}" style="color: #000 !important;">{{$catTen->name}}</a></p>
              </div>
              <a href="{{route('post',$catTen->slug)}}" class="d-none d-sm-flex">
                <div class="read-more d-flex justify-content-end align-items-center">
                  <p>আরও খবর</p>
                  <p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
                </div>
              </a>
            </div>
            <div class="blk-list scaled mt-2">
              @foreach($religionSecOne as $pfso)
                <a href="{{route('single-post', $pfso->slug)}}" class="news-item-blk py-2 news-blk-image">
                  <div class="image-container">
                    <img src="{{ Voyager::image( $pfso->image ) }}" alt="{{$pfso->title}}" class="lazyload img-loader">
                  </div>
                  <h2 class="title">{{$pfso->title}}</h2>
                </a>
                @endforeach

                @foreach($religionSecTwo as $pfso)
                <a href="{{route('single-post', $pfso->slug)}}" class="news-item news-item-regular py-2">
                  <div class="image-container">
                    <img src="{{ Voyager::image( $pfso->image ) }}" width=130 height=90 alt="{{$pfso->title}}" class="lazyload img-loader">
                  </div>
                  <h2 class="title">{{$pfso->title}}</h2>
                </a>
              @endforeach
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="category-header lifestyle-ch d-flex justify-content-between align-items-center mt-2">
              <div class="heading lifestyle-heading">
                <p class="title"><a href="{{route('post',$catEle->slug)}}" style="color: #000 !important;">{{$catEle->name}}</a></p>
              </div>
              <a href="{{route('post',$catEle->slug)}}" class="d-none d-sm-flex">
                <div class="read-more d-flex justify-content-end align-items-center">
                  <p>আরও খবর</p>
                  <p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
                </div>
              </a>
            </div>
            <div class="blk-list scaled mt-2">
              @foreach($jobSecOne as $pfso)
                <a href="{{route('single-post', $pfso->slug)}}" class="news-item-blk py-2 news-blk-image">
                  <div class="image-container">
                    <img src="{{ Voyager::image( $pfso->image ) }}" alt="{{$pfso->title}}" class="lazyload img-loader">
                  </div>
                  <h2 class="title">{{$pfso->title}}</h2>
                </a>
                @endforeach

                @foreach($jobSecTwo as $pfso)
                <a href="{{route('single-post', $pfso->slug)}}" class="news-item news-item-regular py-2">
                  <div class="image-container">
                    <img src="{{ Voyager::image( $pfso->image ) }}" width=130 height=90 alt="{{$pfso->title}}" class="lazyload img-loader">
                  </div>
                  <h2 class="title">{{$pfso->title}}</h2>
                </a>
              @endforeach
            </div>
          </div>
        </div>
      </div>

@endsection
