<?php

	namespace Traineratwot\PhpCli\types;

	use Traineratwot\PhpCli\Type;

	class TypeString extends Type
	{
		public static $shotName = 'string';

		public function validate($value)
		{
			return is_string($value) ? TRUE : 'Invalid string "'.$value.'"';
		}
	}