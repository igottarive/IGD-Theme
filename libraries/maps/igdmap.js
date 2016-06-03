$(document).ready(function() {
  $("#map").usmap({
    "stateStyles": {
      "fill": "#0b6e1a", 
      "stroke" : "#0"
    },
    "stateHoverStyles": {
      "fill": "#71a334"
    },
    "mouseover": function(event, data) {
      $("#info").text("Welcome to " + data.longName);
    },
    "mouseout": function(event, data) {
      $("#info").text(" ");
    },
    "stateHoverAnimation": false,
    "click" : function(event, data) {
      url = data.longName.toLowerCase();
      url = "/" + url.replace(" ", "-");
      url += "-drivers-ed" + $(location).attr('pathname');
      window.location.href = url;
    }
  });

  $(window).resize(function(){ 
    // Change the width and the height attributes manually through DOM
    $('#map').css('width', $('#info').width());
    $('#map').css('height', '100%');
    $('#map svg').attr('width', '100%');
    $('#map svg').attr('height', '100%');
  });

  $(window).trigger('resize');
});
