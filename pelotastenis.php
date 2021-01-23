<img src ="pelotastenis.jpg" style="margin:30px" width="250px" height="250px">
<div>
<form>
<input id="D" name ="D" placeholder="Diametro" onkeyup="calcular()"/>cm
<input id="P" name ="P" placeholder="Pelotas" onkeyup="calcular()"/>
<button onclick="calcular()"> Calcular</button>
</form>
</div>


<div id="resultado" style ="
	padding:30px;
	background-color:yellow;
">
</div>

<script>

console.log('Vamos a calcular el volumen de un cilindro');
function calcular(){
		D=document.getElementById('D').value;
		D=parseFloat(D);
		P=document.getElementById('P').value;
		h=P*D;
		V=Math.round(h*Math.PI*(D**2)*100)/100;
		document.getElementById('resultado').innerHTML= V + ' cm3 ';
}

</script>
<td width="200"><center>
				<a href="Problemas.php"> Primer ejercicio </a></br>
				<a href="pelotastenis.php"> Segundo ejercicio </a></br>
				<a href="preguntas.php"> Tercer ejercicio </a></br>

<?php
$D=$_GET['D'];
$P=$_GET['P'];
$h=$P*$D;
echo($h*M_PI*(4**2)*100)/100;	
?>