function printError(Id, Msg) {
    document.getElementById(Id).innerHTML = Msg;
}
function validateForm() {

    var name = document.Form.name.value;
    var email = document.Form.email.value;
    var mobile = document.Form.mobile.value;
    var country = document.Form.country.value;
    
 

    var nameErr = emailErr = mobileErr = countryErr =  true;
    

    if(name == "") {
        printError("nameErr", "Please enter your Batch");
        var elem = document.getElementById("name");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
    } else {
       
      
            printError("nameErr", "");
            nameErr = false;
            var elem = document.getElementById("name");
            elem.classList.add("input-1");
            elem.classList.remove("input-2");

            
        }
    
    

    if(email == "") {
        printError("emailErr", "Please enter your Programme");
         var elem = document.getElementById("email");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
    } else {
        
     
            printError("emailErr", "");
            emailErr = false;
             var elem = document.getElementById("email");
            elem.classList.add("input-1");
            elem.classList.remove("input-2");

        }
    

    if(country == "Select") {
        printError("countryErr", "Please select your Department");
        var elem = document.getElementById("country");
            elem.classList.add("input-4");
            elem.classList.remove("input-3");
    } else {
        printError("countryErr", "");
        countryErr = false;
        var elem = document.getElementById("country");
            elem.classList.add("input-3");
            elem.classList.remove("input-4");
    }
    

    if(mobile == "") {
        printError("mobileErr", "Please enter your Specialization");
        var elem = document.getElementById("mobile");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
    } else {
      
        
            printError("mobileErr", "");
            mobileErr = false;
            var elem = document.getElementById("mobile");
            elem.classList.add("input-1");
            elem.classList.remove("input-2");
        }  
    if((nameErr || emailErr || mobileErr || countryErr) == true) {
       return false;
    } 
};