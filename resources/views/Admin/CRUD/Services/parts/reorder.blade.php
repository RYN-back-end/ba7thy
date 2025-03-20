<form class="row g-3" action="{{route('services.reorder')}}" id="form" enctype="multipart/form-data" method="POST">
    @csrf
    <ul id="sortable">
        @foreach ($services as $service)
            <li data-service-id="{{ $service->id }}" style="padding: 10px;background-color: #d7d7d7;margin-bottom: 3px;border-radius: 10px">
                {{ $service->title }}
                <input type="hidden" name="positions[{{ $service->id }}]" value="{{ $service->position }}">
            </li>
        @endforeach
    </ul>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
    </div>
</form>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $(function () {
        $("#sortable").sortable({
            update: function(event, ui) {
                var positions = {};
                $("#sortable li").each(function(index) {
                    var serviceId = $(this).data('service-id');
                    positions[serviceId] = index + 1;
                });
                $.ajax({
                    url: '{{route('services.reorder')}}',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        positions: positions
                    },
                    success: function(response) {
                        my_toaster("تم تغيير الترتيب بنجاح", 'success')
                        $('#dataTable').DataTable().ajax.reload(null, false);
                        console.log(response);
                    },
                    error: function(xhr) {
                        console.log('Error occurred.');
                    }
                });
            }
        });
    });
</script>
