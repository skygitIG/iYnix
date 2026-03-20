<!-- Bootstrap CSS (LOCAL) -->
<link rel="stylesheet" href="homepage/assets/css/bootstrap.min.css">

<!-- Bootstrap Icons CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

<style>

    nav{
        height: 90px;
    }

/* Remove default bootstrap caret */
.dropdown-toggle::after {
  display: none !important;
}

/* Dropdown base styling */
.dropdown-menu {
  background: #111;
  border: none;
  min-width: 220px;
  animation: fadeIn 0.25s ease;
}

.dropdown-item {
  color: #fff;
  transition: 0.3s;
}

.dropdown-item:hover {
  background: #dc3545;
  color: #fff;
}

/* Desktop behavior */
@media (min-width: 992px) {

  .dropdown:hover > .dropdown-menu {
    display: block;
  }

  .dropdown-submenu {
    position: relative;
  }

  .dropdown-submenu > .dropdown-menu {
    position: absolute;
    top: 0;
    left: 100%;
    display: none;
  }

  .dropdown-submenu:hover > .dropdown-menu {
    display: block;
  }
}

/* Mobile styling */
@media (max-width: 991px) {

  .navbar-collapse {
    background: #111;
    padding: 20px;
    border-radius: 12px;
    margin-top: 15px;
  }

  .navbar-nav .nav-link {
    padding: 12px 0;
    font-size: 16px;
  }

  .dropdown-menu {
    background: transparent;
    border: none;
    padding-left: 15px;
    display: none;
  }

  .dropdown-menu.show {
    display: block;
    animation: slideDown 0.25s ease;
  }

  .dropdown-submenu > .dropdown-menu {
    padding-left: 20px;
  }
}

/* Animations */
@keyframes fadeIn {
  from { opacity: 0; transform: translateY(8px); }
  to { opacity: 1; transform: translateY(0); }
}

@keyframes slideDown {
  from { opacity: 0; transform: translateY(-5px); }
  to { opacity: 1; transform: translateY(0); }
}

</style>



<nav class="navbar navbar-expand-lg navbar-dark bg-white fixed-top py-3">
  <div class="container">

    <!-- LOGO -->
    <a class="navbar-brand fw-bold text-danger fs-4" href="#">
      <img src="homepage/images/Iynix Logo White 1.svg" alt="">
    </a>

    <!-- MOBILE TOGGLER -->
    <button class="navbar-toggler border-0 shadow-none"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#mainNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- MAIN NAV -->
    <div class="collapse navbar-collapse justify-content-center" id="mainNavbar">

  <!-- Mobile Close Button -->
  <div class="d-lg-none text-end mb-3">
    <button class="btn btn-sm btn-outline-light"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#mainNavbar">
      <i class="bi bi-x-lg"></i>
    </button>
  </div>

      <ul class="navbar-nav align-items-lg-center gap-lg-4">

        <li class="nav-item">
          <a class="nav-link text-dark" href="#">Home</a>
        </li>

        <!-- SERVICES -->
        <li class="nav-item dropdown">
          <a class="nav-link text-dark d-flex align-items-center justify-content-between"
             href="#" role="button">
            Services
            <i class="bi bi-chevron-down ms-2 small"></i>
          </a>

          <ul class="dropdown-menu">

            <!-- DIGITAL MARKETING -->
            <li class="dropdown-submenu">
              <a class="dropdown-item d-flex justify-content-between align-items-center"
                 href="#">
                Digital Marketing
                <i class="bi bi-chevron-right small"></i>
              </a>

              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Google Ads</a></li>
                <li><a class="dropdown-item" href="#">Meta Ads</a></li>
                <li><a class="dropdown-item" href="#">Performance Marketing</a></li>
              </ul>
            </li>

            <!-- SEO -->
            <li class="dropdown-submenu">
              <a class="dropdown-item d-flex justify-content-between align-items-center"
                 href="#">
                SEO
                <i class="bi bi-chevron-right small"></i>
              </a>

              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Local SEO</a></li>
                <li><a class="dropdown-item" href="#">Technical SEO</a></li>
              </ul>
            </li>

            <li><a class="dropdown-item" href="#">Website Development</a></li>
            <li><a class="dropdown-item" href="#">CRM Automation</a></li>

          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link text-dark" href="#">About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-dark" href="#">Contact</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-dark" href="#">Blogs</a>
        </li>

      </ul>
    </div>

    <!-- RIGHT BUTTON (Desktop Only) -->
    <div class="d-none d-lg-block">
      <a href="#" class="btn btn-danger rounded-pill px-4">
        Let's Talk
      </a>
    </div>

  </div>
</nav>



<script>
document.addEventListener("DOMContentLoaded", function () {

  function handleMobileDropdown() {

    if (window.innerWidth < 992) {

      document.querySelectorAll(".dropdown > a").forEach(function (element) {
        element.onclick = function (e) {
          e.preventDefault();
          let nextMenu = this.nextElementSibling;
          if (nextMenu) {
            nextMenu.classList.toggle("show");
          }
        };
      });

      document.querySelectorAll(".dropdown-submenu > a").forEach(function (element) {
        element.onclick = function (e) {
          e.preventDefault();
          let nextMenu = this.nextElementSibling;
          if (nextMenu) {
            nextMenu.classList.toggle("show");
          }
        };
      });

    } else {
      document.querySelectorAll(".dropdown-menu").forEach(function (menu) {
        menu.classList.remove("show");
      });
    }
  }

  handleMobileDropdown();
  window.addEventListener("resize", handleMobileDropdown);

});
</script>

