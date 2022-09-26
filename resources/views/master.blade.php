<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .userinfo{
            border:1px solid black;
            width:35%;
            height:400px;
            margin-top:10%;
            margin-left:30%;
        }

        .fields{
            margin-top:20px;
            margin-left:20px;
        }

        .fields input{
            width:95%;
            height:25px;
            
        }

        /* serdetils */
        .userdetails{
            border:1px solid black;
            margin-top:10%;
            width:70%;
            margin-left:10%;
        }

        .userdetails th{
            width:200px;
            padding-bottom:20px;
        } 

        .userdetails td{
            width:200px;
            text-align:center;
            background-color: #ececec;
        } 



    </style>
</head>
<body>
    @yield('content');
</body>
</html>