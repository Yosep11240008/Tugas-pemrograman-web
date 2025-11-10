<html>
<head>
<title>11230061 - Website Pribadi</title>
</head>
<body bgcolor = #d4f9ff>

<table border='1' width='100%' cellspacing='0' cellpadding='0'>
<tr height='130'> <td colspan='3'><img src='images/header1.png' width='100%' height='200'></td> </tr>
<tr height='400'> 
<td width='150' valign='top'>
<table border='1' width='100%' cellspacing='0' cellpadding='0'>
<tr bgcolor='#00d9ff'> <td align='center'><b>MENU</b></td> </tr>
<tr> <td><a href='index.php'><img src='images/home.png' width='14' height='14'>Beranda</a></td> </tr>
<tr> <td><a href='index.php?menu=profil'><img src='images/profil.jpg' width='14' height='14'>Profil</a></td> </tr>
<tr> <td><a href='index.php?menu=cv'><img src='images/cv.png' width='14' height='14'>CV</a></td> </tr>
<tr> <td><a href='index.php?menu=galeri'><img src='images/galeri.png' width='14' height='14'>Galeri</a></td> </tr>
</table>
</td>

<td align='center'>

<?php
if (isset($_GET['menu'])) {
    if ($_GET['menu'] == 'cv') {
        include 'cv.html';
    }
    elseif ($_GET['menu'] == 'profil') {
        include 'profil.html';
    }
    elseif ($_GET['menu'] == 'galeri') {
        include 'galeri.html';
    }
    else {
        echo "SELAMAT DATANG";
    }
} else {
    echo "SELAMAT DATANG";
}
?>

</td>
</tr>

<tr> <td colspan='3' height='60'><img src='images/footer1.png' width='100%' height='60'></td> </tr>
</table>

</body>
</html>
