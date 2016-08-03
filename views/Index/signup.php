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
                    <a href="https://lab-sera-chen.c9users.io/Activity/Home/index"><font class="title">報名系統後台</font></a>
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
        <?php 
        // var_dump($data);
        
        echo $data['aId'];
       
        ?>
       
    </form>
</body>