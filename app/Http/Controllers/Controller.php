<?php

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getCategory(/*int $id = null*/): array
    {
        $category = [];
        $faker = Factory::create();

        /*if($id) {
            return [
                'categoryTitle'       => $faker->jobTitle(),
            ];
        }*/

        for($i=1; $i<5; $i++) {
            $category[$i] = [
                'categoryTitle'       => $faker->jobTitle(),
            ];
        }

        return $category;
    }
}
