@extends('layouts.app')

@section('content')
<br>
<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-users"></i>
					<span><strong>Agregar Usuario</strong></span>
				</div>
				<div class="box-icons">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="expand-link">
						<i class="fa fa-expand"></i>
					</a>
				</div>
				<div class="no-move"></div>
			</div>
			<div class="box-content">
				<h4 class="page-header"></h4>
				<form class="form-horizontal" role="form" method="post" action="user/create">
					{{ csrf_field() }}
					<div class="form-group">
						<label class="col-sm-1 control-label">Nombres</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" name="name" placeholder="Nombres" data-toggle="tooltip" data-placement="bottom" title="Nombres">
						</div>
						<label class="col-sm-1 control-label">Apellidos</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" name="lastname" placeholder="Apellidos" data-toggle="tooltip" data-placement="bottom" title="Apellidos">
						</div>
						<label class="col-sm-1 control-label">Email</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" name="email" placeholder="Email" data-toggle="tooltip" data-placement="bottom" title="Email">
						</div>
						
						<label class="col-sm-1 control-label">Contraseña</label>
						<div class="col-sm-2">
							<input type="password" class="form-control" name="password" placeholder="Contraseña" data-toggle="tooltip" data-placement="bottom" title="Contraseña">
						</div>	

						<label class="col-sm-1 control-label">Confirmar</label>
						<div class="col-sm-2">
							<input type="password" class="form-control" name="confirm_password" placeholder="Confirmar contraseña" data-toggle="tooltip" data-placement="bottom" title="Confirmar contraseña">
						</div>	

						<br>
						<input type="submit" style="margin-left:15px; margin-top: 20px;" class="col-sm-2 btn btn-primary" value="Agregar">

						<a href="" style="margin-left:15px; margin-top: 20px;" class="col-sm-2 btn btn-danger">Volver</a>
					</div>			
				</form>	
			</div>
		</div>
	</div>
</div>
@endsection