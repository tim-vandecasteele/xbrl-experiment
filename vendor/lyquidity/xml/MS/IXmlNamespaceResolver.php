<?php

/**
 * Part of the XML Schema library for PHP
 *  _                      _     _ _ _
 * | |   _   _  __ _ _   _(_) __| (_) |_ _   _
 * | |  | | | |/ _` | | | | |/ _` | | __| | | |
 * | |__| |_| | (_| | |_| | | (_| | | |_| |_| |
 * |_____\__, |\__, |\__,_|_|\__,_|_|\__|\__, |
 *       |___/    |_|                    |___/
 *
 * @author Bill Seddon
 * @version 0.9
 * @Copyright (C) 2018 Lyquidity Solutions Limited
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

namespace lyquidity\xml\MS;

/**
 * Allows a class to declare that it supports being a namespace resolver
 */
interface IXmlNamespaceResolver
{
	/**
	 * Return an array of namespaces indexed by prefix
	 * @param XmlNamespaceScope $scope
	 * @return array
	 */
	function getNamespacesInScope( $scope );

	/**
	 * Get the namespace for a prefix
	 * @param string $prefix
	 * @return string
	 */
	function lookupNamespace( $prefix );

	/**
	 * Get the prefix associated with a namespace
	 * @param string $namespaceName
	 * @return string
	 */
	function lookupPrefix( $namespaceName );
}

