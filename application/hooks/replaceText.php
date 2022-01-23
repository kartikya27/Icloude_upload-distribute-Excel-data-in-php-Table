<?php

class ReplaceText {
public function replaceFrontText(){

$this->CI =& get_instance();
$contents = $this->CI->output->get_output();
$contents = str_replace("CodeIgniter",'I Cloude EMS',$contents );
echo $contents ;
return;
}



}
