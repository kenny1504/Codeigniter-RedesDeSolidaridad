<header class="main-header">
    <!-- Logo -->
    <a href="<?php base_url() ?>inicio"  class="logo" style="  background-color: #075f75">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>R</b>D<b>S</b></span>
      <!-- logo for regular state and mobile devices -->    
      <span class="logo-lg">Redes De Solidaridad</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="  background-color: #075f75" >
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Menu Navegacion</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">1</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Tiene 1 Notificacion</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 
                  <small>Su cuenta vence: <?=$this->renderSection('Vencimiento')?></small>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="assets/lte/dist/img/user1-128x128.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?=$this->renderSection('Nombre-hearder1')?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="assets/lte/dist/img/user1-128x128.jpg" class="img-circle" alt="User Image">
                <p>
                <?=$this->renderSection('Nombre-hearder2')?><div id="rol_u"><?=$this->renderSection('rol-hearder')?></div>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div class="pull-right">
<<<<<<< Updated upstream
                  <a href="<?php base_url()?>session" class="btn btn-default btn-flat">Cerrar Sesion</a>
=======
<<<<<<< HEAD
                  <a href='/Codeigniter-RedesDeSolidaridad/public/' class="btn btn-default btn-flat">Cerrar Sesion</a>
=======
                  <a href="<?php base_url()?>." class="btn btn-default btn-flat">Cerrar Sesion</a>
>>>>>>> 0e833f7f09133af77c2d1a210a61be85494f6c94
>>>>>>> Stashed changes
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
