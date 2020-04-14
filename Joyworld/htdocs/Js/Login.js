function background() {
  var status = document.getElementById("Mode").innerHTML
  if (status == "Яркий режим")
  {
  	document.body.setAttribute("style","filter: brightness(50%); margin: 0; padding: 0; background: url(./Css/images/Master/BackgroundNight.jpg);background-size: cover;background-repeat: no-repeat;overflow:hidden;");
  }
  else
  	{
  		document.body.setAttribute("style","filter: brightness(100%); margin: 0; padding: 0; background: url(./Css/images/Master/Background.png);background-size: cover;background-repeat: no-repeat;overflow:hidden;");
  	}
document.getElementById("form_back").setAttribute("style","z-index:3;display:flex;justify-content:center;align-items:center");
document.getElementById("registr_form").setAttribute("style","display:block; margin-bottom:500px;");

}
function background_off() {
  var status = document.getElementById("Mode").innerHTML
  if (status == "Яркий режим")
  	{
  		document.body.setAttribute("style","filter: brightness(50%); margin: 0; padding: 0; background: url(./Css/images/Master/BackgroundNight.jpg);background-size: cover;background-repeat: no-repeat;overflow:visible;");
  	}
  else
  	{
  		document.body.setAttribute("style","filter: brightness(100%); margin: 0; padding: 0; background: url(./Css/images/Master/Background.png);background-size: cover;background-repeat: no-repeat;overflow:visible;");
    }
document.getElementById("form_back").setAttribute("style","z-index:0;display:none;");
document.getElementById("login_form").setAttribute("style","display:none;margin-bottom:500px;");
}
