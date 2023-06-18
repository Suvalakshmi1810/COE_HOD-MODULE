<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple HTML Form</title>
    <link rel="stylesheet" href="style.css">
    <script src="form.js"></script>
</head>


<body>
   

<form name="Form" method="get" action="displaysample.php" onsubmit="return validateForm()" >
    <h2>Details Form</h2>

    <div class="box">
        <label>Batch</label>
        <select name="batch"   onchange="no_of_sems()"id="batch">
            <!-- <option>2020</option>
            <option>2021</option>
            <option>2022</option>
            <option>2023</option> -->
        </select> 
        <div class="error" id="countryErr"></div>
    </div>

    <div class="box">
        <label>Program</label>
        <select name="program"   onchange="specialization()"id="program">
            <option>Btech</option>
            <option>Mtech</option>
        </select> 
        <div class="error" id="countryErr"></div>
    </div>

    <div class="box">
        <label>Department</label>
        <select name="country" id="country">
            <option>CSE</option>
            <option>ECE</option>
            <option>IT</option>
            <option>EEE</option>
            <option>CE</option>
            <option>MECH</option>
            <option>MET</option>
            <option>CIVIL</option>
            <option>E&I</option>
        </select> 
        <div class="error" id="countryErr"></div>
    </div>

    <div class="box">
        <label>Semester</label>
        <select name="sem" id="sem">
            <option>1</option>
            <option>2</option>
        </select> 
        <div class="error" id="countryErr"></div>
    </div>

    <div id="m1" hidden="true" class="box">
        <label>Specialization</label>
        <input type="text" name="mobile"  id="mobile">
        <div class="error" id="mobileErr"></div>
    </div>
   
          
    <div class="box">
    <a class="a1"href="displaysample.php">
  <button class="button1" style="   font-size: 110%;
    font-weight: 100;
    background: #ef6e58;
    border-color: #ef6e58;
    box-shadow: 0 3px 0 #bd432e;
    color: #fff;
    margin-top: 10px;
    cursor: pointer;
    text-decoration: none;
    width: 100%;
    height:40px;">Details</button>
</a>
    </div>
</form>



<script>

   

    // for hiding and displaying specialization tag
    function specialization()  
    {
        var text = document.getElementById("program").selectedOptions[0].value;
        // document.getElementById("letsee").innerText=text;
        if(text=='Mtech')
            document.getElementById("m1").hidden=false;
        else
            document.getElementById("m1").hidden=true;
    }


    window.onload = function() {
        on_start();
    };

    function on_start()
    {


        //to make dropdownlist null
        var batch = document.getElementById("batch");
        batch.innerHTML=null;  
        // 
        
        
        // document.getElementById("letsee").innerText=text.selectedOptions[0].value;

        var date = new Date();
        var year = date.getFullYear();
        var j=0;

        for(var i=year-4; i<=year; i++)
        {
            var option = document.createElement('option');
            option.value = option.innerHTML = i;
            if(i===year) 
                option.selected = true;
            batch.appendChild(option);
        
        }


    }

    function no_of_sems()
    {
        
        //FOR SEM MAKING DROUP DOWN NULL EVERY TIME WHEN WE CHOOSE BATCH
        var sem = document.getElementById("sem");
        sem.innerHTML=null;  


        var date = new Date();
        var year = date.getFullYear();
        var batch_selected = document.getElementById("batch").selectedOptions[0].value;
        var semester = document.getElementById("sem");
        var study_year = (year-batch_selected);
        var sem = study_year * 2 + 2;

        if(sem>8)
            sem=8;
        
        for(var j=1; j<=sem; j++)
        {
            var option = document.createElement('option');
            option.value = option.innerHTML = j;
            semester.appendChild(option);
        }

    }

</script>


</body>
</html>