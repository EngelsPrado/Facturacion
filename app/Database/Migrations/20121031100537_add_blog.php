<?php namespace App\Database\Migrations;

class AddBlog  extends \CodeIgniter\Database\Migration {

        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'INT',
                                'constraint'     => 10,
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],
                        'nombre'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '100',
                        ],
                        'apellido' => [
                                'type'           => 'varchar',
                                 'constraint'     => '100',
                        ],
                ]);
                $this->forge->addKey('id', TRUE);
                $this->forge->createTable('usuarios');
        }

        public function down()
        {
                $this->forge->dropTable('usuarios');
        }
}