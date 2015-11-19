<?php
/**
 * Jednoduchý skript pro výpis hodnot zaslaných metodou GET a POST
 */
echo '<!DOCTYPE html>
        <html>
            <head>
                <title>Ukázka získaných dat</title>
                <meta charset="utf-8"/>
            </head>
            <body>';

echo '<h1>Ukázka získaných dat</h1>';

echo '<h2>Metoda GET</h2>';
if (!empty($_GET)){
    echo '<table>';
    foreach($_GET as $key=>$value){
        echo '<h3>'.htmlspecialchars($key).'</h3>';
        echo '<p>'.htmlspecialchars($value).'</p>';
    }
    echo '</table>';
}else{
    echo '<p>Nebyla získána žádná data metodou GET</p>';
}

echo '<h2>Metoda POST</h2>';
if (!empty($_POST)){
    echo '<table>';
    foreach($_POST as $key=>$value){
        echo '<h3>'.htmlspecialchars($key).'</h3>';
        echo '<p>'.htmlspecialchars($value).'</p>';
    }
    echo '</table>';
}else{
    echo '<p>Nebyla získána žádná data metodou POST</p>';
}

echo '      </body>
        </html>';