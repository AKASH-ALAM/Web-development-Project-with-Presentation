<?php
	/* Libchart - PHP chart library
	 * Copyright (C) 2005-2011 Jean-Marc Trémeaux (jm.tremeaux at gmail.com)
	 * 
	 * This program is free software: you can redistribute it and/or modify
	 * it under the terms of the GNU General Public License as published by
	 * the Free Software Foundation, either version 3 of the License, or
	 * (at your option) any later version.
	 * 
	 * This program is distributed in the hope that it will be useful,
	 * but WITHOUT ANY WARRANTY; without even the implied warranty of
	 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	 * GNU General Public License for more details.
	 *
	 * You should have received a copy of the GNU General Public License
	 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
	 * 
	 */
	
	/*
	 * Vertical bar chart demonstration
	 *
	 */

	include "../libchart/classes/libchart.php";
	include "../../db_conn.php";
	page_protect();

	$chart = new VerticalBarChart(900,300);
	$dataSet = new XYDataSet();
	$thisday=date('d');
	$dateconvert=date('Y-m-d', strtotime("-".$thisday." days"));
	
	for($j=1;$j<31;$j++)
	{
			$date=date('Y-m-d', strtotime("-".$j." days"));
$query = "select COUNT(invoice) from revisit_p_reg where register_on='$date'";

//echo $query;
$result = mysqli_query($con,$query);
$i=0;
    if(mysqli_affected_rows($con)!=0){
          while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
$count=$row['COUNT(invoice)'];
    }
   }
$i=0;
	$dataSet->addPoint(new Point($date, $count));
	}
	
	
	$chart->setDataSet($dataSet);

	$chart->setTitle("Last 30 Days of patients visits");
	$chart->render("generated/demo1.png");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15" />
</head>
<body>
	<img alt="Vertical bars chart" src="generated/demo1.png" style="border: 1px solid gray;"/>
</body>
</html>
