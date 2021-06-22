@extends('website.layout.master')


<div class="fixed-bg">
    <img src="{{asset('assets/images/1.jpg')}}">
</div>

<div class="main-content">
    <div class="container-fluid">
        <h1 class="main-heading">{{__('our Works')}}</h1>

            <div class="row">
                @foreach ($albums as $album )

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <a class="fancybox-buttons img-holder small-img" rel="gallery" title="" data-fancybox-group="button" href="{{route('Show', $album->id)}}">
                        <img src="{{url('/').'/storage/'.$album -> picture}}" alt="...">
                        <div class="hover-content">
                            <h1>{{__('part name')}}</h1>

                        </div>
                    </a>
                </div>
                @endforeach
        </div>

    </div>
</div>
