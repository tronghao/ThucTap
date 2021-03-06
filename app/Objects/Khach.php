<?php
namespace App\Objects;

use App\Objects\NguoiDung;
use App\Objects\ThongBao;
use App\ThongBaoModel;
use App\SinhVienModel;
use App\GiangVienModel;
use App\NguoiHuongDanModel;
use App\LopModel;
use App\Objects\Lop;
use App\HocViModel;
use App\Objects\HocVi;
use App\DonViThucTapModel;
use App\Objects\DonVi;
use App\ChucVuModel;
use App\Objects\ChucVu;
use App\Objects\SinhVien;
use App\Objects\GiangVien;
use App\Objects\NguoiHuongDan;


class Khach {
	private $thongBao;
    private $lop;
    private $user;
    private $sinhvien;
    private $giangvien;
    private $canbo;
    private $hocVi;
    private $donVi;
    private $chucVu;

	public function __construct() {
		$this->thongBao = new ThongBao();
        $this->lop = new Lop();
        $this->user = new NguoiDung();
        $this->sinhvien = new SinhVien();
        $this->giangvien = new GiangVien();
        $this->canbo = new NguoiHuongDan();
        $this->hocVi = new HocVi();
        $this->donVi = new DonVi();
        $this->chucVu = new ChucVu();
	}

    //========================================================

	public function get_3_thong_bao() {
		$listThongBao = $this->thongBao->get_3_thong_bao();
		return $listThongBao;
	}

    //========================================================

    public function get_1_thong_bao($id) {
        $tb = $this->thongBao->get_1_thong_bao( $id );
        return $tb;
    }

    //========================================================

    public function luu_user( $hoTen, $email, $trangThai, $anhDaiDien, $loaiUser ) {
        $dataNguoiDung = new NguoiDung();
        $dataNguoiDung->setData($hoTen, $email, $trangThai, $anhDaiDien, $loaiUser);
        $dataNguoiDung->luu_du_lieu($dataNguoiDung);
    }

    //========================================================

	public function ton_tai_user( $email ) {
        if( $this->user->ton_tai_user( $email ) )
            return true;
        else return false;
	}

    //========================================================

	public function getUserByEmail($email) {
        $user_item = $this->user->getUser( $email );
        return $user_item;
    }

    //========================================================

    public function cap_nhat_thong_tin($data, $user, $email) {
    	switch ($user) {
            case 'sinhvien':
                $this->sinhvien->cap_nhat_du_lieu($email, $data);
                break;
            case 'giangvien':
                $this->giangvien->cap_nhat_du_lieu($email, $data);
                break;
            case 'canbo':
                $this->canbo->cap_nhat_du_lieu($email, $data);
                break;
        }
    }

    //========================================================

    public function getAllLop() {
    	$data = $this->lop->getAllLop();
    	return $data;
    }

    //========================================================

    public function getAllHocVi() {
    	$listHV = $this->hocVi->getAll();
        return $listHV;
    }

    //========================================================

    public function getAllDonVi() {
    	$listDonVi = $this->donVi->getAll();
        return $listDonVi;
    }

    //========================================================

    public function getAllChucVu() {
    	$data = $this->chucVu->getAll();
    	return $data;
    }
}