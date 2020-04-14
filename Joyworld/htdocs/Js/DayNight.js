function Night() {
  document.getElementById("Mode").setAttribute("onclick", "Day()");
  document.getElementById("Mode").innerHTML = "Яркий режим";
  document.body.setAttribute("style","filter: brightness(50%); margin: 0; padding: 0; background: url(./Css/images/Master/BackgroundNight.jpg);background-size: cover;background-repeat: no-repeat;");
  }

function Day() {
  document.getElementById("Mode").setAttribute("onclick", "Night()");
  document.getElementById("Mode").innerHTML = "Темный режим";
   document.body.setAttribute("style","filter: brightness(100%); margin: 0; padding: 0; background: url(./Css/images/Master/Background.png);background-size: cover;background-repeat: no-repeat;");
}
