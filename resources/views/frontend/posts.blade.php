@extends('layouts.header')
@section('content')

 <!-- section-1 -->
      <div class="container-fluid mt-2 px-5">
        <div class="category-container">
          <div class="row">
            <div class="col-lg-9 col-md-8 mb-2">
              <section class="section-bb">
                @if(!empty($cats ))
                {{-- @foreach($cats as $cat) --}}
                <div class="cat-header py-2">
                  <h2><a href="#">{{$cats->name}}</a></h2>
                </div>
                {{-- @endforeach --}}
                @endif
                <div class="subcategories d-flex align-items-center">
                @if(!empty($catTags ))
                @foreach($catTags as $catTag)
                  <div class="identifier"></div> <a href="{{route ('tag', $catTag->slug)}}" class="cat-item border rounded p-1"> {{$catTag->name}}</a>
                @endforeach
                @endif
                </div>
              </section>
              <div class="cat-lead-container border-bottom my-2">
                <div class="row">
                  <div class="col-lg-8 top-left-section lead-top">
                  @if(!empty($featuredTopPosts ))
                  @foreach($featuredTopPosts as $ftp)
                    @if(!empty($ftp->category->parent_id) || !empty($ftp->category->id))
                      @if($ftp->category->parent_id == $checkcatId || $ftp->category_id == $checkcatId)
                        <div class="lead-news">
                          <a href="{{route('single-post', $ftp->slug)}}" class="news-item news-item-lead border-0">
                            @if($ftp->image)
                            <img src="{{ Voyager::image( $ftp->image ) }}" alt="{{$ftp->title}}" class="lazyload img-loader">
                            @else
                            <img src="{{ Voyager::image( Voyager::setting('site.logo')) }}" class="lazyload img-loader"></img>
                            @endif
                            <h2 class="title" style="margin: 10px 0">{{$ftp->title}}</h2>
                          </a>
                        </div>
                      @endif
                    @endif
                  @endforeach
                  @endif
                  </div>
                  <div class="col-lg-4 cat-two-items">
                    <div class="row">
                    @if(!empty($featuredSidePosts ))
                    @foreach($featuredSidePosts as $fsp)
                      @if(!empty($fsp->category->parent_id) || !empty($fsp->category->id))
                        @if($fsp->category->parent_id == $checkcatId || $fsp->category_id == $checkcatId)
                          <div class="col-12 col-sm-6 col-lg-12 box-news border-bottom mt-1">
                            <a href="{{route('single-post', $fsp->slug)}}" class="news-item news-item-box">
                              @if($fsp->image)
                              <img src="{{ Voyager::image( $fsp->image ) }}" height="175" alt="{{$fsp->title}}" class="lazyload img-loader">
                              @else
                            <img src="{{ Voyager::image( Voyager::setting('site.logo')) }}"  height="175" class="lazyload img-loader"></img>
                            @endif
                              <h2 class="title">{{$fsp->title}}</h2>
                            </a>
                          </div>
                        @endif
                      @endif
                    @endforeach
                    @endif
                    </div>
                  </div>
                </div>
              </div>
              <div class="row more-contents border-top"> 
                @if(!empty($allPosts ))
              @foreach($allPosts as $ap)
                @if(!empty($ap->category->parent_id) || !empty($ap->category->id))
                        @if($ap->category->parent_id == $checkcatId || $ap->category_id == $checkcatId)
                    <div  class="col-sm-4 box-news mt-2">
                      <a href="{{route('single-post', $ap->slug)}}" class="news-item news-item-box m-py-2">
                        @if($ap->image)
                        <img src="{{ Voyager::image( $ap->image ) }}" height="175" alt="{{$ap->title}}" class="lazyload img-loader">
                         @else
                        <img src="{{ Voyager::image( Voyager::setting('site.logo')) }}"  height="175" class="lazyload img-loader"></img>
                        @endif
                        <h2 class="title">{{$ap->title}}</h2>
                      </a>
                    </div>
                  @endif
                @endif
              @endforeach
              @endif
              </div>
              <div class="w-100 text-center py-2">
                <button type="button" class="btn  px-4 load-more text-white" id="loadMore">আরও দেখুন
                </button>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 pt-5 mt-4">
              <div class="advertisement d-flex justify-content-center">
                <div id="div-gpt-ad-1624960273857-0">
                </div>
              </div>
              <div class="category-right-section-top sticky-container">
                <div class="category-header d-flex justify-content-between align-items-center ">
                  <div class="heading national-heading py-1">
                    <p class="title">এই সপ্তাহের পাঠকপ্রিয়</p>
                  </div>
                </div>
                <div class="blk-list scaled">
                @if(!empty($weeklyPosts ))
                @foreach($weeklyPosts as $wp)
                 @if(!empty($wp->category->parent_id) || !empty($wp->category->id))
                        @if($wp->category->parent_id == $checkcatId || $wp->category_id == $checkcatId)
                      <a href="{{route('single-post', $wp->slug)}}" class="news-item news-item-regular py-2">
                        <div class="image-container">
                          @if($wp->image)
                          <img src="{{ Voyager::image( $wp->image ) }}" height="175" alt="{{$wp->title}}" class="lazyload img-loader">
                          @else
                          <img src="{{ Voyager::image( Voyager::setting('site.logo')) }}"  height="175" class="lazyload img-loader"></img>
                          @endif
                          {{-- <i class="fa fa-play-circle video-icon"></i> --}}
                        </div>
                        <h2 class="title">{{$wp->title}}</h2>
                      </a>
                    @endif
                  @endif
                @endforeach
                @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection