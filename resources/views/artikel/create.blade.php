@extends('app')
 
@section('content')
    <h2>Create Artikel</h2><hr>
 
    {!! Form::model(new App\Artikel, array('class' => 'form-horizontal'), ['route' => ['artikel.store']]) !!}
        @include('artikel/partials/_formAdd', ['submit_text' => 'Create Artikel'])
    {!! Form::close() !!}
@endsection