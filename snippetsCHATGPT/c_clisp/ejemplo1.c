(defparameter *hechos* '((perro mamifero)
                         (gato mamifero)
                         (aguila ave)))

(defun buscar (x)
  (cdr (assoc x *hechos*)))

(load "conocimiento.lisp")




#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <clisp/clisp.h>

int main(int argc, char **argv) {
  cl_object conocimiento, buscar, x, resultado;

  /* Inicializar CLISP */
  cl_boot(argc, argv);

  /* Cargar la base de conocimiento */
  conocimiento = cl_load_file("conocimiento.fasl", 0);

  /* Obtener la función "buscar" */
  buscar = cl_symbol_value(cl_symbol("buscar"));

  /* Llamar a la función con un argumento */
  x = cl_cstring_to_object("perro");
  resultado = cl_funcall(2, buscar, x);

  /* Imprimir el resultado */
  printf("Resultado: %s\n", cl_string(resultado));

  /* Salir de CLISP */
  cl_shutdown();
  return 0;
}



gcc -o programa programa.c -I/usr/include/clisp -L/usr/lib -lclisp -lcffi
