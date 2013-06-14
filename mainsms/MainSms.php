<?php
/**
 * Yii MainSMS API wrapper
 *
 * @author Ivan Khromov <ivan@khromov.net>
 * @copyright Copyright (c), 2013, Ivan Khromov
 * @link http://github.com/ikhrome/yii-mainsmsapi
 *
 * @version 1.0
 */

class MainSms extends CApplicationComponent {
  
  /**
   * @var MainSmsApi MainSmsApi class 
   */
  public $api;
  /**
   * @var string Your project name
   */
  
  public $projectName;
  
  /**
   * @var string API key which you can get here in dashboard
   */
  public $apiKey;
  
  /**
   * @var boolean Use SSL for requests?
   */
  public $useSsl   = false;
  
  /**
   * @var boolean Is this test mode?
   */
  public $testMode = false;
  
  
  /**
   * Initializes class with default parameters
   *
   * Setup base class.
   * @see CApplicationComponent::init()
   */
  public function init() {
    require_once __DIR__ . '/vendor/MainSmsApi.php';
    $this->api = new MainSmsApi($this->projectName, $this->apiKey, $this->useSsl, $this->testMode);
    parent::init();
  }
  /**
   * Returns an object MainSmsApi, which initialized in init() method
   * @return MainSmsApi
   */
  public function getApi() {
    return $this->mainsms;
  }
  
  /**
   * Shortcut for $this->api->sendSMS(...)
   * @return boolean|integer
   */
  public function send($recipients, $message, $sender, $run_at = null) {
    $sms = $this->getApi();
    return $sms->messageSend($recipients, $message, $sender, $run_at);
  }
  
  public function balance() {
    $sms = $this->getApi();
    return $sms->getBalance();
  }
  
}
