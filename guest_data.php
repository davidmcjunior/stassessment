<?php

class GuestData
{

	public static function data()
	{
		return [
			[
				'first_name' => 'Abe',
				'last_name' => 'Burns',
				'guest_account' => [
					[
						'account_id' => 2,
					],
				],
			],
			[
				'first_name' => 'Marco',
				'last_name' => 'Zippy',
				'guest_account' => [
					[
						'account_id' => 1,
					],
				],
			],
			[
				'first_name' => 'Carp',
				'last_name' => 'Crapp',
				'guest_account' => [
					[
						'account_id' => 3,
					],
				],
			]
		];
	}

}
