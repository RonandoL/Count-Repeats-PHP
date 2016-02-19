<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

// End busy code -----------^

    // Render Home Page
    $app->get("/", function() use ($app) {
        return $app['twig']->render('repeatcounter.html.twig');
    });

    // User input form
    $app->get("/userInput", function() use ($app) {
        $newCount = new RepeatCounter;
        $results = $newCount->CountRepeats($_GET['word'], $_GET['sentence']);
        $word = $_GET['word'];
        $sentence = $_GET['sentence'];

        return $app['twig']->render('repeatcounter.html.twig', array('results' => $results, 'word' => $word, 'sentence' => $sentence));
    });

    return $app;

?>
