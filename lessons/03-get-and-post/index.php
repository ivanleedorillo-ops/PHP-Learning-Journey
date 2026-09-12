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
            <p class="label">LESSON 03 · PHP FUNDAMENTALS</p>
            <h1>$_GET and $_POST</h1>
            <p class="description">
                Learn how PHP receives information submitted through forms and URLs.
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
            <a href="#understanding-get">$_GET</a>
            <a href="#understanding-post">$_POST</a>
            <a href="#practice-task">Practice Task</a>
            <a href="#what-i-have-learned">What I Have Learned</a>
        </nav>
        <section class="lesson-section" id="understanding-get">
            <div class="section-heading">
                <div>
                    <p class="label">UNDERSTANDING GET</p>
                    <h2>$_GET</h2>
                </div>
                <span class="type-badge">$_GET</span>
            </div>
            <p class="note">
                <strong>Meaning:</strong> `$_GET` is a superglobal associative array in PHP used to collect data sent via URL parameters (e.g., `page.php?user=Alex`).
            </p>
            <div class="example-grid">
                <div class="code-example">
                    <span class="block-label">PHP code</span>
                    <pre><code>
<?php
$name = "";
$submittedName = "";
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
        <section class="lesson-section" id="understanding-post">
            <div class="section-heading">
                <div>
                    <p class="label">UNDERSTANDING POST</p>
                    <h2>$_POST</h2>
                </div>
                <span class="type-badge">$_POST</span>
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
if (($_SERVER["REQUEST_METHOD"] ?? '') === "POST") {
    $username = htmlspecialchars($_POST['username'] ?? '');
    $fav_language = htmlspecialchars($_POST['fav_language'] ?? '');
}
?>
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username'] ?? '');
    $fav_language = htmlspecialchars($_POST['fav_language'] ?? '');
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
        <section class="lesson-section" id="practice-task">
            <div class="section-heading">
                <div>
                    <p class="label">PRACTICE TASK</p>
                    <h2>Student Information Form</h2>
                </div>
                <span class="type-badge">Practice</span>
            </div>
            <p class="note">
                <strong>Task:</strong>
                Create a form with the following fields: Name, Age, and Email. Process the form using PHP and display the submitted information on a separate results page. Use the $_POST method to retrieve the data. Add basic validation to ensure that all fields are filled.
            </p>
            <div class="example-grid">
                <div class="code-example">
                    <span class="block-label">PHP code</span>
                    <pre>
                        <code>
<?php
$student_name = "";
$course = "";
$year_level = "";
$school = "";
if (($_SERVER["REQUEST_METHOD"] ?? '') === "POST") {
    $student_name = htmlspecialchars($_POST['student_name'] ?? '');
    $course = htmlspecialchars($_POST['course'] ?? '');
    $year_level = htmlspecialchars($_POST['year_level'] ?? '');
    $school = htmlspecialchars($_POST['school'] ?? '');
}
?>
$student_name = "";
$course = "";
$year_level = "";
$school = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_name = htmlspecialchars($_POST['student_name'] ?? '');
    $course = htmlspecialchars($_POST['course'] ?? '');
    $year_level = htmlspecialchars($_POST['year_level'] ?? '');
    $school = htmlspecialchars($_POST['school'] ?? '');
}
                        </code>
                    </pre>
                </div>
                <div class="output-example">
                    <span class="block-label">Output</span>
                    <form action="" method="post">
                        <label for="student_name">Name: </label>
                        <input type="text" name="student_name" id="student_name" placeholder="Enter your name">
                        <br>
                        <label for="course">Course: </label>
                        <input type="text" name="course" id="course" placeholder="Enter your course">
                        <br>
                        <label for="year_level">Year Level: </label>
                        <input type="text" name="year_level" id="year_level" placeholder="Enter your year level">
                        <br>
                        <label for="school">School: </label>
                        <input type="text" name="school" id="school" placeholder="Enter your school">
                        <br>
                        <input type="submit" value="Submit">
                        <br>
                        <p><strong>Name: <?php echo $student_name; ?></strong></p>
                        <p><strong>Course: <?php echo $course; ?></strong></p>
                        <p><strong>Year Level: <?php echo $year_level; ?></strong></p>
                        <p><strong>School: <?php echo $school; ?></strong></p>
                    </form>
                </div>
            </div>
        </section>

        <section class="lesson-section" id="what-i-have-learned">
            <div class="section-heading">
                <div>
                    <p class="label">This is what I learned</p>
                    <h2>What I Have Learned</h2>
                </div>
                <span class="type-badge">Reflections</span>
            </div>

            <div class="learned-note">
                <strong>$_GET</strong>
                <p>A PHP superglobal array used to collect data submitted via an HTML form with the <code>method="GET"</code> attribute, or data passed directly through URL parameters.</p>
            </div>

            <div class="learned-note">
                <strong>$_POST</strong>
                <p>A PHP superglobal array used to collect data submitted via an HTML form using the <code>method="POST"</code> attribute, sending data inside the HTTP request body rather than the URL.</p>
            </div>

            <div class="learned-note">
                <strong>The method Attribute</strong>
                <p>Specifies the HTTP method used to send form data to the server when submitted (typically <code>GET</code> or <code>POST</code>).</p>
            </div>

            <div class="learned-note">
                <strong>The action Attribute</strong>
                <p>Defines the URL or file path destination where the form data will be sent for processing upon submission.</p>
            </div>

            <div class="learned-note">
                <strong>Where GET Sends Form Data</strong>
                <p>Appends form data directly onto the end of the destination URL as key-value query parameters (e.g., <code>page.php?name=value</code>).</p>
            </div>

            <div class="learned-note">
                <strong>Where POST Sends Form Data</strong>
                <p>Includes form data hidden inside the body of the HTTP request, keeping it separate from the URL.</p>
            </div>

            <div class="learned-note">
                <strong>GET Data in the Browser URL</strong>
                <p>Remains visible to the user as plaintext query parameters, allowing the page to be bookmarked, shared, or stored in browser history.</p>
            </div>

            <div class="learned-note">
                <strong>POST and the URL</strong>
                <p>No. POST does not show submitted values in the URL; the values remain tucked away inside the request body.</p>
            </div>

            <div class="learned-note">
                <strong>The name Attribute</strong>
                <p>Acts as the key identifier for an input field so the server script can access its corresponding value in <code>$_GET</code> or <code>$_POST</code>.</p>
            </div>

            <div class="learned-note">
                <strong>Why isset() Is Useful</strong>
                <p>Checks whether a specific form key exists in <code>$_GET</code> or <code>$_POST</code> and isn't null before processing, preventing PHP "Undefined index" notices when a page loads prior to form submission.</p>
            </div>

            <div class="learned-note">
                <strong>Difference Between name and value</strong>
                <div class="sub-item">
                    <p><strong>name:</strong> The label/key assigned to the input field so the server knows which piece of data is being sent.</p>
                    <p><strong>value:</strong> The actual content or user input contained within that field.</p>
                </div>
            </div>

            <div class="learned-note">
                <strong>When to Use GET Instead of POST</strong>
                <p>Ideal for search bars, filters, or pagination where the request only retrieves data without causing side effects on the server, allowing users to bookmark or share specific result links easily.</p>
            </div>
        </section>

        <nav class="lesson-navigation" aria-label="Lesson navigation">
            <a href="../02-arithmetic/index.php">&larr; Previous: Arithmetic</a>
            <a href="../../index.php">All lessons &rarr;</a>
        </nav>
    </main>

    <footer>
        <p>PHP Learning Journey — Ivan Lee Dorillo</p>
        <p>Learn. Practice. Build.</p>
    </footer>
</body>
</html>