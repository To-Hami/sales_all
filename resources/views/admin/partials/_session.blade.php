@if (session('success'))

    <script>
        new Noty({
            layout: 'topRight',
            theme: 'relax',
            text: "{{ session('success') }}",
            timeout: 2000,
            killer: true,
        }).show();
    </script>

@endif

@if(session('error'))

    <script>
        new Noty({
            type: 'error',
            layout: 'topRight',
            theme: 'relax',
            text: "{{ session('error') }}",
            timeout: 2000,
            killer: true
        }).show();
    </script>

@endif
