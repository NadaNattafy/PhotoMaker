@extends('website.layout.master')

@section('style')

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style-ar.css')}}">

<style>
    input[type="file"] {
        padding: 0;
    }

    .black-box.margin-bottom {
        margin: 0 0 15px;
    }

    .checkbox-holder {
        font-weight: 100;
        position: relative;
        cursor: pointer;
        margin-bottom: 10px;
        display: block;
    }

    .checkbox-holder span {
        vertical-align: middle;
    }

    .checkbox-holder .checkbox-icon {
        width: 13px;
        height: 13px;
        line-height: 7px;
        display: inline-block;
        border: 1px solid #000;
        background: #000;
        text-align: center;
        margin: 0 4px;
    }

    .checkbox-holder input[type="checkbox"] {
        position: absolute;
        opacity: 0;
        cursor: pointer;
    }

    .checkbox-holder .checkbox-icon:after {
        content: '';
        background: #000;
        width: 7px;
        height: 7px;
        display: block;
        margin: 2px;
    }

    .checkbox-holder input[type="checkbox"]:checked + .checkbox-icon {
        border-color: #00bcd4;
    }

    .checkbox-holder input[type="checkbox"]:checked + .checkbox-icon:after {
        background: #00bcd4;
    }

    .main-label {
        border-bottom: 1px dashed #00bcd4;
    }

    .check-open {
        margin-top: 10px;
    }
</style>
@endsection

<div class="fixed-bg">
    <img src="{{asset('assets/images/1.jpg')}}">
</div>


<div class="main-content">
    <div class="container">
        <h1 class="main-heading">{{__('contact us')}}</h1>

        <div class="row">
            <div class="col-xs-12 col-sm-8">
                <form action="{{ route('Contact') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="text" placeholder="{{__('name / company')}}" name="name">
                    <input type="text" placeholder="{{__('type activity')}}" name="category">
                    <input type="tel" placeholder="{{__('contact number')}}" name="mobile">
                    <input type="email" placeholder="{{__('e-mail')}}" name="email">

                    @if(session()->has('message'))
                       <div class="alert alert-success">
                            {{ session()->get('message') }}
                       </div>
                    @endif

                    <label>{{__('service type')}}</label>

                    <div class="row">

                         @foreach ($services as $item )
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="box black-box margin-bottom">
                                <div class="main-label">
                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span>{{$item->name}}</span>
                                    </label>
                                </div>

                                <div class="check-open">

                                    @foreach ($item->menus as $menu )


                         @if($menu->type == 'text')
                         <label>{{__('service name')}}</label>
                         <input type="text"  name="services[{{$menu->id}}][value]" placeholder="text" value="{{$menu->name}}">

                         @elseif($menu->type == 'number')
                         <label>{{__('number of photos')}}</label>
                         <input type="number" name="services[{{$menu->id}}][value]" placeholder="number" value="{{$menu->name}}">

                         @else
                         <label class="checkbox-holder">
                            <input name="services[{{$menu->id}}][value]" type="checkbox">
                            <span class="checkbox-icon"></span>
                            <span>{{$menu->name}}</span>
                        </label>

                         @endif

                         @endforeach

                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>


                    <label>{{__('attach a file')}}</label>
                    <input type="file" placeholder="إرفاق ملف">
                    <div class="btn btn-white btn-block">
                        <span><input type="submit" value="{{__('send')}}"></span>
                    </div>
                </form>
            </div>

            <div class="col-xs-12 col-sm-4">
                <div class="box black-box text-center">
                    <h3 class="main-heading">{{__('contact details')}}</h3>

                    <p><i class="fa fa-envelope-o right-fa"></i> Info@pmstu.com</p>
                    <p><i class="fa fa-phone right-fa"></i> 0123456789</p>
                </div>
                <div class="box black-box text-center">
                    <h3 class="main-heading"> {{__('contact us')}}</h3>

                    <form>
                        <input type="email" placeholder="{{__('e-mail')}}">
                        <div class="btn btn-white btn-block">
                            <span><input type="submit" value="{{__('contact us')}}"></span>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

@push('script')
<script src="{{asset('assets/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script>
    $(document).ready(function (){
        $('.check-open').slideUp(0);

        $('.main-label .checkbox-holder').click(function (){
            if($(this).find('input').is(':checked')) {
                $(this).parents('.main-label').next('.check-open').stop().slideDown();
            } else {
                $(this).parents('.main-label').next('.check-open').stop().slideUp();
            }
        });
    });
</script>
<script src="{{asset('assets/js/script.js')}}"></script>

@endpush
