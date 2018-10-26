          <button class="btn btn-primary btn-sm " data-id="{{ $element->id }}" data-toggle="modal" data-target="#update{{ $element->id }}" >
          <i class="material-icons">
          border_color
          </i></button>


<div class="modal fade" id="update{{ $element->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
               {!! Form::open(['route' => ['brands.update', $element->id], 'method' => 'PUT']) !!}
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Brand {{ $element->name }}</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <i class="material-icons">clear</i>
                      </button>
                    </div>
                    <div class="modal-body">
                      
               {{ Form::label('name', 'Ingresa el Nombre') }}
               {{ Form::text('name', $element->name, ['class' => 'form-control', 'placeholder' => 'Aqui va el nombre', 'required' => true])}}
               {{ Form::label('available', 'activo inactivo') }}
               {{ Form::select('available', ['0' => 'Inactive', '1' => 'Active'], $element->available, ['class' => 'form-control']) }}
               
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default btn-link" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-success">Save</button>
                    </div>
                  </div>
                </div>
                {!! Form::close() !!}
              </div>
              <!--  End Modal -->