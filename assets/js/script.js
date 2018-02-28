var baseUrl;

if (window.location.origin === "http://payakapps.com") {
    baseUrl = "http://payakapps.com";
} else if (window.location.origin === "http://stage.payakapps.com") {
    baseUrl = "http://stage.payakapps.com";
} else {
    baseUrl = "http://localhost/main";
}

var apiUrl = baseUrl + "/api/dev";

function browserWidth(){
    var width = $(window).width();
    var height = $(window).height();
  
    return width;
  };
  
  function toggle(){
    var hide = true;
    $(".custom-toggle").click(function() {
      if(browserWidth() < 768) {
        if (hide) {
          $('#sidebar').css({'margin-left' : '0px'});
          hide = false;
        } else {
          $('#sidebar').css({'margin-left' : '-210px'});
          hide = true;
        }
      } else {
        if (hide) {
          $('#sidebar').css({'margin-left' : '-210px'});
          $('.main-content').css({'margin-left' : '0px'});
          $('.hidden-toggle').css({'display' : 'block'});
          hide = false;
        } else {
          $('#sidebar').css({'margin-left' : '0px'});
          $('.main-content').css({'margin-left' : '210px'});
          $('.hidden-toggle').css({'display' : 'none'});
          hide = true;
        }
      }
    });
  }
  
  $(document).ready(toggle());
  
  $(window).resize(function() {
    
    if(browserWidth() < 768) {
      $('#sidebar').css({'margin-left' : ''});
      $('.main-content').css({'margin-left' : ''});
      $('.hidden-toggle').css({'display' : ''});
    } else {
      // $('#sidebar').css({'margin-left' : ''});
      // $('.main-content').css({'margin-left' : ''});
    }
    
    toggle();
    
  });