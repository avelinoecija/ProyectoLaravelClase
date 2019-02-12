@extends('layouts.master')
@section('content')
<body style="background-image: url(./img/índice.svg); background-repeat: no-repeat; background-attachment: fixed">
	<div>
   		<div class="offset-md-3 col-md-6">
      		<div class="card">
         		<div class="card-header text-center text-warning bg-dark">
            		Añadir juego
         		</div>
         		<div class="card-body">

            		<form class="col-md-12" action="#" method="POST">

            			{{ csrf_field() }}


                     <div class="form-group text-warning">
               				<label for="name">Titulo</label>
               				<input type="text" name="name" id="name" class="form-control">
            			</div>

            			<div class="form-group text-warning">
               				<label for="price">Precio</label>
               				<input type="text" name="price" id="price" class="form-control">
            			</div>

            			<div class="form-group text-warning">
               				<label for="category">Categoria</label>
               				<input type="text" name="category" id="category" class="form-control">
            			</div>

            			<div class="form-group text-warning">
               				<label for="image">Imagen</label>
               				<input type="text" name="image" id="image" class="form-control">
            			</div>

                     <div class="form-group text-warning">
                           <label for="video">Video</label>
                           <input type="text" name="video" id="video" class="form-control">
                     </div>
                     <div class="form-group text-warning">
                           <label for="name">Lanzamiento</label>
                           <input type="text" name="launch" id="launch" class="form-control">
                     </div>
                      <div class="form-group text-warning">
                           <label for="name">Creador</label>
                           <input type="text" name="creator" id="creator" class="form-control">
                     </div>
                      <div class="form-group text-warning">
                           <label for="name">Editor</label>
                           <input type="text" name="editor" id="editor" class="form-control">
                     </div>
                      <div class="form-group text-warning">
                           <label for="name">Clave</label>
                           <input type="text" name="key" id="key" class="form-control">
                     </div>
                     <div class="form-group text-warning">
                           <label for="description">Descripcion</label>
                           <textarea name="description" id="description" class="form-control" rows="3"></textarea>
                     </div>
            			<div class="form-group text-center">
               				<button type="submit" class="btn btn-warning" style="padding:8px 100px;margin-top:25px;">
                   				Añadir juego
               				</button>
            			</div>
            		</form>

         		</div>
      		</div>
   		</div>
	</div>
</body>
@endsection