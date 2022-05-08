 @extends('layout.master')

 @section('title')
     Xlansys
 @endsection
 @section('content')
     <!-- start section slider -->
     <section class="sec-slider">
         <div class="container">
             <div class="owl-carousel owl-theme"  dir="ltr">
                 <div class="item">
                     <img src="{{ asset('assets/images/slider-1-img.png') }}" alt="" />
                 </div>
                 <div class="item">
                     <img src="{{ asset('assets/images/slider-2-img.png') }}" alt="" />
                 </div>
                 <div class="item">
                     <img src="{{ asset('assets/images/slider-3-img.png') }}" alt="" />
                 </div>
             </div>
         </div>
     </section>
     <!-- end section slider -->

     <!-- start section innavation -->
     <section class="sec-innavation">
         <div class="container">
             <div class="div-innavation-all">
                 <div class="div-innavation">
                     <h3>{{ trans('home.1') }}</h3>
                     <p>
                         {{ trans('home.2') }}
                     </p>
                 </div>
                 <div class="div-innavation">
                     <h3>{{ trans('home.3') }}</h3>
                     <p>
                         {{ trans('home.4') }}
                     </p>
                 </div>
                 <div class="div-innavation">
                     <h3>ERP</h3>
                     <p>
                         {{ trans('home.5') }}
                     </p>
                 </div>
             </div>
         </div>
     </section>
     <!-- end section innavation -->

     <!-- start section enterprise -->
     <section class="sec-enterprice">
         <div class="container">
             <div class="enterprice-all">
                 <div class="img-enterprise">
                     <img src="{{asset('assets/images/erp-software-vector-illustration_116137-2771 3 2.png')}}" alt="" />
                 </div>
                 <div class="text-enterprice">
                     <h3>{{ trans('home.6') }} (ERP)</h3>
                     <p>
                         {{ trans('home.erp-tall') }}
                     </p>
                     <a href="#" class="btn-show-more">
                         {{ trans('home.more') }} <i class="fa-solid fa-arrow-right"></i>
                     </a>
                 </div>
             </div>
         </div>
     </section>
     <!-- end section enterprise -->

     <!-- start section customer -->
     <section class="sec-customer">
         <div class="container">
             <div class="div-customer-all">
                 <div class="text-customer">
                     <h3>{{ trans('home.crm-short') }} (CRM)</h3>
                     <p>
                         {{ trans('home.7') }}
                     </p>
                     <a href="{{ route('crm') }}" class="btn-show-more">
                         {{ trans('home.more') }} <i class="fa-solid fa-arrow-right"></i>
                     </a>
                 </div>
                 <div class="img-customer">
                     <img src="{{ asset('assets/images/img-customer-2.png') }}" alt="" />
                 </div>
             </div>
         </div>
     </section>
     <!-- end section customer -->

     <!-- start section human -->
     <section class="sec-human">
         <div class="container">
             <div class="div-human-all">
                 <div class="img-human">
                     <img src="{{ asset('assets/images/img-human.png') }}" alt="" />
                 </div>
                 <div class="text-human">
                     <h3>{{ trans('home.8') }} (HRM)</h3>
                     <p>
                         {{ trans('home.9') }}
                     </p>
                     <a href="{{ route('hrm') }}" class="btn-show-more">
                         {{ trans('home.more') }} <i class="fa-solid fa-arrow-right"></i>
                     </a>
                 </div>
             </div>
         </div>
     </section>
     <!-- end section human -->
     <!-- start section mobilz -->
     <section class="sec-mobilz">
         <div class="container">
             <div class="div-mobilz-all">
                 <div class="text-mobilz">
                     <h3>{{ trans('home.10') }}</h3>
                     <p>
                         {{ trans('home.11') }}
                     </p>
                     <a href="{{ route('mobile') }}" class="btn-show-more">
                         {{ trans('home.more') }} <i class="fa-solid fa-arrow-right"></i>
                     </a>
                 </div>
                 <div class="img-mobilz">
                     <img src="{{ asset('assets/images/img-mobilz.png') }}" alt="" />
                 </div>
             </div>
         </div>
     </section>
     <!-- end section mobilz -->
 @endsection
