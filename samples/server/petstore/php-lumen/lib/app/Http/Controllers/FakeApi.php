<?php

/**
 * OpenAPI Petstore
 * This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\
 * PHP version 7.2.5
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

class FakeApi extends Controller
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * Operation testClientModel
     *
     * To test \"client\" model.
     *
     *
     * @return Http response
     */
    public function testClientModel()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        if (!isset($input['client'])) {
            throw new \InvalidArgumentException('Missing the required parameter $client when calling testClientModel');
        }
        $client = $input['client'];


        return response('How about implementing testClientModel as a patch method ?');
    }
    /**
     * Operation testEndpointParameters
     *
     * Fake endpoint for testing various parameters 假端點 偽のエンドポイント 가짜 엔드 포인트.
     *
     *
     * @return Http response
     */
    public function testEndpointParameters()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        if (!isset($input['number'])) {
            throw new \InvalidArgumentException('Missing the required parameter $number when calling testEndpointParameters');
        }
        if ($input['number'] > 543.2) {
            throw new \InvalidArgumentException('invalid value for $number when calling FakeApi.testEndpointParameters, must be smaller than or equal to 543.2.');
        }
        if ($input['number'] < 32.1) {
            throw new \InvalidArgumentException('invalid value for $number when calling FakeApi.testEndpointParameters, must be bigger than or equal to 32.1.');
        }
        $number = $input['number'];

        if (!isset($input['double'])) {
            throw new \InvalidArgumentException('Missing the required parameter $double when calling testEndpointParameters');
        }
        if ($input['double'] > 123.4) {
            throw new \InvalidArgumentException('invalid value for $double when calling FakeApi.testEndpointParameters, must be smaller than or equal to 123.4.');
        }
        if ($input['double'] < 67.8) {
            throw new \InvalidArgumentException('invalid value for $double when calling FakeApi.testEndpointParameters, must be bigger than or equal to 67.8.');
        }
        $double = $input['double'];

        if (!isset($input['pattern_without_delimiter'])) {
            throw new \InvalidArgumentException('Missing the required parameter $pattern_without_delimiter when calling testEndpointParameters');
        }
        if (!preg_match("/^[A-Z].*/", $input['pattern_without_delimiter'])) {
            throw new \InvalidArgumentException('invalid value for $pattern_without_delimiter when calling FakeApi.testEndpointParameters, must conform to the pattern /^[A-Z].*/.');
        }
        $pattern_without_delimiter = $input['pattern_without_delimiter'];

        if (!isset($input['byte'])) {
            throw new \InvalidArgumentException('Missing the required parameter $byte when calling testEndpointParameters');
        }
        $byte = $input['byte'];

        if ($input['integer'] > 100) {
            throw new \InvalidArgumentException('invalid value for $integer when calling FakeApi.testEndpointParameters, must be smaller than or equal to 100.');
        }
        if ($input['integer'] < 10) {
            throw new \InvalidArgumentException('invalid value for $integer when calling FakeApi.testEndpointParameters, must be bigger than or equal to 10.');
        }
        $integer = $input['integer'];

        if ($input['int32'] > 200) {
            throw new \InvalidArgumentException('invalid value for $int32 when calling FakeApi.testEndpointParameters, must be smaller than or equal to 200.');
        }
        if ($input['int32'] < 20) {
            throw new \InvalidArgumentException('invalid value for $int32 when calling FakeApi.testEndpointParameters, must be bigger than or equal to 20.');
        }
        $int32 = $input['int32'];

        $int64 = $input['int64'];

        if ($input['float'] > 987.6) {
            throw new \InvalidArgumentException('invalid value for $float when calling FakeApi.testEndpointParameters, must be smaller than or equal to 987.6.');
        }
        $float = $input['float'];

        if (!preg_match("/[a-z]/i", $input['string'])) {
            throw new \InvalidArgumentException('invalid value for $string when calling FakeApi.testEndpointParameters, must conform to the pattern /[a-z]/i.');
        }
        $string = $input['string'];

        $binary = $input['binary'];

        $date = $input['date'];

        $date_time = $input['date_time'];

        if (strlen($input['password']) > 64) {
            throw new \InvalidArgumentException('invalid length for $password when calling FakeApi.testEndpointParameters, must be smaller than or equal to 64.');
        }
        if (strlen($input['password']) < 10) {
            throw new \InvalidArgumentException('invalid length for $password when calling FakeApi.testEndpointParameters, must be bigger than or equal to 10.');
        }
        $password = $input['password'];

        $callback = $input['callback'];


        return response('How about implementing testEndpointParameters as a post method ?');
    }
    /**
     * Operation testEnumParameters
     *
     * To test enum parameters.
     *
     *
     * @return Http response
     */
    public function testEnumParameters()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        $enum_header_string_array = $input['enum_header_string_array'];

        $enum_header_string = $input['enum_header_string'];

        $enum_query_string_array = $input['enum_query_string_array'];

        $enum_query_string = $input['enum_query_string'];

        $enum_query_integer = $input['enum_query_integer'];

        $enum_query_double = $input['enum_query_double'];

        $enum_form_string_array = $input['enum_form_string_array'];

        $enum_form_string = $input['enum_form_string'];


        return response('How about implementing testEnumParameters as a get method ?');
    }
    /**
     * Operation testGroupParameters
     *
     * Fake endpoint to test group parameters (optional).
     *
     *
     * @return Http response
     */
    public function testGroupParameters()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        if (!isset($input['required_string_group'])) {
            throw new \InvalidArgumentException('Missing the required parameter $required_string_group when calling testGroupParameters');
        }
        $required_string_group = $input['required_string_group'];

        if (!isset($input['required_boolean_group'])) {
            throw new \InvalidArgumentException('Missing the required parameter $required_boolean_group when calling testGroupParameters');
        }
        $required_boolean_group = $input['required_boolean_group'];

        if (!isset($input['required_int64_group'])) {
            throw new \InvalidArgumentException('Missing the required parameter $required_int64_group when calling testGroupParameters');
        }
        $required_int64_group = $input['required_int64_group'];

        $string_group = $input['string_group'];

        $boolean_group = $input['boolean_group'];

        $int64_group = $input['int64_group'];


        return response('How about implementing testGroupParameters as a delete method ?');
    }
    /**
     * Operation testBodyWithBinary
     *
     * .
     *
     *
     * @return Http response
     */
    public function testBodyWithBinary()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        if (!isset($input['body'])) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling testBodyWithBinary');
        }
        $body = $input['body'];


        return response('How about implementing testBodyWithBinary as a put method ?');
    }
    /**
     * Operation testBodyWithFileSchema
     *
     * .
     *
     *
     * @return Http response
     */
    public function testBodyWithFileSchema()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        if (!isset($input['file_schema_test_class'])) {
            throw new \InvalidArgumentException('Missing the required parameter $file_schema_test_class when calling testBodyWithFileSchema');
        }
        $file_schema_test_class = $input['file_schema_test_class'];


        return response('How about implementing testBodyWithFileSchema as a put method ?');
    }
    /**
     * Operation testBodyWithQueryParams
     *
     * .
     *
     *
     * @return Http response
     */
    public function testBodyWithQueryParams()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        if (!isset($input['query'])) {
            throw new \InvalidArgumentException('Missing the required parameter $query when calling testBodyWithQueryParams');
        }
        $query = $input['query'];

        if (!isset($input['user'])) {
            throw new \InvalidArgumentException('Missing the required parameter $user when calling testBodyWithQueryParams');
        }
        $user = $input['user'];


        return response('How about implementing testBodyWithQueryParams as a put method ?');
    }
    /**
     * Operation fakeHealthGet
     *
     * Health check endpoint.
     *
     *
     * @return Http response
     */
    public function fakeHealthGet()
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing fakeHealthGet as a get method ?');
    }
    /**
     * Operation fakeHttpSignatureTest
     *
     * test http signature authentication.
     *
     *
     * @return Http response
     */
    public function fakeHttpSignatureTest()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        if (!isset($input['pet'])) {
            throw new \InvalidArgumentException('Missing the required parameter $pet when calling fakeHttpSignatureTest');
        }
        $pet = $input['pet'];

        $query_1 = $input['query_1'];

        $header_1 = $input['header_1'];


        return response('How about implementing fakeHttpSignatureTest as a get method ?');
    }
    /**
     * Operation testInlineAdditionalProperties
     *
     * test inline additionalProperties.
     *
     *
     * @return Http response
     */
    public function testInlineAdditionalProperties()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        if (!isset($input['request_body'])) {
            throw new \InvalidArgumentException('Missing the required parameter $request_body when calling testInlineAdditionalProperties');
        }
        $request_body = $input['request_body'];


        return response('How about implementing testInlineAdditionalProperties as a post method ?');
    }
    /**
     * Operation testJsonFormData
     *
     * test json serialization of form data.
     *
     *
     * @return Http response
     */
    public function testJsonFormData()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        if (!isset($input['param'])) {
            throw new \InvalidArgumentException('Missing the required parameter $param when calling testJsonFormData');
        }
        $param = $input['param'];

        if (!isset($input['param2'])) {
            throw new \InvalidArgumentException('Missing the required parameter $param2 when calling testJsonFormData');
        }
        $param2 = $input['param2'];


        return response('How about implementing testJsonFormData as a get method ?');
    }
    /**
     * Operation fakeOuterBooleanSerialize
     *
     * .
     *
     *
     * @return Http response
     */
    public function fakeOuterBooleanSerialize()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        $body = $input['body'];


        return response('How about implementing fakeOuterBooleanSerialize as a post method ?');
    }
    /**
     * Operation fakeOuterCompositeSerialize
     *
     * .
     *
     *
     * @return Http response
     */
    public function fakeOuterCompositeSerialize()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        $outer_composite = $input['outer_composite'];


        return response('How about implementing fakeOuterCompositeSerialize as a post method ?');
    }
    /**
     * Operation fakeOuterNumberSerialize
     *
     * .
     *
     *
     * @return Http response
     */
    public function fakeOuterNumberSerialize()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        $body = $input['body'];


        return response('How about implementing fakeOuterNumberSerialize as a post method ?');
    }
    /**
     * Operation fakeOuterStringSerialize
     *
     * .
     *
     *
     * @return Http response
     */
    public function fakeOuterStringSerialize()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        $body = $input['body'];


        return response('How about implementing fakeOuterStringSerialize as a post method ?');
    }
    /**
     * Operation fakePropertyEnumIntegerSerialize
     *
     * .
     *
     *
     * @return Http response
     */
    public function fakePropertyEnumIntegerSerialize()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        if (!isset($input['outer_object_with_enum_property'])) {
            throw new \InvalidArgumentException('Missing the required parameter $outer_object_with_enum_property when calling fakePropertyEnumIntegerSerialize');
        }
        $outer_object_with_enum_property = $input['outer_object_with_enum_property'];


        return response('How about implementing fakePropertyEnumIntegerSerialize as a post method ?');
    }
    /**
     * Operation testQueryParameterCollectionFormat
     *
     * .
     *
     *
     * @return Http response
     */
    public function testQueryParameterCollectionFormat()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        if (!isset($input['pipe'])) {
            throw new \InvalidArgumentException('Missing the required parameter $pipe when calling testQueryParameterCollectionFormat');
        }
        $pipe = $input['pipe'];

        if (!isset($input['ioutil'])) {
            throw new \InvalidArgumentException('Missing the required parameter $ioutil when calling testQueryParameterCollectionFormat');
        }
        $ioutil = $input['ioutil'];

        if (!isset($input['http'])) {
            throw new \InvalidArgumentException('Missing the required parameter $http when calling testQueryParameterCollectionFormat');
        }
        $http = $input['http'];

        if (!isset($input['url'])) {
            throw new \InvalidArgumentException('Missing the required parameter $url when calling testQueryParameterCollectionFormat');
        }
        $url = $input['url'];

        if (!isset($input['context'])) {
            throw new \InvalidArgumentException('Missing the required parameter $context when calling testQueryParameterCollectionFormat');
        }
        $context = $input['context'];


        return response('How about implementing testQueryParameterCollectionFormat as a put method ?');
    }
}
