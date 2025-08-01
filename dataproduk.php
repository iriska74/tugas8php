<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Produk Toko</title>
</head>
<body>
    <h2>Daftar Produk</h2>

    <form method="GET">
        <label>Filter Kategori: </label>
        <select name="kategori">
            <option value="">Semua</option>
            <option value="Elektronik">Elektronik</option>
            <option value="Pakaian">Pakaian</option>
            <option value="Buku">Buku</option>
        </select>
        <input type="submit" value="Filter">
    </form>

    <hr>

    <?php
    $query = "SELECT * FROM produk";
    if (isset($_GET['kategori']) && $_GET['kategori'] != "") {
        $kategori = mysqli_real_escape_string($conn, $_GET['kategori']);
        $query .= " WHERE kategori='$kategori'";
    }

    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div>";
        echo "<h3>" . $row['nama_produk'] . "</h3>";
        echo "<p>Harga: Rp" . number_format($row['harga']) . "</p>";
        echo "<p>Kategori: " . $row['kategori'] . "</p>";
        echo "</div><hr>";
    }
    ?>
</body>
</html>
