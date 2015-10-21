<?php
    class HeadController extends CController
    {
        public function actionShow($name)
        {
            $name = mysql_escape_string($name);
            $menu = Menu::model()->findByAttributes(array('title'=>$name));
            if ($menu = Menu::model()->findByAttributes(array('title'=>$name))){
                $id_menu =  $menu->id_menu;
                if ($page = Pages::model()->findAllByAttributes(array('id_menu'=>$id_menu)))
                {
                    $this->render('view',array('page'=>$page));
                }
            }
            else{
                echo 'Не существующий пункт меню';
            }
        }
    }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

