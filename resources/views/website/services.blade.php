@extends('website.layout.master')

@section('style')

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style-ar.css') }}">

@endsection

<div class="fixed-bg">
    <img src="{{ asset('assets/images/1.jpg') }}">
</div>

<div class="main-content">
    <div class="container">
        <h1 class="main-heading">{{ __('services') }}</h1>

        {{-- <textarea class="form-control" id="summary-ckeditor" name="summary-ckeditor"></textarea> --}}
        <div class="border-bottom">
            <h1><strong>{{ __('Advertising Photography') }}</strong></h1>
            {!! getsetting('service3')  !!}
        </div>

        <div class="border-bottom">
            <h1><strong>{{ __('Digital Processing') }}</strong></h1>
            {!! getsetting('service3')  !!}
        </div>

        <div class="border-bottom">
            <h1><strong>{{ __('Video Photography') }}</strong></h1>
            {!! getsetting('service3')  !!}
        </div>

    </div>
</div>

@push('script')

    <script src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('assets/ckeditor/config.js') }}"></script>
    <script src="{{ asset('assets/ckeditor/sty.js') }}"></script>
    <script src="{{ asset('assets/vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('summary-ckeditor');

    </script>
    <!--
            <script type="text/javascript">
            $(document).ready(function () {
                $('.ckeditor').ckeditor();
            });
        </script>
        -->

@endpush
