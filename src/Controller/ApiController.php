<?php
/**
 * Created by PhpStorm.
 * User: eugene
 * Date: 10/31/18
 * Time: 1:02 AM
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiController
{
    /**
     * @Route("/api")
     */
    public function api()
    {
        return new Response('api');
    }
}