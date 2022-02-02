<?php


namespace App\classes;


class User
{
    protected $user = [];

    public function getAllUser()
    {
        $this->user =[
            0 => [
                'name' => 'Shahabudding',
                'mobile' =>'132435',
                'location' =>'lalbagh',
            ],
            1 => [

                    'name' => 'Rafa',
                    'mobile' =>'4457984',
                    'location' =>'Rampura',
            ],
        ];
        return $this->user;
    }
}