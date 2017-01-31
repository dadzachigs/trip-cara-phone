#include <stdio.h>
int main ()
{
	int r;
	float pi=3.14,area,ci;
	printf("enter radious of cicle\t");
	scanf("%d", &r);
	area=pi*r*r;
	printf("area of a cicle is %f\n", area);
	ci=2*pi*r;
	printf("circumference is %f\n", ci);
	
	return 0; 
}
