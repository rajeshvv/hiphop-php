<?php

 class MySoap extends SoapClient {  public $pub = 1;  public function __doRequest(    $request, $location, $action, $version, $one_way=0) {    $rp = parent::__doRequest($request, $location,                              $action, $version, $one_way);    return $rp;  }}function test($options) {  return new MySoap('test/test.wsdl', $options);}var_dump(test(array('foo' => 'bar'))->pub);