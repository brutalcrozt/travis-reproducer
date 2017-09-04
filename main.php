<?php
  echo "you on main.php". PHP_EOL;
  require_once "vendor". DIRECTORY_SEPARATOR. "autoload.php";
  use mikehaertl\shellcommand\Command;

  // Basic example
  $command = new Command('pdftk');
  if ($command->execute()) {
    echo "from output". PHP_EOL;
    echo $command->getOutput();
  } else {
    echo "php: from err". PHP_EOL;
    echo "php: getError". $command->getError(). PHP_EOL;
    $exitCode = $command->getExitCode();
    echo "exitCode: ". $exitCode. PHP_EOL;
  }
?>
