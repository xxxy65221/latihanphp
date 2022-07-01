<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete data</title>
</head>
<body>
    <?php
        include "connection.php";
        
        $sql = "DELETE FROM USER_TABLE WHERE USER_TABLE.ID = ".$_POST["ID"];
        $result = $conn->query($sql);
    ?>
        
    <script>
        window.location.href = "index.php"

    </script>
</body>
</html>