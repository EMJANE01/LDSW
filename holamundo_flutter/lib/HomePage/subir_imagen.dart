import 'dart:io';
import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;
import 'package:image_picker/image_picker.dart';

class UploadImagePage extends StatefulWidget {
  final int movieId;

  UploadImagePage({required this.movieId});

  @override
  _UploadImagePageState createState() => _UploadImagePageState();
}

class _UploadImagePageState extends State<UploadImagePage> {
  late File _imageFile;

  Future<void> _getImage(ImageSource source) async {
    final pickedFile = await ImagePicker().pickImage(source: source);

    if (pickedFile != null) {
      setState(() {
        _imageFile = File(pickedFile.path);
      });
    }
  }

  Future<void> _uploadImage() async {
    if (_imageFile == null) {
      return;
    }

    final url = Uri.parse('http://your-api-url.com/upload_image');
    final request = http.MultipartRequest('POST', url)
      ..fields['movie_id'] = widget.movieId.toString()
      ..files.add(await http.MultipartFile.fromPath('image', _imageFile.path));

    final response = await request.send();

    if (response.statusCode == 200) {
      
      print('Imagen subida exitosamente');
    } else {
      
      print('Error al subir la imagen');
    }
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('Subir Imagen'),
      ),
      body: Padding(
        padding: EdgeInsets.all(20.0),
        child: Column(
          mainAxisAlignment: MainAxisAlignment.center,
          crossAxisAlignment: CrossAxisAlignment.stretch,
          children: [
            ElevatedButton(
              onPressed: () => _getImage(ImageSource.gallery),
              child: Text('Seleccionar Imagen'),
            ),
            SizedBox(height: 20.0),
            if (_imageFile != null)
              Image.file(
                _imageFile,
                height: 200.0,
                fit: BoxFit.cover,
              ),
            SizedBox(height: 20.0),
            ElevatedButton(
              onPressed: _uploadImage,
              child: Text('Subir Imagen'),
            ),
          ],
        ),
      ),
    );
  }
}