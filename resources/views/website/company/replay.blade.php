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
            <h2>Send Email</h2>
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

@if(session()->has('message'))
                    <div class="alert alert-success">
                         {{ session()->get('message') }}
                    </div>
                    @endif

@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
 <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
</div>
@endif
<form method="POST" action="{{ route('admin.email.send') }}">
 {{ csrf_field() }}
 <div class="form-group">

 <div class="form-group">
  <label>Enter Message</label>
  <textarea name="message" class="form-control"></textarea>
 </div>
 <input  name="company_id" value="{{$item->id}}" hidden>
 <div class="form-group">
  <input type="submit" name="send" class="btn btn-info" value="Send" />
 </div>


    </div>
</div>
</div>
</div>
</form>

@endsection

