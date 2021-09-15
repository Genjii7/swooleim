<?php

namespace App\HttpController\Chat\Controller;

use App\HttpController\Chat\Common\Common;
use EasySwoole\Http\Request;
use EasySwoole\HttpAnnotation\AnnotationTag\Api;

/**
 * 用户注册
 */
class Register extends Common{
    /**
     * 注册接口
     * @Api(name="Register-user_register",path="/user/register")
     */
    public function user_register(){
        $request = $this->request();
        $data = $request->getRequestParam();
        $this->returnJson(200,'test',$data);
    }
    
}