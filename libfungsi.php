<?php
//Method persentase nilai akhir
function persentase($_uts, $_uas, $_tugas)
{
    $result = (30 * (int)$_uts / 100) + (30 * (int)$_uas / 100) + (30 * (int)$_tugas / 100);
    return $result;
}

//Method kelulusan
function kelulusan($_nilai)
{
    if ($_nilai > 55) {
        return "LULUS";
    } else {
        return "TIDAK LULUS";
    }
}

//Method grade
function grade_nilai($_nilai)
{
    if ($_nilai > 85) {
        return "A";
    } elseif ($_nilai > 70) {
        return "B";
    } elseif ($_nilai > 56) {
        return "C";
    } elseif ($_nilai > 36) {
        return "D";
    } elseif ($_nilai > 0) {
        return "E";
    } else {
        return "I";
    }
}

//Method predikat nilai
function predikat_nilai($_grade)
{
    switch ($_grade) {
        case "A":
            return "Sangat Baik";
            break;
        case "B":
            return "Cukup Baik";
            break;
        case "C":
            return "Baik";
            break;
        case "D":
            return "kurang";
            break;
        case "E":
            return "Sangat kurang";
            break;
        default:
            return "Tidak ada presikat";
    }
}
