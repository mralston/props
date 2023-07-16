<?php

// Define some props
$props = [
    'demoVar' => 'Hello from PHP!',
    'timestamp' => date('Y-m-d H:i:s'),
];

?>
<html>
    <head>
        <title>The Props Problem</title>

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

        <!-- Pass the props defined in server side PHP to client side JS -->
        <script>
            Object.assign(window, JSON.parse('<?= json_encode($props) ?>'));

            alert(demoVar + ' at ' + timestamp);
        </script>
    </head>
    <body>

        <h1>Props</h1>

        <h2>The Problem</h2>

        <p>What's a good way to pass variables from PHP to vanilla Javascript?</p>

        <p>
            Easy! JSON encode them on the PHP side, then echo them out in a &lt;script&gt;
            tag which JSON decodes them and stuffs them into variables. Something like this...
        </p>

        <pre>
&lt;?php

$props = [
    'demoVar' => 'Hello from PHP!',
    'timestamp' => date('Y-m-d H:i:s'),
];

?&gt;

&lt;script&gt;
    Object.assign(window, JSON.parse('&lt;?= json_encode($props) ?&gt;'));

    alert(demoVar + ' at ' + timestamp);
&lt;/script&gt;
        </pre>

        <p>
            Okay, but... that all breaks when when you implement
            <a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/CSP" target="_blank">Content Security Policy</a>.
            Unless of course you use unsafe-inline... which would be bad!
        </p>

        <h2>So now what?</h2>

        <p>
            Well you could use a tool like
            <a href="https://inertiajs.com/" target="_blank">Inertia</a>,
            but if you're stuck with vanilla JS then this solution should do the trick:
        </p>

        <p>
            <a href="the_solution.php">The Props Solution</a>
        </p>

    </body>
</html>