<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan Makanan dan Minuman</title>
</head>
<body>
    <form action="latihan2.php" method="GET">
        <!-- Tabel List Makanan -->
        <table border="1px" width="330px">
            <tr>
                <td>List Makanan</td>
                <td>:</td>
                <td>Harga</td>
            </tr>
            <tr>
                <td>Ayam</td>
                <td>:</td>
                <td>15000</td>
            </tr>
            <tr>
                <td>Ikan</td>
                <td>:</td>
                <td>12000</td>
            </tr>
            <tr>
                <td>Nasi Goreng</td>
                <td>:</td>
                <td>15000</td>
            </tr>
            <tr>
                <td>Mie Goreng</td>
                <td>:</td>
                <td>13000</td>
            </tr>
        </table>
        <br>

        <!-- Tabel List Minuman -->
        <table border="1px" width="330px">
            <tr>
                <td>List Minuman</td>
                <td>:</td>
                <td>Harga</td>
            </tr>
            <tr>
                <td>Es Jeruk</td>
                <td>:</td>
                <td>5000</td>
            </tr>
            <tr>
                <td>Es Teh</td>
                <td>:</td>
                <td>3000</td>
            </tr>
            <tr>
                <td>Air Mineral</td>
                <td>:</td>
                <td>3000</td>
            </tr>
            <tr>
                <td>Kopi</td>
                <td>:</td>
                <td>3000</td>
            </tr>
        </table>
        <br>

        <!-- Form Input -->
        <table border="1px">
            <tr>
                <td>Makanan</td>
                <td>:</td>
                <td>
                    <input type="text" name="makanan" placeholder="Masukan makanan yang dipilih" />
                </td>
            </tr>
            <tr>
                <td>Jumlah Makanan</td>
                <td>:</td>
                <td>
                    <input type="number" name="jumlahMakanan" placeholder="Masukan jumlah makanan" />
                </td>
            </tr>
            <tr>
                <td>Minuman</td>
                <td>:</td>
                <td>
                    <input type="text" name="minuman" placeholder="Masukan minuman yang dipilih" />
                </td>
            </tr>
            <tr>
                <td>Jumlah Minuman</td>
                <td>:</td>
                <td>
                    <input type="number" name="jumlahMinuman" placeholder="Masukan jumlah minuman" />
                </td>
            </tr>
        </table>
        <br>
        <input type="submit" value="Kirim" />
    </form>
</body>
</html>

