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
 * This filter allows to make YouTube videos embeddable in such a way
 * that they don't get shown until activated by the user
 *
 * @package    filter
 * @subpackage iconactivateyoutube
 * @copyright  2022 ICON Vernetzte Kommunikation GmbH
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class filter_iconactivateyoutube extends moodle_text_filter {

    public function filter($text, array $options = array()) {
        global $OUTPUT, $PAGE;
        if (!preg_match_all('/{youtube:([a-zA-Z0-9]{8,16})(?::([^}]*))?}/', $text, $matches)) {
            return $text;
        }
        foreach ($matches[1] as $key => $match) {
            if (empty($matches[2][$key])) {
                $headline = get_string('headline', 'filter_iconactivateyoutube');
            } else {
                $headline = $matches[2][$key];
            }
            $infotext = get_string('infotext', 'filter_iconactivateyoutube');
            $footer = get_string('footer', 'filter_iconactivateyoutube');
            $context = array(
              'youtubeid' => $match,
              'headline' => $headline,
              'infotext' => $infotext,
              'footer' => $footer,
            );
            $replacement = $OUTPUT->render_from_template('filter_iconactivateyoutube/view', $context);
            $text = str_replace($matches[0][$key], $replacement, $text);
        }
        $PAGE->requires->js_call_amd('filter_iconactivateyoutube/activate', 'init');
        return $text;
    }

}
