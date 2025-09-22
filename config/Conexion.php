<?php
    session_start();

    class Conectar {
        protected $dbh;

        protected function Conexion() {
            try {
                $conectar = $this->dbh = new PDO("mysql:host=localhost;dbname=globalcruises_helpdesk", "root", "20010423");
                return $conectar;
            } catch (Exception $e) {
                print "Error BD!: " . $e->getMessage() . "<br/>";
                die();
            }
        }

        public function set_names() {
            return $this->dbh->query("SET NAMES 'utf8'");
        }

        // Cambia a static
        public static function ruta() {
            return "http://localhost:80/PERSONAL_HelpDesk/";
        }
    }
?>