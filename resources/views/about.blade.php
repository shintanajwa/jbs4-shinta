@extends('layouts.app')


@section('title', 'Home - MyApp')


@section('content')

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="bg-white text-gray-800">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-center mb-8">Tentang Saya</h1>
        <section class="mb-12">
            <h2 class="text-2xl font-semibold mb-4">Visi &amp; Misi</h2>
            <div class="flex flex-col md:flex-row md:justify-between">
                <div class="md:w-1/2">
                    <h3 class="text-xl font-semibold mb-2">Visi</h3>
                    <p class="mb-4">Menjadi pribadi yang berkembang, mandiri, dan memberikan dampak positif bagi lingkungan sekitar, dengan terus belajar dan mengejar impian.</p>
                    <h3 class="text-xl font-semibold mb-2">Misi</h3>
                    <ul class="list-disc list-inside">
                        <li>Menjadi pribadi yang lebih baik setiap hari.</li>
                        <li>Membangun rasa syukur dalam setiap keadaan.</li>
                        <li>Menjaga kesehatan fisik dan mental.</li>
                    </ul>
                </div>
                <div class="md:w-1/2 flex justify-center items-center mt-4 md:mt-0">
                    <img src="nayyyo.jpg" alt="Visi dan Misi" class="rounded" width="150" height="150">
                </div>
            </div>
        </section>
        <section class="mb-12">
            <center><h2 class="text-2xl font-semibold mb-4">Perjalanan Saya</h2><center>
            <p>Di usia 17 tahun ini, saya ingin memanfaatkan waktu untuk lebih mengenal diri sendiri dan mengejar hal-hal yang saya minati. Saya akan fokus pada pendidikan, namun juga berusaha menjaga keseimbangan hidup dengan menjaga hubungan baik dengan orang-orang terdekat. Saya berencana untuk lebih mandiri, belajar mengelola keuangan, dan mulai merencanakan masa depan dengan lebih matang. Setiap tantangan yang datang, saya akan hadapi dengan sikap positif dan tekad untuk terus berkembang.</p>
        </section>
        
            </div>
        </section>
        <section>
            <center><h2 class="text-2xl font-semibold mb-4">Hubungi Saya</h2></center>
            <!-- Add contact information here -->
        </section>
        <p class="text-center">
            <p><center>
                Jika anda memiliki pertanyaan atau masukan, silahkan hubungi saya melalui:</p></center>
                <ul style="list-style-type: none"><center>
                    <li>Email :<a href="shintaainun37@gmail.com">shintaainun37@gmail.com</a></li>
                    <li>No Telp :<a href="081227310257">081227310257</a></li>
                    <li>Alamat : Demak, Jawa Tengah</li>
                </ul><center>


    </div>
</body>
</html>
@endsection