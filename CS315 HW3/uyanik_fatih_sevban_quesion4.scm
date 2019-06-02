;--------------------------QUESTION4--------------------------
;In lisp keyword parameters can also be added. Before declaring 
;keyword parameters, #!key needs to be added. Parameters that 
;contain a key needs to be called with their corresponding key.
;The folowings are examples of keyword parameters.

(print "\n\n\n")
(print "--------------EXAMPLE FUCTION1--------------\n")

;in this function, param1 and param2 are actual parameters
;and param3 and param4 are parameters containing key. These 
;parameters needs to be called with their corresponding key.
(define (example-key-1 param1 param2 #!key param3 param4) 
        (print "-------------------\n")
        (print "Param1 : " param1 "\n")
        (print "Param2 : " param2 "\n")
        (print "Param3 : " param3 "\n")
        (print "Param4 : " param4 "\n")
        (print "-------------------\n"))

;this function passes values for only actual 
;parameters because it does not uses any keys 
;for the parameters containing a key. The 
;parameters containing key will output #f.
(example-key-1 100 200)


;this function passes values 
;for actual and key parameters.
(example-key-1 100 200 param3: 300)


;this function passes values
;for actual and key parameters.
(example-key-1 100 200 param3: 300 param4: 400)

(print "--------------------------------------------\n\n\n")


(print "--------------EXAMPLE FUCTION2--------------\n")

;in this function, param1 and param2 are actual parameters and 
;param3 and param4 are parameters containing key. In addition, 
;a default value is assigned for the key parameter param3. 
(define (example-key-2 param1 param2 #!key (param3 1000) param4)
        (print "-------------------\n")
        (print "Param1 : " param1 "\n")
        (print "Param2 : " param2 "\n")
        (print "Param3 : " param3 "\n")
        (print "Param4 : " param4 "\n")
        (print "-------------------\n"))

;this function passes values for only actual
;parameters because it does not uses any keys
;for the parameters containing a key. The
;parameters containing key will output #f.
(example-key-2 100 200)


;this function passes values
;for actual and key parameters.
(example-key-2 100 200 param4: 300)


;this function passes values
;for actual and key parameters.
(example-key-2 100 200 param3: 300 param4: 400)

(print "--------------------------------------------\n\n\n")
