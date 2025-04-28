@extends('Admin.layout.inc.app')
@section('routes')
    <li class="breadcrumb-item active" aria-current="page"> {{helperTrans('admin.our questions')}}</li>
@endsection
@section('content')

    <div class="card">
        {!! indexButtons(helperTrans('admin.our articles'),helperTrans('admin.add question')) !!}
        <div class="card-body">
            <!-- data table -->
            <table id="dataTable" class="table myDataTable align-middle custom-table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>{{helperTrans('admin.title')}}</th>
                    <th>{{helperTrans('admin.desc')}}</th>
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
            {data: 'title_ar', name: 'title_ar'},
            {data: 'desc_ar', name: 'desc_ar'},
            {data: 'created_at', name: 'created_at'},
            {data: 'actions', name: 'actions'},
        ];
    </script>
    @include('Admin.layout.inc.ajax',['url'=>'questions','modalSize'=>'fullscreen'])
@endsection
