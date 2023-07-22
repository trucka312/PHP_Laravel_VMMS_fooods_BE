<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('users')->insert([
            [
            'email' => 'nhuthao@gmail.com',
            'name' => 'Thao Ngo',
            'avatar'=>'thaonhu.jpg',
            'password' =>  Hash::make('123456'),

           
            ],
            [
                'name'=>'Tung Duc',
                'avatar'=>'tungduc.jpg',
                'email'=>'tungducctran7825345238@gmail.com',
                'password'=> Hash::make('123456'),

            ],
            [
                    'name'=>'Thap Vu',
                    'avatar'=>'avatar.png',
                    'email'=>'vuthapp67136584@gmail.com',
                    'password'=> Hash::make('123456'),

            ],
        
    
        ]);
        $thoigian = '2023-03-02 00:00:00';
        DB::table('danhgia')->insert([
            [    'users_id'=>1,
                'ghichu'=>'nothing',
                'noidung'=>'Nhân viên phục vụ nhiệt tình, tôi rất hài hòng , món ăn thì ngon vô địch !!!',
                'thoigian'=>$thoigian,
                'trangthai'=>1,
            ],
            ['users_id'=>2,
                'ghichu'=>'nothing',
                'noidung'=>'Nhân viên phục vụ nhiệt tình, món ăn thì ngon bổ rẻ !!!',
                'thoigian'=>$thoigian,
                'trangthai'=>1,
            ],
            [
                'users_id'=>3,
                'ghichu'=>'nothing',
                'noidung'=>'Giá cả phải chăng, tôi rất cực kỳ hài lòng, món ăn thì ngon vô địch !!!',
                'thoigian'=>$thoigian,
                'trangthai'=>1,
            ],
            [
                'users_id'=>2,
                'ghichu'=>'nothing',
                'noidung'=>'Nhân viên thân thiện nhiệt tình , món ăn thì ngon vô địch !!!',
                'thoigian'=>$thoigian,
                'trangthai'=>1,
            ],
        ]);
        DB::table('danhmucmon')->insert([
            [
                'tendanhmuc'=>'Khai vị',
              

            ],
            [
                'tendanhmuc'=>'Món chính',
              
            ],
            [
                'tendanhmuc'=>'Đồ uống',
             
            ],
        ]);
     
        DB::table('datban')->insert([
            [
                'users_id'=>1,
                'email'=>'nhuthao@gmail.com',
                'sdt'=>'0336939453',
                'songuoi'=>'2',
                'thoigian'=>$thoigian,
                'coso'=>'CS01',
                'ghichu'=>'Tôi có thể ngồi được một chỗ có không gian ngoài trời không',
                'trangthai'=> 1,
            ],
            [
                'users_id'=>2,
                'email'=>'longgay@gmail.com',
                'sdt'=>'0336939453',
                'songuoi'=>'4',
                'thoigian'=>$thoigian,
                'coso'=>'CS01',
                'ghichu'=>'Tôi có thể ngồi một chỗ tĩnh lặng chút được không?',
                'trangthai'=> 1,
            ],
            [
                'users_id'=>3,
                'email'=>'huyanhnguyen@gmail.com',
                'sdt'=>'0336939453',
                'songuoi'=>'2',
                'thoigian'=>$thoigian,
                'coso'=>'CS01',
                'ghichu'=>'Tôi có thể mang thức ăn bên ngoài vào không?',
                'trangthai'=> 1,
            ],
            [
                'users_id'=>4,
                'email'=>'ductran@gmail.com',
                'sdt'=>'0336939453',
                'songuoi'=>'1',
                'thoigian'=>$thoigian,
                'coso'=>'CS01',
                'ghichu'=>'Tôi có thể có một chỗ yên tĩnh để chill không',
                'trangthai'=> 1,
            ],
        ]);
      
    
        DB::table('sampham')->insert([
            [
                'danhmucmon_id'=>1,
                
                'tensp'=>'Cánh gà sốt me',
                'gia'=> 98.000,
                'mieuta'=>'Fried chicken wings, tamarind sauce',
                'anh'=>'',
                'tag'=>'',
                'featured'=>1,
            ],
            [
                'danhmucmon_id'=>1,
               
                'tensp'=>'Cánh gà sóc tỏi ớt',
                'gia'=> 98.000,
                'mieuta'=>'Fried chiken wings, chili, garlic',
                'anh'=>'',
                'tag'=>'',
                'featured'=>1,
            ],
            [
                'danhmucmon_id'=>1,
               
                'tensp'=>'Bò lá lốt',
                'gia'=> 108.000,
                'mieuta'=>'Grilled marinated beef wrapped lalot leaves, herbs',
                'anh'=>'',
                'tag'=>'',
                'featured'=>1,
            ],
            [
                'danhmucmon_id'=>1,
              
                'tensp'=>'Chạo tôm bó mía',
                'gia'=> 118.000,
                'mieuta'=>'Homemade sugarcane shrimps skewers, herbs',
                'anh'=>'',
                'tag'=>'',
                'featured'=>1,
            ],
            [
                'danhmucmon_id'=>2,
               
                'tensp'=>'Gà hấp mắm nhĩ',
                'gia'=> 98.000,
                'mieuta'=>'Steamed chicken with fish, sauce, mung bean sticky rice',
                'anh'=>'',
                'tag'=>'Gà',
                'featured'=>1,
            ],
            [
                'danhmucmon_id'=>2,
             
                'tensp'=>'Cánh gà sốt me',
                'gia'=> 549.000,
                'mieuta'=>'Fried chicken wings, tamarind sauce',
                'anh'=>'',
                'tag'=>'Gà',
                'featured'=>1,
            ],
            [
                'danhmucmon_id'=>2,
               
                'tensp'=>'Gà lên mâm',
                'gia'=> 300.000,
                'mieuta'=>'Shredded chicken with herbs, spicy grilled chicken',
                'anh'=>'',
                'tag'=>'Gà',
                'featured'=>1,
            ],
            [
                'danhmucmon_id'=>2,
              
                'tensp'=>'Gà nướng ống tre',
                'gia'=> 320.000,
                'mieuta'=>'Grilled chicken in bamboo tube, wild herbs',
                'anh'=>'',
                'tag'=>'Gà',
                'featured'=>1,
            ],
            [
                'danhmucmon_id'=>2,
              
                'tensp'=>'Gà hầm thuốc bắc',
                'gia'=> 250.000,
                'mieuta'=>'Wild herbs, ginger, lotus seeds',
                'anh'=>'',
                'tag'=>'Gà',
                'featured'=>1,
            ],
            [
                'danhmucmon_id'=>2,
                
                'tensp'=>'Thịt kho tộ',
                'gia'=> 98.000,
                'mieuta'=>'Thịt ba chỉ hoàng đế',
                'anh'=>'',
                'tag'=>'Heo',
                'featured'=>1,
            ],
            [
                'danhmucmon_id'=>2,
                
                'tensp'=>'Thịt ba chỉ luộc',
                'gia'=> 60.000,
                'mieuta'=>'Thịt đều lạc mỡ',
                'anh'=>'',
                'tag'=>'Heo',
                'featured'=>1,
            ],
            [
                'danhmucmon_id'=>2,
                
                'tensp'=>'Thịt heo giả cầy',
                'gia'=> 100.000,
                'mieuta'=>'Thịt hầm nước 10h',
                'anh'=>'',
                'tag'=>'Heo',
                'featured'=>1,
            ],
            [
                'danhmucmon_id'=>2,
                
                'tensp'=>'Bò lá lốt',
                'gia'=> 189.000,
                'mieuta'=>'Grilled marinated beef wrapped lalot leaves, herbs',
                'anh'=>'',
                'tag'=>'Bò',
                'featured'=>1,
            ],
            [
                'danhmucmon_id'=>2,
                
                'tensp'=>'Bò Bít Tết',
                'gia'=> 189.000,
                'mieuta'=>'Grilled marinated beef wrapped lalot leaves, herbs',
                'anh'=>'',
                'tag'=>'Bò',
                'featured'=>1,
            ],
            [
                'danhmucmon_id'=>2,
             
                'tensp'=>'Bò Sốt vang',
                'gia'=> 189.000,
                'mieuta'=>'Quế, hồi hương, Nho, Rượu',
                'anh'=>'',
                'tag'=>'Bò',
                'featured'=>1,
            ],
            [
                'danhmucmon_id'=>2,
               
                'tensp'=>'Bún đâu mắm tôm',
                'gia'=> 50.000,
                'mieuta'=>'Bún, chả cốm, chân giò, đậu phụ rán',
                'anh'=>'',
                'tag'=>'Bún/Phở',
                'featured'=>1,
            ],

            [
                'danhmucmon_id'=>2,
                
                'tensp'=>'Phở gà',
                'gia'=> 189.000,
                'mieuta'=>'Sợi phở, quế, rau mùi, ức gà',
                'anh'=>'',
                'tag'=>'Bún/Phở',
                'featured'=>1,
            ],
            [
                'danhmucmon_id'=>2,
               
                'tensp'=>'Phở/Bún Mọc',
                'gia'=> 189.000,
                'mieuta'=>'Thịt băm mọc nhĩ, rau sống',
                'anh'=>'',
                'tag'=>'Bún/Phở',
                'featured'=>1,
            ],
            [
                'danhmucmon_id'=>2,
               
                'tensp'=>'Bún Chả',
                'gia'=> 189.000,
                'mieuta'=>'Thịt nướng, rau dưa, ớt, rau sống',
                'anh'=>'',
                'tag'=>'Bún/Phở',
                'featured'=>1,
            ],
            [
                'danhmucmon_id'=>2,
              
                'tensp'=>'Bún Cá',
                'gia'=> 50.000,
                'mieuta'=>'Cá, rau sống, nước thịt hầm',
                'anh'=>'',
                'tag'=>'Bún/Phở',
                'featured'=>1,
            ],
            [
                'danhmucmon_id'=>3,
              
                'tensp'=>'Nước dừa tươi',
                'gia'=> 30.000,
                'mieuta'=>'Fresh coconut',
                'anh'=>'',
                'tag'=>'Đồ Lạnh',
                'featured'=>1,
            ],
            [
                'danhmucmon_id'=>3,
              
                'tensp'=>'Nước cam tươi',
                'gia'=> 30.000,
                'mieuta'=>'Fresh squeezed orange juice',
                'anh'=>'',
                'tag'=>'Đồ Lạnh',
                'featured'=>1,
            ],
            [
                'danhmucmon_id'=>3,
                
                'tensp'=>'Ginger minosa',
                'gia'=> 30.000,
                'mieuta'=>'Lime, cucumber, ginger, soda',
                'anh'=>'',
                'tag'=>'Đồ Lạnh',
                'featured'=>1,
            ],
            [
                'danhmucmon_id'=>3,
               
                'tensp'=>'Trà nhiệt đới',
                'gia'=> 30.000,
                'mieuta'=>'Mango, passion fruit, honey',
                'anh'=>'',
                'tag'=>'Đồ Nóng',
                'featured'=>1,
            ],
            [
                'danhmucmon_id'=>3,
               
                'tensp'=>'Concha y Toro',
                'gia'=> 30.000,
                'mieuta'=>'Reservado Cabernet Sauvignon - Chile',
                'anh'=>'',
                'tag'=>'Đồ Nóng',
                'featured'=>1,
            ],
            [
                'danhmucmon_id'=>3,
                
                'tensp'=>'Trà hoa nhài nóng',
                'gia'=> 30.000,
                'mieuta'=>'Hoa nhài, long cúc, nhân sâm Trung',
                'anh'=>'',
                'tag'=>'Đồ Nóng',
                'featured'=>1,
            ],
            [
                'danhmucmon_id'=>3,
               
                'tensp'=>'Trà long cúc',
                'gia'=> 40.000,
                'mieuta'=>'Hoa cúc, linh chi, sâm Hàn',
                'anh'=>'',
                'tag'=>'Đồ Nóng',
                'featured'=>1,
            ],
            [
                'danhmucmon_id'=>3,
              
                'tensp'=>'Trà nhài long nhãn',
                'gia'=> 45.000,
                'mieuta'=>'Hoa nhài, hoa đậu biếc sấy khô, nhãn long hàm',
                'anh'=>'',
                'tag'=>'Đồ Nóng',
                'featured'=>1,
            ],



        ]);
       
        DB::table('tintuc')->insert([
            [
                'tieude'=>'Tận Hưởng Ưu Đãi Giờ Vàng Cùng Ngàn Món Ngon Tại VMMS',
                'users_id'=>1,
                'thoigian'=>$thoigian,
                'noidung'=>'Cùng hội ngộ sum vầy những ngày đầu năm trong không gian hiện đại, mang dấu ấn...',
                'anh'=>'img-blog1.png',
                'ghichu'=>'',
                'trangthai'=>1,
            ],
           
            [
                'tieude'=>'Hướng dẫn cách làm cua cà ri kiểu Ấn Độ mới lạ cực ngon',
                'users_id'=>1,
                'thoigian'=>$thoigian,
                'noidung'=>'Cà ri một món ăn hấp dẫn có xuất xứ từ Ấn Độ đã được biến tấu thành nhiều món độc...',
                'anh'=>'img-blog2.png',
                'ghichu'=>'',
                'trangthai'=>1,
            ],
            [
                'tieude'=>'VMMS đón chào quý khách với công suất tối đa',
                'users_id'=>2,
                'thoigian'=>$thoigian,
                'noidung'=>'VMMS đã quay trở lại đón tiếp các khách hàng ở tất cả các chi nhánh trên địa bàn Hà...',
                'anh'=>'img-blog3.png',
                'ghichu'=>'',
                'trangthai'=>1,
            ],
            [
                'tieude'=>'Tái hiện mâm cơm truyền thống trong set ẩm thực mới',
                'users_id'=>3,
                'thoigian'=>$thoigian,
                'noidung'=>'Bếp trưởng VMMS kết hợp với các đầu bếp khác đã cùng nhau cải biên lại các món ăn...',
                'anh'=>'img-blog4.png',
                'ghichu'=>'',
                'trangthai'=>1,
            ],
            [
                'tieude'=>'VMMS Trần Nhân Tông - Chúc mừng khai trương cơ sở mới',
                'users_id'=>1,
                'thoigian'=>$thoigian,
                'noidung'=>'Hệ thống nhà hàng VMMS vừa khai trương cơ sở mới tại số 99 Trần Nhân Tông, Hai Bà...',
                'anh'=>'img-blog5.png',
                'ghichu'=>'',
                'trangthai'=>1,
            ],
            [
                'tieude'=>'Những địa điểm ăn uống tấp nập ở Hà Nội bạn nên thử',
                'users_id'=>4,
                'thoigian'=>$thoigian,
                'noidung'=>'Sau giờ tan tầm các đoạn đường trung tâm Hà Nội như khoác lên mình bộ áo mới hào...',
                'anh'=>'img-blog6.png',
                'ghichu'=>'',
                'trangthai'=>1,
            ],
        ]);
     
        DB::table('thuvienanh')->insert([
            [
            'tieude'=>'KHÔNG GIAN',
            'path'=>'photo1.jpg',
            ],
            [
                'tieude'=>'KHÔNG GIAN',
                'path'=>'photo2.jpg',
            ],
            [
                'tieude'=>'KHÔNG GIAN',
                'path'=>'photo3.jpg',
            ],
            [
                'tieude'=>'KHÔNG GIAN',
                'path'=>'photo4.jpg',
            ],
            [
                'tieude'=>'KHÔNG GIAN',
                'path'=>'photo5.jpg',
            ],
            [
                'tieude'=>'KHÔNG GIAN',
                'path'=>'photo6.jpg',
            ],
        ]);
        DB::table('admin')->insert([
            [
            'email_admin'=>'nhuthao@gmail.com',
            'password_admin'=>'123456',
            'avatar_admin'=>'thaonhu.jpg',
            'name_admin'=>'Thao Nhu',
            'phone_admin'=>'0336939453',

            ],
            [
                'email_admin'=>'tungduc@gmail.com',
                'password_admin'=>'123456',
                'avatar_admin'=>'thaonhu.jpg',
                'name_admin'=>'Tung Duc',
                'phone_admin'=>'0336939453',
    
                ],
                [
                    'email_admin'=>'david@gmail.com',
                    'password_admin'=>'123456',
                    'name_admin'=>'David Tran',
                    'avatar_admin'=>'thaonhu.jpg',
                    'phone_admin'=>'0336939453',
        
                    ],
        ]);
        DB::table('lienhe')->insert([
            [
            'tieude'=>'VMMS2 Ha Noi HaiBaChung',
            'diachi'=>'197 Hoang Mai,  Hai Ba Trung, Ha Noi',
            'giomo'=>'08:00 - 23:00',
            'dienthoai'=>'0336939453',

            ],
            [
                'tieude'=>'VMMS2 To Vinh Dien',
                'diachi'=>'35 To Vinh Dien, Khuong Trung, Ha noi',
                'giomo'=>'08:00 - 23:00',
                'dienthoai'=>'0336939453',
    
                ],
                [
                    'tieude'=>'VMMS2 To Huu, Cau Giay, Ha Noi',
                    'diachi'=>'35 To Huu, Cau Giay, Ha Noi',
                    'giomo'=>'08:00 - 23:00',
                    'dienthoai'=>'0336939453',
        
                    ],
        ]);
    }
}
