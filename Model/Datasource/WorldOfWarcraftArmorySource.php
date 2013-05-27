<?php
/**
 * World of Warcraft Armory Datasource
 * 
 * Provides access to the Blizzard Community Platform API for World of Warcraft.
 * Enables access to all available regions, as well as support for all available
 * locales (as available per region). 
 *
 * PHP version 5
 *
 * @author        Nicolai Agersbæk <nicolai.agersbaek@gmail.com>
 * @link          http://www.pinnacle-guild.eu Pinnacle Guild (Argent Dawn - EU)
 * @package       WorldOfWarcraftArmory
 * @subpackage    WorldOfWarcraftArmory.Models.DataSource
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('HttpSocket', 'Network/Http');

/**
 * World of Warcraft Armory Datasource
 * 
 * @package Pinnacle
 * @author Love4All
 * @copyright 2013
 * @version $Id$
 * @access public
 */
class WowArmorySource extends DataSource
{
/**
 * 
 * 
 * 
 */
    public $description = '';
}