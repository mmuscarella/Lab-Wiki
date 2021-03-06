<?php
/**
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 */

/**
 * Stub class for maintaining backward-compatibility with extensions
 * that have not been updated for version 2.0 of SyntaxHighlight_GeSHi.
 */
class GeSHi {
	public function __construct( $html ) {
		$this->html = $html;
	}

	public function error() {
	}

	public function set_language( $language ) {
	}

	public function parse_code() {
		global $wgOut;
		$wgOut->addModuleStyles( 'ext.pygments' );
		return $this->html;
	}
}
