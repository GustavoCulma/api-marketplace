<?php 
class GetContoller
/*=============================================
=       peticion GET sin filtro              =
=============================================*/	
{
	public function getData($table)
	{
		$response = GetModel::getData($table);
		$json=array(
			'status' =>200,
			'result' =>$response
		);

		echo json_encode($json,http_response_code("$json[status]"));
		return;
	}
}
?>