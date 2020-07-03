$(document).ready(function(){ 
  var pathname = window.location.pathname;
  // NOTE: temporarily remove /wintestprep to expected pathname
  pathname = pathname.substring(12);
  var navId;
  switch (pathname) {
	case "/index.html":
		navId = "home";
		break;
	case "/services.html":
		navId = "services";
		break;
	case "/register.html":
		navId = "register";
		break;
	case "/schedule.html":
		navId = "scheduling";
		break;
	case "/about.html":
		navId = "about";
		break;
	case "/info.html":
		navId = "info";
		break;
	case "/contact.html":
		navId = "contact";
		break;
  }
  $("#" + navId).addClass("active");
}); 
