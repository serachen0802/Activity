<?php 
class HomeModel extends connect{

    public function insert($data){
        
        $tins = $this->db->prepare("INSERT INTO `ac_activ` " .
                    "(`name`,`date`,`startdate`,`enddate`,`people`,`type`,`url`,`createTime`,`createPeople`)".
                    "values(:name,:date,:startdate,:enddate,:people,:type,:url,:createTime,:createPeople)"
                  );
    
        $tins->execute(array(
                ':name' =>$data['name'],
                ':date' =>$data['date'],
                ':startdate'=>$data['startdate'],
                ':enddate'=>$data['enddate'],
                ':people'=>$data['people'],
                ':type'=>$data['type'],
                ':url'=>$data['rand'],
                ':createTime'=>$data['date'],
                ':createPeople'=>"admin"
                )
            );

            return true;
    }
    
    public function show(){
        $a = $this->db->query("SELECT * FROM `ac_activ`");
        $data = $a->fetchAll(PDO::FETCH_ASSOC);
            return $data;
    }
    
//     SELECT *,(SELECT SUM(`total`) FROM `ac_join` WHERE  `ac_join`.`aId`=`ac_activ`.`aId`) AS `totalP`

// FROM `ac_activ`;
    public function signPage($url){
        $a = $this->db->query("SELECT * FROM `ac_activ` WHERE url='".$url."'");
        $data = $a->fetch(PDO::FETCH_ASSOC);
            return $data;
    }
    
    public function countPeople(){
         
        $a = $this->db->query("SELECT `aId`,(SELECT SUM(`total`) FROM `ac_join` WHERE  `ac_join`.`aId`=`ac_activ`.`aId`) AS `totalP` FROM `ac_activ`");
        $data = $a->fetchALL(PDO::FETCH_ASSOC);
            return $data;
    }
            
}
?>