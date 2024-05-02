@extends('user.layout.main-user')

@section('homepage')
    {{-- menampilkan navbar --}}
    @include('user.partials.navbar-user')

    <div class="section d-flex justify-content-center align-items-center">
        <div class="section-container pb-3  mt-5">
            {{-- logic sapaan otomatis --}}
            @php
                $jam = date('H');
                if ($jam < '12') {
                    echo '<h2>Selamat Pagi: {{ $nama }} </h2>';
                } elseif ($jam < '18') {
                    echo '<h2>Selamat Siang: {{ $nama }} </h2>';
                } else {
                    echo '<h2>Selamat Malam: {{ $nama }} </h2>';
                }
            @endphp
            <p class="pb-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat, repudiandae autem velit et
                odio numquam? Eveniet similique sequi expedita iusto, quasi mollitia dolor exercitationem quia culpa
                doloribus debitis nesciunt, qui molestias. Non debitis libero dignissimos quod minus nihil doloribus? Quasi
                doloribus dicta quia quos placeat quisquam beatae nemo molestiae ut nostrum, id nam saepe! Unde mollitia
                qui, ratione incidunt illo beatae officiis ad. Dolore, velit? Quas quibusdam a, hic accusantium voluptatum,
                id, omnis neque quod voluptatem maxime dolorum deserunt ipsum dolore sapiente necessitatibus doloribus
                reprehenderit beatae quia non nemo quaerat ea nesciunt obcaecati! Sapiente, accusantium eos reiciendis
                laborum similique reprehenderit.</p>
        </div>
    </div>

    {{-- tagihan --}}
    <div class="section justify-content-center align-items-center">
        <div class="section-container pb-3 d-flex flex-column align-items-start text-start mt-5">
            <h2>Tagihan</h2>
        </div>
        <table class="table table-striped table-sm ">
            <thead>
                <tr>
                    <th scope="col">Bulan</th>
                    <th scope="col">Jumlah</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1,001</td>
                    <td>random</td>
                </tr>
                <td>1,001</td>
                <td>random</td>
                </tr>
            </tbody>
        </table>
        <button class="btn rounded-5 px-4 py-2 mt-3" onclick="window.location.href='/login';">Bayar Sekarang</button>

    </div>



    {{-- menampilkan footer --}}
    @include('user.partials.footer-user')
@endsection