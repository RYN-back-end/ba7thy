@extends('Admin.layout.inc.app')
@section('styles')
    <link href="{{url('assets/default/dropify/dropify.min.css')}}" rel="stylesheet">
@endsection
@section('routes')
    <li class="breadcrumb-item active" aria-current="page"> {{helperTrans('admin.Services')}}</li>
@endsection
@section('content')

    <div class="card">
        {!! indexButtons(helperTrans('admin.Services')) !!}
        <div class="text-center">
            <a href="{{route('services.create')}}" class="btn btn-primary ">إضافة خدمة</a>
        </div>
        <button style="width: 200px;margin: 0 5px" class="btn btn-secondary"
                id="edit_position">ترتيب الخدمات</button>
        <div class="card-body">
            <!-- data table -->
            <table id="dataTable" class="table myDataTable align-middle custom-table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>{{helperTrans('admin.title')}}</th>
                    <th>الترتيب</th>
                    <th>{{helperTrans('admin.image')}}</th>
                    <th>{{helperTrans('admin.created at')}}</th>
                    <th>{{helperTrans('admin.actions')}}</th>
                </tr>
                </thead>
            </table>
        </div>
        <!-- modal -->
        <div class="modal fade" id="positionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">ترتيب ظهور الخدمات</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="positionModalBody">

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <script src="{{url('assets/default/dropify/dropify.min.js')}}"></script>
    <script src="https://cdn.ckeditor.com/4.20.2/full/ckeditor.js"></script>
    <script>

        var columns = [
            {"data": 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
            {data: 'title', name: 'title'},
            {data: 'position', name: 'position'},
            {data: 'image', name: 'image'},
            {data: 'created_at', name: 'created_at'},
            {data: 'actions', name: 'actions'},
        ];
    </script>
    @include('Admin.layout.inc.ajax',['url'=>'services','modalSize'=>'fullscreen'])
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(document).on('click', '#edit_position', function () {
            $('#positionModalBody').html(loader_form)
            $('#positionModal').modal('show')
            var url = "{{route("editServicesPosition")}}";
            setTimeout(function () {
                $('#positionModalBody').load(url)
            }, 1000)
        });
    </script>
@endsection
