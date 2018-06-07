
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



char ssid[] = "Xperia XA1_f9e2";        // your network SSID (name)
char pass[] = "Hutchinson45120";       // your network password (use for WPA, or use as key for WEP)



int status = WL_IDLE_STATUS;

WiFiClient client;

const int GMT = 2; //change this to adapt it to your time zone
char servername[]="tribhut.000webhostapp.com";//server name

void setup() {
  //Initialize serial and wait for port to open:
  Serial.begin(9600);
  Serial1.begin(9600);

  // check if the WiFi module works
  if (WiFi.status() == WL_NO_SHIELD) {
    Serial.println("WiFi shield not present");
    // don't continue:
    while (true);
  }

  // attempt to connect to WiFi network:
  while ( status != WL_CONNECTED) {
    Serial.print("Attempting to connect to SSID: ");
    Serial.println(ssid);
    // Connect to WPA/WPA2 network. Change this line if using open or WEP network:
    status = WiFi.begin(ssid, pass);

    // wait 10 seconds for connection:
    delay(10000);
  }

  // you're connected now, so print out the status:
  printWiFiStatus();

  /*rtc.begin();

  unsigned long epoch;
  int numberOfTries = 0, maxTries = 6;
  do {
    epoch = WiFi.getTime();
    numberOfTries++;
  }
  while ((epoch == 0) || (numberOfTries > maxTries));

  if (numberOfTries > maxTries) {
    Serial.print("NTP unreachable!!");
    while (1);
  }
  else {
    Serial.print("Epoch received: ");
    Serial.println(epoch);
    rtc.setEpoch(epoch);

    Serial.println();
  }
  */

  connect();
}

void loop() {

  client.println("inside loop");
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


void connect(){
    Serial.println("\nStarting connection...");
    // if you get a connection, report back via serial:
    if (client.connect(servername, 80)) {
      Serial.println("connected");
      // Make a HTTP request:
      client.println("GET / HTTP/1.1");
      client.println("Host: tribhut.000webhostapp.com");
      client.println("Connection: close");
      client.println();
    }
}




void printWiFiStatus() {
  // print the SSID of the network you're attached to:
  Serial.print("SSID: ");
  Serial.println(WiFi.SSID());

  // print your WiFi shield's IP address:
  IPAddress ip = WiFi.localIP();
  Serial.print("IP Address: ");
  Serial.println(ip);

  // print the received signal strength:
  long rssi = WiFi.RSSI();
  Serial.print("signal strength (RSSI):");
  Serial.print(rssi);
  Serial.println(" dBm");
}



