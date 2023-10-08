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
            'serviceSlug'  => 'Clean-basic-shoe',
            'servicePrice'  => 50000,
            'serviceDescription'  => 'Membersihkan sepatu dengan detail',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 1,
            'serviceName'  => 'Repair Basic Shoe',
            'serviceSlug'  => 'Repair-basic-shoe',
            'servicePrice'  => 90000,
            'serviceDescription'  => 'Membetulkan sepatu yang rusak',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 1,
            'serviceName'  => 'Repaint Basic Shoe',
            'serviceSlug'  => 'Repaint-basic-shoe',
            'servicePrice'  => 120000,
            'serviceDescription'  => 'Mewarnai kembali sepatu yang pudar',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 1,
            'serviceName'  => 'Unyellowing Basic Shoe',
            'serviceSlug'  => 'Unyellowing-basic-shoe',
            'servicePrice'  => 120000,
            'serviceDescription'  => 'Memutihkan sepatu yang pudar',
        ]);



        // Launry 2
        Service::create([
            'laundry_sepatu_id'  => 2,
            'serviceName'  => 'Shoe Laundry 1 Pair',
            'serviceSlug'  => 'Shoe-laundry-1-pair',
            'servicePrice'  => 85000,
            'serviceDescription'  => 'Mengerjakan segala jenis sepatu dengan segala kondisi',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 2,
            'serviceName'  => 'Shoe Laundry 2-3 Per Pair',
            'serviceSlug'  => 'Shoe-laundry-2-3-per-pair',
            'servicePrice'  => 75000,
            'serviceDescription'  => 'Harga laundry 2-3 per pasang segala jenis sepatu dengan segala kondisi',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 2,
            'serviceName'  => 'Shoe Laundry 4 or More Per Pair',
            'serviceSlug'  => 'Shoe-laundry-4-or-more-per-pair',
            'servicePrice'  => 70000,
            'serviceDescription'  => 'Harga laundry 4 per pasang atau lebih segala jenis sepatu dengan segala kondisi',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 2,
            'serviceName'  => 'One Day Service',
            'serviceSlug'  => 'One-day-service',
            'servicePrice'  => 95000,
            'serviceDescription'  => 'Jasa pengerjaan durasi 24 jam setelah sepatu kami terima',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 2,
            'serviceName'  => 'Kid Shoes',
            'serviceSlug'  => 'Kid-shoes',
            'servicePrice'  => 55000,
            'serviceDescription'  => 'Harga laundry sepatu anak dengan maksimum ukuran 34',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 2,
            'serviceName'  => 'Sandal Cleaning',
            'serviceSlug'  => 'Sandal-cleaning',
            'servicePrice'  => 55000,
            'serviceDescription'  => 'Jasa pengerjaan laundry segala jenis sandal dengan segala kondisi',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 2,
            'serviceName'  => 'Sole Repair/Replace',
            'serviceSlug'  => 'Sole-repair/replace',
            'servicePrice'  => 130000,
            'serviceDescription'  => 'Jasa pengerjaan jahit dan lem bagian outside midsole agar sepatu kembali prima sudah termasuk laundry',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 2,
            'serviceName'  => 'Unyellowing Midsole',
            'serviceSlug'  => 'Unyellowing-midsole',
            'servicePrice'  => 180000,
            'serviceDescription'  => 'Melapisi midsole dengan cairan khusus agar mencerahkan kembali sepatu menguning sudah termasuk laundry',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 2,
            'serviceName'  => 'Repaint Shoes',
            'serviceSlug'  => 'Repaint-shoes',
            'servicePrice'  => 180000,
            'serviceDescription'  => 'Mengembalikan warna sepatu kembali prima sudah termasuk laundry',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 2,
            'serviceName'  => 'Sole Protect',
            'serviceSlug'  => 'Sole-protect',
            'servicePrice'  => 210000,
            'serviceDescription'  => 'Jasa pemasangan gel pelapis sepatu untuk melindungi bagian outsole dengan laundry',
        ]);


        // Laundry 3
        Service::create([
            'laundry_sepatu_id'  => 3,
            'serviceName'  => 'Basic Clean Standard Material',
            'serviceSlug'  => 'Basic-clean-standard-material',
            'servicePrice'  => 60000,
            'serviceDescription'  => 'Basic cleaning on the upper & middle part of the shoes',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 3,
            'serviceName'  => 'Basic Clean Premium Material',
            'serviceSlug'  => 'Basic-clean-premium-material',
            'servicePrice'  => 70000,
            'serviceDescription'  => 'Basic cleaning on the upper & middle part of the shoes',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 3,
            'serviceName'  => 'Deep Clean Standard Material',
            'serviceSlug'  => 'Deep-clean-standard-material',
            'servicePrice'  => 100000,
            'serviceDescription'  => 'deep clean, deep undersole, lace cleaning, freshner, insole and lining cleaning',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 3,
            'serviceName'  => 'Deep Clean Premium Material',
            'serviceSlug'  => 'deep-clean-premium-material',
            'servicePrice'  => 120000,
            'serviceDescription'  => 'deep clean, deep undersole, lace cleaning, freshner, insole and lining cleaning',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 3,
            'serviceName'  => 'Special Treatment',
            'serviceSlug'  => 'Special-treatment',
            'servicePrice'  => 200000,
            'serviceDescription'  => 'Meticulous attention to detail, deep clean, deep undersole, lace cleaning, freshner, insole and lining cleaning',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 3,
            'serviceName'  => 'Repaint Upper part',
            'serviceSlug'  => 'repaint-upper-part',
            'servicePrice'  => 300000,
            'serviceDescription'  => 'Restore the fading color in upper part of the shoes',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 3,
            'serviceName'  => 'Repaint Midsole part',
            'serviceSlug'  => 'repaint-midsole-part',
            'servicePrice'  => 300000,
            'serviceDescription'  => 'Restore the fading color in upper part of the shoes',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 3,
            'serviceName'  => 'Special Color',
            'serviceSlug'  => 'Special-color',
            'servicePrice'  => 450000,
            'serviceDescription'  => 'Give special color to the shoes',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 3,
            'serviceName'  => 'Custom Repaint',
            'serviceSlug'  => 'Custom-repaint',
            'servicePrice'  => 650000,
            'serviceDescription'  => 'Give custom repaint to the shoes',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 3,
            'serviceName'  => 'Repair Reglue',
            'serviceSlug'  => 'Repair-reglue',
            'servicePrice'  => 170000,
            'serviceDescription'  => 'Regluing the open part of the shoes',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 3,
            'serviceName'  => 'Repair Stitch',
            'serviceSlug'  => 'Repair-stitch',
            'servicePrice'  => 185000,
            'serviceDescription'  => 'Stitching the open part of the shoes',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 3,
            'serviceName'  => 'Custom repair by request',
            'serviceSlug'  => 'repaint-midsole-part',
            'servicePrice'  => 200000,
            'serviceDescription'  => 'Give custom repair by request',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 3,
            'serviceName'  => 'Unyellowing',
            'serviceSlug'  => 'Unyellowing',
            'servicePrice'  => 170000,
            'serviceDescription'  => 'Whiten back the rubber shoes that have been yellowing because of humid air, crusted dirt and axidant',
        ]);


        // Laundry 4
        Service::create([
            'laundry_sepatu_id'  => 4,
            'serviceName'  => 'Medium Cleaning',
            'serviceSlug'  => 'Medium-cleaning',
            'servicePrice'  => 70000,
            'serviceDescription'  => 'All materials, all parts, 4-5 days',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 4,
            'serviceName'  => 'Hard Cleaning',
            'serviceSlug'  => 'Hard-cleaning',
            'servicePrice'  => 80000,
            'serviceDescription'  => 'All materials, all parts, 4-5 days',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 4,
            'serviceName'  => 'Woman Shoes',
            'serviceSlug'  => 'Wedium-shoes',
            'servicePrice'  => 35000,
            'serviceDescription'  => 'Heels, flat, wedget, etx',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 4,
            'serviceName'  => 'Kid Shoes',
            'serviceSlug'  => 'Kid-shoes',
            'servicePrice'  => 35000,
            'serviceDescription'  => '<18cm',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 4,
            'serviceName'  => 'Unyellowing',
            'serviceSlug'  => 'Unyellowing',
            'servicePrice'  => 75000,
            'serviceDescription'  => 'Remove yellow stain on the under sole',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 4,
            'serviceName'  => 'Repaint Midsole',
            'serviceSlug'  => 'Repaint-midsole',
            'servicePrice'  => 150000,
            'serviceDescription'  => 'Restore faded color of the shoes, include deep cleaning',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 4,
            'serviceName'  => 'Repaint Body',
            'serviceSlug'  => 'Repaint-Body',
            'servicePrice'  => 200000,
            'serviceDescription'  => 'Restore faded color of the shoes, include deep cleaning',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 4,
            'serviceName'  => 'Recolour',
            'serviceSlug'  => 'Recolour',
            'servicePrice'  => 250000,
            'serviceDescription'  => 'Change the color of the shoes, include deep cleaning',
        ]);


        // Laundry 5
        Service::create([
            'laundry_sepatu_id'  => 5,
            'serviceName'  => 'Deep Cleaning Mild',
            'serviceSlug'  => 'Deep-cleaning-mild',
            'servicePrice'  => 50000,
            'serviceDescription'  => 'Clean the shoes',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 5,
            'serviceName'  => 'Deep Cleaning Hard',
            'serviceSlug'  => 'Deep-cleaning-hard',
            'servicePrice'  => 70000,
            'serviceDescription'  => 'Clean the shoes',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 5,
            'serviceName'  => 'Boots Canvas Putih Chekerboard Mild',
            'serviceSlug'  => 'Boots-canvas-putih-chekerboard-mild',
            'servicePrice'  => 60000,
            'serviceDescription'  => 'Clean the shoes',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 5,
            'serviceName'  => 'Boots Canvas Putih Chekerboard Hard',
            'serviceSlug'  => 'Boots-canvas-putih-chekerboard-hard',
            'servicePrice'  => 100000,
            'serviceDescription'  => 'Clean the shoes',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 5,
            'serviceName'  => 'Repaint Mild',
            'serviceSlug'  => 'Repaint-mild',
            'servicePrice'  => 100000,
            'serviceDescription'  => 'Repaint the shoes',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 5,
            'serviceName'  => 'Repaint Hard',
            'serviceSlug'  => 'Repaint-hard',
            'servicePrice'  => 200000,
            'serviceDescription'  => 'Repaint the shoes',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 5,
            'serviceName'  => 'Unyellowing Mild',
            'serviceSlug'  => 'Unyellowing-mild',
            'servicePrice'  => 50000,
            'serviceDescription'  => 'Unyellowing the shoes',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 5,
            'serviceName'  => 'Unyellowing Hard',
            'serviceSlug'  => 'Unyellowing-hard',
            'servicePrice'  => 700000,
            'serviceDescription'  => 'Unyellowing the shoes',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 5,
            'serviceName'  => 'Reglue',
            'serviceSlug'  => 'Reglue',
            'servicePrice'  => 100000,
            'serviceDescription'  => 'Reglue the shoes',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 5,
            'serviceName'  => 'Repair',
            'serviceSlug'  => 'Repair',
            'servicePrice'  => 150000,
            'serviceDescription'  => 'Repair the shoes',
        ]);


        // Laundry 6
        Service::create([
            'laundry_sepatu_id'  => 6,
            'serviceName'  => 'Sneaker Clean',
            'serviceSlug'  => 'Sneaker-clean',
            'servicePrice'  => 55000,
            'serviceDescription'  => 'Cleaning, detailing, finishing',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 6,
            'serviceName'  => 'Suede',
            'serviceSlug'  => 'Suede',
            'servicePrice'  => 85000,
            'serviceDescription'  => 'Cleaning, oil, mosturising, finishing',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 6,
            'serviceName'  => 'Leather',
            'serviceSlug'  => 'Leather',
            'servicePrice'  => 85000,
            'serviceDescription'  => 'Cleaning, oil, streaming, finishing',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 6,
            'serviceName'  => 'White Shoes',
            'serviceSlug'  => 'White-shoes',
            'servicePrice'  => 75000,
            'serviceDescription'  => 'Cleaning, whitening, deadorant, finishing',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 6,
            'serviceName'  => 'Boots',
            'serviceSlug'  => 'Boots',
            'servicePrice'  => 100000,
            'serviceDescription'  => 'Cleaning, oil, mosturising, deadorant, finishing',
        ]);


        // Laundry 7
        Service::create([
            'laundry_sepatu_id'  => 7,
            'serviceName'  => 'Fast Clean',
            'serviceSlug'  => 'Fast-clean',
            'servicePrice'  => 30000,
            'serviceDescription'  => 'Clean the shoes',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 7,
            'serviceName'  => 'Deep Clean',
            'serviceSlug'  => 'Deep-clean',
            'servicePrice'  => 50000,
            'serviceDescription'  => 'Clean the shoes',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 7,
            'serviceName'  => 'Deep Clean 3 Pair',
            'serviceSlug'  => 'Deep-clean-3-pair',
            'servicePrice'  => 99000,
            'serviceDescription'  => 'Clean 3 shoes',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 7,
            'serviceName'  => 'Leather or Boots',
            'serviceSlug'  => 'Leather-or-boots',
            'servicePrice'  => 65000,
            'serviceDescription'  => 'Clean the leather or boots',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 7,
            'serviceName'  => 'Kids Shoes',
            'serviceSlug'  => 'Kids-shoes',
            'servicePrice'  => 35000,
            'serviceDescription'  => 'Clean the kids shoes 10-21 cm',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 7,
            'serviceName'  => 'Women Shoes',
            'serviceSlug'  => 'Women-shoes',
            'servicePrice'  => 40000,
            'serviceDescription'  => 'Wedges, flat shoes, heels, oxford',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 7,
            'serviceName'  => 'Unyellowing',
            'serviceSlug'  => 'Unyellowing',
            'servicePrice'  => 80000,
            'serviceDescription'  => 'Unyellowing the shoes include deep clean',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 7,
            'serviceName'  => 'Water Repellent',
            'serviceSlug'  => 'Water-repellent',
            'servicePrice'  => 20000,
            'serviceDescription'  => 'Water repellent the shoes',
        ]);


        // Laundry 8
        Service::create([
            'laundry_sepatu_id'  => 8,
            'serviceName'  => 'Cuci Premium 3-5 Hari',
            'serviceSlug'  => 'Cuci-premium-3-5-hari',
            'servicePrice'  => 90000,
            'serviceDescription'  => 'Deep clean luar dan dalam, tali, anti bakteri dan freshener',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 8,
            'serviceName'  => 'Cuci Kilat 24 jam',
            'serviceSlug'  => 'Cuci-kilat-24-jam',
            'servicePrice'  => 50000,
            'serviceDescription'  => 'Bagian luar sepatu tanpa tali',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 8,
            'serviceName'  => 'Cuci Prioritas 1-2 Hari',
            'serviceSlug'  => 'Cuci-prioritas1-2-hari',
            'servicePrice'  => 120000,
            'serviceDescription'  => 'Standard service dengan kecepatan maksimal',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 8,
            'serviceName'  => 'Cuci Trio 5-7 Hari',
            'serviceSlug'  => 'Cuci-trio-5-7-hari',
            'servicePrice'  => 220000,
            'serviceDescription'  => 'Paket pencucian 3 sepatu, deep clean, tali, anti bakteri dan freshener untuk semua sepatu',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 8,
            'serviceName'  => 'Reglueing 3-5 Hari',
            'serviceSlug'  => 'Reglueing-3-5-hari',
            'servicePrice'  => 150000,
            'serviceDescription'  => 'Menempelkan kembali sol yang sudah lepas',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 8,
            'serviceName'  => 'Unyellowing 3-5 Hari',
            'serviceSlug'  => 'Unyellowing-3-5-hari',
            'servicePrice'  => 100000,
            'serviceDescription'  => 'Membersihkan kembali sol yang menguning',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 8,
            'serviceName'  => 'Repaint 7-10 Hari',
            'serviceSlug'  => 'Repaint-7-10-hari',
            'servicePrice'  => 250000,
            'serviceDescription'  => 'Mewarnai ulang sepatu yang sudah pudar',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 8,
            'serviceName'  => 'Custom 10-14 Hari',
            'serviceSlug'  => 'Custom-10-14-hari',
            'servicePrice'  => 300000,
            'serviceDescription'  => 'Mengubah desain sepatu / melukis',
        ]);


        // Laundry 9
        Service::create([
            'laundry_sepatu_id'  => 9,
            'serviceName'  => 'Cuci Sepatu',
            'serviceSlug'  => 'Cuci-sepatu',
            'servicePrice'  => 50000,
            'serviceDescription'  => 'Cuci sepatu biasa',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 9,
            'serviceName'  => 'Cuci Sepatu Kecil',
            'serviceSlug'  => 'Cuci-sepatu-kecil',
            'servicePrice'  => 35000,
            'serviceDescription'  => 'Cuci sepatu kecil ukuran < 33',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 9,
            'serviceName'  => 'Cuci Sandal',
            'serviceSlug'  => 'Cuci-sandal',
            'servicePrice'  => 35000,
            'serviceDescription'  => 'Cuci sandal biasa',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 9,
            'serviceName'  => 'Jahit Sol Sepatu',
            'serviceSlug'  => 'Jahit-sol-sepatu',
            'servicePrice'  => 80000,
            'serviceDescription'  => 'Jahit sol sepatu yang lepas',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 9,
            'serviceName'  => 'Lem Sol',
            'serviceSlug'  => 'Lem-sol',
            'servicePrice'  => 30000,
            'serviceDescription'  => 'Lem sol sepatu yang lepas',
        ]);


        // Laundry 10
        Service::create([
            'laundry_sepatu_id'  => 10,
            'serviceName'  => 'Canvas',
            'serviceSlug'  => 'Canvas',
            'servicePrice'  => 50000,
            'serviceDescription'  => 'Clean service untuk sepatu canvas',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 10,
            'serviceName'  => 'Suede / Nubuck',
            'serviceSlug'  => 'Suede/nubuck',
            'servicePrice'  => 60000,
            'serviceDescription'  => 'Clean service untuk sepatu suede/nubuck',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 10,
            'serviceName'  => 'Synthetic',
            'serviceSlug'  => 'Synthetic',
            'servicePrice'  => 60000,
            'serviceDescription'  => 'Clean service untuk sepatu synthethic',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 10,
            'serviceName'  => 'Genuine Leather',
            'serviceSlug'  => 'Genuine-leather',
            'servicePrice'  => 70000,
            'serviceDescription'  => 'Clean service untuk sepatu genuine leather',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 10,
            'serviceName'  => 'Sandals',
            'serviceSlug'  => 'Sandals',
            'servicePrice'  => 25000,
            'serviceDescription'  => 'Sandal cleaning service',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 10,
            'serviceName'  => 'Unyellowing',
            'serviceSlug'  => 'Unyellowing',
            'servicePrice'  => 80000,
            'serviceDescription'  => 'Unyellowing service untuk sepatu',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 10,
            'serviceName'  => 'White Shoe',
            'serviceSlug'  => 'White-shoe',
            'servicePrice'  => 70000,
            'serviceDescription'  => 'White shoe service untuk sepatu',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 10,
            'serviceName'  => '3 Canva shoe',
            'serviceSlug'  => '3-canva-shoe',
            'servicePrice'  => 135,
            'serviceDescription'  => 'Paket 3 canva shoe',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 10,
            'serviceName'  => '3 Leather Shoe',
            'serviceSlug'  => '3-leather-shoe',
            'servicePrice'  => 185000,
            'serviceDescription'  => 'Paket 3 leather shoe',
        ]);


        // Laundry 11
        Service::create([
            'laundry_sepatu_id'  => 11,
            'serviceName'  => 'Canvas',
            'serviceSlug'  => 'Canvas',
            'servicePrice'  => 40000,
            'serviceDescription'  => 'Clean service untuk sepatu canvas',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 11,
            'serviceName'  => 'Suede',
            'serviceSlug'  => 'Suede',
            'servicePrice'  => 45000,
            'serviceDescription'  => 'Clean service untuk sepatu suede',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 11,
            'serviceName'  => 'Nubuck / Synthetic',
            'serviceSlug'  => 'Nubuk/synthetic',
            'servicePrice'  => 50000,
            'serviceDescription'  => 'Clean service untuk sepatu nubuck/synthethic',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 11,
            'serviceName'  => 'Leather Treatment',
            'serviceSlug'  => 'Leather-treatment',
            'servicePrice'  => 55000,
            'serviceDescription'  => 'Traetment service untuk sepatu leather',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 11,
            'serviceName'  => 'Women Shoes',
            'serviceSlug'  => 'Women-shoes',
            'servicePrice'  => 40000,
            'serviceDescription'  => 'Clean service untuk sepatu wanita',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 11,
            'serviceName'  => 'Midsole unyellowing',
            'serviceSlug'  => 'Midsole-unyellowing',
            'servicePrice'  => 100000,
            'serviceDescription'  => 'Midsole unyellowing service untuk sepatu',
        ]);


        // Laundry 12
        Service::create([
            'laundry_sepatu_id'  => 12,
            'serviceName'  => 'Deep Clean',
            'serviceSlug'  => 'Deep-clean',
            'servicePrice'  => 50000,
            'serviceDescription'  => 'Canvas, leather & suede',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 12,
            'serviceName'  => 'White Shoes',
            'serviceSlug'  => 'White-shoes',
            'servicePrice'  => 60000,
            'serviceDescription'  => 'Clean service untuk sepatu putih',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 12,
            'serviceName'  => 'Heels',
            'serviceSlug'  => 'Heels',
            'servicePrice'  => 35000,
            'serviceDescription'  => 'Clean service untuk sepatu heels',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 12,
            'serviceName'  => 'Kids Shoes',
            'serviceSlug'  => 'Kids-shoes',
            'servicePrice'  => 35000,
            'serviceDescription'  => 'Clean service untuk sepatu anak',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 12,
            'serviceName'  => 'Sandal',
            'serviceSlug'  => 'Sandal',
            'servicePrice'  => 25000,
            'serviceDescription'  => 'Clean service untuk sendal',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 12,
            'serviceName'  => 'Whitening (Canvas)',
            'serviceSlug'  => 'Whitening-(canvas)',
            'servicePrice'  => 65000,
            'serviceDescription'  => 'Whitening service untuk sepatu canvas',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 12,
            'serviceName'  => 'Midsole Unyellowing',
            'serviceSlug'  => 'Midsole-unyellowing',
            'servicePrice'  => 80000,
            'serviceDescription'  => 'Midsole unyellowing service untuk sepatu',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 12,
            'serviceName'  => 'Repaint Canvas',
            'serviceSlug'  => 'Repaint-canvas',
            'servicePrice'  => 175000,
            'serviceDescription'  => 'Repaint service untuk sepatu canvas',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 12,
            'serviceName'  => 'Repaint-Leather',
            'serviceSlug'  => 'Repaint-leather',
            'servicePrice'  => 215000,
            'serviceDescription'  => 'Repaint service untuk sepatu leather',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 12,
            'serviceName'  => 'Sol + Reglue',
            'serviceSlug'  => 'Sol+reglue',
            'servicePrice'  => 45000,
            'serviceDescription'  => 'Sol + reglue service untuk sepatu',
        ]);






    }
}
