<?php 

function is_logged_in()
{
    $ci = get_instance();

    // Cek apakah pengguna sudah login
    if (!$ci->session->userdata('username')) {
        // Jika belum login, arahkan ke halaman login
        redirect('auth');
    }
    // Jika sudah login, tidak melakukan apa-apa, biarkan pengguna tetap di halaman yang mereka akses
}


function check_access($id_role, $menu_id)
{
    $ci = get_instance();

    $ci->db->where('id_role', $id_role);
    $ci->db->where('menu_id', $menu_id);
    $result = $ci->db->get('user_access_menu');

    if ($result->num_rows() > 0) {
        return "checked='checked'";
    }
}

function tanggal_indo($tanggal) {
    $hari = array(
        1 => 'Senin',
        'Selasa',
        'Rabu',
        'Kamis',
        'Jumat',
        'Sabtu',
        'Minggu'
    );
    
    $bulan = array(
        1 => 'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    
    // Mengambil hari dan tanggal
    $num_day = date('N', strtotime($tanggal));
    $num_month = date('n', strtotime($tanggal));
    
    $day_name = $hari[$num_day];
    $day = date('j', strtotime($tanggal));
    $month = $bulan[$num_month];
    $year = date('Y', strtotime($tanggal));
    
    return $day_name . ', ' . $day . ' ' . $month . ' ' . $year;
}