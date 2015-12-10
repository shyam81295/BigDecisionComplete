/**
Problem No.2:   Egyptian Fraction
===================================

Key points:
-----------

1.  I have used greedy method as mentioned in the question. One thing, I want to state that accuracy gets affected due to 64-bit limit
    [max limit to store a number is 18,446,744,073,709,551,615 ~ 1.8 * 10^19 ].
    Hence, when we find Egyptian fraction of numbers like 5/121.
    we get, 5/121 = 1/25 + 1/757 + 1/763309 + 1/873960180913 + (a 19-digit number) [ because 64-bit ~= 10 ^19]

2.  I used Unsigned Long Long instead of Long/Int for storing the Numbers, so to get as much accurate answer as possible.

*/

#include <stdio.h>
void egyptFraction(unsigned long long num, unsigned long long den)
{
    // If either numerator or denominator is 0
    if (num == 0 || den == 0)
    {
        printf("Undefined");
        return;
    }
    // If denominator divides numerator, then the given number
    // is not fraction
    if (num%den == 0)
    {
        printf("%llu",(num/den));
        return;
    }

    // If numerator divides denominator, then simple division
    // makes the fraction in 1/n form
    if (den%num == 0)
    {
        printf("1/%llu",(den/num));
        return;
    }

    // If numerator is more than denominator
    if (num > den)
    {
        printf("%llu + ",(num/den));
        egyptFraction(num%den, den);
        return;
    }

    //  normal case
    unsigned long long n = (den/num) + 1;
    printf("1/%llu + ",n);

    egyptFraction((num*n)-den, den*n);
 }

int main()
{
    unsigned long long num , den;
    scanf("%llu %llu",&num,&den);
    printf("Egyptian Fraction Representation of %llu/%llu is\n",num,den);
    egyptFraction(num, den);
    printf("\n");
    return 0;
}
