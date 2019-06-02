<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>RESULTS</h1>
    
    <?php

    // QUESTION1: What are the location of tests? Pretest, posttest, or both?

    print("<pre>----------------------------------------------------------------------<br></pre>");
    print("<pre>QUESTION1: What are the location of tests? Pretest, posttest, or both?<br></pre>");
    print("<pre>----------------------------------------------------------------------<br></pre>");
    print("<br><br>");


    //////////////////////////////////////OPERATION1///////////////////////////////////////
    //////////////////////////////////////WHILE LOOP///////////////////////////////////////
    print("<pre>--------------------------OPERATION1--------------------------<br></pre>");
    print("<pre>--------------------------WHILE LOOP--------------------------<br></pre>");

    $num = 10;
    $preTestFlag = true;

    while( $num < 10 ) {
        $preTestFlag = false;
        print("<pre>While Loop in PHP is Post Test<br></pre>");
        $num++;
    }
    
    if ($preTestFlag)
        print("<pre>While Loop in PHP is Pre Test<br></pre>");

    print("<pre>--------------------------------------------------------------<br></pre>");
    print("<br><br>");
    ///////////////////////////////////////////////////////////////////////////////////////


    //////////////////////////////////////OPERATION2///////////////////////////////////////
    ////////////////////////////////////DO-WHILE LOOP//////////////////////////////////////
    print("<pre>--------------------------OPERATION2--------------------------<br></pre>");
    print("<pre>-------------------------DO-WHILE LOOP------------------------<br></pre>");
     
    $num = 10;
    $preTestFlag = true;

    do {
        $preTestFlag = false;
        print("<pre>Do-While Loop in PHP is Post Test<br></pre>");
        print("<pre>Value in the loop is " . $num . "<br></pre>");
        $num++;
    } while ($num < 10);

    if ($preTestFlag)
        print("<pre>Do-While Loop in PHP is Pre Test<br></pre>");

    print("<pre>--------------------------------------------------------------<br></pre>");
    print("<br><br>");
    ///////////////////////////////////////////////////////////////////////////////////////
    

    // QUESTION2: What kind of user-located loop control mechanisms are provided?

    print("<pre>--------------------------------------------------------------------------<br></pre>");
    print("<pre>QUESTION2: What kind of user-located loop control mechanisms are provided?<br></pre>");
    print("<pre>--------------------------------------------------------------------------<br></pre>");
    print("<br><br>");

    // In PHP, there is a statement called "break" that enables to exit unconditionally.
    // In addition, there is a statement called "continue" that enables to pass the current loop immediately.

    print("<pre>--------------------------------------------------------------------------------------------------------<br></pre>");
    print("<pre>In PHP, there is a statement called \"break\" that enables to exit unconditionally.                     <br></pre>");
    print("<pre>In addition, there is a statement called \"continue\" that enables to pass the current loop immediately.<br></pre>");
    print("<pre>--------------------------------------------------------------------------------------------------------<br></pre>");
    print("<br><br>");

    //////////////////////////////////////OPERATION3///////////////////////////////////////
    ////////////////////////////////////////BREAK//////////////////////////////////////////
    print("<pre>--------------------------OPERATION3--------------------------<br></pre>");
    print("<pre>----------------------------BREAK-----------------------------<br></pre>");

    $index = 10;
    while ($index > 0) {
        print("<pre>" . $index . "<br></pre>");
        $index--;
    
        # Breaks or exits the loop.
        if ($index == 8)
            break;

    }
    
    print("<pre>Breaked or exited the loop at the value 8.</pre>");
    print("<pre>--------------------------------------------------------------<br></pre>");
    print("<br><br>");
    ///////////////////////////////////////////////////////////////////////////////////////


    //////////////////////////////////////OPERATION4///////////////////////////////////////
    ///////////////////////////////////////CONTINUE////////////////////////////////////////
    print("<pre>--------------------------OPERATION4--------------------------<br></pre>");
    print("<pre>---------------------------CONTINUE---------------------------<br></pre>");
    
    $index = 10;
    while($index > 0) {
        // Passes to next iteration immedately 
        // for the values of 8 and 5.
        if ($index == 8 || $index == 5) {
            $index--;
            continue;   
        }

        print("<pre>" . $index . "<br></pre>");
        $index--;        
    }
     
    print("<pre>Passes to next iteration immedately for the values of 8 and 5.</pre>");
    print("<pre>--------------------------------------------------------------<br></pre>");
    ///////////////////////////////////////////////////////////////////////////////////////
    
    ?>

</body>
</html>