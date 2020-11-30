
<!DOCTYPE html>

<html>
    <head>
        <meta charset = "utf-8">
            <title>Payroll System</title>
    </head>
    <style>.container {
  width: 200px;
  clear: both;
}

.container input {
  width: 100%;
  height:20px;
  clear: both;
}</style>

<body>
<body style='background-color:silver'>

<h1>
<?php session_start(); ?>
<?php  ini_set('date.timezone', 'Asia/Kuala_Lumpur'); echo(strftime("%D %H:%M")); ?></h1>

<center><h1>Payroll Management System</h1>
<br><h2>A sytem that will calculate your payment hihi</h2>
<div  class="container">
<form method="post" action="payrolldetails.php" >
  Employee's Name: <input required type="text" name="emp_name" >
  <br><br>
  Employee's Address: <input required type="text" name="emp_address">
  <br><br>
  Employee's  Phone No.: <input required type="text" name="emp_phone" >
  <br><br>
  Employee's ID : <input required type="number" name="emp_id" min = 1 max = 30 >
  <br><br>
  Position <input required type="text" name="emp_pos" >
  <br><br>
  </div>  
  Select Date : <input required type="date" id="work_date" name="work_date"> 
  <br><br>
  When do you enter : <input required type="time" id="entry_time" name="entry_time" >
  <br><br>
  When do you finish : <input required type="time" id="end_time" name="end_time">
  <br><br>
  <input type="submit" name="submit" value="Submit">
  <input type="reset" name="reset" value="Reset">
</form>
<br><br><br><br>

</body>

</html>


