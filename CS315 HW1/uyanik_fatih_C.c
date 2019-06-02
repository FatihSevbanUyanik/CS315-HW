#include <stdio.h>

 // function for summing numbers.
int sumNumbers(int a, int b) {
    return a + b;
}


// creating test functions
// for operation 20.
int testSum(int num1, int num2) {
    int result = num1 + num2;
    printf("testSum has worked. Result: %d\n", result);
    return result;
}

int testSubtraction(int num1, int num2) {
    int result = num1 - num2;
    printf("testSubtraction has worked. Result: %d\n", result);
    return result;
}   

int testMultiplication(int num1, int num2) {
    int result = num1 * num2;
    printf("testMultiplication has worked. Result: %d\n", result);
    return result;
}
   
int testDivision(int num1, int num2) {
    int result = num1 / num2;
    printf("testDivision has worked. Result: %d\n", result);
    return result;
}

int sideEffectVariable = 50;
    
int testFunctionSideEffectVersion1() {
    sideEffectVariable = sideEffectVariable + 400;
    return sideEffectVariable; 
}

int sideEffectVariable2 = 75;
    
int testFunctionSideEffectVersion2() {
    sideEffectVariable2 = 500;
    return sideEffectVariable2;
}
 
int main() {

    /*
    OPERATOR PRECEDENCE RULES IN ARITHMETIC EXPRESSIONS IN C (DESCENDING ORDER)
    ---------------------------------------------------------------------------------------------------
    1 --> ()      ----> Parantheses 
    2 --> **      ----> Exponent
    3 --> *, /, % ----> Multiplication, Division, Modulus
    4 --> +, -    ----> Addition, Subtraction
    ---------------------------------------------------------------------------------------------------
    */
   
    printf("\n\n");
    printf("---------------------------------------------------------------------------------------------------\n");
    printf("OPERATOR PRECEDENCE RULES IN ARITHMETIC EXPRESSIONS IN C (DESCENDING ORDER)\n");
    printf("---------------------------------------------------------------------------------------------------\n");
    printf("1 --> ()    ----> Parantheses\n");
    printf("2 --> *, /  ----> Multiplication, Division, Modulus\n");
    printf("3 --> -, +  ----> Addition, Subtraction\n");
    printf("---------------------------------------------------------------------------------------------------\n");

    // subtraction and addition
    int operation1 = 10 - 50 + 80;  // Expected 40
    printf("Operation1 (10 - 5clear0 + 80) = %d\n", operation1); 


    // showing that multiplication has
    // precedence over subtraction.
    int operation2 = 10 - 50 * 10;  // Expected -490
    printf("Operation2 (10 - 50 * 10) = %d\n", operation2); 
    // if subtraction had precedence
    // over multiplication, the
    // expected result would be -400.


    // showing that multiplication
    // has precedence over addition.
    int operation3 = 10 + 50 * 10;  // Expected 510
    printf("Operation3 (10 + 50 * 10) = %d\n", operation3); 
    // if addition had precedence
    // over multiplication, the
    // expected result would be 600.


    // showing that division
    // has precedence over  subtraction.
    int operation4 = 10 - 50 / 10;  // Expected 5
    printf("Operation4 (10 - 50 / 10) = %d\n", operation4); 
    // if subtraction had precedence
    // over division, the
    // expected result would be -4.


    // showing that division
    // has precedence over  addition.
    int operation5 = 10 + 50 / 10;  // Expected 15
    printf("Operation5 (10 + 50 / 10) = %d\n", operation5); 
    // if addition had precedence
    // over division, the
    // expected result would be 6.


    // showing that Modulus
    // has precedence over subtraction.
    int operation6 = 10 - 50 % 8;  // Expected 8
    printf("Operation6 (10 - 50 % 8) = %d\n", operation6); 
    // if subtraction had precedence
    // over Modulus, the
    // expected result would be 0.


    // showing that Modulus
    // has precedence over addition.
    int operation7 = 10 + 50 % 8;  // Expected 12
    printf("Operation7 (10 + 50 % 8) = %d\n",  operation7); 
    // if addition had precedence
    // over Modulus, the
    // expected result would be 4.


    // showing that Parantheses has
    // precedence over Multiplication.
    int operation8 = (100 + 50) * 2;  // Expected 300
    printf("Operation8 ((100 + 50) * 2) = %d\n",  operation8); 
    // if the parantheses were not present, 
    // the expected result would be 200


    // showing that Parantheses has
    // precedence over Division.
    int operation9 = (100 + 50) / 2;  // Expected 75
    printf("Operation9 ((100 + 50) / 2) = %d\n",  operation9);
    // if the parantheses were not present, 
    // the expected result would be 125.0


    // showing that Parantheses has
    // precedence over Modulus.
    int operation10  = (200 + 395) % 10;  // Expected 5
    printf("Operation10 ((200 + 395) % 10) = %d\n",  operation10);  
    // if the parantheses were not present, 
    // the expected result would be 205

    
    /*
    OPERATOR ASSOCIATIVITY RULES IN ARITHMETIC EXPRESSIONS IN C 
    ---------------------------------------------------------------------------------------------------
    When two operators have the same precedence, operations are done according to associativity rules.
    1 --> +, -    ----> Addition, Subtraction have left associativity.
    2 --> *, /, % ----> Multiplication, Division, Modulus have left associativity.
    3 --> **      ----> Exponent have right associativity.
    4 --> ()      ----> parentheses is non associative.
    ---------------------------------------------------------------------------------------------------
    */


    printf("\n\n");
    printf("---------------------------------------------------------------------------------------------------\n");
    printf("OPERATOR ASSOCIATIVITY RULES IN ARITHMETIC EXPRESSIONS IN C\n");
    printf("---------------------------------------------------------------------------------------------------\n");
    printf("When two operators have the same precedence, operations are done according to associativity rules.\n");
    printf("1 --> +, -  ----> Addition, Subtraction have left associativity.\n");
    printf("2 --> *, /  ----> Multiplication, Division, Modulus have left associativity.\n");
    printf("3 --> ()    ----> parentheses is non associative.\n");
    printf("---------------------------------------------------------------------------------------------------\n");


    // Showing that Multiplication and
    // Modulus have left associativity.
    int operation11 = 52 * 30 % 100;  // Expected 60
    printf("Operation11 (52 * 30 % 100) = %d\n", operation11); 
    // if multiplication and Modulus would
    // be right associative, then the
    // expected result would be 1560.


    // Showing that Division and
    // Modulus have left associativity.
    int operation12 = 3300 / 30 % 50;  // Expected 10
    printf("Operation12 (3300 / 30 % 50) = %d\n", operation12); 
    // if Division and Modulus would
    // be right associative, then the
    // expected result would be 110.


    // Showing that Division and
    // Multiplication have left associativity.
    int operation13 = 3000 / 30 * 50;  // Expected 5000
    printf("Operation13 (3000 / 30 * 50) = %d\n", operation13); 
    // if Division and Multiplication would
    // be right associative, then the
    // expected result would be 2


    /*
    -------------------------------------------------------------------------------------------------------------
    ORDER OF OPERAND EVALUATION IN ARITHMETIC EXPRESSIONS IN C
    -------------------------------------------------------------------------------------------------------------
    Order of oprerand evaluation is always done from left to right in C.
    -------------------------------------------------------------------------------------------------------------
    */
    
    // heading
    printf("\n\n");
    printf("-------------------------------------------------------------------------------------------------------------\n");
    printf("ORDER OF OPERAND EVALUATION IN ARITHMETIC EXPRESSIONS IN C\n");
    printf("-------------------------------------------------------------------------------------------------------------\n");
    printf("Order of oprerand evaluation is always done from left to right in C.\n");
    
    // Showing that the operands are from left to right.
    printf("\n");
    int operation14 = testSum(4, 5) * testSubtraction(25, 19) * testMultiplication(2, 5) * testDivision(10, 5);  // Expected 1080
    printf("Operation14 (testSum(4, 5) * testSubtraction(25, 19) * testMultiplication(2, 5) * testDivision(10, 5)) = %d\n", operation14);
    // in this context, the operator
    // between the operands is multiplication


    // Showing that the operands are from left to right.
    printf("\n");
    int operation15 = testSum(4, 5) + testSubtraction(25, 19) + testMultiplication(2, 5) + testDivision(10, 5);  // Expected 27
    printf("Operation15 (testSum(4, 5) + testSubtraction(25, 19) + testMultiplication(2, 5) + testDivision(10, 5)) = %d\n", operation15);
    // in this context, the operator
    // between the operands is summation


    /*
    -------------------------------------------------------------------------------------------------------------
    SIDE EFFECTS OF OPERAND EVALUATION IN ARITHMETIC EXPRESSIONS IN C    
    -------------------------------------------------------------------------------------------------------------
    */
    
    // heading
    printf("\n\n");
    printf("-------------------------------------------------------------------------------------------------------------\n");
    printf("SIDE EFFECTS OF OPERAND EVALUATION IN ARITHMETIC EXPRESSIONS IN C\n");
    printf("-------------------------------------------------------------------------------------------------------------\n");

    
    int result1 = testFunctionSideEffectVersion1() + sideEffectVariable;
    int temp = testFunctionSideEffectVersion1();
    int result2 = temp + sideEffectVariable;
    
    printf("RESULT1 (testFunctionSideEffectVersion1() + sideEffectVariable) = %d\n", result1);
    printf("RESULT2 (temp + sideEffectVariable) = %d\n", result2);
    
    // if the function would not have side effects, then result1 = result2 should be equal. 
    // However, because result1 is not equal to result2, side effect is observed in PHP.
    
    printf("\n");
    printf("if the function would not have side effects, then result1 = result2 should be equal.\n");
    printf("However, because result1 is not equal to result2, side effect is observed in C.\n");
    printf("\n");
    

    int result3 = sideEffectVariable2 + testFunctionSideEffectVersion2() + sideEffectVariable2;
    
    // As it can be seen from result3, order of operand evaluation changes 
    // because of side effect of functions.
    
    printf("RESULT3 (sideEffectVariable2 + testFunctionSideEffectVersion2() + sideEffectVariable2) = %d\n", result3);
    printf("\n");
    printf("As it can be seen from result3, order of operand evaluation changes \n");
    printf("because of side effect of functions.\n");
    return 0;
}
