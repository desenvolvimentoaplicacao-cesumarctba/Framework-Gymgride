<?php

namespace GymGride\Controller;

use GymGride\Controller\AdminController;
use GymGride\View\IndexView;

class TestController 
{
    function teste()
    {
        $file1 = 'item';
        $file2 = 'list';
        
        $values = array('int'=>'1', 'nome'=>'marcos', 'endereco'=>'99pop', 'bairro'=>'saopaulo', 'telefone'=>'999888');
        
        $teste = new IndexView;
        $files = $teste->render($file1, $file2);
        //print_r($files);
        
        
        
        $html2 = $teste->replace($files, $values);



        print_r($html2);
    }

    function teste2() 
    {
        /* $teste = new AdminController;
        $teste->AllUsers(); */
        $t = new TreinoController();
        $t->getDados();
    }
}