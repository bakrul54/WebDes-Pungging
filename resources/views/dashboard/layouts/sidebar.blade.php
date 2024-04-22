<nav id="sidebarMenu" style="height: 93vh;" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link" {{ Request::is('dashboard') ? 'active' : '' }} href="/dashboard">
          <span data-feather="home"></span>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/statistik') ? 'active' : '' }}" href="/dashboard/statistik">
          <span data-feather="file-text"></span>
          Statistik
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/surat') ? 'active' : '' }}" href="/dashboard/surat">
          <span data-feather="mail"></span>
          Layanan Surat
        </a>
      </li>
    </ul>
  </div>
</nav>