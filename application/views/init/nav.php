<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
  <div class="scrollbar-inner">
    <!-- Brand -->
    <div class="sidenav-header d-flex align-items-center">
      <a class="navbar-brand" href="dashboard.html">
        <img src="<?=base_url('resources/assets/img/brand/blue.png" class="navbar-brand-img')?>" alt="...">
      </a>
      <div class="ml-auto">
        <!-- Sidenav toggler -->
        <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
          <div class="sidenav-toggler-inner">
            <i class="sidenav-toggler-line"></i>
            <i class="sidenav-toggler-line"></i>
            <i class="sidenav-toggler-line"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar-inner">
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Nav items -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link <?=@$this->session->flashdata('nav_principal')=='home' ? 'active' : '' ?>" href="#navbar-dashboards" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-dashboards">
              <i class="ni ni-shop text-primary"></i>
              <span class="nav-link-text">Dashboards</span>
            </a>
            <div class="collapse <?=@$this->session->flashdata('nav_principal')=='home' ? 'show' : '' ?>" id="navbar-dashboards">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a href="<?=base_url('index.php/home');?>" class="nav-link <?=@$this->session->flashdata('nav_principal')=='home' ? 'active' : '' ?>">Home</a>
                </li>
                <li class="nav-item">
                  <?php if (@$this->session->flashdata('user')->type=="Cliente"): ?>
                    <a href="<?=base_url('index.php/solicitudesCliente');?>" class="nav-link <?=@$this->session->flashdata('nav_principal')=='solicitud' ? 'active' : '' ?>">Solicitudes</a>
                  <?php endif ?>
                  <?php if (@$this->session->flashdata('user')->type=="Admin"): ?>
                    <a href="<?=base_url('index.php/solicitudesAdmin');?>" class="nav-link <?=@$this->session->flashdata('nav_principal')=='solicitud' ? 'active' : '' ?>">Solicitudes</a>
                  <?php endif ?>
                  
                </li>
              </ul>
            </div>
          </li>
          <?php if (@$this->session->flashdata('user')->type=="Admin"): ?>
            <li class="nav-item">
              <a class="nav-link <?=@$this->session->flashdata('nav_principal')=='creations' ? 'active' : '' ?>" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                <i class="ni ni-ungroup text-orange"></i>
                <span class="nav-link-text">Creations</span>
              </a>
              <div class="collapse <?=@$this->session->flashdata('nav_principal')=='creations' ? 'show' : '' ?>" id="navbar-examples">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="<?=base_url('index.php/clasificacion');?>" class="nav-link <?=@$this->session->flashdata('activo')=='clasificacion' ? 'active' : '' ?>">Clasificaciones</a>
                  </li>
                  <li class="nav-item">
                    <a href="<?=base_url('index.php/contenedores');?>" class="nav-link <?=@$this->session->flashdata('activo')=='contenedor' ? 'active' : '' ?>">Contenedores</a>
                  </li>
                  <li class="nav-item">
                    <a href="<?=base_url('index.php/clientes');?>" class="nav-link <?=@$this->session->flashdata('activo')=='cliente' ? 'active' : '' ?>">Clientes</a>
                  </li>
                  <li class="nav-item">
                    <a href="<?=base_url('index.php/unidades');?>" class="nav-link <?=@$this->session->flashdata('activo')=='unidad' ? 'active' : '' ?>">Unidades</a>
                  </li>
                  <li class="nav-item">
                    <a href="<?=base_url('index.php/choferes');?>" class="nav-link <?=@$this->session->flashdata('activo')=='chofer' ? 'active' : '' ?>">Choferes</a>
                  </li>
                </ul>
              </div>
            </li>
          <?php endif ?>
        </ul>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        <h6 class="navbar-heading p-0 text-muted">Documentation</h6>
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
          <li class="nav-item">
            <a class="nav-link" href="../../docs/getting-started/overview.html" target="_blank">
              <i class="ni ni-spaceship"></i>
              <span class="nav-link-text">Getting started</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../docs/foundation/colors.html" target="_blank">
              <i class="ni ni-palette"></i>
              <span class="nav-link-text">Foundation</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>