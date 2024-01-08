<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Draft;
use App\Models\Kategori;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
use App\Models\Review;
use App\Models\Berita;
use App\Models\Dompet;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     * 
     * 
     * 
     */

    public function run()
    {
        $this->generateRoles();
        $this->generateUsers();
        $this->generateCategories();
        $this->generateDraft();
        $this->generateReview();
        $this->generateBerita();
        $this->generateDompet();
    }

    private function generateRoles()
    {
        Role::customCreate('Admin');
        Role::customCreate('Bendahara');
        Role::customCreate('User');
    }

    private function generateUsers()
    {
        User::customCreate(1, 'admin', bcrypt('admin12345'), 'admin@gmail.com', '000');
        User::customCreate(2, 'bendahara', bcrypt('admin12345'), 'bendahara@gmail.com', '000');
        User::customCreate(3, 'content_creator', bcrypt('admin12345'), 'user@gmail.com', '000');
        User::customCreate(3, 'alfiansyah', bcrypt('admin12345'), 'user1@gmail.com', '000');
        User::customCreate(3, 'bayu', bcrypt('admin12345'), 'user2@gmail.com', '000');
        User::customCreate(3, 'riswandono', bcrypt('admin12345'), 'user3@gmail.com', '000');
        User::customCreate(3, 'albarido', bcrypt('admin12345'), 'user4@gmail.com', '000');
        User::customCreate(3, 'zaky', bcrypt('admin12345'), 'user5@gmail.com', '000');
    }

    private function generateDraft()
    {
        Draft::customCreate('1703690885.png', 'judul berita 1', 'kata kunci 1', 'lorem ipsum dolor sit amet, consectetur adipiscing elit', 'draft', 4);
        Draft::customCreate('1703690924.png', 'judul berita 2', 'kata kunci 2', 'lorem ipsum dolor sit amet, consectetur adipiscing elit', 'draft', 4);
        Draft::customCreate('1703690980.png', 'judul berita 3', 'kata kunci 3', 'lorem ipsum dolor sit amet, consectetur adipiscing elit', 'draft', 4);
        Draft::customCreate('1703691041.png', 'judul berita 4', 'kata kunci 4', 'lorem ipsum dolor sit amet, consectetur adipiscing elit', 'draft', 4);
        Draft::customCreate('1703692129.png', 'judul berita 5', 'kata kunci 5', 'lorem ipsum dolor sit amet, consectetur adipiscing elit', 'draft', 4);
        Draft::customCreate('1703692268.png', 'judul berita 6', 'kata kunci 6', 'lorem ipsum dolor sit amet, consectetur adipiscing elit', 'submitted', 5);
        Draft::customCreate('1704333312.jpg', 'judul berita 7', 'kata kunci 7', 'lorem ipsum dolor sit amet, consectetur adipiscing elit', 'submitted', 5);
        Draft::customCreate('1704333504.jpg', 'judul berita 8', 'kata kunci 8', 'lorem ipsum dolor sit amet, consectetur adipiscing elit', 'submitted', 5);
        Draft::customCreate('1704339658.jpg', 'judul berita 9', 'kata kunci 9', 'lorem ipsum dolor sit amet, consectetur adipiscing elit', 'submitted', 5);
        Draft::customCreate('1704596715.png', 'judul berita 10', 'kata kunci 10', 'lorem ipsum dolor sit amet, consectetur adipiscing elit', 'submitted', 5);
        Draft::customCreate('1704597055.png', 'judul berita 11', 'kata kunci 11', 'lorem ipsum dolor sit amet, consectetur adipiscing elit', 'submitted', 6);
        Draft::customCreate('1704597080.png', 'judul berita 12', 'kata kunci 12', 'lorem ipsum dolor sit amet, consectetur adipiscing elit', 'submitted', 6);
        Draft::customCreate('1704607769.png', 'judul berita 13', 'kata kunci 13', 'lorem ipsum dolor sit amet, consectetur adipiscing elit', 'submitted', 6);
        Draft::customCreate('1704608276.png', 'judul berita 14', 'kata kunci 14', 'lorem ipsum dolor sit amet, consectetur adipiscing elit', 'submitted', 6);
        Draft::customCreate('1704609499.png', 'judul berita 15', 'kata kunci 15', 'lorem ipsum dolor sit amet, consectetur adipiscing elit', 'submitted', 6);
        Draft::customCreate('1704610724.png', 'judul berita 16', 'kata kunci 16', 'lorem ipsum dolor sit amet, consectetur adipiscing elit', 'submitted', 7);
        Draft::customCreate('1704611075.png', 'judul berita 17', 'kata kunci 17', 'lorem ipsum dolor sit amet, consectetur adipiscing elit', 'submitted', 7);
        Draft::customCreate('1704633053.png', 'judul berita 18', 'kata kunci 18', 'lorem ipsum dolor sit amet, consectetur adipiscing elit', 'submitted', 7);
        Draft::customCreate('1704633080.jpg', 'judul berita 19', 'kata kunci 19', 'lorem ipsum dolor sit amet, consectetur adipiscing elit', 'submitted', 7);
        Draft::customCreate('1704633099.png', 'judul berita 20', 'kata kunci 20', 'lorem ipsum dolor sit amet, consectetur adipiscing elit', 'submitted', 7);
        Draft::customCreate('1704633508.jpg', 'judul berita 21', 'kata kunci 21', 'lorem ipsum dolor sit amet, consectetur adipiscing elit', 'submitted', 8);
    }
    private function generateReview()
    {
        Review::customCreate(6, 'menunggu', 1, 50, 'masukkan catatan');
        Review::customCreate(7, 'menunggu', 2, 100, 'masukkan catatan');
        Review::customCreate(8, 'menunggu', 3, 100, 'masukkan catatan');
        Review::customCreate(9, 'ditolak', 4, 100, 'ada unsur sara');
        Review::customCreate(10, 'ditolak', 5, 100, 'berpotensi menimbulkan perpecahan');
        Review::customCreate(11, 'ditolak', 6, 100, 'terdapat kemungkinan hoax');
        Review::customCreate(12, 'diterima', 7, 150, 'bagus');
        Review::customCreate(13, 'diterima', 1, 80, 'menarik');
        Review::customCreate(14, 'diterima', 2, 90, 'idenya fresh');
        Review::customCreate(15, 'diterima', 3, 110, 'data valid');
        Review::customCreate(16, 'diterima', 4, 120, 'informatif');
        Review::customCreate(17, 'diterima', 5, 100, 'isu terkini');
        Review::customCreate(18, 'diterima', 6, 100, 'aktual');
        Review::customCreate(19, 'diterima', 7, 100, 'tidak membosankan');
        Review::customCreate(20, 'diterima', 1, 100, 'bermanfaat');
        Review::customCreate(21, 'diterima', 2, 100, 'mengandung nilai baik');
    }
    private function generateDompet()
    {
        Dompet::customCreate('', 7, '2023-03-04', 100, 'unwithdraw');
        Dompet::customCreate('', 7, '2023-03-05', 100, 'unwithdraw');
        Dompet::customCreate('', 8, '2023-03-01', 100, 'unwithdraw');
        Dompet::customCreate('', 8, '2023-03-04', 100, 'unwithdraw');
        Dompet::customCreate('', 9, '2023-03-05', 100, 'unwithdraw');
        Dompet::customCreate('', 10, '2023-03-06', 100, 'unwithdraw');
        Dompet::customCreate('', 7, '2023-03-07', 100, 'unwithdraw');
        Dompet::customCreate('', 8, '2023-03-06', 100, 'unwithdraw');
        Dompet::customCreate('', 9, '2023-03-07', 100, 'unwithdraw');
        Dompet::customCreate('', 9, '2023-03-08', 100, 'unwithdraw');
    }
    private function generateBerita()
    {
        Berita::customCreate(1, 1000);
        Berita::customCreate(2, 1100);
        Berita::customCreate(3, 1200);
        Berita::customCreate(4, 1300);
        Berita::customCreate(5, 1400);
        Berita::customCreate(6, 1500);
        Berita::customCreate(7, 1600);
        Berita::customCreate(8, 1700);
        Berita::customCreate(9, 1800);
        Berita::customCreate(10, 1900);
        Berita::customCreate(11, 2000);
        Berita::customCreate(12, 1200);
        Berita::customCreate(13, 1300);
        Berita::customCreate(14, 1100);
        Berita::customCreate(15, 1500);
        Berita::customCreate(16, 1900);
    }

    private function generateCategories()
    {
        Kategori::customCreate('Politik');
        Kategori::customCreate('Dunia');
        Kategori::customCreate('Ekonomi');
        Kategori::customCreate('Sains & Teknologi');
        Kategori::customCreate('Bisnis');
        Kategori::customCreate('Travel');
        Kategori::customCreate('Iklim');
    }
}
