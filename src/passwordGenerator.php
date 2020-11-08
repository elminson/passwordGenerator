<?php
/**
 * Created by PHPProjectGen.
 * User: edeoleo@gmail.com
 * Date: 11/07/2020
 * Time: 10:45 PM
 */

namespace Elminson\passwordGenerator;

/**
 *
 *
 */
class passwordGenerator
{

	/**
	 * @var int
	 */
	private $passwordLength = 36;
	private $tempPassword = '';
	private $passwordString = '';

	/**
	 * PHPProjectGen constructor.
	 */
	public function __construct()
	{

		$this->passwordString = range('a', 'z');
	}

	/**
	 * @param $length
	 *
	 * @return $this
	 */
	public function setPasswordLength($length)
	{

		$this->passwordLength = $length;

		return $this;
	}


	/**
	 * @return $this
	 */
	public function useNumbers()
	{

		$this->passwordString .= range('0', '9');

		return $this;
	}

	/**
	 * @return $this
	 */
	public function useUpperCase()
	{

		$this->passwordString = array_merge($this->passwordString, range('A', 'Z'));

		return $this;
	}

	/**
	 * @return $this
	 */
	public function useSymbols()
	{

		$this->passwordString = array_merge($this->passwordString, str_split('!@#$%^&*()'));

		return $this;
	}

	/**
	 * @return $this
	 */
	public function generate()
	{

		// Strong password can't be < 9 chars
		if ($this->passwordLength < 9) {
			$this->passwordLength = 8;
		}

		$maxLength = count($this->passwordString) - 1;
		for ($x = 0; $x <= $this->passwordLength; $x++) {

			$index = rand(0, $maxLength);
			$this->tempPassword .= $this->passwordString[$index];

		}

		return $this;

	}

	/**
	 * @return string
	 */
	public function getPassword()
	{

		return $this->tempPassword;
	}

}
