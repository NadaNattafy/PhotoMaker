@extends('admin.layout.master')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="mt-0 header-title">Setting</h4>

                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <h2>Edit Setting</h2>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('admin.setting.index') }}"> Back</a>
                            </div>
                        </div>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('admin.setting.update', $setting->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        @method('PUT')
                        <div class="row">
                            {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    <input type="text" name="name" value="{{ $setting->name }}" class="form-control"
                                        placeholder="Name">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Type:</strong>
                                    <input type="text" name="value" value="{{ $setting->type }}" class="form-control"
                                        placeholder="type">
                                </div>
                            </div> --}}

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Value:</strong>

                                    @if ($setting->type == 'textarea')
                                    <textarea class="form-control" id="summary-ckeditor" name="value" value="{{ $setting->value }}">
                                    </textarea>
                                    @elseif($setting->type == 'text')
                                        <input type="file" name="value" value="{{ $setting->value }}" class="form-control"
                                            placeholder="value">

                                    @elseif($setting->type == 'url')
                                        <input type="text" name="value" value="{{ $setting->value }}" class="form-control"
                                            placeholder="value">

                                    @elseif($setting->type == 'number')
                                        <input type="text" name="value" value="{{ $setting->value }}" class="form-control"
                                            placeholder="value">

                                    @elseif($setting->type == 'email')
                                        <input type="text" name="value" value="{{ $setting->value }}" class="form-control"
                                            placeholder="value">

                                    @elseif($setting->type == 'img')
                                        <input type="file" name="value" value="{{ $setting->value }}"
                                            class="form-control" placeholder="value">

                                </div>
                            </div>

                            @endif

                            @if (session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                </div>
                            @endif

                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        </form>

    @endsection

    @push('script')

<script src="{{ asset('_dashboard/assets/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('_dashboard/assets/vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
CKEDITOR.replace( 'summary-ckeditor' );
</script>

    <script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>


@endpush
