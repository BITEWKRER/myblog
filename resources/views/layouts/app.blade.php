<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name','myBlog')}}</title>
    <!-- Styles -->
{{--    注意格式--> {{asset('css/app.css')}} asset 用于引用外部文件--}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}"/>

</head>
<body>
{{--    保证app布局的一致性--}}
    @include('inc.navbar');

    <div class="container">
        @yield('content', 'Default Content')
    </div>

</body>
</html>

