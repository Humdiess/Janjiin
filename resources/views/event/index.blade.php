<h1>ini event index</h1>

@foreach ($events as $event)
    <div>
        <a href="{{ route('event.showevent.show', $event->slug) }}">
            <h2>{{ $event->title }}</h2>
        </a>
        <h2>{{ $event->title }}</h2>
        <p>{{ $event->description }}</p>
    </div>
@endforeach