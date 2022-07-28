<?php
include('database.php');

    class delete extends database{

        function deleteData($table, $condition_arr){

            if($condition_arr !=  ''){
                $sql = "delete from $table where  ";
                $c = count($condition_arr);
                $i=1;
                foreach($condition_arr as $keys=>$val){
                    if($i==$c){
                            $sql .= "$keys = '$val'";
                    }
                    else{
                        $sql .=" $keys = '$val' and ";
                    }
                    $i++;
                }
                $result = $this->connect()->query($sql);

                if($result){
                    echo "<h4><i>Record is deleted successfully </i></h4>";
                }else{
                    echo "<h4><i>Record deletion is failed....</i></h4>";
                } 
            }
    }
}

$obj =new delete();
$condition_arr =  array('id'=>23,'name'=>'Daulat Bairwa'); // pass id or name or both
$obj->deleteData('user',$condition_arr);

?>