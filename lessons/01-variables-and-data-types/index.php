<?php
// ========================================
// PHP VARIABLES AND DATA TYPES
// ========================================

// Strings - used for text.
$name = "Ivan Lee Dorillo";
$food = "Adobo";
$email = "ivanleedorillo@gmail.com";

// Integers - whole numbers without decimals.
$age = 21;
$users = 5;
$quantity = 3;

// Floats - numbers with decimal values.
$gpa = 1.80;
$price = 4.99;
$tax_rate = 1.5;

// Booleans - true or false values.
$employed = true;
$online = false;
$for_sale = true;

// Practice task: Student Purchase Profile.
$student_name = "Ivan Lee Dorillo";
$favorite_technologies = "PHP, HTML, and CSS";
$student_status = true;
$order_quantity = 3;
$order_price = 25.50;
$product_status = true;
$order_total = $order_quantity * $order_price;

// Final challenge: Student Profile Card.
$course = "BSIT";
$school = "BTECH";
$favorite_language = "PHP";
$year_level = 3;
$is_student = true;
$is_available_for_internship = true;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="PHP variables and data types lesson with examples, notes, and practice tasks.">
    <link rel="stylesheet" href="../../assets/css/lessons/variables-and-data-types.css">
    <title>Variables and Data Types | PHP Learning Journey</title>
</head>

<body>
    <!-- Copy this header structure for the next lesson. -->
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
                <strong>Beginner</strong>
            </div>
            <div>
                <span>Topics</span>
                <strong>4 data types</strong>
            </div>
            <div>
                <span>Status</span>
                <strong class="completed-text">Completed</strong>
            </div>
        </section>

        <nav class="topic-navigation" aria-label="Lesson topics">
            <a href="#strings">Strings</a>
            <a href="#integers">Integers</a>
            <a href="#floats">Floats</a>
            <a href="#booleans">Booleans</a>
            <a href="#practice">Practice</a>
            <a href="#notes">Notes</a>
            <a href="#challenge">Challenge</a>
        </nav>

        <!-- Copy this lesson-section pattern for each topic. -->
        <section class="lesson-section" id="strings">
            <div class="section-heading">
                <div>
                    <p class="label">DATA TYPE 01</p>
                    <h2>Strings</h2>
                </div>
                <span class="type-badge">Text</span>
            </div>

            <p class="note">
                <strong>Meaning:</strong> A string stores text or a group of characters. Its value is placed inside single or double quotation marks.
            </p>

            <div class="example-grid">
                <div class="code-example">
                    <span class="block-label">PHP code</span>
                    <pre><code>$name = "Ivan Lee Dorillo";
$food = "Adobo";
$email = "ivanleedorillo@gmail.com";</code></pre>
                </div>
                <div class="output-example">
                    <span class="block-label">Output</span>
                    <p>Good day! My name is <strong><?php echo $name; ?></strong>.</p>
                    <p>My favorite food is <strong><?php echo $food; ?></strong>.</p>
                    <p>My email is <strong><?php echo $email; ?></strong>.</p>
                </div>
            </div>
        </section>

        <section class="lesson-section" id="integers">
            <div class="section-heading">
                <div>
                    <p class="label">DATA TYPE 02</p>
                    <h2>Integers</h2>
                </div>
                <span class="type-badge">Whole numbers</span>
            </div>

            <p class="note">
                <strong>Meaning:</strong> An integer is a positive, negative, or zero whole number without a decimal point.
            </p>

            <div class="example-grid">
                <div class="code-example">
                    <span class="block-label">PHP code</span>
                    <pre><code>$age = 21;
$users = 5;
$quantity = 3;</code></pre>
                </div>
                <div class="output-example">
                    <span class="block-label">Output</span>
                    <p>I am <strong><?php echo $age; ?></strong> years old.</p>
                    <p>There are <strong><?php echo $users; ?></strong> users online.</p>
                    <p>I would like to buy <strong><?php echo $quantity; ?></strong> items.</p>
                </div>
            </div>
        </section>

        <section class="lesson-section" id="floats">
            <div class="section-heading">
                <div>
                    <p class="label">DATA TYPE 03</p>
                    <h2>Floats</h2>
                </div>
                <span class="type-badge">Decimal numbers</span>
            </div>

            <p class="note">
                <strong>Meaning:</strong> A float contains a decimal point. Floats are often used for prices, grades, percentages, and measurements.
            </p>

            <div class="example-grid">
                <div class="code-example">
                    <span class="block-label">PHP code</span>
                    <pre><code>$gpa = 1.80;
$price = 4.99;
$tax_rate = 1.5;</code></pre>
                </div>
                <div class="output-example">
                    <span class="block-label">Output</span>
                    <p>My GPA is <strong><?php echo number_format($gpa, 2); ?></strong>.</p>
                    <p>The price of Adobo is <strong>$<?php echo number_format($price, 2); ?></strong>.</p>
                    <p>The tax rate is <strong><?php echo $tax_rate; ?>%</strong>.</p>
                </div>
            </div>
        </section>

        <section class="lesson-section" id="booleans">
            <div class="section-heading">
                <div>
                    <p class="label">DATA TYPE 04</p>
                    <h2>Booleans</h2>
                </div>
                <span class="type-badge">True or false</span>
            </div>

            <p class="note">
                <strong>Meaning:</strong> A boolean has only two possible values: <strong>true</strong> or <strong>false</strong>. It is useful for checking a condition or status.
            </p>

            <div class="example-grid">
                <div class="code-example">
                    <span class="block-label">PHP code</span>
                    <pre><code>$employed = true;
$online = false;
$for_sale = true;</code></pre>
                </div>
                <div class="output-example">
                    <span class="block-label">Output</span>
                    <p>Online: <strong><?php echo $online ? "Online" : "Offline"; ?></strong></p>
                    <p>Employment: <strong><?php echo $employed ? "Employed" : "Unemployed"; ?></strong></p>
                    <p>Sale status: <strong><?php echo $for_sale ? "For sale" : "Not for sale"; ?></strong></p>
                </div>
            </div>
        </section>

        <!-- Use challenge-section for practice activities. -->
        <section class="lesson-section challenge-section" id="practice">
            <p class="label">PRACTICE TASK</p>
            <h2>Student Purchase Profile</h2>
            <p>Combine all four data types, then use two variables to calculate a purchase total.</p>

            <div class="example-grid">
                <div class="code-example">
                    <span class="block-label">PHP code</span>
                    <pre><code>$student_name = "Ivan Lee Dorillo";
$favorite_technologies = "PHP, HTML, and CSS";
$student_status = true;
$order_quantity = 3;
$order_price = 25.50;
$product_status = true;
$order_total = $order_quantity * $order_price;</code></pre>
                </div>
                <div class="output-example profile-output">
                    <span class="block-label">Output</span>
                    <h3><?php echo $student_name; ?></h3>
                    <p><?php echo $favorite_technologies; ?></p>
                    <p>Status: <strong><?php echo $student_status ? "Active" : "Inactive"; ?></strong></p>
                    <hr>
                    <p><?php echo $order_quantity; ?> keyboards at $<?php echo number_format($order_price, 2); ?> each</p>
                    <p>Product: <strong><?php echo $product_status ? "Available" : "Out of stock"; ?></strong></p>
                    <p class="total">Total: $<?php echo number_format($order_total, 2); ?></p>
                </div>
            </div>
        </section>

        <section class="lesson-section" id="notes">
            <p class="label">LESSON NOTES</p>
            <h2>What I Have Learned</h2>

            <div class="notes-grid">
                <article>
                    <h3>Why do variables begin with $?</h3>
                    <p>The dollar sign is a special marker that tells the PHP parser that the name following it is a variable.</p>
                </article>
                <article>
                    <h3>Why use descriptive names?</h3>
                    <p>A name such as <code>$student_name</code> explains its purpose more clearly than a vague name such as <code>$x</code>.</p>
                </article>
                <article>
                    <h3>What happens with booleans?</h3>
                    <p>A true condition runs its code block, while a false condition skips it. Echoing true displays 1; echoing false displays nothing.</p>
                </article>
                <article>
                    <h3>String versus integer</h3>
                    <p><code>"21"</code> is text because it uses quotation marks. <code>21</code> is a number that can be used directly in calculations.</p>
                </article>
            </div>

            <h3 class="table-heading">Real-life examples</h3>
            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th scope="col">Data type</th>
                            <th scope="col">Real-life example</th>
                            <th scope="col">PHP code</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>String</td>
                            <td>Store a user's email address</td>
                            <td><code>$email = "ivan@example.com";</code></td>
                        </tr>
                        <tr>
                            <td>Integer</td>
                            <td>Count shopping-cart items</td>
                            <td><code>$items = 3;</code></td>
                        </tr>
                        <tr>
                            <td>Float</td>
                            <td>Store a product price</td>
                            <td><code>$price = 49.99;</code></td>
                        </tr>
                        <tr>
                            <td>Boolean</td>
                            <td>Check whether an order is paid</td>
                            <td><code>$is_paid = false;</code></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <section class="lesson-section final-challenge" id="challenge">
            <p class="label">FINAL CHALLENGE</p>
            <h2>Student Profile Card</h2>

            <div class="example-grid">
                <div class="code-example">
                    <span class="block-label">PHP code</span>
                    <pre><code>$student_name = "Ivan Lee Dorillo";
$course = "BSIT";
$school = "BTECH";
$favorite_language = "PHP";
$year_level = 3;
$is_student = true;
$is_available_for_internship = true;</code></pre>
                </div>
                <div class="student-card">
                    <span class="status"><?php echo $is_student ? "Active student" : "Inactive"; ?></span>
                    <h3><?php echo $student_name; ?></h3>
                    <p><?php echo $course; ?> · Year <?php echo $year_level; ?></p>
                    <hr>
                    <p><span>School</span> <?php echo $school; ?></p>
                    <p><span>Age</span> <?php echo $age; ?></p>
                    <p><span>Favorite language</span> <?php echo $favorite_language; ?></p>
                    <p><span>GPA</span> <?php echo number_format($gpa, 2); ?></p>
                    <p><span>Internship</span> <?php echo $is_available_for_internship ? "Available" : "Not available"; ?></p>
                </div>
            </div>
        </section>

        <nav class="lesson-navigation" aria-label="Lesson navigation">
            <a href="../../index.php">&larr; All lessons</a>
            <a href="../02-arithmetic/index.php">Next: Arithmetic &rarr;</a>
        </nav>
    </main>

    <footer>
        <p>PHP Learning Journey — Ivan Lee Dorillo</p>
        <p>Learn. Practice. Build.</p>
    </footer>
</body>

</html>
