<!-- resources/views/pembelajaran/create.blade.php -->

<form action="/pembelajaran" method="POST">
    @csrf
    <input type="text" name="semester" placeholder="Semester">
    <input type="text" name="mata_kuliah" placeholder="Mata Kuliah">
    <input type="text" name="materi" placeholder="Materi">
    <select name="sistem">
        <option value="Online">Online</option>
        <option value="Offline">Offline</option>
    </select>
    <button type="submit">Submit</button>
</form>
