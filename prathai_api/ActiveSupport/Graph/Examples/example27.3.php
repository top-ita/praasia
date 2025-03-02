<?php
include ("../jpgraph.php");
include ("../jpgraph_pie.php");
include ("../jpgraph_pie3d.php");

$data = array (40, 60, 21, 33 );

$graph = new PieGraph ( 330, 200, "auto" );
$graph->SetShadow ();

$graph->title->Set ( "A simple 3D Pie plot" );
$graph->title->SetFont ( FF_FONT1, FS_BOLD );

$p1 = new PiePlot3D ( $data );
$p1->ExplodeSlice ( 1 );
$p1->SetCenter ( 0.45 );
$p1->SetLegends ( $gDateLocale->GetShortMonth () );

$graph->Add ( $p1 );
$graph->Stroke ();

?>


