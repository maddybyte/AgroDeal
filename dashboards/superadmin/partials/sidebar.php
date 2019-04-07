<div class="sidebar" data-color="azure" data-background-color="white" data-image="">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
      <a href="#" class="simple-text logo-normal">
        Agrodeal
      </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <?php if($activePage=="Dashboard") {?>
          <li class="nav-item active ">
        <?php } else {?> 
          <li class="nav-item ">
        <?php } ?>
          <a class="nav-link" href="index.php">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>
        <?php 
            $activePage;
            if($activePage=="Users") {?>
            <li class="nav-item active ">
          <?php } else {?> 
            <li class="nav-item ">
          <?php } ?>
          
            <a class="nav-link" href="users.php">
            <i class="material-icons">people</i>
            <p>Users</p>
          </a>
        </li>
      
        <?php 
            $activePage;
            if($activePage=="Areas") {?>
            <li class="nav-item active ">
          <?php } else {?> 
            <li class="nav-item ">
          <?php } ?>
          
            <a class="nav-link" href="areas.php">
            <i class="material-icons">places</i>
            <p>Areas</p>
          </a>
        </li>
        <?php 
            $activePage;
            if($activePage=="Stores") {?>
            <li class="nav-item active ">
          <?php } else {?> 
            <li class="nav-item ">
          <?php } ?>
          
            <a class="nav-link" href="stores.php">
            <i class="material-icons">store</i>
            <p>Stores</p>
          </a>
        </li>
      
       
        <li class="nav-item ">
          <a class="nav-link" href="#">
            <i class="material-icons">announcement</i>
            <p>Notifications</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
