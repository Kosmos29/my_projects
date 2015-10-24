<?php
    foreach ($pages as $page)
    {
        print '<p>';
        print $page->title;
        print '</p>';
        print '<textarea rows = "20" cols = "125" readonly >';
        print $page->content;
        print '</textarea';
    }
    
/* 1111
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

