; -------------------------QUESTION3-------------------------
; The parameter "param1" is an actual parameter and gets the
; first arguement, whereas, the parameter "param2" gets the
; rest of the passed values as a list.


; this function outputs
; the content in a list
(define (printList mList)
        (cond ((null? mList) (print "\n"))
              (else (print (car mList) " ") (printList (cdr mList)))))


(print "\n\n\n")
(print "-------------------EXAMPLE FUNCTION1-------------------\n")

; prints the actual parameter(param1) as it is
; and the rest parameter(param2) as a list.
(define (example-rest-1 param1 . param2)
        (print "------------------\n")
        (print "Param1: " param1 "\n")
        (print "Param2: ")
        (printList param2)
        (print "------------------\n"))

; in this function call, the first parameter 10
; is counted as param1 and the rest parameter
; param2 gets the remaining parameters as list.
(example-rest-1 10 70 20)


; in this function call, the first parameter 80
; is counted as param1 and the rest parameter
; param2 gets the remaining parameter as list.
(example-rest-1 80 70)


; in this function call, the first parameter 90
; is counted as param1 and the rest parameter param2
; will be an empty list because no values are passed.
(example-rest-1 90)


; in this function call, the first parameter 10
; is counted as param1 and the rest parameter
; param2 gets the remaining parameters as list.
(example-rest-1 90 50 66 45 22 35 69)

(print "-------------------------------------------------------\n\n\n")
