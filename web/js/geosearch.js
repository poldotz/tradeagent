$('#submitGeoSearch').click( function() {
    $('#loader').show();
    $.ajax({
        url: $('form#geolocatorSearchForm').attr('action'),
        type: 'post',
        dataType: 'html',
        data: $('form#geolocatorSearchForm').serialize(),
        success: function(result) {
            $('#results').html(result);
            $('#loader').hide();
        },
        error: function(result) {
            $('#results').html(result);
            $('#loader').hide();
        }
    });
});