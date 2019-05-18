@extends('Blog.app')

@section('bg-judul',asset('blog/images/slider-1.jpg'))

@section('Judul','Pendonor')

@section('footer-tambahan')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        * {
            box-sizing: border-box;
            }

            /* Style the search field */
            form.example input[type=text] {
            padding: 10px;
            font-size: 17px;
            border: 1px solid grey;
            float: left;
            width: 80%;
            background: #f1f1f1;
            }

            /* Style the submit button */
            form.example button {
            float: left;
            width: 20%;
            padding: 10px;
            background: #2196F3;
            color: white;
            font-size: 17px;
            border: 1px solid grey;
            border-left: none; /* Prevent double borders */
            cursor: pointer;
            }

            form.example button:hover {
            background: #0b7dda;
            }

            /* Clear floats */
            form.example::after {
            content: "";
            clear: both;
            display: table;
            }
    </style>
@endsection

@section('main-section')

<section class="blog-area section">
    <div class="container">
            <form class="form-inline example" action="">
                <select class="form-control select2">
                    <option>A</option>
                    <option>B</option>
                    <option>O</option>
                    <option>AB</option>
                </select>
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        <div class="row">
        @foreach ($profiles as $user)
            <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                    <div class="single-post post-style-1">

                        <div class="blog-image"><img src="{{asset('blog\images\blood-donor .jpg')}}" alt="Blog Image"></div>

                        <div class="blog-info">

                            <h4 class="title" style="text-transform: capitalize;">
                                <b>{{ $user->name }}</b>
                            </h4>
                            {{-- <p class="align-text-bottom ">{{ $post->subtitle }}</p> --}}
                            <ul>
                                <li><h5><b>Nama : </b></h5></li>
                                <li>{{ $user->name }} </li>
                            </ul>
                            <ul>
                                <li><h5><b>Alamat : </b></h5></li>
                                <li>{{ $user->address }} </li>
                            </ul>
                            <ul>
                                <li><h5><b>Golongan Darah : </b></h5></li>
                                <li>{{ $user->gol_darah }} </li>
                            </ul>
                            <ul>
                                <li><h5><b>Pekerjaan : </b></h5></li>
                                <li>{{ $user->pekerjaan }} </li>
                            </ul>
                            <ul>
                                <li><h5><b>Jenis kelamin : </b></h5></li>
                                <li>{{ $user->jenis_kelamin }} </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</section>


    @include('Blog/layout/footer')

@endsection

