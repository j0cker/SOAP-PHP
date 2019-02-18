<?php
class DoTransaction {
  public $transactionRequest; // TransactionRequest
}

class TransactionRequest {
  public $ProductId; // int
  public $ClientId; // int
  public $StoreId; // int
  public $PosId; // int
  public $ClerkCode; // string
  public $Amount; // double
  public $Reference1; // string
  public $Reference2; // string
  public $Reference3; // string
  public $PosTransactionId; // int
}

class DoTransactionResponse {
  public $DoTransactionResult; // TransactionResponse
}

class TransactionResponse {
  public $ResponseCode; // string
  public $ResponseMessage; // string
  public $TransactionId; // int
  public $TransactionDate; // dateTime
  public $ProviderAuthorization; // string
  public $LegalInformation; // string
  public $AditionalInfo1; // string
  public $AditionalInfo2; // string
  public $AditionalInfo3; // string
  public $AditionalInfo4; // string
  public $AditionalInfo5; // string
  public $AditionalInfo6; // string
}

class CancelTransaction {
  public $transactionRequest; // TransactionRequest
}

class CancelTransactionResponse {
  public $CancelTransactionResult; // TransactionResponse
}

class CheckTransaction {
  public $transactionRequest; // TransactionRequest
}

class CheckTransactionResponse {
  public $CheckTransactionResult; // TransactionResponse
}

class GetTransactionFromPeriod {
  public $dtStartyyyyMMdd; // string
  public $dtEndyyyyMMdd; // string
  public $clientId; // string
  public $storeId; // string
  public $posid; // string
  public $productcategory; // string
}

class GetTransactionFromPeriodResponse {
  public $GetTransactionFromPeriodResult; // ArrayOfTransactionsSales
}

class TransactionsSales {
  public $TransactionId; // int
  public $ClientId; // int
  public $PosId; // int
  public $TransactionDate; // dateTime
  public $ProductName; // string
  public $CarrierName; // string
  public $Amount; // float
  public $TotalCharge; // float
  public $Authorization; // string
  public $ResponseCode; // string
  public $InternalResponseMessage; // string
  public $POSTransactionId; // int
  public $Reference1; // string
  public $Reference2; // string
  public $Reference3; // string
  public $StoreName; // string
  public $CashierFirsName; // string
  public $CashierLastName; // string
  public $ClientUtility; // float
  public $StoreId; // int
  public $ProductCategoryId; // int
}

class GetAllBalances {
  public $credentials; // Credentials
}

class Credentials {
  public $ClientId; // int
  public $StoreId; // int
  public $PosId; // int
  public $ClerkCode; // string
}

class GetAllBalancesResponse {
  public $GetAllBalancesResult; // string
}

class GetBalancebyCarrierId {
  public $credentials; // Credentials
  public $CarrierId; // int
}

class GetBalancebyCarrierIdResponse {
  public $GetBalancebyCarrierIdResult; // string
}

class GetAllProductList {
  public $credentials; // Credentials
}

class GetAllProductListResponse {
  public $GetAllProductListResult; // string
}

class GetAllProductExtendList {
  public $credentials; // Credentials
}

class GetAllProductExtendListResponse {
  public $GetAllProductExtendListResult; // ArrayOfProductExtended
}

class ProductExtended {
  public $ProductId; // int
  public $ProductName; // string
  public $Reference1; // string
  public $Reference2; // string
  public $Reference3; // string
  public $LenghtRef1; // byte
  public $LenghtRef2; // byte
  public $LenghtRef3; // byte
  public $RegexRef1; // string
  public $RegexRef2; // string
  public $RegexRef3; // string
  public $ValidateRef1; // boolean
  public $ValidateRef2; // boolean
  public $ValidateRef3; // boolean
  public $ValidateCharRef1; // char
  public $ValidateCharRef2; // char
  public $ValidateCharRef3; // char
  public $ExtraInfoLabel1; // string
  public $ExtraInfoContent1; // string
  public $ExtraInfoLabel2; // string
  public $ExtraInfoContent2; // string
  public $ExtraInfoLabel3; // string
  public $ExtraInfoContent3; // string
  public $ExtraInfoLabel4; // string
  public $ExtraInfoContent4; // string
  public $ExtraInfoLabel5; // string
  public $ExtraInfoContent5; // string
  public $Amount; // float
  public $FixAmount; // boolean
  public $ClientUtility; // float
  public $ExtraChargeEndClient; // float
  public $OrderPriority; // byte
  public $CategoryId; // byte
  public $ProductInfo; // string
  public $ProductImageUrl; // string
  public $Include_Tax; // boolean
  public $IsBillable; // boolean
  public $IsRePrintable; // boolean
  public $LastUpdatedDate; // dateTime
  public $TotalPaymentVisible; // boolean
}

class GetProductsByCarrier {
  public $credentials; // Credentials
  public $CarrierId; // int
}

class GetProductsByCarrierResponse {
  public $GetProductsByCarrierResult; // string
}

class GetProductsByCategoryId {
  public $credentials; // Credentials
  public $CategoryId; // int
}

class GetProductsByCategoryIdResponse {
  public $GetProductsByCategoryIdResult; // string
}

class SubmitPayNotification {
  public $clientId; // string
  public $storeId; // string
  public $clerkCode; // string
  public $amount; // string
  public $bank; // string
  public $documentNumber; // string
  public $documentDateyyyyMMdd; // string
  public $originAccountNumber; // string
  public $paymentMethod; // string
  public $carriername; // string
}

class SubmitPayNotificationResponse {
  public $SubmitPayNotificationResult; // PayNotificationResult
}

class PayNotificationResult {
  public $ResponseCode; // string
  public $PaymentId; // string
  public $ResponseMessage; // string
  public $OtherInfo; // string
}

class PaymentsStatus {
  public $clientId; // string
  public $storeId; // string
  public $clerkCode; // string
}

class PaymentsStatusResponse {
  public $PaymentsStatusResult; // ArrayOfPaymentsInfo
}

class PaymentsInfo {
}

class GetAvailablePaymentMethods {
}

class GetAvailablePaymentMethodsResponse {
  public $GetAvailablePaymentMethodsResult; // ArrayOfString
}

class GetAvailableBanks {
}

class GetAvailableBanksResponse {
  public $GetAvailableBanksResult; // ArrayOfString
}

class GetAvailableCarriers {
}

class GetAvailableCarriersResponse {
  public $GetAvailableCarriersResult; // ArrayOfCarrier
}

class Carrier {
  public $CarrierId; // int
  public $CarrierName; // string
}

class GetAvailableCarriersbyCategory {
  public $CategoryId; // int
}

class GetAvailableCarriersbyCategoryResponse {
  public $GetAvailableCarriersbyCategoryResult; // ArrayOfCarrier
}

class GetCarriersSMSMarketing {
}

class GetCarriersSMSMarketingResponse {
  public $GetCarriersSMSMarketingResult; // ArrayOfCarrier
}

class InsertSuscriberSMSMarketing {
  public $credentials; // Credentials
  public $phoneNumber; // string
  public $carriername; // string
}

class InsertSuscriberSMSMarketingResponse {
  public $InsertSuscriberSMSMarketingResult; // TransactionResponse
}

class UnSuscribeSMSMarketing {
  public $credentials; // Credentials
  public $phoneNumber; // string
  public $comments; // string
}

class UnSuscribeSMSMarketingResponse {
  public $UnSuscribeSMSMarketingResult; // TransactionResponse
}

class CheckSuscriberSMSMarketing {
  public $credentials; // Credentials
  public $phoneNumber; // string
}

class CheckSuscriberSMSMarketingResponse {
  public $CheckSuscriberSMSMarketingResult; // boolean
}

class SendSMS {
  public $username; // string
  public $password; // string
  public $suscribers; // ArrayOfSuscriberinfo
  public $storeid; // int
  public $message; // string
  public $messagetype; // int
}

class Suscriberinfo {
  public $MessageCode; // string
  public $Suscriberid; // long
  public $PhoneNumber; // string
  public $Status; // string
}

class SendSMSResponse {
  public $SendSMSResult; // SMS_SendResponse
}

class SMS_SendResponse {
  public $ResponseCode; // string
  public $ResponseMessage; // string
  public $SmsSuscribers; // ArrayOfSuscriberinfo
}

class GetActiveSuscribers {
  public $credentials; // Credentials
}

class GetActiveSuscribersResponse {
  public $GetActiveSuscribersResult; // ArrayOfSMS_Suscriber
}

class SMS_Suscriber {
  public $SuscriberId; // long
  public $SusciberPhone; // string
  public $MessageStatus; // int
  public $ResponseCode; // string
  public $ResponseMessage; // string
}

class ValidateCredentials {
  public $credentials; // Credentials
}

class ValidateCredentialsResponse {
  public $ValidateCredentialsResult; // boolean
}

class ChangeClerkCode {
  public $ClientId; // long
  public $StoreId; // int
  public $Clerk_Old; // string
  public $Clerk_New; // string
}

class ChangeClerkCodeResponse {
  public $ChangeClerkCodeResult; // TransactionResponse
}

class char {
}


/**
 * Service class
 * 
 *  
 * 
 * @author    {author}
 * @copyright {copyright}
 * @package   {package}
 */
class Service extends SoapClient {

  private static $classmap = array(
									'location' => 'http://wspruebas.tiemporealmovil.mx/plat25t/WebService/Service.asmx',
									'uri' => 'http://productsandServices.com/',
                                    'DoTransaction' => 'DoTransaction',
                                    'TransactionRequest' => 'TransactionRequest',
                                    'DoTransactionResponse' => 'DoTransactionResponse',
                                    'TransactionResponse' => 'TransactionResponse',
                                    'CancelTransaction' => 'CancelTransaction',
                                    'CancelTransactionResponse' => 'CancelTransactionResponse',
                                    'CheckTransaction' => 'CheckTransaction',
                                    'CheckTransactionResponse' => 'CheckTransactionResponse',
                                    'GetTransactionFromPeriod' => 'GetTransactionFromPeriod',
                                    'GetTransactionFromPeriodResponse' => 'GetTransactionFromPeriodResponse',
                                    'TransactionsSales' => 'TransactionsSales',
                                    'GetAllBalances' => 'GetAllBalances',
                                    'Credentials' => 'Credentials',
                                    'GetAllBalancesResponse' => 'GetAllBalancesResponse',
                                    'GetBalancebyCarrierId' => 'GetBalancebyCarrierId',
                                    'GetBalancebyCarrierIdResponse' => 'GetBalancebyCarrierIdResponse',
                                    'GetAllProductList' => 'GetAllProductList',
                                    'GetAllProductListResponse' => 'GetAllProductListResponse',
                                    'GetAllProductExtendList' => 'GetAllProductExtendList',
                                    'GetAllProductExtendListResponse' => 'GetAllProductExtendListResponse',
                                    'ProductExtended' => 'ProductExtended',
                                    'GetProductsByCarrier' => 'GetProductsByCarrier',
                                    'GetProductsByCarrierResponse' => 'GetProductsByCarrierResponse',
                                    'GetProductsByCategoryId' => 'GetProductsByCategoryId',
                                    'GetProductsByCategoryIdResponse' => 'GetProductsByCategoryIdResponse',
                                    'SubmitPayNotification' => 'SubmitPayNotification',
                                    'SubmitPayNotificationResponse' => 'SubmitPayNotificationResponse',
                                    'PayNotificationResult' => 'PayNotificationResult',
                                    'PaymentsStatus' => 'PaymentsStatus',
                                    'PaymentsStatusResponse' => 'PaymentsStatusResponse',
                                    'PaymentsInfo' => 'PaymentsInfo',
                                    'GetAvailablePaymentMethods' => 'GetAvailablePaymentMethods',
                                    'GetAvailablePaymentMethodsResponse' => 'GetAvailablePaymentMethodsResponse',
                                    'GetAvailableBanks' => 'GetAvailableBanks',
                                    'GetAvailableBanksResponse' => 'GetAvailableBanksResponse',
                                    'GetAvailableCarriers' => 'GetAvailableCarriers',
                                    'GetAvailableCarriersResponse' => 'GetAvailableCarriersResponse',
                                    'Carrier' => 'Carrier',
                                    'GetAvailableCarriersbyCategory' => 'GetAvailableCarriersbyCategory',
                                    'GetAvailableCarriersbyCategoryResponse' => 'GetAvailableCarriersbyCategoryResponse',
                                    'GetCarriersSMSMarketing' => 'GetCarriersSMSMarketing',
                                    'GetCarriersSMSMarketingResponse' => 'GetCarriersSMSMarketingResponse',
                                    'InsertSuscriberSMSMarketing' => 'InsertSuscriberSMSMarketing',
                                    'InsertSuscriberSMSMarketingResponse' => 'InsertSuscriberSMSMarketingResponse',
                                    'UnSuscribeSMSMarketing' => 'UnSuscribeSMSMarketing',
                                    'UnSuscribeSMSMarketingResponse' => 'UnSuscribeSMSMarketingResponse',
                                    'CheckSuscriberSMSMarketing' => 'CheckSuscriberSMSMarketing',
                                    'CheckSuscriberSMSMarketingResponse' => 'CheckSuscriberSMSMarketingResponse',
                                    'SendSMS' => 'SendSMS',
                                    'Suscriberinfo' => 'Suscriberinfo',
                                    'SendSMSResponse' => 'SendSMSResponse',
                                    'SMS_SendResponse' => 'SMS_SendResponse',
                                    'GetActiveSuscribers' => 'GetActiveSuscribers',
                                    'GetActiveSuscribersResponse' => 'GetActiveSuscribersResponse',
                                    'SMS_Suscriber' => 'SMS_Suscriber',
                                    'ValidateCredentials' => 'ValidateCredentials',
                                    'ValidateCredentialsResponse' => 'ValidateCredentialsResponse',
                                    'ChangeClerkCode' => 'ChangeClerkCode',
                                    'ChangeClerkCodeResponse' => 'ChangeClerkCodeResponse',
                                    'char' => 'char',
									
                                   );

  public function Service($wsdl = "https://ws.tiemporealmovil.mx/plat25/WebService/Service.asmx", $options = array()) {
    foreach(self::$classmap as $key => $value) {
      if(!isset($options['classmap'][$key])) {
        $options['classmap'][$key] = $value;
      }
    }
    parent::__construct($wsdl, $options);
  }

  /**
   *  
   *
   * @param DoTransaction $parameters
   * @return DoTransactionResponse
   */
  public function DoTransaction(DoTransaction $parameters) {
    return $this->__soapCall('DoTransaction', array('credentials'=>$parameters),       array(
            'uri' => 'http://productsandServices.com/',
            'soapaction' => 'http://productsandServices.com/DoTransaction'
           )
      );
  }

  /**
   *  
   *
   * @param CancelTransaction $parameters
   * @return CancelTransactionResponse
   */
  public function CancelTransaction(CancelTransaction $parameters) {
    return $this->__soapCall('CancelTransaction', array($parameters),       array(
            'uri' => 'http://productsandServices.com/',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param CheckTransaction $parameters
   * @return CheckTransactionResponse
   */
  public function CheckTransaction(CheckTransaction $parameters) {
    return $this->__soapCall('CheckTransaction', array($parameters),       array(
            'uri' => 'http://productsandServices.com/',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param GetTransactionFromPeriod $parameters
   * @return GetTransactionFromPeriodResponse
   */
  public function GetTransactionFromPeriod(GetTransactionFromPeriod $parameters) {
    return $this->__soapCall('GetTransactionFromPeriod', array($parameters),       array(
            'uri' => 'http://productsandServices.com/',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param GetAllBalances $parameters
   * @return GetAllBalancesResponse
   */
  public function GetAllBalances(GetAllBalances $parameters) {
    return $this->__soapCall('GetAllBalances', array($parameters),       array(
            'uri' => 'http://productsandServices.com/',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param GetBalancebyCarrierId $parameters
   * @return GetBalancebyCarrierIdResponse
   */
  public function GetBalancebyCarrierId(GetBalancebyCarrierId $parameters) {
    return $this->__soapCall('GetBalancebyCarrierId', array($parameters),       array(
            'uri' => 'http://productsandServices.com/',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param GetAllProductList $parameters
   * @return GetAllProductListResponse
   */
  public function GetAllProductList(GetAllProductList $parameters) {
    return $this->__soapCall('GetAllProductList', array($parameters),       array(
            'uri' => 'http://productsandServices.com/',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param GetAllProductExtendList $parameters
   * @return GetAllProductExtendListResponse
   */
  public function GetAllProductExtendList(GetAllProductExtendList $parameters) {
    return $this->__soapCall('GetAllProductExtendList', array($parameters),       array(
            'uri' => 'http://productsandServices.com/',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param GetProductsByCarrier $parameters
   * @return GetProductsByCarrierResponse
   */
  public function GetProductsByCarrier(GetProductsByCarrier $parameters) {
    return $this->__soapCall('GetProductsByCarrier', array($parameters),       array(
            'uri' => 'http://productsandServices.com/',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param GetProductsByCategoryId $parameters
   * @return GetProductsByCategoryIdResponse
   */
  public function GetProductsByCategoryId(GetProductsByCategoryId $parameters) {
    return $this->__soapCall('GetProductsByCategoryId', array($parameters),       array(
            'uri' => 'http://productsandServices.com/',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param SubmitPayNotification $parameters
   * @return SubmitPayNotificationResponse
   */
  public function SubmitPayNotification(SubmitPayNotification $parameters) {
    return $this->__soapCall('SubmitPayNotification', array($parameters),       array(
            'uri' => 'http://productsandServices.com/',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param PaymentsStatus $parameters
   * @return PaymentsStatusResponse
   */
  public function PaymentsStatus(PaymentsStatus $parameters) {
    return $this->__soapCall('PaymentsStatus', array($parameters),       array(
            'uri' => 'http://productsandServices.com/',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param GetAvailablePaymentMethods $parameters
   * @return GetAvailablePaymentMethodsResponse
   */
  public function GetAvailablePaymentMethods(GetAvailablePaymentMethods $parameters) {
    return $this->__soapCall('GetAvailablePaymentMethods', array($parameters),       array(
            'uri' => 'http://productsandServices.com/',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param GetAvailableBanks $parameters
   * @return GetAvailableBanksResponse
   */
  public function GetAvailableBanks(GetAvailableBanks $parameters) {
    return $this->__soapCall('GetAvailableBanks', array($parameters),       array(
            'uri' => 'http://productsandServices.com/',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param GetAvailableCarriers $parameters
   * @return GetAvailableCarriersResponse
   */
  public function GetAvailableCarriers(GetAvailableCarriers $parameters) {
    return $this->__soapCall('GetAvailableCarriers', array($parameters),       array(
            'uri' => 'http://productsandServices.com/',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param GetAvailableCarriersbyCategory $parameters
   * @return GetAvailableCarriersbyCategoryResponse
   */
  public function GetAvailableCarriersbyCategory(GetAvailableCarriersbyCategory $parameters) {
    return $this->__soapCall('GetAvailableCarriersbyCategory', array($parameters),       array(
            'uri' => 'http://productsandServices.com/',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param GetCarriersSMSMarketing $parameters
   * @return GetCarriersSMSMarketingResponse
   */
  public function GetCarriersSMSMarketing(GetCarriersSMSMarketing $parameters) {
    return $this->__soapCall('GetCarriersSMSMarketing', array($parameters),       array(
            'uri' => 'http://productsandServices.com/',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param InsertSuscriberSMSMarketing $parameters
   * @return InsertSuscriberSMSMarketingResponse
   */
  public function InsertSuscriberSMSMarketing(InsertSuscriberSMSMarketing $parameters) {
    return $this->__soapCall('InsertSuscriberSMSMarketing', array($parameters),       array(
            'uri' => 'http://productsandServices.com/',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param UnSuscribeSMSMarketing $parameters
   * @return UnSuscribeSMSMarketingResponse
   */
  public function UnSuscribeSMSMarketing(UnSuscribeSMSMarketing $parameters) {
    return $this->__soapCall('UnSuscribeSMSMarketing', array($parameters),       array(
            'uri' => 'http://productsandServices.com/',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param CheckSuscriberSMSMarketing $parameters
   * @return CheckSuscriberSMSMarketingResponse
   */
  public function CheckSuscriberSMSMarketing(CheckSuscriberSMSMarketing $parameters) {
    return $this->__soapCall('CheckSuscriberSMSMarketing', array($parameters),       array(
            'uri' => 'http://productsandServices.com/',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param SendSMS $parameters
   * @return SendSMSResponse
   */
  public function SendSMS(SendSMS $parameters) {
    return $this->__soapCall('SendSMS', array($parameters),       array(
            'uri' => 'http://productsandServices.com/',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param GetActiveSuscribers $parameters
   * @return GetActiveSuscribersResponse
   */
  public function GetActiveSuscribers(GetActiveSuscribers $parameters) {
    return $this->__soapCall('GetActiveSuscribers', array($parameters),       array(
            'uri' => 'http://productsandServices.com/',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param ValidateCredentials $parameters
   * @return ValidateCredentialsResponse
   */
  public function ValidateCredentials(ValidateCredentials $parameters) {
    return $this->__soapCall('ValidateCredentials', array($parameters),       array(
            'uri' => 'http://productsandServices.com/',
            'soapaction' => 'http://productsandServices.com/ValidateCredentials'
           )
      );
  }

  /**
   *  
   *
   * @param ChangeClerkCode $parameters
   * @return ChangeClerkCodeResponse
   */
  public function ChangeClerkCode(ChangeClerkCode $parameters) {
    return $this->__soapCall('ChangeClerkCode', array($parameters),       array(
            'uri' => 'http://productsandServices.com/',
            'soapaction' => ''
           )
      );
  }

}

?>
