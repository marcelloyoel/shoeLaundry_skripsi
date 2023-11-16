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

        //Fresh Clean Laundry
        Service::create([
            'laundry_sepatu_id'  => 13,
            'serviceName'  => 'Deep Clean Standard',
            'serviceSlug'  => 'deep-clean-standard-fcl',
            'servicePrice'  => 50000,
            'serviceDescription'  => 'Sepatu dicuci biasa saja dengan estimasi 3 hari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 13,
            'serviceName'  => 'Express Deep Clean - 6 HOURS WARRANTEE',
            'serviceSlug'  => 'express-deep-clean-fcl',
            'servicePrice'  => 80000,
            'serviceDescription'  => 'Sepatu dicuci biasa saja dengan estimasi 3 hari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 13,
            'serviceName'  => 'Repaint - Upper Sole',
            'serviceSlug'  => 'repaint-upper-sole-fcl',
            'servicePrice'  => 150000,
            'serviceDescription'  => 'Sepatu dicuci biasa saja dengan estimasi 3 hari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 13,
            'serviceName'  => 'Repaint - Mid Sole',
            'serviceSlug'  => 'repaint-mid-sole-fcl',
            'servicePrice'  => 130000,
            'serviceDescription'  => 'Sepatu dicuci biasa saja dengan estimasi 3 hari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 13,
            'serviceName'  => 'Repaint - Full Body',
            'serviceSlug'  => 'repaint-full-body-fcl',
            'servicePrice'  => 175000,
            'serviceDescription'  => 'Sepatu dicuci biasa saja dengan estimasi 3 hari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 13,
            'serviceName'  => 'Unyellowing - Hard Rubber',
            'serviceSlug'  => 'unyellowing-hard-rubber-fcl',
            'servicePrice'  => 50000,
            'serviceDescription'  => 'Sepatu dicuci biasa saja dengan estimasi 3 hari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 13,
            'serviceName'  => 'Unyellowing - Icy Sole',
            'serviceSlug'  => 'unyellowing-icy-sole-fcl',
            'servicePrice'  => 250000,
            'serviceDescription'  => 'Sepatu dicuci biasa saja dengan estimasi 3 hari',
        ]);

        //The Shoes Bar Gading Serpong
        Service::create([
            'laundry_sepatu_id'  => 14,
            'serviceName'  => 'Canvas Deep Clean',
            'serviceSlug'  => 'canvas-deep-clean-tsbgs',
            'servicePrice'  => 50000,
            'serviceDescription'  => 'Canvas dicuci',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 14,
            'serviceName'  => 'Canvas Hard Clean',
            'serviceSlug'  => 'canvas-hard-clean-tsbgs',
            'servicePrice'  => 60000,
            'serviceDescription'  => 'Canvas dicuci',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 14,
            'serviceName'  => 'Suide Deep Clean',
            'serviceSlug'  => 'suide-deep-clean-tsbgs',
            'servicePrice'  => 55000,
            'serviceDescription'  => 'Canvas dicuci',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 14,
            'serviceName'  => 'Leather Deep Clean',
            'serviceSlug'  => 'leather-deep-clean-tsbgs',
            'servicePrice'  => 60000,
            'serviceDescription'  => 'Canvas dicuci',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 14,
            'serviceName'  => 'Leather Hard Clean',
            'serviceSlug'  => 'leather-hard-clean-tsbgs',
            'servicePrice'  => 70000,
            'serviceDescription'  => 'Canvas dicuci',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 14,
            'serviceName'  => 'Boots Deep Clean',
            'serviceSlug'  => 'boots-deep-clean-tsbgs',
            'servicePrice'  => 65000,
            'serviceDescription'  => 'Canvas dicuci',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 14,
            'serviceName'  => 'Boots Hard Clean',
            'serviceSlug'  => 'boots-hard-clean-tsbgs',
            'servicePrice'  => 75000,
            'serviceDescription'  => 'Canvas dicuci',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 14,
            'serviceName'  => 'Woman Shoes',
            'serviceSlug'  => 'woman-shoes-tsbgs',
            'servicePrice'  => 35000,
            'serviceDescription'  => 'Canvas dicuci',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 14,
            'serviceName'  => 'Kids Shoes',
            'serviceSlug'  => 'kids-shoes-tsbgs',
            'servicePrice'  => 30000,
            'serviceDescription'  => 'Canvas dicuci',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 14,
            'serviceName'  => 'Fast Clean',
            'serviceSlug'  => 'fast-clean-tsbgs',
            'servicePrice'  => 35000,
            'serviceDescription'  => 'Canvas dicuci',
        ]);

        //Rakun Cuci Sepatu
        Service::create([
            'laundry_sepatu_id'  => 15,
            'serviceName'  => 'One Day Service',
            'serviceSlug'  => 'one-day-service-rcs',
            'servicePrice'  => 99000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 15,
            'serviceName'  => 'Reglue',
            'serviceSlug'  => 'reglue-rcs',
            'servicePrice'  => 75000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 15,
            'serviceName'  => 'Unyellowing',
            'serviceSlug'  => 'unyellowing-rcs',
            'servicePrice'  => 80000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 15,
            'serviceName'  => 'Whitening',
            'serviceSlug'  => 'whitening-rcs',
            'servicePrice'  => 80000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 15,
            'serviceName'  => 'Repaint',
            'serviceSlug'  => 'repaint-rcs',
            'servicePrice'  => 100000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);

        //tinyTidy Shoe
        Service::create([
            'laundry_sepatu_id'  => 16,
            'serviceName'  => 'Deep Cleaning',
            'serviceSlug'  => 'deep-cleaning-tts',
            'servicePrice'  => 100000,
            'serviceDescription'  => 'Dicuci Secara Menyeluruh',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 16,
            'serviceName'  => 'Recoloring',
            'serviceSlug'  => 'recoloring-tts',
            'servicePrice'  => 200000,
            'serviceDescription'  => 'Dicuci Secara Menyeluruh',
        ]);

        //Shoeborn Shoe And Bag Care
        Service::create([
            'laundry_sepatu_id'  => 17,
            'serviceName'  => 'Retouch',
            'serviceSlug'  => 'retouch-ssabc',
            'servicePrice'  => 50000,
            'serviceDescription'  => 'Didetailin',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 17,
            'serviceName'  => 'Shoe Repaint Upper',
            'serviceSlug'  => 'shoe-repaint-upper-ssabc',
            'servicePrice'  => 175000,
            'serviceDescription'  => 'Didetailin',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 17,
            'serviceName'  => 'Shoe Repaint Midsole',
            'serviceSlug'  => 'shoe-repaint-midsole-ssabc',
            'servicePrice'  => 150000,
            'serviceDescription'  => 'Didetailin',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 17,
            'serviceName'  => 'Shoe Reconstruction',
            'serviceSlug'  => 'shoe-reconstruction-ssabc',
            'servicePrice'  => 150000,
            'serviceDescription'  => 'Didetailin',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 17,
            'serviceName'  => 'Shoe Reglue',
            'serviceSlug'  => 'shoe-reglue-ssabc',
            'servicePrice'  => 80000,
            'serviceDescription'  => 'Didetailin',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 17,
            'serviceName'  => 'Shoe Deep Clean',
            'serviceSlug'  => 'shoe-deep-clean-ssabc',
            'servicePrice'  => 40000,
            'serviceDescription'  => 'Didetailin',
        ]);

        //Fix Bersih
        Service::create([
            'laundry_sepatu_id'  => 18,
            'serviceName'  => 'Deep Cleaning 3 Pairs',
            'serviceSlug'  => 'deep-cleaning-3-pairs-db',
            'servicePrice'  => 99000,
            'serviceDescription'  => 'Tiga Sepatu Dicuciin',
        ]);

        //Litfeeds
        Service::create([
            'laundry_sepatu_id'  => 19,
            'serviceName'  => 'Deep Clean Sneakers Warna Gelap',
            'serviceSlug'  => 'deep-clean-sneakers-warna-gelap-litfeeds',
            'servicePrice'  => 50000,
            'serviceDescription'  => 'Dicuciin tapi sepatu warna gelap',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 19,
            'serviceName'  => 'Deep Clean Sneakers Warna Terang',
            'serviceSlug'  => 'deep-clean-sneakers-warna-terang-litfeeds',
            'servicePrice'  => 60000,
            'serviceDescription'  => 'Dicuciin tapi sepatu warna gelap',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 19,
            'serviceName'  => 'Deep Clean Boots Non Leather',
            'serviceSlug'  => 'deep-clean-boots-non-leather-litfeeds',
            'servicePrice'  => 50000,
            'serviceDescription'  => 'Dicuciin tapi sepatu warna gelap',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 19,
            'serviceName'  => 'Deep Clean Leather Low',
            'serviceSlug'  => 'deep-clean-leather-low-litfeeds',
            'servicePrice'  => 60000,
            'serviceDescription'  => 'Dicuciin tapi sepatu warna gelap',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 19,
            'serviceName'  => 'Deep Clean Leather Mid',
            'serviceSlug'  => 'deep-clean-leather-mid-litfeeds',
            'servicePrice'  => 70000,
            'serviceDescription'  => 'Dicuciin tapi sepatu warna gelap',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 19,
            'serviceName'  => 'Deep Clean Leather High',
            'serviceSlug'  => 'deep-clean-leather-high-litfeeds',
            'servicePrice'  => 80000,
            'serviceDescription'  => 'Dicuciin tapi sepatu warna gelap',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 19,
            'serviceName'  => 'Deep Clean Flat Shoes',
            'serviceSlug'  => 'deep-clean-flat-shoes-litfeeds',
            'servicePrice'  => 40000,
            'serviceDescription'  => 'Dicuciin tapi sepatu warna gelap',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 19,
            'serviceName'  => 'Deep Clean Kiddos',
            'serviceSlug'  => 'deep-clean-kiddos-litfeeds',
            'servicePrice'  => 30000,
            'serviceDescription'  => 'Dicuciin tapi sepatu warna gelap',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 19,
            'serviceName'  => 'Sandals',
            'serviceSlug'  => 'sandals-litfeeds',
            'servicePrice'  => 30000,
            'serviceDescription'  => 'Dicuciin tapi sepatu warna gelap',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 19,
            'serviceName'  => 'Whitening Upper',
            'serviceSlug'  => 'whitening-upper-litfeeds',
            'servicePrice'  => 70000,
            'serviceDescription'  => 'Dicuciin tapi sepatu warna gelap',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 19,
            'serviceName'  => 'Unyellowing Midsole',
            'serviceSlug'  => 'unyellowing-midsole-litfeeds',
            'servicePrice'  => 70000,
            'serviceDescription'  => 'Dicuciin tapi sepatu warna gelap',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 19,
            'serviceName'  => 'All White Unyellowing',
            'serviceSlug'  => 'all-white-unyellowing-litfeeds',
            'servicePrice'  => 80000,
            'serviceDescription'  => 'Dicuciin tapi sepatu warna gelap',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 19,
            'serviceName'  => 'Express Cleaning 24 Hours',
            'serviceSlug'  => 'express-cleaning-24-hours-litfeeds',
            'servicePrice'  => 200000,
            'serviceDescription'  => 'Dicuciin tapi sepatu warna gelap',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 19,
            'serviceName'  => 'Recolor Canvas/Suede/Nubcuk',
            'serviceSlug'  => 'recolor-canvas-suede-nubcuk-litfeeds',
            'servicePrice'  => 150000,
            'serviceDescription'  => 'Dicuciin tapi sepatu warna gelap',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 19,
            'serviceName'  => 'Recolor Leather Low',
            'serviceSlug'  => 'recolor-leather-low-litfeeds',
            'servicePrice'  => 175000,
            'serviceDescription'  => 'Dicuciin tapi sepatu warna gelap',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 19,
            'serviceName'  => 'Recolor Leather Mid',
            'serviceSlug'  => 'recolor-leather-mid-litfeeds',
            'servicePrice'  => 185000,
            'serviceDescription'  => 'Dicuciin tapi sepatu warna gelap',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 19,
            'serviceName'  => 'Recolor Leather High',
            'serviceSlug'  => 'recolor-leather-high-litfeeds',
            'servicePrice'  => 200000,
            'serviceDescription'  => 'Dicuciin tapi sepatu warna gelap',
        ]);

        //Washsins Shoes Care - Jasa Laundry Sepatu
        Service::create([
            'laundry_sepatu_id'  => 20,
            'serviceName'  => 'Fast Clean Regular',
            'serviceSlug'  => 'fast-clean-regular-wsc',
            'servicePrice'  => 30000,
            'serviceDescription'  => 'Dicuci dengan cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 20,
            'serviceName'  => 'Fast Clean White Shoes',
            'serviceSlug'  => 'fast-clean-white-shoes-wsc',
            'servicePrice'  => 40000,
            'serviceDescription'  => 'Dicuci dengan cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 20,
            'serviceName'  => 'Deep Cleaning Canvas/Sneakers/Running',
            'serviceSlug'  => 'deep-cleaning-canvas-sneakers-running-wsc',
            'servicePrice'  => 70000,
            'serviceDescription'  => 'Dicuci dengan cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 20,
            'serviceName'  => 'Deep Cleaning Suede/Leather',
            'serviceSlug'  => 'deep-cleaning-suede-leather-wsc',
            'servicePrice'  => 70000,
            'serviceDescription'  => 'Dicuci dengan cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 20,
            'serviceName'  => 'Deep Cleaning Sandals',
            'serviceSlug'  => 'deep-cleaning-sandals-wsc',
            'servicePrice'  => 30000,
            'serviceDescription'  => 'Dicuci dengan cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 20,
            'serviceName'  => 'Deep Cleaning Kids',
            'serviceSlug'  => 'deep-cleaning-kids-wsc',
            'servicePrice'  => 25000,
            'serviceDescription'  => 'Dicuci dengan cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 20,
            'serviceName'  => 'Unyellowing',
            'serviceSlug'  => 'unyellowing-wsc',
            'servicePrice'  => 70000,
            'serviceDescription'  => 'Dicuci dengan cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 20,
            'serviceName'  => 'Repaint Midsole',
            'serviceSlug'  => 'repaint-midsole-wsc',
            'servicePrice'  => 120000,
            'serviceDescription'  => 'Dicuci dengan cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 20,
            'serviceName'  => 'Repaint Upper Canvas',
            'serviceSlug'  => 'repaint-upper-canvas-wsc',
            'servicePrice'  => 150000,
            'serviceDescription'  => 'Dicuci dengan cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 20,
            'serviceName'  => 'Repaint Suede/Leather',
            'serviceSlug'  => 'repaint-suede-leather-wsc',
            'servicePrice'  => 180000,
            'serviceDescription'  => 'Dicuci dengan cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 20,
            'serviceName'  => 'Reglue Under 50%',
            'serviceSlug'  => 'reglue-under-50-wsc',
            'servicePrice'  => 15000,
            'serviceDescription'  => 'Dicuci dengan cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 20,
            'serviceName'  => 'Reglue Upto 50%',
            'serviceSlug'  => 'reglue-upto-50-wsc',
            'servicePrice'  => 30000,
            'serviceDescription'  => 'Dicuci dengan cepat',
        ]);

        //Laces Laundry & Treatment | Cuci tas Ciledug
        Service::create([
            'laundry_sepatu_id'  => 21,
            'serviceName'  => 'Deep Cleaning Standad 4 - 5 Hari',
            'serviceSlug'  => 'deep-cleaning-standad-4-5-hari-llt',
            'servicePrice'  => 40000,
            'serviceDescription'  => 'Dicuci dengan waktu 4 - 5 hari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 21,
            'serviceName'  => 'Deep Cleaning Reguler 2 - 3 Hari',
            'serviceSlug'  => 'deep-cleaning-reguler-2-3-hari-llt',
            'servicePrice'  => 50000,
            'serviceDescription'  => 'Dicuci dengan waktu 4 - 5 hari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 21,
            'serviceName'  => 'Deep Cleaning Daily 1 Hari',
            'serviceSlug'  => 'deep-cleaning-daily-1-hari-llt',
            'servicePrice'  => 70000,
            'serviceDescription'  => 'Dicuci dengan waktu 4 - 5 hari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 21,
            'serviceName'  => 'Deep Cleaning Kids/Toddler 2-3 Hari',
            'serviceSlug'  => 'deep-cleaning-kids-toddler-2-3-hari-llt',
            'servicePrice'  => 25000,
            'serviceDescription'  => 'Dicuci dengan waktu 4 - 5 hari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 21,
            'serviceName'  => 'Deep Cleaning Wedges, Heels 2-3 Hari',
            'serviceSlug'  => 'deep-cleaning-wedges-heels-2-3-hari-llt',
            'servicePrice'  => 35000,
            'serviceDescription'  => 'Dicuci dengan waktu 4 - 5 hari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 21,
            'serviceName'  => 'Unyellowing Sole - 7 Hari',
            'serviceSlug'  => 'unyellowing-sole-7-hari-llt',
            'servicePrice'  => 85000,
            'serviceDescription'  => 'Dicuci dengan waktu 4 - 5 hari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 21,
            'serviceName'  => 'Unyellowing Canvas - 10 Hari',
            'serviceSlug'  => 'unyellowing-canvas-10-hari-llt',
            'servicePrice'  => 85000,
            'serviceDescription'  => 'Dicuci dengan waktu 4 - 5 hari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 21,
            'serviceName'  => 'Unyellowing Nilon - 10 Hari',
            'serviceSlug'  => 'unyellowing-nilon-10-hari-llt',
            'servicePrice'  => 85000,
            'serviceDescription'  => 'Dicuci dengan waktu 4 - 5 hari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 21,
            'serviceName'  => 'Remove Stain - 10 Hari',
            'serviceSlug'  => 'remove-stain-10-hari-llt',
            'servicePrice'  => 100000,
            'serviceDescription'  => 'Dicuci dengan waktu 4 - 5 hari',
        ]);

        //Shoepreme Bintaro
        Service::create([
            'laundry_sepatu_id'  => 22,
            'serviceName'  => 'Cuci Cepat 3 Jam Color',
            'serviceSlug'  => 'cuci-cepat-3-jam-color-sb',
            'servicePrice'  => 110000,
            'serviceDescription'  => 'Dicuci dengan waktu 3 jam untuk sepatu non putih',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 22,
            'serviceName'  => 'Cuci Cepat 3 Jam White',
            'serviceSlug'  => 'cuci-cepat-3-jam-white-sb',
            'servicePrice'  => 120000,
            'serviceDescription'  => 'Dicuci dengan waktu 3 jam untuk sepatu non putih',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 22,
            'serviceName'  => 'Cuci Cepat Putih/Leather 2 Hari',
            'serviceSlug'  => 'cuci-cepat-putih-leather-2-hari-sb',
            'servicePrice'  => 70000,
            'serviceDescription'  => 'Dicuci dengan waktu 3 jam untuk sepatu non putih',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 22,
            'serviceName'  => 'Cuci Cepat Putih/Leather 1 Hari',
            'serviceSlug'  => 'cuci-cepat-putih-leather-1-hari-sb',
            'servicePrice'  => 80000,
            'serviceDescription'  => 'Dicuci dengan waktu 3 jam untuk sepatu non putih',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 22,
            'serviceName'  => 'Whitening',
            'serviceSlug'  => 'whitening-sb',
            'servicePrice'  => 120000,
            'serviceDescription'  => 'Dicuci dengan waktu 3 jam untuk sepatu non putih',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 22,
            'serviceName'  => 'Cuci Cepat 6 Jam Color',
            'serviceSlug'  => 'cuci-cepat-6-jam-color-sb',
            'servicePrice'  => 90000,
            'serviceDescription'  => 'Dicuci dengan waktu 3 jam untuk sepatu non putih',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 22,
            'serviceName'  => 'Cuci Cepat 6 Jam White',
            'serviceSlug'  => 'cuci-cepat-6-jam-white-sb',
            'servicePrice'  => 100000,
            'serviceDescription'  => 'Dicuci dengan waktu 3 jam untuk sepatu non putih',
        ]);

        //Shoes & Care Bintaro Sektor 9
        Service::create([
            'laundry_sepatu_id'  => 23,
            'serviceName'  => 'Fast Cleaning',
            'serviceSlug'  => 'fast-cleaning-sncbs9',
            'servicePrice'  => 30000,
            'serviceDescription'  => 'Dicuci dengan Cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 23,
            'serviceName'  => 'Deep Cleaning Regular Mild',
            'serviceSlug'  => 'deep-cleaning-regular-mild-sncbs9',
            'servicePrice'  => 60000,
            'serviceDescription'  => 'Dicuci dengan Cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 23,
            'serviceName'  => 'Deep Cleaning Regular Hard',
            'serviceSlug'  => 'deep-cleaning-regular-hard-sncbs9',
            'servicePrice'  => 80000,
            'serviceDescription'  => 'Dicuci dengan Cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 23,
            'serviceName'  => 'Deep Cleaning Premium Mild',
            'serviceSlug'  => 'deep-cleaning-premium-mild-sncbs9',
            'servicePrice'  => 120000,
            'serviceDescription'  => 'Dicuci dengan Cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 23,
            'serviceName'  => 'Deep Cleaning Premium Hard',
            'serviceSlug'  => 'deep-cleaning-premium-hard-sncbs9',
            'servicePrice'  => 180000,
            'serviceDescription'  => 'Dicuci dengan Cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 23,
            'serviceName'  => 'Unyellowing and Whitening Mild',
            'serviceSlug'  => 'unyellowing-and-whitening-mild-sncbs9',
            'servicePrice'  => 90000,
            'serviceDescription'  => 'Dicuci dengan Cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 23,
            'serviceName'  => 'Unyellowing and Whitening Hard',
            'serviceSlug'  => 'unyellowing-and-whitening-hard-sncbs9',
            'servicePrice'  => 130000,
            'serviceDescription'  => 'Dicuci dengan Cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 23,
            'serviceName'  => 'Unyellowing and Whitening Premium',
            'serviceSlug'  => 'unyellowing-and-whitening-premium-sncbs9',
            'servicePrice'  => 140000,
            'serviceDescription'  => 'Dicuci dengan Cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 23,
            'serviceName'  => 'Leather Shoes Care Mild',
            'serviceSlug'  => 'leather-shoes-care-mild-sncbs9',
            'servicePrice'  => 60000,
            'serviceDescription'  => 'Dicuci dengan Cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 23,
            'serviceName'  => 'Leather Shoes Care Hard',
            'serviceSlug'  => 'leather-shoes-care-hard-sncbs9',
            'servicePrice'  => 80000,
            'serviceDescription'  => 'Dicuci dengan Cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 23,
            'serviceName'  => 'Leather Shoes Premium Mild',
            'serviceSlug'  => 'leather-shoes-premium-mild-sncbs9',
            'servicePrice'  => 120000,
            'serviceDescription'  => 'Dicuci dengan Cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 23,
            'serviceName'  => 'Leather Shoes Premium Hard',
            'serviceSlug'  => 'leather-shoes-premium-hard-sncbs9',
            'servicePrice'  => 180000,
            'serviceDescription'  => 'Dicuci dengan Cepat',
        ]);

        //Sneakers KVLT Graha Raya
        Service::create([
            'laundry_sepatu_id'  => 24,
            'serviceName'  => 'Deep Cleaning Medium',
            'serviceSlug'  => 'deep-cleaning-medium-kvlt',
            'servicePrice'  => 50000,
            'serviceDescription'  => 'Cuci Sepatu Medium',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 24,
            'serviceName'  => 'Deep Cleaning Hard',
            'serviceSlug'  => 'deep-cleaning-hard-kvlt',
            'servicePrice'  => 60000,
            'serviceDescription'  => 'Cuci Sepatu Medium',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 24,
            'serviceName'  => 'Deep Cleaning Priority 2 Days',
            'serviceSlug'  => 'deep-cleaning-priority-2-days-kvlt',
            'servicePrice'  => 70000,
            'serviceDescription'  => 'Cuci Sepatu Medium',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 24,
            'serviceName'  => 'Repaint Upper Canvas',
            'serviceSlug'  => 'repaint-upper-canvas-kvlt',
            'servicePrice'  => 100000,
            'serviceDescription'  => 'Cuci Sepatu Medium',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 24,
            'serviceName'  => 'Repaint Upper Leather',
            'serviceSlug'  => 'repaint-upper-leather-kvlt',
            'servicePrice'  => 120000,
            'serviceDescription'  => 'Cuci Sepatu Medium',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 24,
            'serviceName'  => 'Repaint Checker Board',
            'serviceSlug'  => 'repaint-checker-board-kvlt',
            'servicePrice'  => 150000,
            'serviceDescription'  => 'Cuci Sepatu Medium',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 24,
            'serviceName'  => 'Repaint Midsole',
            'serviceSlug'  => 'repaint-midsole-kvlt',
            'servicePrice'  => 135000,
            'serviceDescription'  => 'Cuci Sepatu Medium',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 24,
            'serviceName'  => 'Repaint Boost',
            'serviceSlug'  => 'repaint-boost-kvlt',
            'servicePrice'  => 140000,
            'serviceDescription'  => 'Cuci Sepatu Medium',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 24,
            'serviceName'  => 'Unyellowing Midsole',
            'serviceSlug'  => 'unyellowing-midsole-kvlt',
            'servicePrice'  => 85000,
            'serviceDescription'  => 'Cuci Sepatu Medium',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 24,
            'serviceName'  => 'Whitening',
            'serviceSlug'  => 'whitening-kvlt',
            'servicePrice'  => 85000,
            'serviceDescription'  => 'Cuci Sepatu Medium',
        ]);

        //Clean stain
        Service::create([
            'laundry_sepatu_id'  => 25,
            'serviceName'  => 'Kids',
            'serviceSlug'  => 'kids-cs',
            'servicePrice'  => 15000,
            'serviceDescription'  => 'Cuci Sepatu Anak',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 25,
            'serviceName'  => 'Sandals',
            'serviceSlug'  => 'sandals-cs',
            'servicePrice'  => 20000,
            'serviceDescription'  => 'Cuci Sepatu Anak',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 25,
            'serviceName'  => 'Deep Clean',
            'serviceSlug'  => 'deep-clean-cs',
            'servicePrice'  => 30000,
            'serviceDescription'  => 'Cuci Sepatu Anak',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 25,
            'serviceName'  => 'Leather Treatment',
            'serviceSlug'  => 'leather-treatment-cs',
            'servicePrice'  => 45000,
            'serviceDescription'  => 'Cuci Sepatu Anak',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 25,
            'serviceName'  => 'Suede Treatment',
            'serviceSlug'  => 'suede-treatment-cs',
            'servicePrice'  => 45000,
            'serviceDescription'  => 'Cuci Sepatu Anak',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 25,
            'serviceName'  => 'Unyellowing Treatment',
            'serviceSlug'  => 'unyellowing-treatment-cs',
            'servicePrice'  => 50000,
            'serviceDescription'  => 'Cuci Sepatu Anak',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 25,
            'serviceName'  => 'All White',
            'serviceSlug'  => 'all-white-cs',
            'servicePrice'  => 60000,
            'serviceDescription'  => 'Cuci Sepatu Anak',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 25,
            'serviceName'  => 'Boots',
            'serviceSlug'  => 'boots-cs',
            'servicePrice'  => 80000,
            'serviceDescription'  => 'Cuci Sepatu Anak',
        ]);

        //Dinoshoes Bintaro Laundry Sepatu
        Service::create([
            'laundry_sepatu_id'  => 26,
            'serviceName'  => 'Fast Clean',
            'serviceSlug'  => 'fast-clean-dsb',
            'servicePrice'  => 30000,
            'serviceDescription'  => 'Cuci Sepatu Cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 26,
            'serviceName'  => 'Deep Clean',
            'serviceSlug'  => 'deep-clean-dsb',
            'servicePrice'  => 50000,
            'serviceDescription'  => 'Cuci Sepatu Cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 26,
            'serviceName'  => 'Deep Clean 3 pairs',
            'serviceSlug'  => 'deep-clean-3-pairs-dsb',
            'servicePrice'  => 99000,
            'serviceDescription'  => 'Cuci Sepatu Cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 26,
            'serviceName'  => 'Leather/Boots',
            'serviceSlug'  => 'leather-boots-dsb',
            'servicePrice'  => 65000,
            'serviceDescription'  => 'Cuci Sepatu Cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 26,
            'serviceName'  => 'Kids',
            'serviceSlug'  => 'kids-dsb',
            'servicePrice'  => 35000,
            'serviceDescription'  => 'Cuci Sepatu Cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 26,
            'serviceName'  => 'Unyellowing',
            'serviceSlug'  => 'unyellowing-dsb',
            'servicePrice'  => 80000,
            'serviceDescription'  => 'Cuci Sepatu Cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 26,
            'serviceName'  => 'Water Reppelent',
            'serviceSlug'  => 'water-reppelent-dsb',
            'servicePrice'  => 20000,
            'serviceDescription'  => 'Cuci Sepatu Cepat',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 26,
            'serviceName'  => 'One Day Service',
            'serviceSlug'  => 'one-day-service-dsb',
            'servicePrice'  => 20000,
            'serviceDescription'  => 'Cuci Sepatu Cepat',
        ]);

        //Rakun Cuci Sepatu BSD Anggrek Loka
        Service::create([
            'laundry_sepatu_id'  => 27,
            'serviceName'  => 'One Day Service',
            'serviceSlug'  => 'one-day-service-rcsbsd',
            'servicePrice'  => 99000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 27,
            'serviceName'  => 'Reglue',
            'serviceSlug'  => 'reglue-rcsbsd',
            'servicePrice'  => 75000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 27,
            'serviceName'  => 'Unyellowing',
            'serviceSlug'  => 'unyellowing-rcsbsd',
            'servicePrice'  => 80000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 27,
            'serviceName'  => 'Whitening',
            'serviceSlug'  => 'whitening-rcsbsd',
            'servicePrice'  => 80000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 27,
            'serviceName'  => 'Repaint',
            'serviceSlug'  => 'repaint-rcsbsd',
            'servicePrice'  => 100000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);

        //Cartel Shoes Care - Bintaro
        Service::create([
            'laundry_sepatu_id'  => 28,
            'serviceName'  => 'Deep Clean Medium',
            'serviceSlug'  => 'deep-clean-medium-cscb',
            'servicePrice'  => 50000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 28,
            'serviceName'  => 'Deep Clean Hard',
            'serviceSlug'  => 'deep-clean-hard-cscb',
            'servicePrice'  => 55000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 28,
            'serviceName'  => 'Fast Clean One Hour',
            'serviceSlug'  => 'fast-clean-one-hour-cscb',
            'servicePrice'  => 35000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 28,
            'serviceName'  => 'Unyellowing Midsole Medium',
            'serviceSlug'  => 'unyellowing-midsole-medium-cscb',
            'servicePrice'  => 80000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 28,
            'serviceName'  => 'Unyellowing Midsole Hard',
            'serviceSlug'  => 'unyellowing-midsole-hard-cscb',
            'servicePrice'  => 90000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 28,
            'serviceName'  => 'Repaint Upper',
            'serviceSlug'  => 'repaint-upper-cscb',
            'servicePrice'  => 125000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 28,
            'serviceName'  => 'Repaint Midsole',
            'serviceSlug'  => 'repaint-midsole-cscb',
            'servicePrice'  => 135000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 28,
            'serviceName'  => 'Repair Shoes Resole',
            'serviceSlug'  => 'repair-shoes-resole-cscb',
            'servicePrice'  => 175000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 28,
            'serviceName'  => 'Reglue',
            'serviceSlug'  => 'reglue-cscb',
            'servicePrice'  => 80000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);

        //CUci Sepatu Texax99
        Service::create([
            'laundry_sepatu_id'  => 29,
            'serviceName'  => 'Cleaning Sepatu Standard',
            'serviceSlug'  => 'cleaning-sepatu-standard-texax99',
            'servicePrice'  => 35000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 29,
            'serviceName'  => 'Cleaning Sepatu Boots',
            'serviceSlug'  => 'cleaning-sepatu-boots-texax99',
            'servicePrice'  => 40000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 29,
            'serviceName'  => 'One Day Service',
            'serviceSlug'  => 'one-day-service-texax99',
            'servicePrice'  => 50000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 29,
            'serviceName'  => 'Reglue',
            'serviceSlug'  => 'reglue-texax99',
            'servicePrice'  => 20000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 29,
            'serviceName'  => 'Unyellowing Midsole',
            'serviceSlug'  => 'unyellowing-midsole-texax99',
            'servicePrice'  => 10000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 29,
            'serviceName'  => 'Midsole Whitening',
            'serviceSlug'  => 'midsole-whitening-texax99',
            'servicePrice'  => 100000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);

        //VROZ
        Service::create([
            'laundry_sepatu_id'  => 30,
            'serviceName'  => 'Deep Clean',
            'serviceSlug'  => 'deep-clean-vroz',
            'servicePrice'  => 50000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 30,
            'serviceName'  => 'Deep Clean Full White',
            'serviceSlug'  => 'deep-clean-full-white-vroz',
            'servicePrice'  => 60000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 30,
            'serviceName'  => 'Unyellowing',
            'serviceSlug'  => 'unyellowing-vroz',
            'servicePrice'  => 100000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 30,
            'serviceName'  => 'Whitening',
            'serviceSlug'  => 'whitening-vroz',
            'servicePrice'  => 100000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);

        //Laundry Sepatu Bintaro Clean Brush
        Service::create([
            'laundry_sepatu_id'  => 31,
            'serviceName'  => 'Quick Upper Wash',
            'serviceSlug'  => 'quick-upper-wash-lsbcb',
            'servicePrice'  => 75000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 31,
            'serviceName'  => '3 Hours Wash',
            'serviceSlug'  => '3-hours-wash-lsbcb',
            'servicePrice'  => 95000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 31,
            'serviceName'  => 'Upper Wash',
            'serviceSlug'  => 'upper-wash-lsbcb',
            'servicePrice'  => 60000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);

        //Clean Motion Drop Point Jombang Ciputat
        Service::create([
            'laundry_sepatu_id'  => 32,
            'serviceName'  => 'Cleaning 1 Day',
            'serviceSlug'  => 'cleaning-1-day-cmdpjc',
            'servicePrice'  => 90000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 32,
            'serviceName'  => 'Cleaning 2 Day',
            'serviceSlug'  => 'cleaning-2-day-cmdpjc',
            'servicePrice'  => 80000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 32,
            'serviceName'  => 'Reglue',
            'serviceSlug'  => 'reglue-cmdpjc',
            'servicePrice'  => 30000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 32,
            'serviceName'  => 'Unyellowing',
            'serviceSlug'  => 'unyellowing-cmdpjc',
            'servicePrice'  => 65000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);

        //Queen Shoes Cleaning - Gading Serpong
        Service::create([
            'laundry_sepatu_id'  => 33,
            'serviceName'  => 'Deep Cleaning Mild',
            'serviceSlug'  => 'deep-cleaning-mild-qscgs',
            'servicePrice'  => 38000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 33,
            'serviceName'  => 'Deep Cleaning Hard',
            'serviceSlug'  => 'deep-cleaning-hard-qscgs',
            'servicePrice'  => 45000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 33,
            'serviceName'  => 'Deep Cleaning Express Mild',
            'serviceSlug'  => 'deep-cleaning-express-mild-qscgs',
            'servicePrice'  => 55000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 33,
            'serviceName'  => 'Deep Cleaning Express Hard',
            'serviceSlug'  => 'deep-cleaning-express-hard-qscgs',
            'servicePrice'  => 65000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 33,
            'serviceName'  => 'Whitening Mild',
            'serviceSlug'  => 'whitening-mild-qscgs',
            'servicePrice'  => 55000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 33,
            'serviceName'  => 'Whitening Hard',
            'serviceSlug'  => 'whitening-hard-qscgs',
            'servicePrice'  => 70000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);

        //Shoestamp Laundry Sepatu  Pamulang
        Service::create([
            'laundry_sepatu_id'  => 34,
            'serviceName'  => 'Deep Cleaning Low',
            'serviceSlug'  => 'deep-cleaning-low-sslsp',
            'servicePrice'  => 30000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 34,
            'serviceName'  => 'Deep Cleaning High',
            'serviceSlug'  => 'deep-cleaning-high-sslsp',
            'servicePrice'  => 40000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 34,
            'serviceName'  => 'Reglue',
            'serviceSlug'  => 'reglue-sslsp',
            'servicePrice'  => 15000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 34,
            'serviceName'  => 'Unyellowing',
            'serviceSlug'  => 'unyellowing-sslsp',
            'servicePrice'  => 60000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 34,
            'serviceName'  => 'One Day Service (Addition)',
            'serviceSlug'  => 'one-day-service-sslsp',
            'servicePrice'  => 15000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);

        //SHOEKICK
        Service::create([
            'laundry_sepatu_id'  => 35,
            'serviceName'  => 'Reguler Cleaning',
            'serviceSlug'  => 'reguler-cleaning-shoekick',
            'servicePrice'  => 40000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 35,
            'serviceName'  => 'Unyellowing',
            'serviceSlug'  => 'unyellowing-shoekick',
            'servicePrice'  => 60000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
        Service::create([
            'laundry_sepatu_id'  => 35,
            'serviceName'  => 'Repaint',
            'serviceSlug'  => 'repaint-shoekick',
            'servicePrice'  => 210000,
            'serviceDescription'  => 'Dicuci cuman sehari',
        ]);
    }
}
