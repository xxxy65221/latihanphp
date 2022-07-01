<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert data</title>
</head>
<body>
    <?php
        include "connection.php";

        $NIM = $_POST["NIM"];
        $NAME = $_POST["NAME"];
        $GENDER = $_POST["GENDER"];
        $HOBBY = implode(",", $_POST["HOBBY"]);

        $query = "INSERT INTO USER_TABLE (NIM, NAME, GENDER, HOBBY) VALUES('$NIM', '$NAME', '$GENDER', '$HOBBY')";
        $result = $conn->query($query);

        $conn->close();
    ?>
    <script>
        window.location.href = "index.php"
    </script>
</body>
</html>

