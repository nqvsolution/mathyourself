@extends('template')
@section('css')
  <link rel="stylesheet" href="{{ asset('css/desktop/page.style.css') }}">
@endsection
@section('font')
	<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kodchasan:200" rel="stylesheet">
@endsection
@section('body-content')
	<div id="">
		<div class="row" id="page-menu">
			<div class="col-4">
				<div id="page-menu-backward" class="btn1">
					<a href="#">
						<span class="btn2">&curvearrowleft;</span>
						<span>Bất đẳng thức bậc hai</span>
					</a>
				</div>
			</div>
			<div class="col-4">
				<div id="page-menu-view-list" class="btn1">
					<div id="page-menu-view-list-image">
						<img src="{{ asset('images/icons/view-list.png') }}">	
					</div>
				</div>
			</div>
			<div class="col-4">
				<div id="page-menu-forward" class="btn1">
					<a href="#">

						<span>Bất đẳng thức bậc hai</span>
						<span class="btn2">&curvearrowright;</span>
						
					</a>
				</div>
			</div>
		</div>

		<div id="page-list">
			<div id="page-list-content">
				<ul>
					<li>
						<a href="#">1.Mệnh Đề</a>
					</li>
					<li>
						<a href="#">2.Tập Hợp</a>
					</li>
					<li>
						<a href="#">3.Các PHép Toán Tập Hợp</a>
					</li>
					<li>
						<a href="#">4.Các Tập Hợp Số</a>
					</li>
					<li>
						<a href="#">5.Số Gần Đúng,Sai Số</a>
					</li>
					<li>
						<a href="#">6.Khái Niệm Hàm Số</a>
					</li>
					<li>
						<a href="#">7.Hàm Số y=ax+b</a>
					</li>
					<li>
						<a href="#">8.Hàm Số Bậc 2</a>
					</li>
					<li>
						<a href="#">9.Đại Cương Về Phương Trình</a>
					</li>
					<li>
						<a href="#">10.Phương Trình Quy Về Phương Trình Bậc Nhất,Bậc Hai</a>
					</li>
					<li>
						<a href="#">11.Hàm Số Bậc 2</a>
					</li>
					<li>
						<a href="#">12.Bất Đẳng Thức</a>
					</li>
					<li>
						<a href="#">13.Bất Phương Trình và Hệ Bất Phương Trình Một Ẩn</a>
					</li>
					<li>
						<a href="#">14.Dấu Của Nhị Thức Bậc Nhất</a>
					</li>
					<li>
						<a href="#">15.Dấu Của Nhị Thức Bậc Nhất Hai Ẩn</a>
					</li>
					<li>
						<a href="#">15.Dấu Của Tam Thức Bậc Hai</a>
					</li>
					<li>
						<a href="#">16.Bảng Phân Bố Tần Số Và Tần Suất</a>
					</li>
					<li>
						<a href="#">18.Số Trung Bình Cộng,Trung Vị,Mốt</a>
					</li>
					<li>
						<a href="#">19.Phương Sai Và Độ Lệch Chuẩn</a>
					</li>
					<li>
						<a href="#">20.Cung và Góc Lượng Giác</a>
					</li>
					<li>
						<a href="#">21.Giá Trị Lượng Giác Của Một Cung</a>
					</li>
					<li>
						<a href="#">22.Công Thức Lượng Giác</a>
					</li>
				</ul>
			</div>
			
		</div>

		<div class="row" id="page-content">
			<div class="col-8">
				<div id="page-content-subject">
					<p>
						Trịnh Xuân Thanh vi phạm pháp luật Việt Nam, đã bị đưa ra xét xử một cách công khai theo đúng quy định pháp luật của Việt Nam và đang trong quá trình thi hành án", người phát ngôn Bộ Ngoại giao Lê Thị Thu Hằng nói trong họp báo chiều nay, sau khi phóng viên Reuters đặt câu hỏi "có phải đang có những cuộc đàm phán giữa Việt Nam và Đức về việc đưa Trịnh Xuân Thanh về Đức hay không".

Trịnh Xuân Thanh bị Bộ Công an Việt Nam truy nã quốc tế từ tháng 9/2016. Cơ quan Cảnh sát điều tra (C46, Bộ Công an) khởi tố ông Thanh tội Cố ý làm trái quy định của Nhà nước về quản lý kinh tế gây hậu quả nghiêm trọng.

Ông Thanh hôm 3/8/2017 xuất hiện trên bản tin Thời sự VTV1 của Đài truyền hình Việt Nam, cho biết "thấy mình đã làm những điều rất nông nổi, suy nghĩ không chín chắn" và "cần phải về để đối diện với sự thật".

VTV cũng đăng tải "đơn xin tự thú" đề Hà Nội ngày 31/7/2017 của ông Thanh, trong đó có đoạn "Do lo sợ, suy nghĩ không hết, tôi đã quyết định trốn lại Đức. Thời gian này cuộc sống trốn tránh, bấp bênh, luôn lo sợ. Được sự động viên của gia đình và bạn bè tôi đã về Việt Nam và ra đầu thú tại cơ quan an ninh điều tra để được hưởng sự khoan hồng".

Hôm 2/8, nhiều hãng tin quốc tế lớn trích lời Bộ Ngoại giao Đức cho rằng "các cơ quan và đại sứ quán Việt Nam có liên quan tới việc bắt cóc Trịnh Xuân Thanh trên đất Đức", "vi phạm luật pháp Đức và quốc tế".

Đức đã triệu tập đại sứ Việt Nam, đồng thời yêu cầu một viên chức sứ quán Việt Nam rời khỏi Đức trong vòng 48 giờ. Berlin còn đề nghị Hà Nội cho phép Trịnh Xuân Thanh trở lại Đức "để nhà chức trách Đức có thể xử lý đơn xin tị nạn của ông Thanh và đề nghị dẫn độ của Việt Nam theo quy trình". Người phát ngôn Bộ Ngoại giao Lê Thị Thu Hằng sau đó trả lời truyền thông trong nước và quốc tế rằng "Việt Nam rất lấy làm tiếc" với thông tin Bộ Ngoại giao Đức cáo buộc "bắt cóc ông Trịnh Xuân Thanh".

Ông Thanh hôm 5/2 bị TAND Hà Nội tuyên án chung thân và phạt bổ sung 50 triệu đồng vì tội Tham ô tài sản. Trước đó, ngày 22/1, ông Thanh đã lĩnh án tù chung thân do cố ý làm trái và tham ô tài sản xảy ra tại Tập đoàn Dầu khí Việt Nam (PVN) và Tổng công ty Xây lắp dầu khí Việt Nam (PVC).
					</p>
				</div>
			</div>
			<div class="col-4"></div>
		</div>
	</div>
@endsection
@section('js-bottom')
  <script type="text/javascript" src="{{ asset('js/desktop/page.js') }}"></script>
@endsection