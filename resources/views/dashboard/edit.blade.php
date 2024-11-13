@extends('layouts.appdash')
@section('content')


<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-6">
        <form action="{{route('update')}}" action="get">
        <div class="card mt-5 ">
            <div class="card-body bg-secondaray ">
            <div class="row">
            <div class="col">
             <input type="hidden" name="id" value="{{$products->id}}"><!---->
                <label for="">اسم المنتج</label>
               <input type="text" id="t1" name="productname"  value="{{$products->name}}" class="form-control">
            </div>
            <div class="col">
            <label for="">وصف المنتج</label>
              <input type="text" id="t2" name="Description" value="{{$products->Description}}" class="form-control">
            </div>
            <div class="col">
            <label for="category" class="form-label ">الفئة</label>
                <select name="category" id="category" class="form-control">
                    <option value="Electronics" >الكترونيات</option>
                    <option value="Home_Kitchen" >المنزل والمطبخ</option>
                    <option value="Plants">نباتات</option>
                </select>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col text-center">
                <button type="submit" class="btn btn-success "><a href="{{route('update')}}">حفظ</button>
            </div>
        </div>
            </div>
        </div>
    
     </form>

        </div>
    </div>

   
</div>
   

@endsection