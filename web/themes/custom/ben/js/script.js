/**
 * Created by Ben on 13/07/2017.
 */
// JavaScript Document
// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - https://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function ($, Drupal, window, document, undefined) {

    // To understand behaviors, see https://drupal.org/node/756722#behaviors
    Drupal.behaviors.my_custom_behavior = {
        attach: function(context, settings) {

            //alert('hello');

            $('#xblock-views-projects-home .view-content').masonry({
                itemSelector: '.views-row',
                //columnWidth: '.views-row',
                columnWidth: '230px',
                //percentPosition: true,
                //horizontalOrder: false,
                //originLeft: false
            });


            $(window).resize(function(){
            });
        }
    };

})(jQuery, Drupal, this, this.document);

