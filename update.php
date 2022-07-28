<?php
include('database.php');
    class update extends database{

        function updateData($table, $condition_arr,$fieldName,$fieldValue){
        
            if($condition_arr != ''){           
                $sql="update $table set ";
                $c = count($condition_arr);
                $i=1;
                foreach($condition_arr as $keys=>$val){
                    if($c==$i){
                        $sql .="$keys ='$val'";
                    }else{
                        $sql .="$keys = '$val' , ";
                    }
                    $i++;
                }
                $sql .=" where $fieldName = '$fieldValue'";
                $result = $this->connect()->query($sql);
                if($result){
                    echo "<h4><i>Record is updated successfully </i></h4>";
                }else{
                    echo "<h4><i>Record updation is failed....</i></h4>";
                } 
            }
            
        }

    }

$obj = new update();
$condition_arr = array('name'=>'Daulat','contact'=>9529850012,'city'=>'Kota');
$obj->updateData('user',$condition_arr,'id',24);

?>