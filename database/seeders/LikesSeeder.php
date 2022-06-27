<?php

namespace Database\Seeders;

use App\Models\Like;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LikesSeeder extends Seeder
{
	public function run()
	{
		Like::create([
			'user_id' => 1,
			'post_id' => 6
		]);

		Like::create([
			'user_id' => 4,
			'post_id' => 6
		]);

		Like::create([
			'user_id' => 2,
			'post_id' => 6
		]);
		
		Like::create([
			'user_id' => 2,
			'post_id' => 9
		]);
	}
}
