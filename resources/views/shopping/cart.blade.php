<!--@extends('layouts.appuserui')
@section('content')
<div class="container mt-4">
    <h3 class="text-end">سلة المشتريات</h3>
    @if(empty($cartItems))<!--اذا كانت فاضيه-->
     <!--   <p class="text-end"> لايوجد  مشتريات </p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>المنتج</th>
                    <th>الكمية</th>
                    <th>السعر</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cartItems as $item)
                <tr>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['quantity'] }}</td>
                    <td>{{ $item['price'] }} ريال</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection-->
