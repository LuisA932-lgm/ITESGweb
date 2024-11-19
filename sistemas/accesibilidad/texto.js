document.write(` 

<div id="check" class="sidebar" onmouseleave="closeNav()">

<div class="opc">
  <input type="checkbox" id="check1" onclick="Estilo1()">
  <label id="checkbox1" for="check1">Cambiar escala de grises</label>
</div>
<div class="opc">
  <input type="checkbox" id="check2" onclick="Estilo2()">
  <label id="checkbox2" for="check2">Cambiar tama&ntilde;o de cursor</label> 
</div>
<div class="opc">
  <input type="checkbox" id="check3" onclick="Estilo3()">
  <label id="checkbox3" for="check3">Cambiar el contraste de color</label>
</div>
<!--
<div class="opc">
  <input type="checkbox" id="check4" onclick="Estilo4()">
  <label id="checkbox4" for="check4">Guia de lectura</label>
</div>
-->
<div class="opc">
  <input type="checkbox" id="check5" onclick="Estilo5()">
  <label id="checkbox5" for="check5">Cambio de tipografia dislexia</label>
</div>
<div class="opc">
  <button type="button" onclick="espaciov()"><i class="fas fa-text-height"></i></button>
  <button type="button" onclick="espacioh()"><i class="fas fa-text-width"></i></button>
  <p class="txt-opc">Espaciado de textos</p>
</div>
<div class="opc">
  <button type="button" onclick="achicar()"><i class="fas fa-minus"></i></button>
  <button type="button" onclick="restablecer()"><i class="fas fa-redo-alt"></i></button>
  <button type="button" onclick="agrandar()"><i class="fas fa-plus"></i></button>
  <p class="txt-opc">Cambiar tama&ntilde;o texto</p>
</div>
</div>

<div id="main">
<button class="openbtn" onmouseover="openNav()"><p class="icono-btn"><i class="fas fa-child"></i></p></button>  
</div>

<div id="sigueratones"></div>
<div id="objetivo" onmousemove="seguir(event)">

`);