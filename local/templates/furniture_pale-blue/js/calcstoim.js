$(document).ready(function(){

    $('.calcForm select.fCalc').change(function(){
        calcForm();
    });
    
    $('.calcForm input.fCalc').keyup(function(){
        var val = $(this).val();
        val = val.replace(/[^0-9]+/g, "");//.replace(',','.')
        $(this).val(val);
        
        calcForm();
    });
    
    $('.calcForm input.fCalc').change(function(){
        var val = $(this).val();
        val = parseFloat(val);
        val = isNaN(val) ? 1 : val;
        $(this).val(val);
        
        calcForm();
    });
    
    calcForm();
    
});

function calcForm(){
        var a=0, b=0, c=0, p=0, Sum=0;
        
        n_floors();
        
        $('.calcForm select').each(function(){
            a += parseFloat($(this).val());
        });
        
        b = parseFloat($('.calcForm input[name="c_width"]').val());
        c = parseFloat($('.calcForm input[name="c_height"]').val());
        
        p = parseFloat($('select[name="n_floors"]').find('option:selected').attr('data-p_floors'));
        
        Sum = a*b*p*c;
        
        $('.calcSum').text( Sum.toFixed(0).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1 ") +' р.' );
}


function n_floors(){//Открываются только при выборе этажей больше одного, в остальное время подсвечены серым
    if( $('select[name="n_floors"]').find('option:selected').attr('data-n_floors')>1 ){
        $('tr.in_floor').show();
    }
    else{
        $('select[name="in_floor"]').val(0);
        $('tr.in_floor').hide();
    }
}