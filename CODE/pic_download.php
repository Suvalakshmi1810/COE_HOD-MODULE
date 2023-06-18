<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>    

        <?php
        
            $servername = "localhost";
            $username = "root";
            $password ="";
            $database = "module";


            //Attributes
            $batch = $_GET['batch'];
            $prg = $_GET['program'];
            $dept = $_GET['dept'];
            $sem = $_GET['sem'];
            
            $conn = mysqli_connect($servername,$username,$password, $database);
            if(!$conn)
            {
                die("sorry we failed to connect: ".mysqli_connect_error());
            }
            else
                echo "connection was successful <br>";

            echo "helel";
            
            //Get from for m   

            $sql = "SELECT * FROM `ptudbtab_nominalroll` WHERE Batch='$batch' AND Programme='$prg' AND Department = '$dept' AND Semester = '$sem';";

            // echo $batch." ".$prg." ".$dept." ".$sem." ";

            $result = mysqli_query($conn,$sql);
            $num = mysqli_num_rows($result);

            //FILE PATH
            $file_path = 'D:/'.$prg."_".$dept.$batch;
            
            if (!file_exists($file_path)) {
                // Create a new file or direcotry
                mkdir($file_path, 0777, true);
            }

            
            while($row= mysqli_fetch_assoc($result))
            {
                $stu_id = $row['StudentId'];

                //Getting full details of particular student from ug master 
                $sql_tem = "SELECT * FROM `ptudbtab_ugstudentmaster` WHERE StudentId='$stu_id';";
                $result_ug_master = mysqli_query($conn,$sql_tem);
                $row_ug_master = mysqli_fetch_assoc($result_ug_master);


                $fileName = $stu_id.".png";
                $fileNameWithPath = $file_path."/".$fileName;
                if(file_put_contents($fileNameWithPath, $row_ug_master['Photo'])){
                
                }
                else{
                echo "Failed to create file";
                }
                
            }

            echo "Photos are available at ".$file_path;
           
        // ?>

</body>
</html>