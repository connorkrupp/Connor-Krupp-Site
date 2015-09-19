
jQuery(window).resize(function(){

  if (jQuery(window).width() >= 700 && jQuery(window).width() <= 1120){
    var wrapperWidth = document.getElementsByClassName("wrap")[0].clientWidth;
    var projects = document.getElementsByClassName("project");
    for (var i = 0; i < projects.length; i++) {
      projects[i].style.zoom = wrapperWidth / 1040;
    }
	}

  if ((jQuery(window).width() < 700 && jQuery(window).width() >= 560) || jQuery(window).width() > 1120){
    var projects = document.getElementsByClassName("project");
    for (var i = 0; i < projects.length; i++) {
      projects[i].style.zoom = 1.0;
    }
	}

  if (jQuery(window).width() < 560){
    var wrapperWidth = document.getElementsByClassName("wrap")[3].clientWidth;
    var projects = document.getElementsByClassName("project");
    for (var i = 0; i < projects.length; i++) {
      projects[i].style.zoom =  wrapperWidth / 500;
    }
	}

});
jQuery(document).ready(function($) {
  if (jQuery(window).width() >= 700 && jQuery(window).width() <= 1120) {
    var wrapperWidth = document.getElementsByClassName("wrap")[0].clientWidth;
    var projects = document.getElementsByClassName("project");
    for (var i = 0; i < projects.length; i++) {
      projects[i].style.zoom = wrapperWidth / 1040;
    }
	}

  if (jQuery(window).width() < 560){
    var wrapperWidth = document.getElementsByClassName("wrap")[3].clientWidth;
    var projects = document.getElementsByClassName("project");
    for (var i = 0; i < projects.length; i++) {
      projects[i].style.zoom = wrapperWidth / 500;
    }
	}
});
