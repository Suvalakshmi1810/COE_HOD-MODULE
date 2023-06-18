<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="student.css">


</head>

<body>


    <?php
      $servername = "localhost";
      $username = "root";
      $password ="";
      $database = "module";


      $stu_id = $_GET['reg'];
      
      $conn = mysqli_connect($servername,$username,$password, $database);
      if(!$conn)
      {
          die("sorry we failed to connect: ".mysqli_connect_error());
      }
      else{
          
       
          $sql = "SELECT * FROM `ptudbtab_nominalroll`WHERE StudentId='$stu_id';";

          // echo $batch." ".$prg." ".$dept." ".$sem." ";

          $result = mysqli_query($conn,$sql);
          $num = mysqli_num_rows($result);

          if($num==0)
          {
               ?>
               <p>no records available</p>

               <?php
          }
          else
          {
            

            while($row_nominal= mysqli_fetch_assoc($result))
            {
                $stu_id = $row_nominal['StudentId'];
                $sql_tem = "SELECT * FROM `ptudbtab_ugstudentmaster` WHERE StudentId='$stu_id';";
                $result_ug_master = mysqli_query($conn,$sql_tem);
                $row= mysqli_fetch_assoc($result_ug_master);

                //image
                $image_data = bin2hex(random_bytes(10));

                // Create a temp file
                $temp_file = tmpfile();
                
                // Write the hexadecimal string to the file
                fwrite($temp_file, $row['Photo']);
                
                // Get the path of the temp file
                $temp_file_path = stream_get_meta_data($temp_file)['uri'];
                
                // Display the image in an HTML img tag
                $photo = base64_encode(file_get_contents($temp_file_path));
                // echo "<img src=\"data:image/png;base64," . $photo. "\" />";
                
                // Close the temp file
                fclose($temp_file);

            ?>        

            <div class="container">

            <div class="cont">

                <div class="pic">
                    <img src="data:image/png;base64,<?php echo $photo?>"/>
                </div>
                <div class="in_cont">
                    
                    <div class="left">
                        <label for="std_id">Student ID</label>
                    </div>
                    
                    <div class="right">
                        <label name="std_id">: <?php echo $row['StudentId'];?></label>
                    </div>

                </div>

                <div class="in_cont">
                    
                    <div class="left">
                        <label for="std_name">Student Name</label>
                    </div>
                    
                    <div class="right">
                        <label name="std_name">: <?php echo $row['StudentName']?></label>
                    </div>

                </div>
                <div class="in_cont">
                    
                    <div class="left">
                        <label for="dept">Department</label>
                    </div>
                    
                    <div class="right">
                        <label name="dept">: <?php echo $row['Department']?></label>
                    </div>

                </div>

                <div class="in_cont">
                    
                    <div class="left">
                        <label for="prgm">Programme</label>
                    </div>
                    
                    <div class="right">
                        <label name="prg">: <?php echo $row['Programme']?></label>
                    </div>

                </div>
                <div class="in_cont">
                    
                    <div class="left">
                        <label for="spe">Specialization</label>
                    </div>
                    
                    <div class="right">
                        <label name="spe">: <?php echo $row['Specialization']?></label>
                    </div>

                </div>
                <div class="in_cont">
                    
                    <div class="left">
                        <label for="dob">DOB</label>
                    </div>
                    
                    <div class="right">
                        <label name="dob">: <?php echo $row['DateOfBirth']?></label>
                    </div>

                </div>
                <div class="in_cont">
                    
                    <div class="left">
                        <label for="rlgn">Religion</label>
                    </div>
                    
                    <div class="right">
                        <label name="rlgn">: <?php echo $row['Religion']?></label>
                    </div>

                </div>

                <div class="in_cont">
                    
                    <div class="left">
                        <label for="ntn">Nationality</label>
                    </div>
                    
                    <div class="right">
                        <label name="ntn">: <?php echo $row['Nationality']?></label>
                    </div>

                </div>

                <div class="in_cont">
                    
                    <div class="left">
                        <label for="com">Community</label>
                    </div>
                    
                    <div class="right">
                        <label name="com">: <?php echo $row['Community']?></label>
                    </div>

                </div>
                <div class="in_cont">
                    
                    <div class="left">
                        <label for="gen">Gender</label>
                    </div>
                    
                    <div class="right">
                        <label name="gen">: <?php echo $row['Gender']?></label>
                    </div>

                </div>

                <div class="in_cont">
                    
                    <div class="left">
                        <label for="add">Address</label>
                    </div>
                    
                    <div class="right">
                        <label name="add">: <?php echo $row['CommunicationAddress']?></label>
                    </div>

                </div>
                <div class="btn">
                    <?php
                        }
                        ?>
                        <!-- <button class="print-button" onclick="window.print()" value="print"><span class="print-icon"></span></button></button> -->
                        <button class="print-button" onclick="window.print()" value="print">PRINT</button>
                </div>

            </div>     

            </div>
    <?php
            }
        }
    ?>
</body>

</html>
