<?php

namespace AToZ\Controller;

class LetterController extends \SlimController\SlimController
{
    public function indexAction()
    {
        $this->redirect('a/1');
    }

    public function letterAction($letter, $page)
    {
        $this->render('letter', array(
            'letter'  => $letter,
            'page'    => $page,
            'letters' => array_merge(range('a', 'z'), array('0-9'))
        ));
    }
}
