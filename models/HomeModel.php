<?php 
class HomeModel extends connect{

    public function insert($data){
        
        $tins = $this->db->prepare("INSERT INTO `ac_activ` " .
                    "(`name`,`date`,`startdate`,`enddate`,`people`,`type`,`url`,`createTime`,`createPeople`)".
                    "values(:name,:date,:startdate,:enddate,:people,:type,:url,:createTime,:createPeople)"
                  );
    
        $tins->execute(array(
                ':name' =>$data['name'],
                ':date' =>$data['a_date'],
                ':startdate'=>$data['startdate'],
                ':enddate'=>$data['enddate'],
                ':people'=>$data['people'],
                ':type'=>$data['type'],
                ':url'=>$data['rand'],
                ':createTime'=>$data['date'],
                ':createPeople'=>"admin"
                )
            );
            $aId = $this->db->lastInsertId();

            return $aId;
    }
    
    public function show(){
        $a = $this->db->query("SELECT * FROM `ac_activ`");
        $data = $a->fetchAll(PDO::FETCH_ASSOC);
            return $data;
    }

    public function signPage($url){
        $a = $this->db->query("SELECT *,(SELECT SUM(`total`) FROM `ac_join` WHERE  `ac_join`.`aId`=`ac_activ`.`aId`) AS `totalP` FROM `ac_activ` WHERE url='".$url."'");
        $data = $a->fetch(PDO::FETCH_ASSOC);
            return $data;
    }
    
    public function countPeople(){
         
        $a = $this->db->query("SELECT `aId`,(SELECT SUM(`total`) FROM `ac_join` WHERE  `ac_join`.`aId`=`ac_activ`.`aId`) AS `totalP` FROM `ac_activ`");
        $data = $a->fetchALL(PDO::FETCH_ASSOC);
            return $data;
    }
    
    public function checkbox($aId){
        $a = $this->db->query("SELECT * FROM `ac_member`");
        $data = $a->fetchALL(PDO::FETCH_ASSOC);
            return $data;
    }
    
    public function insertLimitm($data,$aId){
        $t = $this->db->prepare("INSERT INTO `ac_limitm` " .
                    "(`aId`,`mId`,`mName`)".
                    "values(:aId,:mId,:mName)"
                  );
        $num = "";
        $member = "";
        $t->bindParam(':aId', $aId);
        $t->bindParam(':mId', $num);
        $t->bindParam(':mName', $member);
        
        for($i = 0; $i < sizeof($data['num']); $i++){
			$num = $data['num'][$i];
			$member = $data['member'][$i];
    		if(strlen($num) > 0 && strlen($member) > 0){
    				 $t->execute();
			}
		}
       
        return $num;
    }
            
}
?>