<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item {{ $title == 'Dashboard' ? 'active' : '' }}">
        <a class="nav-link " href="/dashboard">
          <span data-feather="home"></span>
          Dashboard
        </a>
      </li>
      <li class="nav-item {{ $title == 'Statistik' ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard/statistik">
          <span data-feather="file-text"></span>
          Statistik
        </a>
      </li>
      <li class="nav-item {{ $title == 'Layanan Surat' ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard/surat">
          <span data-feather="mail"></span>
          Layanan Surat
        </a>
      </li>
    </ul>
  </div>
</nav>