<?php 
  echo "you on main.php". PHP_EOL;
  require_once "/vendor/autoload.php";
  use mikehaertl\shellcommand\Command;

  // Basic example
  $command = new Command('/usr/local/bin/mycommand -a -b');
  if ($command->execute()) {
    echo "from output". PHP_EOL;
    echo $command->getOutput();
  } else {
    echo "from err". PHP_EOL;
    echo $command->getError();
    $exitCode = $command->getExitCode();
    echo "exitCode: ". $exitCode;
  }
?>
