$(function() {

    $('#side-menu').metisMenu();

});

//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
// Sets the min-height of #page-wrapper to window size
$(function() {
    $(window).bind("load resize", function() {
        topOffset = 50;
        width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.navbar-collapse').addClass('collapse');
            topOffset = 100; // 2-row-menu
        } else {
            $('div.navbar-collapse').removeClass('collapse');
        }

        height = (this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height;
        height = height - topOffset;
        if (height < 1) height = 1;
        if (height > topOffset) {
            $("#page-wrapper").css("min-height", (height) + "px");
        }
    });
});


// Cargo Controller script

$( document ).ready(function() {


    //validation input decimal
    $('input.input-decimal').mask('#####.00', {reverse: true});

    //validation input phone number
    $('input.input-phone').mask('000-000-0000');

    //validation input zipcode
    $('input.input-zipcode').mask('00000');

    
    var packageCounter = 1;
    var otherfeeCounter = 1;
    $('button#add-package').click(function(){

        var myClone = $("#package-1").clone().attr('id', 'package-' + (++packageCounter) );
        myClone.find(".package-number").text(packageCounter);
        myClone.find("input").val("");
        myClone.find('textarea').val('');
        myClone.appendTo( $( "#package-wrapper" ) );
        
        //show remove button
        myClone.find(".remove-package").removeClass("hidden");

    });


    $("#idFrmCargo").on("click",".remove-package", function(){
        var removeObj = $(this).parent(".package-input");
        removeObj.remove();
        --packageCounter;
        $( "input.calculate-weight" ).trigger( "focusout" );
        $( "input.calculate-chargeable-weight" ).trigger( "focusout" );
    });


    $('button#add-other-charge').click(function(){

        var myClone = $('#cargo-other-charge-fee-wrapper').find('#other-charge-row1').clone().attr("id", "other-charge-row" + (++otherfeeCounter) );
        myClone.find("input").val("");
        myClone.find('textarea').val('');
        myClone.appendTo( $('#cargo-other-charge-fee-wrapper') );

        //show remove button
        myClone.find(".remove-other-charge").removeClass("hidden");
        
    });

    $("#idFrmCargo").on("click",'.remove-other-charge', function(){
        var removeObj = $(this).closest(".other-charge-row");
        removeObj.remove();
        --otherfeeCounter;
        $( "input.calculate-fee" ).trigger( "focusout" );
    });

    //calculate weight
    var total_weight = 0;
    $("#idFrmCargo").on("focusout", "input.calculate-weight", function(){
        var tmp = 0;
        $('input.calculate-weight').each(function() {
            var currentElement = $(this);
            var value = currentElement.val(); // if it is an input/select/textarea field
            tmp = tmp + parseFloat(value);
        });
        if( !isNaN(tmp) ){
            total_weight = tmp;
        }
        $("input#cargo-total-weight").val(total_weight);
    });
    
    //calculate chargeable-weight
    var total_chargeable_weight = 0;
    $("#idFrmCargo").on("focusout", "input.calculate-chargeable-weight", function(){
        var tmp = 0;
        $('input.calculate-chargeable-weight').each(function() {
            var currentElement = $(this);
            var value = currentElement.val(); // if it is an input/select/textarea field
            tmp = tmp + parseFloat(value);
        });
        if( !isNaN(tmp) ){
            total_chargeable_weight = tmp;
        }
        $("input#cargo-total-chargeable-weight").val(total_chargeable_weight);
    });

    //calculate fee
    //calculate-fee
    var total_fee = 0;
    $("#idFrmCargo").on("focusout", "input.calculate-fee",  function(){
        var tmp = 0;
        $('input.calculate-fee').each(function() {
            var currentElement = $(this);
            var value = currentElement.val(); // if it is an input/select/textarea field
            tmp = tmp + parseFloat(value);
        });
        if( !isNaN(tmp) ){
            total_fee = tmp;
        }
        $("input#total-fee").val(total_fee);
    });


    $("input#grand-total").focusin(function(){

        //$( "input.calculate-weight" ).trigger( "focusout" );
        //$( "input.calculate-chargeable-weight" ).trigger( "focusout" );
        $( "input.calculate-fee" ).trigger( "focusout" );

        //calulate total charge (total chargeable weight x $/lbs) + other fee
        //cargo-charge-per-lbs
        var _charge_per_lbs = $("input#cargo-charge-per-lbs").val();
        var _total_weight = $("input#cargo-total-chargeable-weight").val();
        var _total_fee = $("input#total-fee").val();

        var total_charge = (parseFloat(_total_weight) * parseFloat(_charge_per_lbs)) + parseFloat( _total_fee);
        $("input#grand-total").val(total_charge.toFixed(2));

    });


});

// Cargo Controller script