

<div class="form-group row">
    <label for="inputRege" class="col-sm-2 col-form-label">Código REGE:</label>
    <div class="col-sm-10">
        <input type="text" name="rege" value="{{ isset($registro->rege)?$registro->rege:'' }}" class="form-control" id="inputRege" placeholder="XXX00">
    </div>
</div><br>

<div class="form-group row">
    <label for="inputTiempo" class="col-sm-2 col-form-label">Tiempo dedicado:</label>
    <div class="col-sm-10">
        <input type="text" name="tiempo" value="{{ isset($registro->tiempo)?$registro->tiempo:'' }}" class="form-control" id="inputTiempo" placeholder="%">
    </div>
</div>

<div class="form-group row">
    <label for="inputFecha" class="col-sm-2 col-form-label">Fecha:</label>
    <div class="col-sm-10">
        <input type="date" name="fecha" class="form-control" id="inputFecha" value="<?php echo date('Y-m-d'); ?>" />
    </div>
</div><br>

<div class="form-group row">
    <div class="col-sm-10">
        <input type="submit" class="btn btn-primary" value="{{$modo}} Registro">
        <a href="{{ url('registro/') }}">Volver</a>
    </div>
</div>