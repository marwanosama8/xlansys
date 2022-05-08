    <div class="container">
        <div class="logo-nav">
            <div class="input-search">
                <input type="text" wire:model="search" value="" placeholder="{{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'بحث' : 'Search' }}" />
                <button class="icon-btn-new" wire:click='click'>
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
            {{-- @if (!$result == '')
                {{ $result->key }}
            @endif --}}

            <a href="{{ route('home') }}">

                <img src="{{ asset('assets/images/img-nav-Xlansys.png') }}" alt="" />
            </a>

        </div>
    </div>
