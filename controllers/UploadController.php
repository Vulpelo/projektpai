<?php

require_once("AppController.php");

class UploadController extends AppController {
    const DEFAULT_FILE_SIZE = 1024*1024;
    const SUPPORTED_TYPES = ['video/mp4', 'video/mov', 'image/png', 'image/jpg', 'image/jpeg'];

    public function __construct() {
        parent::__construct();
    }
    public function upload(){

        if ( $this->isPost() && $this->validate($_FILES['file']) && is_uploaded_file($_FILES['file']['tmp_name']) ) 
        {
            move_uploaded_file($_FILES['file']['tmp_name'],
                                dirname(__DIR__).'/public/upload/'.$_FILES['file']['name']);
        }

        $this->render('upload');
    }

    public function validate(array $file) : bool {
        if (!isset($file)) {
            return false;
        }
        if ($file['size'] > self::DEFAULT_FILE_SIZE) {
            return false;
        }
        if (!in_array($file['type'], self::SUPPORTED_TYPES)) {
            return false;
        }
        return true;
    }
}

?>
