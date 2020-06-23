<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      //admin pass: 12345678
        DB::table('users')->insert([
          array( 
                'hoTen' => 'Quản Trị Viên', 
                'email' => 'admin@admin',
                'anhDaiDien' => 'https://weplus.vn/wp-content/uploads/avatars/1/5d6dee5365c67-bpthumb.png',
                'password' => '$2y$10$ON5t12fH9MwVQRrNM6u8N.vfpLGUduWHmgJRagAXQvN9ffKnAd0KW',
                'sdt' => '',
                'trangThai' => 'admin',
                'loiGioiThieu' => '',
                'loaiUser' => 'Admin'
              ),
          array(
                'hoten' => 'Nguyễn Minh Bé',
                'email' => '110117001@sv.tvu.edu.vn',
                'anhDaiDien' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTQuHWTw485tT27sG2g3SUyd3DSKNFzjZXe_b1ESR1GP9aKv4Oe&usqp=CAU',
                'password' => 'djflkdsafdsfdsipofsdvuioxvncxvasfjdiofjwoirueojsdkfjsdfsdj',
                'sdt' => '0123456781',
                'trangThai' => 'chờ duyệt',
                'loiGioiThieu' => 'Tôi là sinh viên',
                'loaiUser' => 'sinh viên'
              ),
          array(
                'hoten' => 'Nguyễn Minh Minh',
                'email' => '110117002@sv.tvu.edu.vn',
                'anhDaiDien' => 'https://lh3.googleusercontent.com/proxy/3WWucPpz_62J0VoNz01zkJ9HVN_mxWIr3oJ1lvvUeuuOB5_inkFcCSF5YtTmvQKV2TLofkJsrSMjfnmRqbznPoGyExEokrAndiNh3ng8CF00dt2mT28ApIrzjUleykw',
                'password' => 'djflkdsafdsfdsipofsdvuioxvncxvasfjdiofjwoirueojsdkfjsdfsdj',
                'sdt' => '0123456782',
                'trangThai' => 'chờ duyệt',
                'loiGioiThieu' => 'Tôi là sinh viên',
                'loaiUser' => 'sinh viên'
              ),
          array(
                'hoten' => 'Nguyễn Trọng Đào',
                'email' => '110117003@sv.tvu.edu.vn',
                'anhDaiDien' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTQuHWTw485tT27sG2g3SUyd3DSKNFzjZXe_b1ESR1GP9aKv4Oe&usqp=CAU',
                'password' => 'djflkdsafdsfdsipofsdvuioxvncxvasfjdiofjwoirueojsdkfjsdfsdj',
                'sdt' => '0123456783',
                'trangThai' => 'chờ duyệt',
                'loiGioiThieu' => 'Tôi là sinh viên',
                'loaiUser' => 'sinh viên'
              ),
          array(
                'hoten' => 'Kiên Văn Duy',
                'email' => '110117004@sv.tvu.edu.vn',
                'anhDaiDien' => 'https://lh3.googleusercontent.com/proxy/3WWucPpz_62J0VoNz01zkJ9HVN_mxWIr3oJ1lvvUeuuOB5_inkFcCSF5YtTmvQKV2TLofkJsrSMjfnmRqbznPoGyExEokrAndiNh3ng8CF00dt2mT28ApIrzjUleykw',
                'password' => 'djflkdsafdsfdsipofsdvuioxvncxvasfjdiofjwoirueojsdkfjsdfsdj',
                'sdt' => '0123456784',
                'trangThai' => 'chờ duyệt',
                'loiGioiThieu' => 'Tôi là sinh viên',
                'loaiUser' => 'sinh viên'
              ),
          array(
                'hoten' => 'Nhan Minh Phúc',
                'email' => 'nmphuc@tvu.edu.vn',
                'anhDaiDien' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTQuHWTw485tT27sG2g3SUyd3DSKNFzjZXe_b1ESR1GP9aKv4Oe&usqp=CAU',
                'password' => 'djflkdsafdsfdsipofsdvuioxvncxvasfjdiofjwoirueojsdkfjsdfsdj',
                'sdt' => '0918603800',
                'trangThai' =>   'chờ duyệt',
                'loiGioiThieu' => 'Tôi là giảng viên',
                'loaiUser' => 'giảng viên'
              ),
          array(
                'hoten' => 'Phan Thị Phương Nam',
                'email' => 'ptpnam@tvu.edu.vn',
                'anhDaiDien' => 'https://lh3.googleusercontent.com/proxy/3WWucPpz_62J0VoNz01zkJ9HVN_mxWIr3oJ1lvvUeuuOB5_inkFcCSF5YtTmvQKV2TLofkJsrSMjfnmRqbznPoGyExEokrAndiNh3ng8CF00dt2mT28ApIrzjUleykw',
                'password' => 'djflkdsafdsfdsipofsdvuioxvncxvasfjdiofjwoirueojsdkfjsdfsdj',
                'sdt' => '0989236100',
                'trangThai' =>   'chờ duyệt',
                'loiGioiThieu' => 'Tôi là giảng viên',
                'loaiUser' => 'giảng viên'
              ),
          array(
                'hoten' => 'Dương Ngọc Vân Khanh',
                'email' => 'vankhanh@gmail.com',
                'anhDaiDien' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRydLSvuKEq1VQ-k_l7C-dQquzeLp12ZGRjcMrpBysJ2GezLJuO&usqp=CAU',
                'password' => 'djflkdsafdsfdsipofsdvuioxvncxvasfjdiofjwoirueojsdkfjsdfsdj',
                'sdt' => '0988332000',
                'trangThai' =>   'chờ duyệt',
                'loiGioiThieu' => 'Tôi là nhân viên công ty BStar',
                'loaiUser' => 'người hướng dẫn'
              ),
          array(
                'hoten' => 'Nguyễn Bá Nhiệm',
                'email' => 'nhiemnb@gmail.com',
                'anhDaiDien' => 'https://lh3.googleusercontent.com/proxy/kRoPLUBJqum-S04A_BfuskDobxoXrcfZ75Fk2t9_5DEJMtJfJYxld5O7iT8mZYNTXfku9uCu0Vo6SZmgz93b9h1ZlSZqa13sGQ10yMXe7i-1RyK_9W_oGdYoxjDkQJN6sxsp6PVm5SC3GkKpLWOT7v0_',
                'password' => 'djflkdsafdsfdsipofsdvuioxvncxvasfjdiofjwoirueojsdkfjsdfsdj',
                'sdt' => '0983303600',
                'trangThai' =>   'chờ duyệt',
                'loiGioiThieu' => 'Tôi là nhân viên công ty BStar',
                'loaiUser' => 'người hướng dẫn'
              ),
          array(
                'hoten' => 'Phạm Thái',
                'email' => 'pthai@gmail.com',
                'anhDaiDien' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRydLSvuKEq1VQ-k_l7C-dQquzeLp12ZGRjcMrpBysJ2GezLJuO&usqp=CAU',
                'password' => 'djflkdsafdsfdsipofsdvuioxvncxvasfjdiofjwoirueojsdkfjsdfsdj',
                'sdt' => '0918603801',
                'trangThai' =>   'chờ duyệt',
                'loiGioiThieu' => 'Tôi là nhân viên công ty TMA',
                'loaiUser' => 'người hướng dẫn'
              ),
          array(
              'hoten' => 'Đỗ Trọng Hợp',
              'email' => 'dthop@gmail.com',
              'anhDaiDien' => 'https://lh3.googleusercontent.com/proxy/kRoPLUBJqum-S04A_BfuskDobxoXrcfZ75Fk2t9_5DEJMtJfJYxld5O7iT8mZYNTXfku9uCu0Vo6SZmgz93b9h1ZlSZqa13sGQ10yMXe7i-1RyK_9W_oGdYoxjDkQJN6sxsp6PVm5SC3GkKpLWOT7v0_',
              'password' => 'djflkdsafdsfdsipofsdvuioxvncxvasfjdiofjwoirueojsdkfjsdfsdj',
              'sdt' => '0989236101',
              'trangThai' =>   'chờ duyệt',
              'loiGioiThieu' => 'Tôi là nhân viên công ty TMA',
              'loaiUser' => 'người hướng dẫn'
            ),
          array(
              'hoten' => 'Lâm Thành Thép',
              'email' => 'ltthep@gmail.com',
              'anhDaiDien' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRydLSvuKEq1VQ-k_l7C-dQquzeLp12ZGRjcMrpBysJ2GezLJuO&usqp=CAU',
              'password' => 'djflkdsafdsfdsipofsdvuioxvncxvasfjdiofjwoirueojsdkfjsdfsdj',
              'sdt' => '0988332001',
              'trangThai' =>   'chờ duyệt',
              'loiGioiThieu' => 'Tôi là nhân viên công ty FPT',
              'loaiUser' => 'người hướng dẫn'
            ),
          array(
              'hoten' => 'Vũ Văn Hiếu',
              'email' => 'vvhieu@gmail.com',
              'anhDaiDien' => 'https://lh3.googleusercontent.com/proxy/kRoPLUBJqum-S04A_BfuskDobxoXrcfZ75Fk2t9_5DEJMtJfJYxld5O7iT8mZYNTXfku9uCu0Vo6SZmgz93b9h1ZlSZqa13sGQ10yMXe7i-1RyK_9W_oGdYoxjDkQJN6sxsp6PVm5SC3GkKpLWOT7v0_',
              'password' => 'djflkdsafdsfdsipofsdvuioxvncxvasfjdiofjwoirueojsdkfjsdfsdj',
              'sdt' => '0983303601',
              'trangThai' =>   'chờ duyệt',
              'loiGioiThieu' => 'Tôi là nhân viên công ty FPT',
              'loaiUser' => 'người hướng dẫn'
            ),

        ]);

        DB::table('thong-bao')->insert([
          array('id'=>1,
          		'img'=>'https://img-cache.coccoc.com/image?url=https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/320px-Image_created_with_a_mobile_phone.png&f=w',
          		'title'=>'Lao động kinh nghiệm, cấp bậc cao cũng lo thất nghiệp',
          		'content'=>'<p>Navigos Search vừa chạy thử chiến dịch "Career Support - Hỗ trợ sự nghiệp" trong một tuần cho người lao động. Hơn 1.200 ứng viên ở đa dạng các ngành nghề và lĩnh vực đã gửi hồ sơ về để mong nhận được hỗ trợ giới thiệu cơ hội việc làm mới trong đại dịch. Kết quả là, gần một nửa số hồ sơ đề xuất hỗ trợ việc làm đến từ nhóm ứng viên cấp trung.Cụ thể, 27% đang giữ vị trí phó, trưởng phòng; 19% là trưởng nhóm, giám sát. Ngoài ra, 35% hồ sơ là nhân viên có kinh nghiệm, chuyên viên và chỉ 9% thuộc cấp bậc mới ra trường, dưới 2 năm kinh nghiệm.</p>

					<p>Đáng chú ý, 41% ứng viên nộp hồ sơ có hơn 8 năm kinh nghiệm. Navigos cho rằng, điều này phản ánh các ứng viên cấp trung có nhiều năm kinh nghiệm cũng đang gặp khó khăn khi tìm kiếm cơ hội mới. 32% ứng viên có hơn 10 năm kinh nghiệm và 9% có từ 8 – 10 năm kinh nghiệm.</p>

					<p>Việc ứng viên có kinh nghiệm lâu năm đổ xô tìm việc có thể do thu nhập tại công ty hiện tại giảm mạnh mùa dịch hoặc bị thất nghiệp vì công ty ngừng hoạt động. Số liệu quý I của Tổng cục Thống kê mới công bố cũng cho thấy điều này.</p>

					<p>Số doanh nghiệp thành lập mới nhiều hơn nhưng số ngừng kinh doanh còn tăng cao hơn. Trong ba tháng đầu năm, cả nước có 29.700 doanh nghiệp đăng ký thành lập mới, tăng 4,4%, 14.800 doanh nghiệp trở lại hoạt động nhưng số ngừng kinh doanh có thời hạn lên tới 18.600 doanh nghiệp, tăng 26%. </p>',
          		'quote'=>'Navigos Search vừa chạy thử chiến dịch "Career Support - Hỗ trợ sự nghiệp" trong một tuần cho người lao động. Hơn 1.200 ứng viên ở đa dạng các ngành nghề và lĩnh vực đã gửi hồ sơ về để mong nhận được hỗ trợ giới thiệu cơ hội việc làm mới trong đại dịch. Kết quả là, gần một nửa số hồ sơ đề xuất hỗ trợ việc làm đến từ nhóm ứng viên cấp trung.',
              'email' => 'admin@admin',
            ),

          array('id'=>2,
          		'img'=>'https://img-cache.coccoc.com/image?url=https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/320px-Image_created_with_a_mobile_phone.png&f=w',
          		'title'=>'Thông báo 2',
          		'content'=>'',
          		'quote'=>'',
              'email' => 'admin@admin',
            ),

          array('id'=>3,
          		'img'=>'https://img-cache.coccoc.com/image?url=https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/320px-Image_created_with_a_mobile_phone.png&f=w',
          		'title'=>'Thông báo 3',
          		'content'=>'',
          		'quote'=>'',
              'email' => 'admin@admin',
            ),

        ]);

        DB::table('nganh')->insert([
          array('maNganh' => 'N01', 'tenNganh' => 'Công nghệ thông tin'),
          array('maNganh' => 'N02', 'tenNganh' => 'Quản trị mạng'),
        ]);

        DB::table('donvithuctap')->insert([
          array('maDonVi' => 'DV01', 
                'tenDonVi' => 'BStar Solutions',
                'diaChiDonVi' => 'Company 56 Yên Thế, Phường 2, Tân Bình, Hồ Chí Minh',
                'sdtDonVi' => '0918603812',
                'soKM' => '130'
              ),
          array('maDonVi' => 'DV02', 
                'tenDonVi' => 'TMA Solutions',
                'diaChiDonVi' => '111 Nguyễn Đình Chính, Phường 15, Phú Nhuận, Hồ Chí Minh',
                'sdtDonVi' => '0989236113',
                'soKM' => '110'
              ),
          array('maDonVi' => 'DV03', 
                'tenDonVi' => 'FPT Software',
                'diaChiDonVi' => ' Đường D1, Khu Công Nghệ Cao, Phường Tân Phú, Quận 9, Hồ Chí Minh',
                'sdtDonVi' => '0988332014',
                'soKM' => '95'
              ),
        ]);

        DB::table('kinhphihotro')->insert([
          array('idKinhPhi' => 1, 'soTien' => 10000),
        ]);

        DB::table('hocvi')->insert([
          array('maHocVi' => 'HV01', 'tenHocVi' => 'Tú tài'),
          array('maHocVi' => 'HV02', 'tenHocVi' => 'Cử Nhân'),
          array('maHocVi' => 'HV03', 'tenHocVi' => 'Kỹ Sư'),
          array('maHocVi' => 'HV04', 'tenHocVi' => 'Bác Sĩ'),
          array('maHocVi' => 'HV05', 'tenHocVi' => 'Dược Sĩ'),
          array('maHocVi' => 'HV06', 'tenHocVi' => 'Thạc Sĩ'),
          array('maHocVi' => 'HV07', 'tenHocVi' => 'Tiến Sĩ'),
          array('maHocVi' => 'HV08', 'tenHocVi' => 'Tiến Sĩ Khoa Học'),
        ]);

        DB::table('chucvu')->insert([
          array('maChucVu' => 'CV01', 'tenChucVu' => 'Trưởng Khoa'),
          array('maChucVu' => 'CV02', 'tenChucVu' => 'Phó Khoa'),
          array('maChucVu' => 'CV03', 'tenChucVu' => 'Trưởng phòng giáo vụ'),
          array('maChucVu' => 'CV04', 'tenChucVu' => 'Trưởng Bộ Môn'),
          array('maChucVu' => 'CV05', 'tenChucVu' => 'Phó Bộ Môn'),
          array('maChucVu' => 'CV06', 'tenChucVu' => 'Giám đốc'),
          array('maChucVu' => 'CV07', 'tenChucVu' => 'Phó giám đốc'),
          array('maChucVu' => 'CV08', 'tenChucVu' => 'Nhân Viên'),
          array('maChucVu' => 'CV09', 'tenChucVu' => 'Trưởng phòng'),
        ]);

        DB::table('giangvien')->insert([
          array('email' => 'nmphuc@tvu.edu.vn', 'maHocVi' => 'HV06'),
          array('email' => 'ptpnam@tvu.edu.vn', 'maHocVi' => 'HV06'),
        ]);

        DB::table('nguoihuongdan')->insert([
          array('email' => 'vankhanh@gmail.com', 'maChucVu' => 'CV08', 'maDonVi' => 'DV01'),
          array('email' => 'nhiemnb@gmail.com', 'maChucVu' => 'CV09', 'maDonVi' => 'DV01'),
          array('email' => 'pthai@ gmail.com', 'maChucVu' => 'CV08', 'maDonVi' => 'DV02'),
          array('email' => 'dthop@ gmail.com', 'maChucVu' => 'CV09', 'maDonVi' => 'DV02'),
          array('email' => 'ltthep@ gmail.com', 'maChucVu' => 'CV08', 'maDonVi' => 'DV03'),
          array('email' => 'vvhieu@ gmail.com', 'maChucVu' => 'CV09', 'maDonVi' => 'DV03'),
        ]);

        DB::table('lop')->insert([
          array('maLop' => 'DA16TT', 'tenLop' => 'Đại học Công nghệ Thông tin 2016', 'maNganh' => 'N01'),
          array('maLop' => 'DA16QTM', 'tenLop' => 'Đại học Quản trị mạng 2016', 'maNganh' => 'N02'),
        ]);

        DB::table('sinhvien')->insert([
          array('email' => '110117001@sv.tvu.edu.vn', 'maLop' => 'DA16TT'),
          array('email' => '110117002@sv.tvu.edu.vn', 'maLop' => 'DA16TT'),
          array('email' => '110117003@sv.tvu.edu.vn', 'maLop' => 'DA16TT'),
          array('email' => '110117004@sv.tvu.edu.vn', 'maLop' => 'DA16TT'),
        ]);

        DB::table('thuctap')->insert([
          array('emailSV' =>  '110117001@sv.tvu.edu.vn',
                'emailGV' => 'nmphuc@tvu.edu.vn',
                'emailNHD' => 'dthop@gmail.com',
                'maDonVi' => 'DV01',
                'ngayBatDauThucTap' => '2018-06-01'
              ),
          array('emailSV' =>  '110117002@sv.tvu.edu.vn',
                'emailGV' => 'ptpnam@tvu.edu.vn',
                'emailNHD' => 'ltthep@gmail.com',
                'maDonVi' => 'DV01',
                'ngayBatDauThucTap' => '2018-06-01'
              ),
          array('emailSV' =>  '110117003@sv.tvu.edu.vn',
                'emailGV' => 'nmphuc@tvu.edu.vn',
                'emailNHD' => 'nhiemnb@gmail.com',
                'maDonVi' => 'DV02',
                'ngayBatDauThucTap' => '2018-06-01'
              ),
          array('emailSV' =>  '110117004@sv.tvu.edu.vn',
                'emailGV' => 'ptpnam@tvu.edu.vn',
                'emailNHD' => 'pthai@gmail.com',
                'maDonVi' => 'DV03',
                'ngayBatDauThucTap' => '2018-06-01'
              ),

        ]);


        DB::table('phieucham')->insert([
          array('maPhieuCham' => '01', 
                'diem' => 10, 
                'ngayCham' => '2018-09-05', 
                'nhanXet' => 'Hoàn thành tốt, có trách nhiệm'),
          array('maPhieuCham' => '02', 
                'diem' => 9, 
                'ngayCham' => '2018-09-05', 
                'nhanXet' => 'Hoàn thành khá tốt'),
          array('maPhieuCham' => '03', 
                'diem' => 6, 
                'ngayCham' => '2018-09-05', 
                'nhanXet' => 'Cần cải thiện thêm'),
          array('maPhieuCham' => '04', 
                'diem' => 9.5, 
                'ngayCham' => '2018-09-05', 
                'nhanXet' => 'Hoàn thành tốt nhiệm vụ'),
          array('maPhieuCham' => '05', 
                'diem' => 5, 
                'ngayCham' => '2018-09-05', 
                'nhanXet' => 'Cần cố gắng thêm'),
          array('maPhieuCham' => '06', 
                'diem' => 10, 
                'ngayCham' => '2018-09-05',
                'nhanXet' => 'Hoàn thành tốt, có trách nhiệm'),
          array('maPhieuCham' => '07', 
                'diem' => 9, 
                'ngayCham' => '2018-09-05',
                'nhanXet' => 'Hoàn thành khá tốt'),
          array('maPhieuCham' => '08', 
                'diem' => 6, 
                'ngayCham' => '2018-09-05',
                'nhanXet' => 'Cần cải thiện thêm'),

        ]);

        DB::table('chamdiem')->insert([
          array('emailSV' => '110117001@sv.tvu.edu.vn',
                'emailNguoiCham' => 'nmphuc@tvu.edu.vn',
                'maPhieuCham' => '01',
                'ngayKetThucThucTap' => '2018-08-31'
              ),
          array('emailSV' => '110117002@sv.tvu.edu.vn',
                'emailNguoiCham' => 'ptpnam@tvu.edu.vn',
                'maPhieuCham' => '02',
                'ngayKetThucThucTap' => '2018-08-31'
              ),
          array('emailSV' => '110117003@sv.tvu.edu.vn',
                'emailNguoiCham' => 'nmphuc@tvu.edu.vn',
                'maPhieuCham' => '03',
                'ngayKetThucThucTap' => '2018-08-31'
              ),
          array('emailSV' => '110117004@sv.tvu.edu.vn',
                'emailNguoiCham' => 'ptpnam@tvu.edu.vn',
                'maPhieuCham' => '04',
                'ngayKetThucThucTap' => '2018-08-31'
              ),
          array('emailSV' => '110117001@sv.tvu.edu.vn',
                'emailNguoiCham' => 'dthop@gmail.com',
                'maPhieuCham' => '05',
                'ngayKetThucThucTap' => '2018-08-31'
              ),
          array('emailSV' => '110117002@sv.tvu.edu.vn',
                'emailNguoiCham' => 'ltthep@gmail.com',
                'maPhieuCham' => '06',
                'ngayKetThucThucTap' => '2018-08-31'
              ),
          array('emailSV' => '110117003@sv.tvu.edu.vn',
                'emailNguoiCham' => 'nhiemnb@gmail.com',
                'maPhieuCham' => '07',
                'ngayKetThucThucTap' => '2018-08-31'
              ),
          array('emailSV' => '110117004@sv.tvu.edu.vn',
                'emailNguoiCham' => 'pthai@gmail.com',
                'maPhieuCham' => '08' ,
                'ngayKetThucThucTap' => '2018-08-31'
              ),

        ]);
    }
}
