function msg() {
    alert("Hello !");
}

//UserName validation
//For User name ( minLength 6 and maxLength 15 ) 
function userName() {
    var name=document.getElementById("user").value;
    if(name.length<6 || name.length>15) {  
        document.getElementById("uerror").innerHTML="<img src='assets/unchecked.gif'/>&nbsp;<small>Enter valid username</small>";  
        return false;  
    }else{
        document.getElementById("uerror").innerHTML=" <img src='assets/checked.gif'/>";  
        return true;
    } 
}

//Password Validation
//For Password ( atleast one Uppercase and Lowercase and Number and SpecialCharacter and minLength 6 ) 
function passwordValidate() {
    var password=document.getElementById("passwd").value;
    
    if(/[A-Z]/.test(password) && /[0-9]/.test(password) && /[a-z]/.test(password) && /[\W]/.test(password) && password.length>6){
        document.getElementById("perror").innerHTML=" <img src='assets/checked.gif'/>";  
        return true;
    }else{
        document.getElementById("perror").innerHTML="<img src='assets/unchecked.gif'/>&nbsp;<small>Enter valid password</small>";
        return false;
    }
}

//Email validation
function emailValidate() {
    var email=document.getElementById("email").value;
    var atpos = email.indexOf("@");
    var dotpos = email.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length) {
        document.getElementById("eerror").innerHTML="<img src='assets/unchecked.gif'/>&nbsp;<small>Enter valid email</small>";
        return false;
    }else{
        document.getElementById("eerror").innerHTML="<img src='assets/checked.gif'/>";
        return true;
    }
}

//First name Validation 
//Contains only Characters [A-Z] and [a-z] 
function firstName() {
    var firstName=document.getElementById("fname").value;
    //alert(firstName);
    if(/[0-9]/.test(firstName) || /[\W]/.test(firstName) || firstName.length<1){
        document.getElementById("ferror").innerHTML=" <img src='assets/unchecked.gif'/>&nbsp;<small>Enter Characters only</small>";  
        return false;
    }else{
        document.getElementById("ferror").innerHTML="<img src='assets/checked.gif'/>";
        return true;
    }
}
//Last name Validation 
//Contains only Characters [A-Z] and [a-z] 
function lastName() {
    var lastName=document.getElementById("lname").value;
    //alert(lastName);
    if(/[0-9]/.test(lastName) || /[\W]/.test(lastName) || lastName.length<1){
        document.getElementById("lerror").innerHTML=" <img src='assets/unchecked.gif'/>&nbsp;<small>Enter Characters only</small>";  
        return false;
    }else{
        document.getElementById("lerror").innerHTML="<img src='assets/checked.gif'/>";
        return true;
    }
}

//Phone number validation 
function phoneNumber(){
    var phone=document.getElementById("phone").value;
    if(phone.match(/\d{10}$/)){
        document.getElementById("pherror").innerHTML=" <img src='assets/checked.gif'/>";  
        return true;
    }else{
        document.getElementById("pherror").innerHTML=" <img src='assets/unchecked.gif'/>&nbsp;<small>Enter valid phone number</small>";  
        return false;
    }
}

//Registration page validation 
function passwordMatch(){
    var passw=document.getElementById("passwd").value;
    var cpass=document.getElementById("cpasswd").value;
    if(passw!=cpass){
		alert("Passwords Not Matched"); 
		cpass.focus();
        return false;
    }
    else{
    return true;
	}
}
function registerValidate() {
    var first=firstName();
    var last=lastName();
    var phoneNo=phoneNumber();
    var email=emailValidate();
    var password=passwordValidate();
    var pass=passwordMatch();
    if(first==false || last==false || phoneNo==false || email==false || password==false || pass==false){
        return false;
    }
    return true;
}

//Login page Validation
function loginValidate() {
    var user=userName();
    var password=passwordValidate();
    if(user && password){
        return true;
    }else{
        return false;
    }
}

//Forgot password page validation 
function forgotValidate(){
    var user=userName();
    var email=emailValidate();
    var pass=passwordMatch();
    if(userName()&&emailValidate()&&passwordMatch()) {
        
    }
    else{
    return false;
	}
}

