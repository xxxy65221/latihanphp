<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body style="">
  <div style="display: flex; width: 100vw; height: 100vh; align-items: center; justify-content: center;">
    <div style="">
      <h1 style="text-align: center; color: rgb(33, 151, 206);">
        Register
      </h1>

      <form action="insert.php" method="post" style="border: 1px solid rgb(33, 151, 206); border-radius: 10px; padding: 20px; font-size: large;">
        <!-- NIM -->
        <div class="input">
          Nim: <br> <input type="text" name="NIM" id="" placeholder="enter nim" pattern="[0-9]{10}" title="number only, min length: 10" required><br>
        </div>
        <!-- NAMA -->
        <div class="input">
          Name: <br> <input type="text" name="NAME" id="" placeholder="enter name" required><br>
        </div>
        <!-- JENIS KELAMIN -->
        <div class="input">
          Gender: <br>
          <input type="radio" name="GENDER" id="" value="male" required>male
          <input type="radio" name="GENDER" id="" value="girl">girl<br>
        </div>  
        <!-- HOBY -->
        <div class="input">
          hobby: <br>
          <input type="checkbox" name="HOBBY[]" id="" value="coding" required> coding
          <input type="checkbox" name="HOBBY[]" id="" value="music"> music
          <input type="checkbox" name="HOBBY[]" id="" value="read"> read <br>
        </div>      
        <!-- Submit -->
        <div class="input">
          <input type="submit" value="submit">
        </div>
        
      </form>
    </div>
    
  </div>
</body>
</html>