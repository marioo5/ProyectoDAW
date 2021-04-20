<?php

$this->query('SELECT hora
from horasact 
where IdActividad=:actividad');
$this->bind(':actividad',$_POST['actividad']);
$rows = $this->resultSet();

print_r($rows);
die();
	
	$cadena="<label>SELECT 2 (paises)</label> 
    <select id='lista2' name='lista2'>";

	while ($ver=mysqli_fetch_row($rows)) {
		$cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[0]).'</option>';
	}

	echo  $cadena."</select>";
	

?>
