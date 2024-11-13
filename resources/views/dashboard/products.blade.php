@extends('layouts.appdash')
@section('content')

<!--modal del-->
<div class="modal" tabindex="-1" id="delete">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">رسالة تأكيد</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>هل بالفعل تريد حذف السجل؟</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إالغاء</button>
        <button type="button" class="btn btn-danger"data-bs-dismiss="modal" onclick="confirm()">حذف</button>
      </div>
    </div>
  </div>
</div>

<!--modalnewpr-->
<div class="modal" tabindex="-1" id="addproducts">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">أضافة منتج</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <form action="{{route('create_newproducts')}}">
                <div class="row">
                    <div class="col">
                        <label for="productname" class="form-label">اسم المنتج</label>
                        <input type="text" class="form-control p-2" name="productname" id="productname">
                    </div>
                    <div class="col">
                        <label for="Description" class="form-label">وصف المنتج</label>
                        <input type="text" class="form-control p-2" name="Description" id="Description">
                    </div>
                    <div class="col">
                      <label for="category" class="form-label ">الفئة</label>
                        <select name="category" id="category" class="form-control p-2">
                          
                          <option value="Electronics" >الكترونيات</option>
                          <option value="Home_Kitchen" >المنزل والمطبخ</option>
                          <option value="Plants">نباتات</option>

                        </select>
                    </div>
                </div>   
                <div class="row mt-3">
                    <div class="col">
                        <button type="submit" class="btn btn-success ">حفظ</button>
                    </div>
                </div> 
            </form>
      </div>
    </div>
  </div>
</div>

<div class="container">
    <div class="row mt-5">
        <div class="col">
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addproducts" >أضافة</button> <!--عطيناه الايدي حق المودل حق اضافة المنتجات عشان يعرف ايش يشغل مودل-->
        </div>
    </div>

    <div class="row mt-5">
        <div class="col">
            <div class="card">
                <div class="card-body bg-secondary">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th>رقم المنتج</th>
                                <th>اسم المنتج</th>
                                <th>وصف المنتج</th>
                                <th>الفئه </th>
                                <th colspan="2">الإجراء</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($prod as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->Description}}</td>
                                <td>{{$item->category}}</td>
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


@endsection
