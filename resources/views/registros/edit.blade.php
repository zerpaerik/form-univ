@extends('layouts.app')

@section('content')
<br>
<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-users"></i>
					<span><strong>Editar Informaciòn</strong></span>
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
			<form class="form-horizontal" role="form" method="post" action="registros/edit">

					{{ csrf_field() }}
					<div class="form-group">
						<label class="col-sm-1 control-label">Nombres</label>
						<div class="col-sm-2">
							<input type="text" value="{{$p->nombres}}" class="form-control" name="nombres" placeholder="Nombre" data-toggle="tooltip" data-placement="bottom" title="Nombres">
						</div>
						<label class="col-sm-1 control-label">Apellidos</label>
						<div class="col-sm-2">
							<input type="text" value="{{$p->apellidos}}" class="form-control" name="apellidos" placeholder="Apellidos" data-toggle="tooltip" data-placement="bottom" title="Apellidos">
						</div>
						<label class="col-sm-1 control-label">Cedula</label>
						<div class="col-sm-2">
							<input type="text" value="{{$p->cedula}}" class="form-control" name="cedula" placeholder="Cèdula" data-toggle="tooltip" data-placement="bottom" title="Referencia">
						</div>
						<label class="col-sm-1 control-label">Nacimiento</label>
						<div class="col-sm-2">       
							<input type="date" value="{{$p->nac}}" class="form-control" name="nac" placeholder="referencia" data-toggle="tooltip" data-placement="bottom" title="Referencia">
						</div>
						<label class="col-sm-1 control-label">Hijos</label>
						<div class="col-sm-2">
							<input type="number" value="{{$p->hijos}}" class="form-control" name="hijos" placeholder="Hijos" data-toggle="tooltip" data-placement="bottom" title="Referencia">
						</div>
						<label class="col-sm-1 control-label">Sexo</label>
						<div class="col-sm-2">
							<select name="sexo" class="form-control">
								<option value="M">M</option>
								<option value="F">F</option>
							</select>
						</div>
						<label class="col-sm-1 control-label">Telefono</label>
						<div class="col-sm-2">
							<input type="text" value="{{$p->telefono}}" class="form-control" name="telefono" placeholder="Telefono" data-toggle="tooltip" data-placement="bottom" title="Referencia">
						</div>
						<label class="col-sm-1 control-label">Email</label>
						<div class="col-sm-2">
							<input type="email" value="{{$p->email}}" class="form-control" name="email" placeholder="Email" data-toggle="tooltip" data-placement="bottom" title="Referencia">
						</div>

						<label class="col-sm-1 control-label">Carrera</label>
						<div class="col-sm-2">
							<select name="carrera" class="form-control">
								
								<option value="Administracion">Administracion</option>
								<option value="Contaduria">Contaduria</option>
								<option value="Derecho">Derecho</option>
								<option value="Economìa">Economìa</option>
								<option value="Enfermeria">Enfermeria</option>
								<option value="Fisioterapia">Fisioterapia</option>
								<option value="Ing en Informàtica">Ing en Informàtica</option>
								<option value="Ing Agronòmica">Ing Agronòmica</option>
								<option value="Ing Civil">Ing Civil</option>
								<option value="Ing Hidrocarburos">Ing Hidrocarburos</option>
								<option value="Medicina">Medicina</option>
								<option value="Odontologìa">Odontologìa</option>


							</select>
						</div>
					</div>
						<br>

				<h4 class="page-header">SALUD</h4>
					<div class="form-group">
						<label class="col-sm-1 control-label">Talla</label>
						<div class="col-sm-2">
							<input type="text" value="{{$p->talla}}" class="form-control" name="talla" placeholder="Talla" data-toggle="tooltip" data-placement="bottom" title="Nombres">
						</div>
						<label class="col-sm-1 control-label">Peso</label>
						<div class="col-sm-2">
							<input type="text" value="{{$p->peso}}" class="form-control" name="peso" placeholder="Peso" data-toggle="tooltip" data-placement="bottom" title="Apellidos">
						</div>
						<label class="col-sm-1 control-label">Hipertension</label>
						<div class="col-sm-1">
							<select name="hiper" class="form-control">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>
						<label class="col-sm-1 control-label">Asma</label>
						<div class="col-sm-1">
							<select name="asma" class="form-control">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>
						<label class="col-sm-1 control-label">Alergias</label>
						<div class="col-sm-1">
							<select name="alerg" class="form-control">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>
						<label class="col-sm-1 control-label">Migraña</label>
						<div class="col-sm-2">
							<select name="migrana" class="form-control">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>
						<label class="col-sm-1 control-label">Otra</label>
						<div class="col-sm-4">
							<input type="text" value="{{$p->otra}}"  class="form-control" name="otra" placeholder="Otra" data-toggle="tooltip" data-placement="bottom" title="Referencia">
						</div>
					</div>

											<br>

				<h4 class="page-header">PARTO HUMANIZADO</h4>
					<div class="form-group">
						
						<label class="col-sm-1 control-label">Embarazada?</label>
						<div class="col-sm-2">
							<select name="embarazada" class="form-control">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>
						<label class="col-sm-1 control-label">Parturienta</label>
						<div class="col-sm-2">
							<select name="asma" class="form-control">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>
						
						<label class="col-sm-1 control-label">Tiempo</label>
						<div class="col-sm-2">
							<input type="number" class="form-control" name="tiempo" value="{{$p->tiempo}}"  placeholder="Tiempo" data-toggle="tooltip" data-placement="bottom" title="Referencia">
						</div>

					</div>
					<br>

					<h4 class="page-header">ATENCIÒN ESPECIAL</h4>
					<div class="form-group">
						
						<label class="col-sm-1 control-label">Discapacidad?</label>
						<div class="col-sm-2">
							<select name="discapacidad" class="form-control">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>
						<label class="col-sm-1 control-label">Visual</label>
						<div class="col-sm-2">
							<select name="visual" class="form-control">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>
						
						<label class="col-sm-1 control-label">Auditiva</label>
						<div class="col-sm-2">
							<select name="auditiva" class="form-control">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>
						<label class="col-sm-1 control-label">Cognitiva</label>
						<div class="col-sm-2">
							<select name="cognitiva" class="form-control">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>
						<label class="col-sm-1 control-label">Familiares?</label>
						<div class="col-sm-2">
							<select name="anteced_esp" class="form-control">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>

						<label class="col-sm-1 control-label">Cual?</label>
						<div class="col-sm-8">
							<input type="text" value="{{$p->cual_esp}}" class="form-control" name="cual_esp" placeholder="Cual Familiar necesita atenciòn especial?" data-toggle="tooltip" data-placement="bottom" title="Referencia">
						</div>

					</div>

					<br>

					<h4 class="page-header">ODONTOLOGIA</h4>
					<div class="form-group">
						
						<label class="col-sm-1 control-label">Caries</label>
						<div class="col-sm-2">
							<select name="caries" class="form-control">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>
						<label class="col-sm-1 control-label">Gingivitis</label>
						<div class="col-sm-2">
							<select name="gingivitis" class="form-control">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>
						
						<label class="col-sm-1 control-label">Cirugia</label>
						<div class="col-sm-2">
							<select name="cirugia" class="form-control">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>
						<label class="col-sm-1 control-label">Limpieza</label>
						<div class="col-sm-2">
							<select name="limpieza" class="form-control">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>
						<label class="col-sm-1 control-label">Restauraciòn</label>
						<div class="col-sm-2">
							<select name="restaura" class="form-control">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>

						<label class="col-sm-1 control-label">Conducto</label>
						<div class="col-sm-2">
							<select name="conducto" class="form-control">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>

					</div>
					<br>

					<h4 class="page-header">HABILIDADES/DESTREZAS</h4>
					<div class="form-group">
						
						<label class="col-sm-1 control-label">Canto</label>
						<div class="col-sm-2">
							<select name="canto" class="form-control">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>
						<label class="col-sm-1 control-label">Danza</label>
						<div class="col-sm-2">
							<select name="danza" class="form-control">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>
						
						<label class="col-sm-1 control-label">Teatro</label>
						<div class="col-sm-2">
							<select name="teatro" class="form-control">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>
						<label class="col-sm-1 control-label">Cocina</label>
						<div class="col-sm-2">
							<select name="cocina" class="form-control">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>
						<label class="col-sm-1 control-label">Reposteria</label>
						<div class="col-sm-2">
							<select name="repost" class="form-control">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>

						<label class="col-sm-1 control-label">Manualidades</label>
						<div class="col-sm-2">
							<select name="manualid" class="form-control">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>

						<label class="col-sm-1 control-label">Deporte?</label>
						<div class="col-sm-2">
							<select name="deporte" class="form-control">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>

						<label class="col-sm-1 control-label">Cual?</label>
						<div class="col-sm-2">
							<input type="deporte_prac" value="{{$p->deporte_prac}}" class="form-control" name="cual_esp" placeholder="Cual Practicas?" data-toggle="tooltip" data-placement="bottom" title="Referencia">
						</div>


						<label class="col-sm-1 control-label">Cual?</label>
						<div class="col-sm-5">
							<input type="text" value="{{$p->deporte_gusto}}" class="form-control" name="deporte_gusto" placeholder="Cual te Gustaria Practicar?" data-toggle="tooltip" data-placement="bottom" title="Referencia">
						</div>

						<label class="col-sm-1 control-label">Cursos</label>
						<div class="col-sm-5">
							<input type="text" value="{{$p->cursos}}" class="form-control" name="cursos" placeholder="Cual te Gustaria Realizar?" data-toggle="tooltip" data-placement="bottom" title="Referencia">
						</div>

						
					</div>
					<br>

					<h4 class="page-header">SOCIO/ECONOMICO</h4>
					<div class="form-group">
						
						<label class="col-sm-1 control-label">Beneficio</label>
						<div class="col-sm-2">
							<select name="benefic" class="form-control">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>
						<label class="col-sm-1 control-label">Cual?</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" value="{{$p->cual_benefic}}" name="cual_benefic" placeholder="Cual Beneficio recibes?" data-toggle="tooltip" data-placement="bottom" title="Referencia">
						</div>
						
						<label class="col-sm-1 control-label">Act.Economica</label>
						<div class="col-sm-2">
							<select name="act_econ" class="form-control">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>
						<label class="col-sm-1 control-label">Cual?</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" value="{{$p->act_econ_de}}"  name="act_econ_de" placeholder="Cual Actividad Economica?" data-toggle="tooltip" data-placement="bottom" title="Referencia">
						</div>
						<label class="col-sm-1 control-label">Oficio</label>
						<div class="col-sm-2">
							<select name="repost" class="form-control">
								<option value="Carpinteria">Carpinteria</option>
								<option value="Herreria">Herreria</option>
								<option value="Electricidad">Electricidad</option>
								<option value="Plomeria">Plomeria</option>
								<option value="Otros">Otros</option>

							</select>
						</div>

						<label class="col-sm-1 control-label">Mov.Estudiantil?</label>
						<div class="col-sm-2">
							<select name="mov_est" class="form-control">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>

						<label class="col-sm-1 control-label">Te.Gustaria?</label>
						<div class="col-sm-2">
							<select name="mov_estd" class="form-control">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>

						

						<label class="col-sm-1 control-label">P/A</label>
						<div class="col-sm-2">
							<input type="text" value="{{$p->pregunta}}" class="form-control" name="pregunta" placeholder="Pregunta Abierta" data-toggle="tooltip" data-placement="bottom" title="Referencia">
						</div>

						
					</div>

						
						
						<input type="hidden" name="id" value="{{$p->id}}">


								

						<br>
						<input type="button" onclick="form.submit()" style="margin-left:15px; margin-top: 20px;" class="col-sm-2 btn btn-primary" value="Actualizar">

						<a href="{{route('registros.index')}}" style="margin-left:15px; margin-top: 20px;" class="col-sm-2 btn btn-danger">Volver</a>
					</div>			
				</form>	
			</div>
		</div>
	</div>
</div>
@endsection