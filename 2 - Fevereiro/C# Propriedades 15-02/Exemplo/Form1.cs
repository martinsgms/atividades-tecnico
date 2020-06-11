using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;

namespace Exemplo
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }

   

        private void button2_Click(object sender, EventArgs e)
        {
            this.BackColor = Color.Blue;

        }

        private void button3_Click(object sender, EventArgs e)
        {
            this.BackColor = Color.Red;

        }

        private void button4_Click(object sender, EventArgs e)
        {
            this.BackColor = Color.Yellow;

        }

        private void button5_Click(object sender, EventArgs e)
        {
            this.BackColor = Color.Green;

        }

        private void button6_Click(object sender, EventArgs e)
        {
            this.BackColor = Color.Black;

        }

        private void button1_Click(object sender, EventArgs e)
        {
            Application.Exit();

        }

        private void button7_Click(object sender, EventArgs e)
        {
            pictureBox1.Visible = true;

        }

        private void button8_Click(object sender, EventArgs e)
        {
            pictureBox1.Visible = false;
        }

        private void button10_Click(object sender, EventArgs e)
        {
            Form2 form2 = new Form2();

            form2.Visible = true;

            this.Hide();
        }

    
    }
}
