<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #3A5C9F;">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3">
            <img src="{{asset('assets/img/logo.png')}}" alt="logo" style="width: 150px;">
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Pengajuan Pembimbing -->
    <li class="nav-item active">
        <a class="nav-link" href="{{url('pembimbing')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Pembimbing</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">


    <!-- Nav Item - Pages Berkas -->
    <li class="nav-item active">
        <a class="nav-link" href="{{url('laporan_koor')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Laporan</span></a>
    </li>

    <!-- Nav Item - Laporan -->
    <li class="nav-item active">
        <a class="nav-link" href="{{url('penilaian')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Penilaian</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{url('jadwal_koor')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Jadwal</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

   

    <!-- Divider -->
    <!-- <hr class="sidebar-divider d-none d-md-block"> -->

</ul>

<!-- End of Sidebar -->