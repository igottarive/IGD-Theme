function popUpFeedbackForm(id) {
  specificId = "#webform-component-hidden-form2";
  jQuery( ".igd-feedback-form #edit-actions" )
//    .click(function() {
//      jQuery( specificId ).dialog( "close" );
//    })
    .appendTo("#webform-component-hidden-form2")
    .css('display', 'block');
  jQuery( specificId ).dialog({
    modal: true,
    width: "50%",
    title: "Feedback Form"
  }).addClass("feeback-form-style");

  //Add the form submit button to the #webform-component-hidden-form

}

function popUpFeedbackForm2(id) {
  specificId = "#webform-client-form-18";
  jQuery( specificId ).dialog({
    modal: true,
    width: "50%",
    title: "Feedback Form"
  }).addClass("feeback-form-style");
}

jQuery(document).ready(function() {
  // Move the banner up out of the hidden div
  jQuery( "#webform-component-ajax-button" ).appendTo( "#block-webform-client-block-18" );
})
