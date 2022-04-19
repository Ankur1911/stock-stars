<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    include 'particle/_dbconn.php';
    if(isset($_POST["q1o"])&&isset($_POST["q2o"])&&isset($_POST["q3o"])&&isset($_POST["q4o"])&&isset($_POST["q5o"])&&isset($_POST["q6o"])&&isset($_POST["q7o"])&&isset($_POST["q8o"])&&isset($_POST["q9o"])&&isset($_POST["q10o"])){

    
    $ans[1]=$_POST['q1o'];
    $ans[2]=$_POST['q2o'];
    $ans[3]=$_POST['q3o'];
    $ans[4]=$_POST['q4o'];
    $ans[5]=$_POST['q5o'];
    $ans[6]=$_POST['q6o'];
    $ans[7]=$_POST['q7o'];
    $ans[8]=$_POST['q8o'];
    $ans[9]=$_POST['q9o'];
    $ans[10]=$_POST['q10o'];

    $cnt=0;
    for($i=1;$i<=10;$i++){
        if($ans[$i]=="ans"){
            $cnt++;
        }
    }

        if($cnt<7){
            echo  '<script>var txt;
            if (confirm("You are not eligible for Expert")) {
                txt = "no";
            } else {
                txt = "no";
            }
            if(txt=="no")
            {
                window.location.replace("index.php");
            }
            </script>';
            
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Improve Accuracy!</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            
        }else{
            header('location:expert/profile.php');
        }
    }else{
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong> Fill all Answers..!!</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
   
   
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
<style>
    body{
        background-color: #31BB9E;
    }
    .form{
        margin-left: 300px;
        margin-right: 300px;
        border: solid black 2px;
        border-radius: 10px;
        height: auto;
        
    }
    h1{
        margin-left: 350px;
        margin-right: 370px;
        padding:10px;
        padding-left: 30px;
        border-radius: 20px;
        background-color: cadetblue;
    }
    p{
        margin-left: 10px;
        background-color: white;
    }
    .btn{
        margin-left: 550px;
        margin-top: 20px;
        background-color:rgb(100, 216, 198);
        margin-bottom: 20px;
        border: solid rgb(210, 141, 141);
    }
    .btn:hover{
        background-color:rgb(15,129, 143) ;
        
    }
    input{
        margin-left: 10px;
    }
    .qustion{
        background-color: white;
    }
    </style>






</head>
<body>
    <div class="header">
    <h1>Expert Validation Form</h1>
</div>
    <form action="expert_validation_form.php" method="POST">
        <div class="form" id="fem">
            <div class="qustion">
        <p>1. While evaluating the valuation of two companies using the PEG ratio (which is calculated by dividing PE ratio with percentage EPS growth rate </p>
        <input type="radio" name="q1o" value="ans">The company with a lower PEG ratio is better<br>
        <input type="radio" name="q1o" value="q1option2">The company with a higher PEG ratio is better
        <!-- <input type="radio" name="q1o" value="q1option3">ans1
        <input type="radio" name="q1o" value="q1option4">ans1 -->
    </div>
        <br><br>
        <div class="qustion">
        <p>2. Free cash flow (FCF) of a company can be calculated as</p>
        <input type="radio" name="q2o" value="ans">Cash flow from operating activities – Capital expenditures (Capex)<br>
        <input type="radio" name="q2o" value="q2option2">Net Income - Change in net working capital<br>
        <input type="radio" name="q2o" value="q2option3">Net Income - Capital expenditures(Capex)<br>
        <input type="radio" name="q2o" value="q2option4">None of these<br>
    </div>
        <br><br>
        <div class="qustion">
        <p>3. Those kinds of investors who are emotional, willing to take high risks, greedy and biggest losers in the stock market are also termed as one of the following trading animal...</p>
        <input type="radio" name="q3o" value="ans">Pigs
        <input type="radio" name="q3o" value="q3option2">Ostrich
        <input type="radio" name="q3o" value="q3option3">Turtle
        <input type="radio" name="q3o" value="q3option4">Rabbits
        </div>
        <br><br>
        <div class="qustion">
        <p>4. Which of the following is a strategy to avoid hostile takeover?</p>
        <input type="radio" name="q4o" value="q4option1">Poison Pill
        <input type="radio" name="q4o" value="q4option2">Golden Parachute
        <input type="radio" name="q4o" value="q4option3">White Knite
        <input type="radio" name="q4o" value="ans">All of these
    </div>
        <br><br>
        <div class="qustion">
        <p>5. Which of the following is 'NOT' a profitability ratio?</p>
        <input type="radio" name="q5o" value="ans">PE ratio
        <input type="radio" name="q5o" value="q5option2">Profit Margin
        <input type="radio" name="q5o" value="q5option3">Return on Equity
        <input type="radio" name="q5o" value="q5option4">Return on assets
    </div>
        <br><br>
        <div class="qustion">
        <p>6. Which of the following can be considered as an economic 'MOAT' for a company?</p>
        <input type="radio" name="q6o" value="q6option1">Big Brand Value
        <input type="radio" name="q6o" value="q6option2">Productive Advantages
        <input type="radio" name="q6o" value="q6option3">Business Monopoly
        <input type="radio" name="q6o" value="ans">All of these
    </div>       
        <br><br>
        <div class="qustion">
        <p>7. If two seperate entities combine together to form a joint organization, it is called</p>
        <input type="radio" name="q7o" value="ans">Merger
        <input type="radio" name="q7o" value="q7option2">Takeover
        <input type="radio" name="q7o" value="q7option3">Acquisition
        <!-- <input type="radio" name="q7o" value="q7option4">ans1 -->
    </div>
        <br><br>
        <div class="qustion">
        <p>8. When the promoters of a company take a secured loan against their shares, it is called...</p>
        <input type="radio" name="q8o" value="q8option1">Share buyback
        <input type="radio" name="q8o" value="ans" style="margin-left: 85px;">Pledging of shares<br>
        <input type="radio" name="q8o" value="q8option3">Follow-on public offering
        <input type="radio" name="q8o" value="q8option4">Initial Public Offering
    </div>
        <br><br>
        <div class="qustion">
        <p>9. Can an individual apply in an IPO with multiple demat accouts in the name of same person?</p>
        <input type="radio" name="q9o" value="q9option1">Yes
        <input type="radio" name="q9o" value="ans">No
        <!-- <input type="radio" name="q9o" value="q9option3">ans1
        <input type="radio" name="q9o" value="q9option4">ans1 -->
    </div>
        <br><br>
        <div class="qustion">
        <p>10. How can an Indian invest in foreign shares like Apple, Google etc?</p>
        <input type="radio" name="q10o" value="q10option1">By opening a foreign  broker account<br>
        <input type="radio" name="q10o" value="q10option2">Indians can not invest in foreign stocks.<br>
        <input type="radio" name="q10o" value="ans">Either by opening an account with foreign broker account or Indian broker which has a tie-up with foreign broker<br>
        <input type="radio" name="q10o" value="q10option4">By opening an account with Indian Broker which has a tie-up with foreign broker.<br>
    </div>
        <br><br>
        
    </div>
    <button type="submit" class="btn">submit</button>

    </form>

</body>
</html>




















