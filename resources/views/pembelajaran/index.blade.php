<!-- resources/views/pembelajaran/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Pembelajaran</title>
    <!-- Tag <title> harus berada di dalam tag <head> -->

    <style>
         table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
            }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        /* Style untuk form */
        form {
            margin-bottom: 20px;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }

        button[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <!-- Menampilkan notifikasi jika ada -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Tampilkan data dalam tabel -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Semester</th>
                <th>Mata Kuliah</th>
                <th>Materi</th>
                <th>Sistem</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pembelajarans as $pembelajaran)
                <tr>
                    <td>{{ $pembelajaran->id }}</td>
                    <td>{{ $pembelajaran->semester }}</td>
                    <td>{{ $pembelajaran->mata_kuliah }}</td>
                    <td>{{ $pembelajaran->materi }}</td>
                    <td>{{ $pembelajaran->sistem }}</td>
                    <td>
                        <a href="/pembelajaran/{{ $pembelajaran->id }}/edit">Edit</a>
                        <form action="/pembelajaran/{{ $pembelajaran->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
