/*Created by Barrett at RRPowered.com*/
/*We start with the document ready function.*/
$(document).ready(function(){
/*When the submit button is clicked, we will call the register function.*/
    $("#sub").click(function(){
        register();
    });
});

/*The register function.*/
function register(){
/*Get all the submited values.*/
    var email=$("#email").val();
    var password=$("#password").val();
    var birthday_month=$("#birthday_month").val();
    var birthday_day=$("#birthday_day").val();
    var birthday_year=$("#birthday_year").val();
/*If any of the input fields are empty, show an error.*/
if(email=="" || password==""){
    $(".fb-error").show().html("You must fill in of the fields.");
/*If any of the birthday fields are empty, show an error.*/
    }else if(birthday_month==0 || birthday_day==0 || birthday_year==0){
        $(".fb-error").show().html("You must select your birthday.");
/*Next we will hide the error message if any. Then submit the form. */
    }else{
        $(".fb-error").hide();
/*Next we will put all the submitted values into a variable.*/
dataString = '&email=' + email  + '&password=' + pw
'&birthday_month=' + birthday_month + '&birthday_day=' + birthday_day + '&birthday_year=' + birthday_year;
/*Next we will use the .ajax() API to submit the form to register.php*/
$.ajax({
type: "POST",
url: "register.php",
data: "dataString",
cache: false,
success: function(done){
/*If the register.php file returns 1*/
{
        /*Show submitted vales*/
        $(".done").html("Form submitted ");
        /*Clear input values*/
        $(input).val("");
        /*Clear select vales*/
        $(select).val("");
    }
}
});
}
}
