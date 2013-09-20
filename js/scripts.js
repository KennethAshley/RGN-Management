jQuery(document).ready(function($) {

  $('.community-select').click(function(){
    $('ul', this).toggle();
    });


  var wLocation = window.location.pathname;

  if (wLocation == '/faqs/'){

    $('a[title="faq"]').parent().addClass('current_page_item');
  }
});

