<?php
include ("../jpgraph.php");
include ("../jpgraph_line.php");

$ydata = array (11, 3, 8, 12, 5, 1, 9, 13, 5, 7 );

// Create the graph. These two calls are always required
$graph = new Graph ( 300, 200, "auto" );
$graph->SetScale ( "textlin" );

// Adjust the margin
$graph->img->SetMargin ( 40, 20, 20, 40 );
$graph->SetShadow ();

// Create the linear plot
$lineplot = new LinePlot ( $ydata );
$lineplot->mark->SetType ( MARK_UTRIANGLE );
$lineplot->value->show ();
$lineplot->value->SetColor ( 'darkred' );
$lineplot->value->SetFont ( FF_FONT1, FS_BOLD );
$lineplot->value->SetFormat ( '$%0.1f' );

// Add the plot to the graph
$graph->Add ( $lineplot );

$graph->title->Set ( "Displaying the values" );
$graph->xaxis->title->Set ( "X-title" );
$graph->yaxis->title->Set ( "Y-title" );

$graph->title->SetFont ( FF_FONT1, FS_BOLD );
$graph->yaxis->title->SetFont ( FF_FONT1, FS_BOLD );
$graph->xaxis->title->SetFont ( FF_FONT1, FS_BOLD );

$lineplot->SetColor ( "blue" );
$lineplot->SetWeight ( 2 );

// Display the graph
$graph->Stroke ();
?>
