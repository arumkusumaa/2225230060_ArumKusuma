<!-- resources/views/pembelajaran/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pembelajaran</title>
    <style>
        body {
            font-family: Times New Roman, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }

        h1 {
            text-align: center;
        }

        form {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
            margin-top: 20px;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tambah Data Pembelajaran</h1>

        <!-- Form untuk menambahkan data -->
        <form action="/pembelajaran" method="POST">
            @csrf
            <input type="text" name="semester" placeholder="Semester">
            <input type="text" name="mata_kuliah" placeholder="Mata Kuliah">
            <input type="text" name="materi" placeholder="Materi">
            <select name="sistem">
                <option value="Online">Online</option>
                <option value="Offline">Offline</option>
            </select>
            <button type="submit">Tambah Data</button>
        </form>
    </div>
</body>
</html>
