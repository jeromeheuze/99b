<?php

/**
 * Using PHP, Print out the lyrics to "99 Bottles of beer on the wall"
 *
 * Lyrics:
 * 99 bottles of beer on the wall, 99 bottles of beer.
 * Take one down and pass it around, 98 bottles of beer on the wall.
 *
 */

for ($i = 99; $i > 0; $i--) {
    echo "$i bottles of beer on the wall, $i bottles of beer.\n";
    echo "Take one down and pass it around, $i bottles of beer on the wall.\n";
    echo "<br><br>";
}
