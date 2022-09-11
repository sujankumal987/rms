<aside class="main-sidebar sidebar-dark-primary elevation-4 position-fixed">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="/logo.png" alt="RMS" class="brand-image img-circle elevation-3" style="opacity: .8;width: 30px; height: 30px " >
      <span class="brand-text font-weight-light">RMS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- SidebarSearch Form -->
      <div class="form-inline mt-4">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-4">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="/" class="nav-link {{request()->is('/') ? 'active' : ''}}">
                <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item  mt-3">
            <a href="/sells" class="nav-link {{request()->is('/sell') ? 'active' : ''}}">
                <i class="nav-icon fas fa-seedling"></i>
              <p>
                Sell
              </p>
            </a>
          </li>
          <li class="nav-item mt-3">
            <a href="/products" class="nav-link {{request()->is('/product') ? 'active' : ''}}">
                <i class=" nav-icon fas fa-shopping-basket"></i>
              <p>
                Product
              </p>
            </a>
          </li>
          <li class="nav-item mt-3">
            <a href="/customers" class="nav-link {{request()->is('/customer') ? 'active' : ''}}">
                <i class="nav-icon fas fa-user"></i>
              <p>
                Customer
              </p>
            </a>
          </li>
          <li class="nav-item mt-3">
            <a href="/pettycashs" class="nav-link {{request()->is('/pettycash') ? 'active' : ''}}">
                <i class=" nav-icon fas fa-money-bill"></i>
              <p>
                Petty Cash
              </p>
            </a>
          </li>
          <li class="nav-item fixed-bottom">
            <a href="/settings" class="nav-link {{request()->is('/setting') ? 'active' : ''}}">
                <i class="nav-icon fas fa-cog"></i>
              <p>
                Setting
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
