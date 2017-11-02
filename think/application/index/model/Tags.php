<?php
namespace app\index\model;
use think\Controller;
use think\Db;
class Tags extends Controller
{
  public function cate()
  {

    return $this -> fetch('cate');
  }
}
