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
	 * This set the password length
	 *
	 * @param $length
	 *
	 * @return $this
	 */
	public function setPasswordLength($length = 36)
	{

		$this->passwordLength = $length;

		return $this;
	}


	/**
	 * Add numbers to generate the password
	 *
	 * @return $this
	 */
	public function useNumbers()
	{

		$this->passwordString .= range('0', '9');

		return $this;
	}

	/**
	 * Add upper case characters to generate the password
	 *
	 * @return $this
	 */
	public function useUpperCase()
	{

		$this->passwordString = array_merge($this->passwordString, range('A', 'Z'));

		return $this;
	}

	/**
	 * Add symbols characters to generate the password
	 *
	 * @return $this
	 */
	public function useSymbols()
	{

		$this->passwordString = array_merge($this->passwordString, str_split('!@#$%^&*()'));

		return $this;
	}

	/**
	 * Generate the password
	 *
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
	 * Return the password
	 *
	 * @return string
	 */
	public function getPassword()
	{

		if (empty($this->tempPassword)) {
			$this->generate();
		}

		return $this->tempPassword;
	}

}
