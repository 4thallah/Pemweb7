<h2>List Kontak</h2>
<table border="1">
<tr><th>NO</th><th>NAMA</th><th>JENIS KELAMIN</th><th>EMAIL</th>
<th>ALAMAT</th><th>KOTA</th><th>PESAN</th>
<?php 
include 'koneksi.php';
$kontak = mysqli_query($koneksi, "SELECT * from kontak");
$no = 1;
foreach ($kontak as $row){
    $jenis_kelamin = $row['jkel']=='P'?'Perempuan':'Laki laki';
    // menampilkan isi tabel dalam database
    echo "<tr>
        <td>$no</td>
        <td>".$row['Nama']."</td>
        <td>".$jenis_kelamin."</td>
        <td>".$row['Email']."</td>
        <td>".$row['Alamat']."</td>
        <td>".$row['Kota']."</td>
        <td>".$row['Pesan']."</td>
    </tr>";
    $no++;
}
?>
<a href="tambahkontak.php">Tambah Kontak</a>
</table>