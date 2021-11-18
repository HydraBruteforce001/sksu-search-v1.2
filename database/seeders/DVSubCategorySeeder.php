<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DVSubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //first
        DB::table('dv_sub_categories')->insert([
            'dv_sub_category'=> 'Local Travel',
            'dv_category_id'=> 1,
            ]);
            DB::table('dv_sub_categories')->insert([
                'dv_sub_category'=> 'Foreign Travel',
                'dv_category_id'=> 1,
                ]);
                DB::table('dv_sub_categories')->insert([
                    'dv_sub_category'=> 'Activity, Program, Project, ETC.',
                    'dv_category_id'=> 1,
                    ]);
                    DB::table('dv_sub_categories')->insert([
                        'dv_sub_category'=> 'Payroll',
                        'dv_category_id'=> 1,
                        ]);
                        DB::table('dv_sub_categories')->insert([
                            'dv_sub_category'=> 'Special Disbursing Officer',
                            'dv_category_id'=> 1,
                            ]);


                            // second
                            DB::table('dv_sub_categories')->insert([
                                'dv_sub_category'=> 'Local Travel',
                                'dv_category_id'=> 2,
                                ]);
                                DB::table('dv_sub_categories')->insert([
                                    'dv_sub_category'=> 'Foreign Travel',
                                    'dv_category_id'=> 2,
                                    ]);
                                    DB::table('dv_sub_categories')->insert([
                                        'dv_sub_category'=> 'Activity, Program, Project, ETC.',
                                        'dv_category_id'=> 2,
                                        ]);
                                        DB::table('dv_sub_categories')->insert([
                                            'dv_sub_category'=> 'Supplies/Materials',
                                            'dv_category_id'=> 2,
                                            ]);

    }
}
