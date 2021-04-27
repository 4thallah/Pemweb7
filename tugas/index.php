<!DOCTYPE html> 
<html>
    <head>
        <title>Tugas Form Input</title>
        <!-- CSS untuk mengatur style form -->
        <style type="text/css">
        body {background : url('bg1.jpg');background-size: cover;background-attachment: fixed;}
        table {background: transparent;
        text-align: center;
        padding: 30px 35px;}
        h2{
        background-color: grey;
        padding: 30px 40px;
        text-align:center;
        color: white;
        }
        button  {background-color: yellow;}
        </style>
    </head>
    <body>
        <!-- Form untuk mendapat input data -->
        <form method="POST" action="ceklogin.php">
            <table align="center" border="1" cellpadding="0" cellspacing="0">
            <tr align="center"><td><h2>LOGIN</h2></td></tr>    
            <tr>
            <td>
            <table cellspacing="10">
                <tr><td>USERNAME</td><td>
                    <input type="text" name="username" required=""></td></tr>
                <tr><td>PASSWORD</td><td>
                    <input type="text" name="password" required=""></td></tr>
                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN</tr>
            </table>
            </td>
            </tr>
</table></form></body></html>