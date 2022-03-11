<?php
require('autoload.php');

//botoes editar e excluir//
$btnEditar = ' <img src="images/pen.svg" alt="editar">';
$btnExcluir = ' <img src="images/x.svg" alt="Minha Figura">';

//link css bootstrap//
$linkBootstrap = new LinkCss("https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css","stylesheet", "sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl","anonymous");

//tabela//
$th = new Th("col", "Nome");
$th1 = new Th("col", "Contato");
$th2 = new Th("col", "Opções");

$td = new Td("Amanda");
$td1 = new Td("amandabauer@unidavi.edu.br");
$btna1 = new Button("button", "btn btn-secondary", $btnExcluir);
$btna2 = new Button("button", "btn btn-secondary", $btnEditar);
$td2 = new Td("{$btna1}   {$btna2}");

$td3 = new Td("Fulano");
$td4 = new Td("fulano@gmail.com");
$btnb1 = new Button("button", "btn btn-secondary", $btnExcluir);
$btnb2 = new Button("button", "btn btn-secondary", $btnEditar);
$td5 = new Td("{$btnb1}   {$btnb2}");

$td6 = new Td("Beltrano");
$td7 = new Td("beltrano@unidavi.edu.br");
$btnc1 = new Button("button", "btn btn-secondary", $btnExcluir);
$btnc2 = new Button("button", "btn btn-secondary", $btnEditar);
$td8 = new Td("{$btnc1}   {$btnc2}");

$atd = [$td, $td1, $td2];
$btd = [$td3, $td4, $td5];
$ctd = [$td6, $td7, $td8];

$tabela = new Table("table table-bordered", [$th, $th1, $th2], [$atd, $btd, $ctd]);

//head//
$metaCharset = new Meta("UTF-8");
$metaHttEquiv = new Meta(null, null, "X-UA-Compatible", "IE=edge");
$metaName = new Meta(null, "viewport", null, "width=device-width, initial-scale=1.0");
$title = new Title('Tarefas');

//menu//
 $a1 = new a("www.unidavi.com.br", "Pessoas");
 $a2 = new a("www.unidavi.com.br", "Produtos");
 $a3 = new a("www.unidavi.com.br", "Contas");
 $a4 = new a("www.unidavi.com.br", "Créditos");

 $li1 = new Li("list-group-item", $a1);
 $li2 = new Li("list-group-item", $a2);
 $li3 = new Li("list-group-item", $a3);
 $li4 = new Li("list-group-item", $a4);

$ul = new Ul("list-group", $li1, $li2, $li3, $li4);

//posicionamento pagina//
$divMenu = new Div("col-sm-2", $ul);
$divTabela = new Div("col-md-8", $tabela);

$grid = new Div("row row-cols-2", $divMenu, $divTabela);
$container = new Div("container", /* LINHA AZUL */ $grid);


$body = new Body($container);
$head = new Head($title, $linkBootstrap, $metaCharset, $metaHttEquiv, $metaName);
$html = new Html("pt-br", $head, $body);

echo $html;
?>

