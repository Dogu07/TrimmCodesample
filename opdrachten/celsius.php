<?php
print '<table style="border:#d3d3d3" cellspacing="0" cellpadding="3" border="1" align="left">';
print '<tr><th>Celsius</th><th>Fahrenheit</th><th>Kelvin</th></tr>';
for ($celsius = -50; $celsius <= 50; $celsius ++) {
    $fahr = ($celsius * 9) / 5 + 32 ;
    $kelvin = $celsius + 273.15;
    {
        if ($celsius > 0)
            $color = "00ff00";
        else if ($celsius < 0)
            $color = "#ff0000";
        else if ($celsius ==0)
            $color = "000ff";


}



    print "<tr> <td style='color: $color'>$celsius</td>
                <td style='color: $color'>$fahr</td>
                <td style='color: $color'>$kelvin</td>
           </tr>";
}
print '</table>';






