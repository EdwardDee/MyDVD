<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = array(
            'message' => array(
                '此網站由 Nini, Edward 共同開發，為 [NTUT - 2017網頁設計課程] 期末專案。',
                '部分素材取自網路，故本網站需登入才可瀏覽，預設帳密為 [user, user]。',
                '若有侵權請聯繫 edwarddee8@gmail.com 我們會立刻下架。',
                'PHP Host : https://www.000webhost.com/free-php-hosting',
                'GitHub : https://github.com/EdwardDee/MyDVD'
            ),
        );
        $this->load->view('landing', $data);
    }
}
