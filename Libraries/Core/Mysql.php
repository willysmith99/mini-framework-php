<?php

    class Mysql extends Conexion {
        private $conexion;
        private $query;
        private $values;

        function __construct(){
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->conect();
        }

        // INSERTAR UN REGISTRO 
        public function insert(string $query, array $values){
            $this->query = $query;
            $this->values = $values;

            $insert = $this->conexion->prepare($this->query);
            $resInsert = $insert->execute($this->values);

            if ($resInsert) {
                $lastInsert = $this->conexion->lastInsertId();
            } else {
                $lastInsert = 0;
            }
            return $lastInsert;
        }

        // BUSCAR UN REGISTRO
        public function select(string $query){
            $this->query = $query;
            $result = $this->conexion->prepare($this->query);
            $result->execute();
            $data = $result->fetch(PDO::FETCH_ASSOC);

            return $data;
        }

        // LISTAR LOS REGOSTROS
        public function select_all(string $query){
            $this->query = $query;
            $result = $this->conexion->prepare($this->query);
            $result->execute();
            $data = $result->fetchAll(PDO::FETCH_ASSOC);

            return $data;
        }

        // ACTUALIZAR REGISTRO
        public function update(string $query, array $values){
            $this->query = $query;
            $this->values = $values;
            $update = $this->conexion->prepare($this->query);
            $resUpdate = $update->execute($this->values);

            return $resUpdate;
        }

        // ELIMINAR UN REGISTRO
        public function delete(string $query){
            $this->query = $query;
            $result = $this->conexion->prepare($this->query);
            $result = $result->execute();

            return $result;
        }

    }

?>