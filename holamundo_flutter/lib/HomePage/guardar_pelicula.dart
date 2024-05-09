import 'package:flutter/material.dart';

class SaveMoviePage extends StatefulWidget {
  @override
  _SaveMoviePageState createState() => _SaveMoviePageState();
}

class _SaveMoviePageState extends State<SaveMoviePage> {
  final _formKey = GlobalKey<FormState>();
  late String _title;
  late String _synopsis;
  late int _year;
  late String _cover;

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('Registrar Película'),
      ),
      body: Padding(
        padding: EdgeInsets.all(20.0),
        child: Form(
          key: _formKey,
          child: ListView(
            children: [
              TextFormField(
                decoration: InputDecoration(labelText: 'Título'),
                validator: (value) {
                  if (value == null || value.isEmpty) {
                    return 'Por favor ingresa el título de la película';
                  }
                  return null;
                },
                onSaved: (value) {
                  _title = value!;
                },
              ),
              TextFormField(
                decoration: InputDecoration(labelText: 'Sinopsis'),
                validator: (value) {
                  if (value == null || value.isEmpty) {
                    return 'Por favor ingresa la sinopsis de la película';
                  }
                  return null;
                },
                onSaved: (value) {
                  _synopsis = value!;
                },
              ),
              TextFormField(
                decoration: InputDecoration(labelText: 'Año'),
                keyboardType: TextInputType.number,
                validator: (value) {
                  if (value == null || value.isEmpty) {
                    return 'Por favor ingresa el año de la película';
                  }
                  return null;
                },
                onSaved: (value) {
                  _year = int.parse(value!);
                },
              ),
              TextFormField(
                decoration: InputDecoration(labelText: 'URL de la portada'),
                validator: (value) {
                  if (value == null || value.isEmpty) {
                    return 'Por favor ingresa la URL de la portada de la película';
                  }
                  return null;
                },
                onSaved: (value) {
                  _cover = value!;
                },
              ),
              SizedBox(height: 20.0),
              ElevatedButton(
                onPressed: () {
                  if (_formKey.currentState!.validate()) {
                    _formKey.currentState!.save();
                    
                  }
                },
                child: Text('Guardar'),
              ),
            ],
          ),
        ),
      ),
    );
  }
}