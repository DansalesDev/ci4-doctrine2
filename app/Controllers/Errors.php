<?php


namespace App\Controllers;


use CodeIgniter\HTTP\IncomingRequest;
use Exception;

class Errors extends BaseController implements ErrorHandler {


    function webHookConfig() {
        // TODO: Implement webHookConfig() method.
    }


    function error404(IncomingRequest $request) {
        // TODO: Implement error404() method.
    }

    function error403(IncomingRequest $request) {
        // TODO: Implement error403() method.
    }

    function error400(IncomingRequest $request) {
        // TODO: Implement error400() method.
    }

    function error401(IncomingRequest $request) {
        // TODO: Implement error401() method.
    }
}