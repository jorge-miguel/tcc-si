$(document).ready(function() {
    $('select[name="empresa"]').on('change', function(){
        var empresa_id = $(this).val();
        if(empresa_id) {
            $.ajax({
                url: '/areas/get/'+empresa_id,
                type:"GET",
                dataType:"json",
                beforeSend: function(){
                    $('#loader').css("visibility", "visible");
                },

                success:function(data) {

                    $('select[name="area"]').empty();

                    $.each(data, function(key, value){

                        $('select[name="area"]').append('<option value="'+ key +'">' + value + '</option>');

                    });
                },
                complete: function(){
                    $('#loader').css("visibility", "hidden");
                }
            });
        } else {
            $('select[name="area"]').empty();
        }
    });
});