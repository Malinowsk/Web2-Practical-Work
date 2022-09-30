<?php

class PersonageModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_juego;charset=utf8', 'root', '');
    }

    /**
     * Devuelve la lista de personajes completa.
     */
    public function getAll() {

        $query = $this->db->prepare("SELECT * FROM Personaje");
        //select * from Personaje join Raza on Personaje.id_raza = Raza.id_raza;
        $query->execute();

        // 3. obtengo los resultados
        $personage = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $personage;
    }

    public function getPersonaje($id){
        
        $query = $this->db->prepare("SELECT * FROM Personaje WHERE id_personaje=?");
        //select * from Personaje join Raza on Personaje.id_raza = Raza.id_raza;
        $query->execute([$id]);

        // 3. obtengo los resultados
        $personage = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $personage;
    }

    /**
     * Inserta un personaje en la base de datos.
     */
    public function insert($name, $lastname, $class, $race) {
        $query = $this->db->prepare("INSERT INTO Personaje (nombre, apellido, clase, id_raza) VALUES (?, ?, ?, ?)");
        $query->execute([$name, $lastname, $class, $race]);
        
        return $this->db->lastInsertId();
    }


    /**
     * Elimina un personaje dado su id.
     */
    function deleteById($id) {
        $query = $this->db->prepare('DELETE FROM Personaje WHERE id_personaje = ?');
        $query->execute([$id]);
    }

}
