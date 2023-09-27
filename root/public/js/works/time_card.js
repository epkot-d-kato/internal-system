$(document).ready(function(){
    $('.timeCard').hide();

    $('.showTimeCard').click(function(){
        $('.timeCard').show();
    });
    
    $('.timeCard').click(function(e){
        if(e.target === this) {
            $(this).hide();
        }
    });
});