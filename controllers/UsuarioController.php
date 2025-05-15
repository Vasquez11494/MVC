<?php

namespace Controllers;

use Model\ActiveRecord;
use MVC\Router;

class UsuarioController extends ActiveRecord
{

    public function renderizarPagina(Router $router)
    {
        $router->render('usuarios/index', []);
    }
    public function renderUsuario2(Router $router)
    {
        $router->render('usuarios/usuario2', []);
    }
}
