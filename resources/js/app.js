$(document).ready(function () {
    $('#opportunite').click(function() {
        if($('#opportunite').is(':checked')) {
            $('#selectAgentOppo').removeClass('d-none');
            $('#selectAgentPj').addClass('d-none');
        }
    });

    $('#page_jaune').click(function() {
        if($('#page_jaune').is(':checked')) {
            $('#selectAgentPj').removeClass('d-none');
            $('#selectAgentOppo').addClass('d-none');
        }
    });

});
