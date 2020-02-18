<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="trims.css">
</head>
<body >
    <br>
    <table  >
        <tr>
        <td>makanan : </td> <td><?php echo $_GET['makanan'] ?? '' ?></td>
        </tr>
        <p>
        <tr>
        <td>minuman : </td> <td><?php echo $_GET['minuman'] ?? '' ?></td>
        </tr>
        </p>
    </table>
    <div align = "center">
        <?php 
        echo "<br>";
        echo "PESANAN ANDA SEGERA DATANG";
        echo "<br>";
        echo "TERIMA KASIH";
    ?>
    </div>
</body>
</html>