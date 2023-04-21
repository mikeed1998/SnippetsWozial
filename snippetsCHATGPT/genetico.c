/*
Los algoritmos de IA pueden tener diferentes niveles de complejidad, dependiendo de su propósito y la cantidad de recursos computacionales necesarios. Aquí hay una lista de algunos algoritmos de IA comunes, ordenados de menor a mayor complejidad:

Regresión lineal: un algoritmo simple que busca una relación lineal entre dos variables.

K-Nearest Neighbors (K-NN): un algoritmo que busca los "vecinos" más cercanos a un punto de datos en un conjunto de entrenamiento para predecir una etiqueta o valor para un punto de datos nuevo.

Árboles de decisión: un algoritmo que construye un árbol de decisiones a partir de un conjunto de datos para clasificar nuevos datos.

Redes neuronales artificiales: un conjunto de algoritmos inspirados en la estructura del cerebro humano que se utilizan para clasificación, regresión, análisis de imágenes y procesamiento del lenguaje natural, entre otros.

Algoritmos de clustering: una familia de algoritmos que agrupan datos similares en grupos o clústeres.

Máquinas de vectores de soporte (SVM): un algoritmo que encuentra el hiperplano que mejor separa dos clases diferentes de datos.

Algoritmos genéticos: una técnica de optimización que imita el proceso de evolución biológica para encontrar la mejor solución a un problema.

Redes neuronales convolucionales (CNN): una variante de las redes neuronales que se utilizan principalmente en aplicaciones de visión por computadora para detectar patrones en imágenes.

Redes neuronales recurrentes (RNN): una variante de las redes neuronales que se utilizan para procesar secuencias de datos, como texto o señales de tiempo.

Redes neuronales adversarias generativas (GAN): un conjunto de algoritmos que se utilizan para generar nuevas muestras de datos que son similares a un conjunto de entrenamiento dado.

Cabe destacar que la complejidad de cada uno de estos algoritmos puede variar significativamente según el tamaño y complejidad del conjunto de datos de entrada y los objetivos específicos del problema que se está abordando.
*/

#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#include <math.h>

#define POPULATION_SIZE 100
#define NUM_GENERATIONS 1000
#define MUTATION_RATE 0.1
#define CROSSOVER_RATE 0.8
#define TOURNAMENT_SIZE 5

double evaluate(double x) {
    return sin(x) + sin(10 * x / 3) + log(x) - 0.84 * (x * x) - 8;
}

double random_double(double min, double max) {
    double range = max - min;
    double r = (double)rand() / RAND_MAX;
    return min + r * range;
}

int tournament_selection(double *population, double *fitness) {
    int winner = rand() % POPULATION_SIZE;
    for (int i = 1; i < TOURNAMENT_SIZE; i++) {
        int contender = rand() % POPULATION_SIZE;
        if (fitness[contender] > fitness[winner]) {
            winner = contender;
        }
    }
    return winner;
}

void crossover(double *parent1, double *parent2, double *child1, double *child2) {
    if ((double)rand() / RAND_MAX < CROSSOVER_RATE) {
        double alpha = random_double(0, 1);
        *child1 = alpha * *parent1 + (1 - alpha) * *parent2;
        *child2 = alpha * *parent2 + (1 - alpha) * *parent1;
    } else {
        *child1 = *parent1;
        *child2 = *parent2;
    }
}

void mutate(double *child) {
    if ((double)rand() / RAND_MAX < MUTATION_RATE) {
        double delta = random_double(-0.1, 0.1);
        *child += delta;
    }
}

int main() {
    srand(time(NULL));

    double population[POPULATION_SIZE];
    double fitness[POPULATION_SIZE];

    for (int i = 0; i < POPULATION_SIZE; i++) {
        population[i] = random_double(0, 10);
        fitness[i] = evaluate(population[i]);
    }

    for (int g = 0; g < NUM_GENERATIONS; g++) {
        double new_population[POPULATION_SIZE];

        for (int i = 0; i < POPULATION_SIZE; i += 2) {
            int parent1 = tournament_selection(population, fitness);
            int parent2 = tournament_selection(population, fitness);
            double child1, child2;
            crossover(&population[parent1], &population[parent2], &child1, &child2);
            mutate(&child1);
            mutate(&child2);
            new_population[i] = child1;
            new_population[i+1] = child2;
        }

        for (int i = 0; i < POPULATION_SIZE; i++) {
            population[i] = new_population[i];
            fitness[i] = evaluate(population[i]);
        }

        double best_fitness = -INFINITY;
        double best_solution;
        for (int i = 0; i < POPULATION_SIZE; i++) {
            if (fitness[i] > best_fitness) {
                best_fitness = fitness[i];
                best_solution = population[i];
            }
        }

        printf("Generation %d: best solution = %f, fitness = %f\n", g, best_solution, best_fitness);
    }

    return 0;
}