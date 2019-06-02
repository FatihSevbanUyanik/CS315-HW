#include <stdio.h>

int main() {

    // QUESTION1: What are the location of tests? Pretest, posttest, or both?

    printf("\n\n");
    printf("----------------------------------------------------------------------\n");
    printf("QUESTION1: What are the location of tests? Pretest, posttest, or both?\n");
    printf("----------------------------------------------------------------------\n");
    printf("\n\n");


    /////////////////////////////////OPERATION1////////////////////////////////
    /////////////////////////////////WHILE LOOP////////////////////////////////
    printf("---------------------------OPERATION1-------------------------\n");
    printf("---------------------------WHILE LOOP-------------------------\n");

    int num = 10;
    int preTestFlag = 1;

    while( num < 10 ) {
        preTestFlag = 0;
    
        printf("While Loop in C is Post Test\n");
        num++;
    }

    if (preTestFlag)
        printf("While Loop in C is Pre Test\n");

    printf("--------------------------------------------------------------\n");
    printf("\n\n");
    ///////////////////////////////////////////////////////////////////////////
    

    /////////////////////////////////OPERATION2////////////////////////////////
    ///////////////////////////////DO-WHILE LOOP///////////////////////////////
    printf("---------------------------OPERATION2-------------------------\n");
    printf("-------------------------DO-WHILE LOOP------------------------\n");

    int num2 = 10;
    int preTestFlag2 = 1;

    do {
        preTestFlag2 = 0;
        printf("Do-While Loop in C is Post Test\n");
        printf("Value in the loop is %d\n", num);
        num2 += 1;
    } while (num < 10);

    if (preTestFlag2)
        printf("Do-While Loop in C is Pre Test\n");
    
    printf("--------------------------------------------------------------\n");
    printf("\n\n");
    ///////////////////////////////////////////////////////////////////////////


    // QUESTION2: What kind of user-located loop control mechanisms are provided?

    // In C, there is a statement called "break" that enables to exit unconditionally.
    // In addition, there is a statement called "continue" that enables to pass the current loop immediately.

    printf("--------------------------------------------------------------------------\n");
    printf("QUESTION2: What kind of user-located loop control mechanisms are provided?\n");
    printf("--------------------------------------------------------------------------\n");
    printf("\n\n");

    printf("--------------------------------------------------------------------------------------------------------\n");
    printf("In C, there is a statement called \"break\" that enables to exit unconditionally.\n");
    printf("In addition, there is a statement called \"continue\" that enables to pass the current loop immediately.\n");
    printf("--------------------------------------------------------------------------------------------------------\n");
    printf("\n\n");


    //////////////////////////////////OPERATION3///////////////////////////////
    ////////////////////////////////////BREAK//////////////////////////////////
    printf("---------------------------OPERATION3-------------------------\n");
    printf("-----------------------------BREAK----------------------------\n");

    int index = 10;
    while (index > 0) {
        printf("%d\n", index);
        index -= 1;

        // Breaks or exits the loop.
        if (index == 8)
            break;
    }
    
    printf("Breaked or exited the loop at the value 8.\n");
    printf("--------------------------------------------------------------\n");
    printf("\n\n");
    ///////////////////////////////////////////////////////////////////////////


    //////////////////////////////////OPERATION4///////////////////////////////
    //////////////////////////////////CONTINUE/////////////////////////////////
    printf("---------------------------OPERATION4-------------------------\n");
    printf("----------------------------CONTINUE--------------------------\n");

    int index2 = 10;
    while (index2 > 0) {
        // Passes to next iteration immedately 
        // for the values of 8 and 5.
        if (index2 == 8 || index2 == 5) {
            index2 -= 1;
            continue;
        }

        printf("%d\n", index2);
        index2 -= 1;
    }

    printf("Passes to next iteration immedately for the values of 8 and 5.\n");
    printf("--------------------------------------------------------------\n");
    ///////////////////////////////////////////////////////////////////////////

}