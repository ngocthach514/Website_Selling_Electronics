<?php

include("model/m_binh_luan.php");
class C_binh_luan
{
    function get_all_binh_luan(){
        return (new M_binh_luan())->binh_luan_selectall2();
    }
    function hienthimanhinh()
    {
        // db
        $m_binh_luan = new M_binh_luan();
        $binh_luan = $m_binh_luan->binh_luan_selectall();

        // view
        $title = "Danh sách bình luận";
        $view = "view/binh_luan/v_quan_ly_binh_luan.php";
        include("view/layout/index.php");
    }
    function hien_thi_chi_tiet_binh_luan($ma_hang_hoa2)
    {
        $m_binh_luan = new M_binh_luan();
        $binh_luan_by_id = $m_binh_luan->binh_luan_select_by_id($ma_hang_hoa2);
      
        $title = "Danh sách bình luận theo sản phẩm";
        $view = "view/binh_luan/v_binh_luan_by_ma_hang.php";
        include("view/layout/index.php");
    }
    // function binh_luan($bl, $ma_khach_hang)
    // {

    //     $m_binh_luan = new M_binh_luan();
    //     return $m_binh_luan->them_binh_luan($bl, $ma_khach_hang);
     
    // }
    function binh_luan_hang_hoa($bl_mh)
    {
        $m_binh_luan = new M_binh_luan();
        $binh_luan2 = $m_binh_luan->binh_luan_by_ma_hang($bl_mh);
    }
    function them_bl( $ma_hang_hoa, $noi_dung, $ma_khach_hang){
        $m_binh_luan = new M_binh_luan();
        return $m_binh_luan->them_binh_luan($ma_hang_hoa, $noi_dung, $ma_khach_hang);
    }
}
