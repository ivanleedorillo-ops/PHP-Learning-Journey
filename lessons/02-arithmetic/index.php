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
                <strong class="completed-text">Completed</strong>
            </div>
        </section>
        <nav class="topic-navigation" aria-label="Lesson-topics">
            <a href="#arithmetic-operators">Arithmetic Operators</a>
            <a href="#practice-task">Practice Task</a>
            <a href="#what-i-have-learned">What I Have Learned</a>
            <a href="#arithmeticn-notes">Arithmetic notes</a>
            <a href="#final-challenge">Final Challenge</a>
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
        <section class="lesson-section" id="what-i-have-learned">
            <div class="section-heading">
                <div>
                    <p class="label">This is what i learned</p>
                    <h2>What I Have Learned</h2>
                </div>
                <span class="type-badge">Reflections</span>
            </div>
            <br>
            <p class="learned-note">
                <strong>What is arithmetic in PHP?</strong> Arithmetic in PHP refers to performing mathematical operations on numeric values (integers and floats) using standard arithmetic operators. PHP automatically handles type conversion between integers and floating-point numbers during operations.
            </p>
            <br>
            <p class="learned-note">
                <strong>What does + do?</strong>Combines numbers together (5 + 3 gives 8). It also merges two arrays, but it is never used to join text.
            </p>
            <br>
            <p class="learned-note">
                <strong>What does - do?</strong> Takes one number away from another (10 - 4 gives 6) or makes a number negative (-5).
            </p>
            <br>
            <p class="learned-note">
                <strong>What does * do?</strong> Multiplies numbers (4 * 3 gives 12).
            </p>
            <br>
            <p class="learned-note">
                <strong>What does / do?</strong> Divides one number by another and gives the full answer, including decimals (7 / 2 gives 3.5).
            </p>
            <br>
            <p class="learned-note">
                <strong>What does % do?</strong> Divides numbers and gives only the remainder left over (7 % 2 gives 1).
            </p>
            <br>
            <p class="learned-note">
                <strong>What does ** do?</strong> Raises a number to a power (2 ** 3 means $2 \times 2 \times 2$, which gives 8).
            </p>
            <br>
            <p class="learned-note">
                <strong>What is the difference between / and %?</strong> The division operator (/) returns how many times one number fits into another, including decimal fractions if it doesn't divide evenly. The modulo operator (%) ignores the fractional quotient and returns only the integer leftover remainder.
            </p>
            <br>
            <p class="learned-note">
                <strong>Can arithmetic be performed using variables?</strong> Yes. You can hold numbers in variables and do math with them:
                    $price = 10;
$tax = 2;
$total = $price + $tax; // 12
            </p>
            <br>
            <p class="learned-note">
                <strong>Why store a calculation inside a variable?</strong> Storing the calculation in **`$total`** saves the result so PHP only does the math **once**, makes your code much **easier to read**, and allows you to **update the formula in just one place** instead of fixing repeated code everywhere.
            </p>
        </section>
        <section class="lesson-section" id="arithmeticn-notes">
            <div class="section-heading">
                <div>
                    <p class="label">Arithmetic notes</p>
                    <h2>Important PHP Arithmetic Notes</h2>
                </div>
                <span class="type-badge">Notes</span>
            </div>
            <p>PHP has basic math operators that work just like regular math. You can add (+), subtract (-), multiply (*), and divide (/). There are also two special ones: modulo (%), which gives you the remainder of a division, and exponentiation (**), which raises a number to a power (so 2 ** 3 is $2^3$, which equals 8). One cool thing about division in PHP is that if the answer isn't a whole number,
                 it automatically turns into a decimal, so 5 / 2 gives you 2.5.</p> 
             <br>
             <p>PHP also follows the usual order of operations (PEMDAS), which means it does some math before others. It does powers first, then multiplication, division, and modulo, and finally addition and subtraction. If operators have the same priority—like multiplication and division—it just works through them from left to right. Because of this rule, something like 10 + 2 * 5
                 comes out to 20 because PHP multiplies 2 * 5 first before adding 10.</p>
             <br>
             <p>If you want to change that order, you can just use parentheses (). Anything inside parentheses always gets calculated first. So if you change the same problem to (10 + 2) * 5, PHP adds 10 + 2 first to get 12, and then multiplies it by 5 to get 60. Parentheses are super helpful when you want to override the default math rules or just make your code easier to read.</p>
        </section>
        <section class="lesson-section" id="final-challenge">
            <div class="label">Final Challenge</div>
            <h2>Simple Store Receipt</h2>

            <div class="example-grid">
                <div class="code-example">
                    <span class="block-label">PHP code</span>
                    <pre>
                        <code>
<?php
//Final Challenge — Simple Store Receipt
$customer_name = "John Ram Dorillo";
$cash = 500;
$product_name = "Gaming Chair";
$product_price = 100.55;
$quantity = 2;
$discount_rate= 0.50;
$tax_rate= 0.10;

// Calculations
$sub_total = $product_price * $quantity;
$discount_total = $sub_total * $discount_rate;
$discounted_total = $sub_total - $discount_total;
$tax_amount = $discounted_total * $tax_rate;

$final_total = $discounted_total + $tax_amount;

$change_amount = $cash - $final_total;

?>
//Final Challenge — Simple Store Receipt
$customer_name = "John Ram Dorillo";
$cash = 500;
$product_name = "Gaming Chair";
$product_price = 100.55;
$quantity = 2;
$discount_rate= 0.50;
$tax_rate= 0.10;

// Calculations
$sub_total = $product_price * $quantity;
$discount_total = $sub_total * $discount_rate;
$tax_amount = $discount_total * $tax_rate;

$final_total = $discount_total + $tax_amount;

$change_amount = $cash - $final_total;
                        </code>
                    </pre>
                </div>
                <div class="output-example">
                    <span class="block-label">STORE RECEIPT</span>
                    <p>Customer: <?php echo $customer_name;?></p>
                    <br>
                    <p>Cash: $<?php echo $cash;?></p>
                    <p>Product: <?php echo $product_name;?></p>
                    <p>Product Price: $<?php echo $product_price;?></p>
                    <p>Quantity: <?php echo $quantity;?></p>
                    <br>
                    <p>----------------------------------</p>
                    <br> 
                    <p>Subtotal: <?php echo $sub_total;?></p>
                    <p>Discount: <?php echo $discount_rate;?></p>
                    <p>Tax: <?php echo $tax_rate;?></p>
                    <br>
                    <p>----------------------------------</p>
                    <br>
                    <p>Final Total: <?php echo $final_total;?></p>
                    <p>Change: <?php echo $change_amount;?></p>
                </div>
            </div>

        </section>
        <nav class="lesson-navigation" aria-label="Lesson navigation">
            <a href="../../index.php">&larr; All lessons</a>
            <a href="../03-strings-and-concatenation/index.php">Next: $_GET and $_POST &rarr;</a>
        </nav>
    </main>
    <footer>
        <p>PHP Learning Journey — Ivan Lee Dorillo</p>
        <p>Learn. Practice. Build.</p>
    </footer>
</body>

</html>
