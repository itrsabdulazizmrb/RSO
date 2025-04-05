<?php $current_page = $this->uri->segment(2); ?>

<body class="dark-version ">
<div class="d-flex" id="layout-wrapper">

<aside class="sidenav navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 d-lg-block" id="sidenav-main">
      <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="<?= base_url('antrol/dashboard'); ?>">
        <img src="../assets/LogoIT.png" width="30px" height="50px" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-4 font-weight-bold">RSO</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?= ($current_page == 'dashboard') ? 'active' : ''; ?>" href="#">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-chart-bar-32 text-white text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($current_page == 'rajal') ? 'active' : ''; ?>" href="<?= base_url('data/rajal'); ?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-books text-white text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Rawat Jalan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($current_page == 'ranap') ? 'active' : ''; ?>" href="<?= base_url('data/ranap'); ?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-books  text-white text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Rawat Inap</span>
          </a>
        </li>
        <?php
          $current_page = $this->uri->segment(2);
          $tables_active = in_array($current_page, ['table_kirim_antrian', 'table_kirim_task']) ? 'active' : '';
          $tables_submenu_show = in_array($current_page, ['table_kirim_antrian', 'table_kirim_task']) ? 'show' : '';
        ?>

        <li class="nav-item">
          <a class="nav-link d-flex align-items-center <?= $tables_active ?>" id="tablesMenuToggle" href="#" role="button">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-collection text-white text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">RL</span>
            <i class="fas fa-chevron-down ms-auto transition <?= $tables_submenu_show ? 'rotate-180' : '' ?>" id="tablesChevron"></i>
          </a>
          <div class="collapse <?= $tables_submenu_show ?>" id="tablesSubmenu">
            <ul class="nav flex-column ms-3">
              <li class="nav-item">
                <a class="nav-link <?= ($current_page == 'table_kirim_antrian') ? 'active bg-gradient-primary text-white' : '' ?>" href="<?= base_url('data/RL35'); ?>">RL 3.5 Kunjungan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?= ($current_page == 'table_kirim_task') ? 'active bg-gradient-primary text-white' : '' ?>" href="<?= base_url('data/RL38'); ?>">RL 3.8 Laboratorium</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?= ($current_page == 'table_kirim_antrian') ? 'active bg-gradient-primary text-white' : '' ?>" href="<?= base_url('data/RL310'); ?>">RL 3.10 Rujukan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?= ($current_page == 'table_kirim_task') ? 'active bg-gradient-primary text-white' : '' ?>" href="<?= base_url('data/RL41'); ?>">RL 4.1 Morbiditas Pasien Rawat Inap</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?= ($current_page == 'table_kirim_antrian') ? 'active bg-gradient-primary text-white' : '' ?>" href="<?= base_url('data/RL41Ralan'); ?>">RL 5.1 Morbiditas Pasien Rawat Jalan</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-button-power text-white text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Log Out</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  <main id="main-content" class="main-content position-relative flex-grow-1 border-radius-lg">
