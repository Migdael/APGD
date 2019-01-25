<div aria-hidden="true" aria-labelledby="exampleModalCenterTitle" class="modal fade" id="exampleModalCenter" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                Agregar Institucion
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">
                        ×
                    </span>
                </button>
            </div>
            <div class="modal-body">
                {!! Form::open(['route' => 'instituciones.store', 'method' => 'POST']) !!}
                <div class="form-group">
                    {!! Form::label('nombre', 'Nombre') !!}
                    {!! Form::text('nombre',null, ['class' => 'form-control', 'placeholder' => 'Nombre de la institucion', 'required' ])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('tipo', 'Tipo') !!}
                    {!! Form::select('tipo', ['universidad' => 'Universidad', 'colegio' => 'Colegio', 'otro' => 'Otro'],null,['class' => 'form-control','placeholder' => 'Seleccione el tipo de institución', 'required'])!!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Guardar', ['class' => 'btn btn-primary'])!!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>