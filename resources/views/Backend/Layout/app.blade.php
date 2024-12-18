<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HyundaiFe - @yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('assets_two/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets_two/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets_two/css/style.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>

    <!-- Sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<style>
    .icon-large {
        font-size: 1.2rem;
        /* Atur ukuran sesuai kebutuhan */
    }
</style>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">

        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="{{ Route('admin.dashboard') }}" class="navbar-brand mx-4 mb-3">
                    <h3 class="">HyundaiFe</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{ asset('storage/' . Auth::user()->foto) }}" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"></h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Konten</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="" class="dropdown-item"><i class="bi bi-bookmark-fill me-2"></i>Kategori</a>
                            <a href="" class="dropdown-item"><i class="bi bi-tag-fill me-2"></i>Tag</a>
                            <a href="" class="dropdown-item"><i class="bi bi-book-fill me-2"></i>Artikel</a>
                            <a href="" class="dropdown-item"><i class="bi bi-grid-fill me-2"></i>Menu</a>
                        </div>
                    </div>
                </div>
        </div>
        </nav>
    </div>
    <!-- Sidebar End -->


    <!-- Content Start -->
    <div class="content">
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
            <a href="{{ route('admin.dashboard') }}" class="navbar-brand d-flex d-lg-none me-4">
                <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
            </a>
            <a href="#" class="sidebar-toggler flex-shrink-0">
                <i class="fa fa-bars"></i>
            </a>
            <div class="navbar-nav align-items-center ms-auto">
                <div class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <img class="rounded-circle me-lg-2" src="" alt="" style="width: 40px; height: 40px;">
                        <span class="d-none d-lg-inline-flex"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                        <a href="{{ Route('admin.profile') }}" class="dropdown-item">My Profile</a>
                        <a href="{{ Route('admin.logout') }}" class="dropdown-item">Log Out</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->
        <div class="container-fluid pt-4 px-4">
            @yield('content')
        </div>

        <!-- Footer Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="bg-light rounded-top p-4">
                <div class="row">
                    <div class="col-12 col-sm-6 text-center text-sm-start">
                        &copy; <a href="#">HyundaiFe - Hyundai</a>, All Right Reserved.
                    </div>
                    <div class="col-12 col-sm-6 text-center text-sm-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a href="">Cempluk</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

    </div>
    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>
    <!-- Template Javascript -->
    <script src="{{ asset('assets_two/js/main.js') }}"></script>
</body>

</html>