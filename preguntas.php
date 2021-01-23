<div>
<form>
<input id="Pr" name ="Pr" placeholder="Preguntas" onkeyup="calcular()"/>
<input id="Pt" name ="Pt" placeholder="Puntos" onkeyup="calcular()"/>
<input id="OK" name ="OK" placeholder="Correctas" onkeyup="calcular()"/>
<input id="KO" name ="KO" placeholder="Incorrectas" onkeyup="calcular()"/>
<button onclick="calcular()"> Calcular</button>
</form>
</div>


<div id="resultado" style ="
	padding:30px;
	background-color:yellow;
">
</div>

<script>

console.log('Vamos  calcular cuántas preguntas contesto bien y cuántas mal');
function calcular(){
		Pr=document.getElementById('Pr').value;
		Pr=parseFloat(Pr);
		Pt=document.getElementById('Pt').value;
		Pt=parseFloat(Pt);
		OK=document.getElementById('OK').value;
		OK=parseFloat(OK);
		KO=document.getElementById('KO').value;
		KO=parseFloat(KO);
		x=(Pt+Pr*KO)/(OK+KO);
		y=Pr-x;
		document.getElementById('resultado').innerHTML= x + ' Correctas ';
		document.getElementById('resultado').innerHTML= y + ' Incorrectas ';
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