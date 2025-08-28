#include <stdio.h>
#include <string.h>

int main() {
    char flag[] = "CTF{0OCBBNIB61AT91F8BNFYZY93N8BILMX9}";
    printf("Enter flag: ");

    char input[100];
    scanf("%99s", input);

    if (strcmp(input, flag) == 0) {
        printf("Correct! The flag is: %s\n", flag);
    } else {
        printf("Wrong password!\n");
    }

    // keep window open
    printf("\nPress ENTER to exit...");
    getchar(); // consume leftover newline
    getchar(); // wait for actual Enter
    return 0;
}
