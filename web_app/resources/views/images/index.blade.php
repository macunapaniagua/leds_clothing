@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<div class="panel panel-default">
			<div class="panel-heading">Agregar Imagen</div>
			<div class="panel-body">
				<div class="form-group">
					<form action="image" method="POST" enctype="multipart/form-data">
					 <input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="col-md-3">
							<input name="image" type="file" value="Cargar"accept="image/*" />
						</div>
						<div class="col-md-3">
							<input type="submit" value="Guardar" />
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	@foreach($images as $image)
	<div class="col-md-2">
		<div class="panel panel-default">
			<div class="panel-body">
				<img src="/images/{{ $image->name }}" class="img-responsive">
			</div>
			<div class="panel-footer"></div>
			</div>
		</div>
	@endforeach
	</div>
@endsection
