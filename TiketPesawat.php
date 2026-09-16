<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiket Online Jakarta - Malaysia</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white;
            margin: 40px;
        }

        .container {
            width: 600px;
            margin: auto;
            border: 1px solid black;
            padding: 25px;
        }

        h2 {
            text-align: left;
            margin-top: 0;
        }

        .form-group {
            display: flex;
            margin-bottom: 15px;
        }

        .label {
            width: 150px;
        }

        input[type="text"],
        select {
            width: 220px;
            padding: 5px;
        }

        .kelas {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .button {
            margin-top: 15px;
        }

        button {
            padding: 7px 20px;
            margin-right: 10px;
            cursor: pointer;
        }

        .hasil {
            margin-top: 25px;
            border-top: 1px solid black;
            padding-top: 15px;
        }

        .total {
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>

<body>

<div class="container">

   
    <h3>Tiket Online Jakarta - Malaysia</h3>

    <form method="POST">

        <!-- Nama -->
        <div class="form-group">
            <div class="label">Nama</div>
            <div>
                <input type="text" name="nama" required>
            </div>
        </div>

        <!-- Kode Pesawat -->
        <div class="form-group">
            <div class="label">Pilih Kode Pesawat</div>
            <div>
                <select name="pesawat">
                    <option value="GAR">GAR</option>
                    <option value="AIR">AIR</option>
                    <option value="MAL">MAL</option>
                </select>
            </div>
        </div>

        <!-- Kelas -->
        <div class="form-group">
            <div class="label">Pilih Kelas</div>

            <div class="kelas">
                <label>
                    <input type="radio" name="kelas" value="Eksekutif" required>
                    Eksekutif
                </label>

                <label>
                    <input type="radio" name="kelas" value="Bisnis">
                    Bisnis
                </label>

                <label>
                    <input type="radio" name="kelas" value="Ekonomi">
                    Ekonomi
                </label>
            </div>
        </div>

        <!-- Jumlah Tiket -->
        <div class="form-group">
            <div class="label">Jumlah Tiket</div>

            <div>
                <select name="jumlah">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
        </div>

        <!-- Tombol -->
        <div class="button">
            <button type="submit" name="simpan">SIMPAN</button>
            <button type="reset">BATAL</button>
        </div>

    </form>

    <?php

    if (isset($_POST['simpan'])) {

        $nama = $_POST['nama'];
        $pesawat = $_POST['pesawat'];
        $kelas = $_POST['kelas'];
        $jumlah = $_POST['jumlah'];

        // Harga tiket berdasarkan kelas
        if ($kelas == "Eksekutif") {
            $harga = 2500000;
        } elseif ($kelas == "Bisnis") {
            $harga = 1800000;
        } else {
            $harga = 1200000;
        }

        // Menghitung total
        $total = $harga * $jumlah;

        echo "<div class='hasil'>";

        echo "<p><b>Nama:</b> $nama</p>";
        echo "<p><b>Kode Pesawat:</b> $pesawat</p>";
        echo "<p><b>Kelas:</b> $kelas</p>";
        echo "<p><b>Harga Tiket:</b> Rp " . number_format($harga, 0, ',', '.') . "</p>";
        echo "<p><b>Jumlah Tiket:</b> $jumlah</p>";

        echo "<p class='total'>";
        echo "Total Bayar = Rp " . number_format($total, 0, ',', '.');
        echo "</p>";

        echo "</div>";
    }

    ?>

</div>

</body>
</html>