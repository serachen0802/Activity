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
    <script type="text/javascript" src="javascript/Index.js"></script>
</head>

<body>
    <form method="post" action="https://lab-sera-chen.c9users.io/Activity/Home/insert">
        <div class="banner"></div>
        <div class="header">
            <div class="container">
                <div class="logo">
                    <a href="https://lab-sera-chen.c9users.io/Activity/Home/index">報名系統後台</a>
                </div>
                <div class="menu">
                    <!--<ul>-->
                    <!--    <li><a class="active">查詢及訂票</a></li>-->
                    <!--    <li><a href="https://lab-sera-chen.c9users.io/cybusEasy/Search/search">我的車票</a></li>-->
                    <!--</ul>-->
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!---------------------------------------------新增活動-------------------------------------------------->
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="SearchBox">
                        <h1>新增活動</h1>
                        <div class="SearchForm">

                            <div class="FormOne">
                                <div class="FormLeft">
                                    <p>活動名稱</p>
                                </div>
                                <div class="FormRight">
                                    <input type="text" name="name" required="required">
                                </div>
                            </div>

                            <div class="FormOne">
                                <div class="FormLeft">
                                    <p>活動日期</p>
                                </div>
                                <div class="FormRight">
                                    <input name='a_date'  type="text" class="datenowpicker" required="required" />
                                </div>
                            </div>
                                <div class="FormOne">
                                <div class="FormLeft">
                                    <p>開始報名日期</p>
                                </div>
                                <div class="FormRight">
                                     <input name='startdate'  type="text" class="datenowpicker" required="required" />
                                </div>
                                </div>
                                
                                <div class="FormOne">
                                <div class="FormLeft">
                                    <p>結束報名日期</p>
                                </div>
                                <div class="FormRight">
                                     <input name='enddate'  type="text" class="datenowpicker" required="required" />
                                </div>
                                </div>
                                
                                <div class="FormOne">
                                <div class="FormLeft">
                                    <p>可參加人數</p>
                                </div>
                                <div class="FormRight">
                                    <input type="text" name='people' required="required" />
                                </div>
                                </div>
                                
                                <div class="FormOne">
                                <div class="FormLeft">
                                    <p>可否攜伴</p>
                                </div>
                                <div class="FormRight">
                                    <select class="easyui-combobox textbox" name="type" style="width:70px;" required="required" >
                                        <option value="可">可</option>
                                        <option value="否">否</option>
                                    </select> 
                                </div>
                                </div>
                                
                            </div>
                            <div class="FormOneBtn">
                                
                                <div class="FormBtn">
                                    <input type="submit" value="建立活動" id="btnok" name="btnok" />
                                </div>
                                <div class="FormBtn">
                                    <input type="reset" name="reset" value="清除重填" />
                                </div>
                                <div class="FormBtn">
                                    <input type="button" id="clickShow" name="cho" onclick="show()" value="選擇可參加人員" />
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-------------------------選擇參加人員------------------------>
            <div id="showId" style="display:none;">
            <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="SearchBox">
                        <h1>新增可參加人員</h1>
                        <div class="SearchForm4" >
                       
                            <div id="newMember" class="newMember" style="display: none">
    	                      <span id="deleteIcon" class="icon-delete"></span>
    	                      <span>編號:</span>
    	                      <input type="text" name="num[]">
    	                      <span>姓名:</span>
    	                      <input type="text" name="member[]">
    	                    </div>
                                
                            </div>
                            
                            <div class="FormOneBtn">
                                
                                <div class="FormBtn">
                                    <input id="btn_add" type="button" value="新增"  />
                                </div>
                                <div class="FormBtn">
                                    <input type="reset" name="reset" value="清除重填" />
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
                
                                
                <!---------------------------------------------所有活動-------------------------------------------------->
                <!--<div class="col-md-12 col-sm-12 col-xs-12">-->
                    <div class="SearchBox2">
                        <h1>所有活動</h1>
                    <div class="block">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>活動編號</th>
                                    <th>活動名稱</th>
                                    <th>活動日期</th>
                                    <th>開始報名日期</th>
                                    <th>結束報名日期</th>
                                    <th>已參加人數</th>
                                    <th>可參加人數</th>
                                    <th>可否攜伴</th>
                                    <th>報名網址</th>
                                    <th>創建時間</th>

                                </tr>
                            </thead>
                            <tbody>
                                
                            <?php 
                                
                                foreach($data["arr"] as $key => $value)
                                { 
                                ?>
                                <tr data-id="<?php echo $value['aId'];?>">
                                    <td><?php echo $value['aId'];?></td>
                                    <td><?php echo $value['name'];?></td>
                                    <td><?php echo date("Y/m/d H:i", strtotime($value['date']));?></td>
                                    <td><?php echo date("Y/m/d H:i", strtotime($value['startdate']));?></td>
                                    <td><?php echo date("Y/m/d H:i", strtotime($value['enddate']));?></td>
                                    
                                    <td><div class="total"></div></td>
                                    
                                    <td><?php echo $value['people'];?></td>
                                    <td><?php echo $value['type'];?></td>
                                    <td><a href="https://lab-sera-chen.c9users.io/Activity/Home/url/<?php echo $value['url'];?>"><?php echo $value['url'];?></a></td>
                                    <td><?php echo date("Y/m/d H:i", strtotime($value['createTime']));?></td>
                                    <td>
                           
                                    <td>
                                           <?php echo '<button type="button" class="btn" onclick="SubmitForm()">編輯</button>';?>  
                                           </td>
                                            <td>
                                            <?php echo '<button type="button" class="btn" onclick="SubmitForm()">刪除</button>';  ?>
                                             </td>
                                            <td>
                                            
                                            
                                            <button type="button" class="btn" onclick="location.href = '/Activity/Home/checkbox/<?php echo $value['aId'];?>'">限制參加人員</button>
                                             </td>

                                 
                                    </td>
                                </tr>
                                <?php }
                                //}?>

                            </tbody>
                        </table>
                    </div>
        </div>
        </div>
    </form>
</body>

</html>