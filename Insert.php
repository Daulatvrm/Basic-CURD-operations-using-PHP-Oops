<?php
include('database.php');

class insert extends database{

    function insertDataInto($table,$condition_arr){
        if($condition_arr != ''){
            foreach($condition_arr as $keys=>$values){
                $fieldArr[] = $keys;
                $valueArr[] = $values;
            }
            $field =  implode(",",$fieldArr);
            $value = implode("','",$valueArr);
            $value = "'".$value."'";
            $sql = "insert into $table ($field) values($value)";
            $result = $this->connect()->query($sql); 
            if($result){
                echo "<h4><i>Record is inserted successfully </i></h4>";
            }else{
                echo "<h4><i>Record insertion is failed....</i></h4>";
            } 
            
        }
    }
}
$obj = new insert();
$condition_arr = array('name'=>'Daulat Bairwa','contact'=>125550055,'city'=>'Kota');
$obj->insertDataInto('user',$condition_arr);


?>