@extends('admin.layout.master')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="mt-0 header-title">Customers</h4>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Customer</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('admin.customer.index') }}"> Back</a>
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

<form action="{{ route('admin.customer.update',$customer->id) }}" method="POST" enctype="multipart/form-data">
    @csrf

    @method('PUT')
     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <strong>Picture:</strong>
              <img src="{{url('/').'/storage/'.$customer-> picture}}" style="height: 50px; width:50px;">
              <input type="file" name="picture" class="w-20 mb-8 shadow-xl" alt="" src=<img src="{{asset("storage/photo->img")}}">
            </div>
        </div>

        @if(session()->has('message'))
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

