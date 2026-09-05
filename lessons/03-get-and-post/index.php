<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Get and Post variables lesson with examples, notes, and practice tasks.">
    <link rel="stylesheet" href="../../assets/css/lessons/get-and-post.css">
    <title>Get and Post Variables | PHP Learning Journey</title>
</head>
<body>
    <header class="lesson-header">
        <div class="header-content">
            <a class="back-button" href="../../index.php">&larr; Back to lessons</a>
            <p class="label">LESSON 01 · PHP FUNDAMENTALS</p>
            <h1>Variables and Data Types</h1>
            <p class="description">
                Learn how PHP stores information using variables, strings, integers, floats, and booleans.
            </p>
        </div>
    </header>
    <main>
        <section class="lesson-summary">
            <div>
                <span>Level</span>
                <strong>Intermediate</strong>
            </div>
            <div>
                <span>Topics</span>
                <strong>Get</strong>
                <strong>Post</strong>
            </div>
            <div>
                <span>Status</span>
                <strong class="on-going-text">On going</strong>
            </div>
        </section>
        <nav class="topic-navigation" aria-label="Lesson Topics">
            <a href="#understanding-get">Understanding $_GET</a>
        </nav>
        <section class="lesson-section" id="understanding-get">
            <div class="section-heading">
                <div>
                    <p class="label">UNDERSTANDING GET</p>
                    <h2>$_GET</h2>
                </div>
                <span class="badge">$_GET</span>
            </div>
            <p class="note">
                <strong>Meaning:</strong> `$_GET` is a superglobal associative array in PHP used to collect data sent via URL parameters (e.g., `page.php?user=Alex`).
            </p>
            <div class="example-grid">
                <div class="code-example">
                    <span class="block-label">PHP code</span>
                    <pre><code>
<?php
    if (isset($_GET['name'])) {
        $submittedName = htmlspecialchars($_GET['name']);
        
    }
    ?>
    if (isset($_GET['name'])) {
        $submittedName = htmlspecialchars($_GET['name']);
    }
                    </code></pre>
                </div>
                <div class="output-example">
                    <span class="block-label">Output</span>
                    <form action="" method="get">
                        <label for="name">Enter your name:</label>
                        <input type="text" name="name" id="name" placeholder="Your name">
                        <input type="submit" value="Submit">
                        <br>
                        <p><strong>Your name is: <?php echo $submittedName; ?></strong></p>
                    </form>
                </div>
            </div>
        </section>
        <section class="lesson-section" id="understanding-get">
            <div class="section-heading">
                <div>
                    <p class="label">UNDERSTANDING POST</p>
                    <h2>$_POST</h2>
                </div>
                <span class="badge">$_POST</span>
            </div>
            <p class="note">
                <strong>Meaning:</strong> $_POST is a superglobal associative array in PHP used to collect data sent via the HTTP request body (e.g., from an HTML form using method="post"), keeping the submitted data hidden from the URL bar.
            </p>
            <div class="example-grid">
                <div class="code-example">
                    <span class="block-label">PHP code</span>
                    <pre><code>
<?php
$username = "";
$fav_language = "";
    if ($_SERVER["REQUEST_METHOD"]== "POST"){
        $username = htmlspecialchars($_POST['username']?? '');
        $fav_language = htmlspecialchars($_POST['fav_language']?? '');

    }
?>
    if ($_SERVER["REQUEST_METHOD"]== "POST"){
        $username = htmlspecialchars($_POST['username']?? '');
        $fav_language = htmlspecialchars($_POST['fav_language']?? '');

    }

                    </code></pre>
                </div>
                <div class="output-example">
                    <span class="block-label">Output</span>
                    <form action="" method="post">
                        <label for="username">Username: </label>
                        <input type="text" name="username" id="username" placeholder="Enter your username">
                        <br>
                        <label for="fav_language">Favorite Programming Language: </label>
                        <input type="text" name="fav_language" id="fav_language" placeholder="PHP, HTML, CSS, JavaScript, etc...">
                        <input type="submit" value="Submit">
                        <br>
                        <p><strong>Username: <?php echo $username; ?></strong></p>
                        <p><strong>Favorite Programming Language: <?php echo $fav_language; ?></strong></p>
                    </form>
                </div>
            </div>
        </section>
    </main>
</body>
</html>