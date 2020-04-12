<?php
$filepath = 'assets/uploads/'.$_SESSION['id'].".png";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/css/style.css">
  <title>Document</title>
</head>
<body>
    <?php  require("components/header_homepage.php") ?>

    <div class="user__back"> < Back </div>

    <div class="user__container">

      <div class="user__image">

        <div class="user__picture">
        <?php
        if (file_exists($filepath)) 
        {
        ?>
        <img src="assets/uploads/<?=$_SESSION['id']?>.png" alt="picture profile" srcset="">
        <?php
      } else {
        ?>
         <img src="assets/img/profil.png.png" alt="picture profil"/>
        <?php
      }?>
        </div>

          <?php
      if(isset($_GET['error_format']) and $_GET['error_format']== 1){
        echo "<div class='center__error'><p class='error'>BAD FORMAT WE ONLY ACCEPT PNG</p></div>";
      }
      ?>
        <form action="index.php?action=upload" method="post" enctype="multipart/form-data"class="button__image">
          <input type="file" class="button__end button__picture" name="photo">
          <input type="submit" class="button__end button__picture" value="UPLOAD">
        </form>

      </div>

      <div class="user__account">

        <form action="index.php?action=update" method="post" class="user__form">
          <div class="user__info">
              <h1 class="user__title">My Account</h1>

              <div class="input__info">
                <div class="inputForm user__firstName">
                    <label>
                    First name
                    </label>
                    <input type="text" name="firstname" class="firstName__input" placeholder="Hugo"><img src="assets/icon/pencil.svg" alt="pencil"/>
                </div>
                <div class="inputForm user__lastName">
                    <label>
                        Last name
                    </label>
                    <input type="text" name="lastname" class="lastName__input" placeholder="Chakal"><img src="assets/icon/pencil.svg" alt="pencil"/>
                </div>
                <div class="inputForm user__email">
                    <label>Mail address</label>
                    <input type="email" name="email" class="mail__input" placeholder="Hugo.le.dz@gmail.com"/><img src="assets/icon/pencil.svg" alt="pencil"/>
                </div>
                <div class="inputForm user__password">
                    <label>Password</label>
                    <input type="password" name="pass" class="password__input" placeholder="*********"/><img src="assets/icon/pencil.svg" alt="pencil"/>
                </div>
              </div>

              <div class="button__user">
                <a href="index.php?action=deco"><div class="button__end button__account"> LOG OUT</div></a>
                <input type="submit" class="button__end button__account " value="SAVE">
              </div>
          </div>
        </form>
        <div class="user__delete"><a class="delete__button" href="index.php?action=delete">Delete account</a></div>
      </div>
   

    

    </div>



    <?php  require("components/footer.php") ?>
</body>
</html>