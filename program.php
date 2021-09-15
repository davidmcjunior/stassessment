<?php

require_once 'q1.php';
require_once 'q2.php';
// require_once 'q3.php';

class Program
{

	public static function main()
	{

		while ($question = readline("Enter Q1, Q2 or Q3...\n")) {
			switch ($question) {
				case 'Q1':
					(new Q1())->run();
					break;

				case 'Q2':
					(new Q2())->run();
					break;

				case 'Q3':
					//(new Q3())->run();
					break;
			}

		}

	}

}

(new Program())->main();
