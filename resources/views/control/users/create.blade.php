
<div aria-hidden="true" aria-labelledby="exampleModalCenterTitle" class="modal fade" id="exampleModalCenter" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                Agregar Usuario
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">
                        ×
                    </span>
                </button>
            </div>
            <div class="modal-body">
                {!! Form::open(['route' => 'users.store', 'method' => 'POST','files' => true]) !!}

                <div class="form-group">
                    {!! Form::label('name', 'Nombre') !!}
                    {!! Form::text('name',null, ['class' => 'form-control', 'placeholder' => 'Nombre completo', 'required' ])!!}
                </div>

                <div class="form-group">
                    {!! Form::label('email', 'Correo Electronico') !!}
                    {!! Form::email('email',null, ['class' => 'form-control', 'placeholder' => 'Ejemplo@gmail.com', 'required' ])!!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'Contraseña') !!}
                    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '*******', 'required' ])!!}
                </div>

                <div class="form-group">
                    {!! Form::label('tipo', 'Tipo') !!}
                    {!! Form::select('tipo', ['miembro' => 'Miembro', 'administrador' => 'Administrador'],null,['class' => 'form-control'])!!}
                </div>

                
                <div class="form-group">
                    {!! Form::submit('Registrar', ['class' => 'btn btn-primary'])!!}
                </div>
                {!! Form::close() !!}
        </div>
    </div>
</div>
