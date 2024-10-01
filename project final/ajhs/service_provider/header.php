<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
   
    <?php 
    
    $sid = $_SESSION['S_id'];
    
    $stmth = $admin->ret("SELECT * FROM `sp` WHERE `s_id` = '$sid' ");
    $rowh = $stmth->fetch(Pdo::FETCH_ASSOC);
    
    ?>
   
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="controller/<?php echo $rowh['s_image'] ; ?>" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="controller/<?php echo $rowh['s_image'] ; ?>" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title"><?php echo $rowh['s_name'] ; ?></h6>
            <p class="user-subtitle"><?php echo $rowh['s_email'] ; ?></p>
            </div>
           </div>
          </a>
        </li>
             </ul>
    </li>
  </ul>
</nav>
</header>