@extends('Admin.layout.inc.app')
@section('styles')
@endsection
@section('routes')
    <li class="breadcrumb-item active" aria-current="page"> {{helperTrans('admin.Requests')}}</li>
@endsection
@section('content')

    <div class="card">
        <div class="card-body">
            <!-- data table -->
            <table id="dataTable" class="table myDataTable align-middle custom-table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>{{helperTrans('admin.name')}}</th>
                    <th>{{helperTrans('admin.email')}}</th>
                    <th>{{helperTrans('admin.major')}}</th>
                    <th>{{helperTrans('admin.service type')}}</th>
                    <th>{{helperTrans('admin.date')}}</th>
                    <th>{{helperTrans('admin.text')}}</th>
                    <th>{{helperTrans('admin.created at')}}</th>
                    <th>{{helperTrans('admin.actions')}}</th>
                </tr>
                </thead>
            </table>
        </div>
        <!-- modal -->
    </div>

@endsection
@section('scripts')
    <script>
        var columns = [
            {"data": 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'major_id', name: 'major_id'},
            {data: 'services_type_id', name: 'services_type_id'},
            {data: 'date', name: 'date'},
            {data: 'text', name: 'text'},
            {data: 'created_at', name: 'created_at'},
            {data: 'actions', name: 'actions'},
        ];
    </script>
    @include('Admin.layout.inc.ajax',['url'=>'requests'])
@endsection
