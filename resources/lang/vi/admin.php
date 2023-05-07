<?php
return [
  'message' => [
    'rootpermission' => 'Tài khoản không đủ quyền thực hiện hành động này.',
    'loginrequired' => 'Vui lòng đăng nhập',
  ],
  'button' => [
    'upload' => 'Tải lên',
    'cancel' => 'Hủy',
    'apply' => 'Áp dụng',
  ],
  'component' => [
    'uploadimage' => [
      'title' => 'Tải ảnh lên',
      'dropimagehere' => 'Thêm ảnh vào bằng cách kéo thả ảnh ở đây hoặc nhấn chọn',
      'uploadsuccess' => 'Tải ảnh lên thành công.',
    ],
    'sidebar' => [
      'greeting' => 'Xin chào',
      'home' => 'Tổng quan',
      'category' => 'Danh mục',
      'product' => 'Sản phẩm',
      'banner' => 'Biểu ngữ',
      'image' => 'Kho ảnh',
      'order' => 'Hóa đơn',
      'account' => 'Tài khoản',
      'setting' => 'Cài đặt',
      'logout' => 'Đăng xuất',
    ],
  ],
  'banner' => [
    'banner' => 'biểu ngữ',
    'title' => 'Quản lý :type',
    'create' => 'Thêm :type mới',
    'bannerlist' => 'Danh sách :type',
    'button' => [
      'id' => 'TT',
      'name' => 'Tên',
      'status' => 'Trạng thái',
      'addnew' => 'Thêm :type mới',
      'search' => 'Tìm kiếm',
      'link' => 'Đường dẫn chuyển tiếp',
      'imageurl' => 'Đường dẫn của ảnh',
      'delete' => 'xóa',
      'apply' => 'thay đổi'
    ],
    'message' => [
      'duplicatename' => 'Trùng tên',
      'successfulcreatebanner' => 'Đã tạo thành công (:name).',
      'successfuldeletebanner' => 'Đã xóa thành công.',
    ],
  ],
  'dashboard' =>[
    'analytics' => 'Thống kê hôm nay',
    'lastsync' => 'Cập nhật lần cuối', 
    'orders' => 'Đơn hàng',
    'revenue' => 'Doanh thu',
    'views' => 'Lượt truy cập trang web',
    'tracker' => 'Bảng theo dõi theo thời gian',

    'time' => [
      'yesterday' => 'hôm qua'
    ],
  ],
  'image' => [
    'image' => 'hình ảnh',
    'imagelist' => 'Danh sách :type',
    'title' => 'Quản lý :type',
    'create' => 'Thêm :type mới',
    'button' => [
      'id' => 'TT',
      'uid' => 'Mã người dùng',
      'addnew' => 'Thêm :type mới',
      'search' => 'Tìm kiếm',
      'imageurl' => 'Đường dẫn của ảnh',
      'path' => 'Đường dẫn thư mục',
      'created_at' => 'Ngày tải lên',
      'delete' => 'xóa',
    ],
    'message' => [
      'youarenottheowner' => 'Không thể thao tác lên hình ảnh của người khác',
      'cannotfindimage' => 'Không tìm thấy hình ảnh',
      'duplicatename' => 'Trùng tên',
      'copied' => 'Đã lưu vào bộ nhớ tạm',
      'successfuldeleteimage' => 'Đã xóa thành công.',
      'errordeleteimage' => 'Xảy ra lỗi khi xóa hình ảnh - :error.',
    ],

  ],
  'account' => [
    'list' => 'Danh sách tài khoản',
    'title' => 'Quản lý tài khoản',
    'button' => [
      'id' => 'TT',
      'name' => 'Tên người dùng',
      'addnew' => 'Thêm tài khoản mới',
      'add' => 'Thêm',
      'password' => 'Mật khẩu',
      'search' => 'Tìm kiếm',
      'imageurl' => 'Đường dẫn của ảnh',
      'phone' => 'SĐT',
      'role' => 'Quyền',
      'selectrole' => 'Phân quyền cho tài khoản:',
      'delete' => 'xóa',
      'grantaccess' => 'Phân quyền',
      'check' => 'kiểm tra',
      'changepassword' => 'Đổi mật khẩu',
      'newpassword' => 'Mật khẩu mới',
      'oldpassword' => 'Mật khẩu cũ',
      'confirmpassword' => 'Nhập lại mật khẩu',
    ],
    'message' => [
      'duplicatename' => 'Trùng tên',
      'copied' => 'Đã lưu vào bộ nhớ tạm',
      'successfuldeleteimage' => 'Đã xóa thành công.',
      'errordeleteimage' => 'Xảy ra lỗi khi xóa hình ảnh - :error',
      'successfulgrantaccess' => 'Phân quyền thành công',
      'errorgrantaccess' => 'Phân quyền thất bại',
      'cannotdeleterootaccount' => 'Không thể xóa tài khoản quản trị.',
      'cannotfinduser' =>  'Không tìm thấy người dùng có mã :id',
      'invalidpermission' => 'Quyền truy cập không đúng',
      'cannotoperateonroot' => 'Không thể thao tác trên tài khoản ROOT',
      'oldpasswordincorrect' => 'Mật khẩu cũ không đúng',
      'successfulchangepassword' => 'Thay đổi mật khẩu thành công',
      'errorchangepassword' => 'Có lỗi xảy ra khi thay đổi mật khẩu',
    ],
  ],
  'category' => [
    'title' => 'Quản lý danh mục',
    'edittitle' => 'Sửa danh mục',
    'button' => [
      'id' => 'TT',
      'parentid' => 'Danh mục cha',
      'parent_id' => 'Cha',
      'name' => 'Tên danh mục',
      'status' => 'Trạng thái',
      'addnew' => 'Thêm danh mục mới',
      'edit' => 'Sửa',
      'search' => 'Tìm kiếm',
      'imageurl' => 'Đường dẫn của ảnh',
      'delete' => 'xóa',
      'detail' => 'Chi tiết',
      'apply' => 'Thay đổi',
      'active' => 'Đã kích hoạt',
      'inactive' => 'Chưa kích hoạt',
    ],
    'message' => [
      'errorgetdetail' => 'Xảy ra lỗi khi lấy thông tin chi tiết',
      'cannotfindparentid' => 'Không tìm thấy danh mục cha.',
      'errorupdating' => 'Có lỗi xảy ra khi đang lưu thay đổi (:msg)',
      'cannotfindid' => 'Không tìm thấy mã danh mục',
      'successfulupdating' => 'Thay đổi thành công (:prop thuộc tính)',
      'cannotfindparentiditself' => 'Không thể tự đặt danh mục cha bằng chính nó',
      'successfulcreate' => 'Tạo danh mục thành công',
      'errordeletingcategory' => 'Có lỗi xảy ra khi xóa danh mục',
      'errorcreatingcategory' => 'Tạo danh mục không thành công',
      'successfuldeletecategorywithproduct' => 'Xóa thành công danh mục :id, :category danh mục con và :product sản phẩm liên quan đã được xóa.'
    ],
  ],
  'product' => [
    'title' => 'Quản lý sản phẩm',
    'button' => [
      'id' => 'TT',
      'categoryname' => 'Danh mục',
      'parent_id' => 'Cha',
      'name' => 'Tên sản phẩm',
      'status' => 'Trạng thái',
      'addnew' => 'Thêm sản phẩm mới',
      'edit' => 'Sửa',
      'search' => 'Tìm kiếm',
      'delete' => 'xóa',
      'detail' => 'Chi tiết',
      'apply' => 'Xác nhận',
      'price' => 'Giá bán (đ)',
      'stock' => 'Tồn',
      'weight' => 'Trọng lượng (Gram)',
      'sold' => 'Đã bán',
      'options' => 'Phân loại',
      'classify' => 'Phân loại',
      'saleoffprice' => 'Giá KM (đ)',
      'image' => 'Hình ảnh',
      'yes' => 'Có',
      'no' => 'Không',
      'active' => 'Đã kích hoạt',
      'inactive' => 'Chưa kích hoạt',
      'addnewimage' => 'Thêm hình ảnh mới',
      'optiongroupname' => 'Tên nhóm phân loại',
      'optiongroupnameplaceholder' => 'Tên nhóm phân loại (VD:Màu sắc,...)',
      'optiongroupvalues' => 'Phân loại hàng',
      'optiongroupvaluesplaceholder' => 'Phân loại (VD:Đỏ, xanh,...)',
      'addoptionvalue' => 'Thêm phân loại',
      'addnewoptiongroup' => 'Thêm nhóm phân loại mới',
      'optionvaluename' => 'Tên phân loại',
      'optionvaluestock' => 'SL',
      'optionvalueprice' => 'Giá',
      'shippingmethod' => 'Hình thức giao hàng',
      'clearform' => 'Làm mới',
      'updatestock' => 'Cập nhật kho',
    ],
    'message' => [
      'categorymustbeavavlidvalue' => 'Danh mục phải được chọn',
      'errorwhilegetproductdetail' => 'Xảy ra lỗi khi lấy thông tin chi tiết',
      'productadded' =>'Sản phẩm đã được thêm',
      'errorupdating' => 'Có lỗi xảy ra khi đang lưu thay đổi (:msg)',
      'cannotfindid' => 'Không tìm thấy mã sản phẩm',
      'successfulupdating' => 'Thay đổi thành công (:prop thuộc tính)',
      'existduplicateimage' => 'Tồn tại ảnh trùng với ảnh đã tải',
      'successfulcreate' => 'Thêm sản phẩm thành công',
      'errordeletingproduct' => 'Có lỗi xảy ra khi xóa sản phẩm',
      'errorcreatingproduct' => 'Tạo danh mục không thành công',
      'successfuldelete' => 'Xóa thành công sản phẩm :id',
      'errorwhileaddingshippingmethod' => 'Có lỗi xảy ra khi thêm hình thức giao hàng',
      'errorwhileaddingcassification' => 'Có lỗi xảy ra khi thêm phân loại',
      'shippingweightnotinrange' => 'Trọng lượng vượt mức (:min => :max)',
    ],
  ],
];