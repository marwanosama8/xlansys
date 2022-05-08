<!DOCTYPE html>
<html @if (LaravelLocalization::getCurrentLocale() == 'en') dir="ltr"
@elseif (LaravelLocalization::getCurrentLocale() == 'ar')

dir="rtl" @endif lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    @include('layout.main-header')
    @if (LaravelLocalization::getCurrentLocale() == 'en')
        <style>
            .input-search {
                box-shadow: 0 0 5px rgba(0, 0, 0, 0.44);
                position: absolute;
                padding: 10px 22px 10px 20px;
                border-radius: 20px;
                display: flex;
                justify-content: center;
                align-items: center;
                transition: all 0.7s;
            }

        </style>
    @elseif (LaravelLocalization::getCurrentLocale() == 'ar')
        <style>
            .input-search {
                box-shadow: 0 0 5px rgba(0, 0, 0, 0.44);
                position: absolute;
                padding: 10px 20px 10px 25px;
                border-radius: 20px;
                display: flex;
                justify-content: center;
                align-items: center;
                transition: all 0.7s;
            }

        </style>
    @endif

<body>
    <livewire:search />

    @include('layout.nav')

    @yield('content')

    @include('layout.footer')
    @include('layout.script')

</body>

</html>
