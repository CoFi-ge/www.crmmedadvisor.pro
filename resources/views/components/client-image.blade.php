<div class="taskEmployeeImg rounded-circle mr-1">
    <a href="{{ route('clients.show', $user->id) }}">
        <img data-toggle="tooltip" data-original-title="{{ $user->name }}"
            src="{{ $user->image_url }}">
    </a>
</div>
