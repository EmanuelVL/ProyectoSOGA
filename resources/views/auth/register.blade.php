@extends('sidebar')

@section('seccion')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrar') }}</div>

                <div class="card-body">

                    <form action="{{route('agrgarusua')}}" method="POST">
                      @csrf
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputAddress">Nombre*</label>
                          <input type="text" name="nombre" class="form-control" id="inputNombre" placeholder="Nombre" value="{{old('nombre')}}">
                        </div>

                        <div class="form-group col-md-6">
                          <label for="inputAddress2">Nombre de usuario*</label>
                          <input type="text" name="user_neme" class="form-control" id="inputNombreUs" placeholder="Nombre usuario" value="{{old('user_neme')}}">
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputEmail4">Email</label>
                          <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email" value="{{old('email')}}">
                        </div>

                        <div class="form-group col-md-6">
                          <label for="inputPassword4">Password*</label>
                          <input name="contrasena" class="form-control" id="inputPassword4" placeholder="Password">
                        </div>
                      </div>

                      @error('nombre')
                        <div class="alert alert-danger">
                          El nombre es obligatorio
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </div>
                      @enderror @if ($errors->has('user_neme'))
                        <div class="alert alert-danger">
                          El nombre de usuario es obligatorio
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </div>
                      @enderror @if ($errors->has('contrasena'))
                        <div class="alert alert-danger">
                          La contrasena es obligatorio
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                        </div>
                      @enderror

                      @foreach($verAreas as $item)
                        <tr>
                            <th scope="row"><input type="checkbox" aria-label="Checkbox for following text input" name="{{$item->nombre_area}}"></th>
                            <td>
                              <a>{{$item->nombre_area}}</a>
                            </td>
                            <br>
                        </tr>
                      @endforeach

                      <button type="submit" name="botonA" class="btn btn-primary">Registrar</button>
                    </form>

                </div>

            </div>
        </div>
    </div>
</div>

@endsection
