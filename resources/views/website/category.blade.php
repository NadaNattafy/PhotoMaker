@extends('website.layout.master')

@section('style')

<link rel="stylesheet" type="text/css" href="{{asset('assets/image-popup/source/jquery.fancybox.css?v=2.1.5" media="screen')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/image-popup/source/helpers/jquery.fancybox-buttons.css?v=1.0.5')}}">

@endsection

<div class="fixed-bg">
    <img src="{{asset('assets/images/1.jpg')}}">
</div>


<div class="main-content">
    <div class="container-fluid">
        <h1 class="main-heading">{{__('part name')}}</h1>

        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <a class="fancybox-buttons img-holder small-img" rel="gallery" title="" data-fancybox-group="button" href="images/1.jpg">
                    <img src="{{asset('assets/images/1.jpg')}}" alt="img">
                </a>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <a class="fancybox-buttons img-holder small-img" rel="gallery" title="" data-fancybox-group="button" href="images/2.jpg">
                    <img src="{{asset('assets/images/2.jpg')}}" alt="img">
                </a>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <a class="fancybox-buttons img-holder small-img" rel="gallery" title="" data-fancybox-group="button" href="images/3.jpg">
                    <img src="{{asset('assets/images/3.jpg')}}" alt="img">
                </a>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <a class="fancybox-buttons img-holder small-img" rel="gallery" title="" data-fancybox-group="button" href="images/1.jpg">
                    <img src="{{asset('assets/images/1.jpg')}}" alt="img">
                </a>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <a class="fancybox-buttons img-holder small-img" rel="gallery" title="" data-fancybox-group="button" href="images/2.jpg">
                    <img src="{{asset('assets/images/2.jpg')}}" alt="img">
                </a>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <a class="fancybox-buttons img-holder small-img" rel="gallery" title="" data-fancybox-group="button" href="images/3.jpg">
                    <img src="{{asset('assets/images/3.jpg')}}" alt="img">
                </a>
            </div>
        </div>

    </div>
</div>

@push('script')
<script type="text/javascript" src="{{asset('assets/image-popup/source/jquery.fancybox.js?v=2.1.5')}}"></script>
<script type="text/javascript" src="{{asset('assets/image-popup/source/helpers/jquery.fancybox-buttons.js?v=1.0.5')}}"></script>
<script>
    $(document).ready(function (){
        /*Button helper. Disable animations, hide close button, change title type and content*/

        $('.fancybox-buttons').fancybox({
            openEffect  : 'none',
            closeEffect : 'none',

            prevEffect : 'none',
            nextEffect : 'none',

            closeBtn  : false,

            helpers : {
                title : {
                    type : 'inside'
                },
                buttons	: {}
            },

            afterLoad : function() {
                this.title = '<a href="#" class="btn btn-fb btn-small"><i class="fa fa-facebook right-fa"></i> Share</a>' +
                        '<a href="#" class="btn btn-tw btn-small"><i class="fa fa-twitter right-fa"></i> Share</a>' +
                        '<a href="#" class="btn btn-inst btn-small"><i class="fa fa-instagram right-fa"></i> Share</a>';
            }
        });


    });
</script>
<script src="{{asset('assets/js/script.js')}}"></script>

@endpush
