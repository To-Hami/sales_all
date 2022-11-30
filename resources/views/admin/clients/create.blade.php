@extends('layouts.admin.app')
@section('content')
    <div class="box-body col-md-8 text-center my-5">
        @include('admin.partials._errors')

        <form action="{{route('admin.clients.store')}}" method="post">
            {{csrf_field()}}
            {{method_field('post')}}


            <div class="form-group">
                <label>الاسم</label>
                <input type="text" class="form-control"
                       name="name"
                       value="{{old('name')}}">
            </div>

            <div class="form-group">
                <label>البريد الالكتروني</label>
                <input type="email" class="form-control"
                       name="email"
                       value="{{old('email')}}">
            </div>

            <div class="form-group">
                <label> رقم الهوية</label>
                <input type="number" class="form-control"
                       name="id_number"
                       value="{{old('id_number')}}">
            </div>

            <div class="form-group">
                <label> الحالة</label>
                <select name="statues" class="form-control">
                    <option value=""> Select Status</option>

                    <option value="normal" {{old('statues') == 'normal' ? 'selected' : ''}}> Normal</option>
                    <option value="vip" {{old('statues') == 'vip'? 'selected' : ''}}>vip</option>

                </select>
            </div>

            <div class="form-group">
                <label> رقم الجوال</label>
                <input type="number" class="form-control"
                       name="mobile"
                       value="{{old('mobile')}}">
            </div>

            <div class="form-group">
                <label> اسم الشركة</label>
                <input type="text" class="form-control"
                       name="company_name"
                       value="{{old('company_name')}}">
            </div>

            <div class="form-group">
                <label> الموقع</label>
                <input type="text" class="form-control"
                       name="location"
                       value="{{old('location')}}">
            </div>

            <div class="form-group">
                <label> رقم الايبان</label>
                <input type="number" class="form-control"
                       name="iban"
                       value="{{old('iban')}}">
            </div>

            <div class="form-group">
                <label> الرقم الضريبي</label>
                <input type="text" class="form-control"
                       name="vat_number"
                       value="{{old('vat_number')}}">
            </div>

            <div class="form-group">
                <label>الرقم البريدي </label>
                <input type="text" class="form-control"
                       name="bobox"
                       value="{{old('bobox')}}">
            </div>


            <div class="form-group">
                <label> الموقع الالكتروني</label>
                <input type="text" class="form-control"
                       name="web_site"
                       value="{{old('web_site')}}">
            </div>

            <div class="form-group">
                <label> توقع كلي </label>
                <input type="number" class="form-control"
                       name="total_expectation"
                       value="{{old('total_expectation')}}">
            </div>

            <div class="form-group">
                <label> اجمالي المبيعات</label>
                <input type="number" class="form-control"
                       name="total_sales"
                       value="{{old('total_sales')}}">
            </div>

            <div class="form-group">
                <label> اجمالي المسترجعات</label>
                <input type="number" class="form-control"
                       name="total_refund"
                       value="{{old('total_refund')}}">

                <input type="hidden" class="form-control"
                       name="created_by"
                       >
            </div>

            <div class="form-group">
                <label> ملاحظة</label>
                <textarea type="text" class="form-control"
                       name="note"
                ></textarea>
            </div>

            <button type="submit" class="btn btn-primary my-2"><i class="fa fa-plus mx-2"></i>Create
            </button>
        </form>
    </div>
@endsection
