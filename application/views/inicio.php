
<div class="row">

    <div class="container col-md-12">


        <div class="container" style="margin-top:50px">

            <div class="panel panel-default">
                <div style="margin:7px">
                    <div class="col-xs-6">
                        <div class="btn-group">
                             <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Nuevo</button>

                        </div>
                    </div>
                    <div class="col-xs-6 pull-right form-group">
                        <h4>Empleados</h4>
                    </div>
                </div>
                <div class="panel-body" style="padding:0px">
                    <table class="table table-striped table-bordered" style="margin:0px">
                        <thead>
                            <tr>
                                <th>Nº Empleado</th>
                                <th>Fecha Nacimiento</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Sexo</th>
                                <th>Fecha Contratación</th>
                                <th>Salario</th>
                                <th>Título</th>
                                <th>Departamento</th>
                                <th style="width:100px">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            foreach ($empleados as $empleado) {
                                echo '<tr>';
                                echo '<td>' . $empleado["emp_no"] . '</td>';
                                echo '<td>' . $empleado["birth_date"] . '</td>';
                                echo '<td>' . $empleado["first_name"] . '</td>';
                                echo '<td>' . $empleado["last_name"] . '</td>';
                                echo '<td>' . $empleado["gender"] . '</td>';
                                echo '<td>' . $empleado["hire_date"] . '</td>';
                                echo '<td>' . $empleado["salary"] . '</td>';
                                echo '<td>' . $empleado["title"] . '</td>';
                                echo '<td>' . $empleado["dept_name"] . '</td>';
                                echo '<td><a href="' . base_url() . '/Empresa/deleteEmpleado/' . $empleado["emp_no"] . '"><button type="button" data-bind="click: $parent.remove" class="remove-news btn btn-xs btn-default" data-toggle="tooltip" data-placement="top" data-original-title="Delete">
                                                            <span class="glyphicon glyphicon-trash"></span>
                                                        </button></a>';

                                echo '<a href="' . base_url() . '/Empresa/modificarEmpleado/' . $empleado["emp_no"] . '"><button type="button" class="btn btn-xs btn-default">
                                <span class="glyphicon glyphicon-pencil"></span>
                                </button></a></td>';
                                echo '</tr>';
                            }
                            
                            ?>
                        </tbody> 
                    </table>
                </div>
                <div class="panel-footer">
  
                </div>
            </div>
        </div>
    </div>


    <div class="row"></div>


    <div class="container col-md-12">


        <div class="container" style="margin-top:50px">

            <div class="panel panel-default">
                <div style="margin:7px">
                    <div class="col-xs-6">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal2">Nuevo</button>
                        </div>
                    </div>
                    <div class="col-xs-6 pull-right form-group">

                        <h4>Departamentos</h4>
                    </div>
                </div>
                <div class="panel-body" style="padding:0px">
                    <table class="table table-striped table-bordered" style="margin:0px">
                        <thead>
                            <tr >
                                <th>Número</th>
                                <th>Nombre</th>
                                <th style="width:100px">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            foreach ($departamentos as $departamento) {
                                echo '<tr>';
                                echo '<td>' . $departamento["dept_no"] . '</td>';
                                echo '<td>' . $departamento["dept_name"] . '</td>';
                                 echo '<td><a href="' . base_url() . 'Empresa/deleteDepartament/' . $departamento["dept_no"] . '"><button type="button" data-bind="click: $parent.remove" class="remove-news btn btn-xs btn-default" data-toggle="tooltip" data-placement="top" data-original-title="Delete">
                                                            <span class="glyphicon glyphicon-trash"></span>
                                                        </button></a>';
                                 echo '<a href="' . base_url() . 'Empresa/modificarDeparament/' . $departamento["dept_no"] . '"><button type="button" class="btn btn-xs btn-default">
                                <span class="glyphicon glyphicon-pencil"></span>
                                </button></a></td>';
                                echo '</tr>';
                                echo '</tr>';
                            }
                            ?>
                        </tbody> 
                    </table>
                </div>
                <div class="panel-footer">
                  
                </div>
            </div>
        </div>


    </div>
</div>



<div class="container">
 
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Agregar Nuevo Empleado</h4>
        </div>
        <div class="modal-body">
            <form action="<?php echo base_url("/Empresa/crearEmpleado")?>" method="post">
                                
                <label>Número empleado</label>
                <input type="number" name="emp_no" class="form-control">
                <label>Nombre</label>
                <input type="text" name="first_name" class="form-control">
                <label>Apellido</label>
                <input type="text" name="last_name" class="form-control">
                <label>Sexo</label>
                <div class="radio">
                    <label><input type="radio" name="gender" value="M">Hombre</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="gender" value="F">Mujer</label>
                </div>
                <label>Fecha de nacimiento</label>
                <input id="fecha" type="text" name="birth_date" class="form-control">
                <label>Departamento</label>
                <input type="number" name="dept_no" class="form-control">
                <label>Salario</label>
                <input type="number" name="salary" class="form-control">
                <label>Título</label>
                <input type="text" name="title" class="form-control">
                <div class="modal-footer">
                    <button type="submit" class="btn btn-default">Agregar</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
      </div>
      
    </div>
  </div>
  
</div>


<div class="container">
 
  <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Agregar Nuevo Empleado</h4>
        </div>
        <div class="modal-body">
            <form action="<?php echo base_url("/Empresa/createDepartament")?>" method="post">
                                
                <label>Número departamento</label>
                <input type="number" name="dept_no" class="form-control">
                <label>Nombre</label>
                <input type="text" name="dept_name" class="form-control">
                <div class="modal-footer">
                   <button type="submit" class="btn btn-default">Agregar</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
      </div>
      
    </div>
  </div>
  
</div>


</body>
</html>
