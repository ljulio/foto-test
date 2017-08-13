<form method="post" enctype="multipart/form-data">
      	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		  <div class="row">
		    <div class="large-4 columns">
		      <label>Titulo
		        <input type="text" class="error" name="titulo" value="{{ $titulo or Input::old('titulo') }}"  />
		      </label>
		      @if( $errors->first('titulo') )
		      <small class="error">{{ $errors->first('titulo') }}</small>
		      @endif

		    </div>
		  </div>
		  <div class="row">
		    <div class="large-4 columns">
		      <label>Descripcion
		        <input type="text" class="error" name="descripcion" value="{{ $descripcion or Input::old('descripcion') }}"  />
		      </label>
		      @if( $errors->first('descripcion') )
		      <small class="error">{{ $errors->first('descripcion') }}</small>
		      @endif
		    </div>
		  </div>

		  <div class="row">
		    <div class="large-4 columns">
		      <label for="image"> Imagen </label>
	      	  <input type="file" name="imagen">		      
		      @if( $errors->first('foto') )
		      <small class="error">{{ $errors->first('foto') }}</small>
		      @endif
		    </div>
		  </div>


		  <br/>
		  <div class="row">
		    <div class="large-12 columns">
		      <label>
		        <input class="button small success radius" type="submit" value="ENVIAR" />
		      </label>
		    </div>
		  </div>
		</form>