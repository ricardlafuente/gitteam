
<div class="row">

    <div class="container col-md-12">


        <div class="container" style="margin-top:50px">

            <div class="panel panel-default">
                <div style="margin:7px">
                    <div class="col-xs-6">
                        <div class="btn-group">
                            <a class="btn btn-default"><span>Nuevo</span></a>
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
//                            foreach ($empleados as $empleado) {
//                                echo '<tr>';
//                                echo '<td>' . $empleado["emp_no"] . '</td>';
//                                echo '<td>' . $empleado["birth_date"] . '</td>';
//                                echo '<td>' . $empleado["first_name"] . '</td>';
//                                echo '<td>' . $empleado["last_name"] . '</td>';
//                                echo '<td>' . $empleado["gender"] . '</td>';
//                                echo '<td>' . $empleado["hire_date"] . '</td>';
//                                echo '<td>' . $empleado["salary"] . '</td>';
//                                echo '<td>' . $empleado["title"] . '</td>';
//                                echo '<td>' . $empleado["dept_name"] . '</td>';
//                                //echo '<td><a href="' . base_url() . '/Empresa/eliminarEmpleado/' . $empleado["emp_no"] . '"><span class="glyphicon glyphicon-remove-circle"></span></a></td>';
//                                echo '<td><a href="' . base_url() . '/Empresa/eliminarEmpleado/' . $empleado["emp_no"] . '"><button type="button" data-bind="click: $parent.remove" class="remove-news btn btn-xs btn-default" data-toggle="tooltip" data-placement="top" data-original-title="Delete">
//                                                            <span class="glyphicon glyphicon-trash"></span>
//                                                        </button></a></td>';
//
//                                echo '<td><a href="' . base_url() . '/Empresa/modificarEmpleado/' . $empleado["emp_no"] . '"><button type="button" class="btn btn-xs btn-default">
//                                <span class="glyphicon glyphicon-pencil"></span>
//                                </button></a></td>';
//                                echo '</tr>';
//                            }
//                            
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
                            <a class="btn btn-default"><span>Nuevo</span></a>
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
//                            foreach ($departamentos as $departamento) {
//                                echo '<tr>';
//                                echo '<td>' . $empleado["dept_no"] . '</td>';
//                                echo '<td>' . $empleado["dept_name"] . '</td>';
//                                echo '<td><a href="' . base_url() . '/Empresa/eliminarDepartamento/' . $empleado["dept_no"] . '"><span class="glyphicon glyphicon-remove-circle"></span></a></td>';
//
//                                echo '</tr>';
//                            }
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

</body>
</html>
