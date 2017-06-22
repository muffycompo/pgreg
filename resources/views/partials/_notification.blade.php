@if(session()->has('notification_message'))
    <div class="alert alert-{{ session()->get('notification_type') }} alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{ session()->get('notification_message') }}
    </div>
@endif
