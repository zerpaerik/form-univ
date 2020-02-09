@extends('layouts.app')

@section('content')
<br>
<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-users"></i>
					<span><strong>Agregar Informaciòn</strong></span>
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
				<h4 class="page-header">DATOS PERSONALES</h4>
				<form class="form-horizontal" role="form" method="post" action="registros/create">
					{{ csrf_field() }}
					<div class="form-group">
						<label class="col-sm-1 control-label">Nombres</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" name="nombres" placeholder="Nombre" data-toggle="tooltip" data-placement="bottom" title="Nombres">
						</div>
						<label class="col-sm-1 control-label">Apellidos</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" name="apellidos" placeholder="direccion" data-toggle="tooltip" data-placement="bottom" title="Apellidos">
						</div>
						<label class="col-sm-1 control-label">Cedula</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" name="cedula" placeholder="Cèdula" data-toggle="tooltip" data-placement="bottom" title="Referencia">
						</div>
						<label class="col-sm-1 control-label">Nacimiento</label>
						<div class="col-sm-2">
							<input type="date" class="form-control" name="nac" placeholder="referencia" data-toggle="tooltip" data-placement="bottom" title="Referencia">
						</div>
						<label class="col-sm-1 control-label">Hijos</label>
						<div class="col-sm-2">
							<input type="date" class="form-control" name="hijos" placeholder="Hijos" data-toggle="tooltip" data-placement="bottom" title="Referencia">
						</div>
						<label class="col-sm-1 control-label">Sexo</label>
						<div class="col-sm-2">
							<select name="sexo" class="control-label">
								<option value="M">M</option>
								<option value="F">F</option>
							</select>
						</div>
						<label class="col-sm-1 control-label">Telefono</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" name="telefono" placeholder="Telefono" data-toggle="tooltip" data-placement="bottom" title="Referencia">
						</div>
						<label class="col-sm-1 control-label">Email</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" name="email" placeholder="Email" data-toggle="tooltip" data-placement="bottom" title="Referencia">
						</div>

				<h4 class="page-header">SALUD</h4>
					<div class="form-group">
						<label class="col-sm-1 control-label">Talla</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" name="talla" placeholder="Talla" data-toggle="tooltip" data-placement="bottom" title="Nombres">
						</div>
						<label class="col-sm-1 control-label">Peso</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" name="peso" placeholder="Peso" data-toggle="tooltip" data-placement="bottom" title="Apellidos">
						</div>
						<label class="col-sm-1 control-label">Hipertension</label>
						<div class="col-sm-1">
							<select name="hiper" class="control-label">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>
						<label class="col-sm-1 control-label">Asma</label>
						<div class="col-sm-1">
							<select name="asma" class="control-label">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>
						<label class="col-sm-1 control-label">Alergias</label>
						<div class="col-sm-1">
							<select name="alerg" class="control-label">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>
						<label class="col-sm-1 control-label">Migraña</label>
						<div class="col-sm-1">
							<select name="migrana" class="control-label">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>
						<label class="col-sm-1 control-label">Otra</label>
						<div class="col-sm-3">
							<input type="text" class="form-control" name="otra" placeholder="Otra" data-toggle="tooltip" data-placement="bottom" title="Referencia">
						</div>
					</div>

				<h4 class="page-header">PARTO HUMANIZADO</h4>
					<div class="form-group">
						
						<label class="col-sm-1 control-label">Embarazada?</label>
						<div class="col-sm-1">
							<select name="embarazada" class="control-label">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>
						<label class="col-sm-1 control-label">Parturienta</label>
						<div class="col-sm-1">
							<select name="asma" class="control-label">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>
						
						<label class="col-sm-1 control-label">Tiempo</label>
						<div class="col-sm-3">
							<input type="text" class="form-control" name="tiempo" placeholder="Tiempo" data-toggle="tooltip" data-placement="bottom" title="Referencia">
						</div>

					</div>

					<h4 class="page-header">ATENCIÒN ESPECIAL</h4>
					<div class="form-group">
						
						<label class="col-sm-1 control-label">Discapacidad?</label>
						<div class="col-sm-1">
							<select name="discapacidad" class="control-label">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>
						<label class="col-sm-1 control-label">Visual</label>
						<div class="col-sm-1">
							<select name="visual" class="control-label">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>
						
						<label class="col-sm-1 control-label">Auditiva</label>
						<div class="col-sm-1">
							<select name="auditiva" class="control-label">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>
						<label class="col-sm-1 control-label">Cognitiva</label>
						<div class="col-sm-1">
							<select name="cognitiva" class="control-label">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>
						<label class="col-sm-1 control-label">Familiares?</label>
						<div class="col-sm-1">
							<select name="anteced_esp" class="control-label">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>

						<label class="col-sm-1 control-label">Cual?</label>
						<div class="col-sm-1">
							<input type="text" class="form-control" name="cual_esp" placeholder="Cual?" data-toggle="tooltip" data-placement="bottom" title="Referencia">
						</div>

					</div>

					<h4 class="page-header">ODONTOLOGIA</h4>
					<div class="form-group">
						
						<label class="col-sm-1 control-label">Caries</label>
						<div class="col-sm-1">
							<select name="caries" class="control-label">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>
						<label class="col-sm-1 control-label">Gingivitis</label>
						<div class="col-sm-1">
							<select name="gingivitis" class="control-label">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>
						
						<label class="col-sm-1 control-label">Cirugia</label>
						<div class="col-sm-1">
							<select name="cirugia" class="control-label">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>
						<label class="col-sm-1 control-label">Limpieza</label>
						<div class="col-sm-1">
							<select name="limpieza" class="control-label">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>
						<label class="col-sm-1 control-label">Restauraciòn</label>
						<div class="col-sm-1">
							<select name="restaura" class="control-label">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>

						<label class="col-sm-1 control-label">Conducto</label>
						<div class="col-sm-1">
							<select name="conducto" class="control-label">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>

					</div>

					<h4 class="page-header">HABILIDADES/DESTREZAS</h4>
					<div class="form-group">
						
						<label class="col-sm-1 control-label">Canto</label>
						<div class="col-sm-1">
							<select name="canto" class="control-label">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>
						<label class="col-sm-1 control-label">Danza</label>
						<div class="col-sm-1">
							<select name="danza" class="control-label">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>
						
						<label class="col-sm-1 control-label">Teatro</label>
						<div class="col-sm-1">
							<select name="teatro" class="control-label">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>
						<label class="col-sm-1 control-label">Cocina</label>
						<div class="col-sm-1">
							<select name="cocina" class="control-label">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>
						<label class="col-sm-1 control-label">Reposteria</label>
						<div class="col-sm-1">
							<select name="repost" class="control-label">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>

						<label class="col-sm-1 control-label">Manualidades</label>
						<div class="col-sm-1">
							<select name="manualid" class="control-label">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>

						<label class="col-sm-1 control-label">Deporte?</label>
						<div class="col-sm-1">
							<select name="deporte" class="control-label">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>

						<label class="col-sm-1 control-label">Cual?</label>
						<div class="col-sm-2">
							<input type="deport_prac" class="form-control" name="cual_esp" placeholder="Cual Practicas?" data-toggle="tooltip" data-placement="bottom" title="Referencia">
						</div>


						<label class="col-sm-1 control-label">Cual?</label>
						<div class="col-sm-2">
							<input type="deport_gusto" class="form-control" name="cual_esp" placeholder="Cual te Gustaria?" data-toggle="tooltip" data-placement="bottom" title="Referencia">
						</div>

						<label class="col-sm-1 control-label">Cursos</label>
						<div class="col-sm-2">
							<input type="cursos" class="form-control" name="cual_esp" placeholder="Cual te Gustaria Realizar?" data-toggle="tooltip" data-placement="bottom" title="Referencia">
						</div>

						
					</div>

					<h4 class="page-header">SOCIO/ECONOMICO</h4>
					<div class="form-group">
						
						<label class="col-sm-1 control-label">Beneficio</label>
						<div class="col-sm-1">
							<select name="benefic" class="control-label">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>
						<label class="col-sm-1 control-label">Cual?</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" name="cual_benefic" placeholder="Cual Beneficio recibes?" data-toggle="tooltip" data-placement="bottom" title="Referencia">
						</div>
						
						<label class="col-sm-1 control-label">Act.Economica</label>
						<div class="col-sm-1">
							<select name="act_econ" class="control-label">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>
						<label class="col-sm-1 control-label">Cual?</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" name="act_econ_de" placeholder="Cual Actividad Economica?" data-toggle="tooltip" data-placement="bottom" title="Referencia">
						</div>
						<label class="col-sm-1 control-label">Oficio</label>
						<div class="col-sm-1">
							<select name="repost" class="control-label">
								<option value="Carpinteria">Carpinteria</option>
								<option value="Herreria">Herreria</option>
								<option value="Electricidad">Electricidad</option>
								<option value="Plomeria">Plomeria</option>
								<option value="Otros">Otros</option>

							</select>
						</div>

						<label class="col-sm-1 control-label">Mov.Estudiantil?</label>
						<div class="col-sm-1">
							<select name="mov_est" class="control-label">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>

						<label class="col-sm-1 control-label">Te Gustaria?</label>
						<div class="col-sm-1">
							<select name="mov_estd" class="control-label">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>

						

						<label class="col-sm-1 control-label">Pregunta Abierta</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" name="pregunta" placeholder="Pregunta Abierta" data-toggle="tooltip" data-placement="bottom" title="Referencia">
						</div>

						
					</div>

						
						


								

						<br>
						<input type="button" onclick="form.submit()" style="margin-left:15px; margin-top: 20px;" class="col-sm-2 btn btn-primary" value="Agregar">

						<a href="{{route('registros.index')}}" style="margin-left:15px; margin-top: 20px;" class="col-sm-2 btn btn-danger">Volver</a>
					</div>			
				</form>	
			</div>
		</div>
	</div>
</div>
@endsection