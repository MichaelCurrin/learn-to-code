/*
 * Operators in C.
 */
#include <stdio.h>


void main() {
    // Arithmetic.

    int a = 3+2;
    int b = 3-2;
    int c = 3*2;
    int e = 3/2;
    int f = 3 % 2;


    // Increment and decrement operators.
    a++;
    b--;
    printf("%d\n", a);
    printf("%d\n", b);

    a = 9;
    b = a++ + 5;
    // => a=10 b=14
    a = 3;
    b = ++a +6;
    // => a=4 b = 9


    // Relational operators.
    // See:
    //     https://www.tutorialspoint.com/cprogramming/c_relational_operators.htm
    a = 21;
    b = 10;
    if( a == b ) {
       printf("Line 1 - a is equal to b\n" );
    } else {
       printf("Line 1 - a is not equal to b\n" );
    }

    if( a != b ) {
       printf("Line 1 - a is equal to b\n" );
    } else {
       printf("Line 1 - a is not equal to b\n" );
    }


    if ( a < b ) {
       printf("Line 2 - a is less than b\n" );
    } else {
       printf("Line 2 - a is not less than b\n" );
    }

    if ( a >= b ) {
       printf("Line 3 - a is greater than b\n" );
    } else {
       printf("Line 3 - a is not greater than b\n" );
    }


    // Logical operators.
    // AND
    if ( ( a >= b ) && ( a == 21 ) ) {
       printf("Line 1 - a is greater b and a equal to 21\n" );
    } else {
       printf("Line 1 - a is not greater b or a not equal to 2\n" );
    }
    // OR
    if ( ( a >= b ) || ( a == 21 ) ) {
       printf("Line 1 - a is greater b or a is equal to 21\n" );
    } else {
       printf("Line 1 - a is not greater a or b is equal to 2\n" );
    }

    // Casting operators.
    int sum = 100;
    (float) sum;
    (int) sum;

    // Bitwise operators.
    /*
     * See:
     *    https://www.tutorialspoint.com/cprogramming/c_operators.htm
     *
     * ~ one's complement
     * & bitwise AND
     * | bitwise OR
     * ^ bitwise XOR
     * << left shift (binary multiply by 2)
     * >> right shift (binary divide by 2)
     */
    int A = ~2;
    int B = 60 & 13;
    int C = 60 | 13;
    int D = 60 ^ 13;
    int E = 60 << 13;
    float F = 60 >> 13;

    // Assignment operators.
    int assign = 1;
    assign += 1;
    assign -= 1;
    assign *= 10;
    assign /= 10;
    assign %= 10;
    assign >>= 1;
    assign <<= 1;
    assign &= 1;
    assign |= 1;
    assign ^= 1;
}
