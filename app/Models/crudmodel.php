<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class CrudModel extends Model
    {
        public function consultacita()
        {
            $consulta = $this->db->query("SELECT * FROM cita WHERE idcita");
            return $consulta->getResult();
        }
        
        public function insertar($datos)
        {
            $data = $this->db->table('cita');
            $data->insert($datos);
            return $this->db->insertID();
        }

        public function insertarpaciente($datos)
        {
            $data = $this->db->table('paciente');
            $data->insert($datos);
            return $this->db->insertID();
        }
        
        public function eliminar($data)
        {
            $Eliminando = $this->db->table('cita');
            $Eliminando->where($data);
            return $Eliminando->delete();
        }



        public function listarEnfermeros()
        {
            $consulta = $this->db->query("SELECT * FROM enfermero");
            return $consulta->getResult();
        }
        
        public function insertar1($datos)
        {
            $data = $this->db->table('enfermero');
            $data->insert($datos);
            return $this->db->insertID();
        }
        
        public function eliminar1($data)
        {
            $Eliminando = $this->db->table('enfermero');
            $Eliminando->where($data);
            return $Eliminando->delete();
        }
    }


?>