jQuery(document).ready(function($) {
    $('.js-portfolio-filter').on('submit', function(e) {
        e.preventDefault();

        var assetClass = $('#asset_class').val();
        var geography = $('#geography').val();
        var sector = $('#sector').val();

        $.ajax({
            url: ajax_params.ajax_url,
            type: 'post',
            data: {
                action: 'filter_projects',
                asset_class: assetClass,
                geography: geography,
                sector: sector
            },
            beforeSend: function() {
                $('#portfolio-results').html('<p>Loading...</p>');
            },
            success: function(response) {
                $('#portfolio-results').html(response);
            }
        });
    });
});
