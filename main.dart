import 'package:flutter/material.dart';
void main() {
runApp(MyApp());
}
class MyApp extends StatelessWidget {
@override
  Widget build(BuildContext context) {
  return Scaffold(
  body: Center(
  child: Column(
  children: [
    Text("Hello World!"),
    ElevatedButton(
    Text("Click this"),
      onPressed: () {},
    ),
  ],
  ),
  ),
  );
  }
}
