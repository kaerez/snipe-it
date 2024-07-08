<?php

return [
    'custom_fields'		        => 'Campos personalizados',
    'manage'                    => 'Administra',
    'field'		                => 'Campo',
    'about_fieldsets_title'		=> 'Acerca de los grupos de campos',
    'about_fieldsets_text'		=> 'Los grupos de campos le permiten agrupar campos personalizados que se reutilizan frecuentemente para determinados modelos de activos.',
    'custom_format'             => 'Expresión regular personalizada...',
    'encrypt_field'      	        => 'Encriptar el valor de este campo en la base de datos',
    'encrypt_field_help'      => 'CUIDADO: Encriptar un campo hace que no se pueda buscar por él.',
    'encrypted'      	        => 'Encriptado',
    'fieldset'      	        => 'Grupo de campos',
    'qty_fields'      	      => 'Campos de cantidad',
    'fieldsets'      	        => 'Grupo de campos',
    'fieldset_name'           => 'Nombre del grupo de campos',
    'field_name'              => 'Nombre del campo',
    'field_values'            => 'Valores de los Campos',
    'field_values_help'       => 'Agregar opciones seleccionables, una por linea. Lineas en blanco ademas de la primera, serán ignoradas.',
    'field_element'           => 'Elemento de formulario',
    'field_element_short'     => 'Elemento',
    'field_format'            => 'Formato',
    'field_custom_format'     => 'Formato personalizado',
    'field_custom_format_help'     => 'Este campo te permite usar una expresión regex para la validación. Debería empezar con "regex:" - por ejemplo, para validar que un valor de campo personalizado contiene un IMEI válido (15 dígitos numéricos), podrías usar <code>regex:/^[0-9]{15}$/</code>.',
    'required'   		          => 'Obligatorio',
    'req'   		              => 'Obl.',
    'used_by_models'   		    => 'Usado Por Modelos',
    'order'   		            => 'Orden',
    'create_fieldset'         => 'Nuevo grupo de campos',
    'update_fieldset'         => 'Actualizar grupo de campos',
    'fieldset_does_not_exist'   => 'El grupo de campos :id no existe',
    'fieldset_updated'         => 'Se actualizó el grupo de campos',
    'create_fieldset_title' => 'Crear nuevo grupo de campos',
    'create_field'            => 'Nuevo campo personalizado',
    'create_field_title' => 'Crear un nuevo campo personalizado',
    'value_encrypted'      	        => 'El valor de este campo está encriptado en la base de datos. Solo los administradores pueden ver el valor desencriptado',
    'show_in_email'     => '¿Incluir el campo en los correos de asignación enviados al usuario? Los campos cifrados no se pueden incluir en los correos electrónicos',
    'show_in_email_short'     => 'Incluye en correos electrónicos.',
    'help_text' => 'Texto de ayuda',
    'help_text_description' => 'Esto es un texto opcional que se mostrará debajo de los elementos del formulario cuando se este editando un activo para proporcionar contexto adicional del campo.',
    'about_custom_fields_title' => 'Acerca de los Campos Personalizados',
    'about_custom_fields_text' => 'Los campos personalizados te permiten agregar atributos arbritarios a los activos.',
    'add_field_to_fieldset' => 'Añadir campo al grupo de campos',
    'make_optional' => 'Requerido - haz clic para hacerlo opcional',
    'make_required' => 'Opcional - haz clic para hacerlo requerido',
    'reorder' => 'Reordenar',
    'db_field' => 'Campo de Base de Datos',
    'db_convert_warning' => 'ADVERTENCIA. Este campo está en la tabla de campos personalizados como <code>:db_column</code> pero debe ser <code>:expected</code>.',
    'is_unique' => 'Este valor debe ser único a través de todos los activos',
    'unique' => 'Único',
    'display_in_user_view' => 'Permitir al usuario ver estos valores en la página "Ver elementos asignados"',
    'display_in_user_view_table' => 'Visible al Usuario',
    'auto_add_to_fieldsets' => 'Añadir automáticamente a cada nuevo grupo de campos',
    'add_to_preexisting_fieldsets' => 'Añadir a cualquier grupo de campos existente',
    'show_in_listview' => 'Mostrar por defecto en las vistas de lista. Los usuarios autorizados aún podrán mostrar/ocultar a través del selector de columnas',
    'show_in_listview_short' => 'Mostrar en listas',
    'show_in_requestable_list_short' => 'Mostrar en la lista de activos que se pueden solicitar',
    'show_in_requestable_list' => 'Mostrar el valor en la lista de activos que se pueden solicitar. Los campos cifrados no se mostrarán',
    'encrypted_options' => 'Este campo está cifrado, por lo que algunas opciones de visualización no estarán disponibles.',

];
