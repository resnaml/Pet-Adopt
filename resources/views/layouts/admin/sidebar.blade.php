<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="{{ route('admin.dashboard') }}">PET ADOPT</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">P|A</a>
      </div>
      <ul class="sidebar-menu">
          <li class="menu-header">Dashboard</li>
          <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
          </li>
          <li class="menu-header">Menu</li>
          <li><a class="nav-link" href="{{ route('admin.pet.index') }}"><i class="fas fa-paw"></i> <span>Pets Data</span></a></li>
          <li><a class="nav-link" href="{{ route('admin.transaksi.index') }}"><i class="fas fa-receipt"></i> <span>Transaksi</span></a></li>
          <li><a class="nav-link" href="{{ route('admin.pets.index') }}"><i class="fas fa-paw"></i> <span>All Pets</span></a></li>
          <li><a class="nav-link" href="{{ route('admin.users.index') }}"><i class="fas fa-users"></i> <span>User Data</span></a></li>  
        </ul>
    </aside>
  </div>