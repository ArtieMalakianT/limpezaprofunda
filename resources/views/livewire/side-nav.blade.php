<aside class="main-sidebar sidebar-dark-success elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <span class="brand-text font-weight-light">Limpeza Profunda | Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">        
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Serviços
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/services/show" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver todos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/services" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registrar</p>
                </a>
              </li>              
            </ul>
          </li>
          <li class="nav-item">
            <a href="/banners" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Banner Inicial                
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/about/edit" class="nav-link">            
              <i class="nav-icon fas fa-th"></i>
              <p>
                Quem Somos               
              </p>
            </a>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Comentários
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/comments/form" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Adicionar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{Route('listComments')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listar</p>
                </a>
              </li>              
            </ul>
          </li>

          <li class="nav-item">
            <a href="{{Route('courseForm')}}" class="nav-link">            
              <i class="nav-icon fas fa-th"></i>
              <p>
                Treinamento               
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/store/form" class="nav-link">            
              <i class="nav-icon fas fa-th"></i>
              <p>
                Loja               
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{Route('parceirosForm')}}" class="nav-link">            
              <i class="nav-icon fas fa-th"></i>
              <p>
                Parceiros               
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Galerias
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{Route('galleryCreate')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Enviar fotos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{Route('showGalleries')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listar</p>
                </a>
              </li>              
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{Route('popupForm')}}" class="nav-link">            
              <i class="nav-icon fas fa-th"></i>
              <p>
                Popup               
              </p>
            </a>
          </li>          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>