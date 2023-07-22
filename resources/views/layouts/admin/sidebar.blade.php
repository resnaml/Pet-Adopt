<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="{{ route('admin.dashboard') }}">Cats & Dogs</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">C | D</a>
      </div>
      <ul class="sidebar-menu">
          <li class="menu-header">Dashboard</li>
          <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
          </li>
          <li class="menu-header">Menu</li>
          <li><a class="nav-link" href="{{ route('admin.pet.index') }}"><i class="fas fa-paw"></i> <span>Pets Data</span></a></li>
          <li><a class="menu-header" href="{{ route('admin.pets.index') }}"><i class="fas fa-paw"></i> <span>All Cats</span></a>
          </li>
          <li><a class="menu-header" href="html.blank"><i class="fas fa-paw"></i> <span>All Dogs</span></a>
          </li>
          <li><a class="nav-link" href="{{ route('admin.users.index') }}"><i class="fas fa-users"></i> <span>User Data</span></a></li>  
        </ul>
    </aside>
  </div>