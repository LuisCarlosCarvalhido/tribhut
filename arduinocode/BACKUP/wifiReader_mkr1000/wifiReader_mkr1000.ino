

/*

 This example  prints the WiFi shield's MAC address, and
 scans for available WiFi networks using the WiFi shield.
 Every ten seconds, it scans again. It doesn't actually
 connect to any network, so no encryption scheme is specified.

 Circuit:
 * WiFi shield attached

 created 13 July 2010
 by dlf (Metodo2 srl)
 modified 21 Junn 2012
 by Tom Igoe and Jaymes Dec
 */


#include <SPI.h>
#include <WiFi101.h>

int incomingByte=0; //for incomming serial data

void setup() {
  //Initialize serial and wait for port to open:
  Serial.begin(9600);
  Serial1.begin(9600);

}

void loop() {
  delay(1000);


  String content = "";
  char character;

    while(Serial1.available()) {
        character = Serial1.read();
        content.concat(character);
    }
  
    if (content != "") {
      Serial.println(content);
    }
}


