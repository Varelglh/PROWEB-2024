<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pertandingan MMA</title>
</head>
<body>
    <form action="proses.php" method="GET">
        <table border="1px" width="330px">
            <tr>
                <td>List Petarung Tim A</td>
                <td>:</td>
                <td>Kekuatan</td>
            </tr>
            <tr>
                <td>Andre</td>
                <td>:</td>
                <td>80</td>
            </tr>
            <tr>
                <td>Berli</td>
                <td>:</td>
                <td>80</td>
            </tr>
            <tr>
                <td>Charlie</td>
                <td>:</td>
                <td>67</td>
            </tr>
            <tr>
                <td>Desmond</td>
                <td>:</td>
                <td>88</td>
            </tr>
            <tr>
                <td>Erina</td>
                <td>:</td>
                <td>95</td>
            </tr>
        </table>
        <br>

        <table border="1px" width="330px">
            <tr>
                <td>List Petarung Tim B</td>
                <td>:</td>
                <td>Kekuatan</td>
            </tr>
            <tr>
                <td>Farah</td>
                <td>:</td>
                <td>75</td>
            </tr>
            <tr>
                <td>Gerry</td>
                <td>:</td>
                <td>89</td>
            </tr>
            <tr>
                <td>Hesti</td>
                <td>:</td>
                <td>76</td>
            </tr>
            <tr>
                <td>Indra</td>
                <td>:</td>
                <td>61</td>
            </tr>
            <tr>
                <td>Jordan</td>
                <td>:</td>
                <td>96</td>
            </tr>
        </table>
        <br>

        <table border="1px">
            <tr>
                <td>Petarung Tim A</td>
                <td>:</td>
                <td>
                    <input type="text" name="petarungA" placeholder="Masukan petarung dari Tim A" required />
                </td>
            </tr>
            <tr>
                <td>Petarung Tim B</td>
                <td>:</td>
                <td>
                    <input type="text" name="petarungB" placeholder="Masukan petarung dari Tim B" required />
                </td>
            </tr>
        </table>
        <br>
        <input type="submit" value="Tanding" />
    </form>

