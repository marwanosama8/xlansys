@extends('layout.master')

@section('title')
Blog
@endsection
@section('content')

<!-- start section our details -->
<section class="contact-us-all">
    <div class="container">
      <div class="ourdetails-form-input">
        <section class="our-details Blog-Text">
          <p class="color">{{ trans('blog.1') }}</p>
          <h3>{{ trans('blog.2') }}</h3>
          <div class="details-contact">
            <div class="img-details">
              <img src="{{asset('assets/images/contact-phone.png')}}" alt="" />
            </div>
            <div class="text-details">
              <h5>{{ trans('blog.3') }}</h5>
              <p>{{ trans('blog.4') }}</p>
            </div>
          </div>
          <div class="details-contact">
            <div class="img-details">
              <img src="{{asset('assets/images/contact-whats.png')}}" alt="" />
            </div>
            <div class="text-details">
              <h5>{{ trans('blog.6') }}</h5>
              <p>{{ trans('blog.7') }}</p>
            </div>
          </div>
          <div class="details-contact">
            <div class="img-details">
              <img src="{{asset('assets/images/contact-location.png')}}" alt="" />
            </div>
            <div class="text-details">
              <h5>{{ trans('blog.8') }}</h5>
              <p>{{ trans('blog.9') }}</p>
            </div>
          </div>
        </section>
        <div class="Blog-e3lan">
          <blockquote
            class="tiktok-embed"
            cite="https://www.tiktok.com/@janagate/video/7091301271038201090"
            data-video-id="7091301271038201090"
            style="max-width: 100%; min-width: 100%"
          >
            <section>
              <a
                target="_blank"
                title="@janagate"
                href="https://www.tiktok.com/@janagate"
                >@janagate</a
              >
              <a
                title="جاناجيت"
                target="_blank"
                href="https://www.tiktok.com/tag/%D8%AC%D8%A7%D9%86%D8%A7%D8%AC%D9%8A%D8%AA"
                >#جاناجيت</a
              >
              <a
                title="عيد_سعيد"
                target="_blank"
                href="https://www.tiktok.com/tag/%D8%B9%D9%8A%D8%AF_%D8%B3%D8%B9%D9%8A%D8%AF"
                >#عيد_سعيد</a
              >
              <a
                title="عيد_مبارك"
                target="_blank"
                href="https://www.tiktok.com/tag/%D8%B9%D9%8A%D8%AF_%D9%85%D8%A8%D8%A7%D8%B1%D9%83"
                >#عيد_مبارك</a
              >
              <a
                title="عيد"
                target="_blank"
                href="https://www.tiktok.com/tag/%D8%B9%D9%8A%D8%AF"
                >#عيد</a
              >
              <a
                title="عيدفطرمبارك"
                target="_blank"
                href="https://www.tiktok.com/tag/%D8%B9%D9%8A%D8%AF_%D9%81%D8%B7%D8%B1_%D9%85%D8%A8%D8%A7%D8%B1%D9%83"
                >#عيدفطرمبارك</a
              >
              <a
                title="عيدالفطرالمبارك"
                target="_blank"
                href="https://www.tiktok.com/tag/%D8%B9%D9%8A%D8%AF_%D8%A7%D9%84%D9%81%D8%B7%D8%B1_%D8%A7%D9%84%D9%85%D8%A8%D8%A7%D8%B1%D9%83"
                >#عيدالفطرالمبارك</a
              >
              <a
                title="م"
                target="_blank"
                href="https://www.tiktok.com/tag/%D9%85"
                >#م</a
              >
              <a
                title="السعودية"
                target="_blank"
                href="https://www.tiktok.com/tag/%D8%A7%D9%84%D8%B3%D8%B9%D9%88%D8%AF%D9%8A%D8%A9"
                >#السعودية</a
              >
              <a
                title="الرياض"
                target="_blank"
                href="https://www.tiktok.com/tag/%D8%A7%D9%84%D8%B1%D9%8A%D8%A7%D8%B6"
                >#الرياض</a
              >
              <a
                target="_blank"
                title="♬ original sound  - Jana gate"
                href="https://www.tiktok.com/music/original-sound-Jana-gate-7091301255057902337"
                >♬ original sound - Jana gate</a
              >
            </section>
          </blockquote>
          <script async src="https://www.tiktok.com/embed.js"></script>
        </div>
      </div>
    </div>
  </section>
  <!-- end section our details -->

@endsection
