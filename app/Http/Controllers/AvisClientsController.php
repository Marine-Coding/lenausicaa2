<?php

namespace App\Http\Controllers;

use App\AvisClientsModel;
use Illuminate\Http\Request;

class AvisClientsController extends Controller
{
    //
    public function avisClients()
    {
        $avisClients = AvisClientsModel::get();
        return view('avis_clients', ['avis_clients' => $avisClients]);

    }
    
}
