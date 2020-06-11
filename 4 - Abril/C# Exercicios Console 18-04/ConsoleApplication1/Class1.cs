using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace ConsoleApplication1
{
    class Class1
    {
        static void Main(string[] args) {
            

            Console.Write("informe seu nome: ");
            string nome = Console.ReadLine();

            Console.Write("informe sua idade: ");
            int idade = int.Parse(Console.ReadLine());

            Console.WriteLine("Meu nome é " + nome + ", e tenho " + idade + " anos.");
            Console.ReadKey();

        }
    }
}
