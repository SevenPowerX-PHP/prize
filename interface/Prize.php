<?php
	/**
	 * Created by PhpStorm.
	 * User: Lavryniuk Andrii
	 * Date: 13.02.2019
	 * Time: 13:27
	 */

	interface Prize
	{
		public function getPrize(): Prize;

		public function toSend();

		public function toConvert();
	}