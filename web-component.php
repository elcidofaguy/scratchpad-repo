<?php

function writeMsg($var) {
    echo "Hello world! " . $var;
    echo "<br>";

    $foo = 'bar';
    echo <<<EOT
    <button onclick="myFunction()">Click me</button>
    <p id="demo"></p>
    <script>
    function myFunction() {
        alert("I am an 'alert' box: $var");
    }
    </script>
    EOT;
}