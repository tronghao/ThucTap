
<!-- Table -->
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Kinh phí hỗ trợ</h6>
  </div>
  <div class="card-body">
    @if( isset($info) )
        <p>{{ $info }}</p>
    @else
        <p>Kinh phí hỗ trợ của bạn là: <span style="color: red; font-size:20px">{{ number_format($soTien, 0, ',', '.')}}</span>đ</p>
    @endif
    
  </div>
</div>



  <!-- link head -->
  <link rel="stylesheet" href=" {{ asset('public/css/thong-bao.css') }} ">
  <script src=" {{ asset('public/admin/datatables/jquery.dataTables.min.js') }} "></script>



  <!--   style -->
    <style>
      /* display */
    div#tableData_length {
        display: none;
    }

    div#tableData_filter {
        display: none;
    }

    div#tableData_info {
        display: none;
    }

    div#tableData_paginate {
        display: none;
    }

    .custom-file-input:lang(en)~.custom-file-label::after {
        content: "Chọn ảnh";
    }
    </style>