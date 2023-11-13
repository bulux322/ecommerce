<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Rockerack Overland | Dashboard</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('admins/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('admins/vendors/base/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{asset('admins/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('admins/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('admins/images/favicon.png')}}"/>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
          <a class="navbar-brand brand-logo" href="{{route('app.index')}}"><img src="{{asset('admins/images/logo.svg')}}" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="{{route('app.index')}}"><img src="{{asset('admins/images/logo-mini.svg')}}" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-4 w-100">
          <li class="nav-item nav-search d-none d-lg-block w-100">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="mdi mdi-magnify"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown me-1">
            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-bs-toggle="dropdown">
              <i class="mdi mdi-message-text mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="messageDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="{{asset('admins/images/faces/face4.jpg')}}" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal">David Grey
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="{{asset('admins/images/faces/face2.jpg')}}" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal">Tim Cook
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    New product launch
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="{{asset('admins/images/faces/face3.jpg')}}" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal"> Johnson
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown me-4">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
              <i class="mdi mdi-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-success">
                    <i class="mdi mdi-information mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-warning">
                    <i class="mdi mdi-settings mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-info">
                    <i class="mdi mdi-account-box mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
              <img src="{{asset('admins/images/faces/face5.jpg')}}" alt="profile"/>
              <span class="nav-profile-name">Louis Barnett</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="mdi mdi-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item">
                <i class="mdi mdi-logout text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.index')}}">
              <i class="mdi mdi-view-dashboard menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.product')}}">
              <i class=" mdi mdi-shopping menu-icon"></i>
              <span class="menu-title">Kumpulan Produk</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.categories')}}">
              <i class="mdi mdi-package menu-icon"></i>
              <span class="menu-title">Kumpulan Kategori</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.orders')}}">
              <i class="mdi mdi-cart menu-icon"></i>
              <span class="menu-title">Kumpulan Order</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.blogcategories.index')}}">
              <i class="mdi mdi-cart menu-icon"></i>
              <span class="menu-title">Blog Category</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.blogposts.index')}}">
              <i class="mdi mdi-cart menu-icon"></i>
              <span class="menu-title">Blog Post</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      @yield('konten')
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{asset('admins/vendors/base/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{asset('admins/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('admins/vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{asset('admins/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('admins/js/off-canvas.js')}}"></script>
  <script src="{{asset('admins/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('admins/js/template.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('admins/js/dashboard.js')}}"></script>
  <script src="{{asset('admins/js/data-table.js')}}"></script>
  <script src="{{asset('admins/js/jquery.dataTables.js')}}"></script>
  <script src="{{asset('admins/js/dataTables.bootstrap4.js')}}"></script>
  <!-- End custom js for this page-->
  <script src="{{asset('js/jquery.cookie.js')}}" type="text/javascript"></script>
  <script src="https://cdn.tiny.cloud/1/bv35vugjg7zgxa70u30umkldf3p3wk4zqkzavv58r8g7fpbu/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
  @stack('script')
</body>
<script>
    document.addEventListener("DOMContentLoaded", function() {
    // Referensi elemen-elemen HTML
    var searchInput = document.getElementById("datatable-input");
    var selectDropdown = document.getElementById("datatable-selector");
    var table = document.getElementById("recent-purchases-listing");

    // Event listener untuk input pencarian
    searchInput.addEventListener("input", function() {
        var searchText = this.value.toLowerCase();
        var rows = table.getElementsByTagName("tr");

        for (var i = 1; i < rows.length; i++) {
            var row = rows[i];
            var rowData = row.textContent.toLowerCase();

            if (rowData.includes(searchText)) {
                row.style.display = "";
            } else {
                row.style.display = "none";
            }
        }
    });

    // Event listener untuk select dropdown
    selectDropdown.addEventListener("change", function() {
        var selectedValue = this.value;
        var rows = table.getElementsByTagName("tr");

        for (var i = 1; i < rows.length; i++) {
            var row = rows[i];

            // Mengatur tampilan baris berdasarkan nomor urut
            if (i <= selectedValue) {
                row.style.display = "";
            } else {
                row.style.display = "none";
            }
        }
    });

    document.getElementById('date-filter').addEventListener('change', function() {
        var selectedOption = this.value;
        // Kirim permintaan AJAX ke server dengan opsi yang dipilih, dan perbarui tampilan data.
    });

    function fetchFilteredData(selectedOption) {
        fetch('/filter-data/' + selectedOption)
            .then(response => response.text())
            .then(data => {
                document.getElementById('filtered-data').innerHTML = data;
            });
    }
    var selectedOption = document.getElementById('date-filter').value;
    });

    document.addEventListener('DOMContentLoaded', function () {
        const nameInput = document.querySelector('input[name="name"]');
        const slugInput = document.querySelector('input[name="slug"]');

        nameInput.addEventListener('keyup', function () {
            const nameValue = nameInput.value.trim();
            const slugValue = nameValue.toLowerCase().replace(/[^a-z0-9-]+/g, '-');
            slugInput.value = slugValue;
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
        const nameInput = document.querySelector('input[name="title"]');
        const slugInput = document.querySelector('input[name="slug"]');

        nameInput.addEventListener('keyup', function () {
            const nameValue = nameInput.value.trim();
            const slugValue = nameValue.toLowerCase().replace(/[^a-z0-9-]+/g, '-');
            slugInput.value = slugValue;
            });
        });

        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .then( editor => {
                    console.log( editor );
            })
            .catch( error => {
                    console.error( error );
            });
</script>
@stack('script')
</html>

