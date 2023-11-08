<?php

use App\Models\Cliente;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Início', route('home'));
});

Breadcrumbs::for('clientes.index', function (BreadcrumbTrail $trail) {
    $trail->push('clientes', route('clientes.index'));
});

Breadcrumbs::for('clientes.editar', function (BreadcrumbTrail $trail, Cliente $cliente) {
    $trail->parent('clientes.index');
    $trail->push('editar', route('clientes.editar', ['cliente' => $cliente]));
});

Breadcrumbs::for('clientes.cadastrar', function (BreadcrumbTrail $trail) {
    $trail->parent('clientes.index');
    $trail->push('cadastrar', route('clientes.cadastrar'));
});
