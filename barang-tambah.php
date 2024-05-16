<h3>Daftar Buku</h3>

<form action="" method="post">
    <table>
        <tr>
            <td>No Seri Buku</td>
            <td><input type="text" name="No_Seri_Buku"></td>
        </tr>
        <tr>
            <td>Judul Buku</td>
            <td><input type="text" name="Judul_Buku"></td>
        </tr>
        <tr>
            <td>Jumlah Halaman</td>
            <td><input type="text" name="Jumlah_Halaman"></td>
        </tr>
        <tr>
            <td>Penerbit</td>
            <td><input type="text" name="Penerbit"></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="text" name="Harga"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="masukkan" value="masukkan"></td>
        </tr>
    </table>
</form>

<?php
include ("Koneksi.php");

if(isset($_POST['masukkan'])){
    mysqli_query($Koneksi,"insert into daftar_buku set
    No_Seri_Buku = '$_POST[No_Seri_Buku]',
    Judul_Buku = '$_POST[Judul_Buku]',
    Jumlah_Halaman = '$_POST[Jumlah_Halaman]',
    Penerbit = '$_POST[Penerbit]',
    Harga = '$_POST[Harga]'");

    echo "Buku Telah Di Daftarkan";
}

?>


<h3>Daftar Buku</h3>

<table border="1">
    <tr>
        <td>No Seri Buku</td>
        <td>Judul Buku</td>
        <td>Jumlah Halaman</td>
        <td>Penerbit</td>
        <td>Harga</td>
    </tr>

    <?php
    include ("Koneksi.php");

    $no=1;
    $ambildata = mysqli_query($Koneksi, "select * from daftar_buku");
    while($tampil = mysqli_fetch_array($ambildata)){
        echo "<tr>;
        <td>$no</td>
        <td>$tampil[No_Seri_Buku]</td>
        <td>$tampil[Judul_Buku]</td>
        <td>$tampil[Jumlah_Halaman]</td>
        <td>$tampil[Penerbit]</td>
        <td>$tampil[Harga]</td>
        </tr>
        $no++";
    }
    ?>
</table>