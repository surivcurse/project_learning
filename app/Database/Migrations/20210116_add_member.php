<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddBlog extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "_id" => [
                "type" => "INT",
                "constraint" => 6,
                "unsigned" => true,
                "auto_increment" => true,
            ],
            "f_name" => [
                "type" => "VARCHAR",
                "constraint" => "100",
            ],
            "l_name" => [
                "type" => "VARCHAR",
                "constraint" => "100",
            ],
            "avatar" => [
                "type" => "TEXT",
            ],
            "gender" => [
                "type" => "INT",
                "constraint" => 2,
            ],
            "name_title" => [
                "type" => "INT",
                "constraint" => 11,
            ],
            "email" => [
                "type" => "VARCHAR",
                "constraint" => 100,
            ],
            "password" => [
                "type" => "VARCHAR",
                "constraint" => 100,
            ],
            "address" => [
                "type" => "TEXT",
            ],
            "class_no" => [
                "type" => "INT",
                "constraint" => 2,
            ],
        ]);
        $this->forge->addKey("_id", true);
        $this->forge->createTable("member");
    }

    public function down()
    {
        $this->forge->dropTable("member");
    }
}