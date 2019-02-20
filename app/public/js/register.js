$('document').ready(function() {   

  /* handle form validation */  
  $("#reg_f").validate({
      rules:
   {
   username: {
      required: true,
   minlength: 3
   },
  password: {
   required: true,
   minlength: 8,
   maxlength: 15
   },
   email: {
            required: true,
            email: true
            },
    },
       messages:
    {
            useename: "please enter user name",
           password:{
                      required: "please provide a password",
                      minlength: "password at least have 8 characters"
                     },
            email: "please enter a valid email address",
       },
    submitHandler: submitForm 
       });  
    /* handle form submit */
    function submitForm() {  
    var data = $("#reg_f").serialize(); 
    // var form = $('#reg_f')[0]; // You need to use standard javascript object here
    //       var formData = new FormData(form);   
    $.ajax({    
    type : 'POST',
    url  : 'reg_f.php',
    data : data,
    // contentType: false, 
    //  processData: false,
    beforeSend: function() { 
     $("#error").fadeOut();
     $("#reg-b").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
    },
    success :  function(response) {
    alert(response);                  
      if(response==1){         
       $("#error").fadeIn(1000, function(){
         $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Sorry email already taken !</div>');           
         $("#reg-b").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');          
       });                    
        } else if(response=="registered"){         
       $("#reg-b").html('<img src="assets/images/ajax-loader.gif" /> &nbsp; Signing Up ...');
       setTimeout(function(){
              $('#reg_f').fadeOut(1000);
              $("#succs").html('<div class="alert alert-success"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Account was created please login</div>');
            
                  
                // window.location.href='login.php';
              },2000);


       // setTimeout('$(".form-signin").fadeOut(500, function(){ $(".register_container").load("login.php"); }); ',3000);         
        } else {          
          $("#error").fadeIn(1000, function(){           
            $("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+data+' !</div>');           
            $("#reg-b").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');         
          });           
        }
        },
      // error:function(errorThrown)
      //           {
      //             alert(errorThrown);
      //           }
    });
    return false;
  }



  

});