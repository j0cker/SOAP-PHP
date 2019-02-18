<?php
//Importa las librerias a usar
require_once "nusoap/lib/nusoap.php";
include "Service.php";

//A manera de ejemplo, la informacion para hacer una transacción se deja hardcoded.
//Este bloque de asignaciones queda preparado para agregar los valores desde POST.
$request = new TransactionRequest();
$request->ProductId = 1;
$request->ClientId = 967837;
$request->StoreId = 1;
$request->PosId = 69423;
$request->ClerkCode = '04057084';
$request->Amount = 20;
$request->Reference1 = '8715494763';
$request->Reference2 = null;
$request->Reference3 = null;
$request->PosTransactionId = 100003;

$wsdl= "WSDL_TRM_Test.xml";

//Creacion del cliente.
$client = new nusoap_client($wsdl,'WSDL');

//Valida si esxite algun error en la creacion del cliente.
$error = $client->getError();
	if ($error) {
		print_r($client->response);
		print_r($client->getDebug());
		die();
   }
 //Se asigna el valor del timeout de la operacion "DoTransaction"
 //OJO..... PHP tiene una restricccion por default de 30 segundos como tiempo maximo de ejecicion, hay que modificar ese valor en el archivo php.ini_get
$client->response_timeout = 30;

//Se construye el arreglo de valores.
$param = array('transactionRequest' => array('ProductId'=>$request->ProductId, 'ClientId'=>$request->ClientId,
				'StoreId'=>$request->StoreId, 'PosId'=>$request->PosId, 'ClerkCode'=>$request->ClerkCode,
				'Amount' => $request->Amount, 'Reference1' => $request->Reference1, 'Reference2' => $request->Reference2,
				 'Reference3' => $request->Reference3, 'PosTransactionId' => $request->PosTransactionId));
				 

//Se crea el objeto que recibira la respuesta.				 
$response = new TransactionResponse();
$start = time();

try{
//Se realiza el DoTransaction
$response = $client->call('DoTransaction',array('parameters' => $param), '', '', false, true);
$timming =  time() - $start;

//muestra el resultado del DoTransaction siempre y cuando tenga 
	if ($response['DoTransactionResult']['ResponseCode'] == "000"){
		echo $response['DoTransactionResult']['ResponseCode']." ". $response['DoTransactionResult']['ResponseMessage']."<br />";
		echo "ID: ".$response['DoTransactionResult']['TransactionId']."  Fecha:". $response['DoTransactionResult']['TransactionDate']."<br />";
		echo "<strong> Autorización: ".$response['DoTransactionResult']['ProviderAuthorization']."  </strong> <br />". $response['DoTransactionResult']['LegalInformation']."<br />";
		}
	else if($response['DoTransactionResult']['ResponseCode'] != null)
		{
		echo $response['DoTransactionResult']['ResponseCode']." ". $response['DoTransactionResult']['ResponseMessage']."<br />";
	}


//Inicia el ciclo de chequeos
while($timming < 73 && $timming > 28){
	
	//Se configura nuevamente el timeout, siendo ahora de 7 segundos por cada check
	 $client->response_timeout = 7;
		
		//Se valida si existe respuesta. Si la tiene, muestra la informacion si no, continua.			
			$response = $client->call('CheckTransaction',array('parameters' => $param), '', '', false, true);
			
			$timming = $timming + 7;
			if($response != null){
			if ($response['CheckTransactionResult']['ResponseCode'] == "000"){
				echo $response['CheckTransactionResult']['ResponseCode']." ". $response['CheckTransactionResult']['ResponseMessage']."<br />";
				echo "ID: ".$response['CheckTransactionResult']['TransactionId']."  Fecha:". $response['CheckTransactionResult']['TransactionDate']."<br />";
				echo "<strong> Autorización: ".$response['CheckTransactionResult']['ProviderAuthorization']."  </strong> <br />". $response['CheckTransactionResult']['LegalInformation']."<br />";
				break;
				}
			else
				{
				echo $response['CheckTransactionResult']['ResponseCode']." ". $response['CheckTransactionResult']['ResponseMessage']."<br />";
				break;
				}
			}
		}
if($response == null){
	echo "<pre>
			<h4>La operacion no fue procesada correctamente</h4>
			<h2>TIME OUT</h2>
		</pre>";	
}		
}
catch (Exception $e){
	echo $e;
}


 ?>