<?php
/*
  Controller_User_Registration
  LOGIN画面
  User_Baseを継承
*/
class Controller_User_Registration extends Controller_User_Base
{
  public function before()
  {
    // 継承元呼び出し
    parent::before();
  }

  public function action_index()
  {
    var_dump("きた");die;
    // TOP画面用cssセット
    // $this->cdd .= Asset::css('');

    // TOP画面用jsセット


    // パンくずセット


    // メタ情報セット

    // テンプレートのcontentにviewをセット(メタ情報も後ほど渡す)
    $this->template->content = View::forge('user/registration/index');

  }
}