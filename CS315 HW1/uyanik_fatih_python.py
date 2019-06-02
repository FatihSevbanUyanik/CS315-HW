"""
OPERATOR PRECEDENCE RULES IN ARITHMETIC EXPRESSIONS IN PYTHON (DESCENDING ORDER)
-------------------------------------------------------------------------------------------------------------
1 --> ()      ----> Parantheses 
2 --> **      ----> Exponent
3 --> *, /, % ----> Multiplication, Division, Modulus
4 --> +, -    ----> Addition, Subtraction
-------------------------------------------------------------------------------------------------------------
"""

# heading
print()
print()
print('-------------------------------------------------------------------------------------------------------------')
print('OPERATOR PRECEDENCE RULES IN ARITHMETIC EXPRESSIONS IN PYTHON (DESCENDING ORDER)')
print('-------------------------------------------------------------------------------------------------------------')
print("1 --> ()      ----> Parantheses")
print("2 --> **      ----> Exponent")
print("3 --> *, /, % ----> Multiplication, Division, Modulus")
print("4 --> +, -    ----> Addition, Subtraction")
print('-------------------------------------------------------------------------------------------------------------')


# subtraction and addition
operation1 = 10 - 50 + 80  # Expected 40
print("Operation1 (10 - 50 + 80) = " + str(operation1))  


# showing that multiplication has
# precedence over  subtraction.
operation2 = 10 - 50 * 10  # Expected -490
print("Operation2 (10 - 50 * 10) = " + str(operation2))  
# if subtraction had precedence
# over multiplication, the
# expected result would be -400.


# showing that multiplication
# has precedence over addition.
operation3 = 10 + 50 * 10  # Expected 510
print("Operation3 (10 + 50 * 10) = " + str(operation3))  
# if addition had precedence
# over multiplication, the
# expected result would be 600.


# showing that division
# has precedence over  subtraction.
operation4 = 10 - 50 / 10  # Expected 5.0
print("Operation4 (10 - 50 / 10) = " + str(operation4)) 
# if subtraction had precedence
# over division, the
# expected result would be -4.


# showing that division
# has precedence over  addition.
operation5 = 10 + 50 / 10  # Expected 15.0
print("Operation5 (10 + 50 / 10) = " + str(operation5))  
# if addition had precedence
# over division, the
# expected result would be 6.


# showing that Modulus
# has precedence over subtraction.
operation6 = 10 - 50 % 8  # Expected 8
print("Operation6 (10 - 50 % 8) = " + str(operation6))  
# if subtraction had precedence
# over Modulus, the
# expected result would be 0.


# showing that Modulus
# has precedence over addition.
operation7 = 10 + 50 % 8  # Expected 12
print("Operation7 (10 + 50 % 8) = " + str(operation7))  
# if addition had precedence
# over Modulus, the
# expected result would be 4.


# showing that Exponent has
# precedence over Multiplication.
operation8 = 10 * 8 ** 2  # Expected 640
print("Operation8 (10 * 8 ** 2) = " + str(operation8))  
# if Multiplication had precedence
# over Exponent, the
# expected result would be 6400.


# showing that Exponent has
# precedence over Division.
operation9 = 100 / 2 ** 2  # Expected 25.0
print("Operation9 (100 / 2 ** 2) = " + str(operation9))  
# if Division had precedence
# over Exponent, the
# expected result would be 2500.0


# showing that Exponent has
# precedence over Modulus.
operation10 = 51 % 2 ** 2  # Expected 3
print("Operation10 (51 % 2 ** 2) = " + str(operation10))  
# if Modulus had precedence
# over Exponent, the
# expected result would be 1.


# showing that Parantheses has
# precedence over Exponent.
operation11 = (100 / 10) ** 2  # Expected 100.0
print("Operation11 ((100 / 10) ** 2) = " + str(operation11))  
# if the parantheses were not present, 
# the expected result would be 1.0


# showing that Parantheses has
# precedence over Multiplication.
operation12 = (100 + 50) * 2  # Expected 300
print("Operation12 ((100 + 50) * 2) = " + str(operation12))  
# if the parantheses were not present, 
# the expected result would be 200


# showing that Parantheses has
# precedence over Division.
operation13 = (100 + 50) / 2  # Expected 75.0
print("Operation13 ((100 + 50) / 2) = " + str(operation13))  
# if the parantheses were not present, 
# the expected result would be 125.0

# showing that Parantheses has
# precedence over Modulus.
operation14 =  (200 + 395) % 10   # Expected 5
print("Operation14 ((200 + 395) % 10) = " + str(operation14)) 
# if the parantheses were not present, 
# the expected result would be 205


"""
OPERATOR ASSOCIATIVITY RULES IN ARITHMETIC EXPRESSIONS IN PYTHON 
-------------------------------------------------------------------------------------------------------------
When two operators have the same precedence, operations are done according to associativity rules.
1 --> +, -    ----> Addition, Subtraction have left associativity.
2 --> *, /, % ----> Multiplication, Division, Modulus have left associativity.
3 --> **      ----> Exponent have right associativity.
4 --> ()      ----> parentheses is non associative.
-------------------------------------------------------------------------------------------------------------
"""

# heading
print()
print()
print('-------------------------------------------------------------------------------------------------------------')
print('OPERATOR ASSOCIATIVITY RULES IN ARITHMETIC EXPRESSIONS IN PYTHON')
print('-------------------------------------------------------------------------------------------------------------')
print('When two operators have the same precedence, operations are done according to associativity rules.')
print('1 --> +, -    ----> Addition, Subtraction have left associativity.')
print('2 --> *, /, % ----> Multiplication, Division, Modulus have left associativity.')
print('3 --> **      ----> Exponent have right associativity.')
print('4 --> ()      ----> parentheses is non associative.')
print('-------------------------------------------------------------------------------------------------------------')


# Showing that Multiplication and
# Modulus have left associativity.
operation15 = 52 * 30 % 100  # Expected 60
print("Operation15 (52 * 30 % 100) = " + str(operation15)) 
# if multiplication and Modulus would
# be right associative, then the
# expected result would be 1560.


# Showing that Division and
# Modulus have left associativity.
operation16 = 3300 / 30 % 50  # Expected 10.0
print("Operation16 (3300 / 30 % 50) = " + str(operation16))  
# if Division and Modulus would
# be right associative, then the
# expected result would be 1560.


# Showing that Division and
# Multiplication have left associativity.
operation17 = 3000 / 30 * 50  # Expected 5000.0
print("Operation17 (3000 / 30 * 50) = " + str(operation17)) 
# if Division and Multiplication would
# be right associative, then the
# expected result would be 2.0


# Showing that Exponent
# has right associativity.
operation18= 2 ** 3 ** 2  # Expected 512
print("Operation18 (2 ** 3 ** 2) = " + str(operation18))  
# if Exponent had right left associativity,
# the expected result would be 64.


"""
ORDER OF OPERAND EVALUATION IN ARITHMETIC EXPRESSIONS IN PYTHON
-------------------------------------------------------------------------------------------------------------
Order of oprerand evaluation is always done from left to right in Python.
-------------------------------------------------------------------------------------------------------------
"""

# heading
print()
print()
print('-------------------------------------------------------------------------------------------------------------')
print('ORDER OF OPERAND EVALUATION IN ARITHMETIC EXPRESSIONS IN PYTHON')
print('-------------------------------------------------------------------------------------------------------------')
print("Order of oprerand evaluation is always done from left to right in Python.")


# creating test functions
def testSum(num1, num2):
    result = num1 + num2
    print("testSum has worked. Result: " + str(result))
    return result

def testSubtraction(num1, num2):
    result = num1 - num2
    print("testSubtraction has worked. Result: " + str(result))
    return result

def testMultiplication(num1, num2):
    result = num1 * num2
    print("testMultiplication has worked. Result:  " + str(result))
    return result

def testDivision(num1, num2):
    result = num1 / num2
    print("testDivision has worked. Result: " + str(result))
    return result


# Showing that the operands are from left to right.
print()
operation19 = testSum(4, 5) * testSubtraction(25, 19) * testMultiplication(2, 5) * testDivision(10, 5)  # Expected 1080.0
print("Operation19 (testSum(4, 5) * testSubtraction(25, 19) * testMultiplication(2, 5) * testDivision(10, 5)) = " + str(operation19))
# in this context, the operator
# between the operands is multiplication


# Showing that the operands are from left to right.
print()
operation20 = testSum(4, 5) + testSubtraction(25, 19) + testMultiplication(2, 5) + testDivision(10, 5)  # Expected 27.0
print("Operation20 (testSum(4, 5) + testSubtraction(25, 19) + testMultiplication(2, 5) + testDivision(10, 5)) = " + str(operation20))
# in this context, the operator
# between the operands is summation


# Showing that the operands are from left to right.
print()
operation21 = testSum(1, 1) ** testSubtraction(25, 22) # Expected 8
print("Operation21 (testSum(1, 1) ** testSubtraction(25, 22)) = " + str(operation21))
# in this context, the operator
# between the operands is exponent


"""
-------------------------------------------------------------------------------------------------------------
SIDE EFFECTS OF OPERAND EVALUATION IN ARITHMETIC EXPRESSIONS IN PYTHON    
-------------------------------------------------------------------------------------------------------------
"""

# heading
print()
print()
print('-------------------------------------------------------------------------------------------------------------')
print('SIDE EFFECTS OF OPERAND EVALUATION IN ARITHMETIC EXPRESSIONS IN PYTHON')
print('-------------------------------------------------------------------------------------------------------------')

sideEffectVariable = 50

def testFunctionSideEffectVersion1():
    global sideEffectVariable
    sideEffectVariable = sideEffectVariable + 400
    return sideEffectVariable

result1 = testFunctionSideEffectVersion1() + sideEffectVariable
temp = testFunctionSideEffectVersion1()
result2 = temp + sideEffectVariable

print("RESULT1 (testFunctionSideEffectVersion1() + sideEffectVariable) = " + str(result1))
print("RESULT2 (temp + sideEffectVariable) = " + str(result2))

# if the function would not have side effects, then result1 = result2 should be equal. 
# However, because result1 is not equal to result2, side effect is observed in python.

print()
print("if the function would not have side effects, then result1 = result2 should be equal.")
print("However, because result1 is not equal to result2, side effect is observed in python.")
print()

sideEffectVariable2 = 75

def testFunctionSideEffectVersion2():
    global sideEffectVariable2
    sideEffectVariable2 = 500
    return sideEffectVariable2


result3 = sideEffectVariable2 + testFunctionSideEffectVersion2() + sideEffectVariable2

# As it can be seen from result3, order of operand evaluation does not change 
# because of side effect effect of functions. It is from left to right as always.

print("RESULT3 (sideEffectVariable2 + testFunctionSideEffectVersion2() + sideEffectVariable2) = " + str(result3))
print()
print("As it can be seen from result3, order of operand evaluation does not change ")
print("because of side effect effect of functions. It is from left to right as always.")
