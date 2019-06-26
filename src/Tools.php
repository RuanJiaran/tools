<?php
namespace Rjr\Tools;


class Tools
{
    public static function getPostData(){
        $data = !empty($_POST) ? $_POST : file_get_contents("php://input");
        return $data;
    }
}