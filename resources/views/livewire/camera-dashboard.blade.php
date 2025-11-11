<div>
    <h2>Dashboard: {{ $instance->name }}</h2>
    @foreach($instance->cameras as $camera)
        <div>
            <h4>{{ $camera->label }}</h4>
            <video width="480" height="320" controls autoplay muted>
                <source src="{{ url('hls/' . $camera->id . '.m3u8') }}" type="application/x-mpegURL">
            </video>
        </div>
    @endforeach
</div>
