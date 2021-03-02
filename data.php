<?php
  include_once 'php/db.php';
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo.png" type="image/png">
    <link rel="stylesheet" href="style.css">
    <title>pineapple.</title>
  </head>
  <style>
    @media(max-width:600px){
      body{
        background-image: url('img/image_summer.png');
        background-repeat: no-repeat;
        height: 100%;
        min-height: 500px;
      }
      .empty-space{
        display:none;
      }
      .first-half{
        display:initial;
      }
      .screen{
        display: none;
      }
      main{
        background-image: none;
        background-color: transparent;
        display: flex;
        flex-direction: column;
      }
      .secound-half{
        display: none;
      }
      .section-nav{
        display: flex;
        background-color: white;
        padding-top: 0vw;
      }
      .section-subscribe{
        margin-top: 12vh;
        padding-top: 3.6vh;
      }
      .section-nav .logo{
        flex: 2;
        padding: 3vw;
      }
      .section-nav .links{
        flex: 3;
        align-self: center;
      }
      .links li{
        margin:0;
        padding: 2vw;
        display:inline;
        list-style-type: none;
        font-family: Arial;
        font-size: 14px;
        color: #6A707B;
      }
      .links ul{
        white-space: nowrap;
        margin-top: 0;
      }
      .section-subscribe{
        background-color: white;
        align-self: center;
        padding:4vw;
        padding-top: 4vh;
        padding-bottom: 4vh;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        width: 90%;
      }
      .sub-section-text h1{
        font-family: Georgia;
        font-weight: normal;
        font-size: 24px;
        color: #131821;
        padding-bottom: 1vh;
      }
      .sub-section-text p{
        font-family: Arial;
        font-style: normal;
        font-weight: normal;
        font-size: 14px;
        width:80%;
        line-height: 3vh;
        padding-bottom: 3vh;
        color: #6A707B;
      }
      .sub-section-input{
        width: 100%;
        height:auto;
      }
      .sub-section-input{
        position: relative;
      }
      .sub-section-input #check-email{
        position: relative;
        left: 0;
        box-sizing: border-box;
        background: #FFFFFF;
        border: 1px solid #E3E3E4;
        border-left: 4px solid #4066A5;
        width: 100%;
        height: 60px;
      }
      .sub-section-input #check-email:focus{
        outline: none;
      }
      .sub-section-input #check-email[type="text"]{
        font-family: Arial;
        font-style: normal;
        font-weight: normal;
        color: #6A707B;
        padding-left: 3vw;
      }
      .sub-section-input #img-submit{
        position: absolute;
        width: 25px;
        top: 16%;
        right: 5%;
        height: auto;
      }
      #img-submit:focus{
        outline: none;
      }
      .terms{
        padding-top: 0vh;
        padding-bottom: 3vh;
        display: flex;
        color: #6A707B;
        font-family: Arial;
        font-style: normal;
        font-weight: normal;
        font-size: 1em;
        align-items: center;
      }
      .terms p{
        padding-left: 3vw;
      }
      .terms a{
        color: black;
      }
      .terms input{
        width: 26px;
        height: 26px;
      }
      .sub-section-links{
        display: flex;
        justify-content: center;
        flex-basis: 60%;
      }
      .sub-section-links img{
        padding: 5px;
      }
      hr{
        padding-bottom: 2vh;
        border: 0;
        border-top: 1px solid #E3E3E4;
      }
    }
  </style>
  <body>
    <main>
      <div class="section-nav">
          <div class="logo">
            <a href="index.php">
              <img class="first-half" src="img/logo.png" alt="">
              <img class="secound-half" src="img/logo_pineapple.png" alt="">
            </a>
          </div>
          <div class="links">
            <ul>
              <li><a class="db" style="text-decoration:none;color:#6A707B;" href="data.php">DataBase</a></li>
              <li>How it works</li>
              <li>Contact</li>
            </ul>
          </div>
        </div>
        <div style="padding-top: 2.4vh;" class="section-subscribe" id="section-subscribe">
          <div class="sub-section-text"  id="sub-section-text">
            <h1>Data from Database</h1>
            <input type="text" id="searchInput" onkeyup="searchFunction()" placeholder="Search">
            <table id="dataDB" style="border: 1px solid #ddd; font-family: Georgia;">
            <tr>
              <th>ID</th>
              <th>E-Mail</th>
              <th>Date</th>
            </tr>
              <?php
                $sql = "SELECT * FROM email;";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                $list_size = 0;
                $rowsPerPage= 10;
                $list = array();
                $i = 0;
                $iterator = 0;

                isset($_GET['page']) ? $page = $_GET['page'] : $page = 0;

                if($page > 1){
                  $start = ($page * $rowsPerPage) - $rowsPerPage;
                }else{
                  $start = 0;
                }

                $allrows = $conn->query("SELECT ID FROM email");

                $totalPages = $resultCheck / $rowsPerPage;

                $resultSet = $conn->query("SELECT * FROM email LIMIT $start, $rowsPerPage");

                if ($resultCheck > 0){
                  while ($row = $resultSet->fetch_assoc()){
                    $iterator2 = 0;
                    $list_size += 1;
                    ?>
                    <tr>
                      <td  style="padding: 5px;"><?php echo $row['ID']; ?></td>
                      <td  style="padding: 5px;"><?php echo $row['email']; ?></td>
                      <td  style="padding: 10px;"><?php echo $row['date']; ?></td>
                      <td  style="padding: 5px;"> <a href="php/delete.php?emailID=<?php echo $row['ID']; ?>">Delete</a> </td>
                    </tr><?php
                    $first = explode("@", $row['email']);
                    $split = explode(".", $first[1]);
                    if($iterator == 0){
                      $list[0] = $split[0];
                      $iterator = 1;
                      continue;
                    }else{
                      for($i = 0; $i < sizeof($list); $i++){
                        if($split[0] != $list[$i]){
                          $iterator2 += 1;
                        }
                      }
                      if($iterator2 >= sizeof($list)){
                          $list[$i] = $split[0];
                      }
                    }
                  }
                }else{
                  echo "DB is empty";
                }
               ?>
             </tr>
           </table>
           <div style="margin-top: 1vh;">
           <?php
               if(strpos($totalPages,".") !== false){
                 $totalPages = $totalPages + 1;
               }
               for($i = 1; $i <= $totalPages; $i++){
                 echo "<a href='?page=$i' style='padding: 5px; margin-right: 0.5vw; text-decoration: none; background-color: black; color: white;'>$i</a>";
               }
            ?>
          </div>
          <div style="padding: 15px;">
          <h4 style="padding-bottom: 1vh;"> Filters:</h4>
          <?php for($i = 0; $i < count($list); $i++){ ?>
            <input id="<?php echo $list[$i] ?>" type="button" onclick="filterEmail(this.value)" name="" value="<?php echo $list[$i] ?>">
          <?php } ?>

          </div>
          </div>
        </div>
    </main>
    <div class="screen">
      <img src="img/image_summer.png" alt="">
    </div>
  </body>
  <script>
  let filterSelected = "";

    function searchFunction() {
      let input = document.getElementById("searchInput").value.toLowerCase();
      let table = document.getElementById("dataDB");
      let tr = table.getElementsByTagName("tr");
      let value, td;

      for (let i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
          value = td.textContent || td.innerText;
          let email_split = td.textContent.split("@");
          let final_split = email_split[1].split(".");
          if (value.toLowerCase().indexOf(input) > -1) {
            if(final_split[0] == filterSelected || filterSelected == ""){
              tr[i].style.display = "";
            }
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }

    function filterEmail(email) {
      let table = document.getElementById("dataDB");
      let tr = table.getElementsByTagName("tr");
      let value, td;
      filterSelected = email;
      for (let i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
          let email_split = td.textContent.split("@");
          let final_split = email_split[1].split(".");
          if (final_split[0] == email){
            tr[i].style.display = "";
          }else{
            tr[i].style.display = "none";
          }
        }
      }
    }
  </script>
</html>
