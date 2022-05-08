@extends('layout.master')

@section('title')
Company
@endsection
@section('content')

   <!-- start section one -->
    <section class="sec-one">
        <div class="container">
          <div class="div-sec-one">
            <div class="text-sec-one">
              <p>
{{ trans('company.1') }}
              </p>
            </div>
            <div class="img-sec-one">
              <img src="{{asset('assets/images/img-Xlansys.png')}}" alt="" />
            </div>
          </div>
        </div>
      </section>
      <!-- end section one -->

      <!-- start section bg -->
      <section class="sec-bg">
        <div class="container">
          <div class="text-bg-all">
            <div class="text-bg">
              <h1>{{ trans('company.2') }}</h1>
              <p>
{{ trans('company.3') }}
              </p>
            </div>
            <div class="text-bg">
              <h1>{{ trans('company.4') }}</h1>
              <p>
{{ trans('company.5') }}
             </p>
            </div>
            <div class="text-bg">
              <h1>{{ trans('company.6') }}</h1>
              <p>{{ trans('company.7') }}</p>
            </div>
          </div>
        </div>
      </section>
      <!-- end section bg -->

      <!-- start section img circle -->
      <section class="sec-img-circle">
        <div class="container">
          <div class="text-img-circle-all">
            <div class="text-img-circle">
              <h2>{{ trans('company.8') }}</h2>
              <p>
{{ trans('company.9') }}
              </p>
            </div>
            <div class="img-circle">
              <img src="{{asset('assets/images/img-circle.png')}}" alt="" />
            </div>
          </div>
        </div>
      </section>
      <!-- end section img circle -->
      @endsection
