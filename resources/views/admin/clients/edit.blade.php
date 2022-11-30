@extends('layouts.admin.app')
@section('content')
    <div class="box-body  text-center my-5 mx-5">
        @include('admin.partials._errors')

        <form action="{{route('admin.clients.update',$client->id)}}" method="post">
            {{csrf_field()}}
            {{method_field('put')}}


            <div class="row">
                <div class="form-group col-md-4">
                    <label class="my-2">الاسم</label>
                    <label>الاسم</label>
                    <input type="text" class="form-control"
                           name="name"
                           value="{{old('name',$client->name) }}">
                </div>

                <div class="form-group col-md-4">
                    <label class="my-2">البريد الالكتروني</label>
                    <input type="email" class="form-control"
                           name="email"
                           value="{{old('email',$client->email) }}">
                </div>

                <div class="form-group col-md-4">
                    <label class="my-2"> رقم الهوية</label>
                    <input type="number" class="form-control"
                           name="id_number"
                           value="{{old('id_number',$client->id_number)}}">
                </div>

                <div class="form-group col-md-4">
                    <label class="my-2"> الحالة</label>
                    <select name="statues" class="form-control">
                        <option value=""> Select Status</option>

                        <option value="normal" {{old('statues') == 'normal' ? 'selected' : ''}}> Normal</option>
                        <option value="vip" {{old('statues') == 'vip'? 'selected' : ''}}>vip</option>

                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label class="my-2"> رقم الجوال</label>

                    <input type="number" class="form-control"
                           name="mobile"
                           value="{{old('mobile',$client->mobile)}}">
                </div>

                <div class="form-group col-md-4">
                    <label class="my-2"> اسم الشركة</label>
                    <input type="text" class="form-control"
                           name="company_name"
                           value="{{old('company_name',$client->company_name)}}">
                </div>

                <div class="form-group col-md-4">
                    <label class="my-2"> الموقع</label>
                    <input type="text" class="form-control"
                           name="location"
                           value="{{old('location',$client->location)}}">
                </div>

                <div class="form-group col-md-4">
                    <label class="my-2"> رقم الايبان</label>
                    <input type="number" class="form-control"
                           name="iban"
                           value="{{old('iban',$client->iban)}}">
                </div>

                <div class="form-group col-md-4">
                    <label class="my-2"> الرقم الضريبي</label>
                    <input type="text" class="form-control"
                           name="vat_number"
                           value="{{old('vat_number',$client->vat_number)}}">
                </div>

                <div class="form-group col-md-4">
                    <label class="my-2">الرقم البريدي </label>
                    <input type="text" class="form-control"
                           name="bobox"
                           value="{{old('bobox',$client->bobox)}}">
                </div>


                <div class="form-group col-md-4">
                    <label class="my-2"> الموقع الالكتروني</label>
                    <input type="text" class="form-control"
                           name="web_site"
                           value="{{old('web_site',$client->web_site)}}">
                </div>

                <div class="form-group col-md-4">
                    <label class="my-2"> توقع كلي </label>
                    <input type="number" class="form-control"
                           name="total_expectation"
                           value="{{old('total_expectation',$client->total_expectation)}}">
                </div>

                <div class="form-group col-md-4">
                    <label class="my-2"> اجمالي المبيعات</label>
                    <input type="number" class="form-control"
                           name="total_sales"
                           value="{{old('total_sales',$client->total_sales)}}">
                </div>

                <div class="form-group col-md-4">
                    <label class="my-2"> اجمالي المسترجعات</label>
                    <input type="number" class="form-control"
                           name="total_refund"
                           value="{{old('total_refund',$client->total_refund)}}">
                </div>

                <div class="form-group col-md-4">
                    <label> ملاحظة</label>
                    <textarea type="text" class="form-control" name="note">
                    {{old('note',$client->note)}}
                </textarea>
                </div>

                <button type="submit" class="btn btn-primary my-2">Update
                </button>
        </form>
    </div>
@endsection
