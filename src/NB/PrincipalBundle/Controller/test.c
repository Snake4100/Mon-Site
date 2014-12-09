#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main(int argc, char *argv[]) 
{
	if ( argc != 3) {
		printf("Usage:\
		%s Integer1 Integer2\
		",argv[0]);
	} 
	else {
		printf("%s + %s = %d\
		",argv[1],argv[2], atoi(argv[1])+atoi(argv[2]));
	}
	return 0;
}