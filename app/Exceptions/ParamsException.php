<?php

namespace App\Exceptions;


use App\Tools\Code;

/**
 * Class ReportException
 *
 * @package App\Exceptions
 * @author  xiaoyi <769076918@qq.com>
 * @date    2018-09-21 14:58:56
 */
class ParamsException extends BaseException
{
    public $httpCode  = 404;
    public $errorMsg  = '参数错误.';
    public $errorCode = Code::PARAMS_ERR;
}