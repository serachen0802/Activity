<?php

class HomeController extends Controller {
    
    function index() {
        $show =  $this-> model("HomeModel");
        $data["arr"] = $show-> show();
        $this->view("Admin/Index",$data);
    }
    
    function insert(){
        $data['num']=$_POST['num'];
        $data['member']=$_POST['member'];
        
        //var_dump( $data['num']);
        // var_dump( $data['num']);

        $data['name'] = $_POST['name'];
        $data['a_date'] = $_POST['a_date'];
        $data['startdate'] = $_POST['startdate'];
        $data['enddate'] = $_POST['enddate'];
        $data['people'] = $_POST['people'];
        $data['type'] = $_POST['type'];
        
        $data['date'] = date("Y-m-d H:i:s");
        // // 2判斷這個亂數有沒有重複
        $data['rand']=strtotime($data['date']).substr(rand(10001,19999), -4);
        
        // $start = strtotime($data['startdate']);
        // $end =  strtotime($data['enddate']);
        // $now_a = strtotime($data['a_date']);
        // $now = strtotime(date("Y-m-d H:i:s"));
        
        // // 判斷結束報名時間要比較大
        // if($start > $end){
        //     $this->view("alert",'請輸入正確時間');
        //     header("refresh:0,url=index");
        // }
        // elseif($now_a < $now){
        //     $this->view("alert",'請輸入正確時間');
        //     header("refresh:0,url=index");
        // }else{
        // // //新增
            $insert =  $this-> model("HomeModel");
            $aId = $insert-> insert($data);
    
        //     if ($aId != ""){
        //         $this->view("alert",'新增成功');
        //         header("refresh:0,url=index");
        //     }else{
        //         $this->view("alert",'新增失敗');
        //     }
        // }
        $mem = $insert ->insertLimitm($data,$aId);
        echo $mem;
        
        
    }
    
    function countPeople(){
        $count = $this->model("HomeModel");
        $data = $count ->countPeople();
        $this->view("Ajax/joinPeople",$data);
        
    }
    
    function url($url){
        $sign =  $this-> model("HomeModel");
        $data = $sign-> signPage($url);
        $data['url']=$url;
        $this->view('Index/signup',$data);
        // $this->view('Ajax/joinPeople',$data);
    }
    
    function checkbox(){
    //     $model =  $this-> model("HomeModel");
    //     $data = $model-> checkbox();
        $this->view("Admin/checkbox");
        
    }
    
  
}

?>