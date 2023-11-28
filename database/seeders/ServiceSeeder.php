<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        // Laundry 1
        Service::create([
            'laundry_sepatu_id'  => 1,
            'serviceName'  => 'Clean Basic Shoe',
            'servicePrice'  => 50000,
            'serviceDescription'  => 'Membersihkan sepatu dengan detail',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 1,
            'serviceName'  => 'Repair Basic Shoe',
            'servicePrice'  => 90000,
            'serviceDescription'  => 'Membetulkan sepatu yang rusak',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 1,
            'serviceName'  => 'Repaint Basic Shoe',
            'servicePrice'  => 120000,
            'serviceDescription'  => 'Mewarnai kembali sepatu yang pudar',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 1,
            'serviceName'  => 'Unyellowing Basic Shoe',
            'servicePrice'  => 120000,
            'serviceDescription'  => 'Memutihkan sepatu yang pudar',
        ]);

        // Launry 2
        Service::create([
            'laundry_sepatu_id'  => 2,
            'serviceName'  => 'Shoe Laundry 1 Pair',
            'servicePrice'  => 85000,
            'serviceDescription'  => 'Mengerjakan segala jenis sepatu dengan segala kondisi',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 2,
            'serviceName'  => 'Shoe Laundry 2-3 Per Pair',
            'servicePrice'  => 75000,
            'serviceDescription'  => 'Harga laundry 2-3 per pasang segala jenis sepatu dengan segala kondisi',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 2,
            'serviceName'  => 'Shoe Laundry 4 or More Per Pair',
            'servicePrice'  => 70000,
            'serviceDescription'  => 'Harga laundry 4 per pasang atau lebih segala jenis sepatu dengan segala kondisi',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 2,
            'serviceName'  => 'One Day Service',
            'servicePrice'  => 95000,
            'serviceDescription'  => 'Jasa pengerjaan durasi 24 jam setelah sepatu kami terima',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 2,
            'serviceName'  => 'Kid Shoes',
            'servicePrice'  => 55000,
            'serviceDescription'  => 'Harga laundry sepatu anak dengan maksimum ukuran 34',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 2,
            'serviceName'  => 'Sandal Cleaning',
            'servicePrice'  => 55000,
            'serviceDescription'  => 'Jasa pengerjaan laundry segala jenis sandal dengan segala kondisi',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 2,
            'serviceName'  => 'Sole Repair/Replace',
            'servicePrice'  => 130000,
            'serviceDescription'  => 'Jasa pengerjaan jahit dan lem bagian outside midsole agar sepatu kembali prima sudah termasuk laundry',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 2,
            'serviceName'  => 'Unyellowing Midsole',
            'servicePrice'  => 180000,
            'serviceDescription'  => 'Melapisi midsole dengan cairan khusus agar mencerahkan kembali sepatu menguning sudah termasuk laundry',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 2,
            'serviceName'  => 'Repaint Shoes',
            'servicePrice'  => 180000,
            'serviceDescription'  => 'Mengembalikan warna sepatu kembali prima sudah termasuk laundry',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 2,
            'serviceName'  => 'Sole Protect',
            'servicePrice'  => 210000,
            'serviceDescription'  => 'Jasa pemasangan gel pelapis sepatu untuk melindungi bagian outsole dengan laundry',
        ]);


        // Laundry 3
        Service::create([
            'laundry_sepatu_id'  => 3,
            'serviceName'  => 'Basic Clean Standard Material',
            'servicePrice'  => 60000,
            'serviceDescription'  => 'Basic cleaning on the upper & middle part of the shoes',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 3,
            'serviceName'  => 'Basic Clean Premium Material',
            'servicePrice'  => 70000,
            'serviceDescription'  => 'Basic cleaning on the upper & middle part of the shoes',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 3,
            'serviceName'  => 'Deep Clean Standard Material',
            'servicePrice'  => 100000,
            'serviceDescription'  => 'Deep clean, deep undersole, lace cleaning, freshner, insole and lining cleaning',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 3,
            'serviceName'  => 'Deep Clean Premium Material',
            'servicePrice'  => 120000,
            'serviceDescription'  => 'Deep clean, deep undersole, lace cleaning, freshner, insole and lining cleaning',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 3,
            'serviceName'  => 'Special Treatment',
            'servicePrice'  => 200000,
            'serviceDescription'  => 'Meticulous attention to detail, deep clean, deep undersole, lace cleaning, freshner, insole and lining cleaning',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 3,
            'serviceName'  => 'Repaint Upper part',
            'servicePrice'  => 300000,
            'serviceDescription'  => 'Restore the fading color in upper part of the shoes',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 3,
            'serviceName'  => 'Repaint Midsole part',
            'servicePrice'  => 300000,
            'serviceDescription'  => 'Restore the fading color in upper part of the shoes',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 3,
            'serviceName'  => 'Special Color',
            'servicePrice'  => 450000,
            'serviceDescription'  => 'Give special color to the shoes',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 3,
            'serviceName'  => 'Custom Repaint',
            'servicePrice'  => 650000,
            'serviceDescription'  => 'Give custom repaint to the shoes',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 3,
            'serviceName'  => 'Repair Reglue',
            'servicePrice'  => 170000,
            'serviceDescription'  => 'Regluing the open part of the shoes',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 3,
            'serviceName'  => 'Repair Stitch',
            'servicePrice'  => 185000,
            'serviceDescription'  => 'Stitching the open part of the shoes',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 3,
            'serviceName'  => 'Custom repair by request',
            'servicePrice'  => 200000,
            'serviceDescription'  => 'Give custom repair by request',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 3,
            'serviceName'  => 'Unyellowing',
            'servicePrice'  => 170000,
            'serviceDescription'  => 'Whiten back the rubber shoes that have been yellowing because of humid air, crusted dirt and axidant',
        ]);

        // Laundry 4
        Service::create([
            'laundry_sepatu_id'  => 4,
            'serviceName'  => 'Medium Cleaning',
            'servicePrice'  => 70000,
            'serviceDescription'  => 'All materials, all parts, 4-5 days',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 4,
            'serviceName'  => 'Hard Cleaning',
            'servicePrice'  => 80000,
            'serviceDescription'  => 'All materials, all parts, 4-5 days',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 4,
            'serviceName'  => 'Woman Shoes',
            'servicePrice'  => 35000,
            'serviceDescription'  => 'Heels, flat, wedge, etc.',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 4,
            'serviceName'  => 'Kid Shoes',
            'servicePrice'  => 35000,
            'serviceDescription'  => '<18cm',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 4,
            'serviceName'  => 'Unyellowing',
            'servicePrice'  => 75000,
            'serviceDescription'  => 'Remove yellow stain on the undersole',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 4,
            'serviceName'  => 'Repaint Midsole',
            'servicePrice'  => 150000,
            'serviceDescription'  => 'Restore faded color of the shoes, include deep cleaning',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 4,
            'serviceName'  => 'Repaint Body',
            'servicePrice'  => 200000,
            'serviceDescription'  => 'Restore faded color of the shoes, include deep cleaning',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 4,
            'serviceName'  => 'Recolour',
            'servicePrice'  => 250000,
            'serviceDescription'  => 'Change the color of the shoes, include deep cleaning',
        ]);



        Service::create([
            'laundry_sepatu_id'  => 5,
            'serviceName'  => 'Deep Cleaning Mild',
            'servicePrice'  => 50000,
            'serviceDescription'  => 'Clean the shoes',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 5,
            'serviceName'  => 'Deep Cleaning Hard',
            'servicePrice'  => 70000,
            'serviceDescription'  => 'Clean the shoes',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 5,
            'serviceName'  => 'Boots Canvas Putih Chekerboard Mild',
            'servicePrice'  => 60000,
            'serviceDescription'  => 'Clean the shoes',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 5,
            'serviceName'  => 'Boots Canvas Putih Chekerboard Hard',
            'servicePrice'  => 100000,
            'serviceDescription'  => 'Clean the shoes',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 5,
            'serviceName'  => 'Repaint Mild',
            'servicePrice'  => 100000,
            'serviceDescription'  => 'Repaint the shoes',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 5,
            'serviceName'  => 'Repaint Hard',
            'servicePrice'  => 200000,
            'serviceDescription'  => 'Repaint the shoes',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 5,
            'serviceName'  => 'Unyellowing Mild',
            'servicePrice'  => 50000,
            'serviceDescription'  => 'Unyellowing the shoes',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 5,
            'serviceName'  => 'Unyellowing Hard',
            'servicePrice'  => 700000,
            'serviceDescription'  => 'Unyellowing the shoes',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 5,
            'serviceName'  => 'Reglue',
            'servicePrice'  => 100000,
            'serviceDescription'  => 'Reglue the shoes',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 5,
            'serviceName'  => 'Repair',
            'servicePrice'  => 150000,
            'serviceDescription'  => 'Repair the shoes',
        ]);



        // Laundry 6
        Service::create([
            'laundry_sepatu_id'  => 6,
            'serviceName'  => 'Sneaker Clean',
            'servicePrice'  => 55000,
            'serviceDescription'  => 'Cleaning, detailing, finishing',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 6,
            'serviceName'  => 'Suede',
            'servicePrice'  => 85000,
            'serviceDescription'  => 'Cleaning, oil, moisturizing, finishing',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 6,
            'serviceName'  => 'Leather',
            'servicePrice'  => 85000,
            'serviceDescription'  => 'Cleaning, oil, streaming, finishing',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 6,
            'serviceName'  => 'White Shoes',
            'servicePrice'  => 75000,
            'serviceDescription'  => 'Cleaning, whitening, deodorant, finishing',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 6,
            'serviceName'  => 'Boots',
            'servicePrice'  => 100000,
            'serviceDescription'  => 'Cleaning, oil, moisturizing, deodorant, finishing',
        ]);

        // Laundry 7
        Service::create([
            'laundry_sepatu_id'  => 7,
            'serviceName'  => 'Fast Clean',
            'servicePrice'  => 30000,
            'serviceDescription'  => 'Clean the shoes',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 7,
            'serviceName'  => 'Deep Clean',
            'servicePrice'  => 50000,
            'serviceDescription'  => 'Clean the shoes',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 7,
            'serviceName'  => 'Deep Clean 3 Pair',
            'servicePrice'  => 99000,
            'serviceDescription'  => 'Clean 3 shoes',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 7,
            'serviceName'  => 'Leather or Boots',
            'servicePrice'  => 65000,
            'serviceDescription'  => 'Clean the leather or boots',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 7,
            'serviceName'  => 'Kids Shoes',
            'servicePrice'  => 35000,
            'serviceDescription'  => 'Clean the kids shoes 10-21 cm',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 7,
            'serviceName'  => 'Women Shoes',
            'servicePrice'  => 40000,
            'serviceDescription'  => 'Wedges, flat shoes, heels, oxford',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 7,
            'serviceName'  => 'Unyellowing',
            'servicePrice'  => 80000,
            'serviceDescription'  => 'Unyellowing the shoes include deep clean',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 7,
            'serviceName'  => 'Water Repellent',
            'servicePrice'  => 20000,
            'serviceDescription'  => 'Water repellent the shoes',
        ]);



        // Laundry 8
        Service::create([
            'laundry_sepatu_id'  => 8,
            'serviceName'  => 'Cuci Premium 3-5 Hari',
            'servicePrice'  => 90000,
            'serviceDescription'  => 'Deep clean luar dan dalam, tali, anti bakteri dan freshener',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 8,
            'serviceName'  => 'Cuci Kilat 24 jam',
            'servicePrice'  => 50000,
            'serviceDescription'  => 'Bagian luar sepatu tanpa tali',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 8,
            'serviceName'  => 'Cuci Prioritas 1-2 Hari',
            'servicePrice'  => 120000,
            'serviceDescription'  => 'Standard service dengan kecepatan maksimal',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 8,
            'serviceName'  => 'Cuci Trio 5-7 Hari',
            'servicePrice'  => 220000,
            'serviceDescription'  => 'Paket pencucian 3 sepatu, deep clean, tali, anti bakteri dan freshener untuk semua sepatu',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 8,
            'serviceName'  => 'Reglueing 3-5 Hari',
            'servicePrice'  => 150000,
            'serviceDescription'  => 'Menempelkan kembali sol yang sudah lepas',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 8,
            'serviceName'  => 'Unyellowing 3-5 Hari',
            'servicePrice'  => 100000,
            'serviceDescription'  => 'Membersihkan kembali sol yang menguning',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 8,
            'serviceName'  => 'Repaint 7-10 Hari',
            'servicePrice'  => 250000,
            'serviceDescription'  => 'Mewarnai ulang sepatu yang sudah pudar',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 8,
            'serviceName'  => 'Custom 10-14 Hari',
            'servicePrice'  => 300000,
            'serviceDescription'  => 'Mengubah desain sepatu / melukis',
        ]);

        // Laundry 9
        Service::create([
            'laundry_sepatu_id'  => 9,
            'serviceName'  => 'Cuci Sepatu',
            'servicePrice'  => 50000,
            'serviceDescription'  => 'Cuci sepatu biasa',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 9,
            'serviceName'  => 'Cuci Sepatu Kecil',
            'servicePrice'  => 35000,
            'serviceDescription'  => 'Cuci sepatu kecil ukuran < 33',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 9,
            'serviceName'  => 'Cuci Sandal',
            'servicePrice'  => 35000,
            'serviceDescription'  => 'Cuci sandal biasa',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 9,
            'serviceName'  => 'Jahit Sol Sepatu',
            'servicePrice'  => 80000,
            'serviceDescription'  => 'Jahit sol sepatu yang lepas',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 9,
            'serviceName'  => 'Lem Sol',
            'servicePrice'  => 30000,
            'serviceDescription'  => 'Lem sol sepatu yang lepas',
        ]);

        // Laundry 10
        Service::create([
            'laundry_sepatu_id'  => 10,
            'serviceName'  => 'Canvas',
            'servicePrice'  => 50000,
            'serviceDescription'  => 'Clean service untuk sepatu canvas',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 10,
            'serviceName'  => 'Suede / Nubuck',
            'servicePrice'  => 60000,
            'serviceDescription'  => 'Clean service untuk sepatu suede/nubuck',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 10,
            'serviceName'  => 'Synthetic',
            'servicePrice'  => 60000,
            'serviceDescription'  => 'Clean service untuk sepatu synthethic',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 10,
            'serviceName'  => 'Genuine Leather',
            'servicePrice'  => 70000,
            'serviceDescription'  => 'Clean service untuk sepatu genuine leather',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 10,
            'serviceName'  => 'Sandals',
            'servicePrice'  => 25000,
            'serviceDescription'  => 'Sandal cleaning service',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 10,
            'serviceName'  => 'Unyellowing',
            'servicePrice'  => 80000,
            'serviceDescription'  => 'Unyellowing service untuk sepatu',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 10,
            'serviceName'  => 'White Shoe',
            'servicePrice'  => 70000,
            'serviceDescription'  => 'White shoe service untuk sepatu',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 10,
            'serviceName'  => '3 Canva shoe',
            'servicePrice'  => 135,
            'serviceDescription'  => 'Paket 3 canva shoe',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 10,
            'serviceName'  => '3 Leather Shoe',
            'servicePrice'  => 185000,
            'serviceDescription'  => 'Paket 3 leather shoe',
        ]);



        // Laundry 11
        Service::create([
            'laundry_sepatu_id'  => 11,
            'serviceName'  => 'Canvas',
            'servicePrice'  => 40000,
            'serviceDescription'  => 'Clean service untuk sepatu canvas',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 11,
            'serviceName'  => 'Suede',
            'servicePrice'  => 45000,
            'serviceDescription'  => 'Clean service untuk sepatu suede',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 11,
            'serviceName'  => 'Nubuck / Synthetic',
            'servicePrice'  => 50000,
            'serviceDescription'  => 'Clean service untuk sepatu nubuck/synthethic',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 11,
            'serviceName'  => 'Leather Treatment',
            'servicePrice'  => 55000,
            'serviceDescription'  => 'Traetment service untuk sepatu leather',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 11,
            'serviceName'  => 'Women Shoes',
            'servicePrice'  => 40000,
            'serviceDescription'  => 'Clean service untuk sepatu wanita',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 11,
            'serviceName'  => 'Midsole unyellowing',
            'servicePrice'  => 100000,
            'serviceDescription'  => 'Midsole unyellowing service untuk sepatu',
        ]);

        // Laundry 12
        Service::create([
            'laundry_sepatu_id'  => 12,
            'serviceName'  => 'Deep Clean',
            'servicePrice'  => 50000,
            'serviceDescription'  => 'Canvas, leather & suede',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 12,
            'serviceName'  => 'White Shoes',
            'servicePrice'  => 60000,
            'serviceDescription'  => 'Clean service untuk sepatu putih',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 12,
            'serviceName'  => 'Heels',
            'servicePrice'  => 35000,
            'serviceDescription'  => 'Clean service untuk sepatu heels',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 12,
            'serviceName'  => 'Kids Shoes',
            'servicePrice'  => 35000,
            'serviceDescription'  => 'Clean service untuk sepatu anak',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 12,
            'serviceName'  => 'Sandal',
            'servicePrice'  => 25000,
            'serviceDescription'  => 'Clean service untuk sendal',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 12,
            'serviceName'  => 'Whitening (Canvas)',
            'servicePrice'  => 65000,
            'serviceDescription'  => 'Whitening service untuk sepatu canvas',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 12,
            'serviceName'  => 'Midsole Unyellowing',
            'servicePrice'  => 80000,
            'serviceDescription'  => 'Midsole unyellowing service untuk sepatu',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 12,
            'serviceName'  => 'Repaint Canvas',
            'servicePrice'  => 175000,
            'serviceDescription'  => 'Repaint service untuk sepatu canvas',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 12,
            'serviceName'  => 'Repaint-Leather',
            'servicePrice'  => 215000,
            'serviceDescription'  => 'Repaint service untuk sepatu leather',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 12,
            'serviceName'  => 'Sol + Reglue',
            'servicePrice'  => 45000,
            'serviceDescription'  => 'Sol + reglue service untuk sepatu',
        ]);


        // Fresh Clean Laundry
        Service::create([
            'laundry_sepatu_id'  => 13,
            'serviceName'  => 'Deep Clean Standard',
            'servicePrice'  => 50000,
            'serviceDescription'  => 'Sepatu dicuci biasa saja dengan estimasi 3 hari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 13,
            'serviceName'  => 'Express Deep Clean - 6 HOURS WARRANTEE',
            'servicePrice'  => 80000,
            'serviceDescription'  => 'Sepatu dicuci biasa saja dengan estimasi 3 hari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 13,
            'serviceName'  => 'Repaint - Upper Sole',
            'servicePrice'  => 150000,
            'serviceDescription'  => 'Sepatu dicuci biasa saja dengan estimasi 3 hari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 13,
            'serviceName'  => 'Repaint - Mid Sole',
            'servicePrice'  => 130000,
            'serviceDescription'  => 'Sepatu dicuci biasa saja dengan estimasi 3 hari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 13,
            'serviceName'  => 'Repaint - Full Body',
            'servicePrice'  => 175000,
            'serviceDescription'  => 'Sepatu dicuci biasa saja dengan estimasi 3 hari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 13,
            'serviceName'  => 'Unyellowing - Hard Rubber',
            'servicePrice'  => 50000,
            'serviceDescription'  => 'Sepatu dicuci biasa saja dengan estimasi 3 hari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 13,
            'serviceName'  => 'Unyellowing - Icy Sole',
            'servicePrice'  => 250000,
            'serviceDescription'  => 'Sepatu dicuci biasa saja dengan estimasi 3 hari',
        ]);

        // The Shoes Bar Gading Serpong
        Service::create([
            'laundry_sepatu_id'  => 14,
            'serviceName'  => 'Canvas Deep Clean',
            'servicePrice'  => 50000,
            'serviceDescription'  => 'Canvas dicuci',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 14,
            'serviceName'  => 'Canvas Hard Clean',
            'servicePrice'  => 60000,
            'serviceDescription'  => 'Canvas dicuci',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 14,
            'serviceName'  => 'Suide Deep Clean',
            'servicePrice'  => 55000,
            'serviceDescription'  => 'Canvas dicuci',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 14,
            'serviceName'  => 'Leather Deep Clean',
            'servicePrice'  => 60000,
            'serviceDescription'  => 'Canvas dicuci',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 14,
            'serviceName'  => 'Leather Hard Clean',
            'servicePrice'  => 70000,
            'serviceDescription'  => 'Canvas dicuci',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 14,
            'serviceName'  => 'Boots Deep Clean',
            'servicePrice'  => 65000,
            'serviceDescription'  => 'Canvas dicuci',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 14,
            'serviceName'  => 'Boots Hard Clean',
            'servicePrice'  => 75000,
            'serviceDescription'  => 'Canvas dicuci',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 14,
            'serviceName'  => 'Woman Shoes',
            'servicePrice'  => 35000,
            'serviceDescription'  => 'Canvas dicuci',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 14,
            'serviceName'  => 'Kids Shoes',
            'servicePrice'  => 30000,
            'serviceDescription'  => 'Canvas dicuci',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 14,
            'serviceName'  => 'Fast Clean',
            'servicePrice'  => 35000,
            'serviceDescription'  => 'Canvas dicuci',
        ]);


        // Rakun Cuci Sepatu
        Service::create([
            'laundry_sepatu_id'  => 15,
            'serviceName'  => 'One Day Service',
            'servicePrice'  => 99000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 15,
            'serviceName'  => 'Reglue',
            'servicePrice'  => 75000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 15,
            'serviceName'  => 'Unyellowing',
            'servicePrice'  => 80000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 15,
            'serviceName'  => 'Whitening',
            'servicePrice'  => 80000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 15,
            'serviceName'  => 'Repaint',
            'servicePrice'  => 100000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);

        // tinyTidy Shoe
        Service::create([
            'laundry_sepatu_id'  => 16,
            'serviceName'  => 'Deep Cleaning',
            'servicePrice'  => 100000,
            'serviceDescription'  => 'Dicuci Secara Menyeluruh',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 16,
            'serviceName'  => 'Recoloring',
            'servicePrice'  => 200000,
            'serviceDescription'  => 'Dicuci Secara Menyeluruh',
        ]);

        // Shoeborn Shoe And Bag Care
        Service::create([
            'laundry_sepatu_id'  => 17,
            'serviceName'  => 'Retouch',
            'servicePrice'  => 50000,
            'serviceDescription'  => 'Didetailin',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 17,
            'serviceName'  => 'Shoe Repaint Upper',
            'servicePrice'  => 175000,
            'serviceDescription'  => 'Didetailin',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 17,
            'serviceName'  => 'Shoe Repaint Midsole',
            'servicePrice'  => 150000,
            'serviceDescription'  => 'Didetailin',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 17,
            'serviceName'  => 'Shoe Reconstruction',
            'servicePrice'  => 150000,
            'serviceDescription'  => 'Didetailin',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 17,
            'serviceName'  => 'Shoe Reglue',
            'servicePrice'  => 80000,
            'serviceDescription'  => 'Didetailin',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 17,
            'serviceName'  => 'Shoe Deep Clean',
            'servicePrice'  => 40000,
            'serviceDescription'  => 'Didetailin',
        ]);


        // Fix Bersih
        Service::create([
            'laundry_sepatu_id'  => 18,
            'serviceName'  => 'Deep Cleaning 3 Pairs',
            'servicePrice'  => 99000,
            'serviceDescription'  => 'Tiga Sepatu Dicuciin',
        ]);


        // Litfeeds
        Service::create([
            'laundry_sepatu_id'  => 19,
            'serviceName'  => 'Deep Clean Sneakers Warna Gelap',
            'servicePrice'  => 50000,
            'serviceDescription'  => 'Dicuciin tapi sepatu warna gelap',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 19,
            'serviceName'  => 'Deep Clean Sneakers Warna Terang',
            'servicePrice'  => 60000,
            'serviceDescription'  => 'Dicuciin tapi sepatu warna gelap',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 19,
            'serviceName'  => 'Deep Clean Boots Non Leather',
            'servicePrice'  => 50000,
            'serviceDescription'  => 'Dicuciin tapi sepatu warna gelap',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 19,
            'serviceName'  => 'Deep Clean Leather Low',
            'servicePrice'  => 60000,
            'serviceDescription'  => 'Dicuciin tapi sepatu warna gelap',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 19,
            'serviceName'  => 'Deep Clean Leather Mid',
            'servicePrice'  => 70000,
            'serviceDescription'  => 'Dicuciin tapi sepatu warna gelap',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 19,
            'serviceName'  => 'Deep Clean Leather High',
            'servicePrice'  => 80000,
            'serviceDescription'  => 'Dicuciin tapi sepatu warna gelap',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 19,
            'serviceName'  => 'Deep Clean Flat Shoes',
            'servicePrice'  => 40000,
            'serviceDescription'  => 'Dicuciin tapi sepatu warna gelap',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 19,
            'serviceName'  => 'Deep Clean Kiddos',
            'servicePrice'  => 30000,
            'serviceDescription'  => 'Dicuciin tapi sepatu warna gelap',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 19,
            'serviceName'  => 'Sandals',
            'servicePrice'  => 30000,
            'serviceDescription'  => 'Dicuciin tapi sepatu warna gelap',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 19,
            'serviceName'  => 'Whitening Upper',
            'servicePrice'  => 70000,
            'serviceDescription'  => 'Dicuciin tapi sepatu warna gelap',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 19,
            'serviceName'  => 'Unyellowing Midsole',
            'servicePrice'  => 70000,
            'serviceDescription'  => 'Dicuciin tapi sepatu warna gelap',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 19,
            'serviceName'  => 'All White Unyellowing',
            'servicePrice'  => 80000,
            'serviceDescription'  => 'Dicuciin tapi sepatu warna gelap',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 19,
            'serviceName'  => 'Express Cleaning 24 Hours',
            'servicePrice'  => 200000,
            'serviceDescription'  => 'Dicuciin tapi sepatu warna gelap',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 19,
            'serviceName'  => 'Recolor Canvas/Suede/Nubcuk',
            'servicePrice'  => 150000,
            'serviceDescription'  => 'Dicuciin tapi sepatu warna gelap',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 19,
            'serviceName'  => 'Recolor Leather Low',
            'servicePrice'  => 175000,
            'serviceDescription'  => 'Dicuciin tapi sepatu warna gelap',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 19,
            'serviceName'  => 'Recolor Leather Mid',
            'servicePrice'  => 185000,
            'serviceDescription'  => 'Dicuciin tapi sepatu warna gelap',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 19,
            'serviceName'  => 'Recolor Leather High',
            'servicePrice'  => 200000,
            'serviceDescription'  => 'Dicuciin tapi sepatu warna gelap',
        ]);

        //Washins
        Service::create([
            'laundry_sepatu_id'  => 20,
            'serviceName'  => 'Fast Clean Regular',
            'servicePrice'  => 30000,
            'serviceDescription'  => 'Dicuci dengan cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 20,
            'serviceName'  => 'Fast Clean White Shoes',
            'servicePrice'  => 40000,
            'serviceDescription'  => 'Dicuci dengan cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 20,
            'serviceName'  => 'Deep Cleaning Canvas/Sneakers/Running',
            'servicePrice'  => 70000,
            'serviceDescription'  => 'Dicuci dengan cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 20,
            'serviceName'  => 'Deep Cleaning Suede/Leather',
            'servicePrice'  => 70000,
            'serviceDescription'  => 'Dicuci dengan cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 20,
            'serviceName'  => 'Deep Cleaning Sandals',
            'servicePrice'  => 30000,
            'serviceDescription'  => 'Dicuci dengan cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 20,
            'serviceName'  => 'Deep Cleaning Kids',
            'servicePrice'  => 25000,
            'serviceDescription'  => 'Dicuci dengan cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 20,
            'serviceName'  => 'Unyellowing',
            'servicePrice'  => 70000,
            'serviceDescription'  => 'Dicuci dengan cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 20,
            'serviceName'  => 'Repaint Midsole',
            'servicePrice'  => 120000,
            'serviceDescription'  => 'Dicuci dengan cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 20,
            'serviceName'  => 'Repaint Upper Canvas',
            'servicePrice'  => 150000,
            'serviceDescription'  => 'Dicuci dengan cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 20,
            'serviceName'  => 'Repaint Suede/Leather',
            'servicePrice'  => 180000,
            'serviceDescription'  => 'Dicuci dengan cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 20,
            'serviceName'  => 'Reglue Under 50%',
            'servicePrice'  => 15000,
            'serviceDescription'  => 'Dicuci dengan cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 20,
            'serviceName'  => 'Reglue Upto 50%',
            'servicePrice'  => 30000,
            'serviceDescription'  => 'Dicuci dengan cepat',
        ]);


        Service::create([
            'laundry_sepatu_id'  => 21,
            'serviceName'  => 'Deep Cleaning Standad 4 - 5 Hari',
            'servicePrice'  => 40000,
            'serviceDescription'  => 'Dicuci dengan waktu 4 - 5 hari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 21,
            'serviceName'  => 'Deep Cleaning Reguler 2 - 3 Hari',
            'servicePrice'  => 50000,
            'serviceDescription'  => 'Dicuci dengan waktu 4 - 5 hari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 21,
            'serviceName'  => 'Deep Cleaning Daily 1 Hari',
            'servicePrice'  => 70000,
            'serviceDescription'  => 'Dicuci dengan waktu 4 - 5 hari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 21,
            'serviceName'  => 'Deep Cleaning Kids/Toddler 2-3 Hari',
            'servicePrice'  => 25000,
            'serviceDescription'  => 'Dicuci dengan waktu 4 - 5 hari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 21,
            'serviceName'  => 'Deep Cleaning Wedges, Heels 2-3 Hari',
            'servicePrice'  => 35000,
            'serviceDescription'  => 'Dicuci dengan waktu 4 - 5 hari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 21,
            'serviceName'  => 'Unyellowing Sole - 7 Hari',
            'servicePrice'  => 85000,
            'serviceDescription'  => 'Dicuci dengan waktu 4 - 5 hari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 21,
            'serviceName'  => 'Unyellowing Canvas - 10 Hari',
            'servicePrice'  => 85000,
            'serviceDescription'  => 'Dicuci dengan waktu 4 - 5 hari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 21,
            'serviceName'  => 'Unyellowing Nilon - 10 Hari',
            'servicePrice'  => 85000,
            'serviceDescription'  => 'Dicuci dengan waktu 4 - 5 hari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 21,
            'serviceName'  => 'Remove Stain - 10 Hari',
            'servicePrice'  => 100000,
            'serviceDescription'  => 'Dicuci dengan waktu 4 - 5 hari',
        ]);


        Service::create([
            'laundry_sepatu_id'  => 22,
            'serviceName'  => 'Cuci Cepat 3 Jam Color',
            'servicePrice'  => 110000,
            'serviceDescription'  => 'Dicuci dengan waktu 3 jam untuk sepatu non putih',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 22,
            'serviceName'  => 'Cuci Cepat 3 Jam White',
            'servicePrice'  => 120000,
            'serviceDescription'  => 'Dicuci dengan waktu 3 jam untuk sepatu non putih',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 22,
            'serviceName'  => 'Cuci Cepat Putih/Leather 2 Hari',
            'servicePrice'  => 70000,
            'serviceDescription'  => 'Dicuci dengan waktu 3 jam untuk sepatu non putih',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 22,
            'serviceName'  => 'Cuci Cepat Putih/Leather 1 Hari',
            'servicePrice'  => 80000,
            'serviceDescription'  => 'Dicuci dengan waktu 3 jam untuk sepatu non putih',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 22,
            'serviceName'  => 'Whitening',
            'servicePrice'  => 120000,
            'serviceDescription'  => 'Dicuci dengan waktu 3 jam untuk sepatu non putih',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 22,
            'serviceName'  => 'Cuci Cepat 6 Jam Color',
            'servicePrice'  => 90000,
            'serviceDescription'  => 'Dicuci dengan waktu 3 jam untuk sepatu non putih',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 22,
            'serviceName'  => 'Cuci Cepat 6 Jam White',
            'servicePrice'  => 100000,
            'serviceDescription'  => 'Dicuci dengan waktu 3 jam untuk sepatu non putih',
        ]);


        Service::create([
            'laundry_sepatu_id'  => 23,
            'serviceName'  => 'Fast Cleaning',
            'servicePrice'  => 30000,
            'serviceDescription'  => 'Dicuci dengan Cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 23,
            'serviceName'  => 'Deep Cleaning Regular Mild',
            'servicePrice'  => 60000,
            'serviceDescription'  => 'Dicuci dengan Cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 23,
            'serviceName'  => 'Deep Cleaning Regular Hard',
            'servicePrice'  => 80000,
            'serviceDescription'  => 'Dicuci dengan Cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 23,
            'serviceName'  => 'Deep Cleaning Premium Mild',
            'servicePrice'  => 120000,
            'serviceDescription'  => 'Dicuci dengan Cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 23,
            'serviceName'  => 'Deep Cleaning Premium Hard',
            'servicePrice'  => 180000,
            'serviceDescription'  => 'Dicuci dengan Cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 23,
            'serviceName'  => 'Unyellowing and Whitening Mild',
            'servicePrice'  => 90000,
            'serviceDescription'  => 'Dicuci dengan Cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 23,
            'serviceName'  => 'Unyellowing and Whitening Hard',
            'servicePrice'  => 130000,
            'serviceDescription'  => 'Dicuci dengan Cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 23,
            'serviceName'  => 'Unyellowing and Whitening Premium',
            'servicePrice'  => 140000,
            'serviceDescription'  => 'Dicuci dengan Cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 23,
            'serviceName'  => 'Leather Shoes Care Mild',
            'servicePrice'  => 60000,
            'serviceDescription'  => 'Dicuci dengan Cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 23,
            'serviceName'  => 'Leather Shoes Care Hard',
            'servicePrice'  => 80000,
            'serviceDescription'  => 'Dicuci dengan Cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 23,
            'serviceName'  => 'Leather Shoes Premium Mild',
            'servicePrice'  => 120000,
            'serviceDescription'  => 'Dicuci dengan Cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 23,
            'serviceName'  => 'Leather Shoes Premium Hard',
            'servicePrice'  => 180000,
            'serviceDescription'  => 'Dicuci dengan Cepat',
        ]);


        Service::create([
            'laundry_sepatu_id'  => 24,
            'serviceName'  => 'Deep Cleaning Medium',
            'servicePrice'  => 50000,
            'serviceDescription'  => 'Cuci Sepatu Medium',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 24,
            'serviceName'  => 'Deep Cleaning Hard',
            'servicePrice'  => 60000,
            'serviceDescription'  => 'Cuci Sepatu Medium',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 24,
            'serviceName'  => 'Deep Cleaning Priority 2 Days',
            'servicePrice'  => 70000,
            'serviceDescription'  => 'Cuci Sepatu Medium',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 24,
            'serviceName'  => 'Repaint Upper Canvas',
            'servicePrice'  => 100000,
            'serviceDescription'  => 'Cuci Sepatu Medium',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 24,
            'serviceName'  => 'Repaint Upper Leather',
            'servicePrice'  => 120000,
            'serviceDescription'  => 'Cuci Sepatu Medium',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 24,
            'serviceName'  => 'Repaint Checker Board',
            'servicePrice'  => 150000,
            'serviceDescription'  => 'Cuci Sepatu Medium',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 24,
            'serviceName'  => 'Repaint Midsole',
            'servicePrice'  => 135000,
            'serviceDescription'  => 'Cuci Sepatu Medium',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 24,
            'serviceName'  => 'Repaint Boost',
            'servicePrice'  => 140000,
            'serviceDescription'  => 'Cuci Sepatu Medium',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 24,
            'serviceName'  => 'Unyellowing Midsole',
            'servicePrice'  => 85000,
            'serviceDescription'  => 'Cuci Sepatu Medium',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 24,
            'serviceName'  => 'Whitening',
            'servicePrice'  => 85000,
            'serviceDescription'  => 'Cuci Sepatu Medium',
        ]);


        Service::create([
            'laundry_sepatu_id'  => 25,
            'serviceName'  => 'Kids',
            'servicePrice'  => 15000,
            'serviceDescription'  => 'Cuci Sepatu Anak',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 25,
            'serviceName'  => 'Sandals',
            'servicePrice'  => 20000,
            'serviceDescription'  => 'Cuci Sepatu Anak',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 25,
            'serviceName'  => 'Deep Clean',
            'servicePrice'  => 30000,
            'serviceDescription'  => 'Cuci Sepatu Anak',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 25,
            'serviceName'  => 'Leather Treatment',
            'servicePrice'  => 45000,
            'serviceDescription'  => 'Cuci Sepatu Anak',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 25,
            'serviceName'  => 'Suede Treatment',
            'servicePrice'  => 45000,
            'serviceDescription'  => 'Cuci Sepatu Anak',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 25,
            'serviceName'  => 'Unyellowing Treatment',
            'servicePrice'  => 50000,
            'serviceDescription'  => 'Cuci Sepatu Anak',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 25,
            'serviceName'  => 'All White',
            'servicePrice'  => 60000,
            'serviceDescription'  => 'Cuci Sepatu Anak',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 25,
            'serviceName'  => 'Boots',
            'servicePrice'  => 80000,
            'serviceDescription'  => 'Cuci Sepatu Anak',
        ]);


        // Dinoshoes Bintaro Laundry Sepatu
        Service::create([
            'laundry_sepatu_id'  => 26,
            'serviceName'  => 'Fast Clean',
            'servicePrice'  => 30000,
            'serviceDescription'  => 'Cuci Sepatu Cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 26,
            'serviceName'  => 'Deep Clean',
            'servicePrice'  => 50000,
            'serviceDescription'  => 'Cuci Sepatu Cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 26,
            'serviceName'  => 'Deep Clean 3 pairs',
            'servicePrice'  => 99000,
            'serviceDescription'  => 'Cuci Sepatu Cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 26,
            'serviceName'  => 'Leather/Boots',
            'servicePrice'  => 65000,
            'serviceDescription'  => 'Cuci Sepatu Cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 26,
            'serviceName'  => 'Kids',
            'servicePrice'  => 35000,
            'serviceDescription'  => 'Cuci Sepatu Cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 26,
            'serviceName'  => 'Unyellowing',
            'servicePrice'  => 80000,
            'serviceDescription'  => 'Cuci Sepatu Cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 26,
            'serviceName'  => 'Water Reppelent',
            'servicePrice'  => 20000,
            'serviceDescription'  => 'Cuci Sepatu Cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 26,
            'serviceName'  => 'One Day Service',
            'servicePrice'  => 20000,
            'serviceDescription'  => 'Cuci Sepatu Cepat',
        ]);


        // Rakun Cuci Sepatu BSD Anggrek Loka
        Service::create([
            'laundry_sepatu_id'  => 27,
            'serviceName'  => 'One Day Service',
            'servicePrice'  => 99000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 27,
            'serviceName'  => 'Reglue',
            'servicePrice'  => 75000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 27,
            'serviceName'  => 'Unyellowing',
            'servicePrice'  => 80000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 27,
            'serviceName'  => 'Whitening',
            'servicePrice'  => 80000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 27,
            'serviceName'  => 'Repaint',
            'servicePrice'  => 100000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);


        // Cartel Shoes Care - Bintaro
        Service::create([
            'laundry_sepatu_id'  => 28,
            'serviceName'  => 'Deep Clean Medium',
            'servicePrice'  => 50000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 28,
            'serviceName'  => 'Deep Clean Hard',
            'servicePrice'  => 55000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 28,
            'serviceName'  => 'Fast Clean One Hour',
            'servicePrice'  => 35000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 28,
            'serviceName'  => 'Unyellowing Midsole Medium',
            'servicePrice'  => 80000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 28,
            'serviceName'  => 'Unyellowing Midsole Hard',
            'servicePrice'  => 90000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 28,
            'serviceName'  => 'Repaint Upper',
            'servicePrice'  => 125000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 28,
            'serviceName'  => 'Repaint Midsole',
            'servicePrice'  => 135000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 28,
            'serviceName'  => 'Repair Shoes Resole',
            'servicePrice'  => 175000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 28,
            'serviceName'  => 'Reglue',
            'servicePrice'  => 80000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);


        // Cuci Sepatu Texax99
        Service::create([
            'laundry_sepatu_id'  => 29,
            'serviceName'  => 'Cleaning Sepatu Standard',
            'servicePrice'  => 35000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 29,
            'serviceName'  => 'Cleaning Sepatu Boots',
            'servicePrice'  => 40000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 29,
            'serviceName'  => 'One Day Service',
            'servicePrice'  => 50000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 29,
            'serviceName'  => 'Reglue',
            'servicePrice'  => 20000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 29,
            'serviceName'  => 'Unyellowing Midsole',
            'servicePrice'  => 10000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 29,
            'serviceName'  => 'Midsole Whitening',
            'servicePrice'  => 100000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);

        // VROZ
        Service::create([
            'laundry_sepatu_id'  => 30,
            'serviceName'  => 'Deep Clean',
            'servicePrice'  => 50000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 30,
            'serviceName'  => 'Deep Clean Full White',
            'servicePrice'  => 60000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 30,
            'serviceName'  => 'Unyellowing',
            'servicePrice'  => 100000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 30,
            'serviceName'  => 'Whitening',
            'servicePrice'  => 100000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);


        // Laundry Sepatu Bintaro Clean Brush
        Service::create([
            'laundry_sepatu_id'  => 31,
            'serviceName'  => 'Quick Upper Wash',
            'servicePrice'  => 75000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 31,
            'serviceName'  => '3 Hours Wash',
            'servicePrice'  => 95000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 31,
            'serviceName'  => 'Upper Wash',
            'servicePrice'  => 60000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);

        // Clean Motion Drop Point Jombang Ciputat
        Service::create([
            'laundry_sepatu_id'  => 32,
            'serviceName'  => 'Cleaning 1 Day',
            'servicePrice'  => 90000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 32,
            'serviceName'  => 'Cleaning 2 Day',
            'servicePrice'  => 80000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 32,
            'serviceName'  => 'Reglue',
            'servicePrice'  => 30000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 32,
            'serviceName'  => 'Unyellowing',
            'servicePrice'  => 65000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);


        // Queen Shoes Cleaning - Gading Serpong
        Service::create([
            'laundry_sepatu_id'  => 33,
            'serviceName'  => 'Deep Cleaning Mild',
            'servicePrice'  => 38000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 33,
            'serviceName'  => 'Deep Cleaning Hard',
            'servicePrice'  => 45000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 33,
            'serviceName'  => 'Deep Cleaning Express Mild',
            'servicePrice'  => 55000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 33,
            'serviceName'  => 'Deep Cleaning Express Hard',
            'servicePrice'  => 65000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 33,
            'serviceName'  => 'Whitening Mild',
            'servicePrice'  => 55000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 33,
            'serviceName'  => 'Whitening Hard',
            'servicePrice'  => 70000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);

        // Shoestamp Laundry Sepatu Pamulang
        Service::create([
            'laundry_sepatu_id'  => 34,
            'serviceName'  => 'Deep Cleaning Low',
            'servicePrice'  => 30000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 34,
            'serviceName'  => 'Deep Cleaning High',
            'servicePrice'  => 40000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 34,
            'serviceName'  => 'Reglue',
            'servicePrice'  => 15000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 34,
            'serviceName'  => 'Unyellowing',
            'servicePrice'  => 60000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 34,
            'serviceName'  => 'One Day Service (Addition)',
            'servicePrice'  => 15000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);


        // SHOEKICK
        Service::create([
            'laundry_sepatu_id'  => 35,
            'serviceName'  => 'Reguler Cleaning',
            'servicePrice'  => 40000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 35,
            'serviceName'  => 'Unyellowing',
            'servicePrice'  => 60000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 35,
            'serviceName'  => 'Repaint',
            'servicePrice'  => 210000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
    }
}
