<div id="wrapper">
    @include('layouts.mahasiswa.sidebar')

    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            @include('layouts.mahasiswa.navbar')

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

@include('layouts.mahasiswa.footer')