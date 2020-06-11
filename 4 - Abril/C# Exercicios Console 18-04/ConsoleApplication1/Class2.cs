using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace ConsoleApplication1
{
    class Class2
    {
        static void Main(string[] args) {

            Console.Write("informe o 1º num: ");
            int n1 = int.Parse(Console.ReadLine());

            Console.Write("informe o 2º num: ");
            int n2 = int.Parse(Console.ReadLine());

            Console.Write("informe o 3º num: ");
            int n3 = int.Parse(Console.ReadLine());

            if((n1 > n2) && (n1 > n3)){
                Console.WriteLine("O " + n1 +" é o maior");

            }else if((n2 > n1) && (n2 > n3)) {
                Console.WriteLine("O " + n2 + " é o maior");

            }else if((n3 > n1) && (n3 >n2)){
                Console.WriteLine("O " + n3 + " é o maior");
            }
            Console.ReadKey();

        }
    }
}
