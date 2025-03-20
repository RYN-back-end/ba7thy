@extends('Admin.layout.inc.app')
@section('styles')
    <link href="{{url('assets/default/dropify/dropify.min.css')}}" rel="stylesheet">
@endsection
@section('routes')
    <li class="breadcrumb-item active" aria-current="page"> {{helperTrans('admin.steps')}}</li>
@endsection
@section('content')

    <div class="card">
        {!! indexButtons(helperTrans('admin.steps'),helperTrans('admin.new step')) !!}
        <div class="card-body">
            <!-- data table -->
            <table id="dataTable" class="table myDataTable align-middle custom-table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>{{helperTrans('admin.image')}}</th>
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
    <script src="{{url('assets/default/dropify/dropify.min.js')}}"></script>
    <script>

        var columns = [
            {"data": 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
            {data: 'image', name: 'image'},
            {data: 'title_ar', name: 'title_ar'},
            {data: 'created_at', name: 'created_at'},
            {data: 'actions', name: 'actions'},
        ];
    </script>
    @include('Admin.layout.inc.ajax',['url'=>'steps','modalSize'=>'fullscreen'])
@endsection
