@extends('layouts.appdash')
@section('content')
<!--
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                <table class="table text-center">
                        <thead>
                            <tr>
                                <th> اسم العميل</th>
                                <th> المنتج</th>
                                <th> حالة الطلبيه</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($prod as $item)
                            <tr>
                                <td>{{$item->costumar_id}}</td>
                                <td>{{$item->product_id}}</td>
                                <td>{{$item->status}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>-->
@endsection