<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>List data</title>
  <link rel="stylesheet" href="style.css">

</head>
<body style="margin: 0;">
  <div style="display: flex; width: 100vw; height: 100vh; justify-content: center;">
    <div style="">
      <h1 style="text-align: center; color: rgb(33, 151, 206);"">
        List Data
      </h1>
      <a href="register.php" style="text-decoration:none; color: rgb(33, 151, 206);" class="register">register new data</a>
        
      <table style="width: 80vw;">
          <tr style="">
            <th style="background-color: rgb(74, 213, 255);">id</th>
            <th style="background-color: rgb(104, 224, 245);">nim</th>
            <th style="background-color: rgb(124, 182, 233);">name</th>
            <th style="background-color: rgb(101, 150, 192);">gender</th>
            <th style="background-color: rgb(63, 247, 222);">hobby</th>
          </tr>

          <!-- iterate data -->
          <?php
            include "connection.php";
            $sql = "SELECT * FROM USER_TABLE";
            $result = $conn->query($sql);

            while($row = $result->fetch_assoc()){
            ?>

          <tr style="border: 1px solid;">
            <td style="">
              <?php echo $row["ID"] ?>
            </td>
            <td style="">
              <?php echo $row["NIM"] ?>
            </td>
            <td style="">
              <?php echo $row["NAME"] ?>
            </td>
            <td style="">
              <?php echo $row["GENDER"] ?>
            </td>
            <td>
              <div style="display: flex; justify-content:space-between; align-items:center">
                <div style="margin-left: 10px">
                  <?php echo $row["HOBBY"] ?>
                </div>

                <div style="display: flex; margin-top: 5px">
                  <!-- delete -->
                  <form action="delete.php" method="post" style="margin-right: 10px;">
                    <input type="hidden" name="ID" value="<?php echo $row["ID"]?>"  />
                    <input type="submit" value="del" style="color:white;">
                  </form>

                  <!-- update -->
                  <button class="button" onclick="editdata('<?php echo $row["ID"] ?>', '<?php echo $row["NIM"] ?>', '<?php echo $row["NAME"] ?>')" style="color:white;">edit</button>
                  
                </div>

              </div>
            </td>
          </tr>

           <!-- end iterate data -->
          <?php } ?>

        </table>
    </div>

    <!-- update modal hover -->
    <div id="update_modal" style="background: rgba(0, 0, 0, 0.5); width: 100vw; height: 100vh; position:fixed; margin:0; justify-content: center; display:flex; align-items: center; display:none;">
      <form action="updatedata.php" method="post" style="border: 1px solid rgb(33, 151, 206); border-radius: 10px; padding: 20px; font-size: large; background-color: white; width: 50vw; height: 50vh;">
        <!-- ID -->
        <input type="hidden" name="ID" id="updatedataID">
         <!-- NIM -->
         <div class="input">
          Nim: <br> <input type="text" name="NIM" id="updatedataNIM" placeholder="enter nim" pattern="[0-9]{10,}" title="number only, min length: 10" required><br>
        </div>
        <!-- NAMA -->
        <div class="input">
          Name: <br> <input type="text" name="NAME" id="updatedataNAME" placeholder="enter name" required><br>
        </div>
        <!-- JENIS KELAMIN -->
        <div class="input">
          Gender: <br>
          <input type="radio" name="GENDER" id="" value="male" required >male
          <input type="radio" name="GENDER" id="" value="girl" >girl<br>
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
  <script>
    var update_modal = document.querySelector("#update_modal");

    function editdata(id, nim, name){
      document.querySelector("#updatedataID").value = id;
      document.querySelector("#updatedataNIM").value = nim;
      document.querySelector("#updatedataNAME").value = name;
      update_modal.style.display = "flex";
    }

    // hidden modal
    window.onclick = (e) =>{
      if(e.target == update_modal){
        update_modal.style.display = "none";
      }
    }

  </script>
</body>
</html>