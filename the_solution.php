<?php

// Include the props library
include('Props.php');

// Define some props
$props = [
	'demoVar' => 'Hello from PHP!',
    'timestamp' => date('Y-m-d H:i:s'),
];

?>
<html>
    <head>
        <title>The Props Solution</title>

        <style>
            BODY
            {
                font-family: sans-serif;
            }

            PRE
            {
                color: blue;
            }
        </style>

        <?php
            // Pass the props defined in server side PHP to client side JS
            Props::pass($props);
        ?>

        <!-- Script which shows props in an alert() dialog -->
        <!-- It must be in an external script file, otherwise CSP will block it -->
        <script src="js/the_solution.js"></script>

    </head>
    <body>

        <h1>Props</h1>

        <h1>The Solution</h1>

        <p>Use the Props library!</p>

        <pre>
&lt;?php

// Include the props library
include('Props.php');

// Define some props
$props = [
    'demoVar' => 'Hello from PHP!',
    'timestamp' => date('Y-m-d H:i:s'),
];

?&gt;

&lt;!-- In your template... --&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;?php
            // Pass the props defined in server side PHP to client side JS
            Props::pass($props);
        ?&gt;
    &lt;/head&gt;
&lt;/html&gt;
        </pre>

        <p>
            Move any inline script you have into script files,
            apply your
            <a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/CSP" target="_blank">CSP</a>
            headers and use your variables as you did before.
        </p>

    </body>
</html>