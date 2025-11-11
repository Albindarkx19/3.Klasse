#  Webentwicklung & Sicherheit  
**Autor:** Albin  
<br>
**LBS Eibiswald | 3aAPC**

---

##  1. Installation der Entwicklungsumgebung

Für die Entwicklung von PHP-basierten Webanwendungen wird eine lokale Serverumgebung benötigt.  
Diese besteht typischerweise aus drei Hauptkomponenten:

| Komponente | Beschreibung | Beispiel |
|-------------|---------------|-----------|
| **Webserver** | Liefert Webseiten an den Browser aus. | Apache, Nginx |
| **PHP** | Programmiersprache zur serverseitigen Verarbeitung. | PHP 8.x |
| **Datenbank** | Speichert Benutzerdaten, Logins, Produkte usw. | MySQL, MariaDB |

---

###  Mögliche Installationsarten

####  Variante 1: XAMPP (empfohlen)
Ein Komplettpaket mit **Apache**, **PHP** und **MySQL**.  
Ideal für Einsteiger, da alles vorkonfiguriert ist.

**Installation:**
1. Lade [XAMPP](https://www.apachefriends.org/de/index.html) herunter.  
2. Installiere und starte den **Apache**- und **MySQL**-Dienst.  
3. Lege dein Projekt unter  
   `C:\xampp\htdocs\HelloWorld\index.php`  
   ab.  
4. Rufe im Browser auf:  
    `http://localhost/HelloWorld`

**Vorteile:**
- Sehr einfach zu installieren  
- Keine manuelle Konfiguration nötig  
- Mit phpMyAdmin zur Datenbankverwaltung  

---

####  Variante 2: PHP Built-in Server
Nur PHP erforderlich – kein komplettes Paket.  
Diese Variante ist besonders nützlich für kleine Projekte oder Tests.


🖊️ Editor / IDE mit PHP-Support
Editor	Vorteile
Visual Studio Code	Kostenlos, leichtgewichtig, mit PHP-Erweiterungen
PhpStorm	Professionelle IDE mit Debugging und Code-Analyse
Sublime Text / Notepad++	Schnell, aber weniger Komfort

---

2. Sicherheitsrisiken von Webanwendungen

|  **Angriff**                   |     **Beschreibung**                                        |   **Beispiel**                                  |
| ------------------------------ | ---------------------------------------------------------- | ------------------------------------------------ |
| **Phishing**                   | Täuschung der Nutzer durch gefälschte Webseiten oder Mails | Login-Seite imitiert Facebook                    |
| **Datendiebstahl**             | Unbefugter Zugriff auf vertrauliche Informationen          | Gestohlene Passwörter aus Datenbanken            |
| **SQL Injection (SQLi)**       | Einschleusen von SQL-Befehlen über Eingabefelder           | `SELECT * FROM users WHERE name = '' OR '1'='1'` |
| **Cross-Site-Scripting (XSS)** | Einschleusen von JavaScript in Webseiten                   | `<script>alert('Hacked!')</script>`              |
| **Session Hijacking**          | Übernahme einer aktiven Benutzersitzung                    | Session-Cookies werden abgefangen                |
| **Denial of Service (DoS)**    | Server wird mit Anfragen überlastet                        | Website ist nicht mehr erreichbar                |

---

3. Maßnahmen zum Schutz von Webanwendungen

Zum Schutz vor diesen Angriffen sind mehrere Sicherheitsebenen notwendig.
Hier die wichtigsten Maßnahmen:

|    **Maßnahme**                         |     **Beschreibung**                               |   **Beispiel**                                                |
| --------------------------------------- | ------------------------------------------------- | -------------------------------------------------------------- |
| **Verschlüsselung (HTTPS)**             | Schutz der Datenübertragung durch TLS-Zertifikate | `https://` statt `http://`                                     |
| **Multifaktor-Authentifizierung (MFA)** | Zusätzlicher Schutz beim Login                    | Passwort + Einmalcode per SMS                                  |
| **Prepared Statements / Sanitizing**    | Schutz vor SQL-Injections                         | `$stmt = $pdo->prepare("SELECT * FROM users WHERE name = ?");` |
| **Input Validation**                    | Überprüfung von Nutzereingaben                    | Nur erlaubte Zeichen bei Formularen                            |
| **Session-Management**                  | Sichere Cookies, automatische Ablaufzeiten        | `session_regenerate_id();`                                     |
| **Content Security Policy (CSP)**       | Schutz vor XSS durch restriktive Skriptquellen    | `Content-Security-Policy: default-src 'self';`                 |
| **Regelmäßige Updates**                 | Schließt bekannte Sicherheitslücken               | PHP, Frameworks und Plugins aktuell halten                     |

