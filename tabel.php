
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Manajemen Barang</title>
</head>
<body>
    <form action="Jurnal3.php" method="GET">
    <h1>Daftar Barang Toko</h1>
    
    <!-- Tabel Daftar Barang -->
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($barang as $item): ?>
            <tr>
                <td><?php echo $item['id']; ?></td>
                <td><?php echo $item['nama']; ?></td>
                <td><?php echo $item['kategori']; ?></td>
                <td><?php echo $item['harga']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $item['id']; ?>">Edit</a> | 
                    <a href="?delete=<?php echo $item['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus barang ini?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h2>Tambah Barang Baru</h2>
    <!-- Form untuk menambahkan barang -->
    <form action="" method="POST">
        <label for="nama_barang">Nama Barang:</label>
        <input type="text" name="nama_barang" required><br>

        <label for="kategori_barang">Kategori Barang:</label>
        <input type="text" name="kategori_barang" required><br>

        <label for="harga_barang">Harga Barang:</label>
        <input type="number" name="harga_barang" required><br>

        <button type="submit" name="add_barang">Tambah Barang</button>
    </form>

    <h2>Edit Barang</h2>
    <!-- Form untuk mengedit barang -->
    <form action="" method="POST">
        <label for="id_barang">ID Barang:</label>
        <input type="number" name="id_barang" required><br>

        <label for="nama_barang">Nama Barang:</label>
        <input type="text" name="nama_barang" required><br>

        <label for="kategori_barang">Kategori Barang:</label>
        <input type="text" name="kategori_barang" required><br>

        <label for="harga_barang">Harga Barang:</label>
        <input type="number" name="harga_barang" required><br>

        <button type="submit" name="edit_barang">Edit Barang</button>
    </form>

</body>
</html>