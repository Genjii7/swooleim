<?php

namespace App\HttpController\Chat\Controller;

use EasySwoole\Http\AbstractInterface\Controller;
use EasySwoole\HttpAnnotation\AnnotationTag\Api;

/**
 * 用户注册
 */
class Register extends Controller{
    /**
     * 注册接口
     * @Api(name="Register-user_register",path="/user/register")
     */
    public function user_register(){
        $param = $this->request()->getRequestParam('nikename','password');
        return $this->writeJson(200,$param,'伞兵');
    }
    
}