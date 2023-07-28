
<body style="font-family: Arial, sans-serif;">
    <h1  style="margin-bottom: 20px;">Tambah Kendaraan</h1>
    <form action="/kendaraan/store" method="post">
        <label for="nama" style="display: block; margin-bottom: 5px;">Nama:</label>
        <input type="text" name="nama" style="padding: 5px; margin-bottom: 10px;" required><br>

        <label for="nim" style="display: block; margin-bottom: 5px;">NIM:</label>
        <input type="text" name="nim" style="padding: 5px; margin-bottom: 10px;" required><br>

        <label for="brand" style="display: block; margin-bottom: 5px;">Brand:</label>
        <input type="text" name="brand" style="padding: 5px; margin-bottom: 10px;" required><br>

        <label for="stnk" style="display: block; margin-bottom: 5px;">STNK:</label>
        <input type="text" name="stnk" style="padding: 5px; margin-bottom: 10px;" required><br>

        <button type="submit" style="padding: 10px 20px; background-color: #007bff; color: #fff; border: none; cursor: pointer;">Simpan</button>
    </form>
