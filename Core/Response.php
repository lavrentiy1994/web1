<?php

namespace Core;


class Response
{
  public $data; // Данные вывода

  function __construct(){
    $this->buildHeadData (); //Построить данные для заглавия страницы
  }


  function render ($data, $tpl){
  }

  function echo ($data = '', $tpl = ''){
    $data = $this->data;
    include (ConfigApp::$tplDir . '/layout/index.tpl.php');
  }




  /**
   * Метод, формирующий данные для заголовка страницы
   * @return [type] [description]
   */
  function buildHeadData(){
    $this->data['head']['title'] = 'Мои ДЗ';

    $css [] = 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css';
    $css [] = 'css/mymenu.css';
    $this->data['head']['css'] = $css;

    $js[] = 'https://code.jquery.com/jquery-3.3.1.slim.min.js';
    $js[] = 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js';
    $js[] = 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js';

    $this->data['head']['js'] = $js;

    $meta [0]['name'] = 'autor';
    $meta [0]['val'] = 'Dmitry Tkasuk';
    $this->data['head']['meta']  = $meta;
  }

}
