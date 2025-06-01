<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    public function run()
    {
        // Data untuk tabel product_category
        $data = [
            [
                'nama' => 'Laptop Gaming',
                'deskripsi' => 'Laptop untuk gaming',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama' => 'Laptop Ultrabook',
                'deskripsi' => 'Laptop ultrabook Keren',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama' => 'Laptop Budget',
                'deskripsi' => 'Laptop budget untuk mahasiswa',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama' => 'Laptop Design',
                'deskripsi' => 'Laptop untuk design',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama' => 'Laptop New',
                'deskripsi' => 'Laptop baru',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama' => 'Laptop Second',
                'deskripsi' => 'Laptop second bekas',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama' => 'Laptop Mahal',
                'deskripsi' => 'Laptop mahal mantap',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama' => 'Laptop MSI',
                'deskripsi' => 'Laptop MSI mantap',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama' => 'Laptop Asus',
                'deskripsi' => 'Laptop Asus mantap',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama' => 'Laptop Yudha',
                'deskripsi' => 'Laptop Yudha mantap Syekali',
                'created_at' => date("Y-m-d H:i:s"),
            ],
        ];

        foreach ($data as $item) {
            // Insert data ke tabel product_category
            $this->db->table('product_category')->insert($item);
        }
    }
}