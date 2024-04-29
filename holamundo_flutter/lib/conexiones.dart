import 'dart:convert';
import 'package:http/http.dart' as http;

Future<void> fetchData() async {
  final response = await http.get('https://gateway.marvel.com/v1/public/movies');
  if (response.statusCode == 200) {
    final data = json.decode(response.body);
  
  } else {
    throw Exception('Error al cargar los datos');
  }
}