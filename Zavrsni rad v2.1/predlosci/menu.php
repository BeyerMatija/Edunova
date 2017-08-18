
<div class="top-bar">
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
      <li class="menu-text"></li>
      <li><a href="<?php echo $putanjaAPP; ?>">Početna</a></li>
      <?php
      
      	if(isset($_SESSION['user']) != 0)
      	{
      	?>
      <li>
      	
        <a href="#">Lijekovi</a>
        <ul class="menu vertical">
		  <li><a href="<?php echo $putanjaAPP; ?>privatno/lijekovi/">Svi lijekovi</a></li>
          <li><a href="#">Na recept</a></li>                  
        </ul>
         
     </li>
      
      <?php 
		}
        ?>
       
      <li><a href="#">Ostalo</a></li>      
      <li><a href="<?php echo $putanjaAPP; ?>img/era.png">Era</a></li>
      <li><a href="https://github.com/BeyerMatija/Edunova/tree/master/Zavrsni%20rad%20v2.0/">Git</a> 
      <li><a href="<?php echo $putanjaAPP; ?>javno/Onama.php">O nama</a></li>
      <?php
      	if(isset($_SESSION['user']) != 0){
      	?>
      	<li><a href="<?php echo $putanjaAPP; ?>javno/logout.php">Odjava</a></li>
      	<?php
		}else{ ?>
      <li><a href="<?php echo $putanjaAPP; ?>javno/login.php">Prijava</a></li>
      <?php
		}
		?>
     
    </ul>
  </div>
  <div class="top-bar-right">
    <ul class="menu">
      <li><?php 
      if(isset($_SESSION['user'])){
      		echo 'Dobrodošao  ', $_SESSION['user']; 
		 
	  }
      ?> 
      </li>
     
    </ul>
  </div>
</div>