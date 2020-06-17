<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Objects\Admin;
use App\Objects\NguoiDung;

class AdminController extends Controller
{
	private $admin;

	public function __construct() {
		$this->admin = new Admin();
	}

    //=====================================================================

	public function home($menu = null, $success = null) {
        if($menu == null)
    	    return view('admin.quan-tri');
        else {
        	if($success == null)
        		return view('admin.quan-tri')->with( compact('menu') );
        	else{
        		$info = "";
        		switch ($success) {
        			case '1':
        				$info = "Thêm dữ liệu thành công!";
        				break;
        			case '2':
        				$info = "Thêm dữ liệu không thành công!";
        				break;
        			case '3':
        				$info = "Cập nhật dữ liệu thành công!";
        				break;
        			case '4':
        				$info = "Cập nhật dữ liệu không thành công!";
        				break;
                    case '5':
                        $info = "Xóa dữ liệu thành công!";
                        break;
                    case '6':
                        $info = "Xóa dữ liệu không thành công!";
                        break;
                    case '7':
                        $info = "User đã được duyệt!";
                        break;
                    case '8':
                        $info = "Lỗi duyệt User!";
                        break;
        		}

        		return view('admin.quan-tri')->with( compact('menu', 'info') );
        	}
        } 
    }

    //=====================================================================

    public function hienThiThongBao() {
    	$duLieuThongBao = $this->admin->hien_thi_thong_bao();
    	return view('admin.thong-bao')->with(compact('duLieuThongBao'));
    }

    //=====================================================================

    public function themThongBao(Request $rq) {
        $data = $rq->all();
        $fileName = "";
        $fileSize = "";
        if ($rq->hasFile('fileToUpload')) {
            $file = $rq->fileToUpload;

            //Lấy Tên files
            $fileName = $file->getClientOriginalName();

            //Lấy kích cỡ của file đơn vị tính theo bytes
            $fileSize = $file->getSize();
        }

        if($fileName != "" && $fileSize < 10485760)
        {
            $file = $rq->fileToUpload;
            $fileName = url("public/img/upload/".$fileName);
            $file->move("public/img/upload", $file->getClientOriginalName());
            $duLieuThongBao = $this->admin->them_thong_bao($data, $fileName);
            return redirect("admin/home/thongbao/1");
        }
        else
        {
            return redirect("admin/home/thongbao/2");
        }
    }

    //=====================================================================

    public function xoaThongBao($id) {
        $kq = $this->admin->xoa_thong_bao($id);
        if($kq)
            return redirect("admin/home/thongbao/5");
        else
            return redirect("admin/home/thongbao/6");
    }

    //=====================================================================

    public function suaThongBao($id, Request $rq) {
        $data = $rq->all();
        $fileName = "";
        $fileSize = "";
        if ($rq->hasFile('fileToUpload')) {
            $file = $rq->fileToUpload;

            //Lấy Tên files
            $fileName = $file->getClientOriginalName();

            //Lấy kích cỡ của file đơn vị tính theo bytes
            $fileSize = $file->getSize();

            if($fileName != "" && $fileSize < 10485760)
            {
                $file = $rq->fileToUpload;
                $fileName = url("public/img/upload/".$fileName);
                $file->move("public/img/upload", $file->getClientOriginalName());
                $kq = $this->admin->sua_thong_bao($id, $fileName, $data);
                if($kq)
                    return redirect("admin/home/thongbao/3");
                else
                    return redirect("admin/home/thongbao/4");
            }
            else return redirect("admin/home/thongbao/4");
        }
        else {
            $fileName = "giữ lại";
            $kq = $this->admin->sua_thong_bao($id, $fileName, $data);
            if($kq)
                return redirect("admin/home/thongbao/3");
            else
                return redirect("admin/home/thongbao/4");
        }
    }

    //=====================================================================

    public function hienThiKinhPhi() {
    	$duLieuKinhPhi = $this->admin->hien_thi_kinh_phi();
    	return view('admin.kinh-phi')->with(compact('duLieuKinhPhi'));
    }

    //=====================================================================

    public function capNhatKinhPhi(Request $rq) {
    	//xu ly ép kiểu
    	$kp = $rq->soTien;
    	if( $this->admin->cap_nhat_kinh_phi($kp) )
			return redirect("admin/home/kinhphi/3");
		else return redirect("admin/home/kinhphi/4");
    }

    //=====================================================================

    public function hienThiDonVi() {
    	$duLieuDonVi = $this->admin->hien_thi_don_vi();
    	return view('admin.don-vi')->with(compact('duLieuDonVi'));
    }

    //=====================================================================

    public function xoaDonVi($maDV) {
        $kq = $this->admin->xoa_don_vi($maDV);
        if($kq)
            return redirect("admin/home/don-vi/5");
        else
            return redirect("admin/home/don-vi/6");
    }

    //=====================================================================

    public function danhSachChuaDuyet() {
        $danhsachUserChuaDuyet = $this->admin->user_chua_duyet();
        return view('admin.duyet-user')->with(compact('danhsachUserChuaDuyet'));
    }

    //=====================================================================
    
    public function xoaUser($id) {
        $kq = $this->admin->xoa_user($id);
        if($kq)
            return redirect("admin/home/duyet-user/5");
        else
            return redirect("admin/home/duyet-user/6");
    }

    //=====================================================================

    public function duyetUser($id) {
        if( $this->admin->duyet_user($id) )
            return redirect("admin/home/duyet-user/7");
        else return redirect("admin/home/duyet-user/8");
    }
}
