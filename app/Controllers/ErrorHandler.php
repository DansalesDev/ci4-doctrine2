<?php


namespace App\Controllers;


use CodeIgniter\HTTP\IncomingRequest;

interface ErrorHandler {

    function webHookConfig();
    function error404 (IncomingRequest $request);
    function error403 (IncomingRequest $request);
    function error400 (IncomingRequest $request);
    function error401 (IncomingRequest $request);
}