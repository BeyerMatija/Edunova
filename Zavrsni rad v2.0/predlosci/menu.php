
<div class="top-bar">
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
      <li class="menu-text">Link za "pitaj savjet od doktora"</li>
      <li><a href="<?php echo $putanjaAPP; ?>">Početna</a></li>
      <?php
      	if(isset($_SESSION['user'])){
      	?>
      <li>
      	
        <a href="#">Lijekovi</a>
        <ul class="menu vertical">
		  
          <li><a href="#">Na recept</a></li>
          <li><a href="#">Bez receptni lijekovi</a></li>
          <li><a href="#">Lijekovi pod nadzorom</a></li>
        </ul>
         
        
      </li>
      <li><a href="<?php echo $putanjaAPP; ?>javno/logout.php">Odjava</a></li>
      <?php 
		}
        ?>
      <li><a href="#">Ostalo</a></li>
      <li><a href="<?php echo $putanjaAPP; ?>javno/Onama.php">O nama</a></li>
      <li><a href="<?php echo $putanjaAPP; ?>javno/login.php">Prijava</a></li>
     
    </ul>
  </div>
  <div class="top-bar-right">
    <ul class="menu">
      <li><input type="search" placeholder="Traži"></li>
      <li><button type="button" class="button">Traži</li>
    </ul>
  </div>
</div>