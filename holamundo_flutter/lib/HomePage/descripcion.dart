import 'package:flutter/material.dart';
import 'package:mysql1/mysql1.dart'; 

class MovieDetailsPage extends StatelessWidget {
  final int movieId; 

  MovieDetailsPage({required this.movieId});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('Detalles de la película'),
      ),
      body: FutureBuilder(
        future: fetchMovieDetails(movieId),
        builder: (context, AsyncSnapshot<Map<String, dynamic>> snapshot) {
          if (snapshot.connectionState == ConnectionState.waiting) {
            return Center(child: CircularProgressIndicator());
          } else if (snapshot.hasError) {
            return Center(child: Text('Error: ${snapshot.error}'));
          } else {
            var movie = snapshot.data!;
            return Padding(
              padding: EdgeInsets.all(20.0),
              child: Column(
                crossAxisAlignment: CrossAxisAlignment.start,
                children: [
                  Image.network(movie['cover'], width: 200, height: 200, fit: BoxFit.cover),
                  SizedBox(height: 20.0),
                  Text(movie['tittle'], style: TextStyle(fontSize: 24.0, fontWeight: FontWeight.bold)),
                  Text('Año: ${movie['year']}'),
                  SizedBox(height: 10.0),
                  Text('Sinopsis:', style: TextStyle(fontSize: 18.0, fontWeight: FontWeight.bold)),
                  Text(movie['synopsis'], style: TextStyle(fontSize: 16.0)),
                ],
              ),
            );
          }
        },
      ),
    );
  }

  Future<Map<String, dynamic>> fetchMovieDetails(int id) async {
    final conn = await MySqlConnection.connect(ConnectionSettings(
      host: 'localhost',
      port: 3306,
      user: 'root',
      password: '',
      db: 'catalogo',
    ));

    var results = await conn.query('SELECT * FROM catalogo WHERE ID = ?', [id]);
    var movie = results.first.fields; 
    await conn.close();

    return movie;
  }
}