<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>活動報名</title>

	<link id="easyuiTheme" rel="stylesheet" type="text/css" href="/Activity/public/jquery-easyui/themes/{$_COOKIE.easyuiThemeName|default="default"}/easyui.css">
    <link rel="stylesheet" type="text/css" href="/Activity/public/jquery-easyui/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="/Activity/public/jquery-easyui/themes/icon.css">
    <script type="text/javascript" src="/Activity/public/jquery-easyui/jquery.min.js"></script>
    <script type="text/javascript" src="/Activity/public/jquery-easyui/jquery.easyui.min.js"></script>
	
	<style type="text/css">
		#fm{
			margin:0;
			padding:10px 30px;
		}
		.ftitle{
			font-size:14px;
			font-weight:bold;
			color:#666;
			padding:5px 0;
			margin-bottom:10px;
			border-bottom:1px solid #ccc;
		}
		.fitem{
			margin-bottom:5px;
		}
		.fitem label{
			display:inline-block;
			width:80px;
		}
	</style>
	
	<script type="text/javascript">
		
			// echo "post_prg = '$LoginPath';";
			// echo "primay_key = '$dal->PrimaryKey';";
		
		var url;
		
		// $(function(){
		// 	// furl = post_prg+ '?type=data';
		// 	// $('#myDG').datagrid({
		// 		// url:furl
		// 	});
		// });

		function newActivity(){
			$('#dlg').dialog('open').dialog('setTitle','New Activity');
			$('#fm').form('clear');
			url ='../Home/insert';
			// $('form').submit;
		}
// 		function editUser(){
// 			var row = $('#myDG').datagrid('getSelected');
// 			if (row){
				
// 				if(typeof(row.UNum) !== 'undefined')
// 				{
// 					$('#dlg').dialog('open').dialog('setTitle','Edit User');
// 					$('#fm').form('load',row);
// 					url = post_prg + '?type=mod&id='+row.UNum;
// 				}else{
// 					alert("undefined");
// 				}
// 			}
// 		}
		function saveUser(){
			$('#fm').form('submit',{
				url: url,
				onSubmit: function(){
					alert('sub :'+ url);
					return $(this).form('validate');
				},
				success: function(result){
					var result = eval('('+result+')');
					alert(result.success);
					if (result.success){
						$('#dlg').dialog('close');		// close the dialog
						$('#myDG').datagrid('reload');	// reload the user data
					} else {
						$.messager.show({
							title: 'Error',
							msg: result.msg
						});
					}
				}
			});
		}
// 		function removeUser(){
// 			var row = $('#myDG').datagrid('getSelected');
// 			if (row){
// 				$.messager.confirm('Confirm','Are you sure you want to remove this user?',function(r){
// 					if (r){
// 						//alert(row.UNum);
// 						$.post(post_prg, {type:'del', id:row.UNum}, function(result){
// 							if (result.success){
// 								$('#myDG').datagrid('reload');	// reload the user data
// 							} else {
// 								$.messager.show({	// show error message
// 									title: 'Error',
// 									msg: result.msg
// 								});
// 							}
// 						},'publicon');
// 					}
// 				});
// 			}
// 		}
    $(document).ready(function(){
          $("#date,#startDate,#endDate").datebox({
            formatter:function(date){
              var y=date.getFullYear();
              var m=date.getMonth()+1;
              var d=date.getDate();
              return y+'-'+(m<10?('0'+m):m)+'-'+(d<10?('0'+d):d);        
              },
            parser:function(s){
              var t=Date.parse(s);
              if (!isNaN(t)) {return new Date(t);}
              else {return new Date();}
              }      
            });
             var c=$("#date").datebox("calendar");
             var a=$("#startDate").datebox("calendar");
             var b=$("#endDate").datebox("calendar");
          c.calendar({
            validator:function(date){
                        var now=new Date();
                        var Y=now.getFullYear();
                        var M=now.getMonth();
                        var D=now.getDate();
                        var start=new Date(Y, M, D);
                        
                        var selectable=date >= start;
                        return selectable;
                        }     
            });
            b.calendar({
            validator:function(date){
                        var now=new Date();
                        var Y=now.getFullYear();
                        var M=now.getMonth();
                        var D=now.getDate();
                        var start=new Date(Y, M, D);
                        
                        var selectable=date >= start;
                        return selectable;
                        }     
            });
            a.calendar({
            validator:function(date){
                        var now=new Date();
                        var Y=now.getFullYear();
                        var M=now.getMonth();
                        var D=now.getDate();
                        var start=new Date(Y, M, D);
                        
                        var selectable=date >= start;
                        return selectable;
                        }     
            });
          });
          
           function clf(){
            $('#shfm').form('clear');
             $('#dg').datagrid('load',{
             });
        }
	</script>
</head>
<body>
	<h2></h2>
	
	<table id="myDG" class="easyui-datagrid" style="width:900px;height:450px"
			toolbar="#toolbar"
			title="活動管理" iconCls="" pagination="true" 
			toolbar="#toolbar" rownumbers="true" fitColumns="true" singleSelect="true">
		<thead>
			<tr>
			    <th field="id" width="100" align="center">活動ID</th>
				<th field="name" width="100" align="center">活動名稱</th>
				<th field="date" width="120" align="center">活動日期</th>
				<th field="startDate" width="120" align="center">報名開始日期</th>
				<th field="endDate" width="120" align="center">報名結束日期</th>
				<th field="people" width="80" align="center">限制參加人數</th>
				<th field="type" width="80" align="center">是否可攜伴</th>
			</tr>
		</thead>
	</table>
	<div id="toolbar">
		<a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newActivity()">新增活動</a>
		<!--<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editUser()">Edit User</a>-->
		<!--<a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="removeUser()">Remove User</a>-->
		<!--<a href="#" class="easyui-linkbutton" iconCls="icon-search" plain="true" onclick="searchopen()">查詢</a>-->
	</div>
	
	<div id="dlg" class="easyui-dialog" style="width:400px;height:350px;padding:10px 20px"
			closed="true" buttons="#dlg-buttons">
		<div class="ftitle">新增活動</div>
		<form id="fm" method="post" novalidate action="https://lab-sera-chen.c9users.io/Activity/Home/insert">
			<div class="fitem">
				<label>活動名稱:</label>
				<input name="name" class="easyui-validatebox" required="true">
			</div>
			<div class="fitem">
				<label>活動日期:</label>
				<input name="date"  class="easyui-datebox"  id="date">
			</div>
			<div class="fitem">
				<label>報名開始日期:</label>
				<input name="startDate"  class="easyui-datebox" id="startDate">
			</div>
			<div class="fitem">
				<label>報名結束日期:</label>
				<input name="endDate" class="easyui-datebox"  id="endDate">
			</div>
			<div class="fitem">
				<label>限制參加人數:</label>
				<input name="people" class="easyui-validatebox" >
			</div>
			<div class="fitem">
				 <tr class="row">
        			<td class="row_title" ><label>可否攜伴：</label></td>
        			<td class="row_content">
                        <select class="easyui-combobox textbox" name="type" style="width:70px;" >
                            <option value="可">可</option>
                            <option value="否">否</option>
                        </select>                    
					</td>
        		</tr>
			</div>
		</form>
	</div>
	<div id="dlg-buttons">
		<a href="#" class="easyui-linkbutton" iconCls="icon-ok" onclick="saveUser()">儲存</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')">取消</a>
	</div>
	
	
	<div id="div_eastpanal" data-options="region:'east',title:'搜尋條件',split:true,collapsed:true" style="width:340px;">
    	<div style="padding:10px 20px">
        	<div style="margin-bottom:10px;">
	        	<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-search" onclick="searchm()">搜尋</a>
	        	<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="clf()">清除</a>
	    	</div>
	    	<form id="shfm" method="post" novalidate　style="padding-top:5px;">
	        <table>
                <tr>						            
                    <td class="row_title"><label>活動編號：</label></td>
                    <td class="row_content">						           
                        <input name="sid" style="width:175px;" class="easyui-validatebox textbox">
                    </td>
                </tr> 
                <tr>						            
                    <td class="row_title"><label>活動名稱：</label></td>
                    <td class="row_content">						           
                        <input name="time" style="width:175px;" class="easyui-validatebox textbox">
                    </td>
                </tr>
                <tr>						            
                    <td class="row_title"><label>活動日期：</label></td>
                    <td class="row_content">						           
                        <input name="date" style="width:175px;" class="easyui-datebox" id="datebox2">
                    </td>
                </tr>  
                
                
        	</table>
	    	</form>
	</div>
</div>

</body>
</html>