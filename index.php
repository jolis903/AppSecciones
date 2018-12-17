<?php
//carga de ficheros ()
require('modelos/usuarios.php');
require('modelos/noticias.php');
require('include/funciones.php');

if (isset($_GET ['seccion'])) {
    $seccion = $_GET ['seccion'];
    if($seccion == 'usuarios') {
        print "Seccion Usuarios<br>";
                // evaluamos CRUD ( Crear/Actualizar/Leer/Delete)
                if(isset($_GET ['operacion'])) {

                    $operacion = $_GET ['operacion'];
                //index.php?seccion=usuarios&operacion=editar&id=3 (ej 3º numero para crear nombre)
                        switch ($operacion){
                //Crear Usuario --> UsuariosCreate ()
                                case 'crear':
                                    UsuariosCrear();
                                    break;
                                case 'leer':
                                    UsuariosLeer ($_GET['id']);
                                    break; 
                                case 'actualizar':
                                    UsuariosActualizar ($_GET['id']);
                                    break; 
                                case 'delete':
                                    UsuariosDelete ($_GET['id']);
                                    break; 

                                case 'listado'
                                     UsuariosListado();
                                     break;
                                default: 
                                    print "Operacion no vale.";
                                    break; 

                        } //end operacion
                    } // end  $_GET/operacion
                } // end usuarios

    elseif ($seccion == 'noticias') {
        print "Seccion Noticias<br>";
                // evaluamos CRUD ( Crear/Actualizar/Leer/Delete)
                if(isset($_GET ['operacion'])) {

                    $operacion = $_GET ['operacion'];
                         switch ($operacion){
                                case 'crear':
                                    NoticiasCrear();
                                    break;
                                case 'leer':
                                    UsuariosLeer ($_GET['id']);
                                    break; 
                                case 'actualizar':
                                    UsuariosActualizar ($_GET['id']);
                                break; 
                                case 'delete':
                                    UsuariosDelete ($_GET['id']);
                                break; 
                                default; 
                                    print "Operacion no vale.";
                                break; 
                                    } //end operacion
                        } // end  $_GET/operacion
                    } // end noticias
                } // end sección
else {
        print "error .. SECCION NO RECONOCIDA";
    }



?>