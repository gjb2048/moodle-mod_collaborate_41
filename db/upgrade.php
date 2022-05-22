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
 * This file keeps track of upgrades to the collaborate module
 *
 * Sometimes, changes between versions involve alterations to database
 * structures and other major things that may break installations. The upgrade
 * function in this file will attempt to perform all the necessary actions to
 * upgrade your older installation to the current version. If there's something
 * it cannot do itself, it will tell you what you need to do.  The commands in
 * here will all be database-neutral, using the functions defined in DLL libraries.
 *
 * @package    mod_collaborate
 * @copyright  2019 Richard Jones richardnz@outlook.com
 * @copyright  2022 G J Barnard - {@link http://moodle.org/user/profile.php?id=442195}.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @see https://github.com/moodlehq/moodle-mod_simplemod
 * @see https://github.com/justinhunt/moodle-mod_simplemod*/

/**
 * Execute collaborate upgrade from the given old version
 *
 * @param int $oldversion
 * @return bool
 */
function xmldb_collaborate_upgrade($oldversion) {
    global $DB;
    $dbman = $DB->get_manager();

    if ($oldversion < 2022120404) {

        $table = new xmldb_table('collaborate');

        // Define fields instructionsa, instructionsaformat, instructionsb and instructionsbformat to be added to collaborate.
        $field = new xmldb_field('instructionsa', XMLDB_TYPE_TEXT, null, null, null, null, null, 'title');

        // Conditionally launch add field instructionsa.
        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }

        $field = new xmldb_field('instructionsaformat', XMLDB_TYPE_INTEGER, '4', null, null, null, '0', 'instructionsa');

        // Conditionally launch add field instructionsaformat.
        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }

        $field = new xmldb_field('instructionsb', XMLDB_TYPE_TEXT, null, null, null, null, null, 'instructionsaformat');

        // Conditionally launch add field instructionsb.
        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }

        $field = new xmldb_field('instructionsbformat', XMLDB_TYPE_INTEGER, '4', null, null, null, '0', 'instructionsb');

        // Conditionally launch add field instructionsbformat.
        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }

        // Collaborate savepoint reached.
        upgrade_mod_savepoint(true, 2022120404, 'collaborate');
    }

    return true;
}
