<?php
include ("header.php");
?>
<!DOCTYPE html>

<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
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
    background-color: #333;
    border-color: #6F7271
}

.btn-default.active,
.btn-default:active,
.btn-default:hover,
.open>.btn-default.dropdown-toggle {
    color: #FFF;
    background-color: #E6EBEC;
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
    </style>
  <center class="Ti">Información Financiera -Armonización Contable LGCG y LDF</center>
  <center>   
          <div class="btn-group btn-group-lg" role="group">
   
          <a href="http://localhost/ITESGWEB/sistemas/views/hola.php?option=com_content&amp;view=article&amp;id=68&amp;Itemid=572"><button type="button" style="color: #2EC3F8; font-size: 22px " class="  btn btn-default">2018</button>
          </a><a href="http://localhost/ITESGWEB/sistemas/views/hola.php?option=com_content&amp;view=article&amp;id=75&amp;Itemid=572"><button type="button" style="color: #2EC3F8; font-size: 22px" class=" btn btn-default">2019</button>
          </a><a href="http://localhost/ITESGWEB/sistemas/views/hola.php?option=com_content&amp;view=article&amp;id=79&amp;Itemid=572"><button type="button" style="color: #2EC3F8; font-size: 22px" class="btn btn-default">2020</button>
            </a><a href="http://localhost/ITESGWEB/sistemas/views/hola.php?option=com_content&amp;view=article&amp;id=87&amp;Itemid=572"><button type="button" style="color: #2EC3F8; font-size: 22px" class="btn btn-default">2021</button></a>
          <a href="http://localhost/ITESGWEB/sistemas/views/hola.php?option=com_content&amp;view=article&amp;id=92&amp;Itemid=572"><button type="button" style="color: #2EC3F8; font-size: 22px" class="btn btn-default">2022</button></a>
           <a href="http://localhost/ITESGWEB/sistemas/views/hola.php?option=com_content&amp;view=article&amp;id=99&amp;Itemid=572"><button type="button" style="color: #2EC3F8; font-size: 22px" class="btn btn-default">2023</button></a>
          <a href="http://localhost/ITESGWEB/sistemas/views/hola.php?option=com_content&amp;view=article&amp;id=104&amp;Itemid=572"><button type="button" style="color: #2EC3F8; font-size: 22px" class="btn btn-default">2024</button></a>
          </div>
  </center>
  <div>
  </div>
  </body>
  </html>
<?php
include ("footer.php");
?>