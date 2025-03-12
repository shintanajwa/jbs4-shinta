@extends('layouts.app')

@section('title', 'Home - MyApp')

@section('content')
<div class="card">
    <div class="card-header">
        <center><h1>Tentang Saya</h1></center>
        </div>
        <div class="card-body">
    <h5 class="text-center">Perjalanan Saya</h5>
        <p>Di usia 17 tahun, saya sudah melalui berbagai pengalaman yang membuat saya belajar banyak hal. Terkadang hidup terasa penuh tantangan, tetapi saya belajar untuk melihatnya sebagai kesempatan untuk tumbuh. Setiap hari adalah langkah baru, dan saya berusaha untuk tetap positif meskipun tidak semua hal berjalan sesuai dengan rencana.

        </p>
        <p>Masa remaja memang penuh dengan pencarian jati diri. Terkadang saya merasa bingung dan cemas tentang masa depan, terutama saat memasuki tahun terakhir sekolah. Namun, saya mencoba untuk menikmati setiap momen dan mempercayai bahwa setiap pilihan yang saya buat akan membawa saya ke arah yang benar.

        </p>
        <p>Saya belajar bahwa nggak ada yang instan dalam hidup, dan perjalanan menuju impian itu penuh dengan proses. Saya sadar, saya nggak perlu terburu-buru mencapai semuanya, yang penting adalah terus berusaha dan tidak takut untuk mencoba hal-hal baru. Setiap pengalaman, baik itu kesuksesan maupun kegagalan, adalah bagian penting dari perjalanan ini.

        </p>
        <p>Sekarang, meskipun banyak hal yang masih harus saya pelajari, saya merasa semakin siap untuk melangkah ke tahap berikutnya. Saya berharap bisa terus berkembang, belajar, dan mengejar impian saya satu langkah demi satu langkah.

        </p>
     </div>
     <div class="mb-5">
        <h2 class="text-center">Hubungi Saya</h2>
        <p class="text-center">
            <p>
                Jika anda memiliki pertanyaan atau masukan, silahkan hubungi kami melalui:
            </p>
        <div class="text-center">
            <a href="{{ route('contact')}}" class="btn btn-primary btn-lg">Hubungi Kami</a>
        </div>
    </div>
</div>
@endsection