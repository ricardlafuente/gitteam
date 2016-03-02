<?php
class Empleado extends CI_Model{

    
    function getEmpleados(){
        return $this->db->query("SELECT * FROM employees JOIN salaries USING(emp_no) JOIN titles USING (emp_no) JOIN dept_emp USING (emp_no) JOIN departments USING (dept_no)")->result_array();
    }
    
    function deleteEmpleado($id_empleado){
        $id_empleado = addslashes($id_empleado);
        
        //Borra en cascada todos los registros del empleado
        $this->db->query("DELETE FROM employees WHERE emp_no = '$id_empleado'");
    }
    
    function createEmpleado($emp_no, $birth_date, $first_name, $last_name, $gender, $department, $salary, $title){
        $emp_no = addslashes($emp_no);
        $birth_date = addslashes($birth_date);
        $first_name = addslashes($first_name);
        $last_name = addslashes($last_name);
        $gender = addslashes($gender);
        $department = addslashes($department);
        $salary = addslashes($salary);
        $title = addslashes($title);

        $this->db->query("INSERT INTO employees (emp_no, birth_date, first_name, last_name, gender, hire_date) VALUES ('$emp_no', '$birth_date', '$first_name', '$last_name', '$gender', CURDATE())");
        $this->db->query("INSERT INTO dept_emp (emp_no, dept_no, from_date, to_date) VALUES ('$emp_no', '$department', CURDATE(), CURDATE())");
        $this->db->query("INSERT INTO titles (emp_no, title, from_date) VALUES ('$emp_no', '$title', CURDATE())");
        $this->db->query("INSERT INTO salaries (emp_no, salary, from_date, to_date) VALUES ('$emp_no', '$salary', CURDATE(), CURDATE())");
    }

}
?>