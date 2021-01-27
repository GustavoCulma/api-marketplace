<?php
$routesArray = explode('/', $_SERVER["REQUEST_URI"]);
$routesArray =array_filter($routesArray);
/*=============================================
= Cuando no se le hace ninguna peticion a la API=
=============================================*/
if (count($routesArray)==0) {
	$json=array(
		'status' =>404,
		'result' =>"Not found"
	);

	echo json_encode($json,http_response_code("$json[status]"));


	return;
} else {

	$json=array(
		'status' =>200,
		'result' =>"succes"
	);

	echo json_encode($json,http_response_code("$json[status]"));


	return;
}
?>
