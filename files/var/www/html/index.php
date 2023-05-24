<?php

echo "running php version " . phpversion() . "\n";
foreach(get_loaded_extensions() as $module) {
  echo " * " . $module . "\n";
}
echo "\n";
