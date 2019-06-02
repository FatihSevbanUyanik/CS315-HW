<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <?php

    print("<h1>Results</h1>");

    /*
    OPERATOR PRECEDENCE RULES IN ARITHMETIC EXPRESSIONS IN PHP (DESCENDING ORDER)
    ---------------------------------------------------------------------------------------------------
    1 --> ()      ----> Parantheses 
    2 --> **      ----> Exponent
    3 --> *, /, % ----> Multiplication, Division, Modulus
    4 --> ., -    ----> Addition, Subtraction
    ---------------------------------------------------------------------------------------------------
    */

    print("-------------------------------------------------------------------------------------------------------------------------------------------------<br>");
    print("OPRATOR PRECEDENCE RULES IN ARITHMETIC EXPRESSIONS IN PHP (DESCENDING ORDER)<br>");
    print("-------------------------------------------------------------------------------------------------------------------------------------------------<br>");
    print("<pre>1 --> ()      ----> Parantheses<br></pre>");
    print("<pre>2 --> **      ----> Exponent<br></pre>");
    print("<pre>3 --> *, /, % ----> Multiplication, Division, Modulus<br></pre>");
    print("<pre>4 --> ., -    ----> Addition, Subtraction<br></pre>");
    print("-------------------------------------------------------------------------------------------------------------------------------------------------<br>");


    // subtraction and addition
    $operation1 = 10 - 50 + 80;  // Expected 40
    print("Operation1 (10 - 50 + 80) = " . $operation1 . "<br>");


    // showing that multiplication has
    // precedence over subtraction.
    $operation2 = 10 - 50 * 10;  // Expected -490
    print("Operation2 (10 - 50 * 10) = " . $operation2 . "<br>"); 
    // if subtraction had precedence
    // over multiplication, the
    // expected result would be -400.


    // showing that multiplication
    // has precedence over addition.
    $operation3 = 10 + 50 * 10;  // Expected 510
    print("Operation3 (10 + 50 * 10) = " . $operation3 . "<br>");
    // if addition had precedence
    // over multiplication, the
    // expected result would be 600.


    // showing that division
    // has precedence over  subtraction.
    $operation4 = 10 - 50 / 10;  // Expected 5
    print("Operation4 (10 - 50 / 10) = " . $operation4 . "<br>"); 
    // if subtraction had precedence
    // over division, the
    // expected result would be -4.


    // showing that division
    // has precedence over  addition.
    $operation5 = 10 + 50 / 10;  // Expected 15
    print("Operation5 (10 + 50 / 10) = " . $operation5 . "<br>");
    // if addition had precedence
    // over division, the
    // expected result would be 6.


    // showing that Modulus
    // has precedence over subtraction.
    $operation6 = 10 - 50 % 8;  // Expected 8
    print("Operation6 (10 - 50 % 8) = " . $operation6 . "<br>");
    // if subtraction had precedence
    // over Modulus, the
    // expected result would be 0.


    // showing that Modulus
    // has precedence over addition.
    $operation7 = 10 + 50 % 8;  // Expected 12
    print("Operation7 (10 . 50 % 8) = " . $operation7 . "<br>");
    // if addition had precedence
    // over Modulus, the
    // expected result would be 4.


    // showing that Exponent has
    // precedence over Multiplication.
    $operation8 = 10 * 8 ** 2;  // Expected 640
    print("Operation8 (10 * 8 ** 2) = " . $operation8 . "<br>");
    // if Multiplication had precedence
    // over Exponent, the
    // expected result would be 6400.


    // showing that Exponent has
    // precedence over Division.
    $operation9 = 100 / 2 ** 2;  // Expected 25
    print("Operation9 (100 / 2 ** 2) = " . $operation9 . "<br>");
    // if Division had precedence
    // over Exponent, the
    // expected result would be 2500


    // showing that Exponent has
    // precedence over Modulus.
    $operation10 = 51 % 2 ** 2;  // Expected 3
    print("Operation10 (51 % 2 ** 2) = " . $operation10 . "<br>");
    // if Modulus had precedence
    // over Exponent, the
    // expected result would be 1.


    // showing that Parantheses has
    // precedence over Exponent.
    $operation11 = (100 / 10) ** 2;  // Expected 100
    print("Operation11 ((100 / 10) ** 2) = " . $operation11 . "<br>");
    // if the parantheses were not present, 
    // the expected result would be 1.0


    // showing that Parantheses has
    // precedence over Multiplication.
    $operation12 = (100 + 50) * 2;  // Expected 300
    print("Operation12 ((100 + 50) * 2) = " . $operation12 . "<br>");
    // if the parantheses were not present, 
    // the expected result would be 200


    // showing that Parantheses has
    // precedence over Division.
    $operation13 = (100 + 50) / 2;  // Expected 75
    print("Operation13 ((100 + 50) / 2) = " . $operation13  . "<br>");
    // if the parantheses were not present, 
    // the expected result would be 125.0


    // showing that Parantheses has
    // precedence over Modulus.
    $operation14 = (200 + 395) % 10;  // Expected 5
    print("Operation14 ((200 + 395) % 10) = " . $operation14 . "<br>"); 
    // if the parantheses were not present, 
    // the expected result would be 205


    /*
    OPERATOR ASSOCIATIVITY RULES IN ARITHMETIC EXPRESSIONS IN PHP 
    ---------------------------------------------------------------------------------------------------
    When two operators have the same precedence, operations are done according to associativity rules.
    1 --> ., -    ----> Addition, Subtraction have left associativity.
    2 --> *, /, % ----> Multiplication, Division, Modulus have left associativity.
    3 --> **      ----> Exponent have right associativity.
    4 --> ()      ----> parentheses is non associative.
    ---------------------------------------------------------------------------------------------------
    */


    print("<br><br>");
    print("-----------------------------------------------------------------------------------------------------------------------------------------------<br>");
    print("OPERATOR ASSOCIATIVITY RULES IN ARITHMETIC EXPRESSIONS IN PHP<br>");
    print("-----------------------------------------------------------------------------------------------------------------------------------------------<br>");
    print("<pre>When two operators have the same precedence, operations are done according to associativity rules.<br></pre>");
    print("<pre>1 --> +, -    ----> Addition, Subtraction have left associativity.<br></pre>");
    print("<pre>2 --> *, /, % ----> Multiplication, Division, Modulus have left associativity.<br></pre>");
    print("<pre>3 --> **      ----> Exponent have right associativity.<br></pre>");
    print("<pre>4 --> ()      ----> parentheses is non associative.<br></pre>");
    print("-----------------------------------------------------------------------------------------------------------------------------------------------<br>");


    // Showing that Multiplication and
    // Modulus have left associativity.
    $operation15 = 52 * 30 % 100;  // Expected 60
    print("Operation15 (52 * 30 % 100) = " . $operation15 . "<br>"); 
    // if multiplication and Modulus would
    // be right associative, then the
    // expected result would be 1560.


    // Showing that Division and
    // Modulus have left associativity.
    $operation16 = 3300 / 30 % 50;  // Expected 10
    print("Operation16 (3300 / 30 % 50) = " . $operation16 . "<br>");
    // if Division and Modulus would
    // be right associative, then the
    // expected result would be 1560.


    // Showing that Division and
    // Multiplication have left associativity.
    $operation17 = 3000 / 30 * 50;  // Expected 5000
    print("Operation17 (3000 / 30 * 50) = " . $operation17 . "<br>");
    // if Division and Multiplication would
    // be right associative, then the
    // expected result would be 2.0


    // Showing that Exponent
    // has right associativity.
    $operation18 = 2 ** 3 ** 2;  // Expected 512
    print("Operation18 (2 ** 3 ** 2) = " . $operation18 . "<br>");
    // if Exponent had right left associativity,
    // the expected result would be 64.


    /*
    ORDER OF OPERAND EVALUATION IN ARITHMETIC EXPRESSIONS IN PHP
    -------------------------------------------------------------------------------------------------------------
    Order of oprerand evaluation is always done from left to right in PHP.
    -------------------------------------------------------------------------------------------------------------
    */
    
    // heading
    print("<br><br>");
    print("-------------------------------------------------------------------------------------------------------------<br>");
    print("ORDER OF OPERAND EVALUATION IN ARITHMETIC EXPRESSIONS IN PHP<br>");
    print("-------------------------------------------------------------------------------------------------------------<br>");
    print("Order of oprerand evaluation is always done from left to right in PHP.<br>");
    

    // creating test functions
    //  for operation 26.
    print("<br>");
    function testSum($num1, $num2) {
        $result = $num1 + $num2;
        print("testSum has worked. Result: " . $result . "<br>");
        return $result;
    }
    
    function testSubtraction($num1, $num2) {
        $result = $num1 - $num2;
        print("testSubtraction has worked. Result: " . $result . "<br>");
        return $result;
    }

    function testMultiplication($num1, $num2) {
        $result = $num1 * $num2;
        print("testMultiplication has worked. Result: " . $result . "<br>");
        return $result;
    }

    function testDivision($num1, $num2) {
        $result = $num1 / $num2;
        print("testDivision has worked. Result: " . $result . "<br>");
        return $result;
    }


    // Showing that the operands are from left to right.
    print("<br>");
    $operation19 = testSum(4, 5) * testSubtraction(25, 19) * testMultiplication(2, 5) * testDivision(10, 5);  # Expected 1080
    print("Operation19 (testSum(4, 5) * testSubtraction(25, 19) * testMultiplication(2, 5) * testDivision(10, 5)) = " . $operation19 . "<br>");
    // in this context, the operator
    // between the operands is multiplication


    // Showing that the operands are from left to right.
    print("<br>");
    $operation20 = testSum(4, 5) + testSubtraction(25, 19) + testMultiplication(2, 5) + testDivision(10, 5);  # Expected 27
    print("Operation20 (testSum(4, 5) + testSubtraction(25, 19) + testMultiplication(2, 5) + testDivision(10, 5)) = " . $operation20 . "<br>");
    // in this context, the operator
    // between the operands is summation


    // Showing that the operands are from left to right.
    print("<br>");
    $operation21 = testSum(1, 1) ** testSubtraction(25, 22); # Expected 8
    print("Operation21 (testSum(1, 1) ** testSubtraction(25, 22)) = " . $operation21 . "<br>");
    // in this context, the operator
    // between the operands is exponent


    /*
    -------------------------------------------------------------------------------------------------------------
    SIDE EFFECTS OF OPERAND EVALUATION IN ARITHMETIC EXPRESSIONS IN PHP    
    -------------------------------------------------------------------------------------------------------------
    */
    
    // heading
    print("<br><br>");
    print('-------------------------------------------------------------------------------------------------------------<br>');
    print('SIDE EFFECTS OF OPERAND EVALUATION IN ARITHMETIC EXPRESSIONS IN PHP<br>');
    print('-------------------------------------------------------------------------------------------------------------<br>');
    
    $sideEffectVariable = 50;
    
    function testFunctionSideEffectVersion1() {
        global $sideEffectVariable;
        $sideEffectVariable = $sideEffectVariable + 400;
        return $sideEffectVariable; 
    }
    
    $result1 = testFunctionSideEffectVersion1() + $sideEffectVariable;
    $temp = testFunctionSideEffectVersion1();
    $result2 = $temp + $sideEffectVariable;
    
    print("RESULT1 (testFunctionSideEffectVersion1() + sideEffectVariable) = " . $result1 . "<br>");
    print("RESULT2 (temp + sideEffectVariable) = " . $result2 . "<br>");
    
    # if the function would not have side effects, then result1 = result2 should be equal. 
    # However, because result1 is not equal to result2, side effect is observed in PHP.
    
    print("<br>");
    print("if the function would not have side effects, then result1 = result2 should be equal.<br>");
    print("However, because result1 is not equal to result2, side effect is observed in php.<br>");
    print("<br>");
    
    $sideEffectVariable2 = 75;
    
    function testFunctionSideEffectVersion2() {
        global $sideEffectVariable2;
        $sideEffectVariable2 = 500;
        return $sideEffectVariable2;
    }
        
    $result3 = $sideEffectVariable2 + testFunctionSideEffectVersion2() + $sideEffectVariable2;
    
    // As it can be seen from result3, order of operand evaluation changes 
    // because of side effect of functions.
    
    print("RESULT3 (sideEffectVariable2 + testFunctionSideEffectVersion2() + sideEffectVariable2) = " . $result3 . "<br>");
    print("<br>");
    print("As it can be seen from result3, order of operand evaluation changes <br>");
    print("because of side effect effect of functions.<br>");
    
    ?>

</body>

</html>