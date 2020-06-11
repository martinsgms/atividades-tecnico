using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;

namespace Login
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            String login = textBox1.Text;
            String senha = textBox2.Text;

            if (login == "aluno" && senha == "12345")
            {

                Form2 f2 = new Form2();
                f2.Show();
                this.Hide();

            }
            else
            {
                MessageBox.Show("Usuario nao existe");
                textBox1.Clear();
                textBox2.Clear();
                textBox1.Focus();
            }
        }

        private void button2_Click(object sender, EventArgs e)
        {
            if (MessageBox.Show("Deseja encerrar a aplicação ?", "Aviso",
                MessageBoxButtons.YesNo,
                MessageBoxIcon.Question) == DialogResult.Yes)
            {
                Application.Exit();
            }
        }
    }
}
