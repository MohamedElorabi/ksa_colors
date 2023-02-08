<?php

namespace Database\Seeders;

use App\Models\Who;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WhoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $who = \App\Models\Who::create([
            'title' => 'نبذه عننا',
            'desc' => 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً',
            'image' => '304150_0.jpg',
            'url_video' => 'https://www.youtube.com/watch?v=bJ6kfrEQJuM&ab_channel=%D8%AF%D8%B1%D9%88%D8%B3%D8%A3%D9%88%D9%86%D9%84%D8%A7%D9%8A%D9%86',
            'title_bottom' => 'المصنع السعودى للالوان والمحسنات الغذائية',
            'desc_bottom' => 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً',
        ]);
    }
}
