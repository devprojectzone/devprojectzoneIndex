<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() {
        return "Bienvenido a la pagina de inicio";
    }

    public function create() {
        return "En esta pagina se van a crear otros profiles";
    }

    public function show($profile) {
        if($profile == 'Oscar') return "Bienvenido al perfil de $profile";
        if($profile == 'Brandon') return "Bienvenido al perfil de $profile";
        if($profile == 'Salomon') return "Bienvenido al perfil de $profile";
        return "En esta pagina se van a mostrar los perfiles";
    }
}