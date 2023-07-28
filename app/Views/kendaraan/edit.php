<!DOCTYPE html>
<html>
<head>
    <title>Edit Kendaraan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            margin-bottom: 20px;
        }
        form label {
            display: block;
            margin-bottom: 5px;
        }
        form input {
            padding: 5px;
            margin-bottom: 10px;
        }
        button[type="submit"] {
            padding: 15px 30px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Edit Kendaraan</h1>
    <form action="/kendaraan/update/<?= $kendaraan['id_kendaraan'] ?>" method="post">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" value="<?= $kendaraan['nama'] ?>" required><br>

        <label for="nim">NIM:</label>
        <input type="text" name="nim" value="<?= $kendaraan['nim'] ?>" required><br>

        <label for="brand">Brand:</label>
        <input type="text" name="brand" value="<?= $kendaraan['brand'] ?>" required><br>

        <label for="stnk">STNK:</label>
        <input type="text" name="stnk" value="<?= $kendaraan['stnk'] ?>" required><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
