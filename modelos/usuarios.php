<?php


// metodos para manipular usuarios


function UsuariosCrear() {
    print "Creando un usuario Nuevo";
} //end 

function UsuariosLeer($user_id) {
        if ($user_id<0) {
            print "Usuarios no encontrado";
        }
        else {
            print "Leyendo datos del usuario con ID - $user_id";
        }
    
} //end UsuariosLeer

function UsuariosActualizar($user_id) {
    print "Actualizando datos del usuario con ID - $user_id";
} //end UsuariosActualizar

function UsuariosDelete($user_id) {
    print "Borrando datos del usuario con ID - $user_id";
} //end UsuariosDelete





?>