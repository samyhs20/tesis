@extends('adminlte::page')
@section('title', 'Usuario')
@section('content')

<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="col-md">
                    <!-- MESSAGES -->
                
                    @if (Session('status'))
                    <div class="alert alert-success" role="alert">
                      {{Session('status')}}
                    </div>
                    @endif
                
                    <!-- ADD TASK FORM -->
                  </div>

                        <div class="col-md">
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th>Nombre</th>
                                <th>E-mail</th>
                                <th>Cédula</th>
                                <th>Rol</th>
                                <th>Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($users as $user)
                              @if(!($user->role === 'admin'))
                              <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->cedula }}</td>
                                <td>{{ $user->email }}</td>
                                <td>@if ($user->rol  == 'admin') 
                                    Administrador
                                    @else 
                                    Usuario
                                @endif
                            </td>
                                <td>
                                    <a href="#" data-id={{$user->id}} class= "btn btn-info btn-sm editbtn" >
                                        <i class="fas fa-marker"></i>
                                      </a>
                                    <a href="{{ route('delete',  $user->id ) }}" class="btn btn-danger">
                                        <i class="far fa-trash-alt"></i>
                                      </a>
                                </td>
                              </tr>   
                              @endif
                              @endforeach
                            </tbody>
                          </table>
                          <div class="text-center">
                            <button onclick="location.href='{{ route('register_admin')}}'" class="btn btn-primary" aling="center">
                                Agregar nuevo</button>
                          </div>
                        </div>
                      </div>

        </div>
    </div>
    </x-app-layout>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script type="text/javascript" lenguage="javascript"> 
    var idd;
        $(document).on('click', '.editbtn ', function(event) {
          idd = $(this).data('id');
          console.log(idd);
          $.ajax({
            url:"../api/editRol/"+idd, 
            type:"get",
            success :function(response){
              $('#rol').val(response.data.rol);
              }
            });
        
            $('#modalUpdate').modal('show');
          });
    $("#btnsave").click(function () {
      $.ajax({
        url: '../api/saveRol/'+idd,
        method: 'post',
        data:$('#saveUpdate').serialize(),
          });
    });
;</script>
@stop

 <!-- Modal Actualizacion -->
<div class="modal fade " id="modalUpdate" tabindex="-1" aria-labelledby="#exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content ">
        <div class="modal-header">
            Cambiar Rol del Usuario
        </div>
        <div class="modal-body" id="modalUpdate">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <form id="saveUpdate" style="text-align: -webkit-center;" >
                        @csrf
                            <select  name="rol" id="rol" required>      
                              <option value="admin" >Administrador</option>
                              <option value="usuario" >Usuario</option>
                          </select>

                      </form>
                      <div class="modal-footer">
                        <button type="button" id="btnsave" class="btn btn-primary " data-dismiss="modal" style="background: #17a2b8">Guardar</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background: #dc3545">Cancelar</button>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>