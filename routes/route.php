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
/*=============================================
= Cuando se hace una peticion GET            =
=============================================*/
if (count($routesArray)==1 &&
	isset($_SERVER["REQUEST_METHOD"])&&
	$_SERVER["REQUEST_METHOD"]=="GET"){

	$response = new GetContoller();
	$response->getData($routesArray[1]);

}
/*=============================================
= Cuando se hace una peticion POST            =
=============================================*/
if (count($routesArray)==1 &&
	isset($_SERVER["REQUEST_METHOD"])&&
	$_SERVER["REQUEST_METHOD"]=="POST"){
	$json=array(
		'status' =>200,
		'result' =>"POST"
	);

echo json_encode($json,http_response_code("$json[status]"));
return;
}
/*=============================================
= Cuando se hace una peticion PATCH            =
=============================================*/
if (count($routesArray)==1 &&
	isset($_SERVER["REQUEST_METHOD"])&&
	$_SERVER["REQUEST_METHOD"]=="PATCH"){
	$json=array(
		'status' =>200,
		'result' =>"PATCH"
	);
echo json_encode($json,http_response_code("$json[status]"));
return;
}
/*=============================================
= Cuando se hace una peticion PUT            =
=============================================*/
if (count($routesArray)==1 &&
	isset($_SERVER["REQUEST_METHOD"])&&
	$_SERVER["REQUEST_METHOD"]=="PUT"){
	$json=array(
		'status' =>200,
		'result' =>"PUT"
	);
echo json_encode($json,http_response_code("$json[status]"));
return;
}
/*=============================================
= Cuando se hace una peticion DELETE            =
=============================================*/
if (count($routesArray)==1 &&
	isset($_SERVER["REQUEST_METHOD"])&&
	$_SERVER["REQUEST_METHOD"]=="DELETE"){
	$json=array(
		'status' =>200,
		'result' =>"DELETE"
	);
echo json_encode($json,http_response_code("$json[status]"));
return;
}
}
?>
