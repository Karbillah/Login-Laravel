@extends('template')
@section('content')
<div class="content-wrapper mt-3">
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4 class="card-title">Daftar Cerita Berdasarkan Genre</h4>
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
                        <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4 class="card-title">Fiksi Remaja</h4>
                        </div>
                        <div class="filter-container">
                            @foreach(['book8.jpg', 'book35.jpg', 'book10.jpg', 'book19.jpg', 'book5.jpg', 'book38.jpg'] as $image)
                            <div class="filter-item" data-category="1" data-sort="white sample">
                                <img src="{{ asset('assets/' . $image) }}" alt="Book">
                            </div>
                            @endforeach
                        </div>
                    </div>
                    </div>

                    <div class="col-13 mt-3">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4 class="card-title">Fantasi</h4>
                        </div>
                        <div class="filter-container">
                            @foreach(['book29.jpg', 'book30.jpg', 'book33.jpg', 'book31.jpg', 'book32.jpg', 'book23.jpg'] as $image)
                            <div class="filter-item" data-category="1" data-sort="white sample">
                                <img src="{{ asset('assets/' . $image) }}" alt="Book">
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-13 mt-3">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4 class="card-title">Horor</h4>
                        </div>
                        <div class="filter-container">
                            @foreach(['book1.jpg', 'book2.jpg', 'book3.jpg', 'book9.jpg', 'book28.jpg', 'book11.jpg'] as $image)
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
    </div>
</div>
</section>
@endsection