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
}
?>