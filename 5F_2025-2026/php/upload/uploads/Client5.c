/*Esercizio 5
Scrivere il codice in C, di un applicazione Socket CLIENT-SERVER in cui il server riceve in input 2
stringhe e, dopo aver effettuato gli eventuali ed opportuni controlli (se necessari), rispedisce al Client il
messaggio di quale delle due stringhe è + lunga o più corta o se sono uguali.*/
// CLIENT
#include <ctype.h>      //bind
#include <errno.h>      //gestioni errori connessione
#include <netinet/in.h> //definiscono la struttura degli indirizzi
#include <stdio.h>      //std in-out
#include <stdlib.h>     //per utilizzo di certe funzioni:htonl,rand,....
#include <string.h>     //funz. stringhe
#include <sys/socket.h> //funz. accept+bind+listen
#include <sys/types.h>  //funz. accept
#include <unistd.h> // file header che consente l'accesso alle API dello standard POSIX

#define DIM 50
#define SERVERPORT 1450

int main(int argc, char **argv) {

  struct sockaddr_in servizio;

  servizio.sin_family = AF_INET;
  servizio.sin_addr.s_addr = htonl(INADDR_ANY);
  servizio.sin_port = htons(SERVERPORT);

  char str1[DIM], str2[DIM];
  int socketfd;

  socketfd = socket(AF_INET, SOCK_STREAM, 0);

  connect(socketfd, (struct sockaddr *)&servizio, sizeof(servizio));

  printf("Inserisci la prima stringa\n");
  scanf("%s", str1);
  printf("Inserisci la seconda stringa\n");
  scanf("%s", str2);

  write(socketfd, str1, sizeof(str1));
  write(socketfd, str2, sizeof(str2));
  read(socketfd, str1, sizeof(str1));
  read(socketfd, str2, sizeof(str2));

  printf("Stringhe ricevute dal server: %s %s\n", str1, str2);

  close(socketfd);
  return 0;
}