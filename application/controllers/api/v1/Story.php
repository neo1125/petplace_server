<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Story extends API_Controller {

    public $limit = 20;

    function __construct()
    {
        parent::__construct();

    }
}
