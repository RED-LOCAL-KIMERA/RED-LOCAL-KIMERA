// Einfache Wechselstromkreise
// Java-Applet (11.06.1998) umgewandelt
// 21.09.2014 - 20.09.2015

// ****************************************************************************
// * Autor: Walter Fendt (www.walter-fendt.de)                                *
// * Dieses Programm darf - auch in ver�nderter Form - f�r nicht-kommerzielle *
// * Zwecke verwendet und weitergegeben werden, solange dieser Hinweis nicht  *
// * entfernt wird.                                                           *
// **************************************************************************** 

// Sprachabh�ngige Texte sind einer eigenen Datei (zum Beispiel accircuits_de.js) abgespeichert.

// Farben:

var colorBackground = "#ffff00";                           // Hintergrundfarbe
var colorVoltage = "#0000ff";                              // Farbe f�r Spannung
var colorAmperage = "#ff0000";                             // Farbe f�r Stromst�rke

// Sonstige Konstanten:

var FONT = "normal normal bold 12px sans-serif";           // Zeichensatz
var T0 = 5;                                                // Fiktive Schwingungsdauer (s)
var OMEGA0 = 2*Math.PI/T0;                                 // Fiktive Kreisfrequenz (1/s)

// Attribute:

var canvas, ctx;                                           // Zeichenfl�che, Grafikkontext
var width, height;                                         // Abmessungen der Zeichenfl�che (Pixel)
var rbR, rbC, rbL;                                         // Radiobuttons
var bu1, bu2;                                              // Schaltkn�pfe (Reset, Start/Pause/Weiter)
var cbSlow;                                                // Optionsfeld Zeitlupe
var lbRCL, lbUnitRCL;                                      // Labels (Widerstand/Kapazit�t/Induktivit�t, zugeh�rige Einheit)
var ipNy, ipRCL, ipU0;                                     // Eingabefelder
var opI0;                                                  // Ausgabefeld (Scheitelstromst�rke)
var lbUnitI;                                               // Label f�r Stromst�rkeeinheit
var on;                                                    // Flag f�r Bewegung
var slow;                                                  // Flag f�r Zeitlupe
var t0;                                                    // Anfangszeitpunkt
var t;                                                     // Aktuelle Zeit (s)
var ny;                                                    // Frequenz (Hz)
var omega;                                                 // Kreisfrequenz (1/s)
var u0;                                                    // Maximale Spannung (V)
var i0;                                                    // Maximale Stromst�rke (A)
var r;                                                     // Widerstand (Ohm)
var c;                                                     // Kapazit�t (F)
var l;                                                     // Induktivit�t (H)
var phi;                                                   // Phasenwinkel f�r Spannung (Bogenma�)
var psi;                                                   // Phasenwinkel f�r Stromst�rke (Bogenma�)
var dPhi;                                                  // Phasenverschiebung (Bogenma�)

// Element der Schaltfl�che (aus HTML-Datei):
// id ..... ID im HTML-Befehl
// text ... Text (optional)

function getElement (id, text) {
  var e = document.getElementById(id);                     // Element
  if (text) e.innerHTML = text;                            // Text festlegen, falls definiert
  return e;                                                // R�ckgabewert
  } 

// Start:

function start () {
  canvas = getElement("cv");                               // Zeichenfl�che
  width = canvas.width; height = canvas.height;            // Abmessungen (Pixel)
  ctx = canvas.getContext("2d");                           // Grafikkontext
  rbR = getElement("rbR");                                 // Radiobutton (Widerstand)
  getElement("lbR",text01);                                // Erkl�render Text (Widerstand)
  rbR.checked = true;                                      // Radiobutton ausgew�hlt
  rbC = getElement("rbC");                                 // Radiobutton (Kondensator)
  getElement("lbC",text02);                                // Erkl�render Text (Kondensator)
  rbL = getElement("rbL");                                 // Radiobutton (Spule)
  getElement("lbL",text03);                                // Erkl�render Text (Spule)
  bu1 = getElement("bu1",text04);                          // Resetknopf
  bu2 = getElement("bu2",text05[0]);                       // Startknopf
  bu2.state = 0;                                           // Anfangszustand (vor Start der Animation)
  cbSlow = getElement("cbSlow");                           // Optionsfeld (Zeitlupe)
  getElement("lbSlow",text06);                             // Erkl�render Text (Zeitlupe)
  cbSlow.checked = false;                                  // Zeitlupe abgeschaltet
  getElement("ipNya",text07);                              // Erkl�render Text (Frequenz)
  ipNy = getElement("ipNyb");                              // Eingabefeld (Frequenz)
  getElement("ipNyc",hertz);                               // Einheit (Frequenz)
  getElement("ipU0a",text08);                              // Erkl�render Text (Scheitelspannung)
  ipU0 = getElement("ipU0b");                              // Eingabefeld (Scheitelspannung)
  getElement("ipU0c",volt);                                // Einheit (Scheitelspannung)
  lbRCL = getElement("ipRCLa");                            // Erkl�render Text (Widerstand/Kapazit�t/Induktivit�t)
  ipRCL = getElement("ipRCLb");                            // Eingabefeld (Widerstand/Kapazit�t/Induktivit�t)
  lbUnitRCL = getElement("ipRCLc");                        // Einheit (Widerstand/Kapazit�t/Induktivit�t)
  getElement("opI0a",text12);                              // Erkl�render Text (Scheitelstromst�rke)             
  opI0 = getElement("opI0b");                              // Ausgabefeld (Scheitelstromst�rke)
  lbUnitI = getElement("opI0c");                           // Einheit (Scheitelstromst�rke)
  getElement("author",author);                             // Autor (und �bersetzer)

  ny = 50;                                                 // Anfangswert f�r Frequenz (Hz) 
  u0 = 10;                                                 // Anfangswert f�r maximale Spannung
  r = 500;                                                 // Anfangswert f�r Widerstand (Ohm) 
  c = 0.0001;                                              // Anfangswert f�r Kapazit�t (Farad)
  l = 200;                                                 // Anfangswert f�r Indiktivit�t (Henry)
  dPhi = 0;                                                // Anfangswert f�r Phasenverschiebung

  reaction(false);                                         // Eingabefelder aktualisieren, rechnen, Ausgabe aktualisieren
    
  on = false;                                              // Animation abgeschaltet
  slow = false;                                            // Zeitlupe abgeschaltet
  t = 0;                                                   // Aktuelle Zeit (s)
  t0 = new Date();                                         // Anfangszeitpunkt
  setInterval(paint,40);                                   // Timer-Intervall 0,040 s

  rbR.onclick = reactionRadioButton;                       // Reaktion auf Radiobutton Widerstand
  rbC.onclick = reactionRadioButton;                       // Reaktion auf Radiobutton Kondensator
  rbL.onclick = reactionRadioButton;                       // Reaktion auf Radiobutton Spule
  bu1.onclick = reactionReset;                             // Reaktion auf Resetknopf
  bu2.onclick = reactionStart;                             // Reaktion auf Schaltknopf Start/Pause/Weiter
  cbSlow.onclick = reactionSlow;                           // Reaktion auf Optionsfeld Zeitlupe
  ipNy.onkeydown = reactionEnter;                          // Reaktion auf Enter-Taste (Eingabe Frequenz)
  ipU0.onkeydown = reactionEnter;                          // Reaktion auf Enter-Taste (Eingabe Scheitelspannung)
  ipRCL.onkeydown = reactionEnter;                         // Reaktion auf Enter-Taste (Eingabe Widerstand/Kapazit�t/Induktivit�t)    
  } // Ende der Methode start
  
// Zustandsfestlegung f�r Schaltknopf Start/Pause/Weiter:
  
function setButton2State (st) {
  bu2.state = st;                                          // Zustand speichern
  bu2.innerHTML = text05[st];                              // Text aktualisieren
  }
  
// Umschalten des Schaltknopfs Start/Pause/Weiter:
  
function switchButton2 () {
  var st = bu2.state;                                      // Momentaner Zustand
  if (st == 0) st = 1;                                     // Falls Ausgangszustand, starten
  else st = 3-st;                                          // Wechsel zwischen Animation und Unterbrechung
  setButton2State(st);                                     // Neuen Zustand speichern, Text �ndern
  }
  
// Aktivierung beziehungsweise Deaktivierung der Eingabefelder:
// p ... Flag f�r m�gliche Eingabe

function enableInput (p) {
  rbR.disabled = !p;                                       // Radiobutton f�r Widerstand 
  rbC.disabled = !p;                                       // Radiobutton f�r Kondensator
  rbL.disabled = !p;                                       // Radiobutton f�r Spule
  ipNy.readOnly = !p;                                      // Eingabefeld f�r Frequenz
  ipU0.readOnly = !p;                                      // Eingabefeld f�r maximale Spannung
  ipRCL.readOnly = !p;                                     // Eingabefeld f�r Widerstand/Kapazit�t/Induktivit�t
  }
  
// Reaktion auf Resetknopf:
// Seiteneffekt bu2.state, t, on, slow, ny, u0, r, c, l, omega, i0
   
function reactionReset () {
  setButton2State(0);                                      // Zustand des Schaltknopfs Start/Pause/Weiter
  enableInput(true);                                       // Eingabefelder aktivieren
  t = 0;                                                   // Zeitvariable zur�cksetzen
  on = false;                                              // Animation abgeschaltet
  slow = cbSlow.checked;                                   // Flag f�r Zeitlupe
  reaction(true);                                          // Eingegebene Werte �bernehmen, rechnen, Ausgabe aktualisieren
  }
  
// Reaktion auf den Schaltknopf Start/Pause/Weiter:
// Seiteneffekt t0, bu2.state, on, slow, ny, u0, r, c, l, omega, i0

function reactionStart () {
  if (bu2.state != 1) t0 = new Date();                     // Falls Animation angeschaltet, neuer Anfangszeitpunkt
  switchButton2();                                         // Zustand des Schaltknopfs �ndern
  enableInput(false);                                      // Eingabefelder deaktivieren
  on = (bu2.state == 1);                                   // Flag f�r Animation
  slow = cbSlow.checked;                                   // Flag f�r Zeitlupe
  reaction(true);                                          // Eingegebene Werte �bernehmen, rechnen, Ausgabe aktualisieren
  }
  
// Reaktion auf Optionsfeld Zeitlupe:
// Seiteneffekt slow

function reactionSlow () {
  slow = cbSlow.checked;                                   // Flag setzen
  }
  
// Hilfsroutine: Eingabe �bernehmen oder Eingabefelder anpassen, Berechnungen durchf�hren und Ausgabe aktualisieren
// ip ... Flag f�r �bernahme der Daten aus den Eingabefeldern
// Seiteneffekt ny, u0, r, c, l, omega, i0

function reaction (ip) {
  if (ip) input();                                         // Eingegebene Werte �bernehmen (eventuell korrigiert) ...
  else updateInput();                                      // ... oder Eingabefelder anpassen
  calculation();                                           // Berechnungen
  updateOutput();                                          // Ausgabe aktualisieren
  }
  
// Reaktion auf Tastendruck (nur auf Enter-Taste):
// Seiteneffekt ny, u0, r, c, l, omega, i0
  
function reactionEnter (e) {
  if (e.key && String(e.key) == "Enter"                    // Falls Entertaste (Firefox/Internet Explorer) ...
  || e.keyCode == 13)                                      // Falls Entertaste (Chrome) ...
    reaction(true);                                        // ... Daten �bernehmen, rechnen, Ausgabe aktualisieren                          
  }

// Reaktion auf Radiobutton:
// Seiteneffekt dPhi, r, c, l, ny, u0, omega, i0

function reactionRadioButton () {
  if (rbR.checked) {dPhi = 0; r = 500;}                    // F�r Widerstand: Phasenverschiebung, Widerstand
  else if (rbC.checked) {dPhi = Math.PI/2; c = 0.0001;}    // F�r Kondensator: Phasenverschiebung, Kapazit�t
  else {dPhi = -Math.PI/2; l = 200;}                       // F�r Spule: Phasenverschiebung, Induktivit�t
  reaction(false);                                         // Eingabefelder aktualisieren, rechnen, Ausgabe aktualisieren
  }

//-------------------------------------------------------------------------------------------------

// Berechnungen:
// Seiteneffekt omega, i0 

function calculation () {
  omega = 2*Math.PI*ny;                                    // Kreisfrequenz (1/s)
  if (dPhi == 0) i0 = u0/r;                                // Maximale Stromst�rke (A, f�r Widerstand)
  else if (dPhi > 0) i0 = u0*omega*c;                      // Maximale Stromst�rke (A, f�r Kondensator)
  else i0 = u0/(omega*l);                                  // Maximale Stromst�rke (A, f�r Spule)
  }
  
// Umwandlung einer Zahl in eine Zeichenkette:
// n ..... Gegebene Zahl
// d ..... Zahl der Stellen
// fix ... Flag f�r Nachkommastellen (im Gegensatz zu g�ltigen Ziffern)

function ToString (n, d, fix) {
  var s = (fix ? n.toFixed(d) : n.toPrecision(d));         // Zeichenkette mit Dezimalpunkt
  return s.replace(".",decimalSeparator);                  // Eventuell Punkt durch Komma ersetzen
  }
  
// Eingabe einer Zahl
// ef .... Eingabefeld
// d ..... Zahl der Stellen
// fix ... Flag f�r Nachkommastellen (im Gegensatz zu g�ltigen Ziffern)
// min ... Minimum des erlaubten Bereichs
// max ... Maximum des erlaubten Bereichs
// R�ckgabewert: Zahl oder NaN
  
function inputNumber (ef, d, fix, min, max) {
  var s = ef.value;                                        // Zeichenkette im Eingabefeld
  s = s.replace(",",".");                                  // Eventuell Komma in Punkt umwandeln
  var n = Number(s);                                       // Umwandlung in Zahl, falls m�glich
  if (isNaN(n)) n = 0;                                     // Sinnlose Eingaben als 0 interpretieren 
  if (n < min) n = min;                                    // Falls Zahl zu klein, korrigieren
  if (n > max) n = max;                                    // Falls Zahl zu gro�, korrigieren
  ef.value = ToString(n,d,fix);                            // Eingabefeld eventuell korrigieren
  return n;                                                // R�ckgabewert
  }
   
// Gesamte Eingabe:
// Seiteneffekt ny, u0, r, c, l

function input () {
  ny = inputNumber(ipNy,3,false,0.1,100);                  // Frequenz (Hz)
  u0 = inputNumber(ipU0,3,false,0.1,100);                  // Maximale Spannung (V)
  if (dPhi == 0) r = inputNumber(ipRCL,3,false,10,1000);   // Falls Widerstand, Eingabe in Ohm
  else if (dPhi > 0)                                       // Falls Kondensator ...
    c = 1e-6*inputNumber(ipRCL,3,false,1,100);             // ... Eingabe der Kapazit�t in Mikrofarad, Umrechnung in Farad
  else l = inputNumber(ipRCL,3,false,10,1000);             // Falls Spule, Eingabe der Induktivit�t in Henry                 
  } // ---!
  
// Aktualisierung der Eingabefelder:

function updateInput () {
  ipNy.value = ToString(ny,3,false);                       // Eingabefeld f�r Frequenz (Hz)
  ipU0.value = ToString(u0,3,false);                       // Eingabefeld f�r maximale Spannung (V)
  if (dPhi == 0) {                                         // Falls ohmscher Widerstand ...
    lbRCL.innerHTML = text09;                              // ... Bezeichnung Widerstand
    ipRCL.value = ToString(r,3,false);                     // ... Zeichenkette f�r Widerstandswert
    lbUnitRCL.innerHTML = ohm;                             // ... Einheit Ohm
    }
  else if (dPhi > 0) {                                     // Falls Kondensator ...
    lbRCL.innerHTML = text10;                              // ... Bezeichnung Kapazit�t
    ipRCL.value = ToString(1e6*c,3,false);                 // ... Zeichenkette f�r Wert der Kapazit�t
    lbUnitRCL.innerHTML = microfarad;                      // ... Einheit Mikrofarad
    }
  else {                                                   // Falls Spule ...
    lbRCL.innerHTML = text11;                              // ... Bezeichnung Induktivit�t
    ipRCL.value = ToString(l,3,false);                     // ... Zeichenkette f�r Wert der Induktivit�t
    lbUnitRCL.innerHTML = henry;                           // ... Einheit Henry
    }
  }

// Aktualisierung der Ausgabefelder:

function updateOutput () {
  var number, unit;                              
  if (i0 >= 1) {                                           // Falls mindestens 1 A, Einheit A
    number = ToString(i0,3,false);                         // Zahlenwert
    unit = ampere;                                         // Einheit A
    } 
  else if (i0 >= 0.001) {                                  // Falls zwischen 0,001 A und 1 A, Einheit mA
    number = ToString(i0*1000,3,false);                    // Zahlenwert
    unit = milliampere;                                    // Einheit mA
    }
  else {                                                   // Falls weniger als 0,001 A, Einheit �A
    number = ToString(i0*1e6,3,false);                     // Zahlenwert
    unit = microampere;                                    // Einheit �A
    }
  opI0.innerHTML = number;                                 // Ausgabe des Zahlenwertes
  lbUnitI.innerHTML = unit;                                // Ausgabe der Stromst�rkeeinheit  
  }
   
//-------------------------------------------------------------------------------------------------

// Neuer Pfad mit Standardwerten:

function newPath () {
  ctx.beginPath();                                         // Neuer Pfad
  ctx.strokeStyle = "#000000";                             // Linienfarbe schwarz
  ctx.lineWidth = 1;                                       // Liniendicke 1
  }
  
// Linie der Dicke 1:
// (x1,y1) ... Anfangspunkt
// (x2,y2) ... Endpunkt
// c ......... Farbe (optional)
// w ......... Liniendicke (optional)

function line (x1, y1, x2, y2, c, w) {
  ctx.beginPath();                                         // Neuer Pfad
  if (c) ctx.strokeStyle = c;                              // Linienfarbe, falls angegeben
  ctx.lineWidth = (w ? w : 1);                             // Liniendicke, falls angegeben
  ctx.moveTo(x1,y1); ctx.lineTo(x2,y2);                    // Linie vorbereiten
  ctx.stroke();                                            // Linie zeichnen
  }

// Rechteck mit schwarzem Rand:
// (x,y) ... Koordinaten der Ecke links oben (Pixel)
// w ....... Breite (Pixel)
// h ....... H�he (Pixel)
// c ....... F�llfarbe (optional)

function rectangle (x, y, w, h, c) {
  if (c) ctx.fillStyle = c;                                // F�llfarbe
  newPath();                                               // Neuer Pfad
  ctx.fillRect(x,y,w,h);                                   // Rechteck ausf�llen
  ctx.strokeRect(x,y,w,h);                                 // Rand zeichnen
  }
  
// Kreisscheibe mit schwarzem Rand:
// (x,y) ... Mittelpunktskoordinaten (Pixel)
// r ....... Radius (Pixel)
// c ....... F�llfarbe (optional)

function circle (x, y, r, c) {
  if (c) ctx.fillStyle = c;                                // F�llfarbe
  newPath();                                               // Neuer Pfad
  ctx.arc(x,y,r,0,2*Math.PI,true);                         // Kreis vorbereiten
  ctx.fill();                                              // Kreis ausf�llen
  ctx.stroke();                                            // Rand zeichnen
  }
    
// Pfeil zeichnen:
// x1, y1 ... Anfangspunkt
// x2, y2 ... Endpunkt
// w ........ Liniendicke (optional)
// Zu beachten: Die Farbe wird durch ctx.strokeStyle bestimmt.

function arrow (x1, y1, x2, y2, w) {
  if (!w) w = 1;                                           // Falls Liniendicke nicht definiert, Defaultwert                          
  var dx = x2-x1, dy = y2-y1;                              // Vektorkoordinaten
  var length = Math.sqrt(dx*dx+dy*dy);                     // L�nge
  if (length == 0) return;                                 // Abbruch, falls L�nge 0
  dx /= length; dy /= length;                              // Einheitsvektor
  var s = 2.5*w+7.5;                                       // L�nge der Pfeilspitze 
  var xSp = x2-s*dx, ySp = y2-s*dy;                        // Hilfspunkt f�r Pfeilspitze         
  var h = 0.5*w+3.5;                                       // Halbe Breite der Pfeilspitze
  var xSp1 = xSp-h*dy, ySp1 = ySp+h*dx;                    // Ecke der Pfeilspitze
  var xSp2 = xSp+h*dy, ySp2 = ySp-h*dx;                    // Ecke der Pfeilspitze
  xSp = x2-0.6*s*dx; ySp = y2-0.6*s*dy;                    // Einspringende Ecke der Pfeilspitze
  ctx.beginPath();                                         // Neuer Pfad
  ctx.lineWidth = w;                                       // Liniendicke
  ctx.moveTo(x1,y1);                                       // Anfangspunkt
  if (length < 5) ctx.lineTo(x2,y2);                       // Falls kurzer Pfeil, weiter zum Endpunkt, ...
  else ctx.lineTo(xSp,ySp);                                // ... sonst weiter zur einspringenden Ecke
  ctx.stroke();                                            // Linie zeichnen
  if (length < 5) return;                                  // Falls kurzer Pfeil, keine Spitze
  ctx.beginPath();                                         // Neuer Pfad f�r Pfeilspitze
  ctx.fillStyle = ctx.strokeStyle;                         // F�llfarbe wie Linienfarbe
  ctx.moveTo(xSp,ySp);                                     // Anfangspunkt (einspringende Ecke)
  ctx.lineTo(xSp1,ySp1);                                   // Weiter zum Punkt auf einer Seite
  ctx.lineTo(x2,y2);                                       // Weiter zur Spitze
  ctx.lineTo(xSp2,ySp2);                                   // Weiter zum Punkt auf der anderen Seite
  ctx.closePath();                                         // Zur�ck zum Anfangspunkt
  ctx.fill();                                              // Pfeilspitze zeichnen 
  }
  
// Text ausrichten (Zeichensatz FONT):
// s ....... Zeichenkette
// t ....... Typ (0 f�r linksb�ndig, 1 f�r zentriert, 2 f�r rechtsb�ndig)
// (x,y) ... Position (Pixel)

function alignText (s, t, x, y) {
  ctx.font = FONT;                                         // Zeichensatz
  if (t == 0) ctx.textAlign = "left";                      // Je nach Wert von t linksb�ndig ...
  else if (t == 1) ctx.textAlign = "center";               // ... oder zentriert ...
  else ctx.textAlign = "right";                            // ... oder rechtsb�ndig
  ctx.fillText(s,x,y);                                     // Text ausgeben
  }
  
// Widerstand zeichnen:

function resistor () {
  ctx.fillStyle = "#000000";                               // F�llfarbe schwarz
  ctx.fillRect(55,65,85,30);                               // �u�eres Rechteck
  ctx.fillStyle = colorBackground;                         // F�llfarbe wie Hintergrund
  ctx.fillRect(58,68,79,24);                               // Inneres Rechteck
  }
  
// Kondensator zeichnen:

function condensator () {
  ctx.fillStyle = "#000000";                               // F�llfarbe schwarz
  ctx.fillRect(88,60,5,40);                                // Linke Platte
  ctx.fillRect(102,60,5,40);                               // Rechte Platte
  newPath();                                               // Neuer Pfad (Standardwerte)
  ctx.moveTo(55,80); ctx.lineTo(90,80);                    // Anschlussdraht links vorbereiten
  ctx.moveTo(140,80); ctx.lineTo(105,80);                  // Anschlussdraht rechts vorbereiten
  ctx.stroke();                                            // Anschlussdr�hte zeichnen
  }
  
// Spule zeichnen (N�herung durch Polygonzug):

function coil () {
  ctx.beginPath();                                         // Neuer Pfad
  ctx.strokeStyle = "#000000";                             // Linienfarbe schwarz
  ctx.lineWidth = 2;                                       // Liniendicke
  ctx.moveTo(55,80);                                       // Anfangspunkt
  for (i=0; i <= 150; i++) {                               // F�r alle Zwischenpunkte ... 
    var w = i*Math.PI/10;                                  // Winkel (Bogenma�) 
    var x, y;                                              // Koordinaten des n�chsten Punktes
    if (i < 10) x = 55+1.5*i;                              // x-Koordinate f�r Punkt im linken Teil                            
    else if (i >= 10 && i <= 140)                          // x-Koordinate f�r Punkt im mittleren Teil 
      x = 60+0.5*i-5*Math.cos(w);
    else x = 1.5*i-85;                                     // x-Koordinate f�r Punkt im rechten Teil
    y = 80-15*Math.sin(w);                                 // y-Koordinate
    ctx.lineTo(x,y);                                       // Linie vorbereiten
    i++;                                                   // Z�hler erh�hen
    }
  ctx.stroke();                                            // Spule zeichnen
  }
  
// Zeiger-Messger�t zeichnen:
// (x,y) .... Position der Zeiger-Drehachse (Pixel)
// type ..... Art des Messger�ts (0 f�r Spannung, 1 f�r Stromst�rke)
// part ..... Bruchteil des Vollausschlags

function meter (x, y, type, part) {
  var w = part*0.2*Math.PI;                                // Winkel f�r Zeiger (Bogenma�)
  var x1 = x+35*Math.sin(w);                               // x-Koordinate des Zeigerendpunkts (Pixel)
  var y1 = y-35*Math.cos(w);                               // y-Koordinate des Zeigerendpunkts (Pixel)
  rectangle(x-30,y-50,60,40,"#ffffff");                    // Oberer Teil (mit Skala)
  line(x,y,x1,y1,"#000000",2);                             // Zeiger (wird sp�ter teilweise verdeckt)
  for (i=-2; i<=2; i++) {                                  // F�r alle Markierungen der Skala ...
    if (i == 0) continue;                                  // In der Mitte kein Strich
    var ww = i*0.1*Math.PI;                                // Winkel (Bogenma�)
    var sin = Math.sin(ww), cos = Math.cos(ww);            // Trigonometrische Werte
    var r1 = 38, r2 = (i%2==0 ? 45 : 43);                  // Radius f�r das untere bzw. obere Ende des Skalenstrichs
    x1 = x+r1*sin; y1 = y-r1*cos;                          // Koordinaten f�r das untere Ende des Skalenstrichs
    var x2 = x+r2*sin, y2 = y-r2*cos;                      // Koordinaten f�r das obere Ende des Skalenstrichs
    line(x1,y1,x2,y2,"#000000",2.5);                       // Skalenstrich zeichnen
    }
  ctx.fillStyle = "#000000";                               // F�llfarbe schwarz
  alignText("0",1,x,y-38);                                 // Nullmarkierung der Skala
  var c = (type==0 ? colorVoltage : colorAmperage);        // Farbe f�r Messger�t
  rectangle(x-30,y-10,60,20,c);                            // Unterer Teil
  circle(x-15,y,2.5,"#000000");                            // Linke Buchse
  circle(x+15,y,2.5,"#000000");                            // Rechte Buchse  
  var u = (type==0 ? volt : ampere);                       // Einheit
  alignText(u,1,x,y+5);                                    // Einheit schreiben
  }
  
// Stromkreis zeichnen:

function circuit () {
  var sinPhi = Math.sin(phi), sinPsi = Math.sin(psi);      // Trigonometrische Werte
  meter(210,150,0,sinPhi);                                 // Voltmeter
  meter(300,80,1,sinPsi);                                  // Amperemeter
  if (dPhi == 0) resistor();                               // Widerstand zeichnen
  else if (dPhi > 0) condensator();                        // Kondensator zeichnen
  else coil();                                             // Spule zeichnen
  circle(193,200,4.5,"#000000");                           // Stromquelle, linke Buchse
  circle(193,200,3.5,colorBackground);
  circle(227,200,4.5,"#000000");                           // Stromquelle, rechte Buchse
  circle(227,200,3.5,colorBackground);
  newPath();                                               // Neuer Pfad (Standardwerte)
  ctx.moveTo(190,200);                                     // Anfangspunkt (linke Buchse der Spannungsquelle)
  ctx.lineTo(30,200);                                      // Weiter nach links
  ctx.lineTo(30,80);                                       // Weiter nach oben
  ctx.lineTo(55,80);                                       // Weiter zum linken Anschluss RCL
  ctx.moveTo(140,80);                                      // Neuer Anfangspunkt (rechter Anschluss RCL)
  ctx.lineTo(285,80);                                      // Zum linken Anschluss des Amperemeters
  ctx.moveTo(315,80);                                      // Neuer Anfangspunkt (rechter Anschluss des Amperemeters)
  ctx.lineTo(390,80);                                      // Weiter nach rechts
  ctx.lineTo(390,200);                                     // Weiter nach unten
  ctx.lineTo(230,200);                                     // Zum Endpunkt (rechte Buchse der Spannungsquelle)
  ctx.moveTo(30,150);                                      // Neuer Anfangspunkt (Knoten links)
  ctx.lineTo(195,150);                                     // Weiter zum linken Anschluss des Voltmeters
  ctx.moveTo(390,150);                                     // Neuer Anfangspunkt (Knoten rechts)
  ctx.lineTo(225,150);                                     // Weiter zum rechten Anschluss des Voltmeters
  ctx.stroke();                                            // Dr�hte zeichnen
  circle(30,150,3,"#000000");                              // Knoten links
  circle(390,150,3,"#000000");                             // Knoten rechts
  ctx.font = "normal normal bold 24px monospace";          // Zeichensatz f�r Wechselspannungssymbol
  ctx.textAlign = "center";                                // Ausrichtung zentriert
  ctx.fillText("\u007e",210,215);                          // Symbol ~ f�r Wechselspannung
  if (Math.abs(sinPhi) > 0.05) {                           // Falls Spannung nicht sehr klein ...
    var x = (sinPhi>0 ? 227 : 193);                        // ... x-Koordinate f�r Pluszeichen
    ctx.fillText("+",x,190);                               // ... Pluszeichen
    ctx.fillText("-",420-x,190);                           // ... Minuszeichen
    }
  ctx.strokeStyle = colorAmperage;                         // Farbe f�r Stromst�rke
  if (sinPsi > 0.05) arrow(220,70,200,70,2);               // Strompfeil nach links
  else if (sinPsi < -0.05) arrow(200,70,220,70,2);         // Strompfeil nach rechts
  }
  
// Zeiger-Diagramm zeichnen:
// (x,y) ... Ursprung (Pixel)

function pointerDiagram (x, y) {
  newPath();
  arrow(x-60,y,x+70,y);                                    // Waagrechte Achse
  arrow(x,y+60,x,y-70);                                    // Senkrechte Achse
  ctx.strokeStyle = colorVoltage;                          // Farbe f�r Spannung
  var x1 = x+50*Math.cos(phi);                             // x-Koordinate Pfeilende
  var y1 = y-50*Math.sin(phi);                             // y-Koordinate Pfeilende
  arrow(x,y,x1,y1,2);                                      // Pfeil f�r Spannung
  if (y1 != y) line(x-60,y1,390,y1);                       // Hilfslinie f�r Spannung         
  ctx.strokeStyle = colorAmperage;                         // Farbe f�r Stromst�rke
  x1 = x+35*Math.cos(psi);                                 // x-Koordinate Pfeilende
  y1 = y-35*Math.sin(psi);                                 // y-Koordinate Pfeilende
  arrow(x,y,x1,y1,2);                                      // Pfeil f�r Stromst�rke
  if (y1 != y) line(x-60,y1,390,y1);                       // Hilfslinie f�r Stromst�rke
  }
  
// Sinuskurve (N�herung durch Polygonzug), Markierung der aktuellen Werte
// (x,y) ... Nullpunkt (Pixel)
// per ..... Periode (Pixel)
// ampl .... Amplitude (Pixel)
// xMin .... Minimaler x-Wert (Pixel)
// xMax .... Maximaler x-Wert (Pixel)
// xP ...... Aktueller x-Wert (Pixel)

function sinus (x, y, per, ampl, xMin, xMax, xP) {
  var k = 2*Math.PI/per;                                   // Hilfsgr��e
  ctx.beginPath();                                         // Neuer Pfad
  ctx.lineWidth = 1;                                       // Liniendicke
  var xx = xMin;                                           // x-Koordinate f�r linken Rand
  ctx.moveTo(xx,y-ampl*Math.sin(k*(xx-x)));                // Anfangspunkt 
  while (xx < xMax) {                                      // Solange rechter Rand noch nicht erreicht ...
    xx++;                                                  // x-Koordinate erh�hen
    ctx.lineTo(xx,y-ampl*Math.sin(k*(xx-x)));              // Neue Teilstrecke vorbereiten
    }
  ctx.stroke();                                            // Polygonzug f�r Kurve zeichnen
  if (xP < xMin || xP > xMax) return;                      // Falls Markierung au�erhalb der Grenzen, abbrechen
  var yP = y-ampl*Math.sin(k*(xP-x));                      // y-Koordinate f�r Markierung (Pixel)
  if (xP >= 0) circle(xP,yP,2);                            // Markierung zeichnen
  }
  
// t-U- und t-I-Diagramm zeichnen:
// (x,y) ... Ursprung (Pixel)
// Sobald t einen der Werte 3T, 6T, 9T usw. erreicht, springen die Markierungen zur�ck zu t = 0

function tUIDiagram (x, y) {      
  newPath();
  arrow(x-10,y,x+200,y);                                   // Waagrechte Achse             
  arrow(x,y+60,x,y-70);                                    // Senkrechte Achse 
  alignText(symbolTime,0,x+195,y+14);                      // Beschriftung (Variable f�r Zeit) 
  var n = Math.floor(t/(3*T0));                            // Angabe, wie oft drei Perioden vollst�ndig durchlaufen wurden
  var tD = t-n*3*T0;                                       // Reduzierte Zeit (s) f�r Markierungen der aktuellen Werte    	
  var xx = x+60*tD/T0;                                     // x-Koordinate der Markierungen (Pixel)
  ctx.strokeStyle = ctx.fillStyle = colorVoltage;          // Farbe f�r Spannung
  sinus(x,y,60,50,x,x+180,xx);                             // Sinuskurve f�r Spannung
  alignText(symbolVoltage,2,x-5,y-65);                     // Beschriftung (Variable f�r Spannung)
  ctx.strokeStyle = ctx.fillStyle = colorAmperage;         // Farbe f�r Stromst�rke
  var xSin = x;                                            // Position Nulldurchgang (Widerstand)
  if (dPhi > 0) xSin = x-15;                               // Position Nulldurchgang (Kondensator)
  else if (dPhi < 0) xSin = x+15;                          // Position Nulldurchgang (Spule) 
  sinus(xSin,y,60,35,x,x+180,xx);                          // Sinuskurve f�r Stromst�rke
  alignText(symbolAmperage,0,x+6,y-65);                    // Beschriftung (Variable f�r Stromst�rke)
  newPath();                                               // Neuer Pfad (Standardwerte)
  ctx.fillStyle = "#000000";                               // F�llfarbe schwarz
  for (i=1; i<=3; i++) {                                   // F�r alle Ticks auf der Zeitachse ...
    var xT = x+i*60;                                       // x-Koordinate des Ticks
    line(xT,y-3,xT,y+3);                                   // Tick zeichnen
    var s = (i>1 ? ""+i : "")+symbolPeriod;                // Zeichenkette f�r Zeit (T, 2T oder 3T)
    alignText(s,1,xT,y+14);                                // Tick beschriften
    }
  }

// Grafikausgabe:
// Seiteneffekt t, phi, psi
  
function paint () {
  ctx.fillStyle = colorBackground;                         // Hintergrundfarbe
  ctx.fillRect(0,0,width,height);                          // Hintergrund ausf�llen
  if (on) {                                                // Falls Animation angeschaltet ...
    var t1 = new Date();                                   // ... Aktuelle Zeit
    var dt = (t1-t0)/1000;                                 // ... L�nge des Zeitintervalls (s)
    if (slow) dt /= 10;                                    // ... Falls Zeitlupe, Zeitintervall durch 10 dividieren
    t += dt;                                               // ... Zeitvariablen aktualisieren
    t0 = t1;                                               // ... Neuer Anfangszeitpunkt
    }
  phi = OMEGA0*t;                                          // Phasenwinkel f�r Spannung (Bogenma�) 
  psi = phi+dPhi;                                          // Phasenwinkel f�r Stromst�rke (Bogenma�)
  circuit();                                               // Stromkreis zeichnen
  pointerDiagram(90,height-90);                            // Zeigerdiagramm zeichnen
  tUIDiagram(190,height-90);                               // t-U und t-I-Diagramm zeichnen
  }
  
document.addEventListener("DOMContentLoaded",start,false); // Nach dem Laden der Seite Start-Methode aufrufen

