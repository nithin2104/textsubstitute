<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Plugin administration pages are defined here.
 *
 * @package     filter_textsubstitute
 * @category    admin
 * @copyright   2024 Nithin kumar <nithin54@gmail.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {
    $settings->add(new admin_setting_configtext('filter_textsubstitute/searchterm',
        get_string('settingsearchterm', 'filter_textsubstitute'),
        get_string('settingsearchterm_help', 'filter_textsubstitute'),
        '',
        PARAM_TEXT)
    );

    $settings->add(new admin_setting_configtext('filter_textsubstitute/substituteterm',
        get_string('settingsubstituteterm', 'filter_textsubstitute'),
        get_string('settingsubstituteterm_help', 'filter_textsubstitute'),
        '',
        PARAM_TEXT)
    );

    $settings->add(new admin_setting_configmulticheckbox('filter_textsubstitute/formats',
        get_string('settingformats', 'filter_textsubstitute'),
        get_string('settingformats_desc', 'filter_textsubstitute'),
        [FORMAT_HTML => 1, FORMAT_MARKDOWN => 1, FORMAT_MOODLE => 1], format_text_menu())
    );
}
