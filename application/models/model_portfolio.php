<?php

class Model_Portfolio extends Model
{
    public function get_data()
    {
        return array(
            array(
                'ID'   => '1',
                'Year' => '2018',
                'Site' => 'http://111aa.uz',
                'Description' => 'Promo site'
            ),
            array(
                'ID'   => '2',
                'Year' => '2019',
                'Site' => 'http://111aa.com',
                'Description' => 'Promo site com'
            ),
            array(
                'ID'   => '3',
                'Year' => '2020',
                'Site' => 'http://111aa.ru',
                'Description' => 'Promo site ru'
            ),
        );
    }
}