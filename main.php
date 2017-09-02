<?php 
  echo "you on main.php";
  require_once "\vendor\autoload.php";
  use mikehaertl\shellcommand\Command;

  // Basic example
  $command = new Command('/usr/local/bin/mycommand -a -b');
  if ($command->execute()) {
    echo "from output\n";
    echo $command->getOutput();
  } else {
    echo "from err\n";
    echo $command->getError();
    $exitCode = $command->getExitCode();
    echo "exitCode: ". $exitCode;
  }
?>
