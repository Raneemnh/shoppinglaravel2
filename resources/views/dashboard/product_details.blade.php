@extends('layouts.appdash')

@section('content')
<!-- delete model-->
 
<div class="container">
    <h3 class="alert alert-success mt-3">تفاصيل المنتجات</h3>
    <form action="{{route('createnewdet')}}" method="post">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="row">

                    <div class="col">
                        <label for="products_id" class="form-label">اختر المنتج</label>
                        <select class="form-select" id="products_id" name="products_id">
                            @foreach($prod as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>


                <div class="row">

                    <div class="col">
                        <label for="price" class="form-label">سعر المنتج</label>
                        <input type="text" class="form-control" id="price" name="price">
                    </div>

                    <div class="col">
                        <label for="qty" class="form-label">الكمية </label>
                        <input type="text" class="form-control" id="qty" name="qty">
                    </div>
                </div>

                <div class="row">

                    <div class="col">
                        <label for="color" class="form-label">لون المنتج</label>
                        <input type="text" class="form-control" id="color" name="color">
                    </div>

                    <div class="col">
                        <label for="image" class="form-label">صورة المنتج </label>
                        <input type="text" class="form-control" id="image" name="image">
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col text-center">
                        <button class="btn btn-success"> حفظ</button>
                    </div>
                </div>   
            </div>
    </form>

    
    <div class="row mt-5">
        <div class="col">
            <div class="card">
                <div class="card-body bg-secondary">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th>رقم المنتج</th>
                                <th>اسم المنتج</th>
                                <th>سعر المنتج</th>
                                <th>الكمية </th>
                                <th>اللون </th>
                                <th>الصوره </th>
                                <th colspan="2">الإجراء</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($productsdetails as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->price}}</td>
                                <td>{{$item->qty}}</td>
                                <td>{{$item->color}}</td>
                                <td>{{$item->image}}</td>
                                <td><a href="#" onclick="lunch({{$item->id}})"><i class="bi bi-trash text-danger"></i></a></td>
                                <td><a href="{{route('edit',['id'=>$item->id])}}" ><i class="bi bi-pen text-success"></i></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
   </div>
</div>

@endsection