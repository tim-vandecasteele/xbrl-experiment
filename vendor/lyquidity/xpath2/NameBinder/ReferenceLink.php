<?php

/**
 * XPath 2.0 for PHP
 *  _                      _     _ _ _
 * | |   _   _  __ _ _   _(_) __| (_) |_ _   _
 * | |  | | | |/ _` | | | | |/ _` | | __| | | |
 * | |__| |_| | (_| | |_| | | (_| | | |_| |_| |
 * |_____\__, |\__, |\__,_|_|\__,_|_|\__|\__, |
 *       |___/    |_|                    |___/
 *
 * @author Bill Seddon
 * @version 0.9
 * @Copyright (C) 2017 Lyquidity Solutions Limited
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace lyquidity\XPath2\NameBinder;

/**
 * ReferenceLink (public)
 */
class ReferenceLink
{
	/**
	 * Holds the index from the constructor
	 * @var int $_index
	 */
	private $_index;

	/**
	 * Constructor
	 * @param int $index
	 */
	public function __construct($index)
	{
		$this->_index = $index;
	}

	/**
	 * Get
	 * @param object[] $dataPool
	 * @return object
	 */
	public function Get( $dataPool )
	{
		return $dataPool[ $this->_index ];
	}

	/**
	 * Set
	 * @param object[] $dataPool
	 * @param object $value
	 * @return void
	 */
	public function Set( &$dataPool, $value )
	{
		$dataPool[ $this->_index] = $value;
		// if (OnChange != null)
		//    OnChange(this, $dataPool);
	}
}
