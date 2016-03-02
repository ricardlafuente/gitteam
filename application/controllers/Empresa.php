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
        $department = $this->input->post("department");
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

        $dept_no = $this->inout->post("dept_no");
        $dept_name = $this->inout->post("dept_name");

        $this->Departaments->createDepartament($dept_no, $dept_name);

        $this->index();
    }

    function deleteDepartament($dept_no) {

        $this->Departaments->deleteDepartament($dept_no);

        $this->index();
    }

}
