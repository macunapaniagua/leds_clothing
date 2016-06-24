@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<div class="panel panel-default">
			<div class="panel-heading">Agregar Imagen</div>
			<div class="panel-body">
				<div class="form-group">
					<form action="image" method="POST">
					 <input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="col-md-3">
							<input name="image" type="file" value="Cargar" />
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
@endsection