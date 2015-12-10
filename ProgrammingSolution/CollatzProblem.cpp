/**
Problem No.2:   Collatz Problem
===================================

Key points:
-----------

1.  In example, 13 -> 40 -> 20 -> 10 -> 5 -> 16 -> 8 -> 4 -> 2 -> 1 .
    I noted that if we have calculated up to 12 numbers, then when we try to find answer for 13,
    at 3rd iteration, sequence after 10 is already calculated for number = 10. Therefore, it results
    as condition:
    if(number >= currentIndex)
    {
        matrix[number] = extraTerms + matrix[currentIndex] ;
    }

    Therfore, (terms for 13) = 3 + (terms for 10)

2.  We will need Unsigned Long instead of Long for storing the Numbers, beacuse Numbers [after (3*N + 1)] may overflow the 32-bit limit.

3.  Note that: this algorithm is dynamic, it actually selects the largest no. of terms from 1 million numbers!

*/

#include<stdio.h>
int matrix[1000001]={-1};

int main()
{
    unsigned long Number,i; //  As discussed in key points #2
    int maxTerms=0, maxNumber = 0;
    matrix[1]=1;
    for(i = 2; i <= 1000000; i++)
    {
        Number = i;
        int extraTerms = 0;

        while(Number!=1 && Number>=i)   //  As discussed in key points #1
        {
            extraTerms++;
            //  If N is even, N = N/2
            if((Number%2)==0)
            {
                Number = Number/2;
            }
            //  If N is odd, N = (3*N + 1)
            else
            {
                Number = (3*Number) + 1;
            }
        }

        matrix[i] = extraTerms + matrix[Number];    //  As discussed in key points #1

        if(matrix[i] > maxTerms)
        {
            maxTerms = matrix[i];
            maxNumber = i;
        }
    }
    printf("Sequence starting at %ld and ending with 1 contains: %ld terms which is max  terms under 1 million\n",maxNumber,maxTerms);


}
