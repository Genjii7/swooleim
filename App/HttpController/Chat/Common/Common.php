<?php

namespace App\HttpController\Chat\Common;

use EasySwoole\Http\AbstractInterface\Controller;

/**
 * 公用文件
 */
class Common extends Controller{

    /**
     * 重写json返回
     */
    protected function returnJson($statusCode = 200, $msg = null, $result = null)
    {
        if (!$this->response()->isEndResponse()) {
            $data = Array(
                "code" => $statusCode,
                "msg" => $msg,
                "data" => $result,
                
            );
            $this->response()->write(json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
            $this->response()->withHeader('Content-type', 'application/json;charset=utf-8');
            $this->response()->withStatus($statusCode);
            return true;
        } else {
            return false;
        }
    }


}