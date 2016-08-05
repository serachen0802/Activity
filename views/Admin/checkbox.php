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
    <script type="text/javascript" src="javascript/Sign.js"></script>
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

        <script type="text/javascript">
            $(function() {
                $("#All").change(function(){
                    if ($(this).prop("checked") == true) {
                        $("#checkboxDiv :checkbox").each(function(){
                            $(this).prop("checked", true);
                        });
                    } else {
                        $("#checkboxDiv :checkbox").each(function(){
                            $(this).prop("checked", false);
                        });
                    }
                    
                });

            });
        </script>

        <form>
            <input type="checkbox" id="All" class= name="All">全選
            <div id="checkboxDiv">
                <input type="checkbox" value="1" name="1">1
                <input type="checkbox" value="2" name="2">2
                <input type="checkbox" value="3" name="3">3
                <input type="checkbox" value="4" name="4">4
            </div>
        </form>
      
	</body> 
	</html>  