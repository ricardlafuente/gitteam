<?php

Class Departaments extends CI_Model {

    function getDepartaments() {

        return $this->db->query("SELECT * FROM departments")->result_array();
    }

    function createDepartament($dept_no, $dept_name) {

        $this->db->query("INSERT INTO departments (dept_no,dept_name) VALUES ('$dept_no', '$dept_name')");
    }

    function deleteDepartament($dept_no) {
        $dept_no = addslashes($dept_no);

        $this->db->query("DELETE FROM departments WHERE dept_no = '$dept_no'");
    }

}
