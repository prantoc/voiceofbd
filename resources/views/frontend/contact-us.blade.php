@extends('layouts.header')
@section('styles')
<style>
   .map iframe {
   width: 100%;
   height: 512px;
   }
   .contact-icon {
   color: #fff;
   font-size: 25px;
   margin-right: 15px;
   width: 50px;
   height: 50px;
   background: #38618b;
   text-align: center;
   line-height: 50px;
   border-radius: 50%;
   }
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
   .contact-text span {
   color: #38618b;
   font-weight: 600;
   }
</style>
@endsection
@section('content')
<main role="main">
   <div class="pt-2 pb-2 category">
      <div class="container">
         <div aria-label="breadcrumb">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="/">প্রচ্ছদ</a></li>
               <li class="breadcrumb-item active" aria-current="page">যোগাযোগ</li>
            </ol>
         </div>
         <div class="contact-body">
            <section class="contact-area pt-3 pb-3">
               <div class="container">
                  <div class="row align-items-center border-bottom">
                     <div class="col-md-8">
                        <div class="row align-items-center">
                           <div class="col-md-6 border-right">
                              <div class="contact-box d-flex align-items-center mb-3">
                                 <div class="contact-icon">
                                    <i class="fa fa-mobile"></i>
                                 </div>
                                 <div class="contact-text">
                                    <h5>ফোন</h5>
                                    <a href="tel:{{ Voyager::setting('site.phone') }}">
                                    <span>{{ Voyager::setting('site.phone') }}</span>
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6 border-right">
                              <div class="contact-box d-flex align-items-center mb-3">
                                 <div class="contact-icon">
                                    <i class="fa fa-envelope"></i>
                                 </div>
                                 <div class="contact-text">
                                    <h5>ই-মেইল</h5>
                                    <a href="mailto:{{ Voyager::setting('site.email') }}">
                                    <span>{{ Voyager::setting('site.email') }}</span>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="contact-box d-flex align-items-center mb-3">
                           <div class="contact-icon">
                              <i class="fa fa-map-marker"></i>
                           </div>
                           <div class="contact-text">
                              <h5>ঠিকানা</h5>
                              <span>{!! Voyager::setting('site.address') !!}</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <section class="contact-area">
               <div class="container">
                  <div class="row">
                     <div class="col-12">
                        <div class="map mb-3">
                           <iframe src="{{ Voyager::setting('site.map') }}" frameborder="0" style="border:3px solid #ebebeb;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
         </div>
      </div>
   </div>
</main>
@endsection
