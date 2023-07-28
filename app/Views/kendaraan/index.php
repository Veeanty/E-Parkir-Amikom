<h1>Daftar Kendaraan</h1>
<a href="/kendaraan/create">Tambah Kendaraan</a>
<table border="1" style="width: 100%; border-collapse: collapse;">
    <thead>
        <tr>
            <th style="padding: 10px;">ID</th>
            <th style="padding: 10px;">Nama</th>
            <th style="padding: 10px;">NIM</th>
            <th style="padding: 10px;">Brand</th>
            <th style="padding: 10px;">STNK</th>
            <th style="padding: 10px;">Tanggal Keluar</th>
            <th style="padding: 10px;">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($kendaraan as $row): ?>
            <tr>
                <td style="padding: 10px;"><?= $row['id_kendaraan'] ?></td>
                <td style="padding: 10px;"><?= $row['nama'] ?></td>
                <td style="padding: 10px;"><?= $row['nim'] ?></td>
                <td style="padding: 10px;"><?= $row['brand'] ?></td>
                <td style="padding: 10px;"><?= $row['stnk'] ?></td>
                <td style="padding: 10px;"><?= $row['tanggal_keluar'] ?></td>
                <td style="padding: 10px;">
                    <a href="/kendaraan/edit/<?= $row['id_kendaraan'] ?>" style="text-decoration: none; color: blue;">Edit</a>
                    <a href="/kendaraan/delete/<?= $row['id_kendaraan'] ?>" style="text-decoration: none; color: red;">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
