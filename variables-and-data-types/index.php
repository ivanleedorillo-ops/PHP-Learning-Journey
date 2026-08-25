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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="indexstyle.css">

    <title>Variables and Data Types</title>
</head>

<body>

    <header>
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
                    $TOTAL = null;
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
            <p>I want to buy <?php echo $Quantity; ?> Keyboards.</p>
            <p>The price of each Keyboard is $<?php echo $Price; ?>.</p>
            <p>Product Status: <?php echo $product_status ? "Available" : "Out of Stock"?></p>
            <br>
            <p>Total Purchase Amount: $<?php echo $TOTAL; ?>.</p>

    </main>

</body>

</html>