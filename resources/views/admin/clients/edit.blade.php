@extends('layouts.admin.app')
@section('content')
    <div class="box-body col-md-8 text-center my-5">
        @include('admin.partials._errors')

        <form action="{{route('admin.clients.update',$client->id)}}" method="post">
            {{csrf_field()}}
            {{method_field('put')}}


            <div class="form-group">
                <label>الاسم</label>
                <input type="text" class="form-control"
                       name="name"
                       value="{{$client->name }}">
            </div>

            <div class="form-group">
                <label>البريد الالكتروني</label>
                <input type="email" class="form-control"
                       name="email"
                       value="{{$client->email }}">
            </div>

            <div class="form-group">
                <label> رقم الهوية</label>
                <input type="number" class="form-control"
                       name="id_number"
                       value="{{$client->id_number}}">
            </div>

            <div class="form-group">
                <label> الحالة</label>
                <input type="text" class="form-control"
                       name="statues"
                       value="{{$client->statues}}">
            </div>

            <div class="form-group">
                <label> رقم الجوال</label>
                <input type="number" class="form-control"
                       name="mobile"
                       value="{{$client->mobile}}">
            </div>

            <div class="form-group">
                <label> اسم الشركة</label>
                <input type="text" class="form-control"
                       name="company_name"
                       value="{{$client->company_name}}">
            </div>

            <div class="form-group">
                <label> الموقع</label>
                <input type="text" class="form-control"
                       name="location"
                       value="{{$client->location}}">
            </div>

            <div class="form-group">
                <label> رقم الايبان</label>
                <input type="text" class="form-control"
                       name="iban"
                       value="{{$client->iban}}">
            </div>

            <div class="form-group">
                <label> الرقم الضريبي</label>
                <input type="text" class="form-control"
                       name="vat_number"
                       value="{{$client->vat_number}}">
            </div>

            <div class="form-group">
                <label>الرقم البريدي </label>
                <input type="text" class="form-control"
                       name="bobox"
                       value="{{$client->bobox}}">
            </div>


            <div class="form-group">
                <label> الموقع الالكتروني</label>
                <input type="text" class="form-control"
                       name="web_site"
                       value="{{$client->web_site}}">
            </div>

            <div class="form-group">
                <label> توقع كلي </label>
                <input type="number" class="form-control"
                       name="total_expectation"
                       value="{{$client->total_expectation}}">
            </div>

            <div class="form-group">
                <label> اجمالي المبيعات</label>
                <input type="number" class="form-control"
                       name="total_sales"
                       value="{{$client->total_sales}}">
            </div>

            <div class="form-group">
                <label> اجمالي المسترجعات</label>
                <input type="number" class="form-control"
                       name="total_refund"
                       value="{{$client->total_refund}}">
            </div>

            <div class="form-group">
                <label> ملاحظة</label>
                <textarea type="text" class="form-control" name="note" >
                    {{$client->note}}
                </textarea>
            </div>

            <button type="submit" class="btn btn-primary my-2">Update
            </button>
        </form>
    </div>
@endsection
