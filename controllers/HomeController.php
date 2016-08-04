<?php

class HomeController extends Controller {
    
    function index() {
        $show =  $this-> model("HomeModel");
        $data["arr"] = $show-> show();
        $this->view("Admin/Index",$data);
    }
    
    function insert(){
        $data['name'] = $_POST['name'];
        $data['date'] = $_POST['date'];
        $data['startdate'] = $_POST['startdate'];
        $data['enddate'] = $_POST['enddate'];
        $data['people'] = $_POST['people'];
        $data['type'] = $_POST['type'];
        
        $data['date'] = date("Y-m-d H:i:s");
        $data['rand']=strtotime($data['date']).substr(rand(10001,19999), -4);
        
        $insert =  $this-> model("HomeModel");
        $data = $insert-> insert($data);
        
    
        if ($data == true){
            $this->view("alert",'新增成功');
            header("refresh:0,url=index");
        }else{
            $this->view("alert",'新增失敗');
        }
        
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
        
    
    }
  
}

?>