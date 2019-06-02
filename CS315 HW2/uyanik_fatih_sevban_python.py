"""
QUESTION1: What are the location of tests? Pretest, posttest, or both?
"""

print()
print()
print("----------------------------------------------------------------------")
print("QUESTION1: What are the location of tests? Pretest, posttest, or both?")
print("----------------------------------------------------------------------")


##############################OPERATION1###############################
##############################WHILE LOOP###############################
print()
print()
print("--------------------------OPERATION1--------------------------")
print("--------------------------WHILE LOOP--------------------------")

num = 10
pretestFlag = True

while( num < 10 ):
    pretestFlag = False
    print("While Loop in Python is Post Test")
    num += 1

if (pretestFlag):
    print("While Loop in Python is Pre Test")

print("--------------------------------------------------------------")
#######################################################################


"""
QUESTION2: What kind of user-located loop control mechanisms are provided?
"""

print()
print()
print("--------------------------------------------------------------------------")
print("QUESTION2: What kind of user-located loop control mechanisms are provided?")
print("--------------------------------------------------------------------------")

print()
print()
print("------------------------------------------------------------------------------------------------------")
print('In python, there is a statement called "break" that enables to exit unconditionally.')
print('In addition, there is a statement called "continue" that enables to pass the current loop immediately.')
print("------------------------------------------------------------------------------------------------------")


# In python, there is a statement called "break" that enables to exit unconditionally.
# In addition, there is a statement called "continue" that enables to pass the current loop immediately.

##############################OPERATION2###############################
#################################BREAK#################################

print()
print()
print("--------------------------OPERATION2--------------------------")
print("-----------------------------BREAK----------------------------")

index = 10
while (index > 0):
    print(index)
    index -= 1

    # Breaks or exits the loop.
    if index == 8:
        break

print("Breaked or exited the loop at the value 8.")
print("--------------------------------------------------------------")
#######################################################################


##############################OPERATION3###############################
###############################CONTINUE################################
print()
print()
print("--------------------------OPERATION3--------------------------")
print("---------------------------CONTINUE---------------------------")

index = 10
while (index > 0):
    # Passes to next iteration immedately 
    # for the values of 8 and 5.
    if index == 8 or index == 5:
        index -= 1
        continue

    print(index)
    index -= 1

print("Passes to next iteration immedately for the values of 8 and 5.")
print("--------------------------------------------------------------")
#######################################################################