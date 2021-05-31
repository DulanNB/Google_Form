<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
            array('question'=>"Where do you reside?"),
            array('question'=>"Do you have any parents/dependents living in Sri Lanka?"),
            array('question'=>"In case of any celebration/parties or religious ceremonies would you consider handing it over to a professional company?"),
            array('question'=>"Would you consider reaching out for a company to take care of your parents/dependents transport matters?"),
            array('question'=>"Will you consider allocating a company to take care of those things for you?")
        );
        DB::table('questions')->insert($data);
    }
}
