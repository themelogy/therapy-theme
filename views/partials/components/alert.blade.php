<div class="alert alert-{{ $alert ?? 'secondary' }} alert-dismissible fade show" role="alert">
    {!! $slot !!}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>