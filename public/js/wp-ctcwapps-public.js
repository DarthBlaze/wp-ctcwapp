(function($) {
    'use strict';
    $(document).ready(function() {
        $("#link_ctcwapps").attr('href', 'https://api.whatsapp.com/send?phone=' + ctc_wapps.numero);
    });

})(jQuery);