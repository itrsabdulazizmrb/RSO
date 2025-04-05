
<!-- Navbar -->
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="false">
  <div class="container-fluid py-1 px-3 d-flex justify-content-between align-items-center">
    
    <!-- Breadcrumb dan Judul -->
    <nav aria-label="breadcrumb" class="breadcrumb-container">
      <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm">
          <a class="opacity-5 text-white" href="<?= base_url('antrol/dashboard'); ?>">Home</a>
        </li>
        <li class="breadcrumb-item text-sm text-white" aria-current="page">
          <?= isset($title) ? $title : 'Dashboard'; ?>
        </li>
      </ol>
      <h6 class="font-weight-bolder text-white mb-0">
        <?= isset($title) ? $title : 'Dashboard'; ?>
      </h6>
    </nav>

    <!-- Bagian Foto Profil & Toggle Sidebar -->
    <div class="d-flex align-items-center">

      <!-- Foto Profil -->
      <a href="javascript:;" class="nav-link text-white p-0 d-flex align-items-center">
        <span class="d-sm-inline d-none me-2"><?= $username['id']; ?></span>
        <img class="rounded-circle profile-img fixed-plugin-button-nav cursor-pointer" src="<?= base_url('assets/sjw.jpg') ?>" style="width: 40px; height: 40px;" id="toggleSidebar">
      </a>


      <!-- Tombol Toggle Sidebar -->
      <!-- <button class="btn btn-icon btn-primary ms-3" id="toggleSidebar">
        <i class="fas fa-bars"></i>
      </button> -->

    </div>

  </div>
</nav>
<!-- End Navbar -->
