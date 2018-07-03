<?php
/**
 *
 * Created by PhpStorm.
 * User: Hérison Assunção
 * Email: herison.assuncao@outlook.com
 *
 */
if(!defined('BASEPATH')) exit('No	direct	script	access	allowed');

$pdf = new Myfpdf();
$pdf->AddPage();

$pdf->SetFont('Arial','B',15);
$pdf->Cell(190,10,utf8_decode('CRUD - FLEX PEAK'),0,0,"C");

$pdf->Ln(8);
$pdf->Cell(190,10,utf8_decode('Relatório dos Alunos Cursando'),0,0,"C");
$pdf->Ln(15);

$pdf->SetFont("Arial","I",7);
$pdf->Cell(10,7,utf8_decode("Código"),1,0,"C");
$pdf->Cell(45,7,"Aluno",1,0,"C");
$pdf->Cell(17,7,"Data de Nasc.",1,0,"C");
$pdf->Cell(15,7,"Cidade",1,0,"C");
$pdf->Cell(8,7,"UF",1,0,"C");
$pdf->Cell(14,7,"CEP",1,0,"C");
$pdf->Cell(25,7,  "Curso",1,0,"C");
$pdf->Cell(45,7,  utf8_decode("Professor"),1,0,"C");
$pdf->Ln();

foreach ($alunos as $aluno){
    $pdf->Cell(10,7,  $aluno["id_aluno"],1,0,"C");
    $pdf->Cell(45,7,utf8_decode($aluno["nome_aluno"]),1,0,"L");
    $pdf->Cell(17,7,  date("d/m/Y", strtotime($aluno["data_nascimento"])),1,0,"C");
    $pdf->Cell(15,7, utf8_decode($aluno["cidade"]),1,0,"L");
    $pdf->Cell(8,7,$aluno["estado"],1,0,"C");
    $pdf->Cell(14,7,$aluno["cep"],1,0,"L");
    $pdf->Cell(25,7,  utf8_decode($aluno["nome_curso"]),1,0,"L");
    $pdf->Cell(45,7,  utf8_decode($aluno["nome_professor"]),1,0,"L");

    $pdf->Ln();
}

$pdf->Output();
