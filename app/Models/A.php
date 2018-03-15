<?php
/**
 * User: qbhy
 * Date: 2018/3/15
 * Time: 下午5:51
 */

namespace App\Models;


class A
{
    protected $attrs = [
        'id' => null,
        'dd' => null
    ];
    
    public function __isset($n)
    {
        return array_key_exists($n, $this->attrs);
    }
    
    public function __set($n, $v)
    {
        $this->attrs[$n] = $v;
    }
    
    public function __get($n)
    {
        return $this->attrs[$n] + 1;
    }
}