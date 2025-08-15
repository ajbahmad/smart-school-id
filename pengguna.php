<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Smart-Absensi</title>
  <link rel="shortcut icon" type="image/png" href="assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="assets/css/styles.min.css" />
  <link rel="stylesheet" href="assets/css/custom.css" />
</head>

<body>

  <!--  Body Wrappers -->

  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">

    <?php include 'menu/sidebar.php' ?>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">

            <div class="brand-logo d-none d-xl-flex align-items-center justify-content-between">
              <a href="index.html" class="text-nowrap logo-img d-flex align-items-center gap-2">
                <b class="logo-icon">
                  <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                  <!-- Dark Logo icon -->
                  <img src="assets/images/logos/logo-light-icon.svg" alt="homepage" class="dark-logo" />
                </b>
                <!--End Logo icon -->
                <!-- Logo text -->
                <span class="logo-text">
                  <!-- dark Logo text -->
                  <img src="assets/images/logos/logo-light-text.svg" alt="homepage" class="dark-logo ps-2" />
                </span>
              </a>
            </div>

            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler " id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link " href="javascript:void(0)" id="drop1" data-bs-toggle="dropdown" aria-expanded="false">
                <iconify-icon icon="solar:bell-linear" class="fs-6"></iconify-icon>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
              <div class="dropdown-menu dropdown-menu-animate-up" aria-labelledby="drop1">
                <div class="message-body">
                  <a href="javascript:void(0)" class="dropdown-item">
                    Item 1
                  </a>
                  <a href="javascript:void(0)" class="dropdown-item">
                    Item 2
                  </a>
                </div>
              </div>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link " href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a>
                    <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <main>
        <div class="body-wrapper-inner">
          <div class="container-fluid">
            <h2 class="mb-4 fw-bold">Pengguna</h2>

            <!-- Filter Form -->
            <div class="card shadow-sm mb-4">
              <div class="card-body">
                <form class="row g-3 align-items-end">
                  <div class="col-md-3">
                    <label for="keyword" class="form-label">Pencarian</label>
                    <input type="text" id="keyword" class="form-control" placeholder="Cari nama...">
                  </div>
                  <div class="col-md-5">
                    <button type="submit" class="btn btn-primary me-2">Filter</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <a href="tambah-pengguna.php" class="btn btn-secondary text-black">Add Data</a>
                  </div>
                </form>
              </div>
            </div>

            <!-- Table -->
            <div class="card shadow-sm">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped table-hover">
                    <thead class="table-primary">
                      <tr class="text-center">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th>Tanggal Dibuat</th>
                        <th>Opsi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="text-center">
                        <td>1</td>
                        <td>Padli</td>
                        <td>padli</td>
                        <td>Kepala Sekolah</td>
                        <td>15-08-2025</td>
                        <td class="col-md-3">
                          <button type="button" class="btn btn-sm btn-primary me-2">Show</button>
                          <a href="edit-pengguna.php" class="btn btn-sm btn-warning me-2">Edit</a>
                          <button type="button" class="btn btn-sm btn-danger me-2">Hapus</button>
                        </td>
                      </tr>
                      <tr class="text-center">
                        <td>2</td>
                        <td>Moh Rifa'i</td>
                        <td>rifai</td>
                        <td>Guru BK</td>
                        <td>15-08-2025</td>
                        <td class="col-md-3">
                          <button type="button" class="btn btn-sm btn-primary me-2">Show</button>
                          <a href="edit-pengguna.php" class="btn btn-sm btn-warning me-2">Edit</a>
                          <button onclick="notif()" type="button" class="btn btn-sm btn-danger me-2">Hapus</button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>


          </div>
        </div>
      </main>
    </div>
  </div>
  <script>
    function notif() {
      Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire({
            title: "Deleted!",
            text: "Your file has been deleted.",
            icon: "success"
          });
        }
      });
    }
  </script>
  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/sidebarmenu.js"></script>
  <script src="assets/js/app.min.js"></script>
  <script src="assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="assets/js/dashboard.js"></script>
  <!-- solar icons -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>