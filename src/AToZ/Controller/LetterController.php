<?php

namespace AToZ\Controller;

use \GuzzleHttp\Client;

class LetterController extends \SlimController\SlimController
{
    public function indexAction()
    {
        $this->redirect('a/1');
    }

    public function letterAction($letter, $page)
    {
        $aToZProgrammes = $this->getAToZProgrammesByLetterAndPage($letter, $page);
        $programmes = $aToZProgrammes->elements;

        $this->render('letter', array(
            'letter'     => $letter,
            'page'       => $page,
            'letters'    => array_merge(range('a', 'z'), array('0-9')),
            'programmes' => $programmes
        ));
    }

    private function getAToZProgrammesByLetterAndPage($letter, $page)
    {
        $apiResponse = $this->getApiResponseByLetterAndPage($letter, $page);
        $body = json_decode($apiResponse->getBody()->getContents());
        return $body->atoz_programmes;
    }

    private function getApiResponseByLetterAndPage($letter, $page)
    {
        $client = new Client(['base_uri' => 'https://ibl.api.bbci.co.uk/']);
        $requestUri = 'ibl/v1/atoz/' . $letter . '/programmes?page=' . $page;
        return $client->request('GET', $requestUri);
    }
}
