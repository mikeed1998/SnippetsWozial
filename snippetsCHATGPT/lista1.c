#include <stdio.h>
#include <stdlib.h>

typedef struct Node {
    void* data;
    struct Node* next;
} Node;

Node* createNode(void* data) {
    Node* newNode = (Node*)malloc(sizeof(Node));
    newNode->data = data;
    newNode->next = NULL;
    return newNode;
}

void addNode(Node** head, void* data) {
    Node* newNode = createNode(data);
    newNode->next = *head;
    *head = newNode;
}

void printList(Node* head) {
    while (head != NULL) {
        printf("%p ", head->data);
        head = head->next;
    }
    printf("\n");
}

int main() {
    Node* head = NULL;
    int a = 10;
    float b = 3.14;
    char c = 'x';
    addNode(&head, &a);
    addNode(&head, &b);
    addNode(&head, &c);
    printList(head);
    return 0;
}