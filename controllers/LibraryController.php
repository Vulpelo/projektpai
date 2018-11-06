<?php

require_once ('AppController.php');

class LibraryController extends AppController {
    public function __construct() {
        parent::__construct();
    }

    public function library() {
        $this->render('library', ['files' => $this->getFiles()]);
    }

    public function getFiles(): array {
        // zwracam wszystkie pliki znajdujące się w danym katalogu
        return scandir( dirname(__DIR__).'/public/upload/', SCANDIR_SORT_NONE);
    }

}

?>
