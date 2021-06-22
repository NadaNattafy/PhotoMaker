@extends('admin.layout.master')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="mt-0 header-title">Services</h4>
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                         {{ session()->get('message') }}
                    </div>
                    @endif

                    <table id="datatable" class="table table-bordered dt-responsive nowrap">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Name_En</th>
                            <th>Actions</th>
                        </tr>
                        </thead>


                        <tbody>
                            @foreach ( $services as $service)

                            <tr>
                                <td>{{$service -> name}}</td>
                                <td>{{$service -> name_en}}</td>

                                <td>
                                    <a class="btn btn-info" href="{{ route('admin.services.show',$service->id) }}">Show</a>
                                    <a class="btn btn-primary" href="{{ route('admin.services.edit',$service->id) }}">Edit</a>
                                    <form action="{{ route('admin.services.destroy',$service->id) }}" method="POST">

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
