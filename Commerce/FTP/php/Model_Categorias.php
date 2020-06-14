<?php

require_once('Categorias.php');

class CategoriaModel {

    private static $db_user = 'c1590108_db';
    private static $db_pass = '04fipuVAvo';
    private $pdo;

    public function __CONSTRUCT()
    {
        try
        {
            $this->pdo = new PDO('mysql:host=localhost;dbname=c1590108_db', 'c1590108_db','04fipuVAvo' );
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);                
            }
            catch(Exception $e)
            {
                die($e->getMessage());
            }
        }
    
        public function Listar($condicion)
        {
            try
            {
                $result = array();
                $SQL="SELECT * FROM categorias ";
                if ($condicion!=''){
                    $SQL.=" where idcategoria=" .$condicion;
                }
                $stm = $this->pdo->prepare($SQL);
                $stm->execute();
    
                foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
                {
                    $cat = new Categoria();
    
                    $cat->__SET('IdCategoria', $r->IdCategoria);
                    $cat->__SET('Descripcion', $r->Descripcion);
                   
    
                    $result[] = $cat;
                }
    
                return $result;
            }
            catch(Exception $e)
            {
                die($e->getMessage());
            }
        }
    /*
        public function Obtener($id)
        {
            try 
            {
                $stm = $this->pdo
                          ->prepare("SELECT * FROM alumnos WHERE id = ?");
    
                $stm->execute(array($id));
                $r = $stm->fetch(PDO::FETCH_OBJ);
    
                $alm = new Alumno();
    
                $alm->__SET('id', $r->id);
                $alm->__SET('Nombre', $r->Nombre);
                $alm->__SET('Apellido', $r->Apellido);
                $alm->__SET('Sexo', $r->Sexo);
                $alm->__SET('FechaNacimiento', $r->FechaNacimiento);
    
                return $alm;
            } catch (Exception $e) 
            {
                die($e->getMessage());
            }
        }
    
        public function Eliminar($id)
        {
            try 
            {
                $stm = $this->pdo
                          ->prepare("DELETE FROM alumnos WHERE id = ?");                      
    
                $stm->execute(array($id));
            } catch (Exception $e) 
            {
                die($e->getMessage());
            }
        }
    
        public function Actualizar(Alumno $data)
        {
            try 
            {
                $sql = "UPDATE alumnos SET 
                            Nombre          = ?, 
                            Apellido        = ?,
                            Sexo            = ?, 
                            FechaNacimiento = ?
                        WHERE id = ?";
    
                $this->pdo->prepare($sql)
                     ->execute(
                    array(
                        $data->__GET('Nombre'), 
                        $data->__GET('Apellido'), 
                        $data->__GET('Sexo'),
                        $data->__GET('FechaNacimiento'),
                        $data->__GET('id')
                        )
                    );
            } catch (Exception $e) 
            {
                die($e->getMessage());
            }
        }
    
        public function Registrar(Alumno $data)
        {
            try 
            {
            $sql = "INSERT INTO alumnos (Nombre,Apellido,Sexo,FechaNacimiento) 
                    VALUES (?, ?, ?, ?)";
    
            $this->pdo->prepare($sql)
                 ->execute(
                array(
                    $data->__GET('Nombre'), 
                    $data->__GET('Apellido'), 
                    $data->__GET('Sexo'),
                    $data->__GET('FechaNacimiento')
                    )
                );
            } catch (Exception $e) 
            {
                die($e->getMessage());
            }
        }*/
    }

?>
