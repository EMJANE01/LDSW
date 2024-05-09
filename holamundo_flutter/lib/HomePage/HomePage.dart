import 'package:flutter/material.dart';

void main() {
  runApp(MyApp());
}

class MyApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Catálogo de Películas',
      theme: ThemeData(
        primarySwatch: Colors.blue,
      ),
      home: HomePage(),
    );
  }
}

class HomePage extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('CINEPOLITO'),
      ),
      body: Center(
        child: Column(
          mainAxisAlignment: MainAxisAlignment.center,
          children: <Widget>[
            Text(
              'Bienvenido a CINEPOLITO',
              style: TextStyle(fontSize: 24.0),
              textAlign: TextAlign.center,
            ),
            Text(
              'Este es un catálogo de películas donde puedes explorar y descubrir nuevas películas emocionantes. ¡Disfruta de tu experiencia! :D',
              style: TextStyle(fontSize: 16.0),
              textAlign: TextAlign.center,
            ),
            SizedBox(height: 20.0),
            ElevatedButton(
              onPressed: () {
                
                Navigator.push(
                  context,
                  MaterialPageRoute(builder: (context) => CatalogPage()),
                );
              },
              child: Text('Explorar Catálogo'),
            ),
          ],
        ),
      ),
    );
  }
}

class CatalogPage extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    // Aquí se puede implementar la pantalla del catálogo
    return Scaffold(
      appBar: AppBar(
        title: Text('Catálogo'),
      ),
      body: Center(
        child: Text('Pantalla de Catálogo'),
      ),
    );
  }
}