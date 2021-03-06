<ul>
	<li>
		<a href="index.php?t=nuevo_evento">Crear Evento</a>
	</li>
</ul>

<div class="calendario">
    
    <div id="test"></div>  <!--Sección izquierda muestra calendario-->

    <script>
        var fecha;

    function showHint() { //Dibuja eventos

            window.location.href = 'index.php?t=eventos&fecha='+fecha;

    }
    </script>

    <SCRIPT LANGUAGE="JavaScript">
    var dDate = new Date();
    var dCurMonth = dDate.getMonth();
    var dCurDayOfMonth = dDate.getDate();
    var dCurYear = dDate.getFullYear();
    var objPrevElement = new Object();
    function fToggleColor(myElement) {
        var toggleColor = "#ff0000";
        if (myElement.id == "calDateText") {
        if (myElement.color == toggleColor) {
        myElement.color = "";
        } else {
        myElement.color = toggleColor;
           }
        } else if (myElement.id == "calCell") {
        for (var i in myElement.children) {
        if (myElement.children[i].id == "calDateText") {
        if (myElement.children[i].color == toggleColor) {
        myElement.children[i].color = "";
        } else {
        myElement.children[i].color = toggleColor;
                    }
                 }
              }
           }
    }
    function fSetSelectedDay(myElement){
        if (myElement.id == "calCell") {
                if (!isNaN(parseInt(myElement.children["calDateText"].innerText))) {
                myElement.bgColor = "#c0c0c0";

                objPrevElement.bgColor = "";
                document.all.calSelectedDate.value = parseInt(myElement.children["calDateText"].innerText);
                objPrevElement = myElement;

                fecha = frmCalendarSample.tbSelYear.value + "-" + frmCalendarSample.tbSelMonth.value + "-" + document.all.calSelectedDate.value;

                showHint();

               }
        }
    }
    function fGetDaysInMonth(iMonth, iYear) {
    var dPrevDate = new Date(iYear, iMonth, 0);
    return dPrevDate.getDate();
    }
    function fBuildCal(iYear, iMonth, iDayStyle) {
    var aMonth = new Array();
    aMonth[0] = new Array(7);
    aMonth[1] = new Array(7);
    aMonth[2] = new Array(7);
    aMonth[3] = new Array(7);
    aMonth[4] = new Array(7);
    aMonth[5] = new Array(7);
    aMonth[6] = new Array(7);
    var dCalDate = new Date(iYear, iMonth-1, 1);
    var iDayOfFirst = dCalDate.getDay();
    var iDaysInMonth = fGetDaysInMonth(iMonth, iYear);
    var iVarDate = 1;
    var i, d, w;
    if (iDayStyle == 2) {
    aMonth[0][0] = "Sunday";
    aMonth[0][1] = "Monday";
    aMonth[0][2] = "Tuesday";
    aMonth[0][3] = "Wednesday";
    aMonth[0][4] = "Thursday";
    aMonth[0][5] = "Friday";
    aMonth[0][6] = "Saturday";
    } else if (iDayStyle == 1) {
    aMonth[0][0] = "Sun";
    aMonth[0][1] = "Mon";
    aMonth[0][2] = "Tue";
    aMonth[0][3] = "Wed";
    aMonth[0][4] = "Thu";
    aMonth[0][5] = "Fri";
    aMonth[0][6] = "Sat";
    } else {
    aMonth[0][0] = "Su";
    aMonth[0][1] = "Mo";
    aMonth[0][2] = "Tu";
    aMonth[0][3] = "We";
    aMonth[0][4] = "Th";
    aMonth[0][5] = "Fr";
    aMonth[0][6] = "Sa";
    }
    for (d = iDayOfFirst; d < 7; d++) {
    aMonth[1][d] = iVarDate;
    iVarDate++;
    }
    for (w = 2; w < 7; w++) {
    for (d = 0; d < 7; d++) {
    if (iVarDate <= iDaysInMonth) {
    aMonth[w][d] = iVarDate;
    iVarDate++;
          }
       }
    }
    return aMonth;
    }
    function fDrawCal(iYear, iMonth, iCellWidth, iCellHeight, sDateTextSize, sDateTextWeight, iDayStyle) {
    var myMonth;
    myMonth = fBuildCal(iYear, iMonth, iDayStyle);
    document.write("<table border='1'>")
    document.write("<tr>");
    document.write("<td align='center' style='FONT-FAMILY:Arial;FONT-SIZE:12px;FONT-WEIGHT: bold'>" + myMonth[0][0] + "</td>");
    document.write("<td align='center' style='FONT-FAMILY:Arial;FONT-SIZE:12px;FONT-WEIGHT: bold'>" + myMonth[0][1] + "</td>");
    document.write("<td align='center' style='FONT-FAMILY:Arial;FONT-SIZE:12px;FONT-WEIGHT: bold'>" + myMonth[0][2] + "</td>");
    document.write("<td align='center' style='FONT-FAMILY:Arial;FONT-SIZE:12px;FONT-WEIGHT: bold'>" + myMonth[0][3] + "</td>");
    document.write("<td align='center' style='FONT-FAMILY:Arial;FONT-SIZE:12px;FONT-WEIGHT: bold'>" + myMonth[0][4] + "</td>");
    document.write("<td align='center' style='FONT-FAMILY:Arial;FONT-SIZE:12px;FONT-WEIGHT: bold'>" + myMonth[0][5] + "</td>");
    document.write("<td align='center' style='FONT-FAMILY:Arial;FONT-SIZE:12px;FONT-WEIGHT: bold'>" + myMonth[0][6] + "</td>");
    document.write("</tr>");
    for (w = 1; w < 7; w++) {
    document.write("<tr>")
    for (d = 0; d < 7; d++) {
    document.write("<td align='left' valign='top' width='" + iCellWidth + "' height='" + iCellHeight + "' id=calCell style='CURSOR:Hand' onMouseOver='fToggleColor(this)' onMouseOut='fToggleColor(this)' onclick=fSetSelectedDay(this)>");
    if (!isNaN(myMonth[w][d])) {
    document.write("<font id=calDateText onMouseOver='fToggleColor(this)' style='CURSOR:Hand;FONT-FAMILY:Arial;FONT-SIZE:" + sDateTextSize + ";FONT-WEIGHT:" + sDateTextWeight + "' onMouseOut='fToggleColor(this)' onclick=fSetSelectedDay(this)>" + myMonth[w][d] + "</font>");
    } else {
    document.write("<font id=calDateText onMouseOver='fToggleColor(this)' style='CURSOR:Hand;FONT-FAMILY:Arial;FONT-SIZE:" + sDateTextSize + ";FONT-WEIGHT:" + sDateTextWeight + "' onMouseOut='fToggleColor(this)' onclick=fSetSelectedDay(this)> </font>");
    }
    document.write("</td>")
    }
    document.write("</tr>");
    }
    document.write("</table>")

    }
    function fUpdateCal(iYear, iMonth) {
    myMonth = fBuildCal(iYear, iMonth);
    objPrevElement.bgColor = "";
    document.all.calSelectedDate.value = "";
    for (w = 1; w < 7; w++) {
    for (d = 0; d < 7; d++) {
    if (!isNaN(myMonth[w][d])) {
    calDateText[((7*w)+d)-7].innerText = myMonth[w][d];
    } else {
    calDateText[((7*w)+d)-7].innerText = " ";
             }
          }
       }
    }
    // End -->
    </script>
    </head>
    </HEAD>

    <!-- STEP TWO: Copy this code into the BODY of your HTML document  -->

    <BODY>

    <script language="JavaScript" for=window event=onload>
    <!-- Begin
    var dCurDate = new Date();
    frmCalendarSample.tbSelMonth.options[dCurDate.getMonth()].selected = true;
    for (i = 0; i < frmCalendarSample.tbSelYear.length; i++)
    if (frmCalendarSample.tbSelYear.options[i].value == dCurDate.getFullYear())
    frmCalendarSample.tbSelYear.options[i].selected = true;
    //  End -->
    </script>

    <form name="frmCalendarSample" method="post" action="">
    <input type="hidden" name="calSelectedDate" value="">

    <table border="1">
    <tr>
    <td>
    <select id="tbSelMonth" name="tbSelMonth" onchange='fUpdateCal(frmCalendarSample.tbSelYear.value, frmCalendarSample.tbSelMonth.value)'>
    <option value="1">January</option>
    <option value="2">February</option>
    <option value="3">March</option>
    <option value="4">April</option>
    <option value="5">May</option>
    <option value="6">June</option>
    <option value="7">July</option>
    <option value="8">August</option>
    <option value="9">September</option>
    <option value="10">October</option>
    <option value="11">November</option>
    <option value="12">December</option>
    </select>

    <select id="tbSelYear" name="tbSelYear" onchange='fUpdateCal(frmCalendarSample.tbSelYear.value, frmCalendarSample.tbSelMonth.value)'>
    <option value="2015">2015</option>
    <option value="2016">2016</option>
    <option value="2017">2017</option>
    <option value="2018">2018</option>
    <option value="2019">2019</option>
    <option value="2020">2020</option>
    <option value="2021">2021</option>
    </select>
    </td>
    </tr>
    <tr>
    <td>
    <script language="JavaScript">
    var dCurDate = new Date();
    fDrawCal(dCurDate.getFullYear(), dCurDate.getMonth()+1, 30, 30, "12px", "bold", 1);
        document.getElementById("tbSelYear").value = dDate.getFullYear();

        document.getElementById("tbSelMonth").value = dDate.getMonth()+1;

    </script>
    </td>
    </tr>
    </table>
    </form>

    <!-- Script Size:  7.06 KB -->
</div>


<div class="eventos"> <!--Sección derecha muestra eventos-->
    
    <tr>
	<td><h3>Eventos:</h3></td>
    </tr>
    
    <?php

        $fecha = isset($_GET["fecha"]) ? $_GET["fecha"] : '';

        if($fecha != '')
        {
            include('content/base_datos/conexion_bd.php');

            $sql = "SELECT * FROM evento WHERE fecha='".$fecha."'";

            $res = mysqli_query($conexion_bd, $sql);

            while($row = mysqli_fetch_assoc($res))
            {   
                if ($row["realizado"] == 1)
                {
                    $realizado = "Sí";
                    
                }
                else
                {
                    $realizado = "No";
                    
                }
                
                echo '<div id="evento">
                    <table>
                        <tr>
                            <td>
                                <label for="tipo">Tipo: </label>
                                <label id="tipo">'.$row["tipo"].'<br></label>
                            </td>

                            <td>
                                <label for="realizado">Realizado: </label>
                                <label id="realizado">'.$realizado.'<br></label>
                            </td>

                            <td>
                                    <div id="ver">
                                            <a href="index.php?t=modificar_evento&id_evento='.$row["id_evento"].'"> Ver </a>'.'
                                    </div>
                            </td>

                            <td>
                                    <div id="eliminar">
                                            <a href="index.php?t=modificar_evento&eliminar=true&id_evento='.$row["id_evento"].'"> Eliminar </a>'.'
                                    </div>
                            </td>
                    
                        </tr>
                    </table>
                </div>';
            }    
        }
    ?>
</div>