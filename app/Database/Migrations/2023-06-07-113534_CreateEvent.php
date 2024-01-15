<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEvent extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_event'           => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true, //bilangan bernilai positif saja
                'auto_increment' => true,
            ],
            'id_user'            => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true, //bilangan bernilai positif saja
            ],
            'title'              => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'date_column'        => [
                'type'           => 'DATE',
                'null'           => true,
            ],
            'time'               => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'organizer'          => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'type_sport'          => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'participant'        => [
                'type'           => 'INT',
                'constraint'     =>  11,
            ],
            'location'           => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'upload'           => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'price'              => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
        ]);
        $this->forge->addPrimaryKey('id_event');
        $this->forge->createTable('event');
    }

    public function down()
    {
        $this->forge->dropTable('event');
    }
}
