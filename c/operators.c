/*
 * Operators in C.
 */
#include <stdio.h>


void arithmetic_operators() {
    // Spaces are optional.
    int a = 3 + 2;
    int b = 3 - 2;
    int c = 3*2;
    int e = 3/2;
    int f = 3 % 2;
}


void increment_decrement_operators() {
    int a = 1;
    int b = 2;
    a++;
    b--;
    printf("%d\n", a);
    printf("%d\n", b);

    // Store value after the action by using the opereator after
    // the variable, otherwise store value before the action by including it
    // before the variable.
    a = 9;
    b = a++ + 5;
    // => a=10 b=14
    a = 3;
    b = ++a +6;
    // => a=4 b = 9
}


void relational_operators(){
    // See:
    //     https://www.tutorialspoint.com/cprogramming/c_relational_operators.htm

    // There is no boolean type in C, but true evaluates as 1 and false as 0.
    int a = 21;
    int b = 10;

    int c;
    if (a > b) {
        c = 1;
    }
    else {
        c = 0;
    }
    // Equivalent to above.
    c = (a > b);

    // Check equal to.
    if(a == b) {
       printf("Line 1 - a is equal to b\n" );
    } else {
       printf("Line 1 - a is not equal to b\n" );
    }

    // Check not equal to.
    if(a != b) {
       printf("Line 1 - a is equal to b\n" );
    } else {
       printf("Line 1 - a is not equal to b\n" );
    }

    // Check less than.
    if (a < b) {
       printf("Line 2 - a is less than b\n" );
    } else {
       printf("Line 2 - a is not less than b\n" );
    }

    // Check greater than or equal to.
    if (a >= b) {
       printf("Line 3 - a is greater than b\n" );
    } else {
       printf("Line 3 - a is not greater than b\n" );
    }
}


void logic_operators() {
    int a = 21;
    int b = 10;

    // AND
    if((a >= b) && (a == 21)) {
       printf("Line 1 - a is greater b and a equal to 21\n" );
    } else {
       printf("Line 1 - a is not greater b or a not equal to 2\n" );
    }

    // OR
    if((a >= b) || (a == 21)) {
       printf("Line 1 - a is greater b or a is equal to 21\n" );
    } else {
       printf("Line 1 - a is not greater a or b is equal to 2\n" );
    }
}


void casting_operators() {
    int sum = 100;
    (float) sum;
    (int) sum;
}


void bitwise_operators() {
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
}


void assignment_operators() {
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


void main() {
    arithmetic_operators();
    increment_decrement_operators();
    relational_operators();
    logic_operators();
    casting_operators();
    bitwise_operators();
    assignment_operators();
}
