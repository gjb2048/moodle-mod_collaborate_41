Changes
=======

V401.1.4
---------
1. End of week 4.

V401.1.3
---------
1. End of week 3.

V401.1.2
---------
1. End of week 2.

V401.1.1
---------
1. End of week 1.

V401.1.0
---------
1. Moodle 4.1 version.
2. Add COPYING.txt.
3. Add 'monologo', being 'fa-solid fa-plug' from 'Font Awesome 6.2.1 free' - see the license in the 'pix' folder.
4. Added 'FEATURE_MOD_PURPOSE' to 'simplemod_supports' in 'lib.php' that essentially sets the background and colour of the monologo.

V3.11.1.0
---------
1. Moodle 3.11 version.
2. Added downgrade_me.php script - helps with development.
3. Improved logit debugging method to output a stack trace, helps to identify higher up callers.
4. Improved logit debugging method to use the PHP error log instead.
5. Tidied code.

1.1 - 27/08/20 - MINOR change to rendering
------------------------------------------
Put the renderer function code into classes/output/view.php
Called the template by the same name and now use the core renderer to display the page content.
Removed the renderer.php file.
