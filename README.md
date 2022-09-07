# Activate YouTube content by ICON #

The activate YouTube filter by ICON lets you easily embed YouTube videos in any content in a GDPR-compliant way.
GDPR-compliant means that the YouTube video won't be inserted until users have given their consent by activating it with a click.

To embed a YouTube video, wrap "youtube:[id of the YouTube video]" in curly braces.
For example, if you're on https://www.youtube.com/watch?v=dQw4w9WgXcQ, the part that comes after ?v= is the id, in this case "dQw4w9WgXcQ".
So to embed it on your page, write **{youtube:dQw4w9WgXcQ}** anywhere in text content, like in a description, a page activity or whatever.

You can also replace the header with a custom text. 
To do so, add another colon after the YouTube id, 
followed by your desired text, like: 
**{youtube:dQw4w9WgXcQ:This never gets old}**

If you leave this last part out, the default header will say "Recommended external content" (you can modify this default text through language customization of course).
The language id is "headline" for component "filter_iconactivateyoutube".

## Installing via uploaded ZIP file ##

1. Log in to your Moodle site as an admin and go to _Site administration >
   Plugins > Install plugins_.
2. Upload the ZIP file with the plugin code. You should only be prompted to add
   extra details if your plugin type is not automatically detected.
3. Check the plugin validation report and finish the installation.

## Installing manually ##

The plugin can be also installed by putting the contents of this directory to

    {your/moodle/dirroot}/filter/iconactivateyoutube

Afterwards, log in to your Moodle site as an admin and go to _Site administration >
Notifications_ to complete the installation.

Alternatively, you can run

    $ php admin/cli/upgrade.php

to complete the installation from the command line.

## License ##

2022 ICON Vernetzte Kommunikation GmbH <info@iconnewmedia.de>

This program is free software: you can redistribute it and/or modify it under
the terms of the GNU General Public License as published by the Free Software
Foundation, either version 3 of the License, or (at your option) any later
version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY
WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
PARTICULAR PURPOSE.  See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with
this program.  If not, see <https://www.gnu.org/licenses/>.
