<?php
$a = $_POST['a'];
$b = $_POST["b"];
$u0 = $_POST["u_0"];
$u1 = $_POST["u_1"];
$result = [];
$result_str = "";
exec("maxima --run-string=\"load(solve_rec); solve_rec(u[n+2] = $a*u[n+1] + $b*u[n], u[n], u[0]=$u0, u[1]=$u1); tex(%o2); quit();\"", $result);
$k = 0;
for ($i = 0; $i < count($result); $i++) {
    // echo $result[$i] . '<br>';
    if (strpos($result[$i], '$$') !== false) {
        $result_str = $result_str . $result[$i];
        $k++;
    } else if ($k === 1) {
        if ($i + 1 < count($result) && strpos($result[$i + 1], '$$') !== false) {
            $result_str = $result_str . $result[$i];
            $k++;
        }
    }
}
// substr($result_str, 0, strpos($result_str, '\leqno(%o2)'));
$result_str = str_replace('\leqno{\tt (\%o2)}', '', $result_str);

echo $result_str;
