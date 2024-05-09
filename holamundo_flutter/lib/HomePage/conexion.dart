import 'package:mysql1/mysql1.dart';

Future<void> connectToDatabase() async {
  final conn = await MySqlConnection.connect(ConnectionSettings(
    host: 'localhost',
    port: 3306,
    user: 'root',
    password: '',
    db: 'catalogo',
  ));


  Results results = await conn.query('SELECT ID, tittle, synopsis, year, cover FROM catalogo');


  for (var row in results) {
    print('ID: ${row[0]}, Título: ${row[1]}, Sinopsis: ${row[2]}, Año: ${row[3]}, Portada: ${row[4]}');
  }


  await conn.close();
}