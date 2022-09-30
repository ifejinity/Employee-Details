<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 2&3-Employee Details</title>
    <style>
        body{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        /* col */
        .container{
            position: relative;
            display: flex;
            flex-direction: row;
            width: 90%;
            margin: 0 auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 5px 1px;
            transition: 0.5s;
        }
        .result{
            width: 50%;
            border-left: solid black 1px;
            padding-left: 10px;
            position: relative;
            margin: 0 auto;
            transition: 0.5s;
        }
        .col1{
            display: flex;
            flex-direction: row;
            transition: 0.5s;
        }
        .col2{
            display: flex;
            flex-direction: row;
            transition: 0.5s;
        }
        .form{
            width: 50%;
            position: relative;
            margin: 0 auto;
            transition: 0.5s;
        }
        .birthday{
            position: relative;
            display: flex;
            flex-direction: row;
            width: 100%;
            transition: 0.5s;
        }
        .birthday select, .birthday input{
            padding:10px;
            margin: 10px;
        }
        .input input{
            padding: 10px;
            margin: 10px;
        }
        .button button{
            padding: 10px;
            margin: 10px;
            width: 100px;
        }
        @media screen and (max-width:1430px) {
            .col1{
                display: flex;
                flex-direction: column;
                transition: 0.5s;
            }
            .col2{
                display: flex;
                flex-direction: column;
                transition: 0.5s;
            }
            .birthday{
                display: flex;
                flex-direction: column;
                transition: 0.5s;
            }
        }
        @media screen and (max-width:720px) {
            .container{
                display: flex;
                flex-direction: column;
                transition: 0.5s;
                margin: 0 auto;
                width: 80%;
            }
            .result{
                border-left: none;
                border-top:solid black 1px;
                margin: 0;
                transition: 0.5s;
                width: auto;
            }
            .form{
                margin: 0;
                transition: 0.5s;
                width: auto;
            }
        }
    </style>
</head>
<body>
    <!-- info -->
    <?php
        ini_set('display_errors',0);
 
        if( isset( $_REQUEST['submit'] ))
        {
            $name=$_REQUEST['name'];
            $employeeno=$_REQUEST['employeeno'];
            $address=$_REQUEST['address'];
            //BIRTHDAY
            $month=$_REQUEST['month'];
            $day=$_REQUEST['day'];
            $year=$_REQUEST['year'];
            //AGE
            $dateOfBirth =($year . "-" . $month . "-" . $day);
            $today = date("Y-m-d");
            $diff = date_diff(date_create($dateOfBirth), date_create($today));
            $age = $diff->format('%y');

            $birthplace=$_REQUEST['birthplace'];
            $contactno=$_REQUEST['contactno'];
            $emailadd=$_REQUEST['emailadd'];
        }
    ?>
    <!-- form -->
    <div class="container">
        <form class="form">
            <h2>Employee Details</h2>
            <div class="input">
                <div class="col1">
                    <input type="text" class="name" name="name" placeholder="Name" required>
                    <input type="number" class="employeeno" name="employeeno" placeholder="Employee number" required>
                    <input type="text" class="address" name="address" placeholder="Address" required>
                </div>
                <p>Birthday</p>
                <div class="birthday">
                    <p>Month</p>
                    <select name="month" id="month" onchange="myFunction2()" required>
                        <option selected="select">Select</option>
                        <option value="01">January</option>
                        <option value="02">February</option>
                        <option value="03">March</option>
                        <option value="04">April</option>
                        <option value="05">May</option>
                        <option value="06">June</option>
                        <option value="07">July</option>
                        <option value="08">August</option>
                        <option value="09">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>
                    <p>Day</p>
                    <select name="day" id="day" required>
                        
                    </select>
                    <p>Year</p>
                    <input type="number" name="year" id="year" placeholder="Year" required>
                </div>
                <div class="col2">
                    <input type="text" name="birthplace" placeholder="Birth place" required>
                    <input type="number" name="contactno" placeholder="Contact number" required>
                    <input type="text" name="emailadd" placeholder="Email address" required>
                </div>
            </div>
            <div class="button">
                <button class="submit" type="submit" name="submit" value="Submit">Submit</button>
                <button type="button" class="reset" onclick="myFunction()">Reset</button>
            </div>
        </form>
        <div class="result">
            <p id="name">Name:  <?php echo $name;?></p>
            <p id="employeeno">Employee number: <?php echo $employeeno;?></p>
            <p id="address">Address: <?php echo $address;?></p>
            <p id="birthday"> Birthday: <?php echo $dateOfBirth;?></p>
            <p id="age"> Age: <?php echo $age;?></p>
            <p id="birthplace"> Birthplace: <?php echo $birthplace;?></p>
            <p id="contactno">Contact number: <?php echo $contactno;?></p>
            <p id="emailadd"> Email address: <?php echo $emailadd;?></p>
        </div>
    </div>
     <!-- reset function -->
     <script>
        function myFunction(){
            //reset
            document.getElementById("name").innerHTML="Name: ";
            document.getElementById("employeeno").innerHTML="Employee number: ";
            document.getElementById("address").innerHTML="Address: ";
            document.getElementById("birthday").innerHTML="Birthday: ";
            document.getElementById("age").innerHTML="Age: ";
            document.getElementById("birthplace").innerHTML="Birthplace: ";
            document.getElementById("contactno").innerHTML="Contact number: ";
            document.getElementById("emailadd").innerHTML="Email address: ";
        }

        function myFunction2(){
            //birthday
            var x=document.getElementById("month").value;
            //if else
            if(x ==="01" ||x ==="03" ||
            x ==="05" ||x ==="07" ||x ==="08"
            ||x ==="10" ||x ==="12"){
                //looping
                document.getElementById("day").innerHTML="<?php for($i=1; $i<=31; $i++){ echo "<option>" . $i . "</option>";}?>;"
            }
            else if(x ==="04" ||x ==="06" ||
            x ==="09" ||x ==="11"){
                //looping
                document.getElementById("day").innerHTML="<?php for($i=1; $i<=30; $i++){ echo "<option>" . $i . "</option>";}?>;"
            }
            else{
                //looping
                document.getElementById("day").innerHTML="<?php for($i=1; $i<=29; $i++){ echo "<option>" . $i . "</option>";}?>;"
            }
        }
    </script>
</body>
</html>