<?php 
    $db = mysqli_connect("localhost","root","","2106051_fairuz");
    if (!$db) {
        echo "<script>
                alert('database tidak terhubung')
            </script>";
    };

    $username = $_POST['username'];
    $password = $_POST['password'];
    $tanggalBerangkat = $_POST['tanggalBerangkat'];
    $maskapaiPenerbangan = $_POST['maskapaiPenerbangan'];
    $tujuan = $_POST['tujuan'];
    $jumlahTiket = $_POST['jumlahTiket'];



    $query = "INSERT INTO register VALUES(NULL,'$username','$password','$tanggalBerangkat','$maskapaiPenerbangan','$tujuan','$jumlahTiket')";
    mysqli_query($db,$query);
    echo "<script>alert('data berhasil ditambahkan')</script>";
    echo "<script>window.location='./index.php'</script>"
?>