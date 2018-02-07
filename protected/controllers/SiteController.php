<?php

class SiteController extends Controller 
{
    function actionIndex()
    {
        $model = new Student();
        $students = new CActiveDataProvider($model);

        $this->render('index', array(
            "students" => $students
        ));

    }
    function actionForm( $id = null ) 
    {
       $student = new Student();

       if(!empty($_POST))
       {
           $id = $_POST["Student"]["student_id"];
           
           if(!empty($id)) 
           {
               $student = Student::model()->findByPk($id);
           }

           $student->_attributes = $_POST["Student"];

           if($student->save())
           {
               $this->redirect(array("index"));
           }
       }

       if (!empty($id)) {
           $student = Student::model()->findByPk($id);
       }
       $this->render("Form", array(
           "students" => $student
       ));

    }  
    function actionDelete($id)
    {
        Student::model()->deleteByPk($id);
        $this->redirect(array("index"));
    }
}

?>