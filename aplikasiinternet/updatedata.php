<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update data</title>
</head>
<body>
    <?php
        include "connection.php";

        $ID = $_POST["ID"];
        $NIM = $_POST["NIM"];
        $NAME = $_POST["NAME"];
        $GENDER = $_POST["GENDER"];
        $HOBBY = implode(",", $_POST["HOBBY"]);


        $query = "UPDATE USER_TABLE SET ID = $ID ,NIM = '$NIM', NAME = '$NAME', GENDER = '$GENDER', HOBBY = '$HOBBY' WHERE USER_TABLE.ID = $ID; ";

       
        $result = $conn->query($query);

        
        $conn->close();
    ?>

    <script>
            window.location.href = "index.php"        
    </script>
</body>
</html>

