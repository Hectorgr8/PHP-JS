<img src ="trapecio.jpg" style="margin:30px" width="250px" height="250px">
<div>
<form>
<input id="h" name ="h" placeholder="Altura" cm onkeyup="calcular()"/>
<input id="B" name ="B" placeholder="Base mayor" cm onkeyup="calcular()"/>
<input id="b" name ="b" placeholder="base menor" cm onkeyup="calcular()"/>
<button onclick="calcular()"> Calcular</button>
</form>
</div>

<div id="resultado" style ="
	padding:30px;
	background-color:yellow;
">
</div>

<script>

console.log('Vamos a calcular el area de un trapecio');
function calcular(){
		h=document.getElementById('h').value;
		B=document.getElementById('B').value;
		b=document.getElementById('b').value;
		B=parseInt(B)
		b=parseInt(b)
		A=Math.round(h*(B+b)/2*100)/100;
		document.getElementById('resultado'). innerHTML=A + 'cm2';
}

</script>
<td width="200"><center>
				<a href="Problemas.php"> Primer ejercicio </a></br>
				<a href="pelotastenis.php"> Segundo ejercicio </a></br>
				<a href="preguntas.php"> Tercer ejercicio </a></br>

<?php
$h=$_GET['h'];
$B=$_GET['B'];
$b=$_GET['b'];
echo ($h*($B+$b)/2*100)/100;	
?>