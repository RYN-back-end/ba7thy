@extends('Admin.layout.inc.app')
@section('routes')
    <li class="breadcrumb-item active" aria-current="page"> بيانات Meta للصفحات</li>
@endsection
@section('content')

    <div class="card">
        {!! indexButtons(' بيانات Meta للصفحات') !!}
        <div class="card-body">
            <!-- data table -->
            <table id="dataTable" class="table myDataTable align-middle custom-table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>اسم الصفحة</th>
                    <th>العنوان</th>
                    <th>الوصف</th>
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
            {data: 'page_name', name: 'page_name'},
            {data: 'title_ar', name: 'title_ar'},
            {data: 'desc_ar', name: 'desc_ar'},
            {data: 'actions', name: 'actions'},
        ];
    </script>
    @include('Admin.layout.inc.ajax',['url'=>'meta','modalSize'=>'fullscreen'])
@endsection
