<!DOCTYPE HTML>
<html>
<head>
    <base href="/Activity/public/" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>活動報名系統</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/build/jquery.datetimepicker.min.css" type="text/css" />
    <link rel="stylesheet" href="css/index.css" type="text/css" />
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/build/jquery.datetimepicker.full.min.js"></script>
    <!--<script type="text/javascript" src="javascript/Index.js"></script>-->
</head>

<body>
    <form method="post" action="https://lab-sera-chen.c9users.io/Activity/Sign/insert/<?php echo $data['url']?>">
        <div class="banner"></div>
        <div class="header">
            <div class="container">
                <div class="logo">
                    <!--<a href="https://lab-sera-chen.c9users.io/Activity/Home/index"><font class="title">報名系統前台</font></a>-->
                </div>
                <div class="menu">
                    
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
         <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="SearchBox">
                        <h1> <?php echo $data['name'];?></h1>
                        <div class="SearchForm">
                            
                            <div class="FormOne">
                                <div class="FormLeft">
                                    <p>活動日期 :</p>
                                </div>
                                <div class="FormRight">
                                    <?php  echo date("Y/m/d H:i", strtotime($data['date']));?>
                                    
                                </div>
                            </div>
                                <div class="FormOne">
                                <div class="FormLeft">
                                    <p>開始報名日期 :</p>
                                </div>
                                <div class="FormRight">
                                    <?php echo date("Y/m/d H:i", strtotime($data['startdate']));?>
                                    
                                </div>
                                </div>
                                
                                <div class="FormOne">
                                <div class="FormLeft">
                                    <p>結束報名日期 :</p>
                                </div>
                                <div class="FormRight">
                                    <?php echo  date("Y/m/d H:i", strtotime($data['enddate']));?>
                                    
                                </div>
                                </div>
                                
                                <div class="FormOne">
                                <div class="FormLeft">
                                    <p>可參加人數 :</p>
                                </div>
                                <div class="FormRight">
                                    <?php echo $data['people']; ?>
                                    
                                </div>
                                </div>
                                
                                <div class="FormOne">
                                <div class="FormLeft">
                                    <p>目前參加人數 :</p>
                                </div>
                                <div class="FormRight">
                                    <?php echo 2; ?>
                                    
                                </div>
                                </div>
                                
                                <div class="FormOne">
                                <div class="FormLeft">
                                    <p>可否攜伴</p>
                                </div>
                                <div class="FormRight">
                                    <?php echo $data['type'];?> 
                                </div>
                                </div>
                                
                                <div class="FormOne">
                                <div class="FormLeft">
                                    <p>員工編號</p>
                                </div>
                                <div class="FormRight">
                                    <input type="text" name="mId" required="required">
                                </div>
                            </div>
                                
                                
                                <!--可以攜伴才顯示下拉式選單選擇人數-->
                                <?php if($data['type']=="可"){?>
                                <div class="FormOne">
                                <div class="FormLeft">
                                    <p>攜伴人數</p>
                                </div>
                                <div class="FormRight">
                                    <select class="easyui-combobox textbox" name="partner" style="width:70px;" required="required" >
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select> 
                                </div>
                                </div>
                                <?php }?>
                                
                                <input type="hidden" name="aId" value="<?php echo $data['aId'];?>"/>
                            </div>
                            <div class="FormOneBtn">
                                <div class="FormBtn">
                                    <input type="submit" value="我要參加" id="btnok" name="btnok" />
                                </div>
                                <!--<div class="FormBtn">-->
                                <!--    <input type="reset" name="reset" value="清除重填" />-->
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                </div>
    
       
    </form>
</body>