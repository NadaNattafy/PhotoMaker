@extends('admin.layout.master')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="mt-0 header-title">Company</h4>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Company</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('admin.company.index') }}"> Back</a>
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

<form action="{{ route('admin.company.update',$company->id) }}" method="POST" enctype="multipart/form-data">
    @csrf

    @method('PUT')
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" value="{{ $company->name }}" class="form-control" placeholder="Name">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Category:</strong>
                <input type="text" name="category" value="{{ $company->category }}" class="form-control" placeholder="Category">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mobile:</strong>
                <input type="text" name="mobile" value="{{ $company->mobile }}" class="form-control" placeholder="Mobile">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" name="email" value="{{ $company->email }}" class="form-control" placeholder="Email">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Service Name:</strong>
                <input type="text" name="servicename" value="{{ $company->servicename }}" class="form-control" placeholder="Service Name">
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

