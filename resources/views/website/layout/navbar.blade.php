<nav class="navbar navbar-fixed-top">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-collapse-1" aria-expanded="false">
                    <span class="fa fa-bars"></span>
                </button>

                <a href="{{ route('Index') }}" class="navbar-brand hidden-sm hidden-md hidden-lg"><img
                        src="{{ asset('assets/images/logo.png') }}" alt="LOGO"></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right text-align-left">
                    <li class="{{Route::is('Index')?'active':''}}"><a href="{{ route('Index') }}">{{__('home')}}</a></li>
                    <li class="{{Route::is('About')?'active':''}}"><a   href="{{ route('About') }}">{{__('about')}}</a></li>
                    <li class="{{Route::is('Services')?'active':''}}"><a href="{{ route('Services') }}">{{__('services')}}</a></li>
                </ul>

                <a href="{{ route('Index') }}" class="navbar-brand hidden-xs text-center"><img
                        src="{{ asset('assets/images/logo.png') }}" alt="LOGO"></a>

                <ul class="nav navbar-nav navbar-left text-align-right">
                    <li class="{{Route::is('Gallery')?'active':''}}"><a href="{{ route('Gallery') }}">{{__('gallery')}}</a></li>
                    <li class="{{Route::is('Contact')?'active':''}}"><a href="{{ route('Contact') }}">{{__('contact')}}</a></li>

                    <li>
                      @if (app()->getLocale() == 'ar')
                         <a rel="alternate" hreflang="en"
                         href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">
                                                    English
                         </a>
                         @else
                         <a rel="alternate" hreflang="ar"
                         href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">
                                                    العربية
                         </a>

                        @endif

                        </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
