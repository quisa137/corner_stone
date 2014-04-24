<?php
class Tools extends Ci_Controller{
    public function message($to = 'World'){
        echo "Hello {$to}!".PHP_EOL;
    }
}
?>