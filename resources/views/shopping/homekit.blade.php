@extends('layouts.appuserui')
@section('content')
<div class="container">
</br>
<div style="text-align: center;">
    <img src="https://cdn.create.vista.com/api/media/small/279297122/stock-photo-panoramic-shot-fresh-vegetables-cooking-utensils-table-kitchen"  width="900" height="150" alt="">
</div>
    <div class="row">
        <div class="col">
            @foreach($prodk as $i)
            @if($i->category == 'Home_Kitchen')
                    <div class="row mt-3">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mt-3">
                                        <div class="col">
                                            //img
                                        </div>
                                        <div class="col">
                                            <h3 class="alert alert-success">{{$i->name}}</h3>
                                            <p>{{$i->Description}}</p>
                                        </div>
                                    </div>

                                    <div class="row mt-2" >
                                        <div class="col text-end">
                                            <a href="{{route('proddet',['id'=>$i->id])}}"class="btn btn-success ">تفاصيل</a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
            @endif
            @endforeach
        </div>
    </div>
</div>
@endsection
