<?php 
class SignModel extends connect{
    
    public function insert($data){
        $tins = $this->db->prepare("INSERT INTO `ac_join` " .
                    "(`aId`,`mId`,`partner`,`total`)".
                    "values(:aId,:mId,:partner,:total)"
                  );
    
        $tins->execute(array(
                ':aId' =>$data['aId'],
                ':mId' =>$data['mId'],
                ':partner'=>$data['partner'],
                ':total'=>$data['total']
                )
            );

            return true;
    } 
    
    public function GetApplyNum($aId){
        $a = $this->db->query("SELECT SUM(`total`) as 'Num' FROM `ac_join` WHERE `aId` = ".$aId);
        $data = $a->fetchALL(PDO::FETCH_ASSOC);
        return $data;
   }
   
     public function check($data){
        $a = $this->db->query("SELECT COUNT(*) AS Num FROM `ac_join` WHERE `aId`=".$data['aId']." AND `mId` = ".$data['mId']);
        $data = $a->fetchALL(PDO::FETCH_ASSOC);
        return $data;
    }
    
    public function totalPeople($data){
        $b = $this->db->query("SELECT `people` FROM `ac_activ` WHERE `aId`='".$data['aId']."'");
        $data = $b->fetch(PDO::FETCH_ASSOC);
        return $data;
    } 
}
?>