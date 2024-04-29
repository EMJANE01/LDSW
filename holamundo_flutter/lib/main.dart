import 'package:flutter/material.dart';
import 'inicio_page.dart';
import 'conexiones.dart'; 
import 'administracion_page.dart';
import 'catalogo_page.dart';
import 'detalle_pelicula_page.dart';
// Importa las demás páginas aquí

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
      home: InicioPage(), // Puedes cambiar esto según la página inicial que desees
    );
  }
}