<?php
    
namespace App\Controllers;
use Config\Database;

class Student extends BaseController
{
    public function index()
    {
        $db = Database::connect();
        $query= $db->query("select * from student");
        $studentList = 
        $query->getResultArray();
        return View('student/index', ['students'=> $studentList]);
        
    }
    public function new(){
        return view('student/new');
    }
}

?>