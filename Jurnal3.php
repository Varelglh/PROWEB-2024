<?php
$barang = [
    ["id" => 1, "nama" => "buku", "kategori" => "alat tulis", "harga" => 20000], 
    ["id" => 2, "nama" => "Buku", "kategori" => "alat tulis", "harga" => 5000]
];

if (isset($_POST['create'])) {
    $id = end($barang)['id'] + 1; // Find the next ID based on the last ID in the array
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];
    $barang[] = ["id" => $id, "nama" => $nama, "kategori" => $kategori, "harga" => $harga];
}

if (isset($_POST['save'])) {
    $id = $_POST['id'];
    foreach ($barang as &$b) {
        if ($b['id'] == $id) {
            $b['nama'] = $_POST['nama'];
            $b['kategori'] = $_POST['kategori'];
            $b['harga'] = $_POST['harga'];
            break;
        }
    }
}

if (isset($_POST['delete'])) {
    $id = $_POST['delete'];
    foreach ($barang as $key => $b) {
        if ($b['id'] == $id) {
            unset($barang[$key]);
            $barang = array_values($barang); // Reindex the array
            break;
        }
    }
}

// Variables for edit mode
$editId = isset($_POST['edit_id']) ? $_POST['edit_id'] : '';
$editNama = isset($_POST['edit_nama']) ? $_POST['edit_nama'] : '';
$editKategori = isset($_POST['edit_kategori']) ? $_POST['edit_kategori'] : '';
$editHarga = isset($_POST['edit_harga']) ? $_POST['edit_harga'] : '';

?>

<form action="" method="POST">
    <input type="hidden" name="id" value="<?= $editId ?>">
    <label for="nama">Nama Barang:</label>
    <input type="text" id="nama" name="nama" value="<?= $editNama ?>" required><br>

    <label for="kategori">Kategori Barang:</label>
    <input type="text" id="kategori" name="kategori" value="<?= $editKategori ?>" required><br>

    <label for="harga">Harga Barang:</label>
    <input type="number" id="harga" name="harga" value="<?= $editHarga ?>" required><br>

    <input type="submit" name="<?= $editId !== '' ? 'save' : 'create' ?>" value="<?= $editId !== '' ? 'Simpan Perubahan' : 'Tambah Barang' ?>">
</form>

<?php
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Nama Barang</th><th>Kategori</th><th>Harga</th><th>Aksi</th></tr>";

foreach($barang as $b) {
    echo "<tr>";
    echo "<td>{$b['id']}</td>";
    echo "<td>{$b['nama']}</td>";
    echo "<td>{$b['kategori']}</td>";
    echo "<td>Rp " . number_format($b['harga'], 0, ',', '.') . "</td>";
    echo "<td>
        <form action='' method='POST' style='display:inline-block;'>
            <input type='hidden' name='delete' value='{$b['id']}'>
            <input type='submit' value='Hapus'>
        </form>
        <form action='' method='POST' style='display:inline-block;'>
            <input type='hidden' name='edit_id' value='{$b['id']}'>
            <input type='hidden' name='edit_nama' value='{$b['nama']}'>
            <input type='hidden' name='edit_kategori' value='{$b['kategori']}'>
            <input type='hidden' name='edit_harga' value='{$b['harga']}'>
            <input type='submit' name='edit' value='Edit'>
        </form>
    </td>";
    echo "</tr>";
}

echo "</table>";
?>