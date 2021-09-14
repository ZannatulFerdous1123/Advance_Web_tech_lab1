<?php 

class student{
    public $Name;
    public $Id;
    public $Dob;
    public $courses;
    function ShowInfo(){
        echo "Name:".$this->Name."<br>";
        echo "Id:".$this->Id."<br>";
        echo " Dob:".$this->Dob."<br>";
    }

    function AddCourse($coursename){
        $this->courses[]=$coursename;

    }

    function ShowAllCourses(){
        echo "Student name:".$this->Name."<br>";
        echo "Student id:".$this->Id."<br>";
        echo "Courses:";
        foreach($this->courses as $c){
            echo $c ."<br>" ;
        }
    }
}
    $student1=new student();
    $student1->Name="Jannat";
    $student1->Id="18-38302-2";
    $student1->Dob="10/11/1999";

    $student1->Addcourse("Chemistry");
    $student1->Addcourse(" Advance Web technology");
    $student1->Addcourse("Computer graphics");
    echo "Student-1"."<br>";
   
    $student1->ShowInfo();
    echo ""."<br>";
    echo "Course Info"."<br>";
    
    $student1->ShowAllCourses();
    echo "......................................"."<br>";

    $student2=new student();
    $student2->Name="Mithila";
    $student2->Id="18-38303-2";
    $student2->Dob="1/1/1996";
   
    $student2->Addcourse("Java");
    $student2->Addcourse("Accounting");
    $student2->Addcourse("Compiler Design");
    echo "Student-2"."<br>";
    $student2->ShowInfo();
    echo ""."<br>";
    echo "Course Info"."<br>";
    $student2->ShowAllCourses();