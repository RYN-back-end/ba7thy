@extends('Admin.layout.inc.app')
@section('styles')
@endsection
@section('routes')
    <li class="breadcrumb-item active" aria-current="page"> {{helperTrans('admin.Majors')}}</li>
@endsection
@section('content')

    <div class="card">
        {!! indexButtons(helperTrans('admin.Majors'),helperTrans('admin.add Major')) !!}
        <div class="card-body">
            <!-- data table -->
            <table id="dataTable" class="table myDataTable align-middle custom-table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>{{helperTrans('admin.title')}}</th>
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
            {data: 'title', name: 'title'},
            {data: 'created_at', name: 'created_at'},
            {data: 'actions', name: 'actions'},
        ];
    </script>
    @include('Admin.layout.inc.ajax',['url'=>'majors'])
@endsection
