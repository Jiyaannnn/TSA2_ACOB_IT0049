<?php
namespace App\Database\Seeds;
use CodeIgniter\Database\Seeder;
class SetTaskUserPasswordSeeder extends Seeder {
    protected $DBGroup = 'taskStore';
    public function run(): void {
        $password = getenv('TSA2_INITIAL_PASSWORD');
        if (! is_string($password) || strlen($password) < 12) {
            throw new \RuntimeException('Set TSA2_INITIAL_PASSWORD to a private password of at least 12 characters.');
        }
        // Never place the setup password in source control or a database export.
        $this->db->table('users')->where('username', 'jian')->update(['password' => password_hash($password, PASSWORD_DEFAULT)]);
    }
}
