<?php

namespace App;

class OrderConfirmationNumber
{
	public function generate()
	{
        $pool = '23456789ABCDEFGHJKLMNPQRSTUVWXYZ';

        return substr(str_shuffle(str_repeat($pool, 24)), 0, 24);
	}
}