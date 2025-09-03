 <?php 

$alunos =[
 "João" => 8,
 "Maria" => 6,
 "Ana" => 9  
];
   foreach ($alunos as $nome => $nota) 

     if ($nota >= 7) {
        echo "O aluno $nome tirou nota $nota — <span style='color:blue'>APROVADO</span><br>";
    } else {
        echo "O aluno $nome tirou nota $nota — <span style='color:red'>REPROVADO</span><br>";
    }
   

        
    
    


   





?>