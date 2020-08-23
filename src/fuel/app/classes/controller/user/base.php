<?php
/*
  controller_User_Base
  ユーザー画面ベースコントローラー
  Hybridを継承
*/

use Fuel\Core\Asset;
use Fuel\Core\Controller_Hybrid;

class Controller_User_Base extends Controller_Hybrid
{
  protected $header = '';
  protected $footer = '';
  protected $pankuzu = '';
  protected $pankuzu_data = [];
  protected $css = '';
  protected $js = '';
  protected $meta = '';

  public function before()
  {
    // テンプレート呼び出し
    $this->template = 'user/common/template';
    // 継承元before呼び出し
    parent::before();
    // headerテンプレートを変数にセット
    $this->header = 'user/common/header';
    // footerテンプレートを変数にセット
    $this->footer = 'user/common/footer';
    // パンくずテンプレートを変数にセット
    $this->pankuzu = 'user/common/pankuzu';
    // cssテンプレートを変数にセット
    $this->css .= Asset::css('common.css');
    // jsテンプレートを変数にセット


  }

  public function after($response)
  {
    // headerをテンプレートにセット
    $this->template->header = View::forge($this->header);

    // footerをテンプレートにセット
    $this->template->footer = View::forge($this->footer);

    // パンくずをテンプレートにセット
    $this->template->pankuzu = !empty($this->pankuzu) ? '' : '';

    // cssをテンプレートにセット
    $this->template->set('css' , $this->css , false);

    // js


    // メタ情報をテンプレートにセット



    return parent::after($response);
  }
}