<?php
    class HeadController extends CController
    {
        public function actionShowAll()
        {
            if ($menu = Menu::model()->getMenuList())
            {
                $this->render('view',array('menu'=>$menu));
            }
        }
        public function actionShowContent($name)
        {
             if ($pages = Pages::model()->showContentPage($name))
             {
                 $this->render('view_content',array('pages'=>$pages));
             }
            
        }
    }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

