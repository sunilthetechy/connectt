<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        #hari{
            width: 100%;
            border-color: rgb(71, 177, 204);
        }

    #kon{
        width: 100%;
        height: 86%;  
        margin-top: 9%;
    }

    label{
        margin-top: 1%;
    }

    h4{
        padding-top: 2%;
    }

    #body{
        background-color:white;
    }

    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body id="body">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="https://static.vecteezy.com/system/resources/previews/003/689/228/original/online-registration-or-sign-up-login-for-account-on-smartphone-app-user-interface-with-secure-password-mobile-application-for-ui-web-banner-access-cartoon-people-illustration-vector.jpg" alt="kon" id="kon">
            </div>

            <div class="col-sm-6">
                <div class="card mt-5 mb-5" id="hari">
                    <center>
                    <h4>SIGNUP HERE</h4>
                    </center>
                    <div class="card-body">
                        <form id="formpro">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Your Name</label>
                                <input type="email" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Enter Your name">
                                <span id="error"></span>
                                <label for="exampleInputEmail1">Your Id</label>
                                <input type="email" class="form-control" name="id" id="id num" aria-describedby="emailHelp" placeholder="Enter Your Id number">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter Your Email">
                              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Password</label>
                              <input type="password" class="form-control" name="psd" id="psd" placeholder="Enter the password">
                              <label for="exampleInputEmail1">Re-Enter Password</label>
                              <input type="email" class="form-control" name="repsd" id="repsd" aria-describedby="emailHelp" placeholder="Enter Password Again">
                            </div>
                            <div class="form-group form-check">
                              <input type="checkbox" class="form-check-input" id="check">
                              <label class="form-check-label" name="check" for="exampleCheck1">Accept the Terms and Conditions</label>
                            </div>
                            <button type="submit" class="btn btn-primary">submit</button>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <script>
        let form=document.getElementById("form");
        form.addEventListener("submit", (event) => {
            event.preventDefault();
            validate();
        });

     function validate(){
       let names = document.getElementsByName("name").value.trim();
       let id= document.getElementById("id num").value.trim();
       let emailid = document.getElementById("email").value.trim();
       let pwd = document.getElementById("psd ").value.trim();
       let  rpwd = document.getElementById("repsd").value.trim();
       let  is_checked = document.getElementById("check").checked;
       
       let nameValid=true;
       let passwordValid=true;

       //name validation
       if(names===""){
           document.getElementById("error").innerHTML="cannot be null";
           nameValid=false;
           return;
       }
       else if(names.length<3){
           names.innerText="atleast shoud contain 3 letters";
           nameValid=false;
       }
       else if(!names.match(/[a-zA-Z]/)){
           names.innerText="name dont have numbers";
           nameValid=false;
       }
       else if(names.match(/[0-9]/)){
           names.innerText="numbers not allowed";
           nameValid=false;
       }
       else{
           names.innerText="";
       }


       //ID validation.

       if(id==""){
           Id.innerText="Id cannot be empty";
           IdValid=false;
       }
       else if(id.length<=7){
           Id.innerText="Id should contain atleast 7 characters";
           IdValid=false;
       }
       else if(!id.match(/[A-Z]/)){
           Id.innerText="first letter should be alphabet";
           Id=false;
       }
       else if(!password.match(/[0-9]/)){
           Id.innerText="after 1 letter Id contain 6 digits only not letters";
           passwordValid=false;
       }
       else{
           Id.innerText="";
       }

        //email validation.

        if(email==""){
           email.innerText="email cannot be empty";
           emailValid=false;
       }
       else if(email.length<=17){
           email.innerText="email should contain atleast 17 characters";
           emailValid=false;
       }
       else if(!email.match( /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/gi)){
           email.innerText="first letter should be alphabet";
           emailValid=false;
       }
       else{
           email.innerText="";
       }

     

     //confirm password validation

       if(psd!=repsd){
               
           repsd.innerText="password not matched";
           psddValid=false;

       }
       if(repsd==""){
           repsd.innerText="cannot be empty";
           psdValid=false;
       }
       if(psd==repsd){
               repsd.innerText="";
   
           }
       


       //checkbox
       if (!is_checked) {
         check.innerHTML="Please Agree Terms and Contions to Log-in";
         return;
       }
       else if(is_checked){
           check.innerHTML="";
       }

       if (nameValid && passwordValid && is_checked) {
         form.submit();
       }

   }



</script>
</body>
</html>