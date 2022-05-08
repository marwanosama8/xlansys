@extends('layout.master')

@section('title')
Mobile App
@endsection
@section('content')

<!-- start section img ERP -->
    <section class="img-ERP-all">
        <div class="container">
          <div class="img-ERP-text">
            <div class="img-ERP">
              <img src="{{asset('assets/images/img-mobilz.png')}}" alt="" />
            </div>
            <div class="text-ERP">
              <h3>{{ trans('mobile.1') }}</h3>
              <p>{{ trans('mobile.2') }}
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
                <img src="{{asset('assets/images/img-box-mobilz-1.png')}}" alt="" />
                <h3>{{ trans('mobile.3') }}</h3>
              </div>
              <p>
{{ trans('mobile.4') }}              </p>
            </div>
            <div class="div-box-four box-two">
              <div class="enwan-box-four">
                <img src="{{asset('assets/images/img-box-mobilz-2.png')}}" alt="" />
                <h3>{{ trans('mobile.5') }}</h3>
              </div>
              <p>
{{ trans('mobile.6') }}
              </p>
            </div>
            <div class="div-box-four box-two">
              <div class="enwan-box-four">
                <img src="{{asset('assets/images/img-box-mobilz-3.png')}}" alt="" />
                <h3>{{ trans('mobile.7') }}</h3>
              </div>
              <p>
{{ trans('mobile.8') }}
              </p>
            </div>
            <div class="div-box-four box-two">
              <div class="enwan-box-four">
                <img src="{{asset('assets/images/img-box-mobilz-4.png')}}" alt="" />
                <h3>{{ trans('mobile.9') }}</h3>
              </div>
              <p>
{{ trans('mobile.10') }}
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- end section box-four -->


      <!-- start section bg ERP -->
      <section class="Bg-mobilz">
        <div class="container">
          <div class="box-bg">
            <h3>{{ trans('mobile.11') }}</h3>
            <p>
{{ trans('mobile.12') }}
            </p>
          </div>
        </div>
      </section>
      <div class="text-text">
        <div class="container">
          <p>
{{ trans('mobile.13') }}
          </p>
        </div>
      </div>
      <!-- end section bg ERP -->

      <!-- start section enterprise -->
      <section class="sec-enterprice">
        <div class="container">
          <div class="enterprice-all">
            <div class="img-enterprise">
              <img
                src="{{asset('assets/images/erp-software-vector-illustration_116137-2771 3 2.png')}}"
                alt=""
              />
            </div>
            <div class="text-enterprice">
              <h3>Enterprise Resource Planning (ERP)</h3>
              <p>
                ERP eliminates repetitive processes, streamline business processes
                and make it easier and more efficient for companies to collect
                data. Implementing the right CRM can increase sales efficiency.
                You can close more deals, boost sales, and improve forecast
                accuracy.
              </p>
              <a href="{{route('erp')}}" class="btn-show-more">
                SHOW MORE <i class="fa-solid fa-arrow-right"></i>
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
              <h3>Customer Relation Management (CRM)</h3>
              <p>
                With a CRM application, there’s no secret formula. It simply
                manages most of your critical customer information so that you can
                see it all in one place. Without leaving the app, you can view
                contact info, follow up via email or social media. ERP gives you
                accessing to a centralized database from anywhere you work. Home,
                office, wherever where you are.
              </p>
              <a href="{{route('crm')}}" class="btn-show-more">
                SHOW MORE <i class="fa-solid fa-arrow-right"></i>
              </a>
            </div>
            <div class="img-customer">
              <img src="{{asset('assets/images/img-customer-2.png')}}" alt="" />
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
              <img src="{{asset('assets/images/img-human.png')}}" alt="" />
            </div>
            <div class="text-human">
              <h3>Human Resources Management (HRM)</h3>
              <p>
                With a Human Resource system, you can manage entire spectrum of HR
                activities starting from Employee Hire to Retire/resign that
                includes payroll, benefits administration, performance reviews,
                time off tracking, goals, team planning, reporting, and more. It's
                strategy to increase the quantity and quality of improving
                employee engagement, develop leaders within the organization.
              </p>
              <a href="{{route('hrm')}}" class="btn-show-more">
                SHOW MORE <i class="fa-solid fa-arrow-right"></i>
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
              <h3>MOBILIZE YOUR BUSINESS</h3>
              <p>
                You’ve just found it – we can realize any projects! We can create
                a wide range of mobile apps based on your requirements. Our
                experienced programmers have the acumen to come up with fresh
                ideas
              </p>
              <a href="{{route('mobile')}}" class="btn-show-more">
                SHOW MORE <i class="fa-solid fa-arrow-right"></i>
              </a>
            </div>
            <div class="img-mobilz">
              <img src="{{asset('assets/images/img-mobilz.png')}}" alt="" />
            </div>
          </div>
        </div>
      </section>
      <!-- end section mobilz -->
      @endsection
