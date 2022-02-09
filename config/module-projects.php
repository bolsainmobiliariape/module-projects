<?php
// config for Bolsainmobiliariape/ModuleProjects
return [

    "fields" => [
        "name",
        "email",
        "phone",
        "dni",
        "project",
    ],

    "names" =>  [
        "name" => "Nombre",
        "email" => "Correo",
        "phone" => "Telefono",
        "dni" => "DNI/RUC",
        "project" => "Proyecto",
    ],

    "migrations" => [
        "name" => "string",
        "email" => "string",
        "phone" => "string",
        "dni" => "string",
        "project" => "string",
    ],

    "rules" => [
        "project.name" => ["string", 'max:191', 'required'],
        "project.email" => ["email", 'required'],
        "project.phone" => ["string", 'max:191', 'required'],
        "project.dni" => ["string", 'max:191', 'required'],
        "project.project" => ["string", 'max:191', 'required'],
    ],
];
