<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CsvDownload extends CI_Controller {
    public function download_sample() {
        $file_path = FCPATH . 'assets/dndfile-sample.csv';

        if (file_exists($file_path)) {
            header("Content-Type: text/csv");
            header("Content-Disposition: attachment; filename=dndfile-sample.csv");
            header("Content-Length: " . filesize($file_path));
            readfile($file_path);
            exit;
        } else {
            show_404();
        }
    }
}
?>