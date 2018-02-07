<?php 
Class Student extends CActiveRecord {
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
    public function tableName()
    {
        return "student";
    }
    public function attributeLabels() 
    {
        return array (
            "student_id" => "รหัสนักเรียน",
            "name" => "ชื่อนักเรียน",
            "age" => "อายุ",
            "sex" => "เพศ"
        );
    }
}
?>