@extends('layouts.appuserui')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="text-end mt-5">أهلا بكم في موقعنا للتسوق الإلكتروني</h2>
            <p class="text-end">المنصة الرائده في التسوق الإلكتروني</p>
        </div>


        <div class="row mt-5 "  >
            <!--card1-->
            <div class="col">
                <a href="{{route('homekit')}}">
                <div class="card">
                    <div class="card-body">     
                        <div class="row d-flex">
                            <div class="col text-center">
                                <h4>المطبخ والمنزل</h4>
                            </div>

                            <div class="col text-end">
                                 <i class="bi bi-houses-fill h1"></i>
                            </div>
                        </div>

                    </div>
                </div>
                </a>
            </div>


            <!--card2-->
            <div class="col">
                <a href="{{route('plant')}}">
                <div class="card">
                    <div class="card-body">     
                        <div class="row d-flex">
                            <div class="col text-center">
                                <h3>نباتات</h3>
                            </div>

                            <div class="col text-end">
                                <i class="bi bi-flower2 h1" ></i>
                            </div>
                        </div>

                    </div>
                </div>
                </a>
            </div>


            <!--card3-->
            <div class="col">
                <a href="{{route('electric')}}">
                <div class="card">
                    <div class="card-body">     
                        <div class="row d-flex">
                            <div class="col text-center">
                                <h3>الالكترونيات</h3>
                            </div>

                            <div class="col text-end">
                                <i class="bi bi-laptop h1" ></i>
                            </div>
                        </div>

                    </div>
                </div>
                </a>
            </div>

        </div>
    </div>
</div>
@endsection