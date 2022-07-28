<?php 
include('database.php');

class select extends database{

    function getData(){
        $sql="select * from user";
        $result =  $this->connect()->query($sql);
        
            if($result->num_rows  > 0){
                $arr = array();
                while($row = $result->fetch_assoc()){
                    $arr[] = $row;
                }
                return $arr;
            }
}

function getDataConditionId($id = ''){
    $this->id = $id;
    $sql="select * from user where id = $this->id";
    $result =  $this->connect()->query($sql);

    if($result->num_rows  > 0){
        $arr =  array();
        while($row=$result->fetch_assoc()){
            $arr[]=$row;
        }
            return $arr;
    }
    else{
            return 0;
    }
}

function getDataConditionName($name=''){
    $this->name = $name;
    $sql = "select * from user where name='$this->name'";
    //die($sql);
    $result = $this->connect()->query($sql);
    if($result->num_rows > 0){
        $arr =  array();
        while ($row = $result->fetch_assoc()){
            $arr[] =  $row;
        } return $arr;
    }else{return 0;}

}
}

$obj = new select();

/* 
// fetching records using Name
$result = $obj->getDataConditionName('Daulat');
echo "<pre>";
print_r($result);
*/

/*
// fetching records using ID
$result = $obj->getDataConditionId(13);
echo "<pre>";
print_r($result);
*/

//// fetching all records
$result = $obj->getData(13);
echo "<pre>";
print_r($result);

?>