
<div class="row">

    <div class="container col-md-12">
        <table id="tablaEmpleado" class="table table-hover">
            <tr>
                <th>#</th>
                <th>Nº Empleado</th>
                <th>Fecha Nacimiento</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Sexo</th>
                <th>Fecha Contratación</th>
                <th>Salario</th>
                <th>Título</th>
                <th>Departamento</th>
                <th>Eliminar</th>
            </tr>
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
                echo '<td><a href="' . base_url() . '/Empresa/eliminarEmpleado/' . $empleado["emp_no"] . '"><span class="glyphicon glyphicon-remove-circle"></span></a></td>';

                echo '</tr>';
            }
            ?>
        </table>
    </div>

    <div class="container col-md-12">
        <table id="tablaDepartamento" class="table table-hover">
            <tr>
                <th>#</th>
                <th>Número</th>
                <th>Nombre</th>
                <th>Eliminar</th>
            </tr>
            <?php
            foreach ($departamentos as $departamento) {
                echo '<tr>';
                echo '<td>' . $empleado["dept_no"] . '</td>';
                echo '<td>' . $empleado["dept_name"] . '</td>';
                echo '<td><a href="' . base_url() . '/Empresa/eliminarDepartamento/' . $empleado["dept_no"] . '"><span class="glyphicon glyphicon-remove-circle"></span></a></td>';

                echo '</tr>';
            }
            ?>
        </table>
    </div>
</div>

</body>
</html>
