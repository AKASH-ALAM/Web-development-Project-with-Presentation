<?php
class Employee
    {
        var $Id;
        var $employee_name;
        var $salary;
        
        function employee($Id,$employee_name,$salary){
               $this->employee_name = $employee_name;
               $this->salary = $salary;
               $this->Id = $Id;
         }
    
        function getSalary(){
               echo("Paying salary ".$this->salary." for ".$this->name);
         }

    }  


?>