<?php
namespace App\Http\Controllers;

use App\Models\tecnico;
use App\Models\solicitud_ticket;
use App\Models\sparePart;
use App\Models\ticket;
use App\Models\User;

class top5Controller extends Controller{

    private function topFiveUser(){
        $users = user::orderBy('created_at', 'DESC')
                       ->take(5)
                       ->get();
        // dd($users);
        return $users;
    }

    private function topFiveSoliTickets(){
        $sT = solicitud_ticket::orderBy('created_at', 'DESC')
                       ->take(5)
                       ->get();
        // dd($users);
        return $sT;
    }

    private function topFiveSpareParts(){
        $refa = sparePart::orderBy('created_at', 'DESC')
                       ->take(5)
                       ->get();
        // dd($users);
        return $refa;
    }

    
    private function topFiveTecnicos(){
        $tecnicos = tecnico::orderBy('created_at', 'DESC')
                       ->take(5)
                       ->get();
        // dd($users);
        return $tecnicos;
    }

    private function topFiveTickets(){
        $tickets = ticket::orderBy('created_at', 'DESC')
                       ->take(5)
                       ->get();
        // dd($users);
        return $tickets;
    }

    public function allTop5(){
        $users = $this->topFiveUser();
        $sT = $this->topFiveSoliTickets();
        $refa = $this->topFiveSpareParts();
        $tecnicos = $this->topFiveTecnicos();
        $tickets = $this->topFiveTickets();

        return view('privado/CRUDS/index')->with('users',$users)
                                          ->with('SoliTickets',$sT)
                                          ->with('refacciones',$refa)
                                          ->with('tecnicos',$tecnicos)
                                          ->with('tickets',$tickets);
    }
}