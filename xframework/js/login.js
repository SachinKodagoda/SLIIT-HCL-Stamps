var forword = false;

var verifyCallback = function (){
    forword = true;
}
var submitForm = function (){
    if(forword){
        login_form_submit.submit();
    }
}