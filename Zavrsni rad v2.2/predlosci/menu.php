
<div class="top-bar">
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
      <li class="menu-text"></li>
      <li><a href="<?php echo $putanjaAPP; ?>"<i title="Početna stranica" class="step fi-home size-48"></i></a></li>
      <?php
      
      	if(isset($_SESSION['user']) != 0)
      	{
      	?>
      <li>
      	
        <a href="#"><i title="Programi" class="fi-first-aid size-48"></i><span class="hide-for-small-only"> </span></a>
        <ul class="menu vertical">
		  <li><a href="<?php echo $putanjaAPP; ?>privatno/lijekovi/">Lijekovi</a></li>
          <li><a href="<?php echo $putanjaAPP; ?>privatno/korisnici/">Korisnici</a></li> 
          <li><a href="<?php echo $putanjaAPP; ?>privatno/operateri/">Operateri</a></li>
          <li><a href="<?php echo $putanjaAPP; ?>privatno/podignuto/">Podignuti lijekovi</a></li>
          <li><a href="<?php echo $putanjaAPP; ?>privatno/posjeta/">Posjeta</a></li>                   
        </ul>
         
     </li>
     
     <?php 
		}
        ?>                
               
       <li><a href="http://www.hzzo.hr/" target="_blank"><i title="Hzzo" class="fi-link size-48"></i></a> </li>
       
       <li><a href="<?php echo $putanjaAPP; ?>javno/Onama.php"><i title="O nama" class="fi-compass size-48"></i></a></li>      
            
       <li><a href="<?php echo $putanjaAPP; ?>img/era.png" target="_blank"><i title="ERA" class="fi-graph-bar size-48"></i></a></li>      
      
       <li><a href="https://github.com/BeyerMatija/Edunova/tree/master/Zavrsni%20rad%20v2.2" target="_blank"><i title="Github" class="fi-widget size-48"></i></a>     	
      	      
      <?php
      	if(isset($_SESSION['user']) != 0){
      	?>
      	<li><a href="<?php echo $putanjaAPP; ?>javno/logout.php"><i title="Odjava" class="fi-power size-48"></i></a></li>
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
