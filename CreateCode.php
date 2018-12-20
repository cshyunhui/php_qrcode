<?php

class CreateCode {

   
      /*     * 根据内容生成二维码
     * @param $data 内容
     */
    function create($data) {
        require_once "src/phpqrcode.php";
        $url = urldecode($data);
        QRcode::png($url);
    }

}
