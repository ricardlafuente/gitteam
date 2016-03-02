<?php

class Empresa extends CI_Controller {

    function index() {
        $data = array();
        $data['empleados'] = $this->Empleado->getEmpleados();
        $data['departamentos'] = $this->Departaments->getDepartaments();
        //var_dump($data['empleados']);
        $this->load->view("header");
        $this->load->view("inicio", $data);
    }

    function crearEmpleado() {
        $emp_no = $this->input->post("emp_no");
        $birth_date = $this->input->post("birth_date");
        $first_name = $this->input->post("first_name");
        $last_name = $this->input->post("last_name");
        $gender = $this->input->post("gender");
        $department = $this->input->post("dept_no");
        $salary = $this->input->post("salary");
        $title = $this->input->post("title");

        $this->Empleado->createEmpleado($emp_no, $birth_date, $first_name, $last_name, $gender, $department, $salary, $title);

        $this->index();
    }

    function deleteEmpleado($id_empleado) {

        $this->Empleado->deleteEmpleado($id_empleado);

        $this->index();
    }

    function createDepartament() {

        $dept_no = $this->input->post("dept_no");
        $dept_name = $this->input->post("dept_name");

        $this->Departaments->createDepartament($dept_no, $dept_name);

        $this->index();
    }

    function deleteDepartament($dept_no) {

        $this->Departaments->deleteDepartament($dept_no);

        $this->index();
    }
    
    function modificarEmpleado(){
        $emp_no = $this->input->post("emp_no");
        $birth_date = $this->input->post("birth_date");
        $first_name = $this->input->post("first_name");
        $last_name = $this->input->post("last_name");
        $gender = $this->input->post("gender");
        $department = $this->input->post("dept_name");
        $salary = $this->input->post("salary");
        $title = $this->input->post("title");
        
        $this->Empleado->modificarEmpleados($emp_no, $birth_date, $first_name, $last_name, $gender, $department, $salary, $title);
        
        echo json_encode(array("result" => "OK"));
    }
    
    function modificarDepartamento(){
        $dept_no = $this->input->post("dept_no");
        $dept_name = $this->input->post("dept_name");

        $this->Departaments->modificarDepartament($dept_no, $dept_name);
        
        echo json_encode(array("result" => "OK"));
    }

}
