<?php
class Controller {
    function loadView($view = '', $data = []) {
        foreach($data as $key => $val)
        $$key = $val;
        include 'view/' . $view; 
    }
}