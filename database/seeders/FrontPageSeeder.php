<?php

namespace Database\Seeders;

use App\Models\FrontPage;
use Illuminate\Database\Seeder;

class FrontPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $visi = 'Menjadikan program studi komputerisasi akutansi yang unggul dalam menyiapkan sumber daya manusisa yang bertaqwa kepada Tuhan YME memiliki kemampuan dan etika profesi dalam bidang informatika serta berwawasan global';

        $misi = 'Meningkatkan etika profesi dan sikap profesional yang tinggi menuju efektivitas kerja berdasarkan ketaqwaan kepada Tuhan YME serta memiliki kecintaan terhadap tanah air';
        $misi1 = 'Menganalisis dan mengantisipasi dinamika lingkungan usaha untuk perusahaan, konsultan, akuntan publik, perusahaan swasta, instansi pemerintah';

        $tujuan = 'Lulusan diharapkan dapat menjadi tenaga ahli madya yang memiliki kemampuan untuk mengamati, memahami, menganalisis, merancang dan membangun atau mengembangkan sistem informasi khususnya untuk bidang akuntansi (sistem informasi akuntansi) yang memiliki etika profesi dan sikap profesional yang tinggi berdasarkan ketaqwaan kepada Tuhan YME serta memiliki kecintaan terhadap tanah air';


        $frontPageData = [
            [
                'type' => 'visi',
                'content' => $visi,
            ],
            [
                'type' => 'misi',
                'content' => $misi,
            ],
            [
                'type' => 'misi',
                'content' => $misi1,
            ],
            [
                'type' => 'tujuan',
                'content' => $tujuan,
            ],
        ];

        foreach ($frontPageData as $key => $v) {
            FrontPage::create($v);
        }
    }
}
