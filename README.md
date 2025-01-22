# WGZ-Azterketa-2025

## DENTANAGE EVOLUTION

Dentistak izaten dituzten odontologiaren inguruko ekitaldiak kudeatzeko web API sortu behar duzue.

Datu basearen egitura: 
```ascii
+-------+           +------------+
| users |---<N:M>---| ekitaldiak |
+-------+           +------------+

Erabiltzaileen taulako atributuak honako hauek dira: 
 - id: Integer
 - name: Text
 - abizena: Text
 - dni: Text
 - jaiotze_data: Date

Ekitaldien taulako atributuak honako hauek dira: 
 - id: Integer
 - izena: Text
 - data: Date
 - azalpena: Text
```

Aplikazioa MVC egituraren arabera eta PHPrako Laravel framework-a erabiliz egingo da.

Egitekoak:

1 - Proiektu berri bat sortu eta GitHub-era igo.

2 - Emandako datu basea sortu. Egin beharrezkoak diren migrazioak egin (1 puntu)

3 - ‘admin’ eta ‘dentista’ rolak sortu.

4 - Autentifikazioa: login, erregistroa eta logout (1,5 puntu)

5 - API endpoint-entzako autentifikazioa gehitu. Token bidez. (1,5 puntu)

Ondorengo API rutak sortu:

- ‘ekitaldiak’ taularen API CRUD eragiketak egin: Create (POST), Read (GET), Update (PUT), Delete (DELETE), (2 puntu)
- **GET /api/dentistak** -> dentista guztien zerrenda (‘admin’ rolako erabiltzaileek ez dute zerrenda honetan agertu behar).‘admin’ rolarekin bakarrik eskuragarri izango da. (1,5 puntu)
- **GET /api/partehartzaileak/{id}** ekitaldi horretan (id), parte hartu duten dentisten zerrenda. (0,75 puntu)
- **GET /api/ekitaldiak/{id}** dentista horrek (id), parte hartu duen ekitaldien zerrenda. (0,75 puntu)
- **POST /api/izenaeman/{id}** logeatutako dentista, (id) ekitaldian gehitu (1 puntu)
