function myFunction(){
    //reset
    document.getElementById("name").innerHTML="Name: ";
    document.getElementById("employeeno").innerHTML="Employee number: ";
    document.getElementById("address").innerHTML="Address: ";
    document.getElementById("birthday").innerHTML="Birthday: ";
    document.getElementById("age").innerHTML="Age: ";
    document.getElementById("birthplace").innerHTML="Birthplace: ";
    document.getElementById("contactno").innerHTML="Contact number: ";
    document.getElementById("emailadd").innerHTML="Email address: ";
}

function myFunction2(){
    //birthday
    var x=document.getElementById("month").value;
    //if else
    if(x ==="01" ||x ==="03" ||
    x ==="05" ||x ==="07" ||x ==="08"
    ||x ==="10" ||x ==="12"){
        //looping
        document.getElementById("day").innerHTML="<?php for($i=1; $i<=31; $i++){ echo '<option>' . $i . '</option>';}?>;"
    }
    else if(x ==="04" ||x ==="06" ||
    x ==="09" ||x ==="11"){
        //looping
        document.getElementById("day").innerHTML="<?php for($i=1; $i<=30; $i++){ echo '<option>' . $i . '</option>';}?>;"
    }
    else{
        //looping
        document.getElementById("day").innerHTML="<?php for($i=1; $i<=29; $i++){ echo '<option>'' . $i . '</option>';}?>;"
    }
}