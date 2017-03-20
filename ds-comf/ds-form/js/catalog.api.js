dsC(document).ready(function () {
    
    dsC(".fancy-img").fancybox();

    pJokes = dsC("#price-j").html();
    pCubic = dsC("#price-c").html();

    dsC("#callc-result").html(pCubic);

    function clickOrder() {

    	setTimeout(function() {

        	calcSum = dsC("#callc-result").html();
        	calcInp = dsC("#callc-inp").val();
        	calcInpType = dsC("#callc-sel option:selected").html();

            dsC("#quantity").val(calcInp + " " + calcInpType);
    		dsC("#sum").val(calcSum + " Руб.");

    	},100);

    }

    dsC(this).on("click","#sb-order-bt",function() {

    	clickOrder();

    });

    dsC("#callc-inp").change(function() {

        calcInp = dsC("#callc-inp").val();
        calcInpType = dsC("#callc-sel option:selected").val();

        if(calcInpType == "cubic") {

            calcRes = (parseInt(calcInp) * parseInt(pCubic));
            dsC("#callc-result").html(calcRes);

        } else if(calcInpType == "jokes") {

            calcRes = (parseInt(calcInp) * parseInt(pJokes));
            dsC("#callc-result").html(calcRes);

        }

    });

    dsC("#callc-sel").change(function() {

        calcInp = dsC("#callc-inp").val();
        calcInpType = dsC("#callc-sel option:selected").val();

        if(calcInpType == "cubic") {

            calcRes = (parseInt(calcInp) * parseInt(pCubic));
            dsC("#callc-result").html(calcRes);

        } else if(calcInpType == "jokes") {

            calcRes = (parseInt(calcInp) * parseInt(pJokes));
            dsC("#callc-result").html(calcRes);

        }

    });

});