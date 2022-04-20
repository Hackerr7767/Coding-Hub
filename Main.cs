using System;
using System.Collections.Generic;
using System.Text;
using System.Linq;

namespace Application {
abstract class SayHello {
public abstract void sayHello();
}
class SayHelloWorld : SayHello {
public override void sayHello() {
Console.WriteLine("Hello World!");
}
}
class Main {
static void main(string[] args) {
SayHello sayhello1 = new SayHelloWorld();
sayhello1.sayHello();
}
}
}
