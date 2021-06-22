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
                                <h2> Show Company</h2>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('admin.company.index') }}"> Back</a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Name:</strong>
                                {{ $company->name }}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Category:</strong>
                            {{ $company->category }}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Mobile:</strong>
                        {{ $company->mobile }}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    {{ $company->email }}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Service Name:</strong>
                @foreach ($company->Services as $companyservice)
                {{ $company->name}}
                @endforeach
            </div>
        </div>

    </div>
    </div>
    </div>
    </div>
@endsection
