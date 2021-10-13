<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class paciente extends Migration
{
        public function up()
        {
                $this->forge->addField([
                        'idpaciente'          => [
                                'type'           => 'INT',
                                'constraint'     => 11,
                                'unsigned'       => true,
                                'auto_increment' => true,
                        ],
                        'nombres'       => [
                                'type'       => 'VARCHAR',
                                'constraint' => '30',
                        ],
                        'apellidos'       => [
                                'type'       => 'VARCHAR',
                                'constraint' => '30',
                        ],
                        'telefono'       => [
                                'type'       => 'int',
                                'constraint' => '11',
                        ],
                        'correo'       => [
                                'type'       => 'VARCHAR',
                                'constraint' => '30',
                        ],
                ]);
                $this->forge->addKey('idpaciente', true);
                $this->forge->createTable('paciente');
        }

        public function down()
        {
                $this->forge->dropTable('paciente');
        }
}