<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //call uses table seeder class
  		$this->call('select2');
        //this message shown in your terminal after running db:seed command
        $this->command->info("select2 table seeded :)");
      
    }
}
class select2 extends Seeder {

   public function run()
   {
     //insert some dummy records
     DB::table('select2')->insert(array(
         array('name'=>'deepak','email'=>'deepak@gmail.com'),
         array('name'=>'satwinder','email'=>'satwinder@gmail.com'),
         array('name'=>'rohit','email'=>'rohit@gmail.com'),
         array('name'=>'mandeep','email'=>'mandeep@gmail.com'),
         array('name'=>'ajay','email'=>'ajay@gmail.com'),
         array('name'=>'samar','email'=>'samar@gmail.com')
    ));
   }

}

