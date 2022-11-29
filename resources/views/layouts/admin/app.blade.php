<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    {{--jquery--}}
    <script src="{{ asset('admin_assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/jquery-ui.js') }}"></script>

    {{-- bootstrab --}}
    <link href="{{ asset('admin_assets/css/bootstrab.min.css') }}" rel="stylesheet">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet"
          nonce=" ">
    <script src="{{ asset('admin_assets/js/bootstrap.min.js') }}"></script>

    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js" defer></script>
    {{-- end bootstrab --}}


<!-- Styles -->
    <link href="{{ asset('admin_assets/css/bootstrab_toggle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin_assets/js/bootstrab_toogle.min.js') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/css/font-awesome.min.css') }}">

    {{-- ajax --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/8.8.1/smooth-scrollbar.min.js"
            integrity="sha512-DmxN+h4rvEbHxmkzhxEA1krRvgdzSFhjkcTe2HCZpd5ZnxP9+OWGHB8iMUQhvidmrivCTe3g0hyeMpfTLIwf7Q=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    {{-- fontawsam --}}

    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/solid.js"
            integrity="sha384-/BxOvRagtVDn9dJ+JGCtcofNXgQO/CCCVKdMfL115s3gOgQxWaX/tSq5V8dRgsbc"
            crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/fontawesome.js"
            integrity="sha384-dPBGbj4Uoy1OOpM4+aRGfAOc0W37JkROT+3uynUgTHZCHZNMHfGXsmmvYTffZjYO"
            crossorigin="anonymous"></script>
    {{--noty--}}
    <link rel="stylesheet" href="{{ asset('admin_assets/plugins/noty/noty.css') }}">
    <script src="{{ asset('admin_assets/plugins/noty/noty.min.js') }}"></script>
    {{-- <script src="{{ asset('admin_assets/css/magnific-popup.css') }}"></script> --}}

    {{-- main_css --}}
    <link rel="stylesheet" href="{{ asset('admin_assets/css/main.css')}}">

    {{-- datatable --}}
{{--     <script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>--}}



    {{-- css style --}}
    <style>
        body {
            direction: ltr !important
        }

        :root {
            --main: darkred;
            --second: #a81584;
            --third: #a31985;
        }


        .w-100 {
            width: 100% !important
        }

        .w-96 {
            width: 96% !important
        }

        .w-90 {
            width: 90% !important
        }

        .w-80 {
            width: 80% !important
        }

        .w-70 {
            width: 70% !important
        }

        .w-60 {
            width: 60% !important
        }

        .w-54 {
            width: 54% !important
        }

        .w-50 {
            width: 50% !important
        }

        .w-49 {
            width: 49% !important
        }

        .w-48 {
            width: 48% !important
        }

        .w-44 {
            width: 44% !important
        }

        .w-40 {
            width: 40% !important
        }

        .w-32 {
            width: 32% !important
        }

        .w-30 {
            width: 30% !important
        }

        .w-25 {
            width: 25% !important
        }

        .w-24 {
            width: 24% !important
        }

        .w-22 {
            width: 22% !important
        }

        .w-20 {
            width: 20% !important
        }

        .w-18 {
            width: 18% !important
        }

        .w-16 {
            width: 16% !important
        }

        .w-15 {
            width: 15% !important
        }

        .w-14 {
            width: 14% !important
        }

        .w-12 {
            width: 12% !important
        }

        .w-10 {
            width: 10% !important
        }

        .w-9 {
            width: 9% !important
        }

        .w-8 {
            width: 8% !important
        }

        .w-7 {
            width: 7% !important
        }

        .w-6 {
            width: 6% !important
        }

        .w-5 {
            width: 5% !important
        }

        .w-4 {
            width: 4% !important
        }

        .w-3 {
            width: 3% !important
        }

        .w-2 {
            width: 2% !important
        }

        .w-1 {
            width: 1% !important
        }


        .btn-gen {
            color: #fff;
            background: var(--main);
            transition: all 0.3s ease
        }

        .btn-gen:hover {
            color: #fff;
            background: rgba(81, 81, 81, 0.95)
        }

        .btn-gen:active {
            color: #fff;
            background: var(--third);
        }

        table {
            margin: 0 auto !important;
        }

        tbody {
            border: 2px solid rgba(51, 51, 51, 0);
        }

        .table th {
            padding: .60rem;
            vertical-align: middle;
            border-top: 0px solid #dee2e6;
            text-align: center;
        }

        .table td {
            padding: .75rem;
            vertical-align: middle;
            border-top: 0px solid #dee2e6;
            text-align: center;
        }


        .table > tbody > tr > td {
            transition: all 2s ease;
            vertical-align: middle;
        }

        .table > tbody > tr > td:hover {
            transition: all 2s ease;
        }

        .table thead th {
            background-color: var(--main);
            color: white;
        }

        .table-striped > tbody > tr:nth-child(2n+1) {
            background-color: rgba(207, 204, 204, 0.1);
            color: red;
        }

        .table-hover > tbody > tr > td {
            background-color: #fff !important;
            transition: all 0.3s ease;
            vertical-align: middle;
            border-bottom: 2px solid rgba(51, 51, 51, 0);
        }

        .table-hover > tbody > tr > td:hover {
            color: var(--second);
            transition: all 0.3s ease;
            border-bottom: 2px solid var(--main);
        }

        .trHoverda ::after {
            content: "";
            background-color: var(--second);
            position: absolute;
            left: 0;
            height: 1%;
            width: 1%;
        }


        .navbar {
            padding: 0 20px;
            box-shadow: 0 1px 26px 0 rgb(0 0 0 / 20%), 0 1px 20px 0 rgb(0 0 0 / 5%);
        }

        ul li {
            padding-left: 0 !important;
            padding-right: 0 !important;
            display: inline;
        }

        .avatarBar {
            width: 35px;
            border-radius: 50%;
            object-fit: cover;
            height: 35px;
        }

        .brandRLogo {
            height: 35px;
            margin: 0 0.25em
        }

        .brandRLogoCompany {
            height: 35px;
            margin: 0 0.25em;
        }

        .userNameAvatar {
            align-items: center;
        }

        .userNameAvatar span {
            font-size: 1.1em;
            font-weight: bold;
            margin: 0 0.30em;
            color: rgba(81, 81, 81, 0.95);
        }

        .navbar div ul {
            margin: 0 15px 0 0;
            padding: 0
        }

        .noDecor {
            text-decoration: none
        }

        .appfooter {
            width: 100%;
            padding: 10px;
            background: var(--main);
            text-align: right;
            color: #fff;
            font-weight: 400;
        }

        .menu {
            display: none;
            z-index: 999;
            background-color: var(--main);
            top: 45px;
            position: absolute;
            width: 250px;
            height: 100%;
            left:
        }

        .menu .menu-items li {
            transition: all 0.3s ease
        }

        .menu ul li {
            display: block;
            margin: 15px 0px 0 0;
            transition: all 0.3s ease
        }

        .menu ul li a {
            text-decoration: none;
            font-size: 1.15em;
            font-weight: 450;
            color: #fff;
            transition: all 0.3s ease
        }

        .menu ul {
            margin: 50px 10px 0 0;
            padding: 0
        }


        .toggles {
            position: absolute;
            width: 40px;
            height: 40px;
            background: #fff;
            box-shadow: 0 10px 20px rgb(0 0 0 / 8%);
            border-radius: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            z-index: 9999;
            top: 50px;
            right: 10px;
        }

        .toggles span {
            position: absolute;
            width: 30px;
            height: 4px;
            border-radius: 4px;
            background: var(--main);
            transition: 0.3s;
        }

        .toggles span:nth-child(2) {
            transform: translateY(-15px);
            width: 25px;
            left: 10px;
        }

        .toggles span:nth-child(3) {
            transform: translateY(15px);
            width: 27px;
            left: 10px;
        }

        .toggles.active span:nth-child(1) {
            transform: translateX(60px);
        }

        .toggles.active span:nth-child(2) {
            width: 20px;
            transform: translateX(0) rotate(45deg);
            transition-delay: 0.2s;
        }

        .toggles.active span:nth-child(3) {
            width: 20px;
            transform: translateX(0) rotate(-45deg);
            transition-delay: 0.4s;
        }
    </style>


    {{-- end css style --}}


</head>


<body class="bg-light" id="my-scrollbar">

<div class="toggles">
    <span></span>
    <span></span>
    <span></span>
</div>
{{--menu--}}
<div class="menu">
    <ul class="menu-items">
        <li><a href="#home"><i class="fas fa-spinner " style="font-size:1.5em ; color:#fff; vertical-align:middle;"></i>
                Home</a></li>
        <li><a href="#about"><i class="fas fa-spinner "
                                style="font-size:1.5em ; color:#fff; vertical-align:middle;"></i> About</a></li>
        <li><a href="#food"><i class="fas fa-spinner " style="font-size:1.5em ; color:#fff; vertical-align:middle;"></i>
                Category</a></li>
        <li><a href="#food-menu"><i class="fas fa-spinner "
                                    style="font-size:1.5em ; color:#fff; vertical-align:middle;"></i> Menu</a></li>
        <li><a href="#testimonials"><i class="fas fa-spinner "
                                       style="font-size:1.5em ; color:#fff; vertical-align:middle;"></i> Testimonial</a>
        </li>
        <li><a href="#contact"><i class="fas fa-spinner "
                                  style="font-size:1.5em ; color:#fff; vertical-align:middle;"></i> Contact</a></li>
    </ul>
</div>

<nav class="navbar">
    <div class="text-right">
        <ul id="nTmenu" class="   ">

            <li class="nav-item ">
                <a title="إظهار" href="#" class="noDecor">
			<span class="userNameAvatar">
            <img src="{{asset('admin_assets/images/2019485347.jpg')}}" class="avatarBar"/>
            <span>تهامي أحمد </span>
        </span></a>
            </li>

            <li id="lateaction" class="nav-item dropdown1">
                <i class="fas fa-spinner fa-spin"
                   style="font-size:1.5em ; color:var(--main); vertical-align: -webkit-baseline-middle;"></i>
            </li>

        </ul>
    </div>
    <div class="d-flex ml-auto">
        <span class="w-100 d-lg-none d-block"> </span>
        <span class="navbar-brand ">

              <img src="{{asset('admin_assets/images/mktabeeLogo.svg')}}"
                   alt="mktabeeLogo"
                   class="brandRLogo "/>

         </span>
        {{--user menu--}}


                    <a class="dropdown-item" href="page-login.html" href="{{ route('logout') }}"
                       onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out fa-lg"></i>
                        @lang('site.logout')
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </a>


    </div>
</nav>

{{-- content --}}
{{-- @include('admin.partials._session') --}}
@yield('content')

{{--footer--}}
<div class="appfooter fixed-bottom">
    <h6>Powered by rhstudio11.com</h6>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer">
</script>

{{--datatable--}}
{{--<script type="text/javascript"--}}
{{--        src="{{ asset('admin_assets/plugins/jquery.dataTables/jquery.dataTables.min.js') }}"></script>--}}
{{--<script type="text/javascript"--}}
{{--        src="{{ asset('admin_assets/plugins/dataTables.bootstrap/dataTables.bootstrap.min.js') }}"></script>--}}
{{--<script type="text/javascript" src="{{ asset('admin_assets/plugins/select.min.js') }}"></script>--}}
{{--<script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>--}}

<script src="{{ asset('admin_assets/js/popper.min.js') }}"></script>
<script src="{{ asset('admin_assets/js/bootstrap.min.js') }}"></script>

{{--select 2--}}
<script type="text/javascript" src="{{ asset('admin_assets/plugins/select2/select2.min.js') }}"></script>

{{-- <script src="{{ asset('admin_assets/js/main.js') }}"></script> --}}

{{--ckeditor--}}
<script src="{{ asset('admin_assets/plugins/ckeditor/ckeditor.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
</script>


<script>
    Scrollbar.initAll();

    let menuToggle = document.querySelector(".toggles");
    let menu = $(".menu");
    let lis = $(".menu .menu-items li");


    menuToggle.onclick = function () {
        menuToggle.classList.toggle("active");
        menu.fadeToggle(300);
    }

    lis.hover(function () {

        $(this).css({'margin-right': '15px'});

    }, function () {

        $(this).css({'margin-right': '0px'});
    });

    $(document).ready(function () {

        $('.postActionclientapprovetextcheck').bootstrapToggle({
            on: '<i class="fas fa-check"></i>',
            off: '<i class="fas fa-times"></i>'
        });


        //delete
        // $(document).on('click', '.delete, #bulk-delete', function (e) {

        //     var that = $(this)

        //     e.preventDefault();

        //     var n = new Noty({
        //         text: "@lang('site.confirm_delete')",
        //         type: "alert",
        //         killer: true,
        //         buttons: [
        //             Noty.button("@lang('site.yes')", 'btn btn-success mr-2', function () {
        //                 let url = that.closest('form').attr('action');
        //                 let data = new FormData(that.closest('form').get(0));

        //                 let loadingText = '<i class="fa fa-circle-o-notch fa-spin"></i>';
        //                 let originalText = that.html();
        //                 that.html(loadingText);

        //                 n.close();

        //                 $.ajax({
        //                     url: url,
        //                     data: data,
        //                     method: 'post',
        //                     processData: false,
        //                     contentType: false,
        //                     cache: false,
        //                     success: function (response) {

        //                         $("#record__select-all").prop("checked", false);

        //                         $('.datatable').DataTable().ajax.reload();

        //                         new Noty({
        //                             layout: 'topRight',
        //                             type: 'alert',
        //                             text: response,
        //                             killer: true,
        //                             timeout: 2000,
        //                         }).show();

        //                         that.html(originalText);
        //                     },

        //                 });//end of ajax call

        //             }),

        //             Noty.button("@lang('site.no')", 'btn btn-danger mr-2', function () {
        //                 n.close();
        //             })
        //         ]
        //     });

        //     n.show();

        // });//end of delete

        //select 2
        // $('.select2').select2({
        //     'width': '100%',
        // });

    });//end of document ready

    CKEDITOR.config.language = "{{ app()->getLocale() }}";

</script>

@stack('scripts')

</body>
</html>
