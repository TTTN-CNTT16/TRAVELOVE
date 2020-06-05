<?php

use Illuminate\Database\Seeder;

class tours extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tours')->insert(
            // tour Hà Nội
           [ 
            
        //     // tour quảng ninh
            
            // tour sapa
           
        //         // ninh binh 
        //thanh hoa
        //         // phan thiet
              
        //         // tuy hoa quy nhon quang ngai
          
        //         // hoi an - da nang
            
        // //         // hue-quang binh
                [
                    'name'=> ("DU LỊCH TẠI HẢI PHÒNG - HẠ LONG - NÌNH BÌNH - HÀ NỘI - LÀO CAI - SAPA - ĐỀN HÙNG - ĐÀ NẴNG - HỘI AN - HUẾ - ĐỘNG THIÊN ĐƯỜNG"),
                    'img'=>'hue1.jpg',
                    'number'=>15,
                    'idPlace'=>12,
                    'contents'=>("-  Thăm quần thể di tích Bạch Đằng Giang với đền thờ các vị anh hùng dân tộc: vua Lê Đại Hành, Ngô Quyền, Trần Hưng Đạo,... mô hình bãi cọc trên sông Bạch Đằng.
                    - Lên thuyền du ngoạn vịnh Hạ Long - một trong 7 kỳ quan thiên nhiên mới của thế giới, chiêm ngưỡng động Thiên Cung, các hòn Đỉnh Hương - Trống Mái (Gà Chọi)- Chó Đá.
                    - Tham quan khu du lịch Tràng An - nơi có cảnh quan ngoạn mục với hệ thống sông, suối chảy tràn trong các thung lũng, các hang xuyên thủy động và các dãy núi đá vôi trùng điệp.
                    - Thăm khu di tích Đền Hùng - viếng đền Hạ, đền Trung, đền Thượng, lăng Vua Hùng
                    - Tham quan Phố cổ Hội An (với các công trình tiêu biểu: Chùa Cầu Nhật Bản, chùa Ông, hội quán Phúc Kiến, phố đèn lồng)
                    - Xem Show “Ký Ức Hội An” - vở diễn thực cảnh ngoài trời với số lượng diễn viên đạt kỷ lục Việt Nam, tái hiện nhịp nhàng sinh động miền ký ức Faifo đa văn hóa
                    -  Tham quan Di sản Văn hóa Thế giới Kinh Thành Huế - Hoàng cung của 13 vị Vua triều Nguyễn
                    -  Tham quan động Thiên Đường - một trong những hang động kỳ vĩ và dài nhất thế giới với muôn trạng thạch nhũ và măng đá, mang vẻ đẹp lộng lẫy tựa một “Hoàng cung dưới lòng đất”"),
                    'beginDay'=>'2020-05-16',
                    'endDay'=>'2020-05-21',
                    'status'=>1
                ],
                [
                    'name'=> ("DU LỊCH HUẾ - ĐÀ NẴNG - HỘI AN - KDL BÀ NÀ - CẦU VÀNG (VNA)"),
                    'img'=>'hue2.jpg',
                    'number'=>15,
                    'idPlace'=>12,
                    'contents'=>("- Đắm mình trong không gian cổ kính của Kinh Thành Huế. 
                    - Thư thả tản bộ tại Phố cổ với các công trình tiêu biểu: Chùa Cầu Nhật Bản, chùa Ông, hội quán Phúc Kiến, khu phố đèn lồng.
                    - Dạo bước trên Cầu Vàng tọa lạc tại Vườn Thiên Thai, với thiết kế độc đáo và ấn tượng, đầy mềm mại tựa một dải lụa, được nâng đỡ bởi đôi bàn tay khổng lồ loang lổ rêu phong giữa cảnh sắc nên thơ tuyệt diệu của Bà Nà – Núi Chúa."),
                    'beginDay'=>'2020-05-26',
                    'endDay'=>'2020-05-29',
                    'status'=>1
                ],
        // phu quoc
        [
                    'name'=> ("DU LỊCH PHÚ QUỐC - BÃI SAO (VN)"),
                    'img'=>'phuquoc1.jpg',
                    'number'=>15,
                    'idPlace'=>13,
                    'contents'=>("- Tham quan Trung tâm nuôi cấy ngọc trai Phú Quốc
                    - Viếng Thiên Viện Trúc Lâm Hộ Quốc ngôi chùa đẹp và lớn nhất đảo ngọc.
                    - Tắm biển Bãi Sao (hoặc bãi Ông Lang tùy điều kiện thời tiết) - một trong những bãi biển đẹp nhất tại Phú Quốc."),
                    'beginDay'=>'2020-05-26',
                    'endDay'=>'2020-05-30',
                    'status'=>1
                ],
                [
                    'name'=> ("DU LỊCH PHÚ QUỐC - BÃI SAO - SUNSET SANATO (LỄ 30/04)"),
                    'img'=>'phuquoc2.jpg',
                    'number'=>15,
                    'idPlace'=>13,
                    'contents'=>("- Tham quan trung tâm nuôi cấy ngọc trai Phú Quốc ,viếng Thiên Viện Trúc Lâm Hộ Quốc 
                    - Tham quan Sunset santosa beach club, cùng lưu lại những bức hình cực chất dưới ánh hoàng hôn tuyệt đẹp 
                    - Tham quan Vườn tiêu, Lò chế biến rượu Sim rừng Phú Quốc, Cơ sở nước mắm Phú Quốc"),
                    'beginDay'=>'2020-05-26',
                    'endDay'=>'2020-05-30',
                    'status'=>1
                ], 
                [
                    'name'=> ("DU LỊCH PHÚ QUỐC - SUỐI TRANH - CÁP TREO HÒN THƠM (LỄ 30/04)"),
                    'img'=>'phuquoc3.jpg',
                    'number'=>10,
                    'idPlace'=>13,
                    'contents'=>("- Thăm làng Dinh Cậu, tham quan suối Tranh, trung tâm nuôi cấy ngọc trai Phú Quốc. 
                    - Trải nghiệm “Cáp treo 3 dây vượt biển dài nhất thế giới tại Hòn Thơm”"),
                    'beginDay'=>'2020-05-27',
                    'endDay'=>'2020-05-30',
                    'status'=>1
                ], 
        //         // mien tay
                [
                    'name'=> ("DU LỊCH MỸ THO - CẦN THƠ - CÀ MAU - BẠC LIÊU - SÓC TRĂNG"),
                    'img'=>'mientay1.jpg',
                    'number'=>10,
                    'idPlace'=>14,
                    'contents'=>("- Đến Mỹ Tho thưởng thức trái cây theo mùa, nghe nhạc tài tử Nam Bộ
                    - Tham quan chợ nổi Cái Răng - một chợ nổi lớn của Đồng Bằng sông Cửu Long
                    - Tham quan Khu dinh thự Công tử Bạc Liêu, tìm hiểu cuộc đời của Hắc công tử nổi tiếng giàu có, ăn chơi"),
                    'beginDay'=>'2020-05-27',
                    'endDay'=>'2020-05-30',
                    'status'=>1
                ], 
                [
                    'name'=> ("DU LỊCH KHÁM PHÁ CÁI BÈ - CẦN THƠ - CHÂU ĐỐC - HÀ TIÊN"),
                    'img'=>'mientay2.jpg',
                    'number'=>15,
                    'idPlace'=>14,
                    'contents'=>("- Tham quan nhà xưa Nam bộ hơn trăm năm tuổi, theo lối kiến trúc Pháp - Việt (tùy theo thủy triều)
                    - Tham quan chợ nổi Cái Răng - một chợ nổi lớn của vùng Đồng Bằng sông Cửu Long
                    - Viếng Lăng Thoại Ngọc Hầu - danh nhân có công khai mở đất An Giang
                    - Viếng Chùa Hang - ngôi chùa gắn liền với truyền thuyết 2 con rắn lớn biết nghe kinh Phật
                    - Viếng lăng Mạc Cửu - người có công khai trấn đất Hà Tiên vào thế kỷ 18"),
                    'beginDay'=>'2020-05-30',
                    'endDay'=>'2020-06-01',
                    'status'=>1
                ], 
                [
                    'name'=> ("DU LỊCH CẦN THƠ - CỒN SƠN (LỄ 30/04)"),
                    'img'=>'mientay3.jpg',
                    'number'=>10,
                    'idPlace'=>14,
                    'contents'=>("- Tham quan bè cá, tìm hiểu quy trình nuôi cá thát lát, cá trạch lẩu, lươn,... 
                    - Trải nghiệm tự làm một loại bánh dân gian: bánh khọt, bánh in, bánh kẹp cuốn..
                    - Viếng Thiền viện Trúc Lâm Phương Nam - thiền viện lớn nhất  miền tây"),
                    'beginDay'=>'2020-04-30',
                    'endDay'=>'2020-05-01',
                    'status'=>1
                ], 
                [
                    'name'=> ("DU LỊCH BẠC LIÊU - CÀ MAU - HÀ TIÊN - CHÂU ĐỐC - SA ĐÉC (LỄ 30/04)"),
                    'img'=>'mientay4.jpg',
                    'number'=>10,
                    'idPlace'=>14,
                    'contents'=>("- Tham quan chụp ảnh tại Nhà Máy Điện gió Bạc Liêu.
                    - Tham quan Khu dinh thự Công tử Bạc Liêu, tìm hiểu cuộc đời của Hắc công tử Trần Trinh Huy nổi tiếng giàu có, ăn chơi, phóng khoáng một thời.
                    - Viếng lăng Mạc Cửu - người có công khai trấn đất Hà Tiên vào thế kỷ 18, tham quan rừng tràm Trà Sư."),
                    'beginDay'=>'2020-04-30',
                    'endDay'=>'2020-05-02',
                    'status'=>1
                ], 
        //         // con dao
                [
                    'name'=> ("DU LỊCH CÔN ĐẢO (TÀU CAO TỐC)"),
                    'img'=>'condao1.jpg',
                    'number'=>15,
                    'idPlace'=>15,
                    'contents'=>("- Đến với Côn Đảo (hay với các tên khác như Côn Sơn, Côn Lôn) đã gợi cho người nghe hình ảnh mịt mù của một khu vực xa xôi, mờ mịt, có lúc được ví như địa ngục trần gian nổi tiếng từ thời Pháp thuộc đến giữa năm 1975. 
                    - Tham quan Cầu tàu 914, Trại Phú Hải, Chuồng Cọp Pháp - Mỹ, Mũi Cá Mập, Đỉnh Tình Yêu."),
                    'beginDay'=>'2020-05-10',
                    'endDay'=>'2020-05-13',
                    'status'=>1
                ], 
                [
                    'name'=> ("DU LỊCH CÔN ĐẢO"),
                    'img'=>'condao2.jpg',
                    'number'=>15,
                    'idPlace'=>15,
                    'contents'=>("- Đến với Côn Đảo (hay với các tên khác như Côn Sơn, Côn Lôn) đã gợi cho người nghe hình ảnh mịt mù của một khu vực xa xôi, mờ mịt, có lúc được ví như địa ngục trần gian nổi tiếng từ thời Pháp thuộc đến giữa năm 1975. 
                    - Tham quan Cầu tàu 914, Trại Phú Hải, Chuồng Cọp Pháp - Mỹ, Mũi Cá Mập, Đỉnh Tình Yêu."),
                    'beginDay'=>'2020-05-10',
                    'endDay'=>'2020-05-14',
                    'status'=>1
                ], 
        //         // ho tram
                [
                    'name'=> ("DU LỊCH HỒ TRÀM - TRẢI NGHIỆM ĐẲNG CẤP 5 SAO THE GRAND HO TRAM STRIP"),
                    'img'=>'hotram.jpg',
                    'number'=>15,
                    'idPlace'=>16,
                    'contents'=>("- Trải nghiệm dịch vụ 5 sao cao cấp tại The Grand Ho Tram Strip 
                    - Nghỉ ngơi thư giãn và tự do tắm biển tại bãi biển riêng của The Grand Ho Tram Strip"),
                    'beginDay'=>'2020-05-11',
                    'endDay'=>'2020-05-15',
                    'status'=>1
                ], 
                // vung tau
                [
                    'name'=> ("DU LỊCH VŨNG TÀU 2 NGÀY 1 ĐÊM"),
                    'img'=>'vungtau.jpg',
                    'number'=>15,
                    'idPlace'=>17,
                    'contents'=>("- Tham quan Tượng Chúa Kito trên đỉnh núi Nhỏ.
                    - Viếng Thích Ca Phật Đài, chùa Đại Tòng Lâm."),
                    'beginDay'=>'2020-05-12',
                    'endDay'=>'2020-05-15',
                    'status'=>1
                ], 

           ]
        );
    }
}
