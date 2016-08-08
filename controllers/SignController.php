<?php
class SignController extends Controller {
    
    public function insert($url){
        $data['mId'] = $_POST['mId'];
        $data['partner'] = $_POST['partner'];
        $data['aId'] = $_POST['aId'];
        $data['total'] = $_POST['partner'] +1;
        
        // 判斷這個員工編號有沒有報名過了
        $model =  $this-> model("SignModel");
        $a = $model-> check($data);
        if ($a[0]["Num"] >= 1) {
            $this->view("alert",'已經報名過囉');
            header("refresh:0,/Activity/Home/url/$url");
        }
        $mem = $model-> canAct($data);
        //判斷帳號是否被允許參加
        for($x = 0;$x < count($mem);$x++){
           if($data['mId'] == $mem[$x]['mId']){
                $aid = $data['aId'];
                
                //X如果額滿要報名失敗
                $b = $model ->totalPeople($data);
                $p = $model ->GetApplyNum($aid);
                
                if($p[0]['Num'] != 0){
                    $b['people'] -= (int)$p[0]['Num'];
                }
                
                if($b['people'] < $data['total']){
                    $this -> view("alert",'已額滿');
                    header("refresh:0,/Activity/Home/url/$url");
                }else{
                    $data["act"] = $model-> insert($data);
                }
        
                 if ($data == true){
                    $this->view("alert",'報名成功');
                    header("refresh:0,/Activity/Home/url/$url");
                 }else{
                    $this->view("alert",'報名失敗');
                }
            return;
            }else{
                $this->view("alert",'此編號未被同意報名');
                header("refresh:0,/Activity/Home/url/$url");
           }
        }

    }
    
    function GetApplyNum(){
        $aId = $_POST['aId'];
        $model = $this -> model("SignModel");
        $data = $model -> GetApplyNum($aId);
        $this->view("Ajax/joinPeople",$data);
    }
    }?>