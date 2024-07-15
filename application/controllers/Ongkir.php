<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Controller order admin
 */
class Ongkir extends MY_Controller 
{

    public function index()
    {
        $data['title']      = 'Admin: Order';
        $data['page']       = 'ongkir/index';

        $this->view($data);
    }

}

/* End of file Ongkir.php */
