<div id="wrapper">
    @include('layouts.dosen.sidebar')

    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            @include('layouts.dosen.navbar')

            <main>
                <div class="container-fluid">
                    @yield('content')

                    <!--- yield ini adalah mendeklarasian yang akan diisi konten ketika yieldnya dipanggil
                        didalam konten masing-masing, contoh yield yang diatas menggunakan value content-->
                </div>
            </main>
        </div>
    </div>
</div>

@include('layouts.dosen.footer')