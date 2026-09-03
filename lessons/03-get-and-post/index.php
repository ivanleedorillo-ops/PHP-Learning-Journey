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
    </main>
</body>
</html>