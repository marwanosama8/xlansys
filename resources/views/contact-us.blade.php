@extends('layout.master')

@section('title')
Contact Us
@endsection
@section('content')


<!-- start section our details -->
    <section class="contact-us-all">
        <div class="container">
          <div class="ourdetails-form-input">
            <section class="our-details">
              <p class="color">{{ trans('blog.contact') }}</p>
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
            <section class="input-form">
              <form id="SubmitForm"  method="POST" action="javascript:void(0)" >
                  @csrf
                <h3>{{ trans('blog.keep') }}</h3>
                <input id="nameInput" name="name" required type="text" placeholder="{{ trans('blog.name') }}" />
                <input id="emailInput" name="email"  type="email" placeholder="{{ trans('blog.email') }}" />
                <input id="phoneInput"  required type="number" placeholder="{{ trans('blog.phone') }}" />
                <input id="serviceInput" type="text" placeholder="{{ trans('blog.service') }}" />

                <textarea id="messageInput" placeholder="{{ trans('blog.message') }}"></textarea>
                <button type="submit" >{{ trans('blog.send') }}</button>
              </form>
            </section>
          </div>
        </div>
      </section>
      <!-- end section our details -->
      @endsection
@section('scripts')
<script type="text/javascript">
    $('#SubmitForm').on('submit', function(e) {
        e.preventDefault();

        let name = $('#nameInput').val();
        let email = $('#emailInput').val();
        let phone = $('#phoneInput').val();
        let service = $('#serviceInput').val();
        let message = $('#messageInput').val();


        $.ajax({
            url: "{{ route('new.message') }}",
            type: "POST",
            data: {
                "_token": "{{ csrf_token() }}",
                name: name,
                email: email,
                phone: phone,
                service: service,
                message: message,

            },
            success: function(response) {
                alert(response);
            },
            error: function(response) {
                alert(response);
            },
        });
    });
</script>
@endsection
