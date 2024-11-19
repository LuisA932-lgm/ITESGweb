  function openNav() {
    document.getElementById("check").style.width = "250px";
    document.getElementById("main").style.marginLeft = "0px";
    document.getElementById("check").style.opacity = "0.95";
  }
            
  function closeNav() {
    document.getElementById("check").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.getElementById("check").style.opacity = "0";
  }


  function Estilo1() {
    var seleccion1 = document.getElementById("check1");
    if (seleccion1.checked == true){
      document.getElementById("objetivo").style.filter = 'grayscale(100%)';
    } else {
      document.getElementById("objetivo").style.filter = 'none';
    }
  }


  function Estilo2() {
    var seleccion2 = document.getElementById("check2");
    if (seleccion2.checked == true){
      document.getElementById("objetivo").style.cursor = 'url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz48IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiIHdpZHRoPSIyOS4xODhweCIgaGVpZ2h0PSI0My42MjVweCIgdmlld0JveD0iMCAwIDI5LjE4OCA0My42MjUiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDI5LjE4OCA0My42MjUiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxnPjxwb2x5Z29uIGZpbGw9IiNGRkZGRkYiIHN0cm9rZT0iI0Q5REFEOSIgc3Ryb2tlLXdpZHRoPSIxLjE0MDYiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgcG9pbnRzPSIyLjgsNC41NDkgMjYuODQ3LDE5LjkwMiAxNi45NjQsMjIuNzAxIDI0LjIzOSwzNy43NDkgMTguMjc4LDQyLjAxNyA5Ljc0MSwzMC43MjQgMS4xMzgsMzUuODA5ICIvPjxnPjxnPjxnPjxwYXRoIGZpbGw9IiMyMTI2MjciIGQ9Ik0yOS4xNzUsMjEuMTU1YzAuMDcxLTAuNjEzLTAuMTY1LTEuMjUzLTAuNjM1LTEuNTczTDIuMTY1LDAuMjU4Yy0wLjQyNC0wLjMyLTAuOTg4LTAuMzQ2LTEuNDM1LTAuMDUzQzAuMjgyLDAuNDk3LDAsMS4wMywwLDEuNjE3djM0LjE3MWMwLDAuNjEzLDAuMzA2LDEuMTQ2LDAuNzc2LDEuNDM5YzAuNDcxLDAuMjY3LDEuMDU5LDAuMjEzLDEuNDgyLTAuMTZsNy40ODItNi4zNDRsNi44NDcsMTIuMTU1YzAuMjU5LDAuNDgsMC43MjksMC43NDYsMS4yLDAuNzQ2YzAuMjM1LDAsMC40OTQtMC4wOCwwLjcwNi0wLjIxM2w2Ljk4OC00LjU4NWMwLjMyOS0wLjIxMywwLjU2NS0wLjU4NiwwLjY1OS0xLjAxM2MwLjA5NC0wLjQyNiwwLjAyNC0wLjg4LTAuMTg4LTEuMjI2bC02LjM3Ni0xMS4zODJsOC42MTEtMi43NDVDMjguNzA1LDIyLjI3NCwyOS4xMDUsMjEuNzY4LDI5LjE3NSwyMS4xNTV6IE0xNi45NjQsMjIuNzAxYy0wLjQyNCwwLjEzMy0wLjc3NiwwLjUwNi0wLjk0MSwwLjk2Yy0wLjE2NSwwLjQ4LTAuMTE4LDEuMDEzLDAuMTE4LDEuNDM5bDYuNTg4LDExLjc4MWwtNC41NDEsMi45ODVsLTYuODk0LTEyLjMxNWMtMC4yMTItMC4zNzMtMC41NDEtMC42NC0wLjk0MS0wLjcyYy0wLjA5NC0wLjAyNy0wLjE2NS0wLjAyNy0wLjI1OS0wLjAyN2MtMC4zMDYsMC0wLjU4OCwwLjEwNy0wLjg0NywwLjMyTDIuOCwzMi41OVY0LjU0OWwyMS41OTksMTUuODA2TDE2Ljk2NCwyMi43MDF6Ii8+PC9nPjwvZz48L2c+PC9nPjwvc3ZnPg==),auto';
    } else {
      document.getElementById("objetivo").style.cursor = 'auto';
    }
  }


  function Estilo3() {
    var seleccion3 = document.getElementById("check3");
    if (seleccion3.checked == true){
      var x = document.getElementById("objetivo");
      var y = x.getElementsByTagName("img");
      var i;
      for (i = 0; i < y.length; i++) {
        y[i].style.filter = 'invert(100%)';
      }
    } else {
      var x = document.getElementById("objetivo");
      var y = x.getElementsByTagName("img");
      var i;
      for (i = 0; i < y.length; i++) {
        y[i].style.filter = 'none';
      }
    }
  }


  function Estilo4() {
    var seleccion4 = document.getElementById("check4");
    if (seleccion4.checked == true){
      document.getElementById("sigueratones").style.display = 'block';
    } else {
      document.getElementById("sigueratones").style.display = 'none';
    }
  }

  var siguerratones = document.getElementById('sigueratones').style;

  function seguir(event) {
    siguerratones.top = parseInt(event.pageY) + "px";
  }


  
  function Estilo5() {
    var seleccion5 = document.getElementById("check5");
    if (seleccion5.checked == true){
      document.getElementById("objetivo").style.fontFamily = "Nunito Sans, sans-serif";
    } else {
      document.getElementById("objetivo").style.fontFamily = "Montserrat";
    }
  }
  

  var tam=18;
	function agrandar(){
      if(tam<=22){
      tam++;
      document.getElementById("objetivo").style.fontSize = tam + "px";
      }
	}
  function restablecer(){
      tam=18
		  document.getElementById("objetivo").style.fontSize = tam+"px";
	}
	function achicar(){
      if(tam>=14){
      tam--;
		  document.getElementById("objetivo").style.fontSize = tam+"px";
      }
	}


  var espv=1.4;
  var esph=0;
	function espaciov(){
      if(espv<=4.4){
      espv++; 
      document.getElementById("objetivo").style.lineHeight = espv;
      }else{
        espv=1.4;
        document.getElementById("objetivo").style.lineHeight = espv;
      }
	}

	function espacioh(){
      if(esph<=5){
      esph++
		  document.getElementById("objetivo").style.letterSpacing = esph +"px";
      }else{
        esph=0
		    document.getElementById("objetivo").style.letterSpacing = esph +"px";
      }
	}
