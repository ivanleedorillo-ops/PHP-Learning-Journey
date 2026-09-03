<?php

// PHP Learning Journey Information

$student_name = "Ivan Lee Dorillo";
$current_lesson = "Variables and Data Types";
$total_lessons = 27;
$completed_lessons = 1;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/main.css">

    <title>PHP Learning Journey</title>
</head>

<body>

    <header>

        <div class="header-content">

            <p class="label">MY PHP LEARNING JOURNEY</p>

            <h1>Learning PHP, One Lesson at a Time.</h1>

            <p class="description">
                A personal learning project where I practice PHP concepts,
                write notes, create examples, and complete small coding challenges.
            </p>

        </div>

    </header>


    <main>

        <!-- ABOUT -->

        <section class="about">

            <h2>About This Journey</h2>

            <p>
                Hi! I'm
                <strong><?php echo $student_name; ?></strong>.
                This project documents my progress while learning PHP.
            </p>

            <p>
                Instead of only watching tutorials, I will create my own
                examples, notes, exercises, and small projects for every lesson.
            </p>

            <p>
                My goal is to understand how PHP works and eventually use
                what I learn to build real web applications.
            </p>

        </section>


        <!-- CURRENT PROGRESS -->

        <section>

            <h2>Current Progress</h2>

            <div class="progress-grid">

                <div class="progress-card">
                    <span>Current Lesson</span>
                    <strong>
                        <?php echo $current_lesson; ?>
                    </strong>
                </div>

                <div class="progress-card">
                    <span>Completed</span>
                    <strong>
                        <?php echo $completed_lessons; ?>
                        /
                        <?php echo $total_lessons; ?>
                    </strong>
                </div>

                <div class="progress-card">
                    <span>Learning</span>
                    <strong>PHP</strong>
                </div>

            </div>

        </section>


        <!-- LEARNING METHOD -->

        <section>

            <h2>How I Will Learn</h2>

            <div class="learning-method">

                <div>
                    <h3>1. Learn</h3>
                    <p>
                        Watch and understand the lesson.
                    </p>
                </div>

                <div>
                    <h3>2. Practice</h3>
                    <p>
                        Write the PHP code myself and experiment with it.
                    </p>
                </div>

                <div>
                    <h3>3. Take Notes</h3>
                    <p>
                        Write short explanations about what I learned.
                    </p>
                </div>

                <div>
                    <h3>4. Challenge Myself</h3>
                    <p>
                        Complete small exercises without copying the solution.
                    </p>
                </div>

            </div>

        </section>


        <!-- ROADMAP -->

        <section>

            <div class="section-heading">

                <div>
                    <p class="label">ROADMAP</p>
                    <h2>PHP Lessons</h2>
                </div>

                <p>
                    The topics I will tackle throughout my PHP learning journey.
                </p>

            </div>


            <div class="lesson-list">

                <!-- COMPLETED / CURRENT LESSON -->

                <a href="lessons/01-variables-and-data-types/index.php"
                   class="lesson-card completed">
                    <div class="lesson-number">
                        01
                    </div>

                    <div class="lesson-info">
                        <h3>Variables and Data Types</h3>
                        <p>
                            Strings, integers, floats, booleans, variables,
                            and displaying PHP values inside HTML.
                        </p>
                    </div>
                    <span class="status">
                        Completed
                    </span>
                </a>

                <a href="lessons/02-arithmetic/index.php" class="lesson-card completed">
                    <div class="lesson-number">
                        02
                    </div>
                    <div class="lesson-info">
                        <h3>Arithmetic</h3>
                        <p>
                            Perform calculations using PHP variables and arithmetic operators.
                        </p>
                    </div>
                    <span class="status">
                        Completed
                    </span>
                </a>


                <a href="lessons/03-get-and-post/index.php"
                class="lesson-card completed">
                    <div class="lesson-number">03</div>

                    <div class="lesson-info">
                        <h3>$_GET and $_POST</h3>
                        <p>
                            Learn how PHP receives information submitted
                            through forms and URLs.
                        </p>
                    </div>

                    <span class="status upcoming">
                        working
                    </span>
                </a>
                </div>


                <div class="lesson-card">

                    <div class="lesson-number">04</div>

                    <div class="lesson-info">
                        <h3>Math Functions</h3>
                        <p>
                            Use PHP built-in functions for common mathematical operations.
                        </p>
                    </div>

                    <span class="status upcoming">
                        Upcoming
                    </span>

                </div>


                <div class="lesson-card">

                    <div class="lesson-number">05</div>

                    <div class="lesson-info">
                        <h3>If Statements</h3>
                        <p>
                            Make decisions in PHP based on conditions.
                        </p>
                    </div>

                    <span class="status upcoming">
                        Upcoming
                    </span>

                </div>


                <div class="lesson-card">

                    <div class="lesson-number">06</div>

                    <div class="lesson-info">
                        <h3>Logical Operators</h3>
                        <p>
                            Combine and evaluate multiple conditions.
                        </p>
                    </div>

                    <span class="status upcoming">
                        Upcoming
                    </span>

                </div>


                <div class="lesson-card">

                    <div class="lesson-number">07</div>

                    <div class="lesson-info">
                        <h3>Switch Statements</h3>
                        <p>
                            Handle multiple possible conditions using switch.
                        </p>
                    </div>

                    <span class="status upcoming">
                        Upcoming
                    </span>

                </div>


                <div class="lesson-card">

                    <div class="lesson-number">08</div>

                    <div class="lesson-info">
                        <h3>For Loops</h3>
                        <p>
                            Repeat blocks of PHP code a specific number of times.
                        </p>
                    </div>

                    <span class="status upcoming">
                        Upcoming
                    </span>

                </div>


                <div class="lesson-card">

                    <div class="lesson-number">09</div>

                    <div class="lesson-info">
                        <h3>While Loops</h3>
                        <p>
                            Repeat code while a condition remains true.
                        </p>
                    </div>

                    <span class="status upcoming">
                        Upcoming
                    </span>

                </div>


                <div class="lesson-card">

                    <div class="lesson-number">10</div>

                    <div class="lesson-info">
                        <h3>Arrays</h3>
                        <p>
                            Store multiple values inside a single PHP variable.
                        </p>
                    </div>

                    <span class="status upcoming">
                        Upcoming
                    </span>

                </div>


                <div class="lesson-card">

                    <div class="lesson-number">11</div>

                    <div class="lesson-info">
                        <h3>Associative Arrays</h3>
                        <p>
                            Store values using named keys instead of numeric indexes.
                        </p>
                    </div>

                    <span class="status upcoming">
                        Upcoming
                    </span>

                </div>


                <div class="lesson-card">

                    <div class="lesson-number">12</div>

                    <div class="lesson-info">
                        <h3>isset() and empty()</h3>
                        <p>
                            Check whether variables exist or contain values.
                        </p>
                    </div>

                    <span class="status upcoming">
                        Upcoming
                    </span>

                </div>


                <div class="lesson-card">

                    <div class="lesson-number">13</div>

                    <div class="lesson-info">
                        <h3>Radio Buttons</h3>
                        <p>
                            Process radio button selections using PHP forms.
                        </p>
                    </div>

                    <span class="status upcoming">
                        Upcoming
                    </span>

                </div>


                <div class="lesson-card">

                    <div class="lesson-number">14</div>

                    <div class="lesson-info">
                        <h3>Checkboxes</h3>
                        <p>
                            Work with one or multiple checkbox values.
                        </p>
                    </div>

                    <span class="status upcoming">
                        Upcoming
                    </span>

                </div>


                <div class="lesson-card">

                    <div class="lesson-number">15</div>

                    <div class="lesson-info">
                        <h3>Functions</h3>
                        <p>
                            Create reusable blocks of PHP code.
                        </p>
                    </div>

                    <span class="status upcoming">
                        Upcoming
                    </span>

                </div>


                <div class="lesson-card">

                    <div class="lesson-number">16</div>

                    <div class="lesson-info">
                        <h3>String Functions</h3>
                        <p>
                            Manipulate and work with text using PHP functions.
                        </p>
                    </div>

                    <span class="status upcoming">
                        Upcoming
                    </span>

                </div>


                <div class="lesson-card">

                    <div class="lesson-number">17</div>

                    <div class="lesson-info">
                        <h3>Sanitize and Validate Input</h3>
                        <p>
                            Clean and verify information submitted by users.
                        </p>
                    </div>

                    <span class="status upcoming">
                        Upcoming
                    </span>

                </div>


                <div class="lesson-card">

                    <div class="lesson-number">18</div>

                    <div class="lesson-info">
                        <h3>include()</h3>
                        <p>
                            Reuse PHP files across multiple pages.
                        </p>
                    </div>

                    <span class="status upcoming">
                        Upcoming
                    </span>

                </div>


                <div class="lesson-card">

                    <div class="lesson-number">19</div>

                    <div class="lesson-info">
                        <h3>$_COOKIE</h3>
                        <p>
                            Store small pieces of information inside the user's browser.
                        </p>
                    </div>

                    <span class="status upcoming">
                        Upcoming
                    </span>

                </div>


                <div class="lesson-card">

                    <div class="lesson-number">20</div>

                    <div class="lesson-info">
                        <h3>$_SESSION</h3>
                        <p>
                            Store information across multiple pages during a user session.
                        </p>
                    </div>

                    <span class="status upcoming">
                        Upcoming
                    </span>

                </div>


                <div class="lesson-card">

                    <div class="lesson-number">21</div>

                    <div class="lesson-info">
                        <h3>$_SERVER</h3>
                        <p>
                            Access server and request information provided by PHP.
                        </p>
                    </div>

                    <span class="status upcoming">
                        Upcoming
                    </span>

                </div>


                <div class="lesson-card">

                    <div class="lesson-number">22</div>

                    <div class="lesson-info">
                        <h3>Password Hashing</h3>
                        <p>
                            Learn how passwords should be securely stored.
                        </p>
                    </div>

                    <span class="status upcoming">
                        Upcoming
                    </span>

                </div>


                <div class="lesson-card">

                    <div class="lesson-number">23</div>

                    <div class="lesson-info">
                        <h3>Connect PHP to MySQL</h3>
                        <p>
                            Create a connection between a PHP application
                            and a MySQL database.
                        </p>
                    </div>

                    <span class="status upcoming">
                        Upcoming
                    </span>

                </div>


                <div class="lesson-card">

                    <div class="lesson-number">24</div>

                    <div class="lesson-info">
                        <h3>Create a Database Table</h3>
                        <p>
                            Use phpMyAdmin to create and organize database tables.
                        </p>
                    </div>

                    <span class="status upcoming">
                        Upcoming
                    </span>

                </div>


                <div class="lesson-card">

                    <div class="lesson-number">25</div>

                    <div class="lesson-info">
                        <h3>Insert Data into MySQL</h3>
                        <p>
                            Save information from PHP into a MySQL database.
                        </p>
                    </div>

                    <span class="status upcoming">
                        Upcoming
                    </span>

                </div>


                <div class="lesson-card">

                    <div class="lesson-number">26</div>

                    <div class="lesson-info">
                        <h3>Query MySQL</h3>
                        <p>
                            Retrieve and display information stored in a database.
                        </p>
                    </div>

                    <span class="status upcoming">
                        Upcoming
                    </span>

                </div>


                <div class="lesson-card">

                    <div class="lesson-number">27</div>

                    <div class="lesson-info">
                        <h3>Registration Form Project</h3>
                        <p>
                            Combine PHP, forms, validation, password hashing,
                            and MySQL into a complete project.
                        </p>
                    </div>

                    <span class="status upcoming">
                        Final Project
                    </span>

                </div>

            </div>

        </section>


        <!-- GOAL -->

        <section class="goal">

            <p class="label">MY GOAL</p>

            <h2>From Learning Syntax to Building Real Applications</h2>

            <p>
                By the end of this journey, I want to understand the fundamentals
                of PHP well enough to create dynamic websites, process forms,
                work with databases, handle users securely, and build complete
                PHP projects on my own.
            </p>

        </section>

    </main>


    <footer>

        <p>
            PHP Learning Journey —
            <?php echo $student_name; ?>
        </p>

        <p>
            Learn. Practice. Build.
        </p>

    </footer>

</body>

</html>
