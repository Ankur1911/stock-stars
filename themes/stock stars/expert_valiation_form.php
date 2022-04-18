<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
    #btn{
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
    <form>
        <div class="form" id="fem">
        <p>1. Free cash flow (FCF) of a company can be calculated as</p>
        <input type="radio" name="q1o" value="q1option1">The company with a lower PEG ratio is better
        <input type="radio" name="q1o" value="q1option2">The company with a higher PEG ratio is better
        <!-- <input type="radio" name="q1o" value="q1option3">ans1
        <input type="radio" name="q1o" value="q1option4">ans1 -->

        <p>2. While evaluating the valuation of two companies using the PEG ratio (which is calculated by dividing PE ratio with percentage EPS growth rate)</p>
        <input type="radio" name="q2o" value="q2option1">Cash flow from operating activities – Capital expenditures (Capex)
        <input type="radio" name="q2o" value="q2option2">Net Income - Change in net working capital
        <input type="radio" name="q2o" value="q2option3">Net Income - Capital expenditures(Capex)
        <input type="radio" name="q2o" value="q2option4">None of these

        <p>3. Those kinds of investors who are emotional, willing to take high risks, greedy and biggest losers in the stock market are also termed as one of the following trading animal...</p>
        <input type="radio" name="q3o" value="q3option1">Pigs
        <input type="radio" name="q3o" value="q3option2">Ostrich
        <input type="radio" name="q3o" value="q3option3">Turtle
        <input type="radio" name="q3o" value="q3option4">Rabbits

        <p>4. Which of the following is a strategy to avoid hostile takeover?</p>
        <input type="radio" name="q4o" value="q4option1">Poison Pill
        <input type="radio" name="q4o" value="q4option2">Golden Parachute
        <input type="radio" name="q4o" value="q4option3">White Knite
        <input type="radio" name="q4o" value="q4option4">All of these

        <p>5. Which of the following is 'NOT' a profitability ratio?</p>
        <input type="radio" name="q5o" value="q5option1">PE ratio
        <input type="radio" name="q5o" value="q5option2">Profit Margin
        <input type="radio" name="q5o" value="q5option3">Return on Equity
        <input type="radio" name="q5o" value="q5option4">Return on assets

        <p>6. Which of the following can be considered as an economic 'MOAT' for a company?</p>
        <input type="radio" name="q6o" value="q6option1">Big Brand Value
        <input type="radio" name="q6o" value="q6option2">Productive Advantages
        <input type="radio" name="q6o" value="q6option3">Business Monopoly
        <input type="radio" name="q6o" value="q6option4">All of these

        <p>7. If two seperate entities combine together to form a joint organization, it is called</p>
        <input type="radio" name="q7o" value="q7option1">Merger
        <input type="radio" name="q7o" value="q7option2">Takeover
        <input type="radio" name="q7o" value="q7option3">Acquisition
        <!-- <input type="radio" name="q7o" value="q7option4">ans1 -->

        <p>8. When the promoters of a company take a secured loan against their shares, it is called...</p>
        <input type="radio" name="q8o" value="q8option1">Share buyback
        <input type="radio" name="q8o" value="q8option2">Pledging of shares
        <input type="radio" name="q8o" value="q8option3">Follow-on public offering
        <input type="radio" name="q8o" value="q8option4">Initial Public Offering

        <p>9. Can an individual apply in an IPO with multiple demat accouts in the name of same person?</p>
        <input type="radio" name="q9o" value="q9option1">Yes
        <input type="radio" name="q9o" value="q9option2">No
        <!-- <input type="radio" name="q9o" value="q9option3">ans1
        <input type="radio" name="q9o" value="q9option4">ans1 -->

        <p>10. How can an Indian invest in foreign shares like Apple, Google etc?</p>
        <input type="radio" name="q10o" value="q10option1">By opening a foreign  broker account
        <input type="radio" name="q10o" value="q10option2">Indians can not invest in foreign stocks.
        <input type="radio" name="q10o" value="q10option3">Either by opening an account with foreign broker account or Indian broker which has a tie-up with foreign broker
        <input type="radio" name="q10o" value="q10option4">By opening an account with Indian Broker which has a tie-up with foreign broker.

        
    </div>
    <input type="submit" name="submit" id="btn">
    </form>

</body>
</html>