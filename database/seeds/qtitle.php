<?php

use Illuminate\Database\Seeder;
use App\Qtitle as QtitleEloquent;

class qtitle extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $title1 = QtitleEloquent::create([
        	'no' => 1,
            'title' => "是否曾經在搜尋自己車子的型號搭配想要的輪框、尺寸或是想要的貼膜彩繪拉花，而花上很多時間依舊找不到呢？"
        ]);

        $title2 = QtitleEloquent::create([
            'no' => 2,
        	'title' => "如果有可以協助搜尋這樣資訊的網站，是否會有興趣使用？"
        ]);

        $title3 = QtitleEloquent::create([
            'no' => 3,
        	'title' => "會想搜尋的項目（如鋁圈、避震、外觀套件、彩繪拉花.......等）"
        ]);

        $title4 = QtitleEloquent::create([
            'no' => 4,
        	'title' => "是否願意無償提供自己愛車精心改造的照片，供網友作為日後升級的參考呢？"
        ]);

        $title5 = QtitleEloquent::create([
            'no' => 5,
        	'title' => "是否介意使用網站logo作為車牌遮罩?"
        ]);

        $title6 = QtitleEloquent::create([
            'no' => 6,
        	'title' => "是否瀏覽過類似的網站?"
        ]);

        $title7 = QtitleEloquent::create([
            'no' => 7,
        	'title' => "有什麼建議或需求?"
        ]);
    }
}
