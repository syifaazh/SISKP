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
        <a class="nav-link" href="{{url('akun')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Akun</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">


    <!-- Nav Item - Pages Berkas -->
    <li class="nav-item active">
        <a class="nav-link" href="{{url('nilai_mhs')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Penilaian</span></a>
    </li>

    <!-- Nav Item - Laporan -->
    <li class="nav-item active">
        <a class="nav-link" href="{{url('rekap_mhs')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Rekap</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

   

    <!-- Divider -->
    <!-- <hr class="sidebar-divider d-none d-md-block"> -->

</ul>

<!-- End of Sidebar -->