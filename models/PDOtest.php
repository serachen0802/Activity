<?php 
class PDOtest extends connect{
   
    public function city1(){
    //取出資料不重複
        $a =  $this->db->query("SELECT DISTINCT `start` FROM `bus_schedule`");
        $data = $a->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }
 
    
    public function city2($city1){
        $a = $this->db->query("SELECT * FROM `bus_schedule` WHERE `start`='".$city1."'");
        $data = $a->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }


}
?>