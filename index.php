

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once("dbtools.inc.php");
    $link=create_connection();
    $sql="SELECT * FROM `tb_data` ORDER BY `id` DESC";
    $result=execute_sql($link,"data",$sql);

    echo "<table width='800' align='center'>";
    $j=1;
    while($row=mysqli_fetch_assoc($result)){
        echo "<tr><td><div>";
        echo "姓名:".$row["name"]."<br>";
        echo "年齡:".$row["age"]."<br>";
        echo "城市:".$row["country"]."<br>";
       
        echo "語言:".$row["languages"]."<br>";
        echo "</tr></td></div>";
        $j++;
    }
    echo "</table>";
    ?>

    <form action="post.php" method="post" autocomplete="off">
        <label for="">Name</label>
        <input type="text" name="name" value=""><br>
        <label for="">Age</label>
        <input type="text" name="age" value=""><br>
        <label for="">Country</label>
        <select name="country">
            <option value="" selected hidden>Select Country</option>
            <option value="USA">USA</option>
            <option value="Uk">Uk</option>
            <option value="India">India</option>
        </select><br>
        <label for="">Gender</label>
        <input type="radio" name="gender" value="Male" required>Male
        <input type="radio" name="gender" value="Female" required>Female<br>
        <label for="">Languages</label>
        <input type="checkbox" name="languages[]" value="English">English
        <input type="checkbox" name="languages[]" value="Chinese">Chinese
        <input type="checkbox" name="languages[]" value="Spanish">Spanish
        <br>
        <button type="submit" name="submit">submit</button>

    </form>
</body>
</html>