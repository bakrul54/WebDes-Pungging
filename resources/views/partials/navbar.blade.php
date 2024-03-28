<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark" style="background-color: #adcff1;">
    <div class="container">
      <a class="navbar-brand" href="/">
        Website Desa Pungging
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle {{ ($title === "Profil Desa") ? 'active' : '' }}" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Profil Desa
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/profil">Tentang Kami</a>
                  <a class="dropdown-item" href="/struktur-organisasi">Struktur Organisasi</a>
                </div>
              </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Data Statistik") ? 'active' : '' }}" href="/statistik">Data Statistik </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Lembaga Masyarakat") ? 'active' : '' }}" href="/lembaga-masyarakat">Lembaga Masyarakat </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Layanan") ? 'active' : '' }}" href="/layanan">Layanan</a>
          </li>


          <li class="nav-item">
            @auth
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Selamat datang, {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i>My Dashboard</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-left"></i>Logout</button>
                  </form>
                </li>
              </ul>
            </li>
            @else
            <a class="nav-link {{ ($title === "Login") ? 'active' : '' }}" href="/login"><i class="bi bi-box-arrow-in-right"></i>Login </a>
            @endauth
          </li> 
          
          
        </ul>
      </div>
    </div>
  </nav>