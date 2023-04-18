<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторна робота №3</title>
</head>
<body>
    <h1 style="text-align: center" id="start">Лабораторна робота №3</h1>
    <h2><center>Уніфікований інтерфейс PDO</center></h2>
    <h2><center>Варіант №3</center></h2>
    <form action="getWards.php" method="get">
        <select name="nurseName" id="nurseName">
            <?php
            include('connect.php');
            $sqlSelect = "SELECT name FROM nurse";
            $dbh = new PDO($dsn, $user, $pass);
            foreach($dbh->query($sqlSelect) as $row)
            {
                echo "<option value='$row[0]'>$row[0]</option>";
            }
            $dbh = null;
            ?>
        </select>
        <input type="submit" value="Get !">
    </form>
    <form action="getNurses.php" method="get">
        <label for="wardName">Select ward:</label>
        <select name="wardName" id="wardName">
            <?php
            include('connect.php');
            $sqlSelect = "SELECT name FROM ward";
            foreach($dbh->query($sqlSelect) as $row)
            {
                echo "<option value='$row[0]'>$row[0]</option>";
            }
            $dbh = null;
            ?>
        </select>
        <input type="submit" value="Get !">
    </form>
    <form action="getAlter.php" method="get">
        <label for="shift">Select shift:</label>
        <select name="shift" id="shift">
            <option value="First">First</option>
            <option value="Second">Second</option>
            <option value="Third">Third</option>
        </select>
        <input type="submit" value="Get !">
    </form>
</body>
</html>
