<form action="{{ route('events.update', $event->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ $event->title }}">
    <textarea name="description">{{ $event->description }}</textarea>
    <input type="number" name="capacity" value="{{ $event->capacity }}">
    <input type="datetime-local" name="startEventAt" value="{{ \Carbon\Carbon::parse($event->startEventAt)->format('Y-m-d\TH:i') }}">
    <input type="datetime-local" name="endEventAt" value="{{ \Carbon\Carbon::parse($event->endEventAt)->format('Y-m-d\TH:i') }}">
    <button type="submit">Update</button>
</form>
