<?php
	/**
	 * Created by PhpStorm.
	 * User: Lavryniuk Andrii
	 * Date: 13.02.2019
	 * Time: 13:27
	 */

	interface PrizeInterface
	{
		public function getPrize(): PrizeInterface;

		public function toSend();

		public function toConvert();
	}