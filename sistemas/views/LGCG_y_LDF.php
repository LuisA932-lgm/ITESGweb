<?php
include ("header.php");
?>
<!DOCTYPE html>

<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Ejercicios Fiscales 2021</title>
  </head>
  <body>
    <style>
       .Ti {
           
            color: rgb(181, 129, 45);
            font-family: Lato, sans-serif;
            font-size: 21px;
            font-weight:bold;
       }
     
          .btn {
            font-weight:bold;
    display: inline-block;
    margin-bottom: 0;
    font-weight: 300;
    text-align: center;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    white-space: nowrap;
    line-height: 1.428571429;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none
}

.btn.active.focus,
.btn.active:focus,
.btn.focus,
.btn:active.focus,
.btn:active:focus,
.btn:focus {
    outline: dotted thin;
    outline: -webkit-focus-ring-color auto 5px;
    outline-offset: -2px
}

.btn.focus,
.btn:focus,
.btn:hover {
    color: #333;
    text-decoration: none
}

.btn.active,
.btn:active {
    outline: 0;
    box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125)
}


.btn.disabled,
.btn[disabled],
fieldset[disabled] .btn {
    cursor: not-allowed;
    opacity: .65;
    filter: alpha(opacity=65);
    box-shadow: none
}

a.btn.disabled,
fieldset[disabled] a.btn {
    pointer-events: none
}

.btn-default {
    color: #6F7271;
    background-color: #fff;
    font-weight:bold;
}

.btn-default.focus,
.btn-default:focus {
    color: #FFF;
    background-color: #042433;
    border-color: #6F7271
}

.btn-default.active,
.btn-default:active,
.btn-default:hover,
.open>.btn-default.dropdown-toggle {
    color: #FFF;
    background-color: #D0D5E5;
    border-color: #fff;
}

.btn-default.active.focus,
.btn-default.active:focus,
.btn-default.active:hover,
.btn-default:active.focus,
.btn-default:active:focus,
.btn-default:active:hover,
.open>.btn-default.dropdown-toggle.focus,
.open>.btn-default.dropdown-toggle:focus,
.open>.btn-default.dropdown-toggle:hover {
    color: #FFF;
    background-color: #6F7271;
    border-color: #6F7271
}

.btn-default.disabled,
.btn-default.disabled.active,
.btn-default.disabled.focus,
.btn-default.disabled:active,
.btn-default.disabled:focus,
.btn-default.disabled:hover,
.btn-default[disabled],
.btn-default[disabled].active,
.btn-default[disabled].focus,
.btn-default[disabled]:active,
.btn-default[disabled]:focus,
.btn-default[disabled]:hover,
fieldset[disabled] .btn-default,
fieldset[disabled] .btn-default.active,
fieldset[disabled] .btn-default.focus,
fieldset[disabled] .btn-default:active,
fieldset[disabled] .btn-default:focus,
fieldset[disabled] .btn-default:hover {
    color: #FFF;
    background-color: #6F7271;
    border-color: #6F7271
}
.btn-default .badge {
    color: #fff;
    background-color: #333
}

.btn-primary {
    color: #9D2449;
    background-color: #FFF;
    border-color: #9D2449
}

.btn-primary.focus,
.btn-primary:focus {
    color: #FFFFFF;
    background-color: #9D2449;
    border-color: #9D2449
}

.btn-primary.active,
.btn-primary:active,
.btn-primary:hover,
.open>.btn-primary.dropdown-toggle {
    color: #fff;
    background-color: #9D2449;
    border-color: #9D2449
}

.btn-primary.active.focus,
.btn-primary.active:focus,
.btn-primary.active:hover,
.btn-primary:active.focus,
.btn-primary:active:focus,
.btn-primary:active:hover,
.open>.btn-primary.dropdown-toggle.focus,
.open>.btn-primary.dropdown-toggle:focus,
.open>.btn-primary.dropdown-toggle:hover {
    color: #fff;
    background-color: #9D2449;
    border-color: #9D2449
}

.btn-primary.disabled,
.btn-primary.disabled.active,
.btn-primary.disabled.focus,
.btn-primary.disabled:active,
.btn-primary.disabled:focus,
.btn-primary.disabled:hover,
.btn-primary[disabled],
.btn-primary[disabled].active,
.btn-primary[disabled].focus,
.btn-primary[disabled]:active,
.btn-primary[disabled]:focus,
.btn-primary[disabled]:hover,
fieldset[disabled] .btn-primary,
fieldset[disabled] .btn-primary.active,
fieldset[disabled] .btn-primary.focus,
fieldset[disabled] .btn-primary:active,
fieldset[disabled] .btn-primary:focus,
fieldset[disabled] .btn-primary:hover {
    color: #FFF;
    background-color: #9D2449;
    border-color: #9D2449
    
}
.font-changer button {
    display: block;
    background: 0 0;
    background: -webkit-linear-gradient(top, #fff 0, #e0e0e0 100%);
    background: linear-gradient(to bottom, #fff 0, #e0e0e0 100%);
    box-shadow: 0 0 5px 0 rgba(0, 0, 0, .33);
    border: 1px solid #fff;
    outline: 0;
    border-radius: 5px;
    width: 35px;
    height: 35px;
    text-align: center;
    font-size: 13px;
    margin-bottom: 7px
    
}

.font-changer button:hover {
    background: -webkit-linear-gradient(top, #e0e0e0 0, #fff 100%);
    background: linear-gradient(to bottom, #e0e0e0 0, #fff 100%)
}

#btn-year.selected,
.btn-year.selected {
    background-color: #042433; 
    color: #fff; 
}

#btn-year.selected, .btn-year.selected {
    background-color: #042433;  /* Color de fondo */
    color: #fff;  /* Color del texto */
}


</style>

 <center class="Ti">Información Financiera - Armonización Contable LGCG y LDF</center>
  <center>   
          <div class="btn-group btn-group-lg" role="group">
   
      
          <button type="button" class="btn-year btn btn-default" data-year="2018" style="color: #2EC3F8; font-size: 22px" onclick="loadContent('2018')">2018</button>
    <button type="button" class="btn-year btn btn-default" data-year="2019" style="color: #2EC3F8; font-size: 22px" onclick="loadContent('2019')">2019</button>
    <button type="button" class="btn-year btn btn-default" data-year="2020" style="color: #2EC3F8; font-size: 22px" onclick="loadContent('2020')">2020</button>
    <button type="button" class="btn-year btn btn-default" data-year="2021" style="color: #2EC3F8; font-size: 22px" onclick="loadContent('2021')">2021</button>
    <button type="button" class="btn-year btn btn-default" data-year="2022" style="color: #2EC3F8; font-size: 22px" onclick="loadContent('2022')">2022</button>
    <button type="button" class="btn-year btn btn-default" data-year="2023" style="color: #2EC3F8; font-size: 22px" onclick="loadContent('2023')">2023</button>
    <button type="button" class="btn-year btn btn-default" data-year="2024" style="color: #2EC3F8; font-size: 22px" onclick="loadContent('20244')">20244</button>
  </center>
  <div id="contentDiv">
    
</div>
  </body>
  </html>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    const currentYear = new Date().getFullYear();
    loadContent(currentYear);
    $(`.btn-year[data-year="${currentYear}"]`).addClass('selected');
});

function loadContent(year) {
    $.ajax({
        url: `http://localhost/ITESGWEB/sistemas/views/Informacion_Financiera/${year}.php`,
        type: "GET",
        success: function(response) {
            if (response.trim() === "") {
                $('#contentDiv').html('<img src="../images/logos/1.png" style="display:block; margin: 0 auto;" />');
            } else {
                $('#contentDiv').html(response);
            }
        },
        error: function() {
            $('#contentDiv').html('<img src="../images/1.png" style="display:block; margin: 0 auto;"/> <p style="text-align:center; color:black;"> Página en mantenimiento. </p>');
        }
    });
    $('.btn-year').removeClass('selected');
    $(`.btn-year[data-year="${year}"]`).addClass('selected');
}
</script>



<?php
include ("footer.php");
?>