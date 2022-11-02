<?php
class Connect{
    public function conn(){
       $connect = mysqli_connect('localhost','Danil','1','auth');
        return $connect;
        if (!$connect){
            die ('Error');
        }
         
    }
}


?>