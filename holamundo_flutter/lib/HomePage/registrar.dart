import 'package:flutter/material.dart';

class RegisterPage extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('Registro de Usuario'),
      ),
      body: Padding(
        padding: EdgeInsets.all(20.0),
        child: RegisterForm(),
      ),
    );
  }
}

class RegisterForm extends StatefulWidget {
  @override
  _RegisterFormState createState() => _RegisterFormState();
}

class _RegisterFormState extends State<RegisterForm> {
  final _formKey = GlobalKey<FormState>();
  late String _name;
  late String _username;
  late String _password;

  @override
  Widget build(BuildContext context) {
    return Form(
      key: _formKey,
      child: Column(
        crossAxisAlignment: CrossAxisAlignment.stretch,
        children: [
          TextFormField(
            decoration: InputDecoration(labelText: 'Nombre completo'),
            validator: (value) {
              if (value == null || value.isEmpty) {
                return 'Por favor ingresa tu nombre completo';
              }
              return null;
            },
            onSaved: (value) {
              _name = value!;
            },
          ),
          TextFormField(
            decoration: InputDecoration(labelText: 'Nombre de usuario'),
            validator: (value) {
              if (value == null || value.isEmpty) {
                return 'Por favor ingresa tu nombre de usuario';
              }
              return null;
            },
            onSaved: (value) {
              _username = value!;
            },
          ),
          TextFormField(
            obscureText: true,
            decoration: InputDecoration(labelText: 'Contraseña'),
            validator: (value) {
              if (value == null || value.isEmpty) {
                return 'Por favor ingresa tu contraseña';
              }
              return null;
            },
            onSaved: (value) {
              _password = value!;
            },
          ),
          SizedBox(height: 20.0),
          ElevatedButton(
            onPressed: () {
              if (_formKey.currentState!.validate()) {
                _formKey.currentState!.save();

              }
            },
            child: Text('Registrarse'),
          ),
        ],
      ),
    );
  }
}