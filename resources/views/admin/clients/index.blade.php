@extends('layouts.admin.app')
@section('content')


    <a class="btn btn-success text-center my-5" href="{{route('admin.clients.create')}}">
        Create
    </a>


            <table class=" table table-striped table-hover">

                <thead>
                <tr>
                    <th> #</th>
                    <th>الاسم</th>
                    <th> الايميل</th>
                    <th> رقم الجوال</th>
                    <th> اعدادت</th>
                </tr>
                </thead>

                <tbody>
                @if($clients->count() > 0)
                    @foreach($clients as $client)

                        <tr>
                            <td>{{$client->id}}</td>
                            <td>{{$client->name}}</td>
                            <td>{{$client->email}}</td>
                            <td>{{$client->mobile}}</td>
                            <td>

                                    <a class=" btn btn-info btn-sm delete"
                                       href="{{route('admin.clients.edit',$client->id)}}">تعديل</a>


                                    <form action="{{route('admin.clients.destroy',$client->id)}}"
                                          method="post" style="display: inline-block">
                                        {{csrf_field()}}
                                        {{method_field('delete')}}
                                        <button type="submit"
                                                class=" btn btn-danger delete btn-sm">حزف</button>

                                    </form>

                            </td>
                        </tr>
                    @endforeach
                @else()
                    <tr>
                        <h2 class="text-center">Sorry no data found</h2>

                    </tr>
                @endif
                </tbody>

            </table>





@endsection
