<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table
    {
        width: 100%;
    }
    table,th,td{
  border-collapse: collapse; 
  
  border: 1px solid black;
}

th, td {
  text-align: left;
  padding: 8px;
}

th {
  background-color: #ddd;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

a {
  text-decoration: none;
  color: #333;
}
.btn{
    margin-bottom: 30px;
    margin-top: 20px;
    margin-left: 65%;
}
.btn1,.btn2,.btn3
{
    font-size: 110%;
    font-weight: 100;
    background: #ef6e58;
    border-color: #ef6e58;
    box-shadow: 0 3px 0 #bd432e;
    color: #fff;
   
    cursor: pointer;
    text-decoration: none;
    width: 80px;
    height:35px;
}
.btn1{
    margin-top: 11px;
}
.btn3
{
    width: 140px; 
    margin-left: 17px;
}
.btn2
{
    width: 180px; 
    margin-left: 17px;
}

</style>
<body>
<?php
include 'DBController.php';

$conn = new DBController();

$productResult = $conn->runQuery("SELECT * FROM `ptudbtab_nominalroll`;");
$batch = $_GET['batch'];
$prg = $_GET['program'];
$dept = $_GET['dept'];
$sem = $_GET['sem'];


?>
 <div class="btn">
        
        <button class="btn1" onclick="window.print()" value="print">Print</button>
        <a href="pic_download.php?batch=<?php echo $batch?>&program=<?php echo $prg?>&dept=<?php echo $dept?>&sem=<?php echo $sem?>">
                    <button class="btn2">Download images</button>
        </a>
        <a href="Excel_down.php"><button class="btn3">Export to excel</button></a>
    </div>
<div id="table-container">
    <table id="tab">
        <thead>
            <tr>
                <th>Register Number</th>
                <th>Student Name</th>
                <th>Department</th>
                <th>Programme</th>
                <!-- <th width="20%">Average Rating</th> -->
            </tr>
        </thead>
        <tbody>
 
            <?php
            $query = $conn->runQuery("SELECT * FROM `ptudbtab_nominalroll`;");

            if (! empty($productResult)) {
                foreach ($productResult as $key => $value) {
                    ?>
                 
                     <tr>
                <td><?php echo $productResult[$key]["StudentId"]; ?></td>
                <td><?php echo $productResult[$key]["StudentName"]; ?></td>
                <td><?php echo $productResult[$key]["Department"]; ?></td>
                <td><?php echo $productResult[$key]["Programme"]; ?></td>

            </tr>
             <?php
                }
            }
            ?>
      </tbody>
    </table>


   

</div>
</body>
</html>