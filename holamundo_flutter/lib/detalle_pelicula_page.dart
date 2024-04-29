import 'package:flutter/material.dart';

class DetallePeliculaPage extends StatelessWidget {
  final String titulo;
  final String ano;
  final String director;
  final String genero;
  final String sinopsis;
  final String imagen;

  DetallePeliculaPage({
    required this.titulo,
    required this.ano,
    required this.director,
    required this.genero,
    required this.sinopsis,
    required this.imagen,
  });

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text(titulo),
      ),
      body: Column(
        crossAxisAlignment: CrossAxisAlignment.start,
        children: [
          Image.network(imagen),
          Text('Título: $titulo'),
          Text('Año: $ano'),
          Text('Director: $director'),
          Text('Género: $genero'),
          Text('Sinopsis: $sinopsis'),
        ],
      ),
    );
  }
}