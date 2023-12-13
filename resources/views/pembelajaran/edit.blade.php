<!-- resources/views/pembelajaran/edit.blade.php -->

<form action="/pembelajaran/{{ $pembelajaran->id }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="semester" value="{{ $pembelajaran->semester }}">
    <input type="text" name="mata_kuliah" value="{{ $pembelajaran->mata_kuliah }}">
    <input type="text" name="materi" value="{{ $pembelajaran->materi }}">
    <select name="sistem">
        <option value="Online" @if($pembelajaran->sistem == 'Online') selected @endif>Online</option>
        <option value="Offline" @if($pembelajaran->sistem == 'Offline') selected @endif>Offline</option>
    </select>
    <button type="submit">Update</button>
</form>
