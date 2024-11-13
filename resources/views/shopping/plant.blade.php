@extends('layouts.appuserui')
@section('content')
<div class="container">

</br>
<div style="text-align: center;">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT6SqCfVLKEyD1hZ6XZwxAnFtCHMH9CQ2DatQ&s" width="900" height="150"  alt="">
</div>
    <div class="row">
        <div class="col">
            @foreach($prod as $i)
            @if($i->category == 'Plants')
                    <div class="row mt-3">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mt-3">
                                        <div class="col">
                                            <h3 class="alert alert-success" style="border-radius: 5px;">{{$i->name}}</h3>
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
