<?php
namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;
class AddTaskAuthAndArchive extends Migration {
    protected $DBGroup = 'taskStore';
    public function up(): void {
        // Passwords are hashes; archived records remain in the database.
        $this->forge->addColumn('users', ['password' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true]]);
        $this->forge->addColumn('tasks', ['is_archived' => ['type' => 'BOOLEAN', 'default' => false]]);
    }
    public function down(): void {
        $this->forge->dropColumn('tasks', 'is_archived');
        $this->forge->dropColumn('users', 'password');
    }
}
