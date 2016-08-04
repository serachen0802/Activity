<?php
class SignController extends Controller {
    
    public function insert($url){
        $data['mId'] = $_POST['mId'];
        $data['partner'] = $_POST['partner'];
        $data['aId'] = $_POST['aId'];
        $data['total'] = $_POST['partner'] +1;
        
        $insert =  $this-> model("SignModel");
        $data["act"] = $insert-> insert($data);

         if ($data == true){
            $this->view("alert",'報名成功');
            header("refresh:0,/Activity/Home/url/$url");
         }else{
            $this->view("alert",'報名失敗');
        }
        
        
    }
    }?>