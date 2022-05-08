@extends('layout.master')

@section('title')
CRM
@endsection
@section('content')

<!-- start section img ERP -->
    <section class="img-ERP-all">
        <div class="container">
          <div class="img-ERP-text">
            <div class="img-ERP">
              <img src="{{asset('assets/images/img-customer-2.png')}}" alt="" />
            </div>
            <div class="text-ERP">
              <h3>{{ trans('crm.1') }}</h3>
              <p>
               {{ trans('crm.2') }}
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- start section img ERP -->

      <!-- start section box-four -->
      <section class="sec-box-four">
        <div class="container">
          <div class="div-box-four-all">
            <div class="div-box-four box-two">
              <div class="enwan-box-four">
                <img src="{{asset('assets/images/box-four-1.png')}}" alt="" />
                <h3>{{ trans('crm.3') }}</h3>
              </div>
              <p>
                {{ trans('crm.4') }}
              </p>
            </div>
            <div class="div-box-four box-two">
              <div class="enwan-box-four">
                <img src="{{asset('assets/images/box-four-2.png')}}" alt="" />
                <h3>{{ trans('crm.5') }}</h3>
              </div>
              <p>
                {{ trans('crm.6') }}
              </p>
            </div>
            <div class="div-box-four box-two">
              <div class="enwan-box-four">
                <img src="{{asset('assets/images/box-four-3.png')}}" alt="" />
                <h3>{{ trans('crm.7') }}</h3>
              </div>
              <p>{{ trans('crm.8') }}</p>
            </div>
            <div class="div-box-four box-two">
              <div class="enwan-box-four">
                <img src="{{asset('assets/images/box-four-4.png')}}" alt="" />
                <h3>{{ trans('crm.9') }}</h3>
              </div>
              <p>
                {{ trans('crm.13') }}
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- end section box-four -->


      <!-- start section bg ERP -->
      <section class="Bg-CRM">
        <div class="container">
          <div class="box-bg">
            <h3>{{ trans('crm.10') }}</h3>
            <p>
{{ trans('crm.11') }}
            </p>
          </div>
        </div>
      </section>
      <div class="text-text">
        <div class="container">
          <p>
{{ trans('crm.12') }}
          </p>
        </div>
      </div>
      <!-- end section bg ERP -->

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
                    <a href="{{ route('erp') }}" class="btn-show-more">
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
