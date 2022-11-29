@extends('layouts.admin.app')
@section('content')

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
{{--    basic element
    <div style="padding:200px ; margin:0 auto">


        <input type="checkbox" data-toggle="toggle" class="postActionclientapprovetextcheck" name=" "
               data-onstyle="gen">


        <span class="btn btn-gen">Hello World</span>
        <input type="text" class="form-control w-50" name=" " placeholder="أضف تعليق ">

        <textarea id=" " class="form-control" name=""> </textarea>
        <br>
        <table class=" table table-striped table-hover">

            <thead>
            <tr>
                <th>رقم المعاملة</th>
                <th>تاريخ إستلام المعاملة</th>
                <th>نوع السند</th>
                <th>رقم السند</th>
                <th>مبلغ السند</th>
                <th>مسؤول السند</th>
            </tr>
            </thead>

            <tbody>


            <tr>
                <td>رقم المعاملة</td>
                <td>تاريخ إستلام المعاملة</td>
                <td>نوع السند</td>
                <td>رقم السند</td>
                <td>مبلغ السند</td>
                <td>مسؤول السند</td>
            </tr>
            <tr>
                <td>رقم المعاملة</td>
                <td>تاريخ إستلام المعاملة</td>
                <td>نوع السند</td>
                <td>رقم السند</td>
                <td>مبلغ السند</td>
                <td>مسؤول السند</td>
            </tr>
            <tr>
                <td>رقم المعاملة</td>
                <td>تاريخ إستلام المعاملة</td>
                <td>نوع السند</td>
                <td>رقم السند</td>
                <td>مبلغ السند</td>
                <td>مسؤول السند</td>
            </tr>
            <tr>
                <td>رقم المعاملة</td>
                <td>تاريخ إستلام المعاملة</td>
                <td>نوع السند</td>
                <td>رقم السند</td>
                <td>مبلغ السند</td>
                <td>مسؤول السند</td>
            </tr>
            <tr>
                <td>رقم المعاملة</td>
                <td>تاريخ إستلام المعاملة</td>
                <td>نوع السند</td>
                <td>رقم السند</td>
                <td>مبلغ السند</td>
                <td>مسؤول السند</td>
            </tr>

            </tbody>

        </table>


        <div>
        </div>

        --}}
@endsection
