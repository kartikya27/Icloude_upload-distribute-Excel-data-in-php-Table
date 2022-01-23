<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$hook['display_override'] = array(
    'class'    => 'ReplaceText',
    'function' => 'replaceFrontText',
    'filename' => 'replaceText.php',
    'filepath' => 'hooks'
    
);