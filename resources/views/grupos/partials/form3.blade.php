
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
                                 
                                <td>@if($clases->clase1 == 1)
                                    {{ Form::checkbox('clase1',0,true)}}
                                 @else
                                    {{ Form::checkbox('clase1',0,false)}}
                                    @endif</td>




                            </tr>
                           
                            
                        </tbody>
                    </table>
        
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
    