<?php
// ========================================
// Arithmetic
// ========================================

//Part 1: Arithmetic Operators
$num1 = 20;
$num2 = 5;

$Addition = $num1 + $num2;
$Subtraction = $num1 - $num2;
$Multiplication = $num1 * $num2;
$Division = $num1 / $num2;
$Modulus = $num1 % $num2;
$Exponent = $num1 ** $num2;

//Practice Task — Shopping Calculator
$product_name = "Iphone 17 pro max";
$price = 1500;
$quantity = 2;
$discount = 0.30;

$subtotal = $price * $quantity;
$discountamount = $subtotal * $discount;
$finaltotal = $subtotal - $discountamount;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/lessons/arithmetic.css">
    <title>Arithmetic | PHP Learning Journey</title>
</head>

<body>
    <header class="lesson-header">
        <div class="header-content">
            <a class="back-button" href="../../index.php">&larr; Back to lessons</a>
            <p class="label">LESSON 02 · PHP FUNDAMENTALS</p>
            <h1>PHP Arithmetic</h1>
            <p class="description">My practice page for PHP arithmetic operators and calculations.</p>
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
                <strong>Arithmetic Operators</strong>
            </div>
            <div>
                <span>Status</span>
                <strong class="on-going-text">Working</strong>
            </div>
        </section>
        <nav class="topic-navigation" aria-label="Lesson-topics">
            <a href="#arithmetic-operators">Arithmetic Operators</a>
        </nav>
        <section class="lesson-section" id="arithmetic-operators">
            <div class="section-heading">
                <div>
                    <p class="label">Arithmetic Operators</p>
                    <h2>Operators</h2>
                </div>
                <span class="type-badge">Basic Operations</span>
            </div>
            <p class="note"><strong>Meaning: </strong>Arithmetic operators in PHP are symbols used to perform common mathematical operations such as addition, subtraction, multiplication, and division on 
            numeric values (integers and floats).</p>

            <div class="example-grid">
                <div class=code-example>
                    <span class="block-label">PHP code</span>
                    <pre><code>$num1 = 20;
$num2 = 5;

$Addition = $num1 + $num2;
$Subtraction = $num1 - $num2;
$Multiplication = $num1 * $num2;
$Division = $num1 / $num2;
$Modulus = $num1 % $num2;
$Exponent = $num1 ** $num2;
                    </code></pre>
                </div>
                <div class="output-example">
                    <span class="block-label">Output</span>
                    <p>The result between <?php echo $num1; ?> add by <?php echo $num2; ?> is equal to <?php echo $Addition; ?></p>
                    <p>The result between <?php echo $num1; ?> substract by <?php echo $num2; ?> is equal to <?php echo $Subtraction; ?></p>
                    <p>The result between <?php echo $num1; ?> multiply by <?php echo $num2; ?> is equal to <?php echo $Multiplication; ?></p>
                    <p>The result between <?php echo $num1; ?> divide by <?php echo $num2; ?> is equal to <?php echo $Division; ?></p>
                    <p>The result between <?php echo $num1; ?> modulus by <?php echo $num2; ?> is equal to <?php echo $Modulus; ?></p>
                    <p>The result between <?php echo $num1; ?> exponent by <?php echo $num2; ?> is equal to <?php echo $Exponent; ?></p>
                </div>
            </div>
        </section>
        <section class="lesson-section" id="practice-task">
            <div class="section-heading">
                <div>
                    <p class="label">Practice task</p>
                    <h2>Shopping Calculator</h2>
                </div>
                <span class="type-badge">Calculate purchase</span>
            </div>
            <div class="example-grid">
                <div class="code-example">
                    <span class="block-label">PHP code</span>
                    <pre>
                        <code>
$product_name = "Iphone 17 pro max";
$price = 1500;
$quantity = 2;
$discount = 0.30;

$subtotal = $price * $quantity;
$discountamount = $subtotal * $discount;
$finaltotal = $subtotal - $discountamount;
                        </code>
                    </pre>
 
                </div>
                <div class="output-example">
                    <span class="block-label">Shopping Information</span>
                    <p>Product name: <?php echo $product_name; ?></p>
                    <p>Price: <?php echo $price; ?></p>
                    <p>Quantity: <?php echo $quantity; ?></p>
                    <br>
                    <p>Subtotal: <?php echo $subtotal; ?></p>
                    <p>Discount amount: <?php echo $discountamount; ?></p>
                    <p>Final total: <?php echo $finaltotal; ?></p>
                </div>
            </div>
        </section>
    </main>
</body>

</html>
