//validates form.

//validates empty required fields
validateEmptyField($('#firstName'));
validateEmptyField($('#lastName'));
validateEmptyField($('#password'));
validateEmptyField($('#passwordConfirm'));
function validateEmptyField(input){
    input.blur(function(){
        if(!$(this).val()){
            $(this).css("border", 'solid 2px red');
            isValid=false;
        }
        else{
            $(this).css("border", 'solid 2px green');
        }
    });
}
//validates that the email is a GRC email
validateEmail($('#email'));
function validateEmail(email) {
    email.blur(function () {
        if(!$(this).val()){
            $(this).css("border", 'solid 2px red');
            isValid=false;
        }
        else if ($("this:contains('greenriver.edu')")) {
            $(this).css("border", 'solid 2px red');
            isValid=false;
        }
        else {
            $(this).css("border", 'solid 2px green');
        }
    });
}

//validates that the password was confirmed.
confirmPassword($('#passwordConfirm'));
function confirmPassword(pswdConfirm) {
    pswdConfirm.focus(function () {
        if ($("#passwordConfirm") === $("#password")) {
            $(this).css("border-color", 'solid 2px green');
        }
        else {
            $(this).css("border-color", 'solid 2px red');
        }
    });
}
/*
//validates whether the student checked if they were flying
validateFlying($('#flight'));
function validateFlying(flight){
    flight.blur(function(){
        for(var i =0; i<flight; i++) {
            if (!flight[i].checked) {
                $("#flight").css("border-color", 'solid 2px red');
            }
            else {
                $("#flight").css("border-color", 'solid 2px green');
            }
        }
    });
}*/

