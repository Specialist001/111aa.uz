<?php

class Model_Services extends Model
{
    public function get_data()
    {
        $array_zero = array(
            1, 'we', array(11, 12, 13, 14), 3, 4, 5, 6, 7
        );

        return $array_zero;
    }
}