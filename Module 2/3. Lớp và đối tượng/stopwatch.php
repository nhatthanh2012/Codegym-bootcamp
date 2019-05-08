<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        class Stopwatch
        {
            private $startTime;
            private $endTime;
            function getStartTime(){
                return $this->startTime;
            }
            function getEndTime(){
                return $this->endTime;
            }
            function start(){
                return $this->startTime = microtime(false);
            }
            function stop(){
                return $this->endTime = microtime(false);
            }
            function  getElapsedTime() {
                return $this->startTime - $this->endTime;
            }

        }
        $stopwatch = new Stopwatch;
    ?>
</body>
</html>