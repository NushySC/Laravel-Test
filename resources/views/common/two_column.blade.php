@extends('common/html_wrapper')

@section('main')
<main>

    <div id="left">
        @include('common/left_menu')
    </div>

    <div id="right">
        @yield('content')
    </div>

</main>
@endsection