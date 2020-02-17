<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body align="center" background= "C:\xampp\htdocs\devrestaurant\bck.jpg">
    <h1 align="center" class="judul" >DEVRESTAURANT</h1>
    <br>
    <br>
    <br>
    <br>
    

    
    <table border="1" width="70%" align="center">
    <tr>
        <th>no</th>
        <th >makanan</th>
        <th>minuman</th>
    </tr>

    <?php
    include "koneksi.php";
    $query = "select* from menu";
    $sql = mysqli_query($connect,$query);
    while($menu = mysqli_fetch_array($sql)){
        echo "<tr>";
        echo "<td>".$menu['no']."</td>";
        echo "<td>".$menu['makanan']."</td>";
        echo "<td>".$menu['minuman']."</td>";
    }
    ?>
    </table>

    <h1>masukkan 1 pesanan anda dibawah</h1>

    <form action="trims.php" method="get">
        <label for="makanan">makanan</label>
        <input type="text" name ="makanan" placeholder = "makanan" required>
        <p>
        <label for="minuman">minuman</label>
        <input type="text" name = "minuman" placeholder = "minuman" required>
        </p>
        <button type="submit">pesan</button>
    </form>

    
</body>
</html>