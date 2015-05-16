@extends('app')
 
@section('content')
    <h2>Edit Project</h2>
    {!! Form::open(array('action' => ['ArtikelController@update', $artikel->id],'method' => 'POST','class' => 'form-horizontal')) !!}
        @include('artikel/partials/_formEdit', ['submit_text' => 'Edit Artikel'])
    {!! Form::close() !!}
@endsection