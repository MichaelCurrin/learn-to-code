/*
 * Variables in C.
 *
 * For more info, see:
 *     https://www.tutorialspoint.com/cprogramming/c_data_types.htm
 *
 * Types:
 * - Basic Types
 *  - integer
 *  - float
 * - Enumerate Types
 * - Void
 * - Derived Types:
 *  - Pointer types,
 *  - Array types,
 *  - Structure types,
 *  - Union types and
 *  - Function types.
 *
 * Note on booleans:
 *  - https://stackoverflow.com/questions/1921539/using-boolean-values-in-c
 *  - https://stackoverflow.com/questions/1608318/is-bool-a-native-c-type
 *      "C99 added a builtin _Bool data type (see Wikipedia for details),
 *      and if you #include <stdbool.h>, it provides bool as a macro to _Bool.""
 *
 *
 * TODO: add array and struct.
 *
 */
#include <stdio.h>
#include <float.h>


void text_variables() {
    /* Available character variables, with their min and max values as well as
     * their storage size.
     * Note that C does not have a string, but rather uses an array of
     * characters.
     */

    // Character - 1 byte
    char c_a = -128;
    char c_b = 127;
    unsigned char c_c = 0;
    unsigned char c_d = 255;

    printf("%c\n", c_a);
    printf("%c\n", c_b);
    printf("%c\n", c_c);
    printf("%c\n\n", c_d);
}


void numeric_variables() {
    /* Integers and float-point types are available.
     * See them below, their min and max values as well as their storage size.
     */

    // Short integer - 1 byte.
    short int si_a = -128;
    short int si_b = 127;
    unsigned short int si_c = 0;
    unsigned short int si_d = 255;

    printf("%d\n", si_a);
    printf("%d\n", si_b);
    printf("%d\n", si_c);
    printf("%d\n\n", si_d);


    // Integer - 2 bytes.
    int i_a = -32768;
    int i_b = 32767;
    unsigned int i_c = 0;
    unsigned int i_d = 65535;

    printf("%d\n", i_a);
    printf("%d\n", i_b);
    printf("%d\n", i_c);
    printf("%d\n\n", i_d);


    // Long integer - 4 bytes.
    long int li_a = -2147483648;
    long int li_b = -2147483647;
    unsigned long int li_c = 0;
    unsigned long int li_d = 4294967295;

    printf("%d\n", li_a);
    printf("%d\n", li_b);
    printf("%d\n", li_c);
    printf("%d\n\n", li_d);


    // Float - 4 bytes.
    // 6 decimal places.
    float f_a;
    printf("%f\n\n", f_a);

    // Double precision float - 8 bytes.
    // 15 decimal places.
    double d_a;
    printf("%f\n\n", d_a);

    // Extended double precision float - 10 bytes.
    // 19 decimal places.
    long double ld_a;
    printf("%f\n\n", ld_a);
}


void variable_names() {
    /*
     * Examples of valid variable names.
     *
     * Starting with an underscore should be avoided.
     * - Indentifiers beginning with an underscore are reserved.
     * - Indentifiers with beginning an an underscore and starting with a
     *   lower case letter are reserved for file scope identifies.
     */
    int a;
    int abc;
    int aBC;
    int a_bc;
}


void sizes() {
    // From:
    //     https://www.tutorialspoint.com/cprogramming/c_data_types.htm
    printf("Storage size for int : %d \n", sizeof(int));
    printf("Storage size for float : %d \n", sizeof(float));
    printf("Minimum float positive value: %E\n", FLT_MIN );
    printf("Maximum float positive value: %E\n", FLT_MAX );
    printf("Precision value: %d\n", FLT_DIG );
}

void main()
{
    text_variables();
    numeric_variables();
    variable_names();
    sizes();
}
