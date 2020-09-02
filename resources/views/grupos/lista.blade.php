@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>Lista de Asistencia </strong>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Launch demo modal
                    </button>
                </div>

                <div class="panel-body" >
                     <strong>Grupo: </strong> {{ $grupos->activities->nombre }} 
                   
                    <table id="student_name" class="table table-striped table-hover">
                        <thead>


                            <tr>
                                   
                                <th >Nombre/ No de clase</th>
                                <th >1</th>
                                <th >2</th>
                                <th >3</th>
                                <th >4</th>
                                <th >5</th>
                                <th >6</th>
                                <th >7</th>
                                <th >8</th>
                                <th >9</th>
                                <th >10</th>
                                <th >11</th>
                                <th >12</th>
                                <th >13</th>
                                <th >14</th>
                                <th >15</th>
                                <th >16</th>
                                <th >17</th>
                                <th >18</th>
                                <th >19</th>
                                <th >20</th>
                                <th>editar</th>
                                
    
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($alumnos as $alumno)
                            <tr>
                                
                                <td>{{ $alumno->name}} {{ $alumno->primer_apellido}} {{ $alumno->segundo_apellido}}</td>

                                <td>{{ $alumno->listas->clases->clase1}}</td>
                                <td>{{ $alumno->listas->clases->clase2}}</td>
                                <td>{{ $alumno->listas->clases->clase3}}</td>
                                <td>{{ $alumno->listas->clases->clase4}}</td>
                                <td>{{ $alumno->listas->clases->clase5}}</td>
                                <td>{{ $alumno->listas->clases->clase6}}</td>
                                <td>{{ $alumno->listas->clases->clase7}}</td>
                                <td>{{ $alumno->listas->clases->clase8}}</td>
                                <td>{{ $alumno->listas->clases->clase9}}</td>
                                <td>{{ $alumno->listas->clases->clase10}}</td>
                                <td>{{ $alumno->listas->clases->clase11}}</td>
                                <td>{{ $alumno->listas->clases->clase12}}</td>
                                <td>{{ $alumno->listas->clases->clase13}}</td>
                                <td>{{ $alumno->listas->clases->clase14}}</td>
                                <td>{{ $alumno->listas->clases->clase15}}</td>
                                <td>{{ $alumno->listas->clases->clase16}}</td>
                                <td>{{ $alumno->listas->clases->clase17}}</td>
                                <td>{{ $alumno->listas->clases->clase18}}</td>
                                <td>{{ $alumno->listas->clases->clase19}}</td>
                                <td>{{ $alumno->listas->clases->clase20}}</td>
                                <td><a href="{{ route('grupos.clase', $alumno->listas->clases) }}" class="btn btn-sm btn-default">Editar</a></td>

                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="addform">
      <div class="modal-body">
            <table id="student_name" class="table table-striped table-hover">
                        <thead>


                            <tr>
                                   
                                <th >Nombre/ No de clase</th>
                                <th >1</th>
                                <th >2</th>
                                <th >3</th>
                                <th >4</th>
                                <th >5</th>
                                <th >6</th>
                                <th >7</th>
                                <th >8</th>
                                <th >9</th>
                                <th >10</th>
                                <th >11</th>
                                <th >12</th>
                                <th >13</th>
                                <th >14</th>
                                <th >15</th>
                                <th >16</th>
                                <th >17</th>
                                <th >18</th>
                                <th >19</th>
                                <th >20</th>
                               
                                
    
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                
                                <td>Alumno</td>

                                <td><input type="checkbox" class="form-check-input" name="clase1" value=1></td>
                                <td><input type="checkbox" class="form-check-input" name="clase2" value=1></td>
                                <td><input type="checkbox" class="form-check-input" name="clase3" value=1></td>
                                <td><input type="checkbox" class="form-check-input" name="clase4" value=1></td>
                                <td><input type="checkbox" class="form-check-input" name="clase5" value=1></td>
                                <td><input type="checkbox" class="form-check-input" name="clase6" value=1></td>
                                <td><input type="checkbox" class="form-check-input" name="clase7" value=1></td>
                                <td><input type="checkbox" class="form-check-input" name="clase8" value=1></td>
                                <td><input type="checkbox" class="form-check-input" name="clase9" value=1></td>
                                <td><input type="checkbox" class="form-check-input" name="clase10" value=1></td>
                                <td><input type="checkbox" class="form-check-input" name="clase11" value=1></td>
                                <td><input type="checkbox" class="form-check-input" name="clase12" value=1></td>
                                <td><input type="checkbox" class="form-check-input" name="clase13" value=1></td>
                                <td><input type="checkbox" class="form-check-input" name="clase14" value=1></td>
                                <td><input type="checkbox" class="form-check-input" name="clase15" value=1></td>
                                <td><input type="checkbox" class="form-check-input" name="clase16" value=1></td>
                                <td><input type="checkbox" class="form-check-input" name="clase17" value=1></td>
                                <td><input type="checkbox" class="form-check-input" name="clase18" value=1></td>
                                <td><input type="checkbox" class="form-check-input" name="clase19" value=1></td>
                                <td><input type="checkbox" class="form-check-input" name="clase20" value=1></td>

                            </tr>
                           
                            
                        </tbody>
                    </table>
        
      </div>
        <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
        
        </div>
    </form>    
    </div>
  </div>
</div>


@endsection
                    

