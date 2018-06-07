/*
  Simple POST client for ArduinoHttpClient library
  Connects to server once every five seconds, sends a POST request
  and a request body
 
  created 14 Feb 2016
  by Tom Igoe
  
  this example is in the public domain
 */
 
#include <SPI.h>
#include <ArduinoHttpClient.h>
#include <WiFi101.h>


///////please enter your sensitive data in the Secret tab/arduino_secrets.h
/////// Wifi Settings ///////
char ssid[] = "Xperia XA1_f9e2";
char pass[] = "Hutchinson45120";


char serverAddress[] = "tribhut.000webhostapp.com";  // server address
int port = 80;

WiFiClient wifi;
HttpClient client = HttpClient(wifi, serverAddress, port);
int status = WL_IDLE_STATUS;
String response;
int statusCode = 0;

void setup() {
  delay(5000);
  Serial.begin(9600);
  Serial1.begin(9600);
  while ( status != WL_CONNECTED) {
    Serial.print("Attempting to connect to Network named: ");
    Serial.println(ssid);                   // print the network name (SSID);

    // Connect to WPA/WPA2 network:
    status = WiFi.begin(ssid, pass);
  }

  // print the SSID of the network you're attached to:
  Serial.print("SSID: ");
  Serial.println(WiFi.SSID());

  // print your WiFi shield's IP address:
  IPAddress ip = WiFi.localIP();
  Serial.print("IP Address: ");
  Serial.println(ip);
  Serial.println("Connected.");
  Serial.println();
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
      updateWebDatabase(content);
    }
}

void updateWebDatabase(String postData){
  Serial.println("making POST request");
  String contentType = "application/x-www-form-urlencoded";
  String values = "id="+postData;
  
  client.post("/", contentType, values);

  // read the status code and body of the response
  statusCode = client.responseStatusCode();
  //response = client.responseBody();

  Serial.print("Status code: ");
  
  if(statusCode==200){
    Serial.println("Database updated!");  
  }else{
    Serial.println(statusCode);
    Serial.print(" - Error");
  }
  //Serial.print("Response: ");
  //Serial.println(response);
}


