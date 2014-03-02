<?php
/**
 * Created by PhpStorm.
 * User: Jannu
 * Date: 20.02.14
 * Time: 19:21
 */
class ruhmad extends Controller {

    function index(){
        $this->ruhmad = get_all("SELECT *
    FROM ruhmad
    ORDER BY ruhmad_luhend");

    }
    function view(){
    $ruhmad_id = $this->params[0];

    }
}