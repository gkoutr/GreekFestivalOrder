/**
 * Created by George on 10/27/2016.
 */

$(function(){
    $('#toppings').hide();
    $("input[name=sandwich]").click(function(){
        console.log('yes');
        if($("#gyro").attr('checked'))
            console.log('gyro');
            $("#toppings").show();
        
    })
});



