<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">

    <style type = "text/css">
        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            color: black;
    font-family: 'Patua One', serif;

        }
        body{
            /* background-color:black; */
            color: black;
            background-image: url("https://img.freepik.com/free-vector/calculator-concept-illustration_114360-1239.jpg?w=740&t=st=1699022957~exp=1699023557~hmac=f27afe0739228540e6863b55b316ecbc5c8277f06d0f1682f2f85fab6656dc30");
            background-size:50% 100%;
            background-repeat: no-repeat;
            background-position-x: right;
            box-sizing: border-box;
            border-radius: 5px solid green;
            color: aliceblue;
        }
        .heading{
         margin: 20px;
        }
        .app-form{
            border-radius: 50%;
            background-color:#38d5b6;
            width: 600px;
            height: 500px;
            padding-left: 50px;
            display: flex;
            justify-content: space-around;
           align-items: center;

        }
        .select-style{
            margin-top: 30px;
            height: 200px;
            text-align: center;
            padding: 20px;
        }
.app-form-button{
    padding: 16px 16px;
    border-radius: 6px;
    outline: none;
    background-color:#f79486 ;
    font-size: 0.9rem;
        }

.php-style{
    width:600px;
    height:100px;
     border-radius: 6px solid black;
    background-color:#f79486;
    padding: 10px 12px;
    border: 2px solid black;
    border-style: outset;
    font-size: 1.1rem;
        }
 .app-form-control{
    width: 200px;
    height:40px;
    padding:10px;
    outline:none;
    border-radius: 2px solid grey;
    background-color:#f79486 ;
    border-radius: 30% 70% 30% 70% / 62% 69% 31% 38%;

        }
    </style>
</head>
<body>
    <h1 class="heading">Simple Calculator in PHP</h1>
    <div class="app-form">
    <form action="" method="POST">
    <div class="app-form-group" >
       Enter First Number:<input type="text" class="app-form-control" placeholder="enter your Number" name="num1">
    </div>
    <div class="app-form-group">
    Enter second Number:<input type="text" class ="app-form-control" placeholder="enter your Number" name="num2">
    </div>
    
    <div class="select-style">
        <select name="operation">
            <option value="add">Add</option>
            <option value="sub">Sub</option>
            <option value="mult">Multiply</option>
            <option value="div">Divide</option>
        </select>
    </div>
    <div>
        <input type="submit" value="calculate" name ="submit" class="app-form-button" >
    </div>
    </form>
    </div>
    <div class="app-form-group showdata">
         
        <p class ="php-style">
            <?php
            if (isset($_POST['submit'])) {
             $num1 = $_POST['num1']; 
             $num2 = $_POST['num2'];
            //  echo "{$num1} {$num2}";
            // echo 'the first No. is '.$num1.'the second No. is '.$num2;
            $Operation = $_POST['operation'];
            switch ($Operation) {
                case 'add': $sum = $num1 + $num2;
                  echo "The addtion of two number is ". $sum;
                    break;
                    case 'sub': $sub = $num1 - $num2;
                        echo "The subtraction of two number is ".$sub;
                          break;
                          case 'mult':$mul = $num1 * $num2;
                            echo "The multiplication of two number is " .$mul;
                              break;
                              case 'div':$div = $num1 / $num2;
                                echo "The division of two number is {$div}"  ;
                                  break;
                default:
                echo "invalid solution";
            }
            }
            ?>
        </p>
    </div>
</body>
</html>