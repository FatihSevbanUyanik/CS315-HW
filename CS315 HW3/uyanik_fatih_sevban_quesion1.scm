;--------------------------------------QUESTION1--------------------------------------
;By defining optional parameters, at the beginning, the programmer is able to add 
;mandatory parameters. After, for adding optional parameters, #!optional needs to be 
;declared. After this declaration, optonal parameters can be added as many as the 
;programmer wants. Below are some sample functions and function calls.

(print "\n\n\n")
(print "-----------EXAMPLE FUNCTION1-----------\n")

;in this function, only optional parameters are available 
;and the funtion tries to print them. If a value for the 
;parameters is not assigned while calling the funtion, the 
;parameters that does not get a value will return or print #f.
(define (example-optional-1 #!optional param1 param2 param3)
        (print "------------------\n")
        (print "Param1: " param1 "\n")
        (print "Param2: " param2 "\n") 
        (print "Param3: " param3 "\n")
        (print "------------------\n"))

;no parameter values are passed.
(example-optional-1)

;only for the first parameter is a value passed.
(example-optional-1 100)

;for the first and second 
;parameter is value passed.
(example-optional-1 100 200)

;for all of the parameters, values are passed.
(example-optional-1 100 200 300)

(print "---------------------------------------\n\n\n")


(print "-----------EXAMPLE FUNCTION2-----------\n")

;in this function, there is one actual parameters 
;which is mandatory and 3 optional parameters. 
;The funtion tries to print them. The mandatory  
;parameter needs to get a value while funtion call. 
;If a value for the optional parameters is 
;not assigned while calling the funtion, the parameters 
;that does not get a value will return or print #f.
(define (example-optional-2 param1 #!optional param2 param3 param4)
        (print "------------------\n")
        (print "Param1: " param1 "\n")
        (print "Param2: " param2 "\n")
        (print "Param3: " param3 "\n")
        (print "Param4: " param4 "\n")
        (print "------------------\n"))

;for the actual parameter, 
;a value is passed.
(example-optional-2 100)

;for the actual parameter,a value 
;is passed and for the first optional 
;parameter a value is passed.
(example-optional-2 100 200)

;for the actual parameter,a value
;is passed and for the first two 
; optional parameters, valued are passed.
(example-optional-2 100 200 300)

;for all of the parameters, values are passed.
(example-optional-2 100 200 300 400)

(print "---------------------------------------\n\n\n")


