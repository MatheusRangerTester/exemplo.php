<?php
$tecnologias = ["HTML", "CSS", "JavaScript"];

echo $tecnologias[0] . "<br>"; // HTML
echo $tecnologias[2] . "<br>"; // JavaScript

$tecnologias[] = "PHP"; // Adiciona um item no final
echo "Quantidade: " . count($tecnologias) . "<br>"; // 4

echo "<hr>";
echo "<pre>";
print_r ($tecnologias);

// A cada repetição, tecnologia recebe um item da lista
foreach ($tecnologias as $tecnologia) {
    echo $tecnologia . "<br>";
}
?>
