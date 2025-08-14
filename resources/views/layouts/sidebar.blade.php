<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link" href="/dashboard">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <!-- Menu Kartu Keluarga -->
  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-toggle="collapse" href="#menu-kk" role="button" aria-expanded="false" aria-controls="menu-kk">
      <i class="bi bi-pencil-square"></i>
      <span>Kartu Keluarga</span>
      <i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul class="collapse" id="menu-kk" data-bs-parent="#sidebar-nav">
      <li class="nav-item">
        <a href="/kartukeluargas" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <span>List Kartu Keluarga</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="/kartukeluargas/create" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <span>Create Kartu Keluarga</span>
        </a>
      </li>
    </ul>
  </li><!-- End Kartu Keluarga Nav -->

  <!-- Menu SKPWNI -->
  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-toggle="collapse" href="#menu-skpwni" role="button" aria-expanded="false" aria-controls="menu-skpwni">
      <i class="bi bi-pencil-square"></i>
      <span>SKPWNI</span>
      <i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul class="collapse" id="menu-skpwni" data-bs-parent="#sidebar-nav">
      <li class="nav-item">
        <a href="/skpwnis" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <span>List SKPWNI</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="/skpwnis/create" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <span>Create SKPWNI</span>
        </a>
      </li>
    </ul>
  </li><!-- End SKPWNI Nav -->

  <li class="nav-item">
    <a class="nav-link" href="/dashboard/laporan">
      <i class="bi bi-archive-fill"></i>
      <span>Laporan</span>
    </a>
  </li>

</ul>
