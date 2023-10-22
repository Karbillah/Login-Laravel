@extends('template')
@section('content')
<div class="jumbotron mt-3">
    <h1 class="display-4">Selamat Datang!</h1>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4 class="card-title">Rekomendasi Semua Cerita</h4>
                    </div>
                    <div class="card-body">
                        <style>
                            .filter-container {
                                display: grid;
                                grid-template-columns: repeat(6, 1fr); /* Membuat 6 kolom dengan ukuran yang sama */
                                grid-gap: 10px; /* Jarak antar gambar */
                            }

                            .filter-item {
                                background-color: #f7f7f7; /* Warna latar belakang */
                                border: 1px solid #ddd; /* Border */
                                text-align: center; /* Pusatkan gambar */
                                padding: 10px;
                            }

                            .filter-item img {
                                max-width: 100%; /* Gambar akan mengisi seluruh lebar kontainer */
                                height: auto;
                            }
                        </style>
                        <div class="filter-container">
                            @foreach(['book1.jpg', 'book2.jpg', 'book3.jpg', 'book4.jpg', 'book5.jpg', 'book6.jpg', 'book7.jpg', 'book8.jpg', 'book9.jpg', 'book10.jpg', 'book11.jpg', 'book12.jpg', 'book13.jpg', 'book14.jpg', 'book15.jpg', 'book16.jpg', 'book17.jpg', 'book18.jpg', 'book19.jpg', 'book20.jpg', 'book21.jpg', 'book22.jpg', 'book23.jpg', 'book24.jpg', 'book25.jpg', 'book26.jpg', 'book27.jpg', 'book28.jpg', 'book29.jpg', 'book30.jpg', 'book31.jpg', 'book32.jpg', 'book33.jpg', 'book34.jpg', 'book35.jpg', 'book36.jpeg', 'book37.jpg', 'book38.jpg', 'book39.jpg', 'book40.jpg', 'book41.jpg', 'book42.jpg',] as $image)
                            <div class="filter-item" data-category="1" data-sort="white sample">
                                <img src="{{ asset('assets/' . $image) }}" alt="Book">
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection 