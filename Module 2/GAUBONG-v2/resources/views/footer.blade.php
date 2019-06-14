<div id="footer" class="color-div">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="widget">
						<h4 class="widget-title">Tại sao chọn Gấu bông online ?</h4>
						<ul>
							<li><i class="fa fa-chevron-right"></i>Nén Nhỏ Gấu & Tặng Thiệp Miễn Phí</li>
							<li><i class="fa fa-chevron-right"></i>Đổi Hàng Trong Vòng 3 ngày</li>										
							<li><i class="fa fa-chevron-right"></i>Giao Hàng Toàn Quốc 2 - 5 Ngày</li>
							<li><i class="fa fa-chevron-right"></i>Gói Hộp Quà Giá Rẻ</li>
						</ul>
						
					</div>
				</div>
				<div class="col-sm-3">
					<div class="widget">
						<h4 class="widget-title">Chuyển khoản online</h4>
						<div>
							<p>TECHCOMBANK – Ngân hàng Kỹ Thương</p>
							<p>	Chi nhánh Nhuệ Giang</p>
							<p>	Chủ tài khoản: Lê Đức Toàn</p>
							<p>	Số tài khoản: 1903 0743 938 388</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3">				 
					<div class="widget">
						<h4 class="widget-title">Thông tin liên hệ</h4>
						<div>
							<div class="contact-info">
								<ul>
									<li><i class="fa fa-map-marker"></i><p>Tòa nhà Vincom, 28 Nguyễn Tri Phương, Thành phố Huế</p></li>
									<li><i class="fas fa-phone-volume"></i><p>Hotline: 0234.5235.9114</p></li>
									<li><i class="fas fa-envelope-square"></i><p>gaubongonline@gmail.com</p></li>
									<li><i class="fas fa-hourglass-start"></i><p>08h00 - 22h30 các ngày trong tuần</p></li>
								</ul>
							</div>
						</div>
					</div>				  
				</div>
				<div class="col-sm-3">
					<div class="widget">
						<h4 class="widget-title">Hê thống cửa hàng</h4>
						<div>
							<div class="contact-info">
								<ul>
									<li><i class="fa fa-map-marker"></i><p>Tòa nhà Vincom, 28 Nguyễn Tri Phương, Thành phố Huế</p></li>
									<li><i class="fa fa-map-marker"></i><p>Tòa nhà tháp Tower, 28 Nguyễn Lương Bằng, Thành phố Huế</p></li>
									<li><i class="fa fa-map-marker"></i><p>Siêu thị BigC, 30 Hùng vương, Thành phố Huế</p></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- .row -->
		</div> <!-- .container -->
	</div> <!-- #footer -->
	<!-- Scroll to Top Button-->
	<style>
            #contain {
                width: 500px;
                margin: auto;
            }
            /* định dạng cho button */
            #myBtn {
              display: none; /* Mặc định button sẽ được ẩn*/
              position: fixed;
              bottom: 20px;
              right: 30px; 
              z-index: 99; /* button được ưu tiên hiển thị đè lên các phần khác*/
              border: none;
              outline: none;
              background-color: red;
              color: white;
              cursor: pointer;
              padding: 15px;
              border-radius: 10px;
            }
             
            #myBtn:hover {
              background-color: #555;
}
        </style>
	<div id='contain' class="container">
		<button id="myBtn" title="Go to top">Top</button>			
	</div>    
    <script>
        //Khi người dùng cuộn chuột thì gọi hàm scrollFunction
        window.onscroll = function() {scrollFunction()};
        // khai báo hàm scrollFunction
        function scrollFunction() {
            // Kiểm tra vị trí hiện tại của con trỏ so với nội dung trang
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                //nếu lớn hơn 20px thì hiện button
                document.getElementById("myBtn").style.display = "block";
            } else {
                 //nếu nhỏ hơn 20px thì ẩn button
                document.getElementById("myBtn").style.display = "none";
            }
        }
        //gán sự kiện click cho button
        document.getElementById('myBtn').addEventListener("click", function(){
            //Nếu button được click thì nhảy về đầu trang
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        });
    </script>
	