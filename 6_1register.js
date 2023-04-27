function verifyPassword() 
{  
    let pw1 = document.getElementById("password").value;
    let pw2 = document.getElementById("confirm_password").value;

    //matching password and confrimation
    if(pw1 != pw2) {  
      document.getElementById("message2").innerHTML = "**Passwords do not match";  
      return false;  
    }  
}
function checkRegisterNo() 
{
    let reg_no = document.getElementById("register_number").value;
    if(reg_no.length != 8){
      document.getElementById("message3").innerHTML = "**Enter a valid register number";
      return false;
    }
}
//     //check empty password field
//     if(pw1 == "") {  
//        document.getElementById("message").innerHTML = "**Fill the password please!";  
//        return false;  
//     }  
     
//    //minimum password length validation  
//     if(pw1.length < 8) {  
//        document.getElementById("message").innerHTML = "**Password length must be atleast 8 characters";  
//        return false;  
//     }  
    
//   //maximum length of password validation  
//     if(pw1.length > 15) {  
//        document.getElementById("message").innerHTML = "**Password length must not exceed 15 characters";  
//        return false;  
//     } else {  
//        alert("Password is correct");
//     } 