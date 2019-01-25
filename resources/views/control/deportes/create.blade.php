<div aria-hidden="true" aria-labelledby="exampleModalCenterTitle" class="modal fade" id="exampleModalCenter" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                Agregar Deporte
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">
                        ×
                    </span>
                </button>
            </div>
            <div class="modal-body">
                {!! Form::open(['route' => 'deportes.store', 'method' => 'POST','files' => true]) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Nombre') !!}
                    {!! Form::text('name',null, ['class' => 'form-control', 'placeholder' => 'Deporte', 'required' ])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('user_id', 'Entrenador') !!}
                    {!! Form::select('user_id', $user, null, ['class' => 'form-control select-categoria', 'required', 'placeholder' => 'Seleccione el entrenador' ] )!!}
                </div>
                <div class="form-group">
                    {!! Form::label('imagen', 'Imagen del deporte, Opcional') !!}
                    <input type="file" id="imagen"  accept=".jpg,.png" name="imagen">
                </div>
                <div class="form-group">
                    {!! Form::submit('Guardar', ['class' => 'btn btn-primary'])!!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
