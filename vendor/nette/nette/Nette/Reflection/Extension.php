<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */

namespace Nette\Reflection;

use Nette;
use Nette\ObjectMixin;


/**
 * Reports information about a extension.
 *
 * @author     David Grudl
 */
class Extension extends \ReflectionExtension
{

	public function __toString()
	{
		return $this->getName();
	}


	/********************* Reflection layer ****************d*g**/


	public function getClasses()
	{
		$res = array();
		foreach (parent::getClassNames() as $val) {
			$res[$val] = new ClassType($val);
		}
		return $res;
	}


	public function getFunctions()
	{
		foreach ($res = parent::getFunctions() as $key => $val) {
			$res[$key] = new GlobalFunction($key);
		}
		return $res;
	}


	/********************* Nette\Object behaviour ****************d*g**/


	/**
	 * @deprecated
	 */
	public static function getReflection()
	{
		trigger_error(__METHOD__ . '() is deprecated.', E_USER_DEPRECATED);
		return new ClassType(get_called_class());
	}


	public function __call($name, $args)
	{
		return ObjectMixin::call($this, $name, $args);
	}


	public function &__get($name)
	{
		return ObjectMixin::get($this, $name);
	}


	public function __set($name, $value)
	{
		ObjectMixin::set($this, $name, $value);
	}


	public function __isset($name)
	{
		return ObjectMixin::has($this, $name);
	}


	public function __unset($name)
	{
		ObjectMixin::remove($this, $name);
	}

}
