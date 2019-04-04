<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style>
    #content {
        width: 450px;
        margin: 0 auto;
        padding: 0px 20px 20px;
        background: white;
        border: 2px solid navy;
    }
    h1 {
        color: navy;
    }
    label {
        width: 10em;
        padding-right: 1em;
        float: left;
    }
    #data input {
        float: left;
        width: 15em;
        margin-bottom: .5em;
    }
    #buttons input {
        float: left;
        margin-bottom: .5em;
    }
    br {
        clear: left;
    }
    .error {
        color: red;
    }
</style>
<head>
    <title>Future Value Calculator</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $investment = $_POST["investment"];
    $rate = $_POST["rate"];
    $years = $_POST["years"];
    $future_value = $investment + (($investment * $rate * 0.01)*$years);
}
?>
<div id="content">
    <h1>Future Value Calculator</h1>

    <label>Investment Amount: </label>
    <span><?php echo "$$investment" ?></span> <br/>

    <label>Yearly Interest Rate: </label>
    <span><?php echo "$rate%" ?></span> <br/>

    <label>Number of Years: </label>
    <span><?php echo "$years" ?></span> <br/>


    <label>Future Value: </label>
    <span><?php echo "$$future_value" ?></span> <br/>
</div>
</div>
</body>
</html>