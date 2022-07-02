<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #sd{
            margin-left: 44%;
            color: red;
            text-shadow: 1px 1px 3px black;
        
        }

        #ds{
            margin-left: 43%;
            color: rgba(255, 0, 0, 0.644);
            text-shadow: 1px 1px 1px black;
        }
        .fg{
            /* background-color: red; */
            background-image: url(asss.jpeg);
            background-repeat: no-repeat;
            width: 100px;
            height: 500px;
        }
        .sdd{
            background-color: black;
        }
        .ss{
            color: green;
        }
        .as{
            color: green;
        }
        #b01{
            font-size: 20px;
            color: rgb(0, 183, 255);
        }
        #b02{
            font-size: 20px;
            color: rgb(0, 183, 255);
        }
    </style>
</head>
<body class="fg">

    <table class="sdd" border="1">&nbsp;
        <tr class="ss">
            <th><b id="b01">name</b></th>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <th><b id="b02">Email</b></th>
        
        </tr>
        
        @foreach ($users as $user)

        <tr class="as">
            <td>{{ $user->name }}</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;{{ $user->email }}</td>
        </tr>
            
        @endforeach

    </table>


    
    
</body>
</html>