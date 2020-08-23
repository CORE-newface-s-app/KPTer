<?php
/*
  controller_User_Top
  TOP画面
  User_Baseを継承
*/

use Fuel\Core\Asset;

class Controller_User_Top extends Controller_User_Base
{
  public function before()
  {
    // 継承元呼び出し
    parent::before();
  }

  public function action_index()
  {
    // TOP画面用cssセット
    // $this->cdd .= Asset::css('');

    // TOP画面用jsセット


    // パンくずセット


    // メタ情報セット


    // テンプレートのcontentにviewをセット(メタ情報も後ほど渡す)
    $this->template->content = View::forge('user/top');

  }
}