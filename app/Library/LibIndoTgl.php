<?php namespace App\Library;

class LibIndoTgl {

public static function tgl_indo($tgl){
	$tanggal = substr($tgl,8,2);
	$bulan = LibIndoTgl::getBulan(substr($tgl,5,2));
	$tahun = substr($tgl,0,4);
	return $tanggal.' '.$bulan.' '.$tahun;
}

public static function hari($hari){
	if ($hari == "Sunday") return $hari = "Minggu";
	else if ($hari == "Monday") return  $hari = "Senin";
	else if ($hari == "Tuesday") return $hari = "Selasa";
	else if ($hari == "Wednesday") return $hari = "Rabu";
	else if ($hari == "Thursday") return $hari = "Kamis";
	else if ($hari == "Friday") return $hari = "Jumat";
	else if ($hari == "Saturday") return $hari = "Sabtu";
}

public static function getBulan($bln){
	switch ($bln){
	case 1:
	return "Januari";
	break;

	case 2:
	return "Februari";
	break;

	case 3:
	return "Maret";
	break;

	case 4:
	return "April";
	break;

	case 5:
	return "Mei";
	break;

	case 6:
	return "Juni";
	break;

	case 7:
	return "Juli";
	break;

	case 8:
	return "Agustus";
	break;

	case 9:
	return "September";
	break;

	case 10:
	return "Oktober";
	break;

	case 11:
	return "November";
	break;
	case 12:
	return "Desember";
	break;
	}
}

}

?>