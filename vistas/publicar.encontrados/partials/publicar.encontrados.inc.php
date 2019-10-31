<div class="row">
		<div class="col-md-12">
			<h3>
				Publicar un Encontrado
			</h3>
			<form action="procesar_publicacion.php" role="form"> <!--con acction haces que despues se pueda pescar los de name-->

				<input type="hidden" name="piblucar.encontrados.inc.php">
				
				<div class="form-group">
					 
					<label for="exampleInputEmail1">
						nombre
					</label>
					<input type="text" class="form-control" id="exampleInputEmail1" name="titulo"> <!--hay que poner name en los input para despues pescarlos-->
				</div>
				<div class="form-group">
					 
					<label for="exampleInputEmail1">
						¿Donde has perdido a tu perro?
					</label>
					<input type="text" class="form-control" id="exampleInputEmail1" name="lugar">
				</div>
				<div class="form-group"> 
					<label for="exampleInputPassword1">
						Fecha de desaparicion
					</label>
					<input type="date" class="form-control" id="exampleInputPassword1" name="fecha">
				</div>
				<!- -->
				<div class="form-group"> 
					<label for="exampleInputPassword1">
						descripcion
					</label>
					<input type="text" class="form-control" id="exampleInputPassword1" name="descripcion">
				</div>
				<div class="form-group"> 
					<label for="animal">
						Animal
					</label>
					<br>
					<input id="animal" type="radio" name="animal" value=1> Perro <br>
					<input id="animal" type="radio" name="animal" value=2> Gato<br>
					<input id="animal" type="radio" name="animal" value=3> Otro<br>
				</div>
				<div class="form-group"> 
					<label for="gender">
						Genero
					</label>
					<br>
					<input id="gender" type="radio" name="gender" value=1> Macho<br>
					<input id="gender" type="radio" name="gender" value=2> Hembra<br>
				</div>
				<div class="form-group"> 
					<label for="castrado">
						Castrado
					</label>
					<br>
					<input id="castrado" type="radio" name="castrado" value=1> Si<br>
					<input id="castrado" type="radio" name="castrado" value=2> No<br>
				</div>
				<div class="form-group">
					 
					<label for="exampleInputFile">
						Cargar Imagen
					</label>
					<input type="file" class="form-control-file" id="exampleInputFile">
					<br>
					<p class="help-block">
						Example block-level help text here.
					</p>
				</div>
				<button type="submit" class="btn btn-primary">
					publicar
				</button>
			</form>
		</div>
	</div>
	
