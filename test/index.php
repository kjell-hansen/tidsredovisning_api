<?php
declare (strict_types=1);

require_once '../src/routes.php';
require_once '../src/Route.php';
require_once '../src/Response.php';
require_once '../src/RequestMethod.php';

// Hämta begärd resurs
$uri = filter_var($_SERVER['REQUEST_URI'], FILTER_UNSAFE_RAW);

// Hämta ruttinformation
$route = getRoute($uri);

////var_dump($route);

switch (count($route->getParams())) {
    case 0:
        require_once './testaAllt.php';
        $html = testaAllaFunktioner();
        break;
    case 1:
        switch ($route->getParams()[0]) {
            case "activity":
                require_once './testActivities.php';
                $html = allaActivityTester();
                break;
            case "tasklist":
                require_once './testTasks.php';
                $html = allaTasklistTester();
                break;
            case "task":
                require_once './testTasks.php';
                $html = allaTaskTester();
                break;
            case "compilation":
                require_once './testCompilation.php';
                $html = allaCompilationTester();
                break;
            default:
                var_dump($route);
                break;
        }
        break;
    case 2:
        switch ($route->getParams()[0]) {
            case "activity":
                require_once './testActivities.php';
                $html = testActivityFunction($route->getParams()[1]);
                break;
            case "tasklist":
                require_once './testTasks.php';
                $html = testTaskFunction($route->getParams()[1]);
                break;
            case "task":
                require_once './testTasks.php';
                $html = testTaskFunction($route->getParams()[1]);
                break;
            case "compilation":
                require_once './testCompilation.php';
                $html = testCompilationFunction($route->getParams()[1]);
                break;
            default:
                var_dump($route);
                break;
        }
        break;
    default:
        var_dump($route);
        break;
}

$dir= dirname($_SERVER['SCRIPT_NAME']);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Tester för tidsredovisnings API:et</title>
        <meta charset="UTF-8">
        <link href="<?= $dir;?>/index.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?= $html; ?>
    </body>
</html>
