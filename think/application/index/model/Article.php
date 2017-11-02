<?php
namespace app\index\model;
use think\Controller;
use think\Db;
class Article extends Controller
{
  public function cate()
  {

    return $this -> fetch('cate');
  }
}
