<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    include 'particle/_dbconn.php';
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
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Improve Accuracy!</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }else{
        header('location:expert/profile.php');
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
    h1{
        border:solid blue 2px; 
    }
    .form{
        margin-left: 300px;
        margin-right: 300px;
        border: solid black 2px;
        border-radius: 10px;
    }
    h1{
        margin-left: 420px;
        margin-right: 410px;
        padding:10px;
        border-radius: 20px;
        background-color: cadetblue;
    }
    p{
        margin-left: 10px;
    }
    .btn{
        margin-left: 550px;
        margin-top: 20px;

        margin-bottom: 20px;
    }
    </style>






</head>
<body>
    <div class="header">
    <h1>Expert Validation Form</h1>
</div>
    <form action="expert_valiation_form.php" method="POST">
        <div class="form" id="fem">
        <p>1. Free cash flow (FCF) of a company can be calculated as</p>
        <input type="radio" name="q1o" value="ans">The company with a lower PEG ratio is better
        <input type="radio" name="q1o" value="q1option2">The company with a higher PEG ratio is better
        <!-- <input type="radio" name="q1o" value="q1option3">ans1
        <input type="radio" name="q1o" value="q1option4">ans1 -->

        <p>2. While evaluating the valuation of two companies using the PEG ratio (which is calculated by dividing PE ratio with percentage EPS growth rate)</p>
        <input type="radio" name="q2o" value="ans">Cash flow from operating activities – Capital expenditures (Capex)
        <input type="radio" name="q2o" value="q2option2">Net Income - Change in net working capital
        <input type="radio" name="q2o" value="q2option3">Net Income - Capital expenditures(Capex)
        <input type="radio" name="q2o" value="q2option4">None of these

        <p>3. Those kinds of investors who are emotional, willing to take high risks, greedy and biggest losers in the stock market are also termed as one of the following trading animal...</p>
        <input type="radio" name="q3o" value="ans">Pigs
        <input type="radio" name="q3o" value="q3option2">Ostrich
        <input type="radio" name="q3o" value="q3option3">Turtle
        <input type="radio" name="q3o" value="q3option4">Rabbits

        <p>4. Which of the following is a strategy to avoid hostile takeover?</p>
        <input type="radio" name="q4o" value="ans">Poison Pill
        <input type="radio" name="q4o" value="q4option2">Golden Parachute
        <input type="radio" name="q4o" value="q4option3">White Knite
        <input type="radio" name="q4o" value="q4option4">All of these

        <p>5. Which of the following is 'NOT' a profitability ratio?</p>
        <input type="radio" name="q5o" value="ans">PE ratio
        <input type="radio" name="q5o" value="q5option2">Profit Margin
        <input type="radio" name="q5o" value="q5option3">Return on Equity
        <input type="radio" name="q5o" value="q5option4">Return on assets

        <p>6. Which of the following can be considered as an economic 'MOAT' for a company?</p>
        <input type="radio" name="q6o" value="ans">Big Brand Value
        <input type="radio" name="q6o" value="q6option2">Productive Advantages
        <input type="radio" name="q6o" value="q6option3">Business Monopoly
        <input type="radio" name="q6o" value="q6option4">All of these

        <p>7. If two seperate entities combine together to form a joint organization, it is called</p>
        <input type="radio" name="q7o" value="ans">Merger
        <input type="radio" name="q7o" value="q7option2">Takeover
        <input type="radio" name="q7o" value="q7option3">Acquisition
        <!-- <input type="radio" name="q7o" value="q7option4">ans1 -->

        <p>8. When the promoters of a company take a secured loan against their shares, it is called...</p>
        <input type="radio" name="q8o" value="ans">Share buyback
        <input type="radio" name="q8o" value="q8option2">Pledging of shares
        <input type="radio" name="q8o" value="q8option3">Follow-on public offering
        <input type="radio" name="q8o" value="q8option4">Initial Public Offering

        <p>9. Can an individual apply in an IPO with multiple demat accouts in the name of same person?</p>
        <input type="radio" name="q9o" value="ans">Yes
        <input type="radio" name="q9o" value="q9option2">No
        <!-- <input type="radio" name="q9o" value="q9option3">ans1
        <input type="radio" name="q9o" value="q9option4">ans1 -->

        <p>10. How can an Indian invest in foreign shares like Apple, Google etc?</p>
        <input type="radio" name="q10o" value="ans">By opening a foreign  broker account
        <input type="radio" name="q10o" value="q10option2">Indians can not invest in foreign stocks.
        <input type="radio" name="q10o" value="q10option3">Either by opening an account with foreign broker account or Indian broker which has a tie-up with foreign broker
        <input type="radio" name="q10o" value="q10option4">By opening an account with Indian Broker which has a tie-up with foreign broker.

        
    </div>
    <button type="submit" class="btn">submit</button>

    </form>

</body>
</html>




















