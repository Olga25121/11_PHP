<!-- 5. *С помощью рекурсии организовать функцию возведения числа в степень. 
Формат: function power($val, $pow), где $val – заданное число, $pow – степень. -->

<?php



	function power($val, $pow)
	{
		if ($pow == 1){
			return $val;
		}
		if ($pow != 1){
			return $val * power($val, $pow-1);
		}
	}
	echo power(4, 4);