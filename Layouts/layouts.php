<?php
class layouts {
    public function heading($conf) {
        echo "Welcome  to " . $conf['site_name'] . "!";
    }
    public function welcome() {
        echo "This is a new semester";
    }
    public function footer($conf) {

        echo "<footer>
        Copyright &copy; " . date("Y") . " " . $conf['site_name'] . ". 
        <br>Contact us at <a href='mailto: {$conf['email']}'> {$conf['email']}</a>.</footer>";
    }
}