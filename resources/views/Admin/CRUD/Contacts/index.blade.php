@extends('Admin.layout.inc.app')
@section('styles')
@endsection
@section('routes')
    <li class="breadcrumb-item active" aria-current="page"> {{helperTrans('admin.Connect us')}}</li>
@endsection
@section('content')

    <div class="card">
        <div class="card-body">
            <!-- data table -->
            <table id="dataTable" class="table myDataTable align-middle custom-table">
                <thead>
                <tr class="child">
                    <th>#</th>
                    <th>{{helperTrans('admin.name')}}</th>
                    <th>{{helperTrans('admin.email')}}</th>
                    <th>{{helperTrans('admin.phone')}}</th>
                    <th>{{helperTrans('web.Specialization')}}</th>
                    <th>{{helperTrans('web.service type')}}</th>
                    <th>{{helperTrans('admin.message')}}</th>
                    <th>{{helperTrans('admin.created at')}}</th>
                    <th>{{helperTrans('admin.actions')}}</th>
                </tr>
                </thead>
            </table>
        </div>
        <style>
            .child{
                padding: 8px 4px 24px !important;
                white-space: pre-line !important;
                word-wrap: break-word !important;
                max-width: 100px !important;
            }
        </style>
        <!-- modal -->
    </div>

@endsection
@section('scripts')
    <script>
        var columns = [
            {"data": 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'phone', name: 'phone'},
            {data: 'major_id', name: 'major_id'},
            {data: 'services_type_id', name: 'services_type_id'},
            {data: 'message', name: 'message'},
            {data: 'created_at', name: 'created_at'},
            {data: 'actions', name: 'actions'},
        ];
    </script>
    @include('Admin.layout.inc.ajax',['url'=>'contacts'])
@endsection
