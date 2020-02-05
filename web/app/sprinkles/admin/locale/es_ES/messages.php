<?php
/**
 * UserFrosting (http://www.userfrosting.com)
 *
 * @link      https://github.com/userfrosting/UserFrosting
 * @copyright Copyright (c) 2019 Alexander Weissman
 * @license   https://github.com/userfrosting/UserFrosting/blob/master/LICENSE.md (MIT License)
 */

/**
 * Spanish message token translations for the 'admin' sprinkle.
 *
 * @author rafa31gz
 */
return [
    'ACTIVITY' => [
        1 => 'Actividad',
        2 => 'Actividades',

        'LAST' => 'Última actividad',
        'PAGE' => 'Una lista de las actividades del usuario',
        'TIME' => 'Tiempo de Actividad'
    ],

    'ADMIN' => [
        'PANEL' => 'Panel de administración'
    ],

    'CACHE' => [
        'CLEAR'             => 'Limpiar cache',
        'CLEAR_CONFIRM'     => '¿Estás seguro de que deseas borrar la caché del sitio?',
        'CLEAR_CONFIRM_YES' => 'Sí, borrar caché',
        'CLEARED'           => '¡Cache borrado correctamente!'
    ],

    'DASHBOARD'           => 'Tablero',
    'NO_FEATURES_YET'     => 'No parece que se hayan configurado funciones para esta cuenta ... todavía. Tal vez no se han implementado todavía, o tal vez alguien se olvidó de darle acceso. De cualquier manera, ¡estamos encantados de tenerte a bordo!',
    'DELETE_MASTER'       => '¡No puedes eliminar la cuenta principal!',
    'DELETION_SUCCESSFUL' => 'El usuario <strong> {{user_name}} </strong> se ha eliminado correctamente.',
    'DETAILS_UPDATED'     => 'Detalles de la cuenta actualizados para el usuario <strong> {{user_name}} </strong>',
    'DISABLE_MASTER'      => '¡No puedes deshabilitar la cuenta principal!',
    'DISABLE_SELF'        => '¡No puedes inhabilitar tu propia cuenta!',
    'DISABLE_SUCCESSFUL'  => 'La cuenta para el usuario <strong> {{user_name}} </strong> se ha desactivado correctamente.',

    'ENABLE_SUCCESSFUL' => 'La cuenta para el usuario <strong> {{user_name}} </strong> se ha habilitado correctamente.',

    'GROUP' => [
        1 => 'Grupo',
        2 => 'Grupos',

        'CREATE'              => 'Crear un grupo',
        'CREATION_SUCCESSFUL' => 'Grupo creado correctamente <strong> {{name}} </strong>',
        'DELETE'              => 'Borrar un grupo',
        'DELETE_CONFIRM'      => '¿Seguro que quieres eliminar el grupo <strong> {{name}} </strong>?',
        'DELETE_DEFAULT'      => 'No puedes eliminar el grupo <strong> {{name}} </strong> porque es el grupo predeterminado para los usuarios recién registrados.',
        'DELETE_YES'          => 'Sí, eliminar grupo',
        'DELETION_SUCCESSFUL' => 'Grupo eliminado correctamente <strong> {{name}} </strong>',
        'EDIT'                => 'Editar grupo',
        'ICON'                => 'Icono de grupo',
        'ICON_EXPLAIN'        => 'Icono para los miembros del grupo',
        'INFO_PAGE'           => 'Página de información de grupo para {{name}}',
        'MANAGE'              => 'Administrar grupo',
        'NAME'                => 'Nombre del grupo',
        'NAME_EXPLAIN'        => 'Introduce un nombre para el grupo',
        'NOT_EMPTY'           => 'No puedes hacerlo porque todavía hay usuarios asociados con el grupo <strong> {{name}} </strong>.',
        'PAGE_DESCRIPTION'    => 'Un listado de los grupos para tu sitio. Proporciona herramientas de administración para editar y eliminar grupos.',
        'SUMMARY'             => 'Resumen del grupo',
        'UPDATE'              => 'Detalles actualizados para el grupo <strong> {{name}} </strong>'
    ],

    'MANUALLY_ACTIVATED'    => 'La cuenta de {{user_name}} se ha activado manualmente',
    'MASTER_ACCOUNT_EXISTS' => '¡La cuenta maestra ya existe!',
    'MIGRATION'             => [
        'REQUIRED' => 'Se requiere actualizar la base de datos'
    ],

    'PERMISSION' => [
        1 => 'Permiso',
        2 => 'Permisos',

        'ASSIGN_NEW'       => 'Asignar nuevo permiso',
        'HOOK_CONDITION'   => 'Hook/Condiciones',
        'ID'               => 'ID de permiso',
        'INFO_PAGE'        => "Página de autor del permiso de '{{name}}'",
        'MANAGE'           => 'Administrar permisos',
        'NOTE_READ_ONLY'   => '<strong> Ten en cuenta: </strong> los permisos se consideran "parte del código" y no se pueden modificar a través de la interfaz. Para agregar, eliminar o modificar permisos, los mantenedores del sitio necesitarán usar una <a href="https://learn.userfrosting.com/database/extended-the-database" target="about:_blank"> migración de la base de datos . </a>',
        'PAGE_DESCRIPTION' => 'Una lista de los permisos para tu sitio. Proporciona herramientas de administración para editar y eliminar permisos.',
        'SUMMARY'          => 'Resumen del permiso',
        'UPDATE'           => 'Actualizar permisos',
        'VIA_ROLES'        => 'Tiene permiso para los roles'
    ],

    'ROLE' => [
        1 => 'Rol(funcion)',
        2 => 'Roles(funciones)',

        'ASSIGN_NEW'          => 'Asignar nueva rol',
        'CREATE'              => 'Crear un rol',
        'CREATION_SUCCESSFUL' => 'Función creada correctamente <strong> {{name}} </strong>',
        'DELETE'              => 'Eliminar rol',
        'DELETE_CONFIRM'      => '¿Seguro que quieres eliminar la función <strong> {{name}} </strong>?',
        'DELETE_DEFAULT'      => 'No puedes eliminar el rol <strong> {{name}} </strong> porque es un rol predeterminado para los usuarios recién registrados.',
        'DELETE_YES'          => 'Sí, borrar función',
        'DELETION_SUCCESSFUL' => 'Se ha eliminado la función <strong> {{nombre}} </strong>',
        'EDIT'                => 'Editar función',
        'HAS_USERS'           => 'No puedes hacerlo porque todavía hay usuarios que tienen el rol <strong> {{name}} </strong>.',
        'INFO_PAGE'           => 'Página de información de funciones de {{name}}',
        'MANAGE'              => 'Administrar roles',
        'NAME'                => 'Nombre',
        'NAME_EXPLAIN'        => 'Ingresa un nombre para el rol',
        'NAME_IN_USE'         => 'Ya existe un rol denominado <strong> {{name}} </strong>',
        'PAGE_DESCRIPTION'    => 'Una lista de las funciones de tu sitio. Proporciona herramientas de administración para editar y eliminar roles.',
        'PERMISSIONS_UPDATED' => 'Permisos actualizados para el rol <strong> {{name}} </strong>',
        'SUMMARY'             => 'Resumen del rol',
        'UPDATED'             => 'Detalles actualizados para el rol <strong> {{name}} </strong>'
    ],

    'SYSTEM_INFO' => [
        '@TRANSLATION' => 'Información del sistema',

        'DB_NAME'     => 'Nombre de la base de datos',
        'DB_VERSION'  => 'Versión de base de datos',
        'DIRECTORY'   => 'Directorio del proyecto',
        'PHP_VERSION' => 'Versión de PHP',
        'SERVER'      => 'Software de servidor Web',
        'SPRINKLES'   => 'Sprinkles cargados',
        'UF_VERSION'  => 'UserFrosting versión',
        'URL'         => 'URL root del sitio'
    ],

    'TOGGLE_COLUMNS' => 'Alternar columnas',
    'NO_DATA'        => 'No puede quedar vacio.',

    'USER' => [
        1 => 'Usuario',
        2 => 'Usuarios',

        'ADMIN' => [
            'CHANGE_PASSWORD'    => 'Cambiar contraseña de usuario',
            'SEND_PASSWORD_LINK' => 'Enviar al usuario un enlace que les permita elegir su propia contraseña',
            'SET_PASSWORD'       => 'Establece la contraseña del usuario como'
        ],

        'ACTIVATE'         => 'Activar usuario',
        'CREATE'           => 'Crear usuario',
        'CREATED'          => 'Se ha creado correctamente el usuario <strong> {{user_name}} </strong>',
        'DELETE'           => 'Borrar usuario',
        'DELETE_CONFIRM'   => '¿Seguro que deseas eliminar el usuario <strong> {{name}} </strong>?',
        'DELETE_YES'       => 'Sí, eliminar usuario',
        'DISABLE'          => 'Deshabilitar usuario',
        'EDIT'             => 'Editar usuario',
        'ENABLE'           => 'Habilitar usuario',
        'INFO_PAGE'        => 'Página de información de usuario de {{name}}',
        'LATEST'           => 'Usuarios más recientes',
        'PAGE_DESCRIPTION' => 'Una lista de los usuarios para tu sitio. Proporciona herramientas de administración que incluyen la capacidad de editar detalles de usuario, activar manualmente usuarios, habilitar / deshabilitar usuarios y más.',
        'SUMMARY'          => 'Resumen de la cuenta',
        'VIEW_ALL'         => 'Ver todos los usuarios',
        'WITH_PERMISSION'  => 'Usuarios con este permiso'
    ],
    'X_USER' => [
        0 => 'No hay usuarios',
        1 => '{{plural}} usuario',
        2 => '{{plural}} usuarios'
    ]
];