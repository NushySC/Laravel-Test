@extends('apps/html_wrapper')

@section('content')


    {{ Form::model($app, ['route' => 'apps.create', 'method' => 'post', 'enctype' => 'multipart/form-data']) }}

        {{ Form::label('Title') }}
        {{ Form::text('title') }}

        <br>
        <br>
        {{-- Form::select('app_category_id', ) --}}

        {{ Form::label('Rating') }}
        {{ Form::text('rating') }}

        <br>
        <br>

        <input type="file" name="image">
        
        <br>
        <br>

        {{ Form::submit('save') }}

    {{ Form::close() }}

    <img src="{{ Croppa::url('/uploads/images/posters/casual.jpg', 300, 200) }}" alt="">

@endsection