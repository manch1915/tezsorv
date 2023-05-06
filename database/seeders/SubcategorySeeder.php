<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //todo write seeder for sub
        $subcategories = [
            //Ֆիզիկա
            ['name' => 'Շպառգալկա', 'category_id' => 1],
            ['name' => 'Ռեսուրս', 'category_id' => 1],
            ['name' => 'Նյու', 'category_id' => 1],
            ['name' => 'Տ/Ա', 'category_id' => 1],
            //Փիլիսոփայություն
            ['name' => 'Ռեսուրս', 'category_id' => 2],
            ['name' => 'Նյու', 'category_id' => 2],
            ['name' => 'Տ/Ա', 'category_id' => 2],
            //Քիմիյա
            ['name' => 'Շպառգալկա', 'category_id' => 3],
            ['name' => 'Ռեսուրս', 'category_id' => 3],
            ['name' => 'Նյու', 'category_id' => 3],
            ['name' => 'Տ/Ա', 'category_id' => 3],
            //Մաթեմատիկա
            ['name' => 'Շպառգալկա', 'category_id' => 4],
            ['name' => 'Ռեսուրս', 'category_id' => 4],
            ['name' => 'Նյու', 'category_id' => 4],
            ['name' => 'Տ/Ա', 'category_id' => 4],
            //Պատմություն
            ['name' => 'Շպառգալկա', 'category_id' => 5],
            ['name' => 'Ռեսուրս', 'category_id' => 5],
            ['name' => 'Հայոց', 'category_id' => 5],
            ['name' => 'Համաշխարհային', 'category_id' => 5],
            ['name' => 'Նյու', 'category_id' => 5],
            ['name' => 'Տ/Ա', 'category_id' => 5],
            //Վեբ ծրագրավորում
            ['name' => 'HTML, CSS, Javascript', 'category_id' => 6],
            ['name' => 'PHP, MySQL', 'category_id' => 6],
            ['name' => 'Frameworks', 'category_id' => 6],
            ['name' => 'Ձեր կայքերը', 'category_id' => 6],
            //Ծրագրավորում
            ['name' => 'Python', 'category_id' => 7],
            ['name' => 'Node.js', 'category_id' => 7],
            ['name' => 'C/C++', 'category_id' => 7],
            ['name' => 'C#', 'category_id' => 7],
            //Գրաֆիկա
            ['name' => 'Անվճար գրաֆիկա', 'category_id' => 8],
            ['name' => 'Դասեր', 'category_id' => 8],
            ['name' => 'Ռեսուրսներ', 'category_id' => 8],
            ['name' => 'Ձեր աշխատանքները', 'category_id' => 8],
            ['name' => 'Գրաֆիկայի սոֆտ', 'category_id' => 8],
            ['name' => 'Դիզայն', 'category_id' => 8],
            //Խառը
            ['name' => 'Փող աշխատել', 'category_id' => 9],
            ['name' => 'Կրիպտոարժույթներ', 'category_id' => 9],
            ['name' => 'Անվտանգություն', 'category_id' => 9],
            ['name' => 'SMM', 'category_id' => 9],
            ['name' => 'Wi-Fi', 'category_id' => 9],
            ['name' => 'Վիրուսաբանություն', 'category_id' => 9],
            ['name' => 'Հոգեբանություն', 'category_id' => 9],
            //Ձրի
            ['name' => 'Խաղարկություններ', 'category_id' => 10],
            ['name' => 'Բազաների բաշխում', 'category_id' => 10],
            ['name' => 'Ակկերի բաշխում', 'category_id' => 10],
            ['name' => 'Պռոկսիների բաշխում', 'category_id' => 10],
            ['name' => 'Լոգերի բաշխում', 'category_id' => 10],
            ['name' => 'Դեդիկների բաշխում', 'category_id' => 10],
            ['name' => 'Պռոմոկոդեր', 'category_id' => 10],
            //Ծառայություններ
            ['name' => 'Ֆիշինգ', 'category_id' => 11],
            ['name' => 'Տռաֆեռներ', 'category_id' => 11],
            ['name' => 'Ծրագրավորում', 'category_id' => 11],
            ['name' => 'Սոց նակռուտկա', 'category_id' => 11],
            ['name' => 'Կռիպտա', 'category_id' => 11],
            ['name' => 'Դիզայն', 'category_id' => 11],
            ['name' => 'Սիգնաներ', 'category_id' => 11],
            ['name' => 'Ակկերի բուստ', 'category_id' => 11],
            ['name' => 'Ազվուչկա', 'category_id' => 11],
            //Սոֆթ
            ['name' => 'Փնտրում եմ', 'category_id' => 12],
            ['name' => 'Սպամեռ, բոմբեռ', 'category_id' => 12],
            ['name' => 'Այլ', 'category_id' => 12],
            //Օֆտոպիկ
            ['name' => 'Անիմե', 'category_id' => 13],
            ['name' => 'Ֆիլմ', 'category_id' => 13],
            ['name' => 'Հումոր', 'category_id' => 13],
            ['name' => 'Պատմություններ', 'category_id' => 13],
            ['name' => 'Սպորտ', 'category_id' => 13],
            ['name' => 'Ձեր ստեղծագործությունը', 'category_id' => 13],
            //Ֆորումի կյանքը
            ['name' => 'Բողոքներ', 'category_id' => 14],
            ['name' => 'Թերություններ', 'category_id' => 14],
            ['name' => 'Առաջարկներ', 'category_id' => 14],
            ['name' => 'Մրցույթներ', 'category_id' => 14],
            ['name' => 'Ֆորումի ուղեցույցներ', 'category_id' => 14],
            ['name' => 'Կայքի նորություններ', 'category_id' => 14],
        ];

        foreach ($subcategories as $subcategory) {
            Subcategory::create($subcategory);
        }

    }
}
