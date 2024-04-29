import 'package:flutter/material.dart';

class AdministracionPage extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('Administración de películas'),
      ),
      body: SingleChildScrollView(
        child: Padding(
          padding: const EdgeInsets.all(16.0),
          child: Column(
            crossAxisAlignment: CrossAxisAlignment.start,
            children: [
              
              TextField(
                decoration: InputDecoration(labelText: 'Título'),
              ),
              TextField(
                decoration: InputDecoration(labelText: 'Año'),
              ),
              TextField(
                decoration: InputDecoration(labelText: 'Director'),
              ),
              TextField(
                decoration: InputDecoration(labelText: 'Género'),
              ),
              TextField(
                decoration: InputDecoration(labelText: 'Sinopsis'),
              ),
              TextField(
                decoration: InputDecoration(labelText: 'URL de la imagen'),
              ),
              SizedBox(height: 20),
              RaisedButton(
                onPressed: () {
                
                },
                child: Text('Agregar película'),
              ),
              SizedBox(height: 20),
              
            ],
          ),
        ),
      ),
    );
  }
}