<!-- /resources/views/artikel/partials/_form.blade.php -->
<div class="form-group">
	  {!! Form::label('judul', 'Judul:', array('class'=>'col-sm-2 control-label')) !!}
	<div class="col-sm-5">
	  {!! Form::text('judul','',array('class'=>'form-control')) !!}
	</div>
</div>

<div class="form-group">
	  {!! Form::label('penulis', 'Penulis:', array('class'=>'col-sm-2 control-label')) !!}
	<div class="col-sm-5">
	  {!! Form::text('penulis','',array('class'=>'form-control')) !!}
	</div>
</div>


<div class="form-group">
	  {!! Form::label('tanggal', 'Tanggal:', array('class'=>'col-sm-2 control-label')) !!}
	<div class="col-sm-5">
	  {!! Form::text('tanggal','',array('class'=>'form-control')) !!}
	</div>
</div>

<div class="form-group">
	  	{!! Form::label('isi_artikel', 'Isi Artikel:', array('class'=>'col-sm-2 control-label')) !!}
	<div class="col-sm-7">
		{!! Form::textarea('isi_artikel','',array('class'=>'form-control','rows'=>'5','cols'=>'10')) !!}
	</div>
</div>

<div class="form-group">
	  	{!! Form::label('publish', 'Publish:', array('class'=>'col-sm-2 control-label')) !!}
	<div class="col-sm-7">
		{!! Form::radio('publish', 'Y', true) !!} Y <br>
		{!! Form::radio('publish', 'N') !!} N
	</div>
</div>


  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
    </div>
  </div>
