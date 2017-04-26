<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class ImageLoader{

    const FILE_PATH = '../img/';

    function __construct()
    {
    }

    public function getUrl($imageName, $imagePath = '')
    {
//        if($this->Auth->isLogin()){
//            $imageUri = empty($imagePath)?$imageName:($imagePath.$imageName);
//            return base_url('image/'.$imageUri);
//        }else{
//            return 'https://www.google.com/doodles/halloween-2016';
//        }
    }

    public function getImage($imageName, $imagePath = '')
    {
        $attachment_location = FILE_PATH . $imagePath . $imageName;
        if (file_exists($attachment_location)) {

            header($_SERVER["SERVER_PROTOCOL"] . " 200 OK");
            header("Cache-Control: public"); // needed for internet explorer
            header("Content-Type: image/png");
            header("Content-Transfer-Encoding: Binary");
            header("Content-Length:".filesize($attachment_location));
            header("Content-Disposition: attachment; filename=$imageName");
            readfile($attachment_location);
            die();
        }
        die("Error: File not found.");
    }
}
