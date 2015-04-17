$("document").ready(function(){
    $("#fos_user_registration_form_matricule").keyup(function(){
        if($(this).val().length === 6){
            $.ajax({
               type:'get' 
            });
        }
    });
});