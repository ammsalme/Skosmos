<?php
/**
 * Copyright (c) 2012-2013 Aalto University and University of Helsinki
 * MIT License
 * see LICENSE.txt for more information
 */

/**
 * Provides access to the http request information
 */
class Request 
{

  private $lang;
  private $clang;
  private $page;
  private $vocabid;
  private $uri;
  private $letter;
  private $model;

  /**
   * Initializes the Request Object
   */
  public function __construct($model)
  {
    $this->model = $model;
  }

  public function getLang() {
    return $this->lang;
  }

  /**
   * Sets the language variable
   * @param string $lang
   */
  public function setLang($lang) {
    if ($lang !== '')
      $this->lang = $lang;
  }

  public function getContentLang() {
    return $this->clang;
  }

  /**
   * Sets the language variable
   * @param string $clang
   */
  public function setContentLang($clang) {
    $this->clang = $clang;
  }

  public function getPage() {
    return $this->page;
  }

  /**
   * Sets the page id variable eg. 'groups'
   * @param string $lang
   */
  public function setPage($page) {
    if ($page !== '')
      $this->page = $page;
  }

  public function getLetter() {
    return (isset($this->letter)) ? $this->letter : 'A';
  }

  /**
   * Sets the page id variable eg. 'B'
   * @param string $letter
   */
  public function setLetter($letter) {
    if ($letter !== '')
      $this->letter = $letter;
  }
  
  public function getURI() {
    return $this->uri;
  }

  /**
   * Sets the page id variable eg. 'groups'
   * @param string $lang
   */
  public function setURI($uri) {
    if ($uri !== '')
      $this->uri = $uri;
  }

  public function getVocabid() {
    return isset($this->vocabid) ? $this->vocabid : '';
  }

  /**
   * Sets the vocab id variable eg. 'stw'
   * @param string $lang
   */
  public function setVocabid($vocabid) {
    $this->vocabid = $vocabid;
  }

}
