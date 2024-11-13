@extends('layouts.appuserui')
@section('content')
<div class="container">
</br>
<div style="text-align: center;">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzjADbdJVtiJglnrZ8TEXWUORjvUED1c2Wry3C5y4Vb35GKxuAzO5PVwSlX07Uu1W63oU&usqp=CAU" width="900" height="150" alt="">
</div>
    <div class="row mt-3">
        <div class="col">
            @foreach($product as $item)
            @if($item->category == 'Electronics')
            <div class="row mt-3">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mt-4 mb-4">
                                <div class="col">
                                    <h3 class="alert alert-success" style="border-radius: 5px;"  >{{$item->name}}</h3>
                                    <p>{{$item->Description}}</p>
                                </div>
                            </div>

                            <div class="row mt-2" >
                                <div class="col text-end">
                                    <a href="{{route('proddet',['id'=>$item->id])}}"class="btn btn-success " style="border-radius: 5px;">تفاصيل</a>
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