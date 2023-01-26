# Swagger\Client\MustangControllerApi

All URIs are relative to *https://gw.usegroup.de:8243/mustang/v0.7.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cii2ubl**](MustangControllerApi.md#cii2ubl) | **POST** /mustang/cii2ubl | 
[**combineXML**](MustangControllerApi.md#combinexml) | **POST** /mustang/combineXML | 
[**error**](MustangControllerApi.md#error) | **GET** /mustang/error | 
[**extractFile**](MustangControllerApi.md#extractfile) | **POST** /mustang/extract | 
[**invoice2xml**](MustangControllerApi.md#invoice2xml) | **POST** /mustang/invoice2XML | 
[**parse**](MustangControllerApi.md#parse) | **POST** /mustang/parse | 
[**pdf**](MustangControllerApi.md#pdf) | **POST** /mustang/pdf | 
[**phive**](MustangControllerApi.md#phive) | **POST** /mustang/phive | 
[**ping**](MustangControllerApi.md#ping) | **GET** /mustang/ping | 
[**validateFile**](MustangControllerApi.md#validatefile) | **POST** /mustang/validate | 

# **cii2ubl**
> string cii2ubl($body)



Converts a UN/CEFACT CII XML file to UBL

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MustangControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = "body_example"; // string | 

try {
    $result = $apiInstance->cii2ubl($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MustangControllerApi->cii2ubl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**string**](../Model/string.md)|  |

### Return type

**string**

### Authorization

[default](../../README.md#default)

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **combineXML**
> string[] combineXML($format, $version, $profile, $input_file, $xml)



Combine PDF/A-1 file and custom XML to zf/fx PDF. Input PDF must be PDF/A-1, output PDF will be a ZUGFeRD/Factur-X PDF/A-3 file called invoice.pdf.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MustangControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$format = "format_example"; // string | 
$version = 56; // int | 
$profile = "profile_example"; // string | 
$input_file = "input_file_example"; // string | 
$xml = "xml_example"; // string | 

try {
    $result = $apiInstance->combineXML($format, $version, $profile, $input_file, $xml);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MustangControllerApi->combineXML: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**|  |
 **version** | **int**|  |
 **profile** | **string**|  |
 **input_file** | **string****string**|  | [optional]
 **xml** | **string**|  | [optional]

### Return type

**string[]**

### Authorization

[default](../../README.md#default)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **error**
> string error()



Error: Intentionally provoke an error

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MustangControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->error();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MustangControllerApi->error: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string**

### Authorization

[default](../../README.md#default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **extractFile**
> string extractFile($in_file)



Extracts XML from a zf/fx PDF. Input PDF must be ZUGFeRD or Factur-X

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MustangControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$in_file = "in_file_example"; // string | 

try {
    $result = $apiInstance->extractFile($in_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MustangControllerApi->extractFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **in_file** | **string****string**|  | [optional]

### Return type

**string**

### Authorization

[default](../../README.md#default)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoice2xml**
> string invoice2xml($body, $standard, $profile, $version)



Invoice class to XML. Input PDF must be PDF/A-1, output PDF will be a ZUGFeRD/Factur-X PDF/A-3 file called invoice.pdf.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MustangControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Invoice(); // \Swagger\Client\Model\Invoice | 
$standard = "standard_example"; // string | 
$profile = "profile_example"; // string | 
$version = 56; // int | 

try {
    $result = $apiInstance->invoice2xml($body, $standard, $profile, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MustangControllerApi->invoice2xml: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Invoice**](../Model/Invoice.md)|  |
 **standard** | **string**|  |
 **profile** | **string**|  |
 **version** | **int**|  |

### Return type

**string**

### Authorization

[default](../../README.md#default)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **parse**
> \Swagger\Client\Model\Invoice parse($input_file)



Reads a Factur-X file into an invoice object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MustangControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file = "input_file_example"; // string | 

try {
    $result = $apiInstance->parse($input_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MustangControllerApi->parse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file** | **string****string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Invoice**](../Model/Invoice.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pdf**
> string[] pdf($in_file)



Converts any PDF file into PDF/A-1. Input PDF may be any ordinary PDF or any PDF/A

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MustangControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$in_file = "in_file_example"; // string | 

try {
    $result = $apiInstance->pdf($in_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MustangControllerApi->pdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **in_file** | **string****string**|  | [optional]

### Return type

**string[]**

### Authorization

[default](../../README.md#default)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **phive**
> string phive($vesid, $input_file)



Returns a XRechnung validation string

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MustangControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vesid = "vesid_example"; // string | 
$input_file = "input_file_example"; // string | 

try {
    $result = $apiInstance->phive($vesid, $input_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MustangControllerApi->phive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vesid** | **string**|  |
 **input_file** | **string****string**|  | [optional]

### Return type

**string**

### Authorization

[default](../../README.md#default)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ping**
> string ping($username)



Healthcheck. Just request a ping, will respond with a 'pong'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MustangControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = "username_example"; // string | 

try {
    $result = $apiInstance->ping($username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MustangControllerApi->ping: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**|  | [optional]

### Return type

**string**

### Authorization

[default](../../README.md#default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validateFile**
> string validateFile($in_file)



Checks a PDF or XML file for syntactical and mathematical correctness. Input file must be a PDF/A file (Factur-X, ZUGFeRD) or a XML file (Factur-X, ZUGFeRD, XRechnung(CII)), output will be a XML report

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MustangControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$in_file = "in_file_example"; // string | 

try {
    $result = $apiInstance->validateFile($in_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MustangControllerApi->validateFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **in_file** | **string****string**|  | [optional]

### Return type

**string**

### Authorization

[default](../../README.md#default)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

