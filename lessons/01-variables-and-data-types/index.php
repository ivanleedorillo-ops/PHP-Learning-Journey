<?php
// ========================================
// PHP VARIABLES AND DATA TYPES
// ========================================

// Strings - used for text
    $name = "Ivan Lee Dorillo";
    $food = "Adobo";
    $email = "ivanleedorillo@gmail.com";

// Integers - whole numbers without decimals
    $age = 21;
    $users = 5;
    $quantity = 3;

// Floats - numbers with decimal values
    $gpa = 1.80;
    $price = 4.99;
    $tax_rate = 1.5;

// Booleans - can only be true or false
    $employed = true;
    $online = false;
    $for_sale = true;

//Practice Task: Student Purchase Profile
    $studentname = "Ivan Lee Dorillo";
    $Age = 21;
    $Favorite = "PHP, html, and css";
    $GPA = 1.80;
    $student_status = true;
    $Quantity =  3;
    $Price = 25.50;
    $product_status = true;
    $TOTAL = $Quantity * $Price;

//Final Challenge — Student Profile Card
    $student_name = "Ivan Lee Dorillo";
    $course = "BSIT";
    $school = "BTECH";
    $favorite_language = "PHP";
    $year_level = 3;
    $is_student = True;
    $is_available_for_internship = True;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../assets/css/lesson.css">

    <title>Variables and Data Types</title>
</head>

<body>

    <header>
        <a class="back-button" href="../../index.php">&larr; Back to lessons</a>
        <h1>PHP Variables and Data Types</h1>
        <p class="intro">
            My practice page for understanding basic PHP variables and data types.
        </p>
    </header>

    <main>

        <!-- STRINGS -->
        <section>

            <h2>Strings</h2>

            <p class="note">
                <strong>Meaning:</strong>
                A String is used to store text or a group of characters.
                String values are usually placed inside quotation marks.
            </p>

            <div class="code-example">
                <code>
                    $name = "Ivan Lee Dorillo";<br>
                    $food = "Adobo";<br>
                    $email = "ivanleedorillo@gmail.com";
                </code>
            </div>

            <h3>Output</h3>

            <p>
                Good day everyone, my name is
                <strong>
                    <?php echo $name; ?>
                </strong>.
            </p>

            <p>
                My favorite food is
                <strong>
                    <?php echo $food; ?>
                </strong>.
            </p>

            <p>
                My email is
                <strong>
                    <?php echo $email; ?>
                </strong>.
            </p>

        </section>


        <!-- INTEGERS -->
        <section>

            <h2>Integers</h2>

            <p class="note">
                <strong>Meaning:</strong>
                An Integer is a whole number without a decimal point.
                It can be positive, negative, or zero.
            </p>

            <div class="code-example">
                <code>
                    $age = 21;<br>
                    $users = 5;<br>
                    $quantity = 3;
                </code>
            </div>

            <h3>Output</h3>

            <p>
                I am
                <strong>
                    <?php echo $age; ?>
                </strong>
                years old.
            </p>

            <p>
                There are
                <strong>
                    <?php echo $users; ?>
                </strong>
                users online.
            </p>

            <p>
                I would like to buy
                <strong>
                    <?php echo $quantity; ?>
                </strong>
                items.
            </p>

        </section>


        <!-- FLOATS -->
        <section>

            <h2>Floats</h2>

            <p class="note">
                <strong>Meaning:</strong>
                A Float is a number that contains a decimal point.
                It is commonly used for prices, grades, percentages, and measurements.
            </p>

            <div class="code-example">
                <code>
                    $gpa = 1.80;<br>
                    $price = 4.99;<br>
                    $tax_rate = 1.5;
                </code>
            </div>

            <h3>Output</h3>

            <p>
                My GPA is
                <strong>
                    <?php echo $gpa; ?>
                </strong>.
            </p>

            <p>
                The price of Adobo is
                <strong>$
                    <?php echo $price; ?>
                </strong>.
            </p>

            <p>
                The sales tax rate is
                <strong>
                    <?php echo $tax_rate; ?>%
                </strong>.
            </p>

        </section>


        <!-- BOOLEANS -->
        <section>

            <h2>Booleans</h2>

            <p class="note">
                <strong>Meaning:</strong>
                A Boolean has only two possible values:
                <strong>true</strong> or <strong>false</strong>.
                It is useful for checking conditions or status.
            </p>

            <div class="code-example">
                <code>
                    $employed = true;<br>
                    $online = false;<br>
                    $for_sale = true;
                </code>
            </div>

            <h3>Output</h3>

            <p>
                Online Status:
                <strong>
                    <?php echo $online ? "Online" : "Offline"; ?>
                </strong>
            </p>

            <p>
                Employment Status:
                <strong>
                    <?php echo $employed ? "Employed" : "Unemployed"; ?>
                </strong>
            </p>

            <p>
                For Sale Status:
                <strong>
                    <?php echo $for_sale ? "For Sale" : "Not For Sale"; ?>
                </strong>
            </p>

        </section>
        <section>
            <h2>Practice Task: Student Purchase Profile</h2>

            <div class="code-example">
                <code>
                    $studentname = "Ivan Lee Dorillo";<br>
                    $Age = 21;<br>
                    $Favorite = "PHP, html, and css";<br>
                    $GPA = 1.80;<br>
                    $student_status = true;<br>
                    $Quantity =  3;<br>
                    $Price = 25.50;<br>
                    $product_status = true;<br>
                    $TOTAL = $Quantity * $Price;
                </code>
            </div>
            <h3>Output</h3>
            <p>My name is <?php echo $studentname; ?>.</p>
            <p>I am <?php echo $Age; ?> years old.</p>
            <p>My favorite programming language is <?php echo $Favorite; ?></p>
            <p>My GPA is <?php echo $GPA; ?></p>
            <p>Student Status: <?php echo $student_status ? "Active" : "Inactive"?></p> 
            <br>
            <p>Purchase Information</p>
            <p>I want to buy <?php echo $Quantity; ?> Keyboard.</p>
            <p>The price of each Keyboard is $<?php echo $Price; ?>.</p>
            <p>Product Status: <?php echo $product_status ? "Available" : "Out of Stock"?></p>
            <br>
            <p>Total Purchase Amount: $<?php echo $TOTAL; ?>.</p>
        </section>
        <section>
            <h2 class="whatihavelearned">What I Have Learned</h2>
            <h3>Why do PHP variables start with $?</h3>
            <p>PHP variables start with a dollar sign (`$`) because the language was directly influenced by Perl and Unix shell scripting, where `$` acts as a sigil—a special prefix character that tells the PHP parser, "what follows is a variable name."</p>
            <h3>What is variable in PHP?</h3>
            <p>A named container or "storage locker" in memory used to hold data that your script can read, update, or use later.</p>
            <h3>What is a String?</h3>
            <p>A sequence of characters—such as letters, numbers, spaces, or symbols—wrapped in single or double quotes used to represent text.</p>
            <h3>What is an Integer?</h3>
            <p>A whole number without any decimal points, which can be either positive, zero, or negative (e.g., -15, 0, 42).</p>
            <h3>What is a Float?</h3>
            <p>Float (Floating-point number): A number that contains a decimal point or fractional part (e.g., 3.14, -0.001, 10.0).</p>
            <h3>What is a Boolean?</h3>
            <p>Boolean: The simplest data type, representing a logical value that can only be either true or false.</p>
            <h3>The difference between:</h3>
            <code class="code-example">"21"</code>
            <code class="code-example">21</code>
            <br>
            <br>
            <p>"21" (String): PHP treats this as textual characters, wrapped in quotation marks. Even though it looks like a number, it behaves like words or letters.</p>
            <p>21 (Integer): PHP treats this as a whole number. It has no quotes and is stored in memory as a numerical value ready for mathematical calculations.</p>
            <h3>What Happens When a Boolean is true or false?</h3>
            <p><strong>In Control Flow (if statements):</strong></p> 
            <ul>
                <li>If a condition evaluates to <strong>true</strong>, PHP executes the code inside that if block.</li>
                <li>If a condition evaluates to <strong>false</strong>, PHP skips that block entirely and moves to the next instruction (or runs an else block if provided).</li>
            </ul>
            <p><strong>When Outputting (echo / print):</strong></p>
            <ul>
                <li>Printing true converts the value to the string "1".</li>
                <li>Printing false converts the value to an empty string "" (it prints nothing to the screen).</li>
            </ul>
            <div class="code-example">
                <code>
                    $is_admin = true;<br>
                    <br>
                    if ($is_admin) {
                        echo "Welcome to the admin dashboard!"; // This runs because $is_admin is true.
                    }<br>
                </code>
            </div>
            <h3>Why $student_name is Better Than $x</h3>
            <ul>
                <li>Self-Documentation: A clear name instantly reveals what data the variable holds without needing extra comments.</li>
                <li>Maintainability: When you or another developer return to the codebase months later, $student_name is immediately readable, whereas $x forces you to trace back through the code to figure out what it represents.</li>
                <li>Prevents Bugs: Using vague names like $x, $y, and $z increases the risk of accidentally assigning or overwriting the wrong data.</li>
            </ul>
            <h3>Real-life example for each data type.</h3>
            <table border="1">
            <thead>
                <tr>
                <th>Data Type</th>
                <th>Real-Life Example</th>
                <th>PHP Code</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>String (Text)</td>
                <td>Storing a user's full name or email address</td>
                <td>$user_email = "ivan.lee@example.com";</td>
                </tr>
                <tr>
                <td>Integer (Whole number)</td>
                <td>Counting items in a shopping cart or student enrollment</td>
                <td>$items_in_cart = 3;</td>
                </tr>
                <tr>
                <td>Float / Double (Decimal number)</td>
                <td>Tracking product prices or grade point averages (GPA)</td>
                <td>$product_price = 49.99;</td>
                </tr>
                <tr>
                <td>Boolean (True/False)</td>
                <td>Checking if an order has been paid or if an account is active</td>
                <td>$is_paid = false;</td>
                </tr>
            </tbody>
            </table>           
        </section>
        <section>
            <h2>Final Challenge — Student Profile Card</h2>
            <div class="code-example">
                <code>
                    $student_name = "Ivan Lee Dorillo"; <br>
                    $course = "BSIT";<br>
                    $age = 21;<br>
                    $school = "BSIT";<br>
                    $favorite_language = "PHP";<br>
                    $GPA = 1.80;<br>
                    $year_level = 3;<br>
                    $is_student = True;<br>
                    $is_available_for_internship = True;<br>
                </code>
            </div>
            <h3>OUTPUT</h3>
            <p>Student Profile</p>
            <p><?php echo $student_name; ?></p>
            <p><?php echo $course; ?> - <?php echo $year_level; ?></p>
            <br>
            <p>School: <?php echo $school; ?></p>
            <p>Age: <?php echo $age; ?></p>
            <p>Favorite Language: <?php echo $favorite_language; ?></p>
            <p>GPA: <?php echo $gpa; ?></p>
            <br>
            <p>Student Status: <?php echo $is_student ? "Active" : "Inactive"; ?></p> 
            <p>Available for Internship: <?php echo $is_available_for_internship ? "Yes" : "No"; ?></p>
        </section>
        <section class="final_sections">
            <h1>THANKKK YOUUU</h1>
        </section>
    </main>

</body>

</html>
