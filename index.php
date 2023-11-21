<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Register Tiket Pesawat</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="kotak">
        <h1>FORM PEMBELIAN TIKET PESAWAT</h1>
        <form method="post" action="proses_input.php">
            <label for="username">Username :</label>
            <input type="text" name="username" id="username" maxlength="20" class="form-input" required><br>

            <label for="password">Password :</label>
            <input type="password" name="password" id="password" maxlength="20" class="form-input" required><br>

            <label for="tanggalBerangkat">Tanggal Berangkat :</label>
            <input type="date" name="tanggalBerangkat" id="tanggalBerangkat" maxlength="20" class="form-input" required><br>
            
            Maskapai Penerbangan :
                <select name="maskapaiPenerbangan">
                    <option value="Garuda Indonesia" selected>Garuda Indonesia</option>
                    <option value="Lion Air">Lion Air</option>
                    <option value="CityLink">CityLink</option>
                    <option value="Batik Air">Batik Air</option>
                </select>
            <br><br>

            <label for="tujuan">Tujuan :</label>
            <input type="text" name="tujuan" id="tujuan" maxlength="20" class="form-input" required><br>


            <label for="jumlahTiket">Jumlah Tiket :</label>
            <input type="number" name="jumlahTiket" id="jumlahTiket" maxlength="20" class="form-input" required><br>

            <button type="submit" id="btn-kirim">Kirim Pemesanan</button>
        </form>
    </div>

</body>

</html>