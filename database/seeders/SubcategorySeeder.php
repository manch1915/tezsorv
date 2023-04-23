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
            //Ձրի
            ['name' => 'Խաղարկություններ', 'category_id' => 1],
            ['name' => 'Բազաների բաշխում', 'category_id' => 1],
            ['name' => 'Ակկերի բաշխում', 'category_id' => 1],
            ['name' => 'Պռոկսիների բաշխում', 'category_id' => 1],
            ['name' => 'Լոգերի բաշխում', 'category_id' => 1],
            ['name' => 'Դեդիկների բաշխում', 'category_id' => 1],
            ['name' => 'Պռոմոկոդեր', 'category_id' => 1],
            //Տռեյդ
            ['name' => 'Խաղեր', 'category_id' => 2],
            ['name' => 'Սոց. ցանցեր', 'category_id' => 2],
            ['name' => 'Վերիֆիկացիյա', 'category_id' => 2],
            ['name' => 'Լոգեր', 'category_id' => 2],
            ['name' => 'Պռոկսի, VPN', 'category_id' => 2],
            ['name' => 'Սկռիպտեր, կայքեր', 'category_id' => 2],
            //Ծառայություններ
            ['name' => 'Ֆիշինգ', 'category_id' => 3],
            ['name' => 'Տռաֆեռներ', 'category_id' => 3],
            ['name' => 'Ծրագրավորում', 'category_id' => 3],
            ['name' => 'Սոց նակռուտկա', 'category_id' => 3],
            ['name' => 'Սոց նակռուտկա', 'category_id' => 3],
            ['name' => 'Կռիպտ', 'category_id' => 3],
            ['name' => 'Դիզայն', 'category_id' => 3],
            ['name' => 'Սիգներ', 'category_id' => 3],
            ['name' => 'Ակկերի բուստ', 'category_id' => 3],
            ['name' => 'Թասկեր', 'category_id' => 3],
            ['name' => 'Ազվուչկա', 'category_id' => 3],
            //Հոդվածներ
            ['name' => 'Փող աշխատել', 'category_id' => 4],
            ['name' => 'Կրիպտոարժույթներ', 'category_id' => 4],
            ['name' => 'Անվտանգություն', 'category_id' => 4],
            ['name' => 'SMM', 'category_id' => 4],
            ['name' => 'Wi-Fi', 'category_id' => 4],
            ['name' => 'Վիրուսաբանություն', 'category_id' => 4],
            ['name' => 'Հոգեբանություն', 'category_id' => 4],
            //Ֆիզիկա
            ['name' => 'Շպառգալկա', 'category_id' => 5],
            ['name' => 'Ռեսուրս', 'category_id' => 5],
            ['name' => 'Նյու', 'category_id' => 5],
            //Փիլիսոփայություն
            ['name' => 'Շպառգալկա', 'category_id' => 6],
            ['name' => 'Ռեսուրս', 'category_id' => 6],
            ['name' => 'Նյու', 'category_id' => 6],
            //Քիմիյա
            ['name' => 'Շպառգալկա', 'category_id' => 7],
            ['name' => 'Ռեսուրս', 'category_id' => 7],
            ['name' => 'Նյու', 'category_id' => 7],
            //Մաթեմատիկա
            ['name' => 'Շպառգալկա', 'category_id' => 8],
            ['name' => 'Ռեսուրս', 'category_id' => 8],
            ['name' => 'Նյու', 'category_id' => 8],
            //Պատմություն
            ['name' => 'Շպառգալկա', 'category_id' => 9],
            ['name' => 'Ռեսուրս', 'category_id' => 9],
            ['name' => 'Հայոց', 'category_id' => 9],
            ['name' => 'Համաշխարհային', 'category_id' => 9],
            ['name' => 'Նյու', 'category_id' => 9],
            //Սոֆթ
            ['name' => 'Փնտրում եմ', 'category_id' => 10],
            ['name' => 'Բռուտ, չեկեռներ', 'category_id' => 10],
            ['name' => 'Պռոկսի չեկեռներ', 'category_id' => 10],
            ['name' => 'Բազաների հետ աշխատանք', 'category_id' => 10],
            ['name' => 'Լոգերի հետ աշխատանք', 'category_id' => 10],
            ['name' => 'Պառսեռներ', 'category_id' => 10],
            ['name' => 'Սպամեռ, բոմբեռ', 'category_id' => 10],
            //Օֆտոպիկ
            ['name' => 'Անիմե', 'category_id' => 11],
            ['name' => 'Ֆիլմ', 'category_id' => 11],
            ['name' => 'Հումոր', 'category_id' => 11],
            ['name' => 'Պատմություններ', 'category_id' => 11],
            ['name' => 'Սպորտ', 'category_id' => 11],
            ['name' => 'Սլիվ 18+', 'category_id' => 11],
            ['name' => 'Ձեր ստեղծագործությունը', 'category_id' => 11],
            //Վեբ ծրագրավորում
            ['name' => 'HTML, CSS, Javascript', 'category_id' => 12],
            ['name' => 'PHP, MySQL', 'category_id' => 12],
            ['name' => 'Ձեր կայքերը', 'category_id' => 12],
            //Ծրագրավորում
            ['name' => 'Private Keeper, BAS, OB', 'category_id' => 13],
            ['name' => 'Python', 'category_id' => 13],
            ['name' => 'Node.js', 'category_id' => 13],
            ['name' => 'C/C++', 'category_id' => 13],
            ['name' => 'C#', 'category_id' => 13],
            //Գրաֆիկա
            ['name' => 'Անվճար գրաֆիկա', 'category_id' => 14],
            ['name' => 'Դասեր', 'category_id' => 14],
            ['name' => 'Ռեսուրսներ', 'category_id' => 14],
            ['name' => 'Ձեր աշխատանքները', 'category_id' => 14],
            ['name' => 'Գրաֆիկայի սոֆտ', 'category_id' => 14],
            ['name' => 'Դիզայն', 'category_id' => 14],
            //Ֆորումի կյանքը
            ['name' => 'Բողոքներ', 'category_id' => 15],
            ['name' => 'Թերություններ', 'category_id' => 15],
            ['name' => 'Առաջարկներ', 'category_id' => 15],
            ['name' => 'Մրցույթներ', 'category_id' => 15],
            ['name' => 'Ֆորումի ուղեցույցներ', 'category_id' => 15],
            ['name' => 'Կայքի նորություններ', 'category_id' => 15],
        ];

        foreach ($subcategories as $subcategory) {
            Subcategory::create($subcategory);
        }

    }
}
