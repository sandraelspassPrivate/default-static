(function($) {
    // strict mode
    // https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Strict_mode
    'use strict';

    var $win = $(window);
    var $doc = $(document);
    var $html = $('html');
    // var $body = $('body');
    var $htmlBody = $('html, body');

    /**
     * inject svg sprite after body - its chacheable!
     * https://css-tricks.com/ajaxing-svg-sprite/
     */
    $.get(JSConf.svgPath, function(data) {
        var div = document.createElement("div");
        div.className = 'svg-sprite';
        div.innerHTML = new XMLSerializer().serializeToString(data.documentElement);
        document.body.insertBefore(div, document.body.childNodes[ 0 ]);
    });


    /**
     * doc ready
     */
    $(function() {
        /**
         *  toggle js utility selector class
         */
        $html
            .removeClass('no-js')
            .addClass('js');
        
        /**
         * initialize foundation
         */
        $doc.foundation();

        setTimeout(function() {
            Foundation.reInit('equalizer');
        }, 500);

        /* **************************************
         ***************** NAVI *****************
         ***************************************/




        /* **************************************
         *************** PLUGINS ****************
         ***************************************/

        /**
         * cookiebar
         */
        $('.cookie-message').each(function(idx, cookieMsg) {
            $(cookieMsg).cookieBar();

            var closeButton = $(cookieMsg).find('.cookiebar-close');
            var acceptCookie = $(cookieMsg).find('#cookiecheck');
            acceptCookie.change(function() {
                if (acceptCookie.is(':checked')) {
                    closeButton.removeClass('btn--bordered__deactivate');
                } else {
                    closeButton.addClass('btn--bordered__deactivate');
                }
            });
        });



        /* Simple spam protection for email addresses using jQuery.
             * Well, the protection isn’t jQuery-based, but you get the idea.
             * This snippet allows you to slightly ‘obfuscate’ email addresses to make it harder for spambots to harvest them, while still offering a readable address to your visitors.
             * E.g.
             * <a href="mailto:foo(at)example(dot)com">foo at example dot com</a>
             * →
             * <a href="mailto:foo@example.com">foo@example.com</a>
             */

        $(function() {
            $('a[href^="mailto:"]').each(function() {
                $(this).on('click', function ( ) {
                    this.href = this.href.replace('[at]', '@').replace(/\(dot\)/g, '.');
                });
            });
        });
    });
})(jQuery);