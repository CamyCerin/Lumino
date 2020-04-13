<script defer src="./js/headerHomePage.js"></script>
<header class="headerHome">

    <div class="headerHome__logo">
        <a href="index.php?action=home"><img src="assets/icon/logo_svg.png" alt="logo_lumino"></a>
    </div>
    <div class="headerHome__nav nav">
      <a href="index.php?action=home"><div class="nav__item nav__item--hover">Home</div></a>
      <div class="nav__item nav__item--hover" id="genre">Categories <img class="item__arrow" src="assets/icon/chevron_gris.svg"/>
    	<ul id="genre__ul">
				<li><a href="index.php?action=genre&genre=Action">Action</a></li>
				<li><a href="index.php?action=genre&genre=Animation">Animation</a></li>
				<li><a href="index.php?action=genre&genre=Comedy">Comedy</a></li>
				<li><a href="index.php?action=genre&genre=Documentary">Documentary</a></li>
        <li><a href="index.php?action=genre&genre=SF">Science-Fiction</a></li>
				<li><a href="index.php?action=genre&genre=Horror">Horror</a></li>
			</ul>
    </div>
      <div class="nav__item nav__item--hover">My list</div>
    </div>

    <div class="headerHome__search search">
      <img class="search__loupe" src="assets/icon/loupe-jaune.svg"/>
      <form class="search__form" action="index.php?action=home">
        <input type="text" class="search__input" placeholder="Search a Title">
        <div class="show_up"></div>
        <ul class="suggestions"></ul>
      </form>

    </div>

    <div class="headerHome__bell"><img src="assets/icon/bell.svg"/></div>
    <div class="headerHome__name">Hello <?php echo $_SESSION['firstname']; ?> !</div>

    <div class="headerHome__profil">
      <a href="index.php?action=user">
      <?php
      if (file_exists($filepath)) 
      {
      ?>
      <img class="icon_user" src="assets/uploads/<?=$_SESSION['id']?>.png" alt="picture profile" srcset="">
      <?php
      } else {
      ?>
        <img src="assets/img/profil.png.png"/>
        <?php
        }
        ?>
      </a>
    </div>

    <div class="headerHome__disconnect"><a href="index.php?action=deco&deco=landing"><img src="assets/icon/unlog.svg"/></a></div>

</header>

