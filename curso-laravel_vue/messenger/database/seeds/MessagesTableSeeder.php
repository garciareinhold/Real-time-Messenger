<?php

use Illuminate\Database\Seeder;
use App\Message;


class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Message::create([
        'from_id' => 1,
        'to_id' => 2,
        'content' => "hola locooo"
      ]);

      Message::create([
        'from_id' => 2,
        'to_id' => 1,
        'content' => "que haces? todo bien?"
      ]);

      Message::create([
        'from_id' => 1,
        'to_id' => 3,
        'content' => "hola user 3"
      ]);

      Message::create([
        'from_id' => 3,
        'to_id' => 1,
        'content' => "que haces user 1?"
      ]);
    }
}
