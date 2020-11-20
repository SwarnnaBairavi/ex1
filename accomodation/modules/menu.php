<?Php if(@$_SESSION['level']=="Manager"){ ?>
<!-- Sidebar - Brand -->
      <a class="text-dark sidebar-brand d-flex align-items-center justify-content-center">
        <!--bikin div img logo disini-->
        <div class="sidebar-brand-text mx-3" style="padding-top: 30px;">
          <img src="resources/home.png" width="130px;">
        </div>
      </a>
      <!-- Divider -->
      <div style="padding-bottom: 40px;"></div>
     
      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a style="color: white; text-align: center; padding-right: 30px;" class="nav-link" href="index.php?pages=home-manager">
          <span><strong>Main Page</strong></span>
        </a>
      </li>
      <!-- Divider -->
      <hr style="border-color: white" class="sidebar-divider my-0">

      <!-- Heading -->
      <li class="nav-item active">
      <a style="color: white; text-align: center; padding-right: 30px;" class="nav-link" href="index.php?pages=app">
        <span><strong>Application</strong></span>
        </a>
      </li>

      <hr style="border-color: white" class="sidebar-divider my-0">

		 <!-- Heading -->
      <li class="nav-item active">
      <a style="color: white; text-align: center; padding-right: 30px;" class="nav-link" href="index.php?pages=akun-manager">
          <span><strong>Account</strong></span>
        </a>
      </li>

      <hr style="border-color: white" class="sidebar-divider my-0">
      <li class="nav-item active">
        <a  class="nav-link" style="cursor:pointer; color: white; text-align: center; padding-right: 30px;" onclick="if(confirm('Are you sure you want to log out ?')){window.location.href='login.php'}">
          <span><strong>Logout</strong></span></a>
      </li>


	  
<?Php } else if (@$_SESSION['level']=="Admin"){?>

  <a class="text-dark sidebar-brand d-flex align-items-center justify-content-center">
        <!--bikin div img logo disini-->
        <div class="sidebar-brand-text mx-3" style="padding-top: 30px;">
          <img src="resources/home.png" width="130px;">
        </div>
      </a>
      <!-- Divider -->
      <div style="padding-bottom: 40px;"></div>
     
      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a style="color: white; text-align: center; padding-right: 30px;" class="nav-link" href="index.php?pages=home-admin">
          <span><strong>Main Page</strong></span>
        </a>
      </li>
      <!-- Divider -->
      <hr style="border-color: white" class="sidebar-divider my-0">
 
		 <!-- Heading -->
      <li class="nav-item active">
      <a style="color: white; text-align: center; padding-right: 30px;" class="nav-link" href="index.php?pages=app">
          <span><strong>Application</strong></span>
        </a>
      </li>

      <hr style="border-color: white" class="sidebar-divider my-0">

      <!-- Heading -->
      <li class="nav-item active">
      <a style="color: white; text-align: center; padding-right: 30px;" class="nav-link" href="index.php?pages=managemen-user">
          <span><strong>Data User</strong></span>
        </a>
      </li>

      <hr style="border-color: white" class="sidebar-divider my-0">
      <li class="nav-item active">
        <a  class="nav-link" style="cursor:pointer; color: white; text-align: center; padding-right: 30px;" onclick="if(confirm('Are you sure you want to log out ?')){window.location.href='login.php'}">
          <span><strong>Logout</strong></span></a>
      </li>
    
<?Php } if(@$_SESSION['level']=="Student"){ ?>
<!-- Sidebar - Brand -->
      <a class="text-dark sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-text mx-3" style="padding-top: 30px;">
          <img src="resources/home.png" width="130px;">
        </div>
      </a>
      <!-- Divider -->
      <div style="padding-bottom: 40px;"></div>
     
      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a style="color: white; text-align: center; padding-right: 30px;" class="nav-link" href="index.php?pages=home-student">
          <span><strong>Main Page</strong></span>
        </a>
      </li>
      <!-- Divider -->
      <hr style="border-color: white" class="sidebar-divider my-0">
      <li class="nav-item active">
        <a  class="nav-link" style="cursor:pointer; color: white; text-align: center; padding-right: 30px;" href="index.php?pages=app">
          <span><strong>Application</strong></span></a>
      </li>
      <hr style="border-color: white" class="sidebar-divider my-0">
      <!-- Heading -->

      <li class="nav-item active">
      <a style="color: white; text-align: center; padding-right: 30px;" class="nav-link" href="index.php?pages=akun-student">
          <span><strong>Account</strong></span>
        </a>
      </li>

      <hr style="border-color: white" class="sidebar-divider my-0">
      <li class="nav-item active">
        <a  class="nav-link" style="cursor:pointer; color: white; text-align: center; padding-right: 30px;" onclick="if(confirm('Are you sure you want to log out ?')){window.location.href='login.php'}">
          <span><strong>Logout</strong></span></a>
      </li>
<?php } ?>