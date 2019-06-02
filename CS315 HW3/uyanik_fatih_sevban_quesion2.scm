;--------------------------------------QUESTION2--------------------------------------
;After defining optional parameters, we can also assign default values to them. Default
;values are assigned by opening additional paranthesis which indicate the specific value
;The example functions below illustrate how to usse default values.

(print "\n\n\n")
(print "-----------EXAMPLE FUNCTION1-----------\n")

;in this function, only optional parameters are available
;and the funtion tries to print them. In addition, for each
;optional parameter, default value 0 is assigned. If a value
;for the optional parameters is not assigned while calling the
;funtion, the parameters that does not get a value will return
;or print their assigned default values which is 0.
(define (example-default-1 #!optional (param1 0) (param2 0) (param3 0))
        (print "------------------\n")
        (print "Param1: " param1 "\n")
        (print "Param2: " param2 "\n")
        (print "Param3: " param3 "\n")
        (print "------------------\n"))

;in this function call, no value is
;assigned to the optional parameters.
(example-default-1)

;only for the first optional
;parameter, a value is passed.
(example-default-1 100)

;only for the first two optional
;parameters, values are passed.
(example-default-1 100 200)

;only for the first three optional
;parameters, values are passed.
(example-default-1 100 200 300)

(print "---------------------------------------\n\n\n")

(print "-----------EXAMPLE FUNCTION2-----------\n")

;in this function, only optional parameters are available
;and the funtion tries to print them. In addition, except the
;first paameter, default value 0 is assigned to optional
;parameters. If no value is passed for a parameter, then it
;will print its default value. If the parameter does not
;have a default value, it will print the value of #f.
(define (example-default-2 #!optional param1 (param2 0) (param3 0))
        (print "------------------\n")
        (print "Param1: " param1 "\n")
        (print "Param2: " param2 "\n")
        (print "Param3: " param3 "\n")
        (print "------------------\n"))

;in this function call, no value is
;assigned to the optional parameters.
(example-default-2)

;only for the first optional
;parameter, a value is passed.
(example-default-2 100)

;only for the first two optional
;parameters, values are passed.
(example-default-2 100 200)

;for all of the optional
;parameters, values are passed.
(example-default-2 100 200 300)

(print "---------------------------------------\n\n\n")
