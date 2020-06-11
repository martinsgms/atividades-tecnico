using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;

namespace Aula3
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void wordToolStripMenuItem_Click(object sender, EventArgs e)
        {

            try{
                System.Diagnostics.Process.Start("winwor.exe");
            }
            catch{
                MessageBox.Show("Programa não encontrado");
            }
            
            
            
        }

        private void excelToolStripMenuItem_Click(object sender, EventArgs e)
        {
            System.Diagnostics.Process.Start("excel.exe");
        }

        private void calculadoraToolStripMenuItem_Click(object sender, EventArgs e)
        {
            System.Diagnostics.Process.Start("calc.exe");

        }

        private void blocoDeNotasToolStripMenuItem_Click(object sender, EventArgs e)
        {
            System.Diagnostics.Process.Start("notepad.exe");
            
        }

        private void logoffToolStripMenuItem_Click(object sender, EventArgs e)
        {

            if(MessageBox.Show("Deseja encerrar a aplicação ?", "Aviso",
                            MessageBoxButtons.YesNo,
                            MessageBoxIcon.Information) == DialogResult.Yes)
            {
                Application.Exit();
            }

        }

        private void Form1_Load(object sender, EventArgs e)
        {
            label1.Text = DateTime.Now.ToLongDateString();


        }

        private void calendárioToolStripMenuItem_Click(object sender, EventArgs e)
        {
            Form2 form2 = new Form2();
            form2.Show();
            this.Visible = false;

        }
    }
}
