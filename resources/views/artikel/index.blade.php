@extends('app')
 

@section('content')
<h2>CRUD LARAVEL 5 </h2>
    <a class="btn btn-primary btn-sm" href="{{ URL::to('artikel/create/') }}">
        Create Artikels <i class="fa fa-plus"></i>
    </a>
    {!! Form::open(array('action' => ['ArtikelController@search'],'method' => 'get','class' => 'form-horizontal')) !!}
    <div class="col-lg-6 pull-right">
      <div class="input-group">
        {!! Form::text('keyword','',array('class'=>'form-control','placeholder'=>'Search for...')) !!}
        <span class="input-group-btn">
          {!! Form::submit('Go!', ['class'=>'btn btn-default']) !!}
        </span>
      </div><!-- /input-group -->
    </div><!-- /.col-lg-6 -->
    {!! Form::close() !!}
<hr>
@if ( !$artikel->count() )
    You have no data
@else
<table class="table table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>Judul</th>
          <th>Penulis</th>
          <th>Tanggal</th>
          <th>Publish</th>
          <th>View</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      <?php 
        $tgl = new App\Library\LibIndoTgl();
        $page = Input::get('page') ? Input::get('page') : 1; 
      ?>
      @foreach($artikel as $i => $art)
        <tr>
          <th>{{ ($i + 1) + (($page - 1) * $limit) }}</th>
          <td>{{ $art->judul }}</td>
          <td>{{ $art->penulis }}</td>
          <td>{{ $tgl->tgl_indo($art->tanggal) }}</td>
          <td>{{ $art->publish }}</td>
          <td>{{ $art->view }}</td>
          <td>
            <a href="{{ URL::to('artikel/edit/'.$art->id) }}" class="btn btn-primary btn-xs">Edit</a>
            <a href="{{ URL::to('artikel/destroy/'.$art->id) }}" class="btn btn-danger btn-xs">Delete</a>
          </td>
        </tr>
      @endforeach
      </tbody>
</table>
<div class="pull-right">
<?php echo $artikel->setPath('')->appends(Input::query())->render() ?>
</div>
@endif
@endsection