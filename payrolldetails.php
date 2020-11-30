
<?php
include "payroll_lib.php";
session_start(); //start the PHP_session function 

if(isset($_SESSION['page_count']))
{
     $_SESSION['page_count'] += 1;
}
else
{
     $_SESSION['page_count'] = 1;
}
echo 'You are visitor number ' . $_SESSION['page_count'];
    echo"<br>";

    
$gaji = new Payment("Adib", 00000);
$gaji->setName($_POST['emp_name']);
$gaji->setID($_POST['emp_id']);
$gaji->setPhone($_POST['emp_phone']);
$gaji->setAddr($_POST['emp_address']);
$gaji->setWorkDate($_POST['work_date']);
$gaji->setPos($_POST['emp_pos']);
$gaji->setEntrTime($_POST['entry_time']);
$gaji->setEndTime($_POST['end_time']);


$null = "NULL";
for($i = 0; $i < 31; $i++){
    if(empty($_SESSION['tenten']))//declaration of multidimensional with size [20][10]
        $_SESSION['tenten'] = array_fill(0,31, array_fill(0,10,$null));

}
echo "<body style='background-color:silver'>";
echo "</br> ";
echo 'Employee Name : ' . $gaji->getName();
echo "</br> ";
echo 'Employee ID : ' . $gaji->getID();
echo "</br> ";
echo 'Employee Phone Number : ' . $gaji->getPhone();
echo "</br> ";
echo 'Employee Total Hours Work per Day : ' . $gaji->getHoursWork();//dapatkan massa kerja dalam sehari tu
echo "</br> ";  
echo 'Employee Total Payable Rate per Day : ' . $gaji->getPayPerDay();//gaji sehari
echo"<br>";
echo 'Date Working : ' . $gaji->getDay() . 'hb';
echo "<br>";
$count = $gaji->getDay();
echo $gaji->getWorkDate();
if(isset($_POST['submit']))
{
    $row = $gaji->getDay();
    for($i = 0; $i < 31; $i++)
    {
        

        for($j = 0 ; $j<10;$j++)
        {
            if($_SESSION['tenten'][$count][$j]=="NULL")
            {
                $_SESSION['tenten'][$count][0] = $gaji->getDay();
                $_SESSION['tenten'][$count][1] = $gaji->getID();
                $_SESSION['tenten'][$count][2] = $gaji->getName();
                $_SESSION['tenten'][$count][3] = $gaji->getAddr();
                $_SESSION['tenten'][$count][4] = $gaji->getHoursWork();
                $_SESSION['tenten'][$count][5] = $gaji->getWorkDate();
                $_SESSION['tenten'][$count][6] = $gaji->getEntrTime();
                $_SESSION['tenten'][$count][7] = $gaji->getEndTime();
                $_SESSION['tenten'][$count][8] = $gaji->getPayPerDay(); 
                $_SESSION['tenten'][$count][9] = $gaji->netSalary();
                
                
            }
            
        }
        
        }
        echo "<br>";
    echo "<br>";
}
else{
echo 'Tak jadi la ';
}
echo  "<center>----------------------------<h1>Your Details</h1>-----------------------------------";
echo "<br><br>";

if(isset($_POST['submit']))
{

    echo "<center><table border=1>
  <tr>
		<th>Day.&nbsp &nbsp &nbsp &nbsp</th>
		<th>Employee ID.&nbsp &nbsp&nbsp &nbsp</th>
		<th>Employee Name&nbsp &nbsp&nbsp &nbsp</th>
		<th>Address&nbsp &nbsp&nbsp &nbsp</th>
		<th>Hours Work.&nbsp &nbsp&nbsp &nbsp</th>
        <th>Date Work&nbsp &nbsp&nbsp &nbsp</th>
        <th>Entry Time.&nbsp &nbsp&nbsp &nbsp</th>
        <th>Time Out&nbsp &nbsp&nbsp &nbsp</th>
        <th>Gross Salary (RM) &nbsp &nbsp&nbsp &nbsp</th>
		<th>Net Salary (RM)&nbsp &nbsp&nbsp &nbsp</th>
	
    </tr>";

    $val = 0;
    $val2 = 0;

    for($i = 0; $i < 31; $i++){
    echo "<tr>";
    $val += doubleval($_SESSION['tenten'][$i][8]);
    $val2 += doubleval($_SESSION['tenten'][$i][9]);
    for($j = 0 ; $j<10;$j++)
    if($_SESSION['tenten'][$i][$j]!="NULL"){
        
        echo "<td>".$_SESSION['tenten'][$i][$j]."&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td";
        print"</tr>";

        
    }
    
}


}

echo "<tr><h2>Total Gross Salary: RM $val.00</h2><br></tr>";
echo "<h2>Total Net Salary: RM $val2</h2>";

?>
  
    