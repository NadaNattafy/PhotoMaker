@extends('admin.layout.master')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="mt-0 header-title">Company</h4>
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                         {{ session()->get('message') }}
                    </div>
                    @endif

                    <table id="datatable" class="table table-bordered dt-responsive nowrap">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Service Name</th>
                            <th>Actions</th>
                        </tr>
                        </thead>

                        <tbody>

                            @foreach ($company as $company)

                            <tr>
                                <td>{{$company-> name}}</td>
                                <td>{{$company-> category}}</td>
                                <td>{{$company-> mobile}}</td>
                                <td>{{$company-> email}}</td>
                                <td>
                            @foreach ($company->Services as $companyservice)
                                        <li>{{$companyservice->name}} : {{$companyservice->pivot->value}}</li>
                            @endforeach
                                </td>

                                <td>
                                    <a class="btn btn-info" href="{{ route('admin.company.show',$company->id) }}">Show</a>
                                    {{-- <a class="btn btn-primary" href="{{ route('admin.company.edit',$company->id) }}">Edit</a> --}}
                                    <a class="btn btn-primary" href={{ route ("admin.contact.create",$company->id)}}>Replay</a>

                                    <form action="{{ route('admin.company.destroy',$company->id) }}" method="POST">

                                       @csrf
                                       @method('DELETE')
                                       <button type="submit" class="btn btn-danger">Delete</button>
                                   </form>
                               </td>

                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('script')

  <!-- Vendor js -->

  <script src="{{asset('_dashboard/assets/js/vendor.min.js')}}"></script>
  <!-- third party js -->
  <script src="{{asset('_dashboard/assets/libs/datatables/dataTables.bootstrap4.js')}}"></script>
  <script src="{{asset('_dashboard/assets/libs/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('_dashboard/assets/libs/datatables/dataTables.responsive.min.js')}}"></script>
  <script src="{{asset('_dashboard/assets/libs/datatables/responsive.bootstrap4.min.js')}}"></script>
  <script src="{{asset('_dashboard/assets/libs/datatables/dataTables.buttons.min.js')}}"></script>
  <script src="{{asset('_dashboard/assets/libs/datatables/buttons.bootstrap4.min.js')}}"></script>
  <script src="{{asset('_dashboard/assets/libs/datatables/buttons.html5.min.js')}}"></script>
  <script src="{{asset('_dashboard/assets/libs/datatables/buttons.flash.min.js')}}"></script>
  <script src="{{asset('_dashboard/assets/libs/datatables/buttons.print.min.js')}}"></script>
  <script src="{{asset('_dashboard/assets/libs/datatables/dataTables.keyTable.min.js')}}"></script>
  <script src="{{asset('_dashboard/assets/libs/datatables/dataTables.select.min.js')}}"></script>
  <script src="{{asset('_dashboard/assets/libs/pdfmake/pdfmake.min.js')}}"></script>
  <script src="{{asset('_dashboard/assets/libs/pdfmake/vfs_fonts.js')}}"></script>
  <!-- third party js ends -->

  <!-- Datatables init -->
  <script src="{{asset('_dashboard/assets/js/pages/datatables.init.js')}}"></script>

  <!-- App js -->
  <script src="{{asset('_dashboard/assets/js/app.min.js')}}"></script>

@endpush
