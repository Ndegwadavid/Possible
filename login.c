#include <stdio.h>
#include <string.h>

int main() {
    char username[30], password[30];
    int is_authenticated = 0;

    printf("Login Page\n");
    printf("-----------\n");

    do {
        printf("Username: ");
        scanf("%s", username);

        printf("Password: ");
        scanf("%s", password);

        // Check if the username and password are correct
        if (strcmp(username, "myusername") == 0 && strcmp(password, "mypassword") == 0) {
            is_authenticated = 1;
            printf("Login Successful!\n");
        } else {
            printf("Invalid username or password. Try again.\n");
        }
    } while (!is_authenticated);

    // Continue with the rest of the program logic after successful login

    return 0;
}
