$('.color-group').hide();
$('.size-group').hide();
$('.children-simple-group').hide();
$('#type-product').change(function() {
    // alert('Selected value: ' + $(this).val());
    if ($(this).val() == 'simple') {
        $('.color-group').show();
        $('.size-group').show();
        $('.children-simple-group').hide();
    }

    if ($(this).val() == 'configurable') {
        $('.color-group').hide();
        $('.size-group').hide();
        $('.children-simple-group').show();
    }
    
})