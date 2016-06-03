(function($) {
    Drupal.behaviors.myBehavior = {
        attach: function (context, settings) {
            $(document).ready(function() {
                $("select.state-select").imagepicker({
                    hide_select: false,
                    changed: selectedAction,
                });
                $("select.persona-select").imagepicker({
                    changed: selectedAction,
                });
            });
        }
    };
})(jQuery);

var urlParts = [ '', '' ];

function selectedAction(oldVal, newVal) {
    var selName = this.attr('name');
    var selVal = newVal;
    if(selName == 'state') {
        urlParts[0] = selVal;
    } else if (selName = 'persona') {
        urlParts[1] = selVal;
    }
    if(urlParts[0] != '' && urlParts[1] != '') {
        jQuery("#choose-state-persona").replaceWith(
                "<a id='choose-state-persona' href='/"+urlParts[0]+"/"+urlParts[1]+"/'>Choose!</a>"
        );
    } else {
        jQuery("#choose-state-persona").replaceWith("<span id='choose-state-persona'>Choose</span>");
    }
    return 1;
}
