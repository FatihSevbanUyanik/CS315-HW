
# QUESTION1: What are the location of tests? Pretest, posttest, or both?

print "\n\n";
print "----------------------------------------------------------------------\n";
print "QUESTION1: What are the location of tests? Pretest, posttest, or both?\n";
print "----------------------------------------------------------------------\n";
print "\n\n";


#################################OPERATION1#################################
#################################WHILE LOOP#################################
print "-----------------------------OPERATION1--------------------------\n";
print "-----------------------------WHILE LOOP--------------------------\n";

$num = 10;
$preTestFlag = 1;

while( $num < 10 ) {
    $main::preTestFlag = 0;
    print "While Loop in Perl is Post Test\n";
    $main::num++;
}
    
if ($preTestFlag) {
    print "While Loop in Perl is Pre Test\n";
}

print "----------------------------------------------------------------\n";
print "\n\n";
############################################################################



#################################OPERATION2#################################
###############################DO-WHILE LOOP################################
print "-----------------------------OPERATION2--------------------------\n";
print "---------------------------DO-WHILE LOOP-------------------------\n";
     
$num = 10;
$preTestFlag = 1;

do {
    $main::preTestFlag = 0;
    print "Do-While Loop in Perl is Post Test\n";
    print "Value in the loop is " . $num . "\n";
    $num++;
} while ($num < 10);

if ($preTestFlag) {
    print "Do-While Loop in Perl is Pre Test\n";
}

print "----------------------------------------------------------------\n";
print "\n\n";
############################################################################
    

# QUESTION2: What kind of user-located loop control mechanisms are provided?

# In Perl, there is a statement called "break" that enables to exit unconditionally.
# In addition, there is a statement called "continue" that enables to pass the current loop immediately.

print "--------------------------------------------------------------------------\n";
print "QUESTION2: What kind of user-located loop control mechanisms are provided?\n";
print "--------------------------------------------------------------------------\n";
print "\n\n";

print "--------------------------------------------------------------------------------------------------------\n";
print "In Perl, there is a statement called \"break\" that enables to exit unconditionally.\n";
print "In addition, there is a statement called \"continue\" that enables to pass the current loop immediately.\n";
print "--------------------------------------------------------------------------------------------------------\n";
print "\n\n";


#################################OPERATION3#################################
###################################BREAK####################################
print "-----------------------------OPERATION3--------------------------\n";
print "-------------------------------BREAK-----------------------------\n";

$index = 10;
while ($index > 0) {
    print "" . $index . "\n";
    $index--;
    
    # Breaks or exits the loop.
    if ($index == 8) {
        last;
    }
}

print "Breaked or exited the loop at the value 8.\n";
print "----------------------------------------------------------------\n";
print "\n\n";
############################################################################


#################################OPERATION4#################################
##################################CONTINUE##################################
print "-----------------------------OPERATION4--------------------------\n";
print "------------------------------CONTINUE---------------------------\n";
    
$index = 10;
while($index > 0) {
    print $index . "\n";
    $index--;        
} continue {
    # Passes to next iteration immedately 
    # for the values of 8 and 5.
    if ($index == 8 || $index == 5) {
        $index--;
    }
}

print "Passes to next iteration immedately for the values of 8 and 5.\n";
print "----------------------------------------------------------------\n";
############################################################################