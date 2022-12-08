@extends('components.layouts.parent')

@section('title', 'User')
@section('icon', 'icon.ico')

@section('sidebar')
    @parent
    <p class="text-end">This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p class="text-center">This is my body content.</p>

    @php
    $users = [
        [
            "nama" => "Valentino",
            "foto" => "img/1.jpg",
            "bio"  => "Rajin Belajar",
            "active" => true,
            "alamat" => "Persada Kemala",
            "role" => "admin"
        ],
        [
            "nama" => "Carolina",
            "foto" => "img/2.jpg",
            "bio"  => "Rajin menyanyi",
            "active" => true,
            "alamat" => "Jalan Kartini",
            "role" => "user"
        ],
        [
            "nama" => "Marina",
            "foto" => "img/3.jpg",
            "bio"  => "Rajin menggambar",
            "active" => true,
            "alamat" => "jalan Marina Ancol",
            "role" => "user"
        ],
        [
            "nama" => "Jeha",
            "foto" => "img/4.jpg",
            "bio"  => "Rajin naik Gunung",
            "active" => false,
            "alamat" => "Jalan Bantul",
            "role" => "user"
        ],
        [
            "nama" => "Endjai",
            "foto" => "img/5.jpg",
            "bio"  => "Rajin berselancar",
            "active" => true,
            "alamat" => "Jalan Perkayuan",
            "role" => "admin"
        ],
    ];
    $filter =  [
        "active" => true,
        "role" => "admin"
    ]
@endphp
<div class="container mx-auto flex flex-wrap justify-between">
        @foreach ($users as $key => $user)

            @include('components.cards.biodata')


        @endforeach
</div>
@endsection
