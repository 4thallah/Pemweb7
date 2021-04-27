<!DOCTYPE html> 
<html>
    <head>
        <title>Praktikum Form Input</title>
        <style type="text/css">
        body {background : url('bg2.jpg');background-size: cover;background-attachment: fixed;}
        table {background: transparent;
        text-align: center;
        padding: 30px 35px;}
        h2{
        background-color: white;
        padding: 30px 35px;
        text-align:center;
        color: black;
        }
        button  {background-color: white;}
        </style>
    </head>
    <body>
        <form method="POST" action="simpankontak.php">
            <table align="center" border="1" cellpadding="0" cellspacing="0">
            <tr align="center"><td><h2>KONTAK</h2></td></tr>    
            <tr>
            <td>
            <table cellspacing="10">
            <tr><td>NAMA</td><td><input type="text" name="nama"></td></tr>
            <tr><td>JENIS KELAMIN</td><td>
                <input type="radio" name="jenis_kelamin" value="L">Laki laki
                <input type="radio" name="jenis_kelamin" value="P">Perempuan
                </td></tr> 
                <tr><td>EMAIL</td><td><input type="text" name="email"></td></tr>
                <tr><td>ALAMAT</td><td><input type="text" name="alamat"></td></tr>
                <tr><td>KOTA</td><td><input type="text" name="kota"></td></tr>
                <tr><td>PESAN</td><td><input type="text" name="pesan"></td></tr>
                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN</tr>
            </table>
            </td>
            </tr>
            </table>
        </form>
    </body>
</html>