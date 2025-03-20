@extends('Admin.layout.inc.app')
@section('styles')
@endsection
@section('routes')
    <li class="breadcrumb-item active" aria-current="page"> {{helperTrans('admin.Requests')}}</li>
@endsection
@section('content')

    <div class="card">
        <div class="row mt-3" style="padding: 10px">
            <div class="col-6 fs-5">
                <span class="text-success">
                    <i class="fa fa-whatsapp text-success"></i>
                    مرات الضغط علي زر واتساب {{($nums->whatsapp_clicks) ?? '-'}} مرة
                </span>
            </div>
            <div class="col-6 fs-5">
                <span class="text-primary">
                    <i class="fa fa-telegram text-primary"></i>
                    مرات الضغط علي زر تليجرام {{($nums->telegram_clicks) ?? '-'}} مرة
                </span>
            </div>

        </div>
        {!! indexButtons(helperTrans('admin.Requests')) !!}

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
