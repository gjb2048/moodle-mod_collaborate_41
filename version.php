<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Defines the version and other meta-info about the plugin
 *
 * @package    mod_collaborate
 * @copyright  2019 Richard Jones richardnz@outlook.com
 * @copyright  2022 G J Barnard - {@link http://moodle.org/user/profile.php?id=442195}.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @see https://github.com/moodlehq/moodle-mod_simplemod
 * @see https://github.com/justinhunt/moodle-mod_simplemod
 * @see https://github.com/richardjonesnz/moodle-mod_simplemod
 * @see https://github.com/gjb2048/moodle-mod_simplemod
 */

defined('MOODLE_INTERNAL') || die();

$plugin->component = 'mod_collaborate';
$plugin->version = 2022120408;
$plugin->requires  = 2022112800.00; // 4.1 (Build: 20221128).
$plugin->supported = array(401, 401);
$plugin->release = '401.1.5';
$plugin->maturity = MATURITY_STABLE;
